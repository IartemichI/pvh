<?php
/*
Template Name: Продукция
Template Post Type: page
*/
get_header();
?>
    <div class="about-product">
        <?php $categories = (array)get_categories(array('parent' => 10, 'hide_empty' => 0));
        if (!empty($categories)) {
            ?>
            <section class="item-block">
                <h2 class="about-product__title main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'about_product_title') ?></h2>
                <div class="about-product__wrapper">
                    <?php foreach ($categories as $category) {
                        ?>
                        <article class="product">
                            <div class="product__image">
                                <img src="<?php echo carbon_get_term_meta($category->term_id, 'term_image'); ?>"
                                     alt="product grid">
                            </div>
                            <div class="product__info">
                                <h3 class="product__title main-font"><?php echo $category->name; ?></h3>
                                <div class="product__description submain-font">
                                    <div class="product__text"><?php echo $category->description ?></div>
                                    <a href="<?php echo carbon_get_term_meta($category->term_id, 'term_link'); ?>"
                                       class="product__more"><?php echo carbon_get_term_meta($category->term_id, 'term_link_text'); ?>
                                        &rarr;</a>
                                </div>
                                <button class="product__btn main-font main-btn"><?php echo carbon_get_term_meta($category->term_id, 'term_btn_text'); ?></button>
                            </div>
                        </article>
                    <?php } ?>
                </div>
            </section>
            <?php
        } ?>
        <div class="item-block">
            <?php the_advantage_product(); ?>
        </div>
        <?php
        $about_description = carbon_get_post_meta(get_the_ID(), 'about_product_about_us_desc');
        $about_construction_list = carbon_get_post_meta(get_the_ID(), 'about_product_construction_list');
        ?>
        <section class="item-block about-product__about-us">
            <?php if (!empty($about_description)) { ?>
                <h2 class="about-product__title main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'about_product_about_us_title') ?></h2>
                <div class="about-product__desc submain-font"><?php echo carbon_get_post_meta(get_the_ID(), 'about_product_about_us_desc'); ?></div>
            <?php }
            if (!empty($about_construction_list)) {
                ?>
                <div class="construction">
                    <div class="construction__info">
                        <h3 class="construction__title main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'about_product_construction_title'); ?></h3>
                        <?php foreach ($about_construction_list as $item) {
                            ?>
                            <div class="construction__item submain-font"><?php echo $item['item'] ?></div>

                            <?php
                        } ?>
                    </div>
                    <div class="construction__image parallelogram">
                        <img src="<?php echo carbon_get_post_meta(get_the_ID(), 'about_product_construction_image') ?>"
                             alt="construction image">
                    </div>
                </div>
            <?php } ?>
        </section>
        <?php
        $types_categories = get_categories(array('parent' => 5, 'hide_empty' => 0, 'orderby' => 'id'));
        if (!empty($types_categories)) {
            ?>
            <section class="types-pvh item-block">
                <h2 class="about-product__title main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'about_product_types') ?></h2>
                <div class="types-pvh__gr-tabs">
                    <?php
                    foreach ($types_categories as $category) {
                        ?>
                        <div class="types-pvh__tab btn main-font submain-btn">
                            <?php echo $category->name ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <article class="types-pvh__item">
                    <div class="types-pvh__info">
                        <h3 class="types-pvh__item-title main-font"><?php echo $types_categories[0]->name; ?></h3>
                        <div class="types-pvh__desc submain-font"><?php echo $types_categories[0]->description; ?></div>
                    </div>
                    <div class="types-pvh__image">
                        <img src="<?php echo carbon_get_term_meta($types_categories[0]->term_id, 'term_image'); ?>"
                             alt="type image">
                    </div>
                </article>
                <?php
                $posts = get_posts(array(
                    'category' => $types_categories[0]->term_id,
                    'numberposts' => 8,
                    'orderby' => 'date',

                )); ?>
                <?php if (!empty($posts)) { ?>
                    <section class="type-pvh__wrapper">
                        <?php

                        foreach ($posts as $post) {
                            ?>
                            <article class="product-type">
                                <div class="product-type__image">
                                    <img src="<?php echo carbon_get_post_meta($post->ID, 'product_image') ?>"
                                         alt="product grid">
                                </div>
                                <div class="product-type__info">
                                    <h3 class="product-type__title main-font"><?php echo $post->post_title; ?></h3>
                                    <div class="product-type__description submain-font">
                                        <div class="product-type__text"><?php echo $post->post_content ?></div>
                                        <div class="product-type__price">
                                            от <?php echo carbon_get_post_meta($post->ID, 'product_price') ?> р
                                        </div>
                                    </div>
                                    <button class="product-type__btn main-font main-btn">Уточнить стоимость</button>
                                </div>
                            </article>
                            <?php
                        }

                        ?>
                    </section>
                <?php } ?>
            </section>
            <?php
        }
        ?>
        <div class="item-block">
            <?php the_slider(); ?>
        </div>
        <div class="item-block">
            <?php the_map(); ?>
        </div>

    </div>
<?php
get_footer();