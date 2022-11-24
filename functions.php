<?php 
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function saiful_theme2_scripts() {
	wp_enqueue_style( 'saiful_theme2-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'saiful_theme2-Boot', get_template_directory_uri().'/bootstrap.min.css', array(), _S_VERSION );

	wp_enqueue_script( 'saiful_theme2-navigation', get_template_directory_uri() . './bootstrap.bundle.min.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'saiful_theme2_scripts' );
?>