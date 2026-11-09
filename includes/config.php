<?php
declare(strict_types=1);

/** site-wide settings. edit the mail address / SMTP notes here. */
const SITE_NAME   = 'YJR / TCsM';
const SITE_YEAR   = 2026;
const MAIL_TO     = 'yvesjericorepayo@gmail.com';
const MAIL_FROM   = 'no-reply@localhost';   // change to an address on your host's domain when deployed
const LOG_FILE    = __DIR__ . '/../storage/transmissions.log';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
