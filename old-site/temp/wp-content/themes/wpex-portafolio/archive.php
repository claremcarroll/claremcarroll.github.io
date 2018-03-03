<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
                    <h1 class="page-header-title"><?php
                            if ( is_day() ) :
                                printf( __( 'Daily Archives: %s', 'wpex' ), get_the_date() );
                            elseif ( is_month() ) :
                                printf( __( 'Monthly Archives: %s', 'wpex' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'wpex' ) ) );
                            elseif ( is_year() ) :
                                printf( __( 'Yearly Archives: %s', 'wpex' ), get_the_date( _x( 'Y', 'yearly archives date format', 'wpex' ) ) );
                            else :
                                echo single_term_title();
                            endif;
					?></h1>
                    <?php if ( term_description() !== '' ) { ?>
                        <div id="archive-description"><?php echo term_description( ); ?></div>
                    <?php } ?>
                </header><!-- #page-header -->
            </div><!-- #page-header -->
            <div class="container clr">
                <?php if ( have_posts() ) : ?>
                   <div id="post" class="col col-1 span_3_of_4 clr">
                        <?php if ( have_posts() ) : ?>
                       <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', get_post_format() ); ?>
                        <?php endwhile;	?>
                    <?php endif; ?>
                    <?php wpex_pagination(); ?>
                    </div><!-- #post -->
                <?php endif; ?>
                <?php get_sidebar(); ?>
            </div><!-- .container -->
    	</div><!-- #content -->
	</div><!-- #primary -->
    
<?php get_footer(); ?>