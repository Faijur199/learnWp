<?php

function learn_wp_styles()
{
    wp_enqueue_style('learnwp-style', get_stylesheet_uri(), [], '1.0.0');
    wp_enqueue_style('taliwind', get_template_directory_uri() . '/src/output.css', [], time());
}

add_action('wp_enqueue_scripts', 'learn_wp_styles');
add_theme_support('post-thumbnails');
