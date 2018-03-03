<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage WPExplorer.com
 * @since 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area clr">
		<div id="content" class="site-content" role="main">
			<?php if ( have_posts() ) : ?>
                <div id="page-header-wrap">
                    <header id="page-header" class="container clr">
                         <h1 id="archive-title"><?php _e( 'Search Results For', 'wpex' ); ?>: <?php the_search_query(); ?></h1>
                    </header><!-- #page-header -->
                </div><!-- #page-header -->
                <article id="post" class="col col-1 span_3_of_4 clr">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'search' ); ?>
                    <?php endwhile;	 ?>
                    <?php wpex_pagination(); ?>
                </div><!-- /post  -->
            <?php else : ?>
                <div id="page-header-wrap">
                    <header id="page-header" class="container clr">
                        <h1 id="archive-title"><?php _e( 'Search Results For', 'wpex' ); ?>: <?php the_search_query(); ?></h1>
                    </header><!-- #page-header -->
                </div><!-- #page-header -->
                <article id="post" class="col col-1 span_3_of_4 clr">
                    <?php _e( 'No results found for that query.', 'wpex' ); ?>
                </div><!-- /post  -->
            <?php endif; ?>
			<?php get_sidebar(); ?>
    	</div><!-- #content -->
	</div><!-- #primary -->
    
<?php get_footer(); ?>