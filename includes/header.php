<?php
/** expects: $site, $currentPage (key of nav), $pageTitle */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle) ?> · <?= e(SITE_NAME) ?></title>
    <meta name="description" content="Portfolio of Yves Jerico Repayo (TCsM): student, video editor and aspiring game developer.">
    <meta name="theme-color" content="#242024">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/init.js"></script>
</head>
<body class="page-<?= e($currentPage) ?>">
    <div class="scanlines"></div>
    <div class="starfield"></div>
    <div class="bg-animated-box" aria-hidden="true">
        <div></div><div></div><div></div><div></div><div></div>
        <div></div><div></div><div></div><div></div><div></div>
    </div>
    <div class="container">
        <header class="main-site-header">
            <div class="logo-container">
                <a href="index.php"><img src="images/logo.png" alt="TCsM logo"></a>
                <h1><a href="index.php">TCsM</a></h1>
            </div>

            <button class="header-nav-toggle" id="navToggle" aria-controls="headerNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span><span></span><span></span>
            </button>

            <nav class="header-nav" id="headerNav" aria-label="Main">
                <ul>
<?php foreach ($site['nav'] as $key => [$label, $href]): ?>
                    <li><a href="<?= e($href) ?>" class="nav-link<?= $key === $currentPage ? ' active' : '' ?>"<?= $key === $currentPage ? ' aria-current="page"' : '' ?>><?= e($label) ?></a></li>
<?php endforeach; ?>
                </ul>
            </nav>
        </header>
        <main>
