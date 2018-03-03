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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			get_template_part( 'post', 'format' );

			the_content();
		
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'corsa' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php
			// Used between list items, there is a space after the comma
			$tags_list = get_the_tag_list( '', __( ', ', 'corsa' ) );

			if ( $tags_list ) :
		?>
			<span class="tags-links">
				<?php printf( __( '<i class="icon-tags"></i>%1$s', 'corsa' ), $tags_list ); ?>
			</span>
		<?php endif; // End if $tags_list ?>

	</footer><!-- .entry-footer -->
</article><!-- #post -->
