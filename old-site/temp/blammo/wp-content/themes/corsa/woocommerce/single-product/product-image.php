<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $woocommerce, $product;

$attachment_ids = array();

?>

<div class="images">
	
	<?php
		if ( $product->is_on_sale() ) {		
			echo apply_filters( 'woocommerce_sale_flash', '<span class="sale-badge">'.__( 'Sale!', 'woocommerce' ).'</span>', $post, $product );		
		} else if ( ! $product->get_price() ) {
			echo '<span class="free-badge">' . __( 'Free', 'woocommerce' ) . '</span>';
		}
	?>
	
	<div id="pro-preview" class="owl-carousel">
		
		<?php
			if ( has_post_thumbnail() ) {

				$image_object = get_the_post_thumbnail( $post->ID, 'full' );
				$image_title  = esc_attr( get_the_title( get_post_thumbnail_id() ) );
				$image_alt    = esc_attr( get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ) );
				$image_link   = wp_get_attachment_url( get_post_thumbnail_id() );
				$image_html   = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ));

				if ( $image_link ) {
					echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<div class="item" itemprop="image">%s<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s" alt="%s" data-rel="prettyPhoto[pp_gallery]"><i class="dashicons dashicons-editor-expand"></i></a></div>', $image_html, $image_link, $image_title, $image_alt ), $post->ID );	
				}
				
			}
			else {
				echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<div class="noimg_placeholder"><img src="%s" alt="%s" /></div>', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );
				
			}
			$loop = 0;
			$columns = apply_filters( 'woocommerce_product_thumbnails_columns', 3 );
			
			if ( version_compare( WOOCOMMERCE_VERSION, "2.0.0" ) >= 0 ) {
				
				$attachment_ids = $product->get_gallery_attachment_ids();
				
				if ( $attachment_ids ) {
		
					foreach ( $attachment_ids as $attachment_id ) {
			
						$classes = array( 'zoom' );
			
						if ( $loop == 0 || $loop % $columns == 0 )
							$classes[] = 'first';
			
						if ( ( $loop + 1 ) % $columns == 0 )
							$classes[] = 'last';
			
						$image_link = wp_get_attachment_url( $attachment_id );
			
						if ( ! $image_link )
							continue;
						
						$image_class = esc_attr( implode( ' ', $classes ) );
						$image_title = esc_attr( get_the_title( $attachment_id ) );
						$image_alt = esc_attr( get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) );
						
						if ($image_link) {
						
							$image_html = '<img class="product-slider-image" data-zoom-image="'.$image_link.'" src="'.$image_link.'" alt="'.$image_alt.'" title="'.$image_title.'" />';
	
							echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<div class="item" itemprop="image">%s<a href="%s" class="%s" title="%s" alt="%s" data-rel="prettyPhoto[pp_gallery]"><i class="dashicons dashicons-editor-expand"></i></a></div>', $image_html, $image_link, $image_class, $image_title, $image_alt ), $attachment_id, $post->ID, $image_class );
						
						}
							
						$loop++;
					}
				
				}
				
			} else {
				
				$attachment_ids = get_posts( array(
					'post_type' 	=> 'attachment',
					'numberposts' 	=> -1,
					'post_status' 	=> null,
					'post_parent' 	=> $post->ID,
					'post__not_in'	=> array( get_post_thumbnail_id() ),
					'post_mime_type'=> 'image',
					'orderby'		=> 'menu_order',
					'order'			=> 'ASC'
				) );
										
				if ($attachment_ids) {
			
					$loop = 0;
					$columns = apply_filters( 'woocommerce_product_thumbnails_columns', 3 );
			
					foreach ( $attachment_ids as $key => $attachment ) {
			
						if ( get_post_meta( $attachment->ID, '_woocommerce_exclude_image', true ) == 1 )
							continue;
			
						$classes = array( 'zoom' );
			
						if ( $loop == 0 || $loop % $columns == 0 )
							$classes[] = 'first';
			
						if ( ( $loop + 1 ) % $columns == 0 )
							$classes[] = 'last';
							
						$image_alt = esc_attr( get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) );
			
						printf( '<a href="%s" title="%s" alt="%s" rel="thumbnails" class="%s">%s</a>', wp_get_attachment_url( $attachment->ID ), esc_attr( $attachment->post_title ), $image_alt, implode(' ', $classes), wp_get_attachment_image( $attachment->ID, apply_filters( 'single_product_small_thumbnail_size', 'shop_single' ) ) );
			
						$loop++;
			
					}					
				}
			}
		?>
		
	</div>
	
	<?php if ( $attachment_ids ) { ?>
		<div id="pro-thumb" class="owl-carousel">
			
			<?php 	
				$image = get_option('shop_thumbnail_image_size');
				$image_height = ($image['height']-10);
				
				if ( has_post_thumbnail() ) : ?>

					<div class="item"><?php echo get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ) ) ?></div>

				<?php endif; ?>
				
				<?php
		
				$loop = 0;
				$columns = apply_filters( 'woocommerce_product_thumbnails_columns', 3 );
				
				foreach ( $attachment_ids as $attachment_id ) {

					$classes = array( 'zoom' );
		
					if ( $loop == 0 || $loop % $columns == 0 )
						$classes[] = 'selected';
		
					$image_link = wp_get_attachment_url( $attachment_id );
		
					if ( ! $image_link )
						continue;
		
					$image       = wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ) );
					$image_class = esc_attr( implode( ' ', $classes ) );
				
					echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<div class="item">%s</div>', $image ), $attachment_id, $post->ID, $image_class );
					
					$loop++;
				}
			?>

		</div>
	<?php } ?>

</div>
<?php wp_enqueue_script( 'image-preview-script' ); ?>

