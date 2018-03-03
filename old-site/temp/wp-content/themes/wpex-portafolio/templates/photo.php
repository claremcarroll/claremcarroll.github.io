<?php

/**

 * Template Name: Photo

 *

 *

 * Custom template used for this theme's homepage display

 *

 * @package WordPress

 * @subpackage WPExplorer.com

 * @since 1.0

 */



get_header(); ?>



	<div id="primary" class="content-area clr">

		<div id="content" class="site-content" role="main">

			<div id="home-wrap" class="clr container">

				

				

				

				<?php

				/**************************

				* Portfolio

				****************************/ ?>

				<?php $home_portfolio_query = new WP_Query(

					array(

						'post_type'			=> 'portfolio',

						'posts_per_page'	=> get_theme_mod( 'wpex_home_portfolio_count', '8' ),

						'no_found_rows'		=> true,

					)

				);

				if ( $home_portfolio_query->posts ) { ?>

					<div id="home-portfolio" class="clr">

						<?php if( get_theme_mod( 'wpex_home_portfolio_title', 'wpex' ) ) { ?>

							<h2 class="heading"><?php echo get_theme_mod( 'wpex_home_portfolio_title', __( 'Photo Gallery', 'wpex' ) ); ?></h2>

						<?php } ?>

						<div id="home-portfolio-entries" class="clr">

							<?php $wpex_count=0; ?>

							<?php foreach( $home_portfolio_query->posts as $post ) : setup_postdata($post); ?>

								<?php $wpex_count++; ?>

									<?php get_template_part( 'content', 'portfolio' ); ?>

								<?php if ( $wpex_count == '4' ) { ?>

									<?php $wpex_count=0; ?>

								<?php } ?>

							<?php endforeach; ?>

						</div><!-- #home-portfolio-entries -->



					</div><!-- #home-portfolio -->

				<?php } ?>

				<?php wp_reset_postdata(); ?>

				

			</div><!-- /home-wrap -->

		</div><!-- #content -->

	</div><!-- #primary -->

	

<?php get_footer(); ?>