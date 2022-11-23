<section class="single-construction">
    <h2 class="single-construction__title main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'single_construction_title') ?></h2>
    <div class="single-construction__body">
        <div class="single-construction__image parallelogram-reverse">
            <img src="<?php echo carbon_get_post_meta(get_the_ID(), 'single_construction_image') ?>"
                 alt="image single-construction">
        </div>
        <div class="single-construction__desc submain-font">
            <?php echo carbon_get_post_meta(get_the_ID(), 'single_construction_desc') ?>
        </div>
    </div>
    <div class="single-construction__bottom-text submain-font">
        <?php echo carbon_get_post_meta(get_the_ID(), 'single_construction_bottom') ?>
    </div>
</section>