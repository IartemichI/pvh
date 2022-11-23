<section class="map">
    <div class="map__wrapper">
        <div class="contact-map">
            <div class="contact-map__title main-font">
                <?php echo carbon_get_theme_option('map_contact_title') ?></div>
            <div class="contact-map__line">
            </div>
            <article class="contact-map__item">
                <div class="contact-map__icon">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/contact_phone.png' ?>"
                         alt="phone icon">
                </div>
                <a href="tel:<?php echo str_replace(" ", "", carbon_get_theme_option('map_contact_phone')); ?>"
                   class="contact-map__value main-font"><?php echo carbon_get_theme_option('map_contact_phone'); ?></a>
            </article>
            <article class="contact-map__item">
                <div class="contact-map__icon">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/contact_mail.png' ?>"
                         alt="phone icon">
                </div>
                <a href="mailto:<?php echo str_replace(" ", "", carbon_get_theme_option('map_contact_mail')); ?>"
                   class="contact-map__value main-font"><?php echo carbon_get_theme_option('map_contact_mail'); ?></a>
            </article>
            <article class="contact-map__item">
                <div class="contact-map__icon">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/contact_ballun.png' ?>"
                         alt="phone icon">
                </div>
                <div class="contact-map__gr-value">
                    <a href=""
                       class="contact-map__value main-font"><?php echo carbon_get_theme_option('map_contact_city') ?>
                    </a>
                    <a href=""
                       class="contact-map__subvalue main-font"><?php echo carbon_get_theme_option('map_contact_address') ?></a>
                </div>
            </article>
        </div>
        <div class="map__body">
            <?php echo carbon_get_theme_option('map_frame'); ?>
        </div>
    </div>
</section>