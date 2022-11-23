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
<body class="body">
<header class="header container">
    <div class="header__top">
        <div class="header__item">
            <div class="geo">
                <div class="geo__icon">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/balun.svg"
                         alt="balun icon">
                </div>
                <div class="geo__info">
                    <a class="geo__title main-font">г. Санкт-Петербург</a>
                    <a class="geo__subtitle submain-font">ул. Лифляндская д. 3</a>
                </div>
            </div>
        </div>
        <div class="header__item">
            <a href="" class="btn whatsapp">
                    <span class="whatsapp__text">
                        <?php echo carbon_get_theme_option('header_whatsapp_text') ?>
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
                        <?php echo carbon_get_theme_option('header_callback_text') ?>
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
                <a href="mailto:<?php echo carbon_get_theme_option('header_mail') ?>" class="contact-line__item">
                    <div class="contact-line__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail_icon.svg"
                             alt="mail icon">
                    </div>
                    <span class="contact-line__text main-font">
                            <?php echo carbon_get_theme_option('header_mail') ?>
                        </span>
                </a>
                <a href="tel:<?php echo carbon_get_theme_option('header_phone') ?>" class="contact-line__item">
                    <div class="contact-line__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone_icon.svg"
                             alt="phone icon">
                    </div>
                    <span class="contact-line__text main-font">
                            <?php echo carbon_get_theme_option('header_phone') ?>
                        </span>
                </a>

            </div>
        </div>
    </div>
    <div class="header__burger">
        <div class="burger">
            <span class="burger__line"></span>
            <span class="burger__line"></span>
            <span class="burger__line"></span>
        </div>
    </div>
    <?php
    echo get_header_menu();
    ?>
</header>
<div class="menu-mobile">
    <div class="menu-mobile__cross">
        <div id="__cross" class="menu-mobile__cross-body">
            <div class="menu-mobile__line"></div>
            <div class="menu-mobile__line"></div>
        </div>
    </div>
    <?php
    get_header_menu();
    ?>
    <script>
        const mainMenuItems = document.querySelectorAll('[data-main-category-id]');
        mainMenuItems.forEach(
            item => {
                item.addEventListener('mouseover', e => {
                    const catID = item.getAttribute('data-main-category-id');
                    const childMenu = document.querySelector('[data-submain-category-id="' + catID + '"]');
                    const coordsItem = item.getBoundingClientRect();
                    const is_open = true;
                    const coordLeft = item.offsetLeft + 'px';
                    changeViewMenu(childMenu, is_open, coordLeft);
                });
                item.addEventListener('mouseout', e => {
                    const catID = item.getAttribute('data-main-category-id');
                    const childMenu = document.querySelector('[data-submain-category-id="' + catID + '"]');
                    const is_open = false;
                    changeViewMenu(childMenu, is_open);
                });


            }
        );
        const plusesMenu = document.querySelectorAll('.sub-menu__plus');
        plusesMenu.forEach(item => {
            item.addEventListener('click', e => {
                openSubMenu(item);
            });
        });

        function changeViewMenu(childMenu, is_open, coordLeft) {
            if (!childMenu) {
                return;
            }
            if (is_open) {
                childMenu.style.left = coordLeft;
                childMenu.style.display = 'block';
                childMenu.addEventListener('mouseover', e => {
                    childMenu.style.display = 'block';
                });
                childMenu.addEventListener('mouseout', e => {
                    childMenu.style.display = '';
                });
                return;
            }
            childMenu.style.display = '';
        }

        function openSubMenu(item) {
            item.classList.toggle('__active');
            const subMenu = item.parentNode.querySelector('.sub-menu');
            subMenu.classList.toggle('__active');
        }
    </script>


</div>
<section class="content container">