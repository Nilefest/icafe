<?php

// Быстрее чем @import
add_action( 'wp_enqueue_scripts', 'my_child_theme_scripts' );
function my_child_theme_scripts() {
	wp_enqueue_style( 'twentytwenty',    get_template_directory_uri() . '/style.css' );
}