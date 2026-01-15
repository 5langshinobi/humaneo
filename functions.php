<?php
function miniwp_enqueue_scripts() {
    wp_enqueue_style( 'miniwp-main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'miniwp_enqueue_scripts' );
add_theme_support( 'title-tag' );
?>