        </main>
        <footer>
            <div class="footer-container">
                <div class="footer-top">
                    <nav class="footer-nav" aria-label="Footer">
<?php foreach ($site['nav'] as [$label, $href]): ?>
                        <a href="<?= e($href) ?>"><?= e($label) ?></a>
<?php endforeach; ?>
                    </nav>
                    <div class="footer-social">
<?php foreach ($site['socials'] as [$short, $name, $url]): ?>
                        <a href="<?= e($url) ?>" aria-label="<?= e($name) ?>" target="_blank" rel="noopener"><?= e($short) ?></a>
<?php endforeach; ?>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; <?= SITE_YEAR ?> YJR / TCsM — Transmission Log</p>
                    <p class="footer-tag">-- END OF FILE</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
