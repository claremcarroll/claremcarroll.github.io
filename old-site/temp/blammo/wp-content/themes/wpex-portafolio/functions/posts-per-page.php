<?php
/**
 * Function used to alter the ammount of posts per page
 *
 * @package WordPress
 * @subpackage WPExplorer.com
 * @since 1.0
 */

// Get posts per page
$wpex_option_posts_per_page = get_option( 'posts_per_page' );

// Add posts per page filter
add_action( 'init', 'wpex_modify_posts_per_page', 0);
function wpex_modify_posts_per_page() {
    add_filter( 'option_posts_per_page', 'wpex_option_posts_per_page' );
}

// Modify posts per page
if ( !function_exists('wpex_option_posts_per_page') ) :
	function wpex_option_posts_per_page( $value ) {
		
		global $wpex_option_posts_per_page;
		
		if ( is_search() ) {
			return 5;
		}
		
		if ( is_tax( 'portfolio_category') || is_tax( 'portfolio_tag') || is_post_type_archive( 'portfolio') ) {
			return '16';
		}
	
		if ( is_tax( 'features_category') || is_tax( 'features_tag') || is_post_type_archive( 'features') ) {
			return '-1';
		}
		
		else { return $wpex_option_posts_per_page; }
	}
endif;
?>