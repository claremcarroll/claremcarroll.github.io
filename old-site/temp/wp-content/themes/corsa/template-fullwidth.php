<?php
/**
 * @version    1.5
 * @package    Corsa
 * @author     WooRockets Team <support@woorockets.com>
 * @copyright  Copyright (C) 2014 WooRockets.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.woorockets.com
 *
 * Template Name: Full Width (No wrap content)
 */

get_header();
?>

	<div id="primary" class="content-area">

		<?php get_sidebar(); ?>
		
		<main id="main" class="site-main cl">

			<?php
				/**
				 * Start the Loop
				 */
				while ( have_posts() ) : the_post();
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-page.php and that will be used instead.
					 */
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;

				endwhile;
			?>

		</main><!-- #main -->		
	</div><!-- #primary -->

<?php get_footer(); ?>
