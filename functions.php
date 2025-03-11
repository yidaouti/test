<?php

// Enqueue styles and scripts
function my_theme_enqueue_assets() {
    wp_enqueue_style('my-theme-style', get_stylesheet_uri()); 
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}

// register menus
function register_my_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu')
    ));
}

// function wp_nav_menu( $args = array() ) {
//     $defaults = array(
//         'menu'            => '',
//         'container'       => 'div',
//         'container_class' => '',
//         'container_id'    => '',
//         'menu_class'      => 'menu',
//         'menu_id'         => '',
//         'echo'            => true,
//         'fallback_cb'     => 'wp_page_menu',
//         'before'          => '',
//         'after'           => '',
//         'link_before'     => '',
//         'link_after'      => '',
//         'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//         'depth'           => 0,
//         'walker'          => '',
//         'theme_location'  => ''
//     );

//     $args = wp_parse_args( $args, $defaults );

//     if ( ! in_array( $args['fallback_cb'], array( 'wp_page_menu', 'wp_list_pages' ), true ) ) {
//         $args['fallback_cb'] = false;
//     }

//     if ( ! empty( $args['walker'] ) || ( class_exists( 'Walker_Nav_Menu' ) && $args['walker'] instanceof Walker_Nav_Menu ) ) {
//         $args['walker'] = new $args['walker']();
//     }

//     return wp_nav_menu( $args );
// }


add_action('after_setup_theme', 'register_my_menus');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');
