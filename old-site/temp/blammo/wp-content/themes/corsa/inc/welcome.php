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

if ( ! function_exists( 'wr_corsa_welcome' ) ) {
	function wr_corsa_welcome() { ?>
		<div class="wrap about-wrap corsa-welcome">
			<div class="feature-section col two-col line">
				<div id="col-left">
					<a class="thickbox" href="<?php echo esc_url( get_template_directory_uri() ) . '/screenshot.png'; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/welcome/corsa.png'; ?>" width="328" height="285" alt="Corsa" /></a>
				</div>
				<div id="col-right">
					<h2><?php _e( 'About Corsa', 'corsa' ); ?></h2>
					<p><?php _e( 'Corsa is designed and coded with heart by <b>WooRockets Team</b>. It is made to be best suited for personal blog, business or ecommerce vwebsite, but it can be powerfully customized with visual page builder to be suitable for any other kinds of websites.', 'corsa' ); ?></p>
					<p><?php
						printf(
							__( 'Get to know Corsa better by %s and get a site looking exactly like our live demo.', 'corsa' ),
							'<a target="_blank" href="' . admin_url( 'customize.php', 'http' ) . '"><i>' . __( 'installing sample data', 'corsa' ) . '</i></a>'
						);
					?></p>
					<div class="update-nag notice-success">
						<div>
							<p><?php echo sprintf( esc_html__( 'Current version: 1.4 (%sChange log%s)', 'corsa' ), '<a target="_blank" href="https://themes.svn.wordpress.org/corsa/1.4/changelog.txt">', '</a>' ); ?></p>
							<p><?php _e( 'Follow us to get noticed when next version of Corsa is released', 'corsa' ); ?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="feature-section">
				<form class="corsa-features big-icon">
					<fieldset>
						<legend><h2><?php _e( 'Support', 'corsa' ); ?></h2></legend>
						<div class="three-col">
							<div class="col-1">
								<a target="_blank" href="http://www.woorockets.com/forum/product-support/corsa/"><span class="dashicons dashicons-groups"></span></a>
								<h4><a target="_blank" href="http://www.woorockets.com/forum/product-support/corsa/"><?php _e( 'Support Forum', 'corsa' ); ?></a></h4>
								<p><?php _e( 'Go to our forum to ask product-related question you may concern.', 'corsa' ); ?></p>
							</div>
							<div class="col-2">
								<a target="_blank" href="http://www.woorockets.com/docs/corsa/"><span class="dashicons dashicons-admin-page"></span></a>
								<h4><a target="_blank" href="http://www.woorockets.com/docs/corsa/"><?php _e( 'Documentation', 'corsa' ); ?></a></h4>
								<p><?php _e( 'Detailed instruction of how to use Corsa and make the best out of it.', 'corsa' ); ?></p>
							</div>
							<div class="col-3 last-feature">
								<a target="_blank" href="http://www.woorockets.com/contact/"><span class="dashicons dashicons-email-alt"></span></a>
								<h4><a target="_blank" href="http://www.woorockets.com/contact/"><?php _e( 'Contact us', 'corsa' ); ?></a></h4>
								<p><?php _e( 'Mail us if you have other non-support related issues.', 'corsa' ); ?></p>
							</div>
						</div>
					</fieldset>
				</form>
				<form class="corsa-features">
					<fieldset>
						<legend><h2><?php _e( 'Get involved', 'corsa' ); ?></h2></legend>
						<div class="two-col">
							<div class="col-1">
								<h4><span class="dashicons dashicons-star-filled"></span><?php _e( 'Rate Corsa', 'corsa' ); ?></h4>
								<p><?php _e( 'Write a review to share your thoughts of Corsa with other WordPress folks. Next versions of Corsa will be improved based on your opinions.', 'corsa' ); ?></p>
								<?php echo sprintf( esc_html__( '%sReview%s', 'corsa' ), '<a class="mgt button button-primary" target="_blank" href="https://wordpress.org/support/view/theme-reviews/corsa">', '</a>' ); ?>
							</div>
							<div class="col-2 last-feature">
								<h4><span class="dashicons dashicons-desktop"></span><?php _e( 'Submit your Website', 'corsa' ); ?></h4>
								<p><?php _e( 'Your website is using Corsa? Share with us. We will include it in our customer showcase and have it exposed to thousands of WooRockets website\'s visitors.', 'corsa' ); ?></p>
								<?php echo sprintf( esc_html__( '%sSubmit your website%s', 'corsa' ), '<a class="button button-primary" target="_blank" href="http://www.woorockets.com/contact/">', '</a>' ); ?>
							</div>
						</div>
					</fieldset>
				</form>
			</div>

			<div id="wr-promo-ab" class="feature-section line" style="padding-bottom: 30px;">
				<h3><?php _e( 'Premium<br>WooCommerce Themes', 'corsa' ); ?></h3>
				<ul>
					<li><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/welcome/excellent-icon.png"></span><?php _e( 'Excellent designs', 'corsa' ); ?></li>
					<li><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/welcome/unlimited-icon.png"></span><?php _e( 'Unlimited customization ability', 'corsa' ); ?></li>
					<li><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/welcome/additional-icon.png"></span><?php _e( 'Additional eCommerce features', 'corsa' ); ?></li>
				</ul>
				<p class="btn-premium">
					<a href="http://www.woorockets.com/themes/" target="_blank">
						<strong><?php _e( 'View the collection now', 'corsa' ); ?></strong>
						<span><?php _e( 'And learn how our themes can boost your business!', 'corsa' ); ?></span>
					</a>
				</p>
			</div>

			<div class="feature-section footer">
				<a target="_blank" href="http://www.woorockets.com/"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/welcome/logo-wr.png'; ?>" width="48" height="46" alt="WooRockets" />
				<span><?php _e( 'www.woorockets.com', 'corsa' ); ?></span>
				</a>
				<h4><?php _e( 'Don\'t miss future updates of Corsa and upcoming free themes from WooRockets!', 'corsa' ); ?></h4>
				<a class="button button-primary" target="_blank" href="http://www.woorockets.com/#subscribe"><?php _e( 'Subscribe Now', 'corsa' ); ?></a>
			</div>
		</div>
	<?php }
}

/**
 * Handles calls to show message.
 */
function wr_corsa_welcome_message_status() {
	$status = $_REQUEST['status'];
	update_option( 'wr_corsa_welcome_banner_status', $status );
}
add_action( 'wp_ajax_update_welcome_banner_status', 'wr_corsa_welcome_message_status' );

/**
 * Display the welcome message.
 */
function wr_corsa_welcome_message_show() {
	if ( get_option( 'wr_corsa_welcome_banner_status' ) == 'hide' ) return;
	?>
	<div class="woorockets-welcome-message">
		<div class="woorockets-logo">
			<img src="<?php echo get_template_directory_uri() . '/assets/img/welcome/woorockets.png' ?>" width="48" height="45" />
		</div>
		<p><?php
			printf(
				__( 'Thank you for installing Corsa from WooRockets Team! We are making new hi-quality themes and plugins for you ;) Follow us on %1$s or %2$s to our email list and be the first to get updated.', 'corsa' ),
				'<a target="_blank" href="https://twitter.com/woorockets">Twitter</a>',
				'<a target="_blank" href="http://www.woorockets.com/#subscribe">Subscribe</a>'
			);
		?></p>
		<a href="#" class="dismiss"><span class="dashicons dashicons-no-alt"></span></a>
	</div>
	<?php
}
add_action( 'in_admin_header', 'wr_corsa_welcome_message_show' );

/**
 * Handles calls message after switch theme.
 */
function wr_corsa_welcome_message_dismiss() {
    update_option( 'wr_corsa_welcome_banner_status', 'show' );
}
add_action( 'switch_theme', 'wr_corsa_welcome_message_dismiss' );

/**
 * Enqueue style for welcome pages.
 */
function wr_corsa_welcome_page_style() {
	wp_enqueue_style( 'corsa-welcome-css', get_template_directory_uri() . '/assets/css/welcome.css' );
	wp_enqueue_script( 'corsa-welcome-script', get_template_directory_uri() . '/assets/js/welcome.js' );
}
add_action( 'admin_enqueue_scripts', 'wr_corsa_welcome_page_style' );

/**
 * Enqueue twitter button script.
 */
function wr_corsa_twitter_follow_btn() { ?>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<?php
}
add_action( 'admin_footer', 'wr_corsa_twitter_follow_btn' );
