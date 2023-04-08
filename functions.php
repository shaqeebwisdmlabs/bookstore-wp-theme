<?php

function wsd_add_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('widgets');
}

add_action('after_setup_theme', 'wsd_add_theme_support');

function wsd_nav_menu()
{
    $location = array(
        "primary" => "Primary header menu",
        "footer_nav_left" => "Footer navigation menu left",
        "footer_nav_center" => "Footer navigation menu center",
        "footer_nav_right" => "Footer navigation menu right"
    );

    register_nav_menus($location);
}

add_action('init', 'wsd_nav_menu');

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
    wp_enqueue_script('main_script', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), $version, true);
}

add_action('wp_enqueue_scripts', 'wsd_register_scripts');

function wsd_widgets_areas()
{
    register_sidebar(array(
        'name' => 'Company info in footer area',
        'id' => 'comp-info',
        'description' => 'Company info in the footer left bottom under company logo',
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar(array(
        'name' => 'Contact Info',
        'id' => 'contact-info',
        'description' => 'Contact info in the footer right',
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after_widget' => '',
    ));
}

add_action('widgets_init', 'wsd_widgets_areas');