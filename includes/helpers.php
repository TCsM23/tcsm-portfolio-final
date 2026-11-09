<?php
declare(strict_types=1);

/** escape for HTML output. */
function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** zero-padded id like "07". */
function pad(int $n): string
{
    return str_pad((string) $n, 2, '0', STR_PAD_LEFT);
}

/** render a section header (used on every page). $tone: red | gold | blue */
function section_head(string $id, string $title, string $tone = 'red'): void
{
    echo '<div class="main-section-header ' . e($tone) . '">'
       . '<span class="main-section-header-id">' . e($id) . '</span>'
       . '<h2>' . e($title) . '</h2>'
       . '<span class="main-section-header-rule"></span>'
       . '</div>';
}

/** render a YouTube embed (privacy-friendly domain). */
function youtube_embed(string $id, string $title): string
{
    return '<iframe src="https://www.youtube-nocookie.com/embed/' . e($id) . '" title="' . e($title) . '" loading="lazy" '
         . 'allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" '
         . 'referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
}

/** session CSRF token. */
function csrf_token(): string
{
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf'];
}

/** one-time flash message: set with flash('ok','text'), read with flash(). */
function flash(?string $type = null, ?string $msg = null): ?array
{
    if ($type !== null) {
        $_SESSION['flash'] = ['type' => $type, 'msg' => $msg];
        return null;
    }
    $f = $_SESSION['flash'] ?? null;
    unset($_SESSION['flash']);
    return $f;
}
