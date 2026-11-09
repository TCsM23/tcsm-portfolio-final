<?php
declare(strict_types=1);
require __DIR__ . '/includes/bootstrap.php';

$currentPage = 'contact';
$pageTitle   = 'Transmit';
$flash       = flash();
$old         = $_SESSION['old'] ?? ['name' => '', 'email' => '', 'message' => ''];
unset($_SESSION['old']);

require __DIR__ . '/includes/header.php';
?>
            <div class="main-page-hero-banner">
                <div class="main-page-hero-frame"><p>Transmit Your Message</p></div>
            </div>

            <div class="main-transmit-container">
                <?php section_head('01', 'Open Transmission', 'blue'); ?>

                <div class="main-transmit-flex">
                    <div class="main-transmit-picture">
                        <img src="images/yjr.png" alt="Yves Jerico Repayo">
                    </div>

                    <form class="main-transmit-form" action="send.php" method="post" id="transmitForm"
                          data-emailjs-key="aI14LXH9_lJrPbSQ5"
                          data-emailjs-service="service_j9t3wna"
                          data-emailjs-template="template_q4x6tth" novalidate>
                        <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
                        <!-- honeypot, real visitors never see or fill this -->
                        <div class="main-transmit-trap" aria-hidden="true">
                            <label for="website">Leave this empty</label>
                            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="main-transmit-input-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your name" maxlength="100" value="<?= e($old['name']) ?>" required>
                        </div>
                        <div class="main-transmit-input-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="you@example.com" maxlength="150" value="<?= e($old['email']) ?>" required>
                        </div>
                        <div class="main-transmit-input-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" placeholder="Transmit your message..." maxlength="3000" required><?= e($old['message']) ?></textarea>
                        </div>
                        <button type="submit" class="main-transmit-submit-btn" id="transmitSubmitBtn">Send Transmission</button>
                        <p class="main-transmit-status<?= $flash ? ' ' . e($flash['type']) : '' ?>" id="transmitStatus" role="status"><?= $flash ? e($flash['msg']) : '' ?></p>
                    </form>

                    <div class="main-transmit-info">
                        <h3>Direct Channels</h3>
                        <p><a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a></p>
                        <p><a href="https://facebook.com/yvesjerico.repayo" target="_blank" rel="noopener">facebook.com/yvesjerico.repayo</a></p>
                        <p><a href="https://github.com/TCsM23" target="_blank" rel="noopener">github.com/TCsM23</a></p>
                        <p><a href="<?= e($site['youtube']['url']) ?>" target="_blank" rel="noopener">youtube.com/@tcsm0023</a></p>
                        <p><a href="https://linkedin.com/in/yves-jerico-repayo-72a593444/" target="_blank" rel="noopener">linkedin.com/in/yves-jerico-repayo-72a593444/</a></p>
                    
                        <a href="<?= e($site['resume'][0]) ?>" class="main-transmit-info-resume-btn" download>
                            <?= e($site['resume'][1]) ?>
                        </a>
                    </div>
                </div>
            </div>
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<?php require __DIR__ . '/includes/footer.php'; ?>
