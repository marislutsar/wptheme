<?php

wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
wp_enqueue_style('bulma-style', 'https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css');

add_action('after_setup_theme', 'register_my_menu');

function register_my_menu() {
   register_nav_menu('primary', __( 'Primary Menu', 'wptheme' ));
}

function add_menu_link_class( $atts, $item, $args ) {
   if (property_exists($args, 'link_class')) {
     $atts['class'] = $args->link_class;
   }
   return $atts;
 }
 add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );