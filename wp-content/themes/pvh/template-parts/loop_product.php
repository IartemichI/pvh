<?php
if (isset($args)) {
    $products = $args;
    foreach ($products as $product) {
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
}