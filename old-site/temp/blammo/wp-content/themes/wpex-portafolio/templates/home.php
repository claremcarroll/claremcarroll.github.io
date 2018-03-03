<?php
/**
 * Template Name: Homepage
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
				* Slider
				****************************/
				get_template_part( 'content','slides' );  ?>
				
				<?php
				/**************************
				* Features
				****************************/ ?>
				<?php $query_features_posts = new WP_Query(
					array(
						'post_type'			=> 'features',
						'posts_per_page'	=> -1,
						'no_found_rows'		=> true,
					)
				);
				if ( $query_features_posts->posts ) { ?>
					<div id="home-features">
						<div id="features-wrap" class="clr row clr">
							<?php $wpex_count=0; ?>
							<?php foreach( $query_features_posts->posts as $post ) : setup_postdata($post); ?>
								<?php $wpex_count++; ?>
									<?php get_template_part( 'content','features' ); ?>
								<?php if ( $wpex_count == 3 ) { ?>
									<?php $wpex_count=0; ?>
								<?php } ?>
							<?php endforeach; ?>
						</div><!-- #features-wrap -->
					</div><!-- #home-features -->
				<?php } ?>
				<?php wp_reset_postdata(); ?>
				
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
							<h2 class="heading"><?php echo get_theme_mod( 'wpex_home_portfolio_title', __( 'Recent Work', 'wpex' ) ); ?></h2>
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
						<div id="home-portfolio-view-all" class="clr">
							<a href="<?php echo get_post_type_archive_link( 'portfolio' ); ?>" title="<?php _e( 'Browse all', 'wpex'); ?>"><?php _e( 'Browse all', 'wpex'); ?></a>
						</div><!-- #home-portfolio-view-all -->
					</div><!-- #home-portfolio -->
				<?php } ?>
				<?php wp_reset_postdata(); ?>
				
			</div><!-- /home-wrap -->
		</div><!-- #content -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>