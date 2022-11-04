<?php


add_action('wp_enqueue_scripts', 'enqueue_css');
add_action('wp_enqueue_scripts', 'enqueue_js');

if (!current_user_can('administrator') && !is_admin() && !is_login_page()) {
    add_action('init', 'disable_emoji');
    add_action('init', 'deregister_css');
    add_action('init', 'deregister_js');
    add_action('init', 'remove_global_css');
}

function is_login_page(): bool
{
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}

function disable_emoji(): void
{

    /**
     * Disable the emoji's
     */
    function disable_emojis()
    {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
        add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
        add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
    }

    add_action('init', 'disable_emojis');

    /**
     * Filter function used to remove the tinymce emoji plugin.
     *
     * @param array $plugins
     * @return   array             Difference betwen the two arrays
     */
    function disable_emojis_tinymce($plugins)
    {
        if (is_array($plugins)) {
            return array_diff($plugins, array('wpemoji'));
        }

        return array();
    }

    /**
     * Remove emoji CDN hostname from DNS prefetching hints.
     *
     * @param array $urls URLs to print for resource hints.
     * @param string $relation_type The relation type the URLs are printed for.
     * @return array                 Difference betwen the two arrays.
     */
    function disable_emojis_remove_dns_prefetch($urls, $relation_type)
    {

        if ('dns-prefetch' == $relation_type) {

            // Strip out any URLs referencing the WordPress.org emoji location
            $emoji_svg_url_bit = 'https://s.w.org/images/core/emoji/';
            foreach ($urls as $key => $url) {
                if (strpos($url, $emoji_svg_url_bit) !== false) {
                    unset($urls[$key]);
                }
            }

        }

        return $urls;
    }

}


function deregister_css(): void
{
    wp_deregister_style('wp-block-library');

}

function remove_global_css(): void
{
    remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
    remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
}

function deregister_js(): void
{
    wp_deregister_script('jquery');
}

function enqueue_css(): void
{
    $page = get_page_name();
    $styles = [];
    $styles['global_styles'] = require_once get_template_directory() . '/config/assets/css/global.php';
    $styles['page_styles'] = require_once get_template_directory() . '/config/assets/css/' . $page . '.php';

    foreach ($styles['global_styles'] as $style => $data) {
        if (file_exists(get_template_directory() . '/assets/css/' . $style . '.css')) {
            wp_enqueue_style($style, get_template_directory_uri() . '/assets/css/' . $style . '.css', '', '', $data['media']);
        }
    }
    foreach ($styles['page_styles'] as $style => $data) {
        if (file_exists(get_template_directory() . '/assets/css/' . $style . '.css')) {
            wp_enqueue_style($style, get_template_directory_uri() . '/assets/css/' . $style . '.css', '', '', $data['media']);
        }
    }
    //TODO: if will added fonts
    wp_enqueue_style('gilroy', get_template_directory_uri() . '/assets/fonts/gilroy/gilroy.css');
    wp_enqueue_style('gilroy', get_template_directory_uri() . '/assets/fonts/montserrat/montserrat.css');


}

function enqueue_js(): void
{
    $page = get_page_name();
    $js['page_js'] = require_once get_template_directory() . '/config/assets/js/' . $page . '.php';
    foreach ($js['page_js'] as $name => $data) {
        if (file_exists(get_template_directory() . '/assets/js/' . $name . '.js')) {
            wp_enqueue_script($name, get_template_directory_uri() . '/assets/js/' . $name . '.js', $data['deps'], '', $data['in_footer']);
        }
    }
}


function get_page_name(): string
{
    if (is_front_page()) {
        return 'home';
    }
    return '404';
}
