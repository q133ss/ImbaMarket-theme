<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'media', get_stylesheet_directory_uri() . '/css/media.css' );
    wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/css/reset.css' );
}
