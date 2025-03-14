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
        'mobile_menu'  => __('Mobile Menu')

    ));
}


// class Custom_Mobile_Walker_Nav_Menu extends Walker_Nav_Menu {

//     // Start Level: Outputs the opening <ul> for sub-menus.
//     public function start_lvl( &$output, $depth = 0, $args = null ) {
//         $indent  = str_repeat("\t", $depth);
//         $output .= "\n$indent<ul>\n";
//     }

//     // End Level: Closes the sub-menu <ul>.
//     public function end_lvl( &$output, $depth = 0, $args = null ) {
//         $indent  = str_repeat("\t", $depth);
//         $output .= "$indent</ul>\n";
//     }

//     // Start Element: Outputs each <li> element.
//     public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
//         $indent = ($depth) ? str_repeat("\t", $depth) : '';

//         // Collect classes for <li>
//         $classes = empty( $item->classes ) ? array() : (array) $item->classes;
//         $class_names = implode(" ", $classes);

//         // Open <li> with any classes.
//         $output .= $indent . '<li class="' . esc_attr( $class_names ) . '">';

//         // Check if the item has children.
//         $has_children = in_array('menu-item-has-children', $classes);

//         // Build the <a> element.
//         $atts = array();
//         $atts['href'] = ! empty( $item->url ) ? $item->url : '#';

//         $link = '<a href="' . esc_url( $atts['href'] ) . '">';

//         if ( $has_children ) {
//             // For items with children, wrap the title in a <span> and add an arrow <span> with SVG.
//             $link .= '<span>' . esc_html( $item->title ) . '</span>';
//             $link .= '<span class="arrow">';
//             $link .= '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">';
//             $link .= '<path d="M7 10L12 15L17 10" stroke="#252324" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>';
//             $link .= '</svg>';
//             $link .= '</span>';
//         } else {
//             // For items without children, output a simple link.
//             $link .= esc_html( $item->title );
//         }
//         $link .= '</a>';

//         $output .= $link;
//     }

//     // End Element: Closes the <li> element.
//     public function end_el( &$output, $item, $depth = 0, $args = null ) {
//         $output .= "</li>\n";
//     }
// }



add_action('after_setup_theme', 'register_my_menus');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');
