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
		get_sidebar( 'bottom' );
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container cl">
			<div class="site-info">
				<?php _e( 'Proudly powered by ', 'corsa' ); ?><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'corsa' ) ); ?>"><?php _e( 'WordPress', 'corsa' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Designed By <b><a href="%2$s">%1$s</a></b>.', 'corsa' ), 'WooRockets', 'http://www.woorockets.com' ); ?>
			</div><!-- .site-info -->

			<div class="site-network">
				<?php echo wr_corsa_social_channel(); ?>
			</div><!-- site-network -->
		</div>
		
		<a href="#" class="back-to-top"><i class="icon-angle-up"></i></a>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
