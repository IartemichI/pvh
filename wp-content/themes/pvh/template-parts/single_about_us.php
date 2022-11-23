<section class="single-about-us">
    <div class="single-about-us__body">
        <div class="single-about-us__info">
            <h3 class="single-about-us__title main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'single_about_us_title'); ?></h3>
            <div class="single-about-us__desc submain-font">
                <?php echo carbon_get_post_meta(get_the_ID(), 'single_about_us_desc'); ?>
            </div>
            <div class="single-about-us__btn main-btn btn main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'single_about_us_btn_text'); ?></div>
        </div>
        <div class="single-about-us__image parallelogram">
            <img src="<?php echo carbon_get_post_meta(get_the_ID(), 'single_about_us_image'); ?>" alt="image about us">
        </div>
    </div>
</section>