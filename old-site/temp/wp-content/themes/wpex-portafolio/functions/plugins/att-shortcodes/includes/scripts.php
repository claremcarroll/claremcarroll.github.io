<?php
/* loads and registers scriots*/
if( !function_exists ('att_shortcodes_scripts') ) :
	function att_shortcodes_scripts() {
		wp_enqueue_script('jquery');
		wp_register_script( 'att_tabs', plugin_dir_url( __FILE__ ) . 'js/att_tabs.js', array ( 'jquery', 'jquery-ui-tabs'), '1.0', true );
		wp_register_script( 'att_toggle', plugin_dir_url( __FILE__ ) . 'js/att_toggle.js', 'jquery', '1.0', true );
		wp_register_script( 'att_accordion', plugin_dir_url( __FILE__ ) . 'js/att_accordion.js', array ( 'jquery', 'jquery-ui-accordion'), '1.0', true );
		wp_enqueue_style('att_shortcode_styles', plugin_dir_url( __FILE__ ) . 'css/att_shortcodes_styles.css');
		wp_register_script('att_googlemap',  plugin_dir_url( __FILE__ ) . 'js/att_googlemap.js', array('jquery'), '', true);
		wp_register_script('att_googlemap_api', 'https://maps.googleapis.com/maps/api/js?sensor=false', array('jquery'), '', true);
	}
	add_action('wp_enqueue_scripts', 'att_shortcodes_scripts');
endif;