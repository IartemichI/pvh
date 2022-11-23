<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'categories_custom_fields');
function categories_custom_fields(): void
{
    Container::make('term_meta', __('Доп данные'))
        ->add_fields(array(
                Field::make('image', 'term_image', __('Изображение'))->set_value_type('url'),
                Field::make('text', 'term_link_text', __('Текст ссылки "подробнее"'))->set_default_value("Подробнее"),
                Field::make('text', 'term_link', __('Ссылка "подробнее"')),
                Field::make('text', 'term_btn_text', __('Текст кнопки'))->set_default_value('Рассчитать стоимость'),
            )
        );
}