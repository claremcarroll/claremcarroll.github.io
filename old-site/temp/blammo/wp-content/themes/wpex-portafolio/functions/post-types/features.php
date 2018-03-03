<?php
/***
* Special Thanks To Devin Price
* This file is a modified of the original plugin found @https://github.com/devinsays/features-post-type - Special Thanks!
***/

if ( ! class_exists( 'Symple_Features_Post_Type' ) ) :
class Symple_Features_Post_Type {

	function __construct() {

		// Adds the features post type and taxonomies
		add_action( 'init', array( &$this, 'features_init' ), 0 );

		// Thumbnail support for features posts
		add_theme_support( 'post-thumbnails', array( 'features' ) );

		// Adds columns in the admin view for thumbnail and taxonomies
		add_filter( 'manage_edit-features_columns', array( &$this, 'features_edit_columns' ) );
		add_action( 'manage_posts_custom_column', array( &$this, 'features_column_display' ), 10, 2 );
	}
	

	function features_init() {

		/**
		 * Enable the Features custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */

		$labels = array(
			'name'					=> __( 'Features', 'wpex' ),
			'singular_name' 		=> __( 'Features Item', 'wpex' ),
			'add_new'				=> __( 'Add New Item', 'wpex' ),
			'add_new_item'			=> __( 'Add New Features Item', 'wpex' ),
			'edit_item'				=> __( 'Edit Features Item', 'wpex' ),
			'new_item'				=> __( 'Add New Features Item', 'wpex' ),
			'view_item'				=> __( 'View Item', 'wpex' ),
			'search_items'			=> __( 'Search Features', 'wpex' ),
			'not_found' 			=> __( 'No features items found', 'wpex' ),
			'not_found_in_trash'	=> __( 'No features items found in trash', 'wpex' )
		);
		
		$args = array(
	    	'labels'				=> $labels,
	    	'public'				=> true,
			'supports'				=> array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions' ),
			'capability_type'		=> 'post',
			'rewrite'				=> array("slug"	=> "features"), // Permalinks format
			'has_archive'			=> false,
			'show_in_nav_menus'		=> false,
			'exclude_from_search'	=> true,
			'menu_icon'				=> 'dashicons-star-filled',
		); 
		
		$args = apply_filters('symple_features_args', $args);
		
		register_post_type( 'features', $args );

	}

	/**
	 * Add Columns to Features Edit Screen
	 * http://wptheming.com/2010/07/column-edit-pages/
	 */

	function features_edit_columns( $features_columns ) {
		$features_columns = array(
			"cb"					=> "<input type=\"checkbox\" />",
			"title"					=> __('Title', 'column name'),
			"features_thumbnail"	=> __('Thumbnail', 'wpex'),
			//"author"				=> __('Author', 'wpex'),
			//"comments"			=> __('Comments', 'wpex'),
			//"date"				=> __('Date', 'wpex'),
		);
		return $features_columns;
	}

	function features_column_display( $features_columns, $post_id ) {

		// Code from: http://wpengineer.com/display-post-thumbnail-post-page-overview

		switch ( $features_columns ) {

			// Display the thumbnail in the column view
			case "features_thumbnail":
				$width = (int) 80;
				$height = (int) 80;
				$thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );

				// Display the featured image in the column view if possible
				if ( $thumbnail_id ) {
					$thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
				}
				if ( isset( $thumb ) ) {
					echo $thumb;
				} else {
					echo __('None', 'wpex');
				}
				break;

		}
	}
}

new Symple_Features_Post_Type;

endif;