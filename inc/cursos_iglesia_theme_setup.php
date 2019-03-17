<?php 

if (!function_exists('cursos_iglesia_theme_setup')):

function cursos_iglesia_theme_setup() {

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 298, 176, true );
    add_theme_support('custom-background');  
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'status', 'image'));
    add_image_size( 'post-image', 298, 176 );
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    );
    add_theme_support( 'custom-logo', $defaults );

    $args = array(
        'default-image'      => get_template_directory_uri() . '/images/header_back.png',
        'width'              => 1400,
        'height'             => 550,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}

endif;

add_action('after_setup_theme', 'cursos_iglesia_theme_setup');

if (!function_exists('varadero_register_menus')):

    function varadero_register_menus() {
        register_nav_menus(
          array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
           )
         );
    }
       
endif;

add_action('init', 'varadero_register_menus');


?>