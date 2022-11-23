<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'init_hero_custom_fields');

function init_hero_custom_fields()
{
    hero_screen();
}


function hero_screen(): void
{
    Container::make('post_meta', __('Первый экран'))
        ->where('post_template', '=', 'front-page.php')
        ->add_fields(array(
            Field::make('text', 'hero_title', __('Заголовок')),
            Field::make('complex', 'hero_tabs', __('Плашки'))
                ->add_fields(array(
                    Field::make('text', 'name', __('Название плашки'))->set_width(50),
                )),
            Field::make('text', 'hero_btn', __('Текст Кнопки рассчитать стоимость')),
            Field::make('image', 'hero_image', __('Картинка'))->set_value_type('url'),
        ));

    Container::make('post_meta', __('Плашки услуг'))
        ->where('post_template', '=', 'front-page.php')
        ->add_fields(array(
            Field::make('complex', 'home_product_grid')
                ->add_fields(array(
                    Field::make('image', 'image', 'Изображение')->set_value_type('url'),
                    Field::make('text', 'title', __('Заголовок')),
                    Field::make('textarea', 'description', __('Описание')),
                    Field::make('text', 'link_text', __('Кнопка подробнее'))->set_width(50),
                    Field::make('text', 'link', __('Ссылка на страницу'))->set_width(50),
                    Field::make('text', 'btn_text', __('Надпись на кнопку')),
                )),
        ));

    Container::make('post_meta', __('Прайс'))
        ->where('post_template', '=', 'front-page.php')
        ->add_fields(array(
            Field::make('text', 'home_price_title', __('Заголовок')),
            Field::make('image', 'home_price_image', __('Изображение'))->set_value_type('url'),
            Field::make('complex', 'home_price_values', __('Элементы'))
                ->add_fields(array(
                    Field::make('text', 'name', __('Наименование')),
                    Field::make('text', 'description', __('Описание')),
                    Field::make('text', 'price', __('Цена (руб)'))->set_attribute('type', 'number'),
                )),
            Field::make('text', 'home_btn_text', __('Текст кнопки')),
        ));

    Container::make('post_meta', __('Шаги сделки'))
        ->where('post_template', '=', 'front-page.php')
        ->add_fields(array(
            Field::make('text', 'home_steps_title', __('Заголовок')),
            Field::make('complex', 'home_steps', __('Шаги'))
                ->add_fields(array(
                    Field::make('text', 'title', __('Заголовок ')),
                    Field::make('text', 'subtitle', __('Описание')),
                    Field::make('image', 'image', 'Иконка')->set_value_type('url'),
                )),
        ));

    Container::make('post_meta', __('Описание'))
        ->where('post_template', '=', 'front-page.php')
        ->add_fields(array(
                Field::make('rich_text', 'home_description', __('Описание'))
            )
        );

}
