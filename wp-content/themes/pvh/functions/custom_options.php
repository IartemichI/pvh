<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'init_custom_options');

function init_custom_options(): void
{
    header_options();

}

function header_options(): void
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
        ->add_tab(__('Подвал'), array(
            Field::make('text', 'footer_desc_text', __('Описание')),

            Field::make('separator', 'footer_contact_title', __('Контакты')),
            Field::make('text', 'footer_phone', __('Номер телефона'))->set_attribute('type', 'phone'),
            Field::make('text', 'footer_mail', __('Почта')),

            Field::make('text', 'footer_btn_text', __('Текст кнопки')),
            Field::make('text', 'footer_policy', __('Политика конфиденциальности')),
        ));
}