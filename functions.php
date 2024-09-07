<?php

function lux_theme_support() {
   // Adds dynamic title tag support
   add_theme_support('title_tag');
   add_theme_support('custom-logo');   
   add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','lux_theme_support');

function lux_menus() {
   $locations = array(
      'primary'=> "Desktop Primary Right Sidebar",
      'footer'=> "Footer Menu Items",
   );
   register_nav_menus($locations);
}
add_action('init','lux_menus');
function lux_enqueue_styles() {
   $version = wp_get_theme()->get('Version');

   wp_enqueue_style( 'lux-style', get_template_directory_uri() . "/style.css", array(), $version,'all');
   wp_enqueue_style( 'lux-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(),'4.4.1','all');
   wp_enqueue_style( 'lux-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(),'5.13.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'lux_enqueue_styles' );

function lux_enqueue_scripts() {
   wp_enqueue_script('lux-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(),'3.4.1', true);
   wp_enqueue_script('lux-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(),'1.16.0', true);
   wp_enqueue_script('lux-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(),'4.4.1', true);
   wp_enqueue_script('lux-jquery', get_template_directory_uri(  )."/assets/js/main.js", array(),'1.0', true);

}
add_action( 'wp_enqueue_scripts', 'lux_enqueue_scripts' );

?>