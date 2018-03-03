<?php
/**
 * Defines your featured image sizes which can be altered via your child theme
 *
 * @package WordPress
 * @subpackage WPExplorer.com
 * @since 1.0
*/
 
if ( ! function_exists( 'wpex_img' ) ) :

	function wpex_img($args){
		
		//Slider
		if ( $args == 'slider_width' ) return '980';
		if ( $args == 'slider_height' ) return '400';
		if ( $args == 'slider_crop' ) return true;
		
		//blog post and entries
		if ( $args == 'blog_width' ) return '691';
		if ( $args == 'blog_height' ) return '285';
		if ( $args == 'blog_crop' ) return true;
		
		//features post and entries
		if ( $args == 'features_post_width' ) return '691';
		if ( $args == 'features_post_height' ) return '9999';
		if ( $args == 'features_post_crop' ) return false;
		
		//portfolio entries
		if ( $args == 'portfolio_entry_width' ) return '460';
		if ( $args == 'portfolio_entry_height' ) return '380';
		if ( $args == 'portfolio_entry_crop' ) return true;
		
		//portfolio posts
		if ( $args == 'portfolio_post_width' ) return '648';
		if ( $args == 'portfolio_post_height' ) return '9999';
		if ( $args == 'portfolio_post_crop' ) return false;
		
	}
endif;