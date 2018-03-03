<?php
/**
 * This file is used to define your sidebar regions.
 *
 * @package WordPress
 * @subpackage WPExplorer.com
 * @since 1.0
 */


//sidebar
register_sidebar( array(
		'name'			=> __( 'Sidebar', 'wpex' ),
		'id'			=> 'sidebar',
		'description'	=> __( 'Widgets in this area are used on the main sidebar region.', 'wpex' ),
		'before_widget'	=> '<div class="sidebar-widget %2$s clr">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="heading"><span>',
		'after_title'	=> '</span></h4>',
	)
);

//footer 1
register_sidebar( array(
		'name'			=> __( 'Footer 1', 'wpex' ),
		'id'			=> 'footer-one',
		'description'	=> __( 'Widgets in this area are used in the footer region.', 'wpex' ),
		'before_widget'	=> '<div class="footer-widget %2$s clr">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="heading"><span>',
		'after_title'	=> '</span></h4>',
	)
);

//footer 2
register_sidebar( array(
		'name'			=> __( 'Footer 2', 'wpex' ),
		'id'			=> 'footer-two',
		'description'	=> __( 'Widgets in this area are used in the footer region.', 'wpex' ),
		'before_widget'	=> '<div class="footer-widget %2$s clr">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="heading"><span>',
		'after_title'	=> '</span></h4>',
	)
);

//footer 3
register_sidebar( array(
	'name'			=> __( 'Footer 3', 'wpex' ),
	'id'			=> 'footer-three',
	'description'	=> __( 'Widgets in this area are used in the footer region.', 'wpex' ),
	'before_widget'	=> '<div class="footer-widget %2$s clr">',
	'after_widget'	=> '</div>',
	'before_title'	=> '<h4 class="heading"><span>',
	'after_title'	=> '</span></h4>',
	)
);

//footer 4
register_sidebar( array(
	'name'			=> __( 'Footer 4', 'wpex' ),
	'id'			=> 'footer-four',
	'description'	=> __( 'Widgets in this area are used in the footer region.', 'wpex' ),
	'before_widget'	=> '<div class="footer-widget %2$s clr">',
	'after_widget'	=> '</div>',
	'before_title'	=> '<h4 class="heading"><span>',
	'after_title'	=> '</span></h4>',
	)
);
?>