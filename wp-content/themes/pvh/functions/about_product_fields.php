<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'about_product_custom_fields');
function about_product_custom_fields(): void
{
    Container::make('post_meta', __('Верхний блок'))
        ->where('post_template', '=', 'templates/about_product.php')
        ->add_fields(array(
            Field::make('text', 'about_product_title', __('Заголовок'))->set_default_value('Продукция Торгового Дома ПВХ'),));

    Container::make('post_meta', __('О продукции'))
        ->where('post_template', '=', 'templates/about_product.php')
        ->add_fields(array(
            Field::make('text', 'about_product_about_us_title', 'Заголовок')->set_default_value('О продукции'),
            Field::make('text', 'about_product_about_us_desc', 'Описание'),
        ));

    Container::make('post_meta', __('Конструкция'))
        ->where('post_template', '=', 'templates/about_product.php')
        ->add_fields(array(
            Field::make('text', 'about_product_construction_title', __('Заголовок'))->set_default_value('Конструкция'),
            Field::make('complex', 'about_product_construction_list', __('Список'))
                ->add_fields(array(
                    Field::make('textarea', 'item'),
                )),
            Field::make('image', 'about_product_construction_image', __('Изображение'))->set_value_type('url'),
        ));

    Container::make('post_meta', __('Виды ПВХ завес'))
        ->where('post_template', '=', 'templates/about_product.php')
        ->add_fields(array(
            Field::make('text', 'about_product_types', __('Заголовок'))->set_default_value('Виды ПВХ завес'),
        ));
}