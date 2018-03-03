<?php
/**
 * This file is used for your blog and archive entries.
 * @package Portafolio WordPress Theme
 * @since 1.0
 * @author WPExplorer.com
 * @link http://www.wpexplorer.com
 */
 
 
/******************************************************
 * Single Posts
 * @since 1.0
*****************************************************/
if ( is_singular() && is_main_query() ) { ?>
	
	<header id="post-header">
		<h1><?php the_title(); ?></h1>
		<ul class="meta clr">
			  
			<?php if ( comments_open() ) { ?>
				<li><?php _e(); ?> <?php comments_popup_link(__( '0 Comments', 'wpex' ), __( '1 Comment', 'wpex' ), __( '% Comments', 'wpex' ), 'comments-link' ); ?></li>
			<?php } ?>
		</ul>
	</header><!-- #post-header -->
	<?php if ( has_post_thumbnail() ) { ?>
		<div id="post-thumbnail">
			<img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id() ),  wpex_img( 'blog_width' ), wpex_img( 'blog_height' ), wpex_img( 'blog_crop' ) ); ?>" alt="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" />
		</div><!-- /post-thumbnail -->
	<?php } ?>
	<article class="entry clr">
		<?php the_content(); ?>
	</article><!-- .entry -->
	<?php wp_link_pages(); ?>
	<?php comments_template(); ?>
	
<?php
/******************************************************
 * Entries
 * @since 1.0
*****************************************************/
} else { ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-entry clr' ); ?>>  
		<header class="post-heading">
			<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>
		</header>
		<ul class="meta clr">
			 


 
			 <?php if ( comments_open() ) { ?>
				
			 <?php } ?>
		</ul>
		<?php if ( has_post_thumbnail() ) {  ?>
			<div class="blog-entry-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id() ),  wpex_img( 'blog_width' ), wpex_img( 'blog_height' ), wpex_img( 'blog_crop' ) ); ?>" alt="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" /></a>
			</div><!-- .post-entry-thumbnail -->
		<?php } ?>
		<div class="entry-content">
			<div class="entry-text entry">
				
<?php the_content(); ?>


			</div><!-- /entry-text -->
		</div><!-- .entry-content -->
	</article><!-- .entry -->

<?php } ?>