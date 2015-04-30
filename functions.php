<?php

function legislator_enqueue_parent_theme_style() {
    wp_enqueue_style( 'legislator-parent-style', get_template_directory_uri().'/style.css' );
    wp_dequeue_style( 'rescue_scripts' );
    wp_enqueue_style( 'legislator-child-style', get_stylesheet_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'legislator_enqueue_parent_theme_style', 99 );