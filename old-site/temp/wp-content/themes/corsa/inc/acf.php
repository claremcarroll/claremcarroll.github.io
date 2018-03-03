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

if ( function_exists( 'register_field_group' ) ) {
	register_field_group(
		array(
			'id'     => 'layout-options',
			'title'  => 'Layout Options',
			'fields' => array(
				array(
					'key'          => 'field_549b74c3ad94f',
					'label'        => __( 'Select a specific layout for this page', 'corsa' ),
					'name'         => 'acf_page_layout',
					'type'         => 'select',
					'instructions' => __( 'Default layout: <strong>Global Layout On Customizer</strong>', 'corsa' ),
					'choices' => array(
						'default'    => __( 'Default', 'corsa' ),
						'left-main'  => __( 'Secondary Sidebar', 'corsa' ),
						'main-right' => __( 'Primary Sidebar', 'corsa' )
					),
					'default_value' => 'default',
					'allow_null'    => 0,
					'multiple'      => 0,
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'page'
					),
				),
			),
			'options' => array(
				'position'       => 'side',
				'layout'         => 'default',
				'hide_on_screen' => array(
				),
			),
			'menu_order' => 0,
		)
	);
}
