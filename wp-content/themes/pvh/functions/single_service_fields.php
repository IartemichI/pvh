<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'single_custom_fields');

function single_custom_fields(): void
{
    Container::make('post_meta', __('Вверхний блок'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
                Field::make('image', 'single_service_image', __('Изображение'))->set_value_type('url'),
                Field::make('media_gallery', 'single_service_slider', __('Cлайдер (если включен изображение выводится не будет)'))
                    ->set_type(array('image')),
                Field::make('text', 'single_service_btn_text', __('Текст в кнопке'))->set_default_value('Рассчитать стоимость'),
                Field::make('text', 'single_service_btn_2_text', __('Текст в кнопке если включен слайдер'))->set_default_value('ОСТАВИТЬ ЗАЯВКУ'),

            )
        );
    Container::make('post_meta', __('Дополнительное описание'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
            Field::make('checkbox', 'single_subdesc_status', _('Включить')),
            Field::make('rich_text', 'single_subdesc_text', _('Дополнительно описание')),
        ));
    Container::make('post_meta', __('Таблица'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
            Field::make('checkbox', 'single_table_status', _('Включить')),

        ));

    Container::make('post_meta', _('Тип крепления и монтаж или дверное полотно'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
                Field::make('checkbox', 'single_type_mount_status', _('Включить')),
                Field::make('text', 'single_type_mount_title', _('Заголовок')),
                Field::make('text', 'single_type_mount_desc', _('Описание')),
                Field::make('complex', 'single_type_mount_items', __('Элементы'))
                    ->add_fields(
                        array(
                            Field::make('image', 'image', __('Изображение'))->set_value_type('url'),
                            Field::make('text', 'title', _('Заголовок')),
                            Field::make('text', 'description', __('Описание')),
                        )
                    ),

            )
        );

    Container::make('post_meta', _('Типы продукции'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
            Field::make('checkbox', 'single_type_product_status', _('Включить')),
            Field::make('text', 'single_type_product_title', _('Заголовок')),
            Field::make('complex', 'single_type_product_items', _('Элементы'))
                ->add_fields(array(
                    Field::make('image', 'image', __('Изображение'))->set_value_type('url'),
                    Field::make('text', 'name', __('Наименование')),
                    Field::make('text', 'btn_text', __('Текст кнопки'))->set_default_value('Уточнить стоимость'),
                )),
        ));
    Container::make('post_meta', _('Варианты исполнения'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
            Field::make('checkbox', 'single_variants_status', _('Включить')),
            Field::make('text', 'single_variants_title', _('Заголовок')),
            Field::make('complex', 'single_variants_items', _('Элементы'))
                ->add_fields(array(
                    Field::make('image', 'image', __('Изображение'))->set_value_type('url'),
                    Field::make('text', 'name', __('Наименование')),
                    Field::make('text', 'text', __('Описание')),
                )),
        ));
    Container::make('post_meta', __('Конструкция описание'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
            Field::make('checkbox', 'single_construction_status', _('Включить')),
            Field::make('text', 'single_construction_title', _('Заголовок')),
            Field::make('image', 'single_construction_image', _('Изображение'))->set_value_type('url'),
            Field::make('rich_text', 'single_construction_desc', _('Описание')),
            Field::make('text', 'single_construction_bottom', _('Текст внизу')),
        ));
    Container::make('post_meta', _('Преимущества продукции'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
            Field::make('checkbox', 'single_advantage_product_status', _('Включить')
            )));
    Container::make('post_meta', __('Области применения блок'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
                Field::make('text', 'single_service_place_title', __('Заголовок'))->set_default_value('Области применения'),
                Field::make('complex', 'single_service_products', __('Элементы'))
                    ->add_fields(
                        array(
                            Field::make('image', 'image', __('Изображение'))->set_value_type('url'),
                            Field::make('text', 'title', __('Заголовок')),
                            Field::make('text', 'description', __('Описание')),
                            Field::make('text', 'link_text', __('Текст ссылки "подробнее"'))->set_default_value("Подробнее")->set_width(50),
                            Field::make('text', 'link', __('Ссылка "подробнее"')),
                            Field::make('text', 'btn_text', __('Текст кнопки'))->set_default_value('Рассчитать стоимость'),
                        )
                    ),
            )
        );
    Container::make('post_meta', __('Преимущества блок'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
            Field::make('checkbox', 'single_advantage_service_status', _('Включить')

            )));
    /*
    Container::make('post_meta', __('Преимущества блок'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
            Field::make('text', 'single_advantage_title', __('Заголовок'))->set_default_value('Преимущества'),
            Field::make('complex', 'single_advantage_item', __('Элементы'))
                ->add_fields(array(
                    Field::make('text', 'title', __('Заголовок')),
                    Field::make('text', 'description', __('Описание')),
                    Field::make('image', 'image', __('Иконка'))->set_value_type('url'),
                )),
        ));
    */
    Container::make('post_meta', _('Опрос'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
            Field::make('checkbox', 'single_quiz_status', _('Включить')

            )));
    Container::make('post_meta', _('Слайдер'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
            Field::make('checkbox', 'single_slider_status', _('Включить')

            )));

    Container::make('post_meta', __('Форма обратной связи блок'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
            Field::make('checkbox', 'single_callback_status', _('Включить'))->set_default_value(true),
            Field::make('text', 'single_callback_title', __('Заголовок'))->set_default_value('Остались вопросы?'),
            Field::make('text', 'single_callback_desc', __('Описание'))->set_default_value('Оставьте свои контактные данные и менеджер свяжется с вами в ближайшее время'),
            Field::make('text', 'single_callback_btn_text', __('Текст в кнопку'))->set_default_value('заказать звонок')
        ));

    Container::make('post_meta', __('О нас описание'))
        ->where('post_template', '=', 'templates/single_service.php')
        ->add_fields(array(
            Field::make('checkbox', 'single_about_us_status', _('Включить')),
            Field::make('text', 'single_about_us_title', _('Заголовок')),
            Field::make('image', 'single_about_us_image', _('Изображение'))->set_value_type('url'),
            Field::make('rich_text', 'single_about_us_desc', _('Описание')),
            Field::make('text', 'single_about_us_btn_text', _('Текст кнопки')),
        ));
}