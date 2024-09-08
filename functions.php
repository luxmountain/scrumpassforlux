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
   wp_enqueue_style( 'lux-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(),'5.0.2','all');
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


function lux_widget_areas(){
   register_sidebar(
      array(
         'before_title'=> '',
         'after_title' => '',
			'before_widget'=> '<ul class="social-list list-inline py-3 mx-auto">',
         'after_widget'=> '</ul>',
         'name'=> 'Sidebar Area',
         'id' => 'sidebar-1',
         'description' => 'Sidebar Widget Area',
      )
   );
   register_sidebar(
      array(
         'before_title'=> '',
         'after_title' => '',
			'before_widget'=> '<ul class="social-list list-inline py-3 mx-auto">',
         'after_widget'=> '</ul>',
         'name'=> 'Footer Area',
         'id' => 'footer-1',
         'description' => 'Footer Widget Area',
      )
   );
}

add_action('widgets_init', 'lux_widget_areas');


?>