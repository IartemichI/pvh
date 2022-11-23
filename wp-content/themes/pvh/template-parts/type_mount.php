<?php
$types = carbon_get_post_meta(get_the_ID(), 'single_type_mount_items');

if (!empty($types)) {
    ?>

    <section class="type-mount">
        <h2 class="type-mount__title main-font"><?php echo carbon_get_post_meta(get_the_ID(), 'single_type_mount_title'); ?></h2>
        <p class="type-mount__desc submain-font"><?php echo carbon_get_post_meta(get_the_ID(), 'single_type_mount_desc'); ?></p>
        <div class="type-mount__body">
            <?php foreach ($types as $type) { ?>
                <article class="type-mount__item">
                    <div class="type-mount__image">
                        <img src="<?php echo $type['image']; ?>" alt="">
                    </div>
                    <div class="type-mount__info">
                        <h4 class="type-mount__name main-font"><?php echo $type['title']; ?></h4>
                        <p class="type-mount__suddesc submain-font"><?php echo $type['description']; ?></p>
                    </div>
                </article>
            <?php } ?>
        </div>
    </section>

    <?php
}

?>