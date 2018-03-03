<?php
/**
 * General theme options
 * @package WordPress
 * @subpackage WPTuts WPExplorer Theme
 * @since WPTuts 1.0
 */



add_action( 'customize_register', 'wpex_customizer_general' );

function wpex_customizer_general($wp_customize) {

	// Add textarea
	class WPEX_Customize_Textarea_Control extends WP_Customize_Control {
		
		//Type of customize control being rendered.
		public $type = 'textarea';

		//Displays the textarea on the customize screen.
		public function render_content() { ?>
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_attr( $this->value() ); ?></textarea>
			</label>
		<?php
		}
	}

	// Category Select
	class Category_Dropdown_Custom_Control extends WP_Customize_Control {
		public function render_content() {
		$dropdown = wp_dropdown_categories(
			array(
				'name'				=> '_customize-dropdown-cats-' . $this->id,
				'echo'				=> 0,
				'show_option_none'	=> __( '&mdash; Select &mdash;', 'wap8theme-i18n' ),
				'selected'			=> $this->value(),
				'class'				=> 'customize-dropdown-cats',
			)
			);
			// hackily add in the data link parameter.
			$dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
			printf(
				'<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
				$this->label,
				$dropdown
			);
		}
	}


	// Theme Settings Section
	$wp_customize->add_section( 'wpex_general' , array(
		'title'		=> __( 'Theme Settings', 'wpex' ),
		'priority'	=> 240,
	) );

	// Logo Image
	$wp_customize->add_setting( 'wpex_logo', array(
		'type'	=> 'theme_mod',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpex_logo', array(
		'label'		=> __( 'Image Logo', 'wpex' ),
		'section'	=> 'wpex_general',
		'settings'	=> 'wpex_logo',
		'priority'	=> '1',
	) ) );

	// Slides
	$wp_customize->add_setting( 'wpex_slides', array(
		'type'		=> 'theme_mod',
		'default'	=> '1',
	) );

	$wp_customize->add_control( 'wpex_slides', array(
		'label'		=> __( 'Slides Post Type', 'wpex' ),
		'section'	=> 'wpex_general',
		'settings'	=> 'wpex_slides',
		'type'		=> 'checkbox',
		'priority'	=> '1',
	) );

	// Features
	$wp_customize->add_setting( 'wpex_features', array(
		'type'		=> 'theme_mod',
		'default'	=> '1',
	) );

	$wp_customize->add_control( 'wpex_features', array(
		'label'		=> __( 'Features Post Type', 'wpex' ),
		'section'	=> 'wpex_general',
		'settings'	=> 'wpex_features',
		'type'		=> 'checkbox',
		'priority'	=> '2',
	) );

	// Portfolio
	$wp_customize->add_setting( 'wpex_portfolio', array(
		'type'		=> 'theme_mod',
		'default'	=> '1',
	) );

	$wp_customize->add_control( 'wpex_portfolio', array(
		'label'		=> __( 'Portfolio Post Type', 'wpex' ),
		'section'	=> 'wpex_general',
		'settings'	=> 'wpex_portfolio',
		'type'		=> 'checkbox',
		'priority'	=> '3',
	) );

	// Homepage Portfolio Title
	$wp_customize->add_setting( 'wpex_home_portfolio_title', array(
		'type'		=> 'theme_mod',
		'default'	=> __( 'Recent Work', 'wpex' ),
	) );

	$wp_customize->add_control( 'wpex_home_portfolio_title', array(
		'label'		=> __( 'Homepage Portfolio Title', 'wpex' ),
		'section'	=> 'wpex_general',
		'settings'	=> 'wpex_home_portfolio_title',
		'type'		=> 'text',
		'priority'	=> '4',
	) );

	// Homepage Portfolio Count
	$wp_customize->add_setting( 'wpex_home_portfolio_count', array(
		'type'		=> 'theme_mod',
		'default'	=> '8',
	) );

	$wp_customize->add_control( 'wpex_home_portfolio_count', array(
		'label'		=> __( 'Homepage Portfolio Count', 'wpex' ),
		'section'	=> 'wpex_general',
		'settings'	=> 'wpex_home_portfolio_count',
		'type'		=> 'text',
		'priority'	=> '5',
	) );

	// Related Portfolio Count
	$wp_customize->add_setting( 'wpex_related_portfolio_count', array(
		'type'		=> 'theme_mod',
		'default'	=> '4',
	) );

	$wp_customize->add_control( 'wpex_related_portfolio_count', array(
		'label'		=> __( 'Related Portfolio Count', 'wpex' ),
		'section'	=> 'wpex_general',
		'settings'	=> 'wpex_related_portfolio_count',
		'type'		=> 'text',
		'priority'	=> '6',
	) );

	// Blog Auto Excerpts
	$wp_customize->add_setting( 'wpex_blog_excerpt', array(
		'type'		=> 'theme_mod',
		'default'	=> '1',
	) );

	$wp_customize->add_control( 'wpex_blog_excerpt', array(
		'label'		=> __( 'Auto Blog Entry Excerpt', 'wpex' ),
		'section'	=> 'wpex_general',
		'settings'	=> 'wpex_blog_excerpt',
		'type'		=> 'checkbox',
		'priority'	=> '7',
	) );

	// Copyright
	$wp_customize->add_setting( 'wpex_copyright', array(
		'type'		=> 'theme_mod',
		'default'	=> 'Portafolio <a href="http://www.wordpress.org" title="WordPress" target="_blank">WordPress</a> Theme Designed &amp; Developed by <a href="http://themeforest.net/user/WPExplorer?ref=WPExplorer" target="_blank" title="WPExplorer">WPExplorer</a>',
	) );

	$wp_customize->add_control( new WPEX_Customize_Textarea_Control( $wp_customize, 'wpex_copyright', array(
		'label'		=> __( 'Custom Copyright', 'wpex' ),
		'section'	=> 'wpex_general',
		'settings'	=> 'wpex_copyright',
		'type'		=> 'textarea',
		'priority'	=> '99',
	) ) );
		
		
}