<?php
declare(strict_types=1);
require __DIR__ . '/includes/bootstrap.php';

$currentPage = 'index';
$pageTitle   = 'Home';
$projects    = require __DIR__ . '/data/projects.php';
$about       = require __DIR__ . '/data/about.php';

$stats = [
    ['Missions Logged',  count($projects['items'])],
    ['Bounties Claimed', count($site['claimed'])],
    ['Certificates',     count($about['certificates'])],
    ['Active Bounties',  count($site['ongoing'])],
];
$claimedCount = count($site['claimed']);

require __DIR__ . '/includes/header.php';
?>
            <div class="main-home-hero-banner">
                <div class="main-home-hero-frame">
                    <p class="main-home-hero-tag">Bounty Hunter Identified</p>
                    <h1 class="main-home-hero-title" data-text="TCsM">TCsM</h1>
                    <div class="hero-actions">
                        <a href="projects.php" class="btn">View Missions</a>
                        <a href="contact.php" class="btn ghost">Open Transmission</a>
                    </div>
                </div>
            </div>

            <div class="scroll-cue">
                <span>DESCEND</span>
                <span class="line"></span>
            </div>

            <section class="demo-reel reveal">
                <?= youtube_embed($site['hero_reel'][0], $site['hero_reel'][1]) ?>
            </section>

            <?php section_head('01', 'Bounty Hunter Log'); ?>
            <div class="main-container">
                <section class="home-content">
                    <h2><?= e($site['intro']['greeting']) ?></h2>
                    <p id="paragraph-1"><?= e($site['intro']['line1']) ?></p>
                    <p id="paragraph-name"><?= e($site['intro']['name']) ?></p>
                    <p id="paragraph-2"><?= e($site['intro']['roles']) ?></p>
                    <p id="paragraph-3"><?= e($site['intro']['motto']) ?></p>
                </section>
                <section class="picture">
                    <img src="images/yvesjerico.png" alt="Yves Jerico Repayo">
                </section>
            </div>

            <?php section_head('02', 'Claimed Bounties'); ?>
            <div class="main-claimed-bounties">
                <div class="main-claimed-bounties-flex">
<?php foreach ($site['claimed'] as $i => [$title, $desc]): ?>
                    <article class="bounty-card reveal">
                        <div class="bounty-card-top">
                            <span class="bounty-id">BOUNTY <?= pad($i + 1) ?></span>
                            <span class="bounty-status">CLAIMED</span>
                        </div>
                        <h3><?= e($title) ?></h3>
                        <p><?= e($desc) ?></p>
                    </article>
<?php endforeach; ?>
                </div>
            </div>

            <?php section_head('03', 'Ongoing Bounties', 'blue'); ?>
            <div class="main-ongoing-bounties">
                <div class="main-ongoing-bounties-flex">
<?php foreach ($site['ongoing'] as $i => [$title, $desc, $pct]): ?>
                    <article class="main-ongoing-bounties-card reveal">
                        <div class="main-ongoing-bounties-card-top">
                            <span class="main-ongoing-bounties-tag">BOUNTY <?= pad($claimedCount + $i + 1) ?></span>
                            <span class="main-ongoing-bounties-status">IN PROGRESS</span>
                        </div>
                        <h3><?= e($title) ?></h3>
                        <p><?= e($desc) ?></p>
                        <div class="main-ongoing-bounties-bar" role="progressbar" aria-valuenow="<?= (int) $pct ?>" aria-valuemin="0" aria-valuemax="100">
                            <span style="width: <?= (int) $pct ?>%"></span>
                        </div>
                        <div class="main-ongoing-bounties-percent"><?= (int) $pct ?>%</div>
                    </article>
<?php endforeach; ?>
                </div>
            </div>

            <?php section_head('04', 'Transmission Feed'); ?>
            <div class="main-youtube-section">
                <div class="main-youtube-channel reveal">
                    <div class="main-youtube-channel-logo">
                        <a href="<?= e($site['youtube']['url']) ?>" target="_blank" rel="noopener">
                            <img src="images/yt-logo.png" alt="TCsM YouTube channel logo">
                        </a>
                    </div>
                    <div class="main-youtube-channel-desc">
                        <h3><?= e($site['youtube']['handle']) ?></h3>
                        <p><?= e($site['youtube']['desc']) ?></p>
                        <a href="<?= e($site['youtube']['url']) ?>" class="main-youtube-channel-btn" target="_blank" rel="noopener">Visit Channel</a>
                    </div>
                </div>
                <div class="main-youtube-videos">
<?php foreach ($site['youtube']['videos'] as [$vid, $vtitle]): ?>
                    <div class="main-youtube-video reveal"><?= youtube_embed($vid, $vtitle) ?></div>
<?php endforeach; ?>
                </div>
            </div>

            <?php section_head('05', 'Open Transmission', 'blue'); ?>
            <div class="main-contact-section">
                <div class="main-contact-panel reveal">
                    <p class="main-contact-desc"><?= e($site['contact_blurb']) ?></p>
                    <a href="contact.php" class="main-contact-email-btn">Send Transmission</a>
                    <div class="main-contact-social">
<?php foreach ($site['socials'] as [$short, $name, $url]): ?>
                        <a href="<?= e($url) ?>" aria-label="<?= e($name) ?>" target="_blank" rel="noopener"><?= e($short) ?></a>
<?php endforeach; ?>
                    </div>
                </div>
            </div>
<?php require __DIR__ . '/includes/footer.php'; ?>
