<?php

function the_slider(): void
{
    wp_enqueue_style('slider', get_template_directory_uri() . '/assets/css/slider.css');
    get_template_part('template-parts/slider');
}

function the_map(): void
{
    wp_enqueue_style('map', get_template_directory_uri() . '/assets/css/map.css');
    get_template_part('template-parts/map');
}

function the_advantage_product(): void
{
    wp_enqueue_style('advantage_product', get_template_directory_uri() . '/assets/css/advantage_product.css');
    get_template_part('template-parts/advantages_product');

}