<?php
declare(strict_types=1);
require __DIR__ . '/includes/bootstrap.php';

$currentPage = 'about';
$pageTitle   = 'Loadout';
$about       = require __DIR__ . '/data/about.php';

require __DIR__ . '/includes/header.php';
?>
            <div class="main-page-hero-banner">
                <div class="main-page-hero-frame"><p>Inventory</p></div>
            </div>

            <?php section_head('01', 'Pilot Log', 'gold'); ?>
            <div class="main-about-bio reveal">
                <p><?= e($about['bio']) ?></p>
            </div>

            <?php section_head('02', 'Training Record', 'gold'); ?>
            <div class="main-about-training-list">
<?php foreach ($about['training'] as [$date, $title, $place]): ?>
                <div class="main-about-training-item reveal">
                    <span class="main-about-training-date"><?= e($date) ?></span>
                    <h3><?= e($title) ?></h3>
                    <p><?= e($place) ?></p>
                </div>
<?php endforeach; ?>
            </div>

            <?php section_head('03', 'Field Deployments', 'blue'); ?>
            <div class="main-about-deployments-list">
<?php foreach ($about['deployments'] as [$date, $title, $place]): ?>
                <div class="main-about-deployment-item reveal">
                    <span class="main-about-deployment-date"><?= e($date) ?></span>
                    <h3><?= e($title) ?></h3>
                    <p><?= e($place) ?></p>
                </div>
<?php endforeach; ?>
            </div>

            <?php section_head('04', 'Upgrades Unlocked', 'gold'); ?>
            <div class="main-about-upgrades-carousel">
                <button type="button" class="main-about-upgrades-arrow left" aria-label="Scroll left">&#10094;</button>
                <div class="main-about-upgrades-track" id="upgradesTrack" tabindex="0">
<?php foreach ($about['certificates'] as [$title, $issuer, $img, $alt]): ?>
                    <div class="main-about-upgrade-card" role="button" tabindex="0" aria-label="View <?= e($title) ?> certificate larger">
                        <div class="main-about-upgrade-img"><img src="<?= e($img) ?>" alt="<?= e($alt) ?>" loading="lazy"></div>
                        <h3><?= e($title) ?></h3>
                        <p><?= e($issuer) ?></p>
                    </div>
<?php endforeach; ?>
                </div>
                <button type="button" class="main-about-upgrades-arrow right" aria-label="Scroll right">&#10095;</button>
            </div>

            <div class="main-about-upgrade-lightbox" id="upgradeLightbox" role="dialog" aria-modal="true" aria-label="Certificate preview" hidden>
                <div class="main-about-upgrade-lightbox-content">
                    <button type="button" class="main-about-upgrade-lightbox-close" aria-label="Close">&times;</button>
                    <img class="main-about-upgrade-lightbox-img" src="" alt="">
                    <p class="main-about-upgrade-lightbox-caption"></p>
                </div>
            </div>

            <?php section_head('05', 'Intel Briefings', 'blue'); ?>
            <div class="main-about-briefings-list">
<?php foreach ($about['briefings'] as [$date, $text]): ?>
                <div class="main-about-briefing-item">
                    <span class="main-about-briefing-date"><?= e($date) ?></span>
                    <p><?= e($text) ?></p>
                </div>
<?php endforeach; ?>
            </div>

            <?php section_head('06', 'Loadout', 'gold'); ?>
            <div class="main-loadout-flex">
<?php foreach ($about['skills'] as [$name, $level]): ?>
                <div class="main-loadout-skill reveal">
                    <div class="main-loadout-skill-top">
                        <span><?= e($name) ?></span>
                        <span><?= (int) $level ?>/10 · CHARGING</span>
                    </div>
                    <div class="main-loadout-tank" role="img" aria-label="<?= e($name) ?>: <?= (int) $level ?> out of 10">
<?php for ($t = 1; $t <= 10; $t++): ?>
                        <i<?= $t <= $level ? ' class="on"' : '' ?> style="--i: <?= $t ?>"></i>
<?php endfor; ?>
                    </div>
                </div>
<?php endforeach; ?>
            </div>

            <?php section_head('07', 'Off-Duty Log', 'gold'); ?>
            <ul class="main-about-offduty">
<?php foreach ($about['offduty'] as $hobby): ?>
                <li><?= e($hobby) ?></li>
<?php endforeach; ?>
            </ul>

            <?php section_head('08', 'Current Objective', 'blue'); ?>
<?php foreach ($about['objectives'] as $obj): ?>
            <div class="main-about-objective-panel reveal"><p><?= e($obj) ?></p></div>
<?php endforeach; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
