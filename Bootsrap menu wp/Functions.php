<?php

function custom_theme_setup() {
    // Register the navigation menu
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'your-theme-textdomain'),
    ));
}
add_action('after_setup_theme', 'custom_theme_setup');




function enqueue_bootstrap_assets() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');

    // Enqueue main theme stylesheet (style.css)
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Enqueue Bootstrap Bundle JS (includes Popper.js)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_assets');


 

function register_footer_menu() {
    register_nav_menus(array(
        'footer_menu' => __('Footer Menu', 'your-theme-textdomain'),
    ));
}
add_action('after_setup_theme', 'register_footer_menu');




function custom_theme_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 80,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'custom_theme_logo_setup');


?>