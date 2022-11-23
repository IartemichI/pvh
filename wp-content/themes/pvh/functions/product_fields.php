<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'product_custom_fields');

function product_custom_fields(): void
{
    Container::make('post_meta', __('Изображение'))
        ->where('post_type', '=', 'post')
        ->add_fields(array(
            Field::make('image', 'product_image', 'Изображение')->set_value_type('url'),
        ));
    Container::make('post_meta', __('Стоимость'))
        ->where('post_type', '=', 'post')
        ->add_fields(array(
            Field::make('text', 'product_price', 'Стоимость')->set_attribute('type', 'number')
        ));
}
