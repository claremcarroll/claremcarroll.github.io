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



/**

 * Customizer Color Schemes CSS Output

 *

 * @package Corsa

 */

function wr_corsa_color_schemes_output() {

	// Get theme options

	$color = wr_corsa_theme_option( 'wr_color_schemes' );



	if ( 'green' == $color ) : ?>



		<style>

			body,

			.site-header, 

			button, 

			input[type="button"], 

			input[type="reset"], 

			input[type="submit"], 

			.comments-area .action-link a:hover, 

			.comment-respond .comment-form .form-submit input[type="submit"]:hover, 

			.widget #wp-calendar caption, 

			.page-offline footer,

			.post-meta .comments-link,

			.more-link,

			.social li a:hover,

			.comment-respond .comment-form .form-submit input[type="submit"],

			.owl-theme .owl-controls .owl-page span,

			.jsn-bootstrap3 .wr-element-accordion .panel-default > .panel-heading, 

			.jsn-bootstrap3 .wr-element-accordion .panel-title a:hover,

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols-featured .wr-prtbl-header .wr-prtbl-title, 

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols .wr-prtbl-footer .btn.btn-default:hover, 

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols.wr-prtbl-cols-featured .wr-prtbl-footer .btn.btn-default,

			.widget.woocommerce.widget_price_filter .ui-slider .ui-slider-handle,

			.widget.woocommerce.widget_price_filter .price_slider_amount .button,

			.wr-shop .item .p-info .action a,

			.woocommerce #content input.button.alt, 

			.woocommerce #respond input#submit.alt, 

			.woocommerce a.button.alt, 

			.woocommerce button.button.alt, 

			.woocommerce input.button.alt, 

			.woocommerce-page #content input.button.alt, 

			.woocommerce-page #respond input#submit.alt, 

			.woocommerce-page a.button.alt, 

			.woocommerce-page button.button.alt, 

			.woocommerce-page input.button.alt,

			.woocommerce #content div.product .woocommerce-tabs ul.tabs li.active, 

			.woocommerce div.product .woocommerce-tabs ul.tabs li.active,

			.woocommerce #content input.button:hover,

			.woocommerce #respond input#submit:hover,

			.woocommerce a.button:hover,

			.woocommerce button.button:hover,

			.woocommerce input.button:hover,

			.woocommerce-page #content input.button:hover,

			.woocommerce-page #respond input#submit:hover,

			.woocommerce-page a.button:hover,

			.woocommerce-page button.button:hover,

			.woocommerce-page input.button:hover,

			.header-cart .cart-content .buttons > a.checkout, 

			.widget.woocommerce .widget_shopping_cart_content .buttons > a.checkout,

			.jsn-bootstrap3 .wr-element-carousel .carousel .carousel-control span:hover,

			.jsn-bootstrap3 .wr-element-carousel .carousel .carousel-indicators .active,

			.jsn-bootstrap3 .wr-element-testimonial .carousel.wr-testimonial ol.carousel-indicators li.active,

			.site-header:before {

				background-color: #78bfa4;

			}

			a, 

			.format-standard .entry-title a, 

			.format-standard .entry-title i, 

			.entry-meta a:hover, 

			.widget a:hover, 

			.site-footer a, 

			#menu-top li a:hover,

			#menu-top li .sub-menu li a:hover,

			#menu-main li .sub-menu li a:hover, 

			#menu-main li .sub-menu li.current-menu-item > a,

			.page-nav li .current, 

			.page-nav li a:hover, 

			.widget-title,

			.widget_search form::before,

			.content-bottom .widget-title,

			.single .post .entry-title,

			.single .post .tags-links i,

			.comments-title, 

			.comment-reply-title,

			.comments-area .comment-body .comment-author,

			.comments-area .action-link .comment-reply-link,

			.secondary-sidebar .widget-title,

			.entry-title,

			.entry-meta a:hover, .entry-meta > span:hover,

			.jsn-bootstrap3 .wr-element-heading h1, 

			.jsn-bootstrap3 .wr-element-heading h2, 

			.jsn-bootstrap3 .wr-element-heading h3, 

			.jsn-bootstrap3 .wr-element-heading h4, 

			.jsn-bootstrap3 .wr-element-heading h5, 

			.jsn-bootstrap3 .wr-element-heading h6,

			.jsn-bootstrap3 .wr-element-list .wr-list-content-wrap h4,

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:hover, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a:focus, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a:focus,

			.woocommerce #content nav.woocommerce-pagination ul li a:focus, 

			.woocommerce #content nav.woocommerce-pagination ul li a:hover, 

			.woocommerce #content nav.woocommerce-pagination ul li span.current, 

			.woocommerce nav.woocommerce-pagination ul li a:focus, 

			.woocommerce nav.woocommerce-pagination ul li a:hover, 

			.woocommerce nav.woocommerce-pagination ul li span.current, 

			.woocommerce-page #content nav.woocommerce-pagination ul li a:focus, 

			.woocommerce-page #content nav.woocommerce-pagination ul li a:hover, 

			.woocommerce-page #content nav.woocommerce-pagination ul li span.current, 

			.woocommerce-page nav.woocommerce-pagination ul li a:focus, 

			.woocommerce-page nav.woocommerce-pagination ul li a:hover, 

			.woocommerce-page nav.woocommerce-pagination ul li span.current,

			.woocommerce #content div.product .woocommerce-tabs ul.tabs li a:hover, 

			.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,

			.jsn-bootstrap3 .wr-element-progresscircle .wr-progress-circle .circle-text,

			.jsn-bootstrap3 .wr-element-promobox .wr-promobox h2 {

				color: #78bfa4;

			}

			.widget-title, 

			.search-box form input[type="text"], 

			.format-standard .entry-title a, 

			.format-standard .entry-title i, 

			.comments-area .comment-body, 

			.comment-respond .comment-form [class*="comment-form"] input:focus, 

			.comment-respond .comment-form .comment-form-comment textarea:focus, 

			.widget input:focus,

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:hover, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-left.tabbable, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right.tabbable {

				border-color: #78bfa4;

			}

			blockquote, address, q {

				border-left: 3px solid #78bfa4;

			}

			.content-bottom .widget ul li {

				background: url("<?php echo get_template_directory_uri() . '/assets/img/icons/dot-white.png' ?>") no-repeat left 8px;

			}

			.page-offline .countdown li {

				border-color: #78bfa4 #eee #eee;

			}

		</style>



	<?php elseif ( 'red' == $color ) : ?>



		<style>

			body,

			.site-header, 

			button, 

			input[type="button"], 

			input[type="reset"], 

			input[type="submit"], 

			.comments-area .action-link a:hover, 

			.comment-respond .comment-form .form-submit input[type="submit"]:hover, 

			.widget #wp-calendar caption, 

			.page-offline footer,

			.post-meta .comments-link,

			.more-link,

			.social li a:hover,

			.comment-respond .comment-form .form-submit input[type="submit"],

			.owl-theme .owl-controls .owl-page span,

			.jsn-bootstrap3 .wr-element-accordion .panel-default > .panel-heading, 

			.jsn-bootstrap3 .wr-element-accordion .panel-title a:hover,

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols-featured .wr-prtbl-header .wr-prtbl-title, 

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols .wr-prtbl-footer .btn.btn-default:hover, 

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols.wr-prtbl-cols-featured .wr-prtbl-footer .btn.btn-default,

			.widget.woocommerce.widget_price_filter .ui-slider .ui-slider-handle,

			.widget.woocommerce.widget_price_filter .price_slider_amount .button,

			.wr-shop .item .p-info .action a,

			.woocommerce #content input.button.alt, 

			.woocommerce #respond input#submit.alt, 

			.woocommerce a.button.alt, 

			.woocommerce button.button.alt, 

			.woocommerce input.button.alt, 

			.woocommerce-page #content input.button.alt, 

			.woocommerce-page #respond input#submit.alt, 

			.woocommerce-page a.button.alt, 

			.woocommerce-page button.button.alt, 

			.woocommerce-page input.button.alt,

			.woocommerce #content div.product .woocommerce-tabs ul.tabs li.active, 

			.woocommerce div.product .woocommerce-tabs ul.tabs li.active,

			.woocommerce #content input.button:hover,

			.woocommerce #respond input#submit:hover,

			.woocommerce a.button:hover,

			.woocommerce button.button:hover,

			.woocommerce input.button:hover,

			.woocommerce-page #content input.button:hover,

			.woocommerce-page #respond input#submit:hover,

			.woocommerce-page a.button:hover,

			.woocommerce-page button.button:hover,

			.woocommerce-page input.button:hover,

			.header-cart .cart-content .buttons > a.checkout, 

			.widget.woocommerce .widget_shopping_cart_content .buttons > a.checkout,

			.jsn-bootstrap3 .wr-element-carousel .carousel .carousel-control span:hover,

			.jsn-bootstrap3 .wr-element-carousel .carousel .carousel-indicators .active,

			.jsn-bootstrap3 .wr-element-testimonial .carousel.wr-testimonial ol.carousel-indicators li.active,

			.site-header:before {

				background-color: #a65a5a;

			}

			a, 

			.format-standard .entry-title a, 

			.format-standard .entry-title i, 

			.entry-meta a:hover, 

			.widget a:hover, 

			.site-footer a, 

			#menu-top li a:hover,

			#menu-top li .sub-menu li a:hover,

			#menu-main li .sub-menu li a:hover, 

			#menu-main li .sub-menu li.current-menu-item > a,

			.page-nav li .current, 

			.page-nav li a:hover, 

			.widget-title,

			.widget_search form::before,

			.content-bottom .widget-title,

			.single .post .entry-title,

			.single .post .tags-links i,

			.comments-title, 

			.comment-reply-title,

			.comments-area .comment-body .comment-author,

			.comments-area .action-link .comment-reply-link,

			.secondary-sidebar .widget-title,

			.entry-title,

			.entry-meta a:hover, .entry-meta > span:hover,

			.jsn-bootstrap3 .wr-element-heading h1, 

			.jsn-bootstrap3 .wr-element-heading h2, 

			.jsn-bootstrap3 .wr-element-heading h3, 

			.jsn-bootstrap3 .wr-element-heading h4, 

			.jsn-bootstrap3 .wr-element-heading h5, 

			.jsn-bootstrap3 .wr-element-heading h6,

			.jsn-bootstrap3 .wr-element-list .wr-list-content-wrap h4,

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:hover, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a:focus, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a:focus,

			.woocommerce #content nav.woocommerce-pagination ul li a:focus, 

			.woocommerce #content nav.woocommerce-pagination ul li a:hover, 

			.woocommerce #content nav.woocommerce-pagination ul li span.current, 

			.woocommerce nav.woocommerce-pagination ul li a:focus, 

			.woocommerce nav.woocommerce-pagination ul li a:hover, 

			.woocommerce nav.woocommerce-pagination ul li span.current, 

			.woocommerce-page #content nav.woocommerce-pagination ul li a:focus, 

			.woocommerce-page #content nav.woocommerce-pagination ul li a:hover, 

			.woocommerce-page #content nav.woocommerce-pagination ul li span.current, 

			.woocommerce-page nav.woocommerce-pagination ul li a:focus, 

			.woocommerce-page nav.woocommerce-pagination ul li a:hover, 

			.woocommerce-page nav.woocommerce-pagination ul li span.current,

			.woocommerce #content div.product .woocommerce-tabs ul.tabs li a:hover, 

			.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,

			.jsn-bootstrap3 .wr-element-progresscircle .wr-progress-circle .circle-text,

			.jsn-bootstrap3 .wr-element-promobox .wr-promobox h2 {

				color: #a65a5a;

			}

			.widget-title, 

			.search-box form input[type="text"], 

			.format-standard .entry-title a, 

			.format-standard .entry-title i, 

			.comments-area .comment-body, 

			.comment-respond .comment-form [class*="comment-form"] input:focus, 

			.comment-respond .comment-form .comment-form-comment textarea:focus, 

			.widget input:focus,

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:hover, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-left.tabbable, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right.tabbable {

				border-color: #a65a5a;

			}

			blockquote, address, q {

				border-left: 3px solid #a65a5a;

			}

			.content-bottom .widget ul li {

				background: url("<?php echo get_template_directory_uri() . '/assets/img/icons/dot-white.png' ?>") no-repeat left 8px;

			}

			.page-offline .countdown li {

				border-color: #a65a5a #eee #eee;

			}

			.content-bottom a:hover {

				color: #efa3a3;

			}

		</style>



	<?php elseif ( 'grey' == $color ) : ?>



		<style>

			body,

			.site-header, 

			button, 

			input[type="button"], 

			input[type="reset"], 

			input[type="submit"], 

			.comments-area .action-link a:hover, 

			.comment-respond .comment-form .form-submit input[type="submit"]:hover, 

			.widget #wp-calendar caption, 

			.page-offline footer,

			.post-meta .comments-link,

			.more-link,

			.social li a:hover,

			.comment-respond .comment-form .form-submit input[type="submit"],

			.owl-theme .owl-controls .owl-page span,

			.jsn-bootstrap3 .wr-element-accordion .panel-default > .panel-heading, 

			.jsn-bootstrap3 .wr-element-accordion .panel-title a:hover,

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols-featured .wr-prtbl-header .wr-prtbl-title, 

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols .wr-prtbl-footer .btn.btn-default:hover, 

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols.wr-prtbl-cols-featured .wr-prtbl-footer .btn.btn-default,

			.widget.woocommerce.widget_price_filter .ui-slider .ui-slider-handle,

			.widget.woocommerce.widget_price_filter .price_slider_amount .button,

			.wr-shop .item .p-info .action a,

			.woocommerce #content input.button.alt, 

			.woocommerce #respond input#submit.alt, 

			.woocommerce a.button.alt, 

			.woocommerce button.button.alt, 

			.woocommerce input.button.alt, 

			.woocommerce-page #content input.button.alt, 

			.woocommerce-page #respond input#submit.alt, 

			.woocommerce-page a.button.alt, 

			.woocommerce-page button.button.alt, 

			.woocommerce-page input.button.alt,

			.woocommerce #content div.product .woocommerce-tabs ul.tabs li.active, 

			.woocommerce div.product .woocommerce-tabs ul.tabs li.active,

			.woocommerce #content input.button:hover,

			.woocommerce #respond input#submit:hover,

			.woocommerce a.button:hover,

			.woocommerce button.button:hover,

			.woocommerce input.button:hover,

			.woocommerce-page #content input.button:hover,

			.woocommerce-page #respond input#submit:hover,

			.woocommerce-page a.button:hover,

			.woocommerce-page button.button:hover,

			.woocommerce-page input.button:hover,

			.header-cart .cart-content .buttons > a.checkout, 

			.widget.woocommerce .widget_shopping_cart_content .buttons > a.checkout,

			.jsn-bootstrap3 .wr-element-carousel .carousel .carousel-control span:hover,

			.jsn-bootstrap3 .wr-element-carousel .carousel .carousel-indicators .active,

			.jsn-bootstrap3 .wr-element-testimonial .carousel.wr-testimonial ol.carousel-indicators li.active,

			.site-header:before {

				background-color: #566267;

			}

			a, 

			.format-standard .entry-title a, 

			.format-standard .entry-title i, 

			.entry-meta a:hover, 

			.widget a:hover, 

			.site-footer a, 

			#menu-top li a:hover,

			#menu-top li .sub-menu li a:hover,

			#menu-main li .sub-menu li a:hover, 

			#menu-main li .sub-menu li.current-menu-item > a,

			.page-nav li .current, 

			.page-nav li a:hover, 

			.widget-title,

			.widget_search form::before,

			.content-bottom .widget-title,

			.single .post .entry-title,

			.single .post .tags-links i,

			.comments-title, 

			.comment-reply-title,

			.comments-area .comment-body .comment-author,

			.comments-area .action-link .comment-reply-link,

			.secondary-sidebar .widget-title,

			.entry-title,

			.entry-meta a:hover, .entry-meta > span:hover,

			.jsn-bootstrap3 .wr-element-heading h1, 

			.jsn-bootstrap3 .wr-element-heading h2, 

			.jsn-bootstrap3 .wr-element-heading h3, 

			.jsn-bootstrap3 .wr-element-heading h4, 

			.jsn-bootstrap3 .wr-element-heading h5, 

			.jsn-bootstrap3 .wr-element-heading h6,

			.jsn-bootstrap3 .wr-element-list .wr-list-content-wrap h4,

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:hover, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a:focus, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a:focus,

			.woocommerce #content nav.woocommerce-pagination ul li a:focus, 

			.woocommerce #content nav.woocommerce-pagination ul li a:hover, 

			.woocommerce #content nav.woocommerce-pagination ul li span.current, 

			.woocommerce nav.woocommerce-pagination ul li a:focus, 

			.woocommerce nav.woocommerce-pagination ul li a:hover, 

			.woocommerce nav.woocommerce-pagination ul li span.current, 

			.woocommerce-page #content nav.woocommerce-pagination ul li a:focus, 

			.woocommerce-page #content nav.woocommerce-pagination ul li a:hover, 

			.woocommerce-page #content nav.woocommerce-pagination ul li span.current, 

			.woocommerce-page nav.woocommerce-pagination ul li a:focus, 

			.woocommerce-page nav.woocommerce-pagination ul li a:hover, 

			.woocommerce-page nav.woocommerce-pagination ul li span.current,

			.woocommerce #content div.product .woocommerce-tabs ul.tabs li a:hover, 

			.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,

			.jsn-bootstrap3 .wr-element-progresscircle .wr-progress-circle .circle-text,

			.jsn-bootstrap3 .wr-element-promobox .wr-promobox h2 {

				color: #566267;

			}

			.widget-title, 

			.search-box form input[type="text"], 

			.format-standard .entry-title a, 

			.format-standard .entry-title i, 

			.comments-area .comment-body, 

			.comment-respond .comment-form [class*="comment-form"] input:focus, 

			.comment-respond .comment-form .comment-form-comment textarea:focus, 

			.widget input:focus,

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:hover, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-left.tabbable, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right.tabbable {

				border-color: #566267;

			}

			blockquote, address, q {

				border-left: 3px solid #566267;

			}

			.page-offline .countdown li {

				border-color: #566267 #eee #eee;

			}

		</style>



	<?php elseif ( 'orange' == $color ) : ?>



		<style>

			body,

			.site-header, 

			button, 

			input[type="button"], 

			input[type="reset"], 

			input[type="submit"], 

			.comments-area .action-link a:hover, 

			.comment-respond .comment-form .form-submit input[type="submit"]:hover, 

			.widget #wp-calendar caption, 

			.page-offline footer,

			.post-meta .comments-link,

			.more-link,

			.social li a:hover,

			.comment-respond .comment-form .form-submit input[type="submit"],

			.owl-theme .owl-controls .owl-page span,

			.jsn-bootstrap3 .wr-element-accordion .panel-default > .panel-heading, 

			.jsn-bootstrap3 .wr-element-accordion .panel-title a:hover,

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols-featured .wr-prtbl-header .wr-prtbl-title, 

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols .wr-prtbl-footer .btn.btn-default:hover, 

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols.wr-prtbl-cols-featured .wr-prtbl-footer .btn.btn-default,

			.widget.woocommerce.widget_price_filter .ui-slider .ui-slider-handle,

			.widget.woocommerce.widget_price_filter .price_slider_amount .button,

			.wr-shop .item .p-info .action a,

			.woocommerce #content input.button.alt, 

			.woocommerce #respond input#submit.alt, 

			.woocommerce a.button.alt, 

			.woocommerce button.button.alt, 

			.woocommerce input.button.alt, 

			.woocommerce-page #content input.button.alt, 

			.woocommerce-page #respond input#submit.alt, 

			.woocommerce-page a.button.alt, 

			.woocommerce-page button.button.alt, 

			.woocommerce-page input.button.alt,

			.woocommerce #content div.product .woocommerce-tabs ul.tabs li.active, 

			.woocommerce div.product .woocommerce-tabs ul.tabs li.active,

			.woocommerce #content input.button:hover,

			.woocommerce #respond input#submit:hover,

			.woocommerce a.button:hover,

			.woocommerce button.button:hover,

			.woocommerce input.button:hover,

			.woocommerce-page #content input.button:hover,

			.woocommerce-page #respond input#submit:hover,

			.woocommerce-page a.button:hover,

			.woocommerce-page button.button:hover,

			.woocommerce-page input.button:hover,

			.header-cart .cart-content .buttons > a.checkout, 

			.widget.woocommerce .widget_shopping_cart_content .buttons > a.checkout,

			.jsn-bootstrap3 .wr-element-carousel .carousel .carousel-control span:hover,

			.jsn-bootstrap3 .wr-element-carousel .carousel .carousel-indicators .active,

			.jsn-bootstrap3 .wr-element-testimonial .carousel.wr-testimonial ol.carousel-indicators li.active,

			.site-header:before {

				background-color: #ffc08b;

			}

			a, 

			.format-standard .entry-title a, 

			.format-standard .entry-title i, 

			.entry-meta a:hover, 

			.widget a:hover, 

			.site-footer a, 

			#menu-top li a:hover,

			#menu-top li .sub-menu li a:hover,

			#menu-main li .sub-menu li a:hover, 

			#menu-main li .sub-menu li.current-menu-item > a,

			.page-nav li .current, 

			.page-nav li a:hover, 

			.widget-title,

			.widget_search form::before,

			.content-bottom .widget-title,

			.single .post .entry-title,

			.single .post .tags-links i,

			.comments-title, 

			.comment-reply-title,

			.comments-area .comment-body .comment-author,

			.comments-area .action-link .comment-reply-link,

			.secondary-sidebar .widget-title,

			.entry-title,

			.entry-meta a:hover, .entry-meta > span:hover,

			.jsn-bootstrap3 .wr-element-heading h1, 

			.jsn-bootstrap3 .wr-element-heading h2, 

			.jsn-bootstrap3 .wr-element-heading h3, 

			.jsn-bootstrap3 .wr-element-heading h4, 

			.jsn-bootstrap3 .wr-element-heading h5, 

			.jsn-bootstrap3 .wr-element-heading h6,

			.jsn-bootstrap3 .wr-element-list .wr-list-content-wrap h4,

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:hover, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a:focus, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a:focus,

			.woocommerce #content nav.woocommerce-pagination ul li a:focus, 

			.woocommerce #content nav.woocommerce-pagination ul li a:hover, 

			.woocommerce #content nav.woocommerce-pagination ul li span.current, 

			.woocommerce nav.woocommerce-pagination ul li a:focus, 

			.woocommerce nav.woocommerce-pagination ul li a:hover, 

			.woocommerce nav.woocommerce-pagination ul li span.current, 

			.woocommerce-page #content nav.woocommerce-pagination ul li a:focus, 

			.woocommerce-page #content nav.woocommerce-pagination ul li a:hover, 

			.woocommerce-page #content nav.woocommerce-pagination ul li span.current, 

			.woocommerce-page nav.woocommerce-pagination ul li a:focus, 

			.woocommerce-page nav.woocommerce-pagination ul li a:hover, 

			.woocommerce-page nav.woocommerce-pagination ul li span.current,

			.woocommerce #content div.product .woocommerce-tabs ul.tabs li a:hover, 

			.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,

			.jsn-bootstrap3 .wr-element-progresscircle .wr-progress-circle .circle-text,

			.jsn-bootstrap3 .wr-element-promobox .wr-promobox h2 {

				color: #ffc08b;

			}

			.widget-title, 

			.search-box form input[type="text"], 

			.format-standard .entry-title a, 

			.format-standard .entry-title i, 

			.comments-area .comment-body, 

			.comment-respond .comment-form [class*="comment-form"] input:focus, 

			.comment-respond .comment-form .comment-form-comment textarea:focus, 

			.widget input:focus,

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:hover, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-left.tabbable, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right.tabbable {

				border-color: #ffc08b;

			}

			blockquote, address, q {

				border-left: 3px solid #ffc08b;

			}

			.content-bottom .widget ul li {

				background: url("<?php echo get_template_directory_uri() . '/assets/img/icons/dot-white.png' ?>") no-repeat left 8px;

			}

			.page-offline .countdown li {

				border-color: #ffc08b #eee #eee;

			}

		</style>



	<?php elseif ( 'violet' == $color ) : ?>



		<style>

			body,

			.site-header, 

			button, 

			input[type="button"], 

			input[type="reset"], 

			input[type="submit"], 

			.comments-area .action-link a:hover, 

			.comment-respond .comment-form .form-submit input[type="submit"]:hover, 

			.widget #wp-calendar caption, 

			.page-offline footer,

			.post-meta .comments-link,

			.more-link,

			.social li a:hover,

			.comment-respond .comment-form .form-submit input[type="submit"],

			.owl-theme .owl-controls .owl-page span,

			.jsn-bootstrap3 .wr-element-accordion .panel-default > .panel-heading, 

			.jsn-bootstrap3 .wr-element-accordion .panel-title a:hover,

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols-featured .wr-prtbl-header .wr-prtbl-title, 

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols .wr-prtbl-footer .btn.btn-default:hover, 

			.jsn-bootstrap3 .wr-element-pricing_table .wr-prtbl-cols.wr-prtbl-cols-featured .wr-prtbl-footer .btn.btn-default,

			.widget.woocommerce.widget_price_filter .ui-slider .ui-slider-handle,

			.widget.woocommerce.widget_price_filter .price_slider_amount .button,

			.wr-shop .item .p-info .action a,

			.woocommerce #content input.button.alt, 

			.woocommerce #respond input#submit.alt, 

			.woocommerce a.button.alt, 

			.woocommerce button.button.alt, 

			.woocommerce input.button.alt, 

			.woocommerce-page #content input.button.alt, 

			.woocommerce-page #respond input#submit.alt, 

			.woocommerce-page a.button.alt, 

			.woocommerce-page button.button.alt, 

			.woocommerce-page input.button.alt,

			.woocommerce #content div.product .woocommerce-tabs ul.tabs li.active, 

			.woocommerce div.product .woocommerce-tabs ul.tabs li.active,

			.woocommerce #content input.button:hover,

			.woocommerce #respond input#submit:hover,

			.woocommerce a.button:hover,

			.woocommerce button.button:hover,

			.woocommerce input.button:hover,

			.woocommerce-page #content input.button:hover,

			.woocommerce-page #respond input#submit:hover,

			.woocommerce-page a.button:hover,

			.woocommerce-page button.button:hover,

			.woocommerce-page input.button:hover,

			.header-cart .cart-content .buttons > a.checkout, 

			.widget.woocommerce .widget_shopping_cart_content .buttons > a.checkout,

			.jsn-bootstrap3 .wr-element-carousel .carousel .carousel-control span:hover,

			.jsn-bootstrap3 .wr-element-carousel .carousel .carousel-indicators .active,

			.jsn-bootstrap3 .wr-element-testimonial .carousel.wr-testimonial ol.carousel-indicators li.active,

			.site-header:before {

				background-color: #673a61;

			}

			a, 

			.format-standard .entry-title a, 

			.format-standard .entry-title i, 

			.entry-meta a:hover, 

			.widget a:hover, 

			.site-footer a, 

			#menu-top li a:hover,

			#menu-top li .sub-menu li a:hover,

			#menu-main li .sub-menu li a:hover, 

			#menu-main li .sub-menu li.current-menu-item > a,

			.page-nav li .current, 

			.page-nav li a:hover, 

			.widget-title,

			.widget_search form::before,

			.content-bottom .widget-title,

			.single .post .entry-title,

			.single .post .tags-links i,

			.comments-title, 

			.comment-reply-title,

			.comments-area .comment-body .comment-author,

			.comments-area .action-link .comment-reply-link,

			.secondary-sidebar .widget-title,

			.entry-title,

			.entry-meta a:hover, .entry-meta > span:hover,

			.jsn-bootstrap3 .wr-element-heading h1, 

			.jsn-bootstrap3 .wr-element-heading h2, 

			.jsn-bootstrap3 .wr-element-heading h3, 

			.jsn-bootstrap3 .wr-element-heading h4, 

			.jsn-bootstrap3 .wr-element-heading h5, 

			.jsn-bootstrap3 .wr-element-heading h6,

			.jsn-bootstrap3 .wr-element-list .wr-list-content-wrap h4,

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:hover, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-left .nav-tabs li.active a:focus, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right .nav-tabs li.active a:focus,

			.woocommerce #content nav.woocommerce-pagination ul li a:focus, 

			.woocommerce #content nav.woocommerce-pagination ul li a:hover, 

			.woocommerce #content nav.woocommerce-pagination ul li span.current, 

			.woocommerce nav.woocommerce-pagination ul li a:focus, 

			.woocommerce nav.woocommerce-pagination ul li a:hover, 

			.woocommerce nav.woocommerce-pagination ul li span.current, 

			.woocommerce-page #content nav.woocommerce-pagination ul li a:focus, 

			.woocommerce-page #content nav.woocommerce-pagination ul li a:hover, 

			.woocommerce-page #content nav.woocommerce-pagination ul li span.current, 

			.woocommerce-page nav.woocommerce-pagination ul li a:focus, 

			.woocommerce-page nav.woocommerce-pagination ul li a:hover, 

			.woocommerce-page nav.woocommerce-pagination ul li span.current,

			.woocommerce #content div.product .woocommerce-tabs ul.tabs li a:hover, 

			.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,

			.jsn-bootstrap3 .wr-element-progresscircle .wr-progress-circle .circle-text,

			.jsn-bootstrap3 .wr-element-promobox .wr-promobox h2 {

				color: #673a61;

			}

			.widget-title, 

			.search-box form input[type="text"], 

			.format-standard .entry-title a, 

			.format-standard .entry-title i, 

			.comments-area .comment-body, 

			.comment-respond .comment-form [class*="comment-form"] input:focus, 

			.comment-respond .comment-form .comment-form-comment textarea:focus, 

			.widget input:focus,

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:hover, 

			.jsn-bootstrap3 .wr-element-tab .nav-tabs > li.active > a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:hover, 

			.jsn-bootstrap3 .wr-element-tab .tabs-below .nav-tabs li.active a:focus,

			.jsn-bootstrap3 .wr-element-tab .tabs-left.tabbable, 

			.jsn-bootstrap3 .wr-element-tab .tabs-right.tabbable {

				border-color: #673a61;

			}

			blockquote, address, q {

				border-left: 3px solid #673a61;

			}

			.content-bottom .widget ul li {

				background: url("<?php echo get_template_directory_uri() . '/assets/img/icons/dot-white.png' ?>") no-repeat left 8px;

			}

			.entry-thumb .post-meta {

				background: #824b7b;

			}

			.page-offline .countdown li {

				border-color: #673a61 #eee #eee;

			}

			.content-bottom a:hover {

				color: #9e7198;

			}

		</style>



	<?php endif;

}

add_action( 'wp_head', 'wr_corsa_color_schemes_output', 100001 );

