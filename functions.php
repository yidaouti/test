<?php

// Enqueue styles and scripts
function my_theme_enqueue_assets() {
    wp_enqueue_style('my-theme-style', get_stylesheet_uri()); 
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}

// register menus
function register_my_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu'),

    ));
}


add_action('after_setup_theme', 'register_my_menus');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');
