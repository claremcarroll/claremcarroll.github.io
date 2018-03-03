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



get_header();

?>

	<div class="page-offline">

		<header>

			<h3><?php echo wr_corsa_theme_option( 'wr_maintenance_mode_message' ); ?></h3>

			<ul class="countdown"></ul>

		</header>

		<footer>

			<?php echo wr_corsa_social_channel(); ?>

		</footer>

	</div>

<?php get_footer(); ?>

