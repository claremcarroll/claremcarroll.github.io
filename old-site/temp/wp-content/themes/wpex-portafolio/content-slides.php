<?php
/**
 * This file is used for your homepage slides
 *
 * @package Portafolio WordPress Theme
 * @since   1.0
 * @author  WPExplorer.com
 * @link    http://www.wpexplorer.com
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Start Query
$query_slides = new WP_Query( array(
		'post_type'			=> 'slides',
		'posts_per_page'	=> '-1',
		'no_found_rows'		=> true,
	)
);

// If Slides exist display them
if ( $query_slides->posts ) { ?>
	<?php
    // Load slider script
    wp_enqueue_script( 'flexslider', WPEX_JS_DIR .'/flexslider.js', array( 'jquery' ), '2', true ); ?>
    <div id="home-slider-wrap">
        <div id="home-slider" class="flexslider clr loading">
            <ul class="slides">
                <?php
                // Lopp throught slides
                foreach( $query_slides->posts as $post ) : setup_postdata($post); ?>
                <?php
                // Display slide
                if ( has_post_thumbnail() || get_post_meta( get_the_ID(), 'wpex_slides_video', true ) ) { ?>
                    <li>
                    	<div class="slide-inner fitvids">
                        	<?php if ( get_post_meta( get_the_ID(), 'wpex_slides_video', true ) !== '' ) {
								echo wp_oembed_get( get_post_meta( get_the_ID(), 'wpex_slides_video', true ) );
							} else {
								if ( get_post_meta( get_the_ID(), 'wpex_slides_url', true ) !== '' ) { ?>
                                <a href="<?php echo get_post_meta( get_the_ID(), 'wpex_slides_url', true ); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" target="_<?php echo get_post_meta( get_the_ID(), 'wpex_slides_url_target', true ); ?>">
                                	 <img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id() ),  wpex_img( 'slider_width' ), wpex_img( 'slider_height' ), wpex_img( 'slider_crop' ) ); ?>" alt="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" />
                                </a>
								<?php } else { ?>
                            	 <img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id() ),  wpex_img( 'slider_width' ), wpex_img( 'slider_height' ), wpex_img( 'slider_crop' ) ); ?>" alt="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" />
								<?php } ?>
							<?php } ?>
                        </div><!-- .slide-inner -->
                    </li>
                <?php } ?>
                <?php
                // End loop
                endforeach;
                // Reset postdata
                wp_reset_postdata(); ?>
            </ul><!-- .slides -->
        </div><!-- #home-slider -->
    </div><!-- #home-slider-wrap -->
<?php } ?>