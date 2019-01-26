<?php 

if (!function_exists('cursos_iglesia_theme_setup')):

function cursos_iglesia_theme_setup() {

    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');  
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'status', 'image'));

    // add_image_size( 'navbar-background', 1400, 700 );

}

endif;

add_action('after_setup_theme', 'cursos_iglesia_theme_setup');

?>