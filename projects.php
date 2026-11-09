<?php
declare(strict_types=1);
require __DIR__ . '/includes/bootstrap.php';

$currentPage = 'projects';
$pageTitle   = 'Missions';
$projects    = require __DIR__ . '/data/projects.php';
$cats        = $projects['categories'];
$items       = $projects['items'];

require __DIR__ . '/includes/header.php';
?>
            <div class="main-page-hero-banner">
                <div class="main-page-hero-frame"><p>Missions Log</p></div>
            </div>

            <?php section_head('01', 'Mission Log', 'gold'); ?>

            <div class="main-missions-filter" role="group" aria-label="Filter missions by category">
<?php foreach ($cats as $key => $label): ?>
                <button type="button" class="main-missions-filter-btn<?= $key === 'all' ? ' active' : '' ?>" data-filter="<?= e($key) ?>"><?= e($label) ?></button>
<?php endforeach; ?>
            </div>

            <div class="main-missions-grid" id="missionsGrid">
<?php foreach ($items as $i => $m): $n = pad($i + 1); ?>
                <a href="#mission-<?= $n ?>" class="main-missions-card<?= !empty($m['span']) ? ' span-2' : '' ?>" data-category="<?= e($m['cat']) ?>">
                    <div class="main-missions-card-top">
                        <span class="main-missions-card-id">DESIGNATION <?= $n ?></span>
                        <span class="main-missions-card-cat"><?= e($cats[$m['cat']] ?? $m['cat']) ?></span>
                    </div>
                    <h3><?= e($m['title']) ?></h3>
                    <p><?= e($m['short']) ?></p>
                    <div class="main-missions-card-stack">
<?php foreach ($m['stack'] as $tech): ?>
                        <span><?= e($tech) ?></span>
<?php endforeach; ?>
                    </div>
                </a>
<?php endforeach; ?>
            </div>

<?php foreach ($items as $i => $m): $n = pad($i + 1); ?>
            <div id="mission-<?= $n ?>" class="main-missions-modal" role="dialog" aria-modal="true" aria-label="<?= e($m['title']) ?>">
                <a href="#missions-closed" class="main-missions-modal-backdrop" aria-label="Close" tabindex="-1"></a>
                <div class="main-missions-modal-content">
                    <a href="#missions-closed" class="main-missions-modal-close" aria-label="Close">&times;</a>
                    <div class="main-missions-modal-scroll">
                    <span class="main-missions-modal-cat"><?= e($cats[$m['cat']] ?? $m['cat']) ?></span>
                    <h2><?= e($m['title']) ?></h2>
                    <div class="main-missions-modal-media">
<?php if ($m['media']['type'] === 'youtube'): ?>
                        <?= youtube_embed($m['media']['id'], $m['media']['title']) ?>
<?php else: ?>
                        <img src="<?= e($m['media']['src']) ?>" alt="<?= e($m['media']['alt']) ?>" loading="lazy">
<?php endif; ?>
                    </div>
                    <p class="main-missions-modal-date"><?= e($m['date']) ?></p>
                    <p><?= e($m['body']) ?></p>
                    <div class="main-missions-modal-stack">
<?php foreach ($m['stack'] as $tech): ?>
                        <span><?= e($tech) ?></span>
<?php endforeach; ?>
                    </div>
                    <div class="main-missions-modal-links">
<?php foreach ($m['links'] as [$label, $url]): ?>
                        <a href="<?= e($url) ?>" target="_blank" rel="noopener"><?= e($label) ?></a>
<?php endforeach; ?>
                    </div>
                    </div>
                </div>
            </div>
<?php endforeach; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
