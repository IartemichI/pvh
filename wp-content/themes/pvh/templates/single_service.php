<?php
/*
Template Name: Типовая страница
Template Post Type: page
*/

get_header();
$sliders = carbon_get_post_meta(get_the_ID(), 'single_service_slider');

?>
    <section class="single-service">
        <div class="single-service__top">
            <h1 class="single-service__title main-font">
                <?php the_title(); ?>
            </h1>
            <div class="single-service__desc-gr">
                <div class="single-service__left">
                    <div class="single-service__desc submain-font"><?php the_content() ?></div>
                    <?php if (empty($sliders)) {
                        ?>
                        <button class="single-service__btn btn main-btn"><?php echo carbon_get_post_meta(get_the_ID(), 'single_service_btn_text') ?></button>
                    <?php } ?>
                </div>
                <?php
                if (!empty($sliders)) {
                    ?>
                    <div class="single-service__right single-service__right_slider">
                        <div class="single-service__slider ">
                            <div class="single-service__wrapper swiper-wrapper">
                                <?php
                                foreach ($sliders as $slider_id) { ?>
                                    <div class="single-service__slide swiper-slide ">
                                        <img src="<?php echo wp_get_attachment_url($slider_id); ?>"
                                             alt="slide">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="single-slider__button-prev">
                            <div class="single-slider__ellipse">
                                <div class="single-slider__arrow">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/portfolio_arrow.png'; ?>"
                                         alt="arrow slider">
                                </div>
                            </div>
                        </div>
                        <div class="single-slider__button-next">
                            <div class="single-slider__ellipse">
                                <div class="single-slider__arrow">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/portfolio_arrow.png'; ?>"
                                         alt="arrow slider">
                                </div>
                            </div>

                        </div>
                        <button class="single-service__btn single-service__btn-2 btn main-btn"><?php echo carbon_get_post_meta(get_the_ID(), 'single_service_btn_2_text') ?></button>

                    </div>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
                    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
                    <script>
                        const service_slider = new Swiper(".single-service__slider", {
                            loop: true,
                            spaceBetween: 10,
                            navigation: {
                                nextEl: ".single-slider__button-next",
                                prevEl: ".single-slider__button-prev",
                            },
                        });
                    </script>
                <?php
                } else {
                ?>
                    <div class="single-service__right parallelogram">
                        <img src="<?php echo carbon_get_post_meta(get_the_ID(), 'single_service_image'); ?>"
                             alt="main image">
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php if (carbon_get_post_meta(get_the_ID(), 'single_subdesc_status')) {
            ?>
            <div class="single-service-item single-service__subdesc">
                <?php echo carbon_get_post_meta(get_the_ID(), 'single_subdesc_text'); ?>
            </div>
            <?php
        } ?>
        <?php if (carbon_get_post_meta(get_the_ID(), 'single_table_status')) {
            ?>
            <div class="single-service-item single-service__table">
                <table>
                    <tr>
                        <td class="main-font single-service__td-main" style="background: #D9D9D9;">Наименование</td>
                        <td class="main-font single-service__td-main" style="background: #D9D9D9;">Полотно двери</td>
                        <td class="main-font single-service__td-main" style="background: #D9D9D9;">Каркас</td>
                        <td class="main-font single-service__td-main" style="background: #D9D9D9;">Отбойник</td>
                        <td class="main-font single-service__td-main" style="background: #D9D9D9;">Уплотнитель</td>
                    </tr>
                    <tr>
                        <td class="submain-font" style="background: #D9D9D9;">Характеристики базовой комплектации
                            дверей
                        </td>
                        <td class="submain-font">Эластичная ПВХ пленка толщ. 7 мм (Китай), стандартная (температура
                            эксплуатации -10
                            °C...+50°C) прозрачная
                        </td>
                        <td class="submain-font">Профиль алюминиевый специальной формы, цвет серый RAL 7032</td>
                        <td class="submain-font">Нет</td>
                        <td class="submain-font">Уплотнитель резиновый, по вертикальному профилю 10(Н) мм, по
                            горизонтальному профилю 15(Н)
                            мм.
                        </td class="submain-font">
                    </tr>
                    <tr>
                        <td class="submain-font" style="background: #D9D9D9;">Возможные варианты дополнительной
                            комплектации
                        </td>
                        <td class="submain-font">
                            <ul style="list-style-type: decimal;margin-left:25px;">
                                <li><strong>Стандартная</strong><br>(температура эксплуатации
                                    -10°C...+50°C) серая на 1200(Н)
                                    мм от низа полотна двери
                                </li>
                                <li><strong>Морозостойкая</strong><br>(температура эксплуатации -40°C...+30°C)
                                    прозрачная
                                </li>
                                <li><strong>Резиновая</strong><br>конвейерная лента толщ. 7 мм на 1000(Н) мм от низа
                                    полотна
                                    двери, цвет черный
                                </li>
                            </ul>
                        </td>
                        <td class="submain-font">Нет</td>
                        <td class="submain-font">Установка отбойника 200(Н) мм из ПВХ пленки или резинотканевой ленты на
                            любую высоту
                            относительно высоты двери
                        </td>
                        <td class="submain-font">Нет</td>
                    </tr>
                </table>
            </div>

            <?php
        } ?>

        <?php if (carbon_get_post_meta(get_the_ID(), 'single_type_product_status')) {
            ?>
            <section class="single-service-item type-products">
                <h2 class="type-products__title main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'single_type_product_title') ?></h2>
                <div class="type-products__body">
                    <?php
                    $products = carbon_get_post_meta(get_the_ID(), 'single_type_product_items');
                    foreach ($products as $product) {
                        ?>
                        <article class="type-products__item">
                            <div class="type-products__image">
                                <img src="<?php echo $product['image']; ?>" alt="">
                            </div>
                            <div class="type-product__info">
                                <h3 class="type-products__name main-font"><?php echo $product['name']; ?></h3>
                                <div class="type-product__btn main-btn btn main-font"><?php echo $product['btn_text']; ?></div>
                            </div>
                        </article>
                        <?php
                    }
                    ?>
                </div>
            </section>

            <?php
        } ?>
        <?php if (carbon_get_post_meta(get_the_ID(), 'single_door_leaf_status')) {
            ?>
            <section class="single-service-item">
                <?php get_template_part('template-parts/door_leaf'); ?>

            </section>
            <?php
        } ?>
        <?php if (carbon_get_post_meta(get_the_ID(), 'single_variants_status')) {
            ?>
            <div class="single-service-item">
                <?php get_template_part('template-parts/variants'); ?>
            </div>
            <?php
        } ?>

        <?php if (carbon_get_post_meta(get_the_ID(), 'single_type_mount_status')) { ?>
            <div class="single-service-item">
                <?php
                get_template_part('template-parts/type_mount');
                ?>
            </div>
        <?php } ?>
        <?php if (carbon_get_post_meta(get_the_ID(), 'single_construction_status')) {
            ?>
            <div class="single-service-item">
                <?php get_template_part('template-parts/single_construction'); ?>
            </div>
            <?php
        } ?>
        <?php if (carbon_get_post_meta(get_the_ID(), 'single_advantage_product_status')) { ?>
            <div class="item-block">
                <?php the_advantage_product(); ?>
            </div>
        <?php } ?>
        <?php $products = carbon_get_post_meta(get_the_ID(), 'single_service_products');
        if (!empty($products)) { ?>
            <section class="app-area single-service-item">
                <h2 class="single-service__title"><?php echo carbon_get_post_meta(get_the_ID(), 'single_service_place_title') ?></h2>

                <div class="app-area__body">
                    <?php get_template_part('template-parts/loop_product', null, $products) ?>
                </div>
            </section>
        <?php } ?>

        <?php if (carbon_get_post_meta(get_the_ID(), 'single_advantage_service_status')) { ?>
            <div class="single-service-item">
                <?php echo get_template_part('template-parts/advantages_service'); ?>
            </div>
        <?php } ?>
        <?php if (carbon_get_post_meta(get_the_ID(), 'single_quiz_status')) {
            ?>
            <section class="single-service-item">Опрос</section>
            <?php
        } ?>
        <?php if (carbon_get_post_meta(get_the_ID(), 'single_slider_status')) {
            ?>
            <section class="single-service-item">
                <?php the_slider(); ?>
            </section>
            <?php
        } ?>
        <?php if (carbon_get_post_meta(get_the_ID(), 'single_callback_status')) { ?>
            <section class="have-question single-service-item">
                <div class="have-question__body">
                    <div class="have-question__wrapper container">
                        <div class="have-question__info">
                            <h2 class="have-question__title main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'single_callback_title') ?></h2>
                            <div class="have-question__desc submain-font"><?php echo carbon_get_post_meta(get_the_ID(), 'single_callback_desc') ?></div>
                        </div>
                        <div class="have-question__btn-wrapper">
                            <button class="have-question__btn btn main-btn"><?php echo carbon_get_post_meta(get_the_ID(), 'single_callback_btn_text') ?></button>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>

        <?php if (carbon_get_post_meta(get_the_ID(), 'single_about_us_status')) {
            ?>
            <div class="single-service-item">
                <?php get_template_part('template-parts/single_about_us'); ?>
            </div>
            <?php
        } ?>
        <div class="item-block">
            <?php the_map(); ?>
        </div>


    </section>

<?php

get_footer();