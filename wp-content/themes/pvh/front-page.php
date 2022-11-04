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
    <section class="home-item product-grid">
        <?php
        foreach ($products_grid as $product) {
            ?>
            <article class="product-grid__item">
                <div class="product-grid__image">
                    <img src="<?php echo $product['image']; ?>"
                         alt="product grid">
                </div>
                <div class="product-grid__info">
                    <h2 class="product-grid__title main-font"><?php echo $product['title']; ?></h2>
                    <div class="product-grid__description submain-font">
                        <div class="product-grid__text"><?php echo $product['description'] ?></div>
                        <a href="<?php echo $product['link'] ?>"
                           class="product-grid__more"><?php echo $product['link_text'] ?> &rarr;</a>
                    </div>
                    <button class="product-grid__btn main-font main-btn"><?php echo $product['btn_text'] ?></button>
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
    <section class="home-item price">
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
<section class="cost-calc home-item">
    <h2 class="cost-calc__title main-font">Расчет стоимости</h2>
    <div class="cost-calc__quiz">
        <div class="main-quiz">
            <div class="main-quiz__left">
                <div class="main-quiz__item">
                    <div class="main-quiz__info">
                        <div class="main-quiz__image">
                            <img src="<?php echo get_template_directory_uri() . '/assets/temp_images/quiz.png'; ?>"
                                 alt="">
                        </div>
                        <div class="main-quiz__overlay"></div>
                        <div class="main-quiz__title main-font">ПВХ завесы</div>
                    </div>
                    <div class="main-quiz__checkbox">
                        <div class="main-quiz__circle"></div>
                    </div>
                </div>
                <div class="main-quiz__item">
                    <div class="main-quiz__info">
                        <div class="main-quiz__image">
                            <img src="<?php echo get_template_directory_uri() . '/assets/temp_images/quiz.png'; ?>"
                                 alt="">
                        </div>
                        <div class="main-quiz__overlay"></div>
                        <div class="main-quiz__title main-font">ПВХ завесы</div>
                    </div>
                    <div class="main-quiz__checkbox">
                        <div class="main-quiz__circle"></div>
                    </div>
                </div>
                <div class="main-quiz__item">
                    <div class="main-quiz__info">
                        <div class="main-quiz__image">
                            <img src="<?php echo get_template_directory_uri() . '/assets/temp_images/quiz.png'; ?>"
                                 alt="">
                        </div>
                        <div class="main-quiz__overlay"></div>
                        <div class="main-quiz__title main-font">ПВХ завесы</div>
                    </div>
                    <div class="main-quiz__checkbox">
                        <div class="main-quiz__circle"></div>
                    </div>
                </div>
            </div>
            <div class="main-quiz__right">
                <div class="quiz-status-bar">
                    <div class="quiz-status-bar__line"></div>
                    <div class="quiz-status-bar__toddler">
                        <div class="quiz-status-bar__circle"></div>
                    </div>
                    <div class="quiz-status__line"></div>
                </div>
                <h2 class="main-quiz__question main-font">Что считаем?</h2>
                <button class="main-btn btn main-font main-quiz__btn">далее</button>
            </div>
        </div>
    </div>
</section>
<?php
$steps = carbon_get_post_meta(get_the_ID(), 'home_steps');
if (isset($steps)) {
    ?>
    <section class="steps home-item">
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
                    <div class="steps__name main-font"><?php echo $step['title'] ?>></div>
                    <div class="steps__subtitle  submain-font"><?php echo $step['subtitle'] ?></div>
                </article>
                <?php
            } ?>
        </section>
    </section>
    <?php
}
?>

