<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'init_custom_options');

function init_custom_options(): void
{
    main_options();
    slider_options();
}

function main_options(): void
{


    Container::make('theme_options', __('Theme Options'))
        ->add_tab(__('Шапка сайта'), array(
            Field::make('separator', 'header_whatsapp_title', __('WhatsApp кнопка')),
            Field::make('text', 'header_whatsapp_text', __('WhatsApp текст кнопки'))->set_default_value('WhatsApp')->set_width(50),
            Field::make('text', 'header_whatsapp_link', __('Cсылка на WhatsApp'))->set_width(50),

            Field::make('separator', 'header_callback__title', __('Связаться с нами кнопка')),
            Field::make('text', 'header_callback_text', __('Текст кнопки связаться с нами'))->set_default_value('Cвязаться'),

            Field::make('separator', 'header_contact_title', __('Контакты')),
            Field::make('text', 'header_mail', __('Почта')),
            Field::make('text', 'header_phone', __('Номер телефона'))->set_attribute('type', 'phone'),

        ))
        ->add_tab(__('Cлайдер пример работ'), array(
            Field::make('text', 'slider_title', __('Заголовок'))->set_default_value('Примеры работ слайдер'),
            Field::make('media_gallery', 'slider_pvh_veil', __('ПФХ Завесы'))
                ->set_type(array('image')),
            Field::make('media_gallery', 'slider_pvh_curtains', __('ПФХ шторы'))
                ->set_type(array('image')),
            Field::make('media_gallery', 'slider_door', __('Маятниковые двери'))
                ->set_type(array('image')),
        ))
        ->add_tab(__('Карта'), array(
            Field::make('text', 'map_contact_title', __('Заголовок контактов')),
            Field::make('text', 'map_contact_phone', __('Номер телефона')),
            Field::make('text', 'map_contact_mail', __('Почта')),
            Field::make('text', 'map_contact_city', __('Город')),
            Field::make('text', 'map_contact_address', __('Улица')),
            Field::make('textarea', 'map_frame', __('Фрейм карты'))
        ))
        ->add_tab(__('Блоки преимуществ'), array(
            Field::make('complex', 'advantage_product', __('Преимущества страница категории'))
                ->add_fields(array(
                    Field::make('text', 'title', __('Заголовок')),
                    Field::make('text', 'desc', __('Описание')),
                    Field::make('image', 'image', __('Изображение'))->set_value_type('url'),
                )),
        ))
        ->add_tab(__('Подвал'), array(
            Field::make('text', 'footer_desc_text', __('Описание')),

            Field::make('separator', 'footer_contact_title', __('Контакты')),
            Field::make('text', 'footer_phone', __('Номер телефона'))->set_attribute('type', 'phone'),
            Field::make('text', 'footer_mail', __('Почта')),

            Field::make('text', 'footer_btn_text', __('Текст кнопки')),
            Field::make('text', 'footer_policy', __('Политика конфиденциальности')),
        ));


}

function slider_options(): void
{


}
