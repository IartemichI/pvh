<section class="slider">
    <h2 class="slider__title main-font">
        <?php echo carbon_get_post_meta(get_the_ID(), 'slider_title'); ?>
    </h2>
    <div class="slider__gr-btn">
        <button class="slider__btn btn main-font submain-btn">ПВХ завесы</button>
        <button class="slider__btn btn main-font submain-btn">ПВХ Шторы</button>
        <button class="slider__btn btn main-font submain-btn">Маятниковые двери</button>
    </div>
    <div class="slider__body">

        <div class="slider__main">
            <?php
            $sliders_pvh = carbon_get_theme_option('slider_pvh_veil'); ?>
            <div class="slider__wrapper swiper-wrapper">
                <?php
                foreach ($sliders_pvh as $slider_id) { ?>
                    <div class="slider__slide swiper-slide ">
                        <img src="<?php echo wp_get_attachment_url($slider_id); ?>"
                             alt="slider pvh">
                    </div>
                <?php } ?>
            </div>

        </div>
        <div class="slider__button-prev">
            <div class="slider__ellipse">
                <div class="slider__arrow">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/portfolio_arrow.png'; ?>"
                         alt="arrow slider">
                </div>
            </div>
        </div>
        <div class="slider__button-next">
            <div class="slider__ellipse">
                <div class="slider__arrow">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/portfolio_arrow.png'; ?>"
                         alt="arrow slider">
                </div>
            </div>

        </div>
    </div>
    <div class="slider__submain">
        <div class="slider__wrapper swiper-wrapper">
            <?php foreach ($sliders_pvh as $slider_id) { ?>
                <div class="slider__slide swiper-slide">
                    <img src="<?php echo wp_get_attachment_url($slider_id); ?>"
                         alt="slider image">
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="slider__pagination">
    </div>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".slider__submain", {
            loop: true,
            spaceBetween: 30,
            slidesPerView: 3,
            freeMode: true,
            watchSlidesProgress: true,
        });
        const swiper2 = new Swiper(".slider__main", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".slider__button-next",
                prevEl: ".slider__button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
            pagination: {
                el: ".slider__pagination",
            },
        });
    </script>
</section>

