<?php

function learn_wp_styles()
{
    wp_enqueue_style('learnwp-style', get_stylesheet_uri(), [], '1.0.0');
    wp_enqueue_style('taliwind', get_template_directory_uri() . '/src/output.css', [], time());
}

add_action('wp_enqueue_scripts', 'learn_wp_styles');
add_theme_support('post-thumbnails');
/*
=========================> Project post type<=============================================
*/
function register_project_post_type(){
$args = array(
    'labels' =>array(
        'name'          => 'Projects',
        'singular name' => 'Project',
        'add_new'       => 'Add New Project',
        'add_new_item'  => 'Add New Project',
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
    'menu_icon'   => 'dashicons-admin-appearance',
);
register_post_type( 'project', $args );
}

add_action( 'init', 'register_project_post_type' );//hook ho project post type kun bela ma rakhne vanera garne ho


/*
    ======================================>Photo psot type<=============================================

*/
function register_photo_post_type(){
$args = array(
    'labels' =>array(
        'name'          => 'Photo',
        'singular name' => 'Photo',
        'add_new'       => 'Add New Photo',
        'add_new_item'  => 'Add New Photo',
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array( 'title', 'thumbnail'),
    'menu_icon'   => 'dashicons-embed-photo',
);
register_post_type( 'photo', $args );
}

add_action( 'init', 'register_photo_post_type' );