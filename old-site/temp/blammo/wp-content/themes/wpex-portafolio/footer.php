<?php
/**
 * Footer.php outputs the code for footer hooks and closing body/html tags
 * @package Portafolio WordPress Theme
 * @since 1.0
 * @author WPExplorer.com
 * @link http://www.wpexplorer.com
 */
?>

			<div class="clear"></div>
		</div><!-- #main-content -->
	</div><!-- #wrap -->
	
	<div id="footer-wrap">
		<footer id="footer">
			<div id="footer-widgets" class="site-footer container clr">
				<div class="footer-box span_1_of_4 col col-1">
					<?php dynamic_sidebar( 'footer-one' ); ?>
				</div><!-- .footer-box -->
				<div class="footer-box span_1_of_4 col">
					<?php dynamic_sidebar( 'footer-two' ); ?>
				</div><!-- .footer-box -->
				<div class="footer-box span_1_of_4 col">
					<?php dynamic_sidebar( 'footer-three' ); ?>
				</div><!-- .footer-box -->
				<div class="footer-box span_1_of_4 col">
					<?php dynamic_sidebar( 'footer-four' ); ?>
				</div><!-- .footer-box -->
			</div><!-- #footer-widgets -->
		</footer><!-- #footer -->
	</div><!-- #footer-wrap -->
	
	<div id="copyright-wrap">
		<div id="copyright" class="container clr" role="contentinfo">
			<?php if ( '' != get_theme_mod( 'wpex_copyright','1') ) { ?>
				<?php echo  get_theme_mod( 'wpex_copyright' ); ?>
			<?php } else { ?>
				&copy; <?php _e( 'Copyright', 'wpex' ); ?> <?php the_date( 'Y' ); ?> &middot; <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php } ?>
		</div><!-- #copyright -->
	</div><!-- #copyright-wrap -->

<?php wp_footer(); ?>
</body>
</html>