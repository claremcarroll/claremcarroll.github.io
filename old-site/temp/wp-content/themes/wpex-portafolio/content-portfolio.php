<?php
/**
 * This file is used for your portfolio entries.
 *
 * @package	Portafolio WordPress Theme
 * @since	1.0
 * @author	WPExplorer.com
 * @link	http://www.wpexplorer.com
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get related query
global $related_query;

/******************************************************
 * Single Posts
*****************************************************/
if ( is_singular( 'portfolio' ) && ! $related_query ) {

	// Get gallery images
	$attachments = wpex_get_gallery_ids();
	// Display slider if there are images saved in the DB
	if ( $attachments ) { ?>
	<?php wp_enqueue_script( 'flexslider', WPEX_JS_DIR .'/flexslider.js', array( 'jquery' ), '2', true ); ?>
	<div class="portfolio-post-slider-wrap clr">
		<div id="portfolio-post-slider" class="flexslider-container">
			<div class="flexslider loading">
				<ul class="slides <?php if ( wpex_gallery_is_lightbox_enabled() == 'on' ) echo 'wpex-gallery-lightbox'; ?>">
					<?php
					// Loop through each attachment ID
					foreach ( $attachments as $attachment ) :
						// Get image alt tag
						$attachment_alt = strip_tags( get_post_meta( $attachment, '_wp_attachment_image_alt', true ) ); ?>
						<li class="slide">
							<?php
							// Display image with lightbox
							if ( wpex_gallery_is_lightbox_enabled() == 'on' ) { ?>
								<a href="<?php echo wp_get_attachment_url( $attachment ); ?>" title="<?php echo $attachment_alt; ?>"><img src="<?php echo aq_resize( wp_get_attachment_url( $attachment ),  wpex_img( 'portfolio_post_width' ), wpex_img( 'portfolio_post_height' ), wpex_img( 'portfolio_post_crop' ) ); ?>" alt="<?php echo $attachment_alt; ?>" /></a>
						   <?php } else {
							   // Lightbox is disabled, only show image ?>
							   <img src="<?php echo aq_resize( wp_get_attachment_url( $attachment ),  wpex_img( 'portfolio_post_width' ), wpex_img( 'portfolio_post_height' ), wpex_img( 'portfolio_post_crop' ) ); ?>" alt="<?php echo $attachment_alt; ?>" />
						   <?php } ?>
						</li>
					<?php endforeach; ?>
				</ul><!-- .slides -->
			</div><!-- .flexslider -->
		</div><!-- .flexslider-container -->
	</div><!-- .portfolio-post-slider-wrap -->
<?php }

/******************************************************
 * Entries
*****************************************************/
} else {

	// Get counter
	global $wpex_count; ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'portfolio-entry clr span_1_of_4 col col-'. $wpex_count . ''); ?>>
		<?php if ( has_post_thumbnail() ) {  ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" class="portfolio-entry-link">
				<img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id() ),  wpex_img( 'portfolio_entry_width' ), wpex_img( 'portfolio_entry_height' ), wpex_img( 'portfolio_entry_crop' ) ); ?>" alt="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" class="portfolio-entry-img" />
			</a>
		<?php } ?>
	</article><!-- .portfolio-entry -->

<?php }