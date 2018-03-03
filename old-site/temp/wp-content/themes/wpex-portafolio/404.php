<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage WPExplorer.com
 * @since 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area clr">
		<div id="content" class="site-content" role="main">
        	<div id="page-header-wrap">
                <header id="page-header" class="container clr">
                    <h1><?php _e( '404: Page Not Found', 'wpex' ); ?></h1>
                </header><!-- #page-header -->
            </div><!-- #page-header -->
            <div class="container clr">
                <div class="entry clr">			
                    <p id="error-page-text">
                        <?php _e( 'Unfortunately, the page you tried accessing could not be retrieved. Please visit the', 'wpex' ); ?> <a href="<?php echo home_url() ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php _e( 'homepage', 'wpex' ); ?> &rarr;</a>
                    </p>
                </div><!-- .entry -->
            </div><!-- .container -->
    	</div><!-- #content -->
	</div><!-- #primary -->
    
<?php get_footer(); ?>