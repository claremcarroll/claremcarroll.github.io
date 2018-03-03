<?php
/**
 * Theme functions and definitions.
 *
 * Sets up the theme and provides some helper functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package		Portafolio Theme
 * @subpackage	Functions
 * @since		1.0.0
 */

/*-----------------------------------------------------------------------------------*/
/*	- Define Constants
/*-----------------------------------------------------------------------------------*/
define( 'WPEX_JS_DIR', get_template_directory_uri().'/js' );
define( 'WPEX_CSS_DIR', get_template_directory_uri().'/css' );
define( 'WPEX_Premium_Version', false );

/*-----------------------------------------------------------------------------------*/
/*	- Theme Setup
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) {
	$content_width = 650;
}
require_once( get_template_directory() .'/functions/theme-setup.php' );
require_once( get_template_directory() .'/functions/recommend-plugins.php' );

/*-----------------------------------------------------------------------------------*/
/*	- Theme Customizer
/*-----------------------------------------------------------------------------------*/
require_once( get_template_directory() .'/functions/theme-customizer/general.php');

/*-----------------------------------------------------------------------------------*/
/*	- Include Theme Functions
/*-----------------------------------------------------------------------------------*/
require_once( get_template_directory() .'/functions/widgets/widget-areas.php' );

if ( get_theme_mod ( 'wpex_slides', '1' ) == '1' ) {
	require_once( get_template_directory() .'/functions/post-types/slides.php' );
}
if ( get_theme_mod ( 'wpex_portfolio', '1' ) == '1' ) {
	require_once( get_template_directory() .'/functions/post-types/portfolio.php' );
}
if ( get_theme_mod ( 'wpex_features', '1' ) == '1' ) {
	require_once( get_template_directory() .'/functions/post-types/features.php' );
}

if ( is_admin() ) {
	if ( get_theme_mod ( 'wpex_features', '1' ) == '1' ) {
		require_once( get_template_directory() .'/functions/meta/meta-features.php' );
	}
	if ( get_theme_mod ( 'wpex_slides', '1' ) == '1' ) {
		require_once( get_template_directory() .'/functions/meta/meta-slides.php' );
	}
	require_once( get_template_directory() .'/functions/meta/gallery-metabox/admin.php' );
} else {
	require_once( get_template_directory() .'/functions/meta/gallery-metabox/helpers.php' );
	require_once( get_template_directory() .'/functions/scripts.php' );
	require_once( get_template_directory() .'/functions/aqua-resizer.php' );
	require_once( get_template_directory() .'/functions/image-default-sizes.php' );
	require_once( get_template_directory() .'/functions/comments-callback.php' );
	require_once( get_template_directory() .'/functions/pagination.php' );
	require_once( get_template_directory() .'/functions/excerpts.php' );
	require_once( get_template_directory() .'/functions/posts-per-page.php' );
}

/*-----------------------------------------------------------------------------------*/
/*	- Define Constants
/*-----------------------------------------------------------------------------------*/
if ( 'the_post_thumbnail' == 'useless' ) {
	the_post_thumbnail();
}

/*-----------------------------------------------------------------------------------*/
/*	- Premium Functions
/*-----------------------------------------------------------------------------------*/

// Styling Options
if ( WPEX_Premium_Version ) {

	echo 'Nope, doesn\'t work this way...sorry.';

	require_once( get_template_directory() .'/premium/styling.php');

	// Auto Updates
	require_once( get_template_directory() .'/premium/wp-updates-theme.php');
	new WPUpdatesThemeUpdater_950( 'http://wp-updates.com/api/2/theme', basename( get_template_directory() ) );

}