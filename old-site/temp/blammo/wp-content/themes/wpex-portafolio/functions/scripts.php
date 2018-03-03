<?php
/**
 * This file loads custom css and js for our theme
 *
 * @package WordPress
 * @subpackage WPExplorer.com
 * @since 1.0
*/

function wpex_load_scripts() {
	
	/* CSS */
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'droid-serif', 'http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome.min.css' );
	
	if( function_exists( 'wpcf7_enqueue_styles' ) ) {
		wp_dequeue_style( 'contact-form-7' );
	}

	/* jQuery */
	wp_enqueue_script( 'fitvids', WPEX_JS_DIR .'/fitvids.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'wpex-magnific-popup', WPEX_JS_DIR .'/jquery.magnific-popup.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'wpex-global', WPEX_JS_DIR .'/global.js', array( 'jquery', 'wpex-magnific-popup' ), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	$args = array(
		'responsiveMenu'	=> __( 'Navigation', 'wpex' ),
	);
	wp_localize_script( 'wpex-global', 'wpexParams', $args );

	
}
add_action( 'wp_enqueue_scripts','wpex_load_scripts' );