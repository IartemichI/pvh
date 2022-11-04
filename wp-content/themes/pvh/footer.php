</section>
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__logo">
                <div class="logo">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </div>
            </div>
            <div class="footer__description submain-font">
                <?php echo carbon_get_theme_option('footer_desc_text') ?>
            </div>
            <div class="footer__geo">
                <div class="geo">
                    <div class="geo__icon">
                        <img loading="lazy"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/ballun_white.png"
                             alt="balun icon">
                    </div>
                    <div class="geo__info">
                        <a class="geo__title submain-font">Москва</a>
                        <a class="geo__subtitle submain-font">ул. Московская 13</a>
                    </div>
                </div>
            </div>
            <div class="footer__contact">
                <div class="footer__phone">
                    <div class="footer__icon"><img
                                src="<?php echo get_template_directory_uri() . '/assets/images/footer_phone.png'; ?>"
                                alt="footer phone icon"></div>
                    <a href="tel:88001234567"
                       class="footer__contact-value main-font"><?php echo carbon_get_theme_option('footer_phone') ?>
                    </a>
                </div>
                <div class="footer__mail">
                    <div class="footer__icon">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/footer_mail.png' ?>"
                             alt="footer mail icon">
                    </div>
                    <a href="mailto:zavesa@zavesa-online.ru" class="footer__contact-value main-font">
                        <?php echo carbon_get_theme_option('footer_mail') ?>
                    </a>
                </div>
            </div>
            <button class="footer__callback btn main-btn">
                <?php echo carbon_get_theme_option('footer_btn_text') ?>
            </button>
        </div>
        <div class="footer__confidential">
            <?php echo carbon_get_theme_option('footer_policy') ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>