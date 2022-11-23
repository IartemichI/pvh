
<section class="advantage">
    <h2 class="single-service__title"><?php echo carbon_get_post_meta(get_the_ID(), 'single_advantage_title') ?></h2>
    <?php $advantages = carbon_get_post_meta(get_the_ID(), 'single_advantage_item');
    if (isset($advantages) && false) {

        ?>
        <div class="advantage__body">
            <?php foreach ($advantages as $advantage) { ?>
                <article class="advantage__item">
                    <div class="advantage__info">
                        <h3 class="advantage__title main-font"><?php echo $advantage['title']; ?></h3>
                        <div class="advantage__desc submain-font"><?php echo $advantage['description'] ?></div>
                    </div>
                    <div class="advantage__image parallelogram-reverse">
                        <img src="<?php echo $advantage['image']; ?>" alt="image advantage">
                    </div>
                </article>
            <?php } ?>
        </div>
        <?php
    } ?>
    <div class="advantage__body">
        <article class="advantage__item">
            <div class="advantage__info">
                <h3 class="advantage__title main-font">Сохраняют тепло</h3>
                <div class="advantage__desc submain-font">Экономия на обогреве помещения</div>
            </div>
            <div class="advantage__image parallelogram-reverse">
                <img src="https://promweb.ru/wp-content/uploads/2022/11/2022-11-04-15.44.46.jpg"
                     alt="image advantage">
            </div>
        </article>
        <article class="advantage__item">
            <div class="advantage__info">
                <h3 class="advantage__title main-font">Свободный проезд транспорта и техники</h3>
                <div class="advantage__desc submain-font">Завесы ПВХ обладают хорошей пропускной способностью
                </div>
            </div>
            <div class="advantage__image parallelogram-reverse">
                <img src="https://promweb.ru/wp-content/uploads/2022/11/delivery-truck-1-1-Traced.jpg"
                     alt="image advantage">
            </div>
        </article>
        <article class="advantage__item">
            <div class="advantage__info">
                <h3 class="advantage__title main-font">Защита от ветра и сквозняков</h3>
                <div class="advantage__desc submain-font">Отлично удерживают тепло в помещении и препятствуют
                    проникновению холодного воздуха
                </div>
            </div>
            <div class="advantage__image parallelogram-reverse">
                <img src="https://promweb.ru/wp-content/uploads/2022/11/wind-1-Traced.jpg"
                     alt="image advantage">
            </div>
        </article>
        <article class="advantage__item">
            <div class="advantage__info">
                <h3 class="advantage__title main-font">Не имеют едкого запаха</h3>
                <div class="advantage__desc submain-font">Позволяют поддерживать чистоту на пищевых
                    предприятиях
                </div>
            </div>
            <div class="advantage__image parallelogram-reverse">
                <img src="https://promweb.ru/wp-content/uploads/2022/11/odor-1-Traced.jpg"
                     alt="image advantage">
            </div>
        </article>
        <article class="advantage__item">
            <div class="advantage__info">
                <h3 class="advantage__title main-font">Защита от пыли</h3>
                <div class="advantage__desc submain-font">Защищают помещение от пыли, мусора и неприятного
                    запаха
                </div>
            </div>
            <div class="advantage__image parallelogram-reverse">
                <img src="https://promweb.ru/wp-content/uploads/2022/11/dust-1-1-Traced.jpg"
                     alt="image advantage">
            </div>
        </article>
        <article class="advantage__item">
            <div class="advantage__info">
                <h3 class="advantage__title main-font">Повышенный срок эксплуатации</h3>
                <div class="advantage__desc submain-font">Из-за дополнительных ребер жесткости данные ПВХ завесы
                    служат дольше
                </div>
            </div>
            <div class="advantage__image parallelogram-reverse">
                <img src="https://promweb.ru/wp-content/uploads/2022/11/technical-support-1-Traced.jpg"
                     alt="image advantage">
            </div>
        </article>
    </div>
</section>