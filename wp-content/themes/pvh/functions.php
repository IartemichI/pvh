<?php
$files_include = require_once get_template_directory() . '/config/include_functions.php';

foreach ($files_include as $file) {
    require_once get_template_directory() . '/functions/' . $file . '.php';
}
add_theme_support('custom-logo');
register_nav_menus(array(
    'top' => 'Верхнее меню',
));