<?php
/**
 * Template Name: Clare
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
				
				
				
				

                <div class="container clr">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <div id="page-featured-img">
                        	<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php get_the_title(); ?>" />
                        </div>
                    <?php } ?>
                    <article id="full-width" class="clr">
                        <div class="entry clr">	
                            <?php the_content(); ?>
                        </div><!-- .entry -->
                    </article><!-- #post -->       
                </div><!-- .container -->
				



				
			</div><!-- /home-wrap -->
		</div><!-- #content -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>