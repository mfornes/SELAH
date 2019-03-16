<?php

if (!function_exists( 'cursos_iglesia_add_theme_scripts')):

function cursos_iglesia_add_theme_scripts(){

    wp_enqueue_style('style', get_stylesheet_uri());       
    wp_enqueue_style('nomalize', get_stylesheet_directory_uri() . '/assets/css/nomalize.css');
    wp_enqueue_style('mystyle', get_stylesheet_directory_uri() . '/assets/css/style.css');

    // wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js');
  

}

endif;

add_action('wp_enqueue_scripts', 'cursos_iglesia_add_theme_scripts');

?>