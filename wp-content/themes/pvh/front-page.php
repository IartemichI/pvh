<?php
/*
Template Name: Home
Template Post Type: page
*/
?>

<?php get_header(); ?>
<article class="home-item hero">
    <div class="hero__left">
        <h1 class="hero__title main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'hero_title') ?></h1>
        <section class="hero__list">
            <?php
            $hero_tabs = carbon_get_post_meta(get_the_ID(), 'hero_tabs');
            if (isset($hero_tabs)) {
                foreach ($hero_tabs as $tab) {
                    ?>
                    <article class="hero__parallelogram submain-font ">
                        <div class="hero__service">
                            <span class="hero__circle"></span><?php echo $tab['name']; ?>
                        </div>
                    </article>
                    <?php
                }
            }
            ?>
        </section>
        <button class="hero__btn main-btn main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'hero_btn') ?></button>
    </div>
    <div class="hero__right">
        <div class="hero__image parallelogram">
            <div class="hero__overlay"></div>
            <img src="<?php echo carbon_get_post_meta(get_the_ID(), 'hero_image'); ?>"
                 alt="hero image">
        </div>
    </div>
</article>


<?php
$products_grid = carbon_get_post_meta(get_the_ID(), 'home_product_grid');
if (isset($products_grid)) {
    ?>
    <section id="home-production" class="home-item product-grid">
        <?php
        foreach ($products_grid as $product) {
            ?>
            <article class="product">
                <div class="product__image">
                    <img src="<?php echo $product['image']; ?>"
                         alt="product grid">
                </div>
                <div class="product__info">
                    <h3 class="product__title main-font"><?php echo $product['title']; ?></h3>
                    <div class="product__description submain-font">
                        <div class="product__text"><?php echo $product['description'] ?></div>
                        <a href="<?php echo $product['link'] ?>"
                           class="product__more"><?php echo $product['link_text'] ?> &rarr;</a>
                    </div>
                    <button class="product__btn main-font main-btn"><?php echo $product['btn_text'] ?></button>
                </div>
            </article>

            <?php
        }
        ?>
    </section>
<?php } ?>
<?php
$price_items = carbon_get_post_meta(get_the_ID(), 'home_price_values');
if (isset($price_items)) {
    ?>
    <section id="home-price" class="home-item price">
        <h2 class="price__title main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'home_price_title'); ?></h2>
        <div class="price__info">
            <div class="price__left">
                <div class="price__image parallelogram-reverse">
                    <img src="<?php echo carbon_get_post_meta(get_the_ID(), 'home_price_image') ?>"
                         alt="price home">
                </div>
            </div>

            <div class="price__right">
                <?php
                foreach ($price_items as $item) { ?>
                    <article class="price__item parallelogram-reverse">
                        <div class="price__name-gr">
                            <h3 class="price__name main-font"><?php echo $item['name']; ?></h3>
                            <div class="price__dots"></div>
                            <span class="price__value main-font">от <?php echo $item['price']; ?> р.</span>
                        </div>
                        <div class="price__description submain-font"><?php echo $item['description']; ?></div>
                    </article>
                <?php }
                ?>
            </div>
        </div>
        <div class="price__bottom">
            <button class="price__btn main-font main-btn"><?php echo carbon_get_post_meta(get_the_ID(), 'home_btn_text'); ?></button>
        </div>

    </section>
<?php } ?>
<section class="home-item">
    <?php echo do_shortcode('[contact-form-7 id="252" title="Опрос"]'); ?>
    <?php // echo get_template_part('non-active-template-parts/quiz'); ?>
</section>
<?php
$steps = carbon_get_post_meta(get_the_ID(), 'home_steps');
if (isset($steps)) {
    ?>
    <section id="home-steps" class="steps home-item">
        <h2 class="steps__title main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'home_steps_title') ?></h2>
        <section class="steps__body">
            <?php foreach ($steps as $step) {
                ?>
                <article class="steps__item">
                    <div class="steps__icon">
                        <div class="steps__semicircle"></div>
                        <div class="steps__image"><img
                                    src="<?php echo $step['image'] ?>"
                                    alt="step 1"></div>
                    </div>
                    <div class="steps__name main-font"><?php echo $step['title'] ?></div>
                    <div class="steps__subtitle  submain-font"><?php echo $step['subtitle'] ?></div>
                </article>
                <?php
            } ?>
        </section>
    </section>
    <?php
}
?>

<div id="home-slider" class="home-item">
    <?php the_slider(); ?>
</div>


<section id="home-desc" class="home-item home-description submain-font">
    <?php echo carbon_get_post_meta(get_the_ID(), 'home_description') ?>
</section>

<div id="home-contact" class="home-item">
    <?php the_map(); ?>
</div>
<script>

</script>
<?php get_footer(); ?>

