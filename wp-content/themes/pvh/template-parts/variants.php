<section class="variants">
    <h2 class="variants__title main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'single_variants_title') ?></h2>
    <div class="variants__body">
        <?php

        $variants = carbon_get_post_meta(get_the_ID(), 'single_variants_items');
        foreach ($variants as $variant) { ?>
            <article class="variants__item">
                <div class="variants__image">
                    <img src="<?php echo $variant['image']; ?>" alt="variant image">
                </div>
                <div class="variants__info">
                    <h3 class="variants__name main-font"><?php echo $variant['name']; ?></h3>
                    <div class="variants__desc submain-font"><?php echo $variant['text'] ?></div>
                </div>
            </article>
        <?php } ?>
    </div>
</section>