<section class="home-item portfolio">
    <h2 class="portfolio__title main-font">
        <?php echo carbon_get_post_meta(get_the_ID(), 'home_slider_portfolio_title'); ?>
    </h2>
    <div class="portfolio__gr-btn">
        <button class="portfolio__btn btn main-font submain-btn">ПВХ завесы</button>
        <button class="portfolio__btn btn main-font submain-btn">ПВХ Шторы</button>
        <button class="portfolio__btn btn main-font submain-btn">Маятниковые двери</button>
    </div>
    <div class="portfolio__body">

        <div class="portfolio__slider-main">
            <?php
            $sliders_pvh = carbon_get_post_meta(get_the_ID(), 'home_slider_portfolio_pvh'); ?>
            <div class="portfolio__wrapper swiper-wrapper">
                <?php
                foreach ($sliders_pvh as $slider) { ?>
                    <div class="portfolio__slide swiper-slide ">
                        <img src="<?php echo $slider['image']; ?>"
                             alt="slider pvh">
                    </div>
                <?php } ?>
            </div>

        </div>
        <div class="portfolio__button-prev">
            <div class="portfolio__ellipse">
                <div class="portfolio__arrow">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/portfolio_arrow.png'; ?>"
                         alt="arrow slider">
                </div>
            </div>
        </div>
        <div class="portfolio__button-next">
            <div class="portfolio__ellipse">
                <div class="portfolio__arrow">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/portfolio_arrow.png'; ?>"
                         alt="arrow slider">
                </div>
            </div>

        </div>
    </div>
    <div class="portfolio__slider-submain">
        <div class="portfolio__wrapper swiper-wrapper">
            <?php foreach ($sliders_pvh as $slider) { ?>
                <div class="portfolio__slide swiper-slide">
                    <img src="<?php echo $slider['image'] ?>"
                         alt="">
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="portfolio__pagination">
    </div>


    <section class="home-item home-description submain-font">
        <?php echo carbon_get_post_meta(get_the_ID(), 'home_description') ?>
    </section>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".portfolio__slider-submain", {
            loop: true,
            spaceBetween: 30,
            slidesPerView: 3,
            freeMode: true,
            watchSlidesProgress: true,
        });
        const swiper2 = new Swiper(".portfolio__slider-main", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".portfolio__button-next",
                prevEl: ".portfolio__button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
            pagination: {
                el: ".portfolio__pagination",
            },
        });
    </script>
</section>
<section class="map home-item">
    <div class="map__wrapper">
        <div class="contact-map">
            <div class="contact-map__title main-font">
                <?php echo carbon_get_post_meta(get_the_ID(), 'home_map_contact_title') ?></div>
            <div class="contact-map__line">
            </div>
            <article class="contact-map__item">
                <div class="contact-map__icon">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/contact_phone.png' ?>"
                         alt="phone icon">
                </div>
                <a href="tel:<?php echo str_replace(" ", "", carbon_get_post_meta(get_the_ID(), 'home_map_contact_phone')); ?>"
                   class="contact-map__value main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'home_map_contact_phone') ?></a>
            </article>
            <article class="contact-map__item">
                <div class="contact-map__icon">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/contact_mail.png' ?>"
                         alt="phone icon">
                </div>
                <a href="mailto:<?php echo str_replace(" ", "", carbon_get_post_meta(get_the_ID(), 'home_map_contact_mail')); ?>"
                   class="contact-map__value main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'home_map_contact_mail'); ?></a>
            </article>
            <article class="contact-map__item">
                <div class="contact-map__icon">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/contact_ballun.png' ?>"
                         alt="phone icon">
                </div>
                <div class="contact-map__gr-value">
                    <a href=""
                       class="contact-map__value main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'home_map_contact_city') ?>
                    </a>
                    <a href=""
                       class="contact-map__subvalue main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'home_map_contact_address') ?></a>
                </div>
            </article>
        </div>
        <div class="map__body">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab32f1aea52841f3d4a179bec0a815e9c5f3c65e4e1d47550f1e6b99902b3b358&amp;source=constructor"
                    width="532" height="600" frameborder="0"></iframe>
        </div>
    </div>
</section>
<script>

</script>
<?php get_footer(); ?>

