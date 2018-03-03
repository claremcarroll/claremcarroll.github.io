<?php
/**
 * @version    1.5
 * @package    Corsa
 * @author     WooRockets Team <support@woorockets.com>
 * @copyright  Copyright (C) 2014 WooRockets.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.woorockets.com
 */

global $post;
$post_format = get_post_format();

if ( post_password_required() ) { ?>

	<div class="entry-thumb">
		<form action="<?php echo esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ); ?>" method="post">
			<input name="post_password" type="password" size="20" maxlength="20" />
		</form>
	</div><!-- .entry-thumb -->

<?php } else { ?>

	<div class="entry-thumb">
		<?php
		switch ( $post_format ):
			case 'gallery' :
				if ( get_post_gallery() ) :
					echo get_post_gallery();
				endif;
			break;
			
			default:

				if ( has_post_thumbnail() ) :
					if ( is_single() ) { ?>

						<a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail( 'full' ); ?></a>

					<?php } else { ?>

						<a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail( 'blog_thumbnail' ); ?></a>

					<?php }
				else : ?>

					<a href="<?php esc_url( the_permalink() ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/placeholder.png'; ?>" /></a>

				<?php endif;

			break;
		endswitch;
		?>

		<div class="post-meta">
			<span class="posted-on">
				<span class="month"><?php echo the_time( 'M' ); ?></span>
				<span class="date"><?php echo the_time( 'j' ); ?></span>				
				<span class="year"><?php echo the_time( 'Y' ); ?></span>
			</span><!-- .posted-on -->

			<?php
			// Get comments
			if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) :
				echo '<span class="comments-link">';
					comments_popup_link( __( '<span>0</span> Comment', 'corsa' ), __( '<span>1</span> Comment', 'corsa' ), __( '<span>%</span> Comments', 'corsa' ) );
				echo '</span>';
			endif;
			?>
		</div>
	</div><!-- .entry-thumb -->

<?php }
