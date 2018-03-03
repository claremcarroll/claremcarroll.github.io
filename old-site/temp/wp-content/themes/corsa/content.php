<?php
/**
 * @version    1.5
 * @package    Corsa
 * @author     WooRockets Team <support@woorockets.com>
 * @copyright  Copyright (C) 2014 WooRockets.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.woorockets.com
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class();?>>

	<?php
	if ( has_post_format('quote') ) :
		echo '<div class="quote-content"><i class="icon-quote"></i>';
			the_content( '' );
		echo '</div>';
	else :
	?>

		<header class="entry-header">

			<?php get_template_part( 'post', 'format' ); ?>
			
			<h2 class="entry-title">
				<?php
					the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' );
				?>
			</h2>

			<div class="entry-meta">
				<?php wr_corsa_post_meta(); ?>
			</div><!-- .entry-meta -->

		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Read More', 'corsa' ), 
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'corsa' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	<?php endif; ?>
</article><!-- #post-## -->
