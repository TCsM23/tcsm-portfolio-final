<?php
declare(strict_types=1);
require __DIR__ . '/includes/bootstrap.php';

/* handles the contact form. POST only; always redirects back (Post/Redirect/Get). */

function back(string $type, string $msg): never
{
    flash($type, $msg);
    header('Location: contact.php#transmitStatus', true, 303);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Location: contact.php', true, 303);
    exit;
}

// CSRF
$token = $_POST['csrf'] ?? '';
if (!is_string($token) || !hash_equals($_SESSION['csrf'] ?? '', $token)) {
    back('error', 'TRANSMISSION REJECTED — SESSION EXPIRED. RELOAD AND TRY AGAIN.');
}

// honeypot, pretend success so bots learn nothing
if (!empty($_POST['website'])) {
    back('success', 'TRANSMISSION SENT — STAND BY FOR REPLY.');
}

// simple rate limit, one message per 30 s per session
if (isset($_SESSION['last_sent']) && time() - $_SESSION['last_sent'] < 30) {
    back('error', 'RECHARGING — WAIT A MOMENT BEFORE SENDING AGAIN.');
}

// validate, strip CR/LF from single-line fields to block header injection
$clean = static fn(mixed $v): string => trim((string) preg_replace('/[\r\n]+/', ' ', (string) $v));
$name    = $clean($_POST['name'] ?? '');
$email   = $clean($_POST['email'] ?? '');
$message = trim((string) ($_POST['message'] ?? ''));

$_SESSION['old'] = ['name' => $name, 'email' => $email, 'message' => $message];

if ($name === '' || mb_strlen($name) > 100) {
    back('error', 'NAME REQUIRED (MAX 100 CHARACTERS).');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 150) {
    back('error', 'ENTER A VALID EMAIL ADDRESS.');
}
if ($message === '' || mb_strlen($message) > 3000) {
    back('error', 'MESSAGE REQUIRED (MAX 3000 CHARACTERS).');
}

// log every valid transmission so nothing is lost if mail() is unavailable
$logDir = dirname(LOG_FILE);
if (!is_dir($logDir)) {
    @mkdir($logDir, 0750, true);
}
$entry = sprintf("[%s] %s <%s>\n%s\n----\n", date('c'), $name, $email, $message);
$logged = @file_put_contents(LOG_FILE, $entry, FILE_APPEND | LOCK_EX) !== false;

// send mail
$subject = 'New Transmission from ' . $name;
$body    = "Name: $name\nEmail: $email\n\n$message\n";
$headers = [
    'From'         => MAIL_FROM,
    'Reply-To'     => $email,
    'Content-Type' => 'text/plain; charset=UTF-8',
    'X-Mailer'     => 'PHP/' . PHP_VERSION,
];
$mailed = @mail(MAIL_TO, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, $headers);

if ($mailed) {
    $_SESSION['last_sent'] = time();
    unset($_SESSION['old']);
    back('success', 'TRANSMISSION SENT — STAND BY FOR REPLY.');
}
if ($logged) {
    $_SESSION['last_sent'] = time();
    back('error', 'SAVED, BUT EMAIL RELAY IS DOWN — PLEASE EMAIL ME DIRECTLY.');
}
back('error', 'TRANSMISSION FAILED — TRY AGAIN.');