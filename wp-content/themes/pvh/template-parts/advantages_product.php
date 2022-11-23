<?php
$advantages = carbon_get_theme_option('advantage_product');
if (!empty($advantages)) {
    ?>
    <section class="advantage-product">
        <?php foreach ($advantages as $advantage) { ?>
            <article class="advantage-product__item">
                <div class="advantage-product__info">
                    <h3 class="advantage-product__title main-font"><?php echo $advantage['title']; ?></h3>
                    <div class="advantage-product__desc submain-font"><?php echo $advantage['desc']; ?></div>
                </div>
                <div class="advantage-product__image parallelogram-reverse">
                    <img src="<?php echo $advantage['image']; ?>" alt="">
                </div>
            </article>
        <?php } ?>
    </section>
<?php }