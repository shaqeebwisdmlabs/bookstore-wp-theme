<?php

function wsd_register_styles()
{
    $version = wp_get_theme()->get('version');
    wp_enqueue_style('global_styles', get_stylesheet_directory_uri() . "/style.css", array(), $version, "all");
    wp_enqueue_style('main_styles', get_stylesheet_directory_uri() . "/assets/css/main.css", array(), $version, "all");
}

add_action('wp_enqueue_scripts', 'wsd_register_styles');

function wsd_register_scripts()
{
    $version = wp_get_theme()->get('version');
    wp_enqueue_script('main_script', get_template_directory_uri() . "/assets/js/script.js", $version, true);
}

add_action('wp_enqueue_scripts', 'wsd_register_scripts');
