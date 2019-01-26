<?php

if (!function_exists( 'cursos_iglesia_add_theme_scripts')):

function cursos_iglesia_add_theme_scripts(){

    wp_enqueue_style('style', get_stylesheet_uri());       
    wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('icomoon', get_stylesheet_directory_uri() . '/assets/css/icomoon.css');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('magnific-popup', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('flexslider', get_stylesheet_directory_uri() . '/assets/css/flexslider.css');
    wp_enqueue_style('owl.carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl.theme.default', get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_enqueue_style('flaticon', get_stylesheet_directory_uri() . '/assets/fonts/flaticon/font/flaticon.css');
    wp_enqueue_style('style-theme', get_stylesheet_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('jquery.easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('jquery.waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js');
    wp_enqueue_script('jquery.stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js');
    wp_enqueue_script('jquery.flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js');
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
    wp_enqueue_script('jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js');
    wp_enqueue_script('magnific-popup-options', get_template_directory_uri() . '/assets/js/magnific-popup-options.js');
    wp_enqueue_script('jquery.countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');

}

endif;

add_action('wp_enqueue_scripts', 'cursos_iglesia_add_theme_scripts');

?>