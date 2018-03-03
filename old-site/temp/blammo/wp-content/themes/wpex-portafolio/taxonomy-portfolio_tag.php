<?php
/**
 * The template for displaying your Portfolio Tag custom taxonomy archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WPExplorer.com
 * @since 1.0
 */

get_header(); ?>

	<?php $posttype_obj = get_post_type_object( 'portfolio' ); ?>

	<div id="primary" class="content-area clr">
		<div id="content" class="site-content" role="main">
             <div id="page-header-wrap">
                <header id="page-header" class="container clr">
                    <h1 class="page-header-title"><?php echo $posttype_obj->label; ?>: <?php echo single_term_title(); ?></h1>
					<?php if ( term_description() !== '' ) { ?>
                        <div id="archive-description"><?php echo term_description(); ?></div>
                    <?php } ?>
                </header><!-- #page-header -->
            </div><!-- #page-header-wrap -->
			<?php if ( have_posts( ) ) : ?>
                <div id="portfolio-template" class="container clr">
                    <div id="portfolio-wrap">
                        <div id="portfolio-content" class="clr">
                            <?php $wpex_count=0; ?>
							<?php while ( have_posts() ) : the_post(); ?>
                                <?php $wpex_count++; ?>
                                    <?php get_template_part( 'content', 'portfolio' ); ?>
                                <?php if ( $wpex_count == '4' ) { ?>
                                    <?php $wpex_count=0; ?>
                                <?php } ?>
                            <?php endwhile; ?>
                        </div><!-- #portfolio-content -->
                        <?php wpex_pagination(); ?>
                    </div><!-- #portfolio-wrap -->
                </div><!-- #portfolio-template -->
            <?php endif; ?>
    	</div><!-- #content -->
	</div><!-- #primary -->
    
<?php get_footer(); ?>