<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title() ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="container">
    <header class="header">
        <div class="header__top">
            <div class="header__item">
                <div class="geo">
                    <div class="geo__icon">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/balun.svg"
                             alt="balun icon">
                    </div>
                    <div class="geo__info">
                        <a class="geo__title main-font">Москва</a>
                        <a class="geo__subtitle submain-font">ул. Московская 13</a>
                    </div>
                </div>
            </div>
            <div class="header__item">
                <a href="" class="btn whatsapp">
                    <span class="whatsapp__text">
                        Whatsapp
                    </span>
                    <div class="whatsapp__icon">
                        <img loading="lazy"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_icon.svg"
                             alt="whatsapp icon">
                    </div>
                </a>
            </div>
            <div class="header__item">
                <div class="logo">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </div>
            </div>
            <div class="header__item">
                <button class="callback-btn btn">
                    <span class="callback-btn__text">
                        Связаться
                    </span>
                    <span class="callback-btn__icon">
                        <img loading="lazy"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/callback_icon.svg"
                             alt="callback icon">
                    </span>
                </button>
            </div>
            <div class="header__item">
                <div class="contact-line">
                    <a class="contact-line__item">
                        <div class="contact-line__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail_icon.svg"
                                 alt="mail icon">
                        </div>
                        <span class="contact-line__text main-font">
                            zavesa@zavesa-online.ru
                        </span>
                    </a>
                    <a class="contact-line__item">
                        <div class="contact-line__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone_icon.svg"
                                 alt="phone icon">
                        </div>
                        <span class="contact-line__text main-font">
                            8 800 123 45 67
                        </span>
                    </a>

                </div>
            </div>
        </div>
        <nav class="header__menu">
            <ul class="header__ul">
                <li class="header__li"></li>
            </ul>
        </nav>
    </header>
    <section class="content">