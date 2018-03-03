<?php
/**
 * Main theme support functions
 * since 1.0
 */
 

add_action( 'after_setup_theme', 'wpex_theme_setup' );
function wpex_theme_setup() {
	
	// Localization support
	load_theme_textdomain( 'wpex', get_template_directory() .'/languages' );

	// Register navigation menus
	register_nav_menus (
		array(
			'main_menu' => __( 'Main', 'wpex' ),
		)
	);
		
	// Add theme support
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'post-thumbnails' );

}

// Flush rewrite rules for custom post types on theme activation
add_action( 'after_switch_theme', 'wpex_flush_rewrite_rules' );
function wpex_flush_rewrite_rules() {
	flush_rewrite_rules();
}