<?php
/**
 * The Template for displaying your single service posts
 *
 * @package WordPress
 * @subpackage WPExplorer.com
 * @since 1.0
 */
 
get_header(); ?>

	<div id="primary" class="content-area clr">
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
                <div id="page-header-wrap">
                    <header id="page-header" class="container clr">
                        <h1><?php the_title(); ?></h1>
                    </header><!-- #page-header -->
                </div><!-- #page-header-wrap -->
                <div id="post" class="single-post clr">
                    <?php get_template_part( 'content', 'features' ); ?>
                    <article class="entry clr">
                    	<?php the_content(); ?>
                    </article><!-- .entry -->  
					<?php comments_template(); ?>
                    <?php wp_link_pages(); ?>           
                    <div id="post-pagination" class="clr">    	
                        <div class="post-prev"><?php previous_post_link( '%link', __( 'Previous Service', 'wpex' ) .' &rarr;', false ); ?></div>
                        <div class="post-next"><?php next_post_link( '%link', '&larr; ' . __( 'Next Service', 'wpex' ), false ); ?></div>
                    </div><!-- #post-pagination -->
				</div><!-- #post -->
			<?php endwhile; ?>
			<?php get_sidebar(); ?>
    	</div><!-- #content -->
	</div><!-- #primary -->
    
<?php get_footer(); ?>