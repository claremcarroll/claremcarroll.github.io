<?php

/**

 * zerif Theme Customizer

 *

 * @package zerif

 */



/**

 * Add postMessage support for site title and description for the Theme Customizer.

 *

 * @param WP_Customize_Manager $wp_customize Theme Customizer object.

 */



function wp_themeisle_customize_register( $wp_customize ) {

	class Zerif_Customize_Alpha_Color_Control extends WP_Customize_Control {
    
        public $type = 'alphacolor';
        //public $palette = '#3FADD7,#555555,#666666, #F5f5f5,#333333,#404040,#2B4267';
        public $palette = true;
        public $default = '#3FADD7';
    
        protected function render() {
            $id = 'customize-control-' . str_replace( '[', '-', str_replace( ']', '', $this->id ) );
            $class = 'customize-control customize-control-' . $this->type; ?>
            <li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>">
                <?php $this->render_content(); ?>
            </li>
        <?php }
    
        public function render_content() { ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <input type="text" data-palette="<?php echo $this->palette; ?>" data-default-color="<?php echo $this->default; ?>" value="<?php echo intval( $this->value() ); ?>" class="pluto-color-control" <?php $this->link(); ?>  />
            </label>
        <?php }
    }



	class Zerif_Customizer_Number_Control extends WP_Customize_Control {



		public $type = 'number';

			

		public function render_content() {

		?>

			<label>

				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

				<input type="number" <?php $this->link(); ?> value="<?php echo intval( $this->value() ); ?>" />

			</label>

		<?php

		}

	} 

	class Zerif_Customize_Textarea_Control extends WP_Customize_Control {
		public $type = 'textarea';
	 
		public function render_content() {
			?>
			<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
			</label>
			<?php
		}
	}
	
	class Zerif_Html_Support extends WP_Customize_Control
	{
		public function render_content()
		{
			echo 'You can insert any HTML code in here, to create links, google maps or anything else.';
		}

	} 



	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';

	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	

	$wp_customize->remove_section('colors');

	$wp_version_nr = get_bloginfo('version');
	
	
	/**********************************************/
	/*************** ORDER ************************/
	/**********************************************/
	
	if( $wp_version_nr >= 4.0 ):
	
		$wp_customize->add_panel( 'panel_order', array(
			'priority' => 29,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Sections order', 'zerif' )
		) );
		

	
		$wp_customize->add_section( 'zerif_order_section' , array(

					'title'       => __( 'Sections order', 'zerif' ),

					'priority'    => 29,
					
					'panel' => 'panel_order'

		));
	
	else:
	
		$wp_customize->add_section( 'zerif_order_section' , array(

					'title'       => __( 'Sections order', 'zerif' ),

					'priority'    => 29

		));
	
	endif;
		

	
	/* section 1 */	
	
	$wp_customize->add_setting(
		'section1',
		array(
			'default' => 'our_focus',
		)
	);
	 
	$wp_customize->add_control(
		'section1',
		array(
			'type' => 'select',
			'label' => '1st section',
			'section' => 'zerif_order_section',
			'choices' => array(
				'our_focus' => 'Our focus',
				'portofolio' => 'Portfolio',
				'about_us' => 'About us',
				'our_team' => 'Our team',
				'testimonials' => 'Testimonials',
				'bottom_ribbon' => 'Bottom ribbon',
				'right_ribbon' => 'Right ribbon',
				'contact_us' => 'Contact us',
				'packages' => 'Packages',
				'map' => 'Google map',
				'subscribe' => 'Subscribe'
			),
			'priority' => 1
		)
	);
	
	/* section 2 */	
	
	$wp_customize->add_setting(
		'section2',
		array(
			'default' => 'bottom_ribbon',
		)
	);
	 
	$wp_customize->add_control(
		'section2',
		array(
			'type' => 'select',
			'label' => '2nd section',
			'section' => 'zerif_order_section',
			'choices' => array(
				'our_focus' => 'Our focus',
				'portofolio' => 'Portfolio',
				'about_us' => 'About us',
				'our_team' => 'Our team',
				'testimonials' => 'Testimonials',
				'bottom_ribbon' => 'Bottom ribbon',
				'right_ribbon' => 'Right ribbon',
				'contact_us' => 'Contact us',
				'packages' => 'Packages',
				'map' => 'Google map',
				'subscribe' => 'Subscribe'
			),
			'priority' => 2
		)
	);
	
	/* section 3 */	
	
	$wp_customize->add_setting(
		'section3',
		array(
			'default' => 'portofolio',
		)
	);
	 
	$wp_customize->add_control(
		'section3',
		array(
			'type' => 'select',
			'label' => '3rd section',
			'section' => 'zerif_order_section',
			'choices' => array(
				'our_focus' => 'Our focus',
				'portofolio' => 'Portfolio',
				'about_us' => 'About us',
				'our_team' => 'Our team',
				'testimonials' => 'Testimonials',
				'bottom_ribbon' => 'Bottom ribbon',
				'right_ribbon' => 'Right ribbon',
				'contact_us' => 'Contact us',
				'packages' => 'Packages',
				'map' => 'Google map',
				'subscribe' => 'Subscribe'
			),
			'priority' => 3
		)
	);
	
	/* section 4 */	
	
	$wp_customize->add_setting(
		'section4',
		array(
			'default' => 'about_us',
		)
	);
	 
	$wp_customize->add_control(
		'section4',
		array(
			'type' => 'select',
			'label' => '4rt section',
			'section' => 'zerif_order_section',
			'choices' => array(
				'our_focus' => 'Our focus',
				'portofolio' => 'Portfolio',
				'about_us' => 'About us',
				'our_team' => 'Our team',
				'testimonials' => 'Testimonials',
				'bottom_ribbon' => 'Bottom ribbon',
				'right_ribbon' => 'Right ribbon',
				'contact_us' => 'Contact us',
				'packages' => 'Packages',
				'map' => 'Google map',
				'subscribe' => 'Subscribe'
			),
			'priority' => 4
		)
	);
	
	/* section 5 */	
	
	$wp_customize->add_setting(
		'section5',
		array(
			'default' => 'our_team',
		)
	);
	 
	$wp_customize->add_control(
		'section5',
		array(
			'type' => 'select',
			'label' => '5th section',
			'section' => 'zerif_order_section',
			'choices' => array(
				'our_focus' => 'Our focus',
				'portofolio' => 'Portfolio',
				'about_us' => 'About us',
				'our_team' => 'Our team',
				'testimonials' => 'Testimonials',
				'bottom_ribbon' => 'Bottom ribbon',
				'right_ribbon' => 'Right ribbon',
				'contact_us' => 'Contact us',
				'packages' => 'Packages',
				'map' => 'Google map',
				'subscribe' => 'Subscribe'
			),
			'priority' => 5
		)
	);
	
	/* section 6 */	
	
	$wp_customize->add_setting(
		'section6',
		array(
			'default' => 'testimonials',
		)
	);
	 
	$wp_customize->add_control(
		'section6',
		array(
			'type' => 'select',
			'label' => '6th section',
			'section' => 'zerif_order_section',
			'choices' => array(
				'our_focus' => 'Our focus',
				'portofolio' => 'Portfolio',
				'about_us' => 'About us',
				'our_team' => 'Our team',
				'testimonials' => 'Testimonials',
				'bottom_ribbon' => 'Bottom ribbon',
				'right_ribbon' => 'Right ribbon',
				'contact_us' => 'Contact us',
				'packages' => 'Packages',
				'map' => 'Google map',
				'subscribe' => 'Subscribe'
			),
			'priority' => 6
		)
	);
	
	/* section 7 */	
	
	$wp_customize->add_setting(
		'section7',
		array(
			'default' => 'right_ribbon',
		)
	);
	 
	$wp_customize->add_control(
		'section7',
		array(
			'type' => 'select',
			'label' => '7th section',
			'section' => 'zerif_order_section',
			'choices' => array(
				'our_focus' => 'Our focus',
				'portofolio' => 'Portfolio',
				'about_us' => 'About us',
				'our_team' => 'Our team',
				'testimonials' => 'Testimonials',
				'bottom_ribbon' => 'Bottom ribbon',
				'right_ribbon' => 'Right ribbon',
				'contact_us' => 'Contact us',
				'packages' => 'Packages',
				'map' => 'Google map',
				'subscribe' => 'Subscribe'
			),
			'priority' => 7
		)
	);
	
	/* section 8 */	
	
	$wp_customize->add_setting(
		'section8',
		array(
			'default' => 'contact_us',
		)
	);
	 
	$wp_customize->add_control(
		'section8',
		array(
			'type' => 'select',
			'label' => '8th section',
			'section' => 'zerif_order_section',
			'choices' => array(
				'our_focus' => 'Our focus',
				'portofolio' => 'Portfolio',
				'about_us' => 'About us',
				'our_team' => 'Our team',
				'testimonials' => 'Testimonials',
				'bottom_ribbon' => 'Bottom ribbon',
				'right_ribbon' => 'Right ribbon',
				'contact_us' => 'Contact us',
				'packages' => 'Packages',
				'map' => 'Google map',
				'subscribe' => 'Subscribe'
			),
			'priority' => 8
		)
	);
	
	/* section 9 */	
	
	$wp_customize->add_setting(
		'section9',
		array(
			'default' => 'map',
		)
	);
	 
	$wp_customize->add_control(
		'section9',
		array(
			'type' => 'select',
			'label' => '9th section',
			'section' => 'zerif_order_section',
			'choices' => array(
				'our_focus' => 'Our focus',
				'portofolio' => 'Portfolio',
				'about_us' => 'About us',
				'our_team' => 'Our team',
				'testimonials' => 'Testimonials',
				'bottom_ribbon' => 'Bottom ribbon',
				'right_ribbon' => 'Right ribbon',
				'contact_us' => 'Contact us',
				'packages' => 'Packages',
				'map' => 'Google map',
				'subscribe' => 'Subscribe'
			),
			'priority' => 9
		)
	);
	
	/* section 10 */	
	
	$wp_customize->add_setting(
		'section10',
		array(
			'default' => 'packages',
		)
	);
	 
	$wp_customize->add_control(
		'section10',
		array(
			'type' => 'select',
			'label' => '10th section',
			'section' => 'zerif_order_section',
			'choices' => array(
				'our_focus' => 'Our focus',
				'portofolio' => 'Portfolio',
				'about_us' => 'About us',
				'our_team' => 'Our team',
				'testimonials' => 'Testimonials',
				'bottom_ribbon' => 'Bottom ribbon',
				'right_ribbon' => 'Right ribbon',
				'contact_us' => 'Contact us',
				'packages' => 'Packages',
				'map' => 'Google map',
				'subscribe' => 'Subscribe'
			),
			'priority' => 10
		)
	);
	
	/* section 11 */	
	
	$wp_customize->add_setting(
		'section11',
		array(
			'default' => 'subscribe',
		)
	);
	 
	$wp_customize->add_control(
		'section11',
		array(
			'type' => 'select',
			'label' => '11th section',
			'section' => 'zerif_order_section',
			'choices' => array(
				'our_focus' => 'Our focus',
				'portofolio' => 'Portfolio',
				'about_us' => 'About us',
				'our_team' => 'Our team',
				'testimonials' => 'Testimonials',
				'bottom_ribbon' => 'Bottom ribbon',
				'right_ribbon' => 'Right ribbon',
				'contact_us' => 'Contact us',
				'packages' => 'Packages',
				'map' => 'Google map',
				'subscribe' => 'Subscribe'
			),
			'priority' => 11
		)
	);
	
	
	
	
	
	
	
	/***********************************************/

	/************** COLORS OPTIONS  ***************/

	/***********************************************/
	
	if( $wp_version_nr >= 4.0 ):
		
		$wp_customize->add_panel( 'panel_1', array(
			'priority' => 30,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Colors', 'zerif' )
		) );
		
		$wp_customize->add_section( 'zerif_footer_color_section' , array(

				'title'       => __( 'Footer colors', 'zerif' ),

				'priority'    => 1,

				'description' => __('Zerif theme footer colors','zerif'),

				'panel' => 'panel_1'
		));
		
		$wp_customize->add_setting(
			'zerif_footer_background',
			array(
				'default'     => '#272727'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_footer_background',
				array(
					'label'      => __( 'Footer background color', 'zerif' ),
					'section'    => 'zerif_footer_color_section',
					'settings'   => 'zerif_footer_background',
					'priority'   => 1
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_footer_socials_background',
			array(
				'default'     => '#171717'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_footer_socials_background',
				array(
					'label'      => __( 'Footer socials background color', 'zerif' ),
					'section'    => 'zerif_footer_color_section',
					'settings'   => 'zerif_footer_socials_background',
					'priority'   => 2
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_footer_text_color',
			array(
				'default'     => '#939393'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_footer_text_color',
				array(
					'label'      => __( 'Footer text color', 'zerif' ),
					'section'    => 'zerif_footer_color_section',
					'settings'   => 'zerif_footer_text_color',
					'priority'   => 3
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_footer_socials',
			array(
				'default'     => '#939393'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_footer_socials',
				array(
					'label'      => __( 'Footer social icons color', 'zerif' ),
					'section'    => 'zerif_footer_color_section',
					'settings'   => 'zerif_footer_socials',
					'priority'   => 4
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_footer_socials_hover',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_footer_socials_hover',
				array(
					'label'      => __( 'Footer socials icons color - hover', 'zerif' ),
					'section'    => 'zerif_footer_color_section',
					'settings'   => 'zerif_footer_socials_hover',
					'priority'   => 5
				)
			)
		);
		
		
		$wp_customize->add_section( 'zerif_general_color_section' , array(

				'title'       => __( 'General colors', 'zerif' ),

				'priority'    => 2,

				'description' => __('Zerif theme general colors','zerif'),

				'panel' => 'panel_1'
		));
		
		$wp_customize->add_setting(
			'zerif_background_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_background_color',
				array(
					'label'      => __( 'Background color', 'zerif' ),
					'section'    => 'zerif_general_color_section',
					'settings'   => 'zerif_background_color',
					'priority'   => 1
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_titles_color',
			array(
				'default'     => '#404040'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_titles_color',
				array(
					'label'      => __( 'Titles color', 'zerif' ),
					'section'    => 'zerif_general_color_section',
					'settings'   => 'zerif_titles_color',
					'priority'   => 2
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_titles_bottomborder_color',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_titles_bottomborder_color',
				array(
					'label'      => __( 'Titles bottom border color', 'zerif' ),
					'section'    => 'zerif_general_color_section',
					'settings'   => 'zerif_titles_bottomborder_color',
					'priority'   => 3
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_texts_color',
			array(
				'default'     => '#404040'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_texts_color',
				array(
					'label'      => __( 'Text color', 'zerif' ),
					'section'    => 'zerif_general_color_section',
					'settings'   => 'zerif_texts_color',
					'priority'   => 4
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_links_color',
			array(
				'default'     => '#808080'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_links_color',
				array(
					'label'      => __( 'Links color', 'zerif' ),
					'section'    => 'zerif_general_color_section',
					'settings'   => 'zerif_links_color',
					'priority'   => 5
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_links_color_hover',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_links_color_hover',
				array(
					'label'      => __( 'Links color hover', 'zerif' ),
					'section'    => 'zerif_general_color_section',
					'settings'   => 'zerif_links_color_hover',
					'priority'   => 6
				)
			)
		);
		
		$wp_customize->add_section( 'zerif_buttons_color_section' , array(

				'title'       => __( 'Buttons colors', 'zerif' ),

				'priority'    => 3,

				'description' => __('Zerif theme buttons colors','zerif'),

				'panel' => 'panel_1'
		));
		
		$wp_customize->add_setting(
			'zerif_buttons_background_color',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_buttons_background_color',
				array(
					'label'      => __( 'Buttons background color', 'zerif' ),
					'section'    => 'zerif_buttons_color_section',
					'settings'   => 'zerif_buttons_background_color',
					'priority'   => 1
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_buttons_background_color_hover',
			array(
				'default'     => '#cb4332'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_buttons_background_color_hover',
				array(
					'label'      => __( 'Buttons background color - hover', 'zerif' ),
					'section'    => 'zerif_buttons_color_section',
					'settings'   => 'zerif_buttons_background_color_hover',
					'priority'   => 2
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_buttons_text_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_buttons_text_color',
				array(
					'label'      => __( 'Buttons text color', 'zerif' ),
					'section'    => 'zerif_buttons_color_section',
					'settings'   => 'zerif_buttons_text_color',
					'priority'   => 3
				)
			)
		);
	else:
		$wp_customize->add_section( 'zerif_color_section' , array(

				'title'       => __( 'Colors', 'zerif' ),

				'priority'    => 30,

				'description' => __('Zerif theme colors','zerif'),

		));
		
		$wp_customize->add_setting(
			'zerif_footer_background',
			array(
				'default'     => '#272727'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_footer_background',
				array(
					'label'      => __( 'Footer background color', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_footer_background',
					'priority'   => 1
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_footer_socials_background',
			array(
				'default'     => '#171717'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_footer_socials_background',
				array(
					'label'      => __( 'Footer socials background color', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_footer_socials_background',
					'priority'   => 2
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_footer_text_color',
			array(
				'default'     => '#939393'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_footer_text_color',
				array(
					'label'      => __( 'Footer text color', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_footer_text_color',
					'priority'   => 3
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_footer_socials',
			array(
				'default'     => '#939393'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_footer_socials',
				array(
					'label'      => __( 'Footer social icons color', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_footer_socials',
					'priority'   => 4
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_footer_socials_hover',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_footer_socials_hover',
				array(
					'label'      => __( 'Footer socials icons color - hover', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_footer_socials_hover',
					'priority'   => 5
				)
			)
		);
		
		
		$wp_customize->add_setting(
			'zerif_background_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_background_color',
				array(
					'label'      => __( 'Background color', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_background_color',
					'priority'   => 6
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_titles_color',
			array(
				'default'     => '#404040'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_titles_color',
				array(
					'label'      => __( 'Titles color', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_titles_color',
					'priority'   => 7
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_titles_bottomborder_color',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_titles_bottomborder_color',
				array(
					'label'      => __( 'Titles bottom border color', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_titles_bottomborder_color',
					'priority'   => 8
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_texts_color',
			array(
				'default'     => '#404040'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_texts_color',
				array(
					'label'      => __( 'Text color', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_texts_color',
					'priority'   => 9
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_links_color',
			array(
				'default'     => '#808080'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_links_color',
				array(
					'label'      => __( 'Links color', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_links_color',
					'priority'   => 10
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_links_color_hover',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_links_color_hover',
				array(
					'label'      => __( 'Links color hover', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_links_color_hover',
					'priority'   => 11
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_buttons_background_color',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_buttons_background_color',
				array(
					'label'      => __( 'Buttons background color', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_buttons_background_color',
					'priority'   => 12
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_buttons_background_color_hover',
			array(
				'default'     => '#cb4332'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_buttons_background_color_hover',
				array(
					'label'      => __( 'Buttons background color - hover', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_buttons_background_color_hover',
					'priority'   => 13
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_buttons_text_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_buttons_text_color',
				array(
					'label'      => __( 'Buttons text color', 'zerif' ),
					'section'    => 'zerif_color_section',
					'settings'   => 'zerif_buttons_text_color',
					'priority'   => 14
				)
			)
		);
	endif;
	
	
	

	/***********************************************/

	/************** GENERAL OPTIONS  ***************/

	/***********************************************/

	if( $wp_version_nr >= 4.0 ):
		
		$wp_customize->add_panel( 'panel_2', array(
			'priority' => 31,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'General options', 'zerif' )
		) );
		
		$wp_customize->add_section( 'zerif_general_section' , array(

				'title'       => __( 'General options', 'zerif' ),

				'priority'    => 1,

				'description' => __('Zerif theme general options','zerif'),

				'panel' => 'panel_2'
		));
		
		/* LOGO	*/

		$wp_customize->add_setting( 'zerif_logo');

			

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(

				'label'    => __( 'Logo', 'zerif' ),

				'section'  => 'zerif_general_section',

				'settings' => 'zerif_logo',

				'priority'    => 1,

		)));

		

		/* COPYRIGHT */

		   

		$wp_customize->add_setting( 'zerif_copyright', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_copyright', array(

				'label'    => __( 'Copyright', 'zerif' ),

				'section'  => 'zerif_general_section',

				'settings' => 'zerif_copyright',

				'priority'    => 2,

		));

		$wp_customize->add_section( 'zerif_footer_section' , array(

				'title'       => __( 'Footer sections', 'zerif' ),

				'priority'    => 2,

				'panel' => 'panel_2'
		));
		
		$wp_customize->add_setting(
			'zerif_html_note'
		);
		
		$wp_customize->add_control( new Zerif_Html_Support( $wp_customize, 'zerif_html_note',
			array(
				'section' => 'zerif_footer_section',
				'priority' => '1'
		   )
		));
		
		/* email - ICON */
		$wp_customize->add_setting( 'zerif_email_icon', array('default' => get_template_directory_uri().'/images/envelope4-green.png'));

			

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zerif_email_icon', array(

				'label'    => __( 'Email section - icon', 'zerif' ),

				'section'  => 'zerif_footer_section',

				'settings' => 'zerif_email_icon',

				'priority'    => 2,

		)));
		
		/* email */   

		$wp_customize->add_setting( 'zerif_email', array(
            'default'        => 'Company email',
        ) );
        $wp_customize->add_control( new Zerif_Customize_Textarea_Control( $wp_customize, 'zerif_email', array(
            'label'   => __( 'Email', 'zerif' ),
            'section' => 'zerif_footer_section',
            'settings'   => 'zerif_email',
            'priority' => 3
        )) );

		/* phone number - ICON */
		$wp_customize->add_setting( 'zerif_phone_icon', array('default' => get_template_directory_uri().'/images/telephone65-blue.png'));

			

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zerif_phone_icon', array(

				'label'    => __( 'Phone number section - icon', 'zerif' ),

				'section'  => 'zerif_footer_section',

				'settings' => 'zerif_phone_icon',

				'priority'    => 4,

		)));

		/* phone number */
		
		$wp_customize->add_setting( 'zerif_phone', array(
            'default'        => 'Phone number',
        ) );
        $wp_customize->add_control(new Zerif_Customize_Textarea_Control( $wp_customize, 'zerif_phone', array(
            'label'   => __( 'Phone number', 'zerif' ),
            'section' => 'zerif_footer_section',
            'settings'   => 'zerif_phone',
            'priority' => 5
        )) );

		/* address - ICON */
		$wp_customize->add_setting( 'zerif_address_icon', array('default' => get_template_directory_uri().'/images/map25-redish.png'));

			

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zerif_address_icon', array(

				'label'    => __( 'Address section - icon', 'zerif' ),

				'section'  => 'zerif_footer_section',

				'settings' => 'zerif_address_icon',

				'priority'    => 6,

		)));

		/* address */
		
		$wp_customize->add_setting( 'zerif_address', array(
            'default'        => 'Company address',
        ) );
        $wp_customize->add_control( new Zerif_Customize_Textarea_Control( $wp_customize, 'zerif_address', array(
            'label'   => __( 'Address', 'zerif' ),
            'section' => 'zerif_footer_section',
            'settings'   => 'zerif_address',
            'priority' => 7
        )) ) ;
		
		$wp_customize->add_section( 'zerif_general_socials_section' , array(

				'title'       => __( 'Socials options', 'zerif' ),

				'priority'    => 3,

				'panel' => 'panel_2'
		));	

		/* facebook */	

		$wp_customize->add_setting( 'zerif_socials_facebook', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

			

		$wp_customize->add_control( 'zerif_socials_facebook', array(

				'label'    => __( 'Facebook link', 'zerif' ),

				'section'  => 'zerif_general_socials_section',

				'settings' => 'zerif_socials_facebook',

				'priority'    => 1,

		));

		

		/* twitter */

		$wp_customize->add_setting( 'zerif_socials_twitter', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

			

		$wp_customize->add_control( 'zerif_socials_twitter', array(

				'label'    => __( 'Twitter link', 'zerif' ),

				'section'  => 'zerif_general_socials_section',

				'settings' => 'zerif_socials_twitter',

				'priority'    => 2,

		));

		

		/* linkedin */

		$wp_customize->add_setting( 'zerif_socials_linkedin', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

			

		$wp_customize->add_control( 'zerif_socials_linkedin', array(

				'label'    => __( 'Linkedin link', 'zerif' ),

				'section'  => 'zerif_general_socials_section',

				'settings' => 'zerif_socials_linkedin',

				'priority'    => 3,

		));

		

		/* behance */

		$wp_customize->add_setting( 'zerif_socials_behance', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

			

		$wp_customize->add_control( 'zerif_socials_behance', array(

				'label'    => __( 'Behance link', 'zerif' ),

				'section'  => 'zerif_general_socials_section',

				'settings' => 'zerif_socials_behance',

				'priority'    => 4,

		));

		

		/* dribbble */

		$wp_customize->add_setting( 'zerif_socials_dribbble', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

			

		$wp_customize->add_control( 'zerif_socials_dribbble', array(

				'label'    => __( 'Dribbble link', 'zerif' ),

				'section'  => 'zerif_general_socials_section',

				'settings' => 'zerif_socials_dribbble',

				'priority'    => 5,

		));

	else:
		$wp_customize->add_section( 'zerif_general_section' , array(

				'title'       => __( 'General options', 'zerif' ),

				'priority'    => 31,

				'description' => __('Zerif theme general options','zerif'),

		));
		
		/* LOGO	*/

		$wp_customize->add_setting( 'zerif_logo');

			

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(

				'label'    => __( 'Logo', 'zerif' ),

				'section'  => 'zerif_general_section',

				'settings' => 'zerif_logo',

				'priority'    => 1,

		)));

		

		/* COPYRIGHT */

		   

		$wp_customize->add_setting( 'zerif_copyright', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_copyright', array(

				'label'    => __( 'Copyright', 'zerif' ),

				'section'  => 'zerif_general_section',

				'settings' => 'zerif_copyright',

				'priority'    => 2,

		));


		$wp_customize->add_setting(
			'zerif_html_note'
		);
		
		$wp_customize->add_control( new Zerif_Html_Support( $wp_customize, 'zerif_html_note',
			array(
				'section' => 'zerif_footer_section',
				'priority' => 3
		   )
		));
		
		/* email - ICON */
		$wp_customize->add_setting( 'zerif_email_icon', array('default' => get_template_directory_uri().'/images/envelope4-green.png'));

			

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zerif_email_icon', array(

				'label'    => __( 'Email section - icon', 'zerif' ),

				'section'  => 'zerif_general_section',

				'settings' => 'zerif_email_icon',

				'priority'    => 4,

		)));
		
		
		/* email */   

		$wp_customize->add_setting( 'zerif_email', array(
            'default'        => 'Company email',
        ) );
        $wp_customize->add_control( new Zerif_Customize_Textarea_Control( $wp_customize, 'zerif_email', array(
            'label'   => __( 'Email', 'zerif' ),
            'section' => 'zerif_general_section',
            'settings'   => 'zerif_email',
            'priority' => 5
        )) );

		/* phone number - ICON */
		$wp_customize->add_setting( 'zerif_phone_icon', array('default' => get_template_directory_uri().'/images/telephone65-blue.png'));

			

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zerif_phone_icon', array(

				'label'    => __( 'Phone number section - icon', 'zerif' ),

				'section'  => 'zerif_general_section',

				'settings' => 'zerif_phone_icon',

				'priority'    => 6,

		)));

		/* phone number */
		
		$wp_customize->add_setting( 'zerif_phone', array(
            'default'        => 'Phone number',
        ) );
        $wp_customize->add_control(new Zerif_Customize_Textarea_Control( $wp_customize, 'zerif_phone', array(
            'label'   => __( 'Phone number', 'zerif' ),
            'section' => 'zerif_general_section',
            'settings'   => 'zerif_phone',
            'priority' => 7
        )) );

		/* address - ICON */
		$wp_customize->add_setting( 'zerif_address_icon', array('default' => get_template_directory_uri().'/images/map25-redish.png'));

			

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zerif_address_icon', array(

				'label'    => __( 'Address section - icon', 'zerif' ),

				'section'  => 'zerif_general_section',

				'settings' => 'zerif_address_icon',

				'priority'    => 8,

		)));

		/* address */
		
		$wp_customize->add_setting( 'zerif_address', array(
            'default'        => 'Company address',
        ) );
        $wp_customize->add_control( new Zerif_Customize_Textarea_Control( $wp_customize, 'zerif_address', array(
            'label'   => __( 'Address', 'zerif' ),
            'section' => 'zerif_general_section',
            'settings'   => 'zerif_address',
            'priority' => 9
        )) ) ;
		
		$wp_customize->add_section( 'zerif_general_socials_section' , array(

				'title'       => __( 'Socials options', 'zerif' ),

				'priority'    => 40
		));	
		
		/* facebook */	

		$wp_customize->add_setting( 'zerif_socials_facebook', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

			

		$wp_customize->add_control( 'zerif_socials_facebook', array(

				'label'    => __( 'Facebook link', 'zerif' ),

				'section'  => 'zerif_general_socials_section',

				'settings' => 'zerif_socials_facebook',

				'priority'    => 1,

		));

		

		/* twitter */

		$wp_customize->add_setting( 'zerif_socials_twitter', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

			

		$wp_customize->add_control( 'zerif_socials_twitter', array(

				'label'    => __( 'Twitter link', 'zerif' ),

				'section'  => 'zerif_general_socials_section',

				'settings' => 'zerif_socials_twitter',

				'priority'    => 2,

		));

		

		/* linkedin */

		$wp_customize->add_setting( 'zerif_socials_linkedin', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

			

		$wp_customize->add_control( 'zerif_socials_linkedin', array(

				'label'    => __( 'Linkedin link', 'zerif' ),

				'section'  => 'zerif_general_socials_section',

				'settings' => 'zerif_socials_linkedin',

				'priority'    => 3,

		));

		

		/* behance */

		$wp_customize->add_setting( 'zerif_socials_behance', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

			

		$wp_customize->add_control( 'zerif_socials_behance', array(

				'label'    => __( 'Behance link', 'zerif' ),

				'section'  => 'zerif_general_socials_section',

				'settings' => 'zerif_socials_behance',

				'priority'    => 4,

		));

		

		/* dribbble */

		$wp_customize->add_setting( 'zerif_socials_dribbble', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

			

		$wp_customize->add_control( 'zerif_socials_dribbble', array(

				'label'    => __( 'Dribbble link', 'zerif' ),

				'section'  => 'zerif_general_socials_section',

				'settings' => 'zerif_socials_dribbble',

				'priority'    => 5,

		));
		
	endif;

	    

	

	

	



	/*****************************************************/

    /**************	BIG TITLE SECTION *******************/

	/****************************************************/

	
	if( $wp_version_nr >= 4.0 ):
		
		$wp_customize->add_panel( 'panel_3', array(
			'priority' => 32,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Big title section', 'zerif' )
		) );
		
		$wp_customize->add_section( 'zerif_bigtitle_texts_section' , array(

				'title'       => __( 'Texts', 'zerif' ),

				'priority'    => 1,

				'panel' => 'panel_3'
		));
		
		/* show/hide */   

		$wp_customize->add_setting( 'zerif_bigtitle_show');

		$wp_customize->add_control(

			'zerif_bigtitle_show',

			array(

				'type' => 'checkbox',

				'label' => 'Hide big title section?',

				'section' => 'zerif_bigtitle_texts_section',

				'priority'    => 1,

			)

		);

		

		/* title */

		$wp_customize->add_setting( 'zerif_bigtitle_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'To add a title here please go to Customizer, "Big title section"'));

			

		$wp_customize->add_control( 'zerif_bigtitle_title', array(

				'label'    => __( 'Title', 'zerif' ),

				'section'  => 'zerif_bigtitle_texts_section',

				'settings' => 'zerif_bigtitle_title',

				'priority'    => 2,

		));

		

		/* red button */

		$wp_customize->add_setting( 'zerif_bigtitle_redbutton_label', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'One button'));

			

		$wp_customize->add_control( 'zerif_bigtitle_redbutton_label', array(

				'label'    => __( 'First button label', 'zerif' ),

				'section'  => 'zerif_bigtitle_texts_section',

				'settings' => 'zerif_bigtitle_redbutton_label',

				'priority'    => 3,

		));

		

		$wp_customize->add_setting( 'zerif_bigtitle_redbutton_url', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

			

		$wp_customize->add_control( 'zerif_bigtitle_redbutton_url', array(

				'label'    => __( 'First button link', 'zerif' ),

				'section'  => 'zerif_bigtitle_texts_section',

				'settings' => 'zerif_bigtitle_redbutton_url',

				'priority'    => 4,

		));

		

		/* green button */

		$wp_customize->add_setting( 'zerif_bigtitle_greenbutton_label', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Another button'));

			

		$wp_customize->add_control( 'zerif_bigtitle_greenbutton_label', array(

				'label'    => __( 'Second button label', 'zerif' ),

				'section'  => 'zerif_bigtitle_texts_section',

				'settings' => 'zerif_bigtitle_greenbutton_label',

				'priority'    => 5,

		));	

		

		$wp_customize->add_setting( 'zerif_bigtitle_greenbutton_url', array('sanitize_callback' => 'esc_url_raw','#'));

			

		$wp_customize->add_control( 'zerif_bigtitle_greenbutton_url', array(

				'label'    => __( 'Second button link', 'zerif' ),

				'section'  => 'zerif_bigtitle_texts_section',

				'settings' => 'zerif_bigtitle_greenbutton_url',

				'priority'    => 6,

		));

		
		$wp_customize->add_section( 'zerif_bigtitle_colors_section' , array(

				'title'       => __( 'Colors', 'zerif' ),

				'priority'    => 2,

				'panel' => 'panel_3'
		));
		
		$wp_customize->add_setting(
			'zerif_bigtitle_background',
			array(
				'default'     => 'rgba(0, 0, 0, 0.5)'
			)
		);
		 
		$wp_customize->add_control(
			new Zerif_Customize_Alpha_Color_Control(
				$wp_customize,
				'zerif_bigtitle_background',
				array(
					'label'    => __( 'Section background color', 'zerif' ),
					'palette' => true,
					'section'  => 'zerif_bigtitle_colors_section',
					'priority'   => 1
				)
			)
		);
		
		
		
		$wp_customize->add_setting(
			'zerif_bigtitle_header_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_bigtitle_header_color',
				array(
					'label'      => __( 'Section header text color', 'zerif' ),
					'section'    => 'zerif_bigtitle_colors_section',
					'settings'   => 'zerif_bigtitle_header_color',
					'priority'   => 2
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_bigtitle_1button_background_color',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_bigtitle_1button_background_color',
				array(
					'label'      => __( 'First button background color', 'zerif' ),
					'section'    => 'zerif_bigtitle_colors_section',
					'settings'   => 'zerif_bigtitle_1button_background_color',
					'priority'   => 3
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_bigtitle_1button_background_color_hover',
			array(
				'default'     => '#cb4332'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_bigtitle_1button_background_color_hover',
				array(
					'label'      => __( 'First button background color - hover', 'zerif' ),
					'section'    => 'zerif_bigtitle_colors_section',
					'settings'   => 'zerif_bigtitle_1button_background_color_hover',
					'priority'   => 4
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_bigtitle_1button_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_bigtitle_1button_color',
				array(
					'label'      => __( 'First button text color', 'zerif' ),
					'section'    => 'zerif_bigtitle_colors_section',
					'settings'   => 'zerif_bigtitle_1button_color',
					'priority'   => 5
				)
			)
		);
		$wp_customize->add_setting(
			'zerif_bigtitle_2button_background_color',
			array(
				'default'     => '#20AA73'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_bigtitle_2button_background_color',
				array(
					'label'      => __( 'Second button background color', 'zerif' ),
					'section'    => 'zerif_bigtitle_colors_section',
					'settings'   => 'zerif_bigtitle_2button_background_color',
					'priority'   => 6
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_bigtitle_2button_background_color_hover',
			array(
				'default'     => '#069059'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_bigtitle_2button_background_color_hover',
				array(
					'label'      => __( 'Second button background color - hover', 'zerif' ),
					'section'    => 'zerif_bigtitle_colors_section',
					'settings'   => 'zerif_bigtitle_2button_background_color_hover',
					'priority'   => 7
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_bigtitle_2button_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_bigtitle_2button_color',
				array(
					'label'      => __( 'Second button text color', 'zerif' ),
					'section'    => 'zerif_bigtitle_colors_section',
					'settings'   => 'zerif_bigtitle_2button_color',
					'priority'   => 8
				)
			)
		);
		
		
		
		
	else:
		
			$wp_customize->add_section( 'zerif_bigtitle_section' , array(

					'title'       => __( 'Big title section', 'zerif' ),

					'priority'    => 32

			));
			
			/* show/hide */   

			$wp_customize->add_setting( 'zerif_bigtitle_show');

			$wp_customize->add_control(

				'zerif_bigtitle_show',

				array(

					'type' => 'checkbox',

					'label' => 'Hide big title section?',

					'section' => 'zerif_bigtitle_section',

					'priority'    => 1,

				)

			);

			

			/* title */

			$wp_customize->add_setting( 'zerif_bigtitle_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'To add a title here please go to Customizer, "Big title section"'));

				

			$wp_customize->add_control( 'zerif_bigtitle_title', array(

					'label'    => __( 'Title', 'zerif' ),

					'section'  => 'zerif_bigtitle_section',

					'settings' => 'zerif_bigtitle_title',

					'priority'    => 2,

			));

			

			/* red button */

			$wp_customize->add_setting( 'zerif_bigtitle_redbutton_label', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'One button'));

				

			$wp_customize->add_control( 'zerif_bigtitle_redbutton_label', array(

					'label'    => __( 'First button label', 'zerif' ),

					'section'  => 'zerif_bigtitle_section',

					'settings' => 'zerif_bigtitle_redbutton_label',

					'priority'    => 3,

			));

			

			$wp_customize->add_setting( 'zerif_bigtitle_redbutton_url', array('sanitize_callback' => 'esc_url_raw','default' => '#'));

				

			$wp_customize->add_control( 'zerif_bigtitle_redbutton_url', array(

					'label'    => __( 'First button link', 'zerif' ),

					'section'  => 'zerif_bigtitle_section',

					'settings' => 'zerif_bigtitle_redbutton_url',

					'priority'    => 4,

			));

			

			/* green button */

			$wp_customize->add_setting( 'zerif_bigtitle_greenbutton_label', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Another button'));

				

			$wp_customize->add_control( 'zerif_bigtitle_greenbutton_label', array(

					'label'    => __( 'Second button label', 'zerif' ),

					'section'  => 'zerif_bigtitle_section',

					'settings' => 'zerif_bigtitle_greenbutton_label',

					'priority'    => 5,

			));	

			

			$wp_customize->add_setting( 'zerif_bigtitle_greenbutton_url', array('sanitize_callback' => 'esc_url_raw','#'));

				

			$wp_customize->add_control( 'zerif_bigtitle_greenbutton_url', array(

					'label'    => __( 'Second button link', 'zerif' ),

					'section'  => 'zerif_bigtitle_section',

					'settings' => 'zerif_bigtitle_greenbutton_url',

					'priority'    => 6,

			));

			
			$wp_customize->add_setting(
				'zerif_bigtitle_background',
				array(
					'default'     => 'rgba(0, 0, 0, 0.5)'
				)
			);
			 
			$wp_customize->add_control(
				new Zerif_Customize_Alpha_Color_Control(
					$wp_customize,
					'zerif_bigtitle_background',
					array(
						'label'    => __( 'Section background color', 'zerif' ),
						'palette' => true,
						'section'  => 'zerif_bigtitle_section',
						'priority'   => 7
					)
				)
			);
			
			
			$wp_customize->add_setting(
				'zerif_bigtitle_header_color',
				array(
					'default'     => '#fff'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_bigtitle_header_color',
					array(
						'label'      => __( 'Section header text color', 'zerif' ),
						'section'    => 'zerif_bigtitle_section',
						'settings'   => 'zerif_bigtitle_header_color',
						'priority'   => 8
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_bigtitle_1button_background_color',
				array(
					'default'     => '#e96656'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_bigtitle_1button_background_color',
					array(
						'label'      => __( 'First button background color', 'zerif' ),
						'section'    => 'zerif_bigtitle_section',
						'settings'   => 'zerif_bigtitle_1button_background_color',
						'priority'   => 9
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_bigtitle_1button_background_color_hover',
				array(
					'default'     => '#cb4332'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_bigtitle_1button_background_color_hover',
					array(
						'label'      => __( 'First button background color - hover', 'zerif' ),
						'section'    => 'zerif_bigtitle_section',
						'settings'   => 'zerif_bigtitle_1button_background_color_hover',
						'priority'   => 10
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_bigtitle_1button_color',
				array(
					'default'     => '#fff'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_bigtitle_1button_color',
					array(
						'label'      => __( 'First button text color', 'zerif' ),
						'section'    => 'zerif_bigtitle_section',
						'settings'   => 'zerif_bigtitle_1button_color',
						'priority'   => 11
					)
				)
			);
			$wp_customize->add_setting(
				'zerif_bigtitle_2button_background_color',
				array(
					'default'     => '#20AA73'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_bigtitle_2button_background_color',
					array(
						'label'      => __( 'Second button background color', 'zerif' ),
						'section'    => 'zerif_bigtitle_section',
						'settings'   => 'zerif_bigtitle_2button_background_color',
						'priority'   => 12
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_bigtitle_2button_background_color_hover',
				array(
					'default'     => '#069059'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_bigtitle_2button_background_color_hover',
					array(
						'label'      => __( 'Second button background color - hover', 'zerif' ),
						'section'    => 'zerif_bigtitle_section',
						'settings'   => 'zerif_bigtitle_2button_background_color_hover',
						'priority'   => 13
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_bigtitle_2button_color',
				array(
					'default'     => '#fff'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_bigtitle_2button_color',
					array(
						'label'      => __( 'Second button text color', 'zerif' ),
						'section'    => 'zerif_bigtitle_section',
						'settings'   => 'zerif_bigtitle_2button_color',
						'priority'   => 14
					)
				)
			);
	endif;

	

	

	

	/********************************************************************/

	/*************  OUR FOCUS SECTION **********************************/

	/********************************************************************/

	
	if( $wp_version_nr >= 4.0 ):
		
		$wp_customize->add_panel( 'panel_4', array(
			'priority' => 33,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Our focus section', 'zerif' )
		) );
		
		$wp_customize->add_section( 'zerif_ourfocus_texts_section' , array(

				'title'       => __( 'Texts', 'zerif' ),

				'priority'    => 1,

				'panel' => 'panel_4'
		));
		
		/* show/hide */   

		$wp_customize->add_setting( 'zerif_ourfocus_show');

		$wp_customize->add_control(

			'zerif_ourfocus_show',

			array(

				'type' => 'checkbox',

				'label' => 'Hide our focus section?',

				'section' => 'zerif_ourfocus_texts_section',

				'priority'    => 1,

			)

		);

		/* our focus title */

		$wp_customize->add_setting( 'zerif_ourfocus_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Our Focus'));

			

		$wp_customize->add_control( 'zerif_ourfocus_title', array(

				'label'    => __( 'Title', 'zerif' ),

				'section'  => 'zerif_ourfocus_texts_section',

				'settings' => 'zerif_ourfocus_title',

				'priority'    => 2,

		));

		/* our focus subtitle */

		$wp_customize->add_setting( 'zerif_ourfocus_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Add a subtitle in Customizer, "Our focus section"'));

			

		$wp_customize->add_control( 'zerif_ourfocus_subtitle', array(

				'label'    => __( 'Our focus subtitle', 'zerif' ),

				'section'  => 'zerif_ourfocus_texts_section',

				'settings' => 'zerif_ourfocus_subtitle',

				'priority'    => 3,

		));
		
		$wp_customize->add_section( 'zerif_ourfocus_colors_section' , array(

				'title'       => __( 'Colors', 'zerif' ),

				'priority'    => 2,

				'panel' => 'panel_4'
		));

		$wp_customize->add_setting(
				'zerif_ourfocus_background',
				array(
					'default'     => '#fff'
				)
		);
			 
		$wp_customize->add_control(
				new Zerif_Customize_Alpha_Color_Control(
					$wp_customize,
					'zerif_ourfocus_background',
					array(
						'label'    => __( 'Section background color', 'zerif' ),
						'palette' => true,
						'section'  => 'zerif_ourfocus_colors_section',
						'priority'   => 1
					)
				)
		);
		
		$wp_customize->add_setting(
			'zerif_ourfocus_header',
			array(
				'default'     => '#404040'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ourfocus_header',
				array(
					'label'      => __( 'Section header text color', 'zerif' ),
					'section'    => 'zerif_ourfocus_colors_section',
					'settings'   => 'zerif_ourfocus_header',
					'priority'   => 2
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_ourfocus_box_title_color',
			array(
				'default'     => '#404040'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ourfocus_box_title_color',
				array(
					'label'      => __( 'Box title color', 'zerif' ),
					'section'    => 'zerif_ourfocus_colors_section',
					'settings'   => 'zerif_ourfocus_box_title_color',
					'priority'   => 3
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_ourfocus_box_text_color',
			array(
				'default'     => '#404040'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ourfocus_box_text_color',
				array(
					'label'      => __( 'Box text color', 'zerif' ),
					'section'    => 'zerif_ourfocus_colors_section',
					'settings'   => 'zerif_ourfocus_box_text_color',
					'priority'   => 4
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_ourfocus_1box',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ourfocus_1box',
				array(
					'label'      => __( 'First box border color hover', 'zerif' ),
					'section'    => 'zerif_ourfocus_colors_section',
					'settings'   => 'zerif_ourfocus_1box',
					'priority'   => 5
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_ourfocus_2box',
			array(
				'default'     => '#34d293'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ourfocus_2box',
				array(
					'label'      => __( 'Second box border color hover', 'zerif' ),
					'section'    => 'zerif_ourfocus_colors_section',
					'settings'   => 'zerif_ourfocus_2box',
					'priority'   => 6
				)
			)
		);

		$wp_customize->add_setting(
			'zerif_ourfocus_3box',
			array(
				'default'     => '#3ab0e2'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ourfocus_3box',
				array(
					'label'      => __( 'Third box border color hover', 'zerif' ),
					'section'    => 'zerif_ourfocus_colors_section',
					'settings'   => 'zerif_ourfocus_3box',
					'priority'   => 7
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_ourfocus_4box',
			array(
				'default'     => '#f7d861'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ourfocus_4box',
				array(
					'label'      => __( 'Fourth box border color hover', 'zerif' ),
					'section'    => 'zerif_ourfocus_colors_section',
					'settings'   => 'zerif_ourfocus_4box',
					'priority'   => 8
				)
			)
		);
	else:
		
			$wp_customize->add_section( 'zerif_ourfocus_section' , array(

					'title'       => __( 'Our focus section', 'zerif' ),

					'priority'    => 33

			));
			
			/* show/hide */   

			$wp_customize->add_setting( 'zerif_ourfocus_show');

			$wp_customize->add_control(

				'zerif_ourfocus_show',

				array(

					'type' => 'checkbox',

					'label' => 'Hide our focus section?',

					'section' => 'zerif_ourfocus_section',

					'priority'    => 1,

				)

			);

			/* our focus title */

			$wp_customize->add_setting( 'zerif_ourfocus_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Our Focus'));

				

			$wp_customize->add_control( 'zerif_ourfocus_title', array(

					'label'    => __( 'Title', 'zerif' ),

					'section'  => 'zerif_ourfocus_section',

					'settings' => 'zerif_ourfocus_title',

					'priority'    => 2,

			));

			/* our focus subtitle */

			$wp_customize->add_setting( 'zerif_ourfocus_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Add a subtitle in Customizer, "Our focus section"'));

				

			$wp_customize->add_control( 'zerif_ourfocus_subtitle', array(

					'label'    => __( 'Our focus subtitle', 'zerif' ),

					'section'  => 'zerif_ourfocus_section',

					'settings' => 'zerif_ourfocus_subtitle',

					'priority'    => 3,

			));

			$wp_customize->add_setting(
					'zerif_ourfocus_background',
					array(
						'default'     => '#fff'
					)
			);
				 
			$wp_customize->add_control(
					new Zerif_Customize_Alpha_Color_Control(
						$wp_customize,
						'zerif_ourfocus_background',
						array(
							'label'    => __( 'Section background color', 'zerif' ),
							'palette' => true,
							'section'  => 'zerif_ourfocus_section',
							'priority'   => 4
						)
					)
			);
			
			
			$wp_customize->add_setting(
				'zerif_ourfocus_header',
				array(
					'default'     => '#404040'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ourfocus_header',
					array(
						'label'      => __( 'Section header text color', 'zerif' ),
						'section'    => 'zerif_ourfocus_section',
						'settings'   => 'zerif_ourfocus_header',
						'priority'   => 5
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_ourfocus_box_title_color',
				array(
					'default'     => '#404040'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ourfocus_box_title_color',
					array(
						'label'      => __( 'Box title color', 'zerif' ),
						'section'    => 'zerif_ourfocus_section',
						'settings'   => 'zerif_ourfocus_box_title_color',
						'priority'   => 7
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_ourfocus_box_text_color',
				array(
					'default'     => '#404040'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ourfocus_box_text_color',
					array(
						'label'      => __( 'Box text color', 'zerif' ),
						'section'    => 'zerif_ourfocus_section',
						'settings'   => 'zerif_ourfocus_box_text_color',
						'priority'   => 8
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_ourfocus_1box',
				array(
					'default'     => '#e96656'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ourfocus_1box',
					array(
						'label'      => __( 'First box border color hover', 'zerif' ),
						'section'    => 'zerif_ourfocus_section',
						'settings'   => 'zerif_ourfocus_1box',
						'priority'   => 9
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_ourfocus_2box',
				array(
					'default'     => '#34d293'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ourfocus_2box',
					array(
						'label'      => __( 'Second box border color hover', 'zerif' ),
						'section'    => 'zerif_ourfocus_section',
						'settings'   => 'zerif_ourfocus_2box',
						'priority'   => 10
					)
				)
			);

			$wp_customize->add_setting(
				'zerif_ourfocus_3box',
				array(
					'default'     => '#3ab0e2'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ourfocus_3box',
					array(
						'label'      => __( 'Third box border color hover', 'zerif' ),
						'section'    => 'zerif_ourfocus_section',
						'settings'   => 'zerif_ourfocus_3box',
						'priority'   => 11
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_ourfocus_4box',
				array(
					'default'     => '#f7d861'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ourfocus_4box',
					array(
						'label'      => __( 'Fourth box border color hover', 'zerif' ),
						'section'    => 'zerif_ourfocus_section',
						'settings'   => 'zerif_ourfocus_4box',
						'priority'   => 12
					)
				)
			);
	endif;

	

	

	


	/************************************/

	/******** PORTOFOLIO SECTION ********/

	/***********************************/

	
	if( $wp_version_nr >= 4.0 ):
		
		$wp_customize->add_panel( 'panel_5', array(
			'priority' => 34,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Portfolio section', 'zerif' )
		) );
		
		$wp_customize->add_section( 'zerif_portofolio_texts_section' , array(

				'title'       => __( 'Texts', 'zerif' ),

				'priority'    => 1,

				'panel' => 'panel_5'
		));
		
		/* portofolio show/hide */   

		$wp_customize->add_setting( 'zerif_portofolio_show');

		$wp_customize->add_control(

			'zerif_portofolio_show',

			array(

				'type' => 'checkbox',

				'label' => 'Hide portofolio section?',

				'section' => 'zerif_portofolio_texts_section',

				'priority'    => 1,

			)

		);

		/* portofolio title */

		$wp_customize->add_setting( 'zerif_portofolio_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Portfolio'));

			

		$wp_customize->add_control( 'zerif_portofolio_title', array(

				'label'    => __( 'Portfolio title', 'zerif' ),

				'section'  => 'zerif_portofolio_texts_section',

				'settings' => 'zerif_portofolio_title',

				'priority'    => 2,

		));	
		

		/* portofolio subtitle */

		$wp_customize->add_setting( 'zerif_portofolio_subtitle', array('sanitize_callback' => 'zerif_sanitize_text', 'default' => 'Portfolio subtitle'));

			

		$wp_customize->add_control( 'zerif_portofolio_subtitle', array(

				'label'    => __( 'Portfolio subtitle', 'zerif' ),

				'section'  => 'zerif_portofolio_texts_section',

				'settings' => 'zerif_portofolio_subtitle',

				'priority'    => 3,

		));	

		$wp_customize->add_section( 'zerif_portofolio_colors_section' , array(

				'title'       => __( 'Colors', 'zerif' ),

				'priority'    => 2,

				'panel' => 'panel_5'
		));	
		
		
		$wp_customize->add_setting(
					'zerif_portofolio_background',
					array(
						'default'     => '#fff'
					)
		);
				 
		$wp_customize->add_control(
					new Zerif_Customize_Alpha_Color_Control(
						$wp_customize,
						'zerif_portofolio_background',
						array(
							'label'    => __( 'Section background color', 'zerif' ),
							'palette' => true,
							'section'  => 'zerif_portofolio_colors_section',
							'priority'   => 1
						)
					)
		);
		
		
		$wp_customize->add_setting(
			'zerif_portofolio_header',
			array(
				'default'     => '#404040'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_portofolio_header',
				array(
					'label'      => __( 'Section header text color', 'zerif' ),
					'section'    => 'zerif_portofolio_colors_section',
					'settings'   => 'zerif_portofolio_header',
					'priority'   => 2
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_portofolio_text',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_portofolio_text',
				array(
					'label'      => __( 'Section text color', 'zerif' ),
					'section'    => 'zerif_portofolio_colors_section',
					'settings'   => 'zerif_portofolio_text',
					'priority'   => 3
				)
			)
		);
	else:
		
			$wp_customize->add_section( 'zerif_portofolio_section' , array(

					'title'       => __( 'Portfolio section', 'zerif' ),

					'priority'    => 34

			));
			
			/* portofolio show/hide */   

			$wp_customize->add_setting( 'zerif_portofolio_show');

			$wp_customize->add_control(

				'zerif_portofolio_show',

				array(

					'type' => 'checkbox',

					'label' => 'Hide portfolio section?',

					'section' => 'zerif_portofolio_section',

					'priority'    => 1,

				)

			);

			/* portofolio title */

			$wp_customize->add_setting( 'zerif_portofolio_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Portfolio'));

				

			$wp_customize->add_control( 'zerif_portofolio_title', array(

					'label'    => __( 'Portfolio title', 'zerif' ),

					'section'  => 'zerif_portofolio_section',

					'settings' => 'zerif_portofolio_title',

					'priority'    => 2,

			));	
			

			/* portofolio subtitle */

			$wp_customize->add_setting( 'zerif_portofolio_subtitle', array('sanitize_callback' => 'zerif_sanitize_text', 'default' => 'Portfolio subtitle'));

				

			$wp_customize->add_control( 'zerif_portofolio_subtitle', array(

					'label'    => __( 'Portfolio subtitle', 'zerif' ),

					'section'  => 'zerif_portofolio_section',

					'settings' => 'zerif_portofolio_subtitle',

					'priority'    => 3,

			));	

			$wp_customize->add_setting(
					'zerif_portofolio_background',
					array(
						'default'     => '#fff'
					)
			);
					 
			$wp_customize->add_control(
						new Zerif_Customize_Alpha_Color_Control(
							$wp_customize,
							'zerif_portofolio_background',
							array(
								'label'    => __( 'Section background color', 'zerif' ),
								'palette' => true,
								'section'  => 'zerif_portofolio_section',
								'priority'   => 4
							)
						)
			);
			
			$wp_customize->add_setting(
				'zerif_portofolio_header',
				array(
					'default'     => '#404040'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_portofolio_header',
					array(
						'label'      => __( 'Section header text color', 'zerif' ),
						'section'    => 'zerif_portofolio_section',
						'settings'   => 'zerif_portofolio_header',
						'priority'   => 5
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_portofolio_text',
				array(
					'default'     => '#fff'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_portofolio_text',
					array(
						'label'      => __( 'Section text color', 'zerif' ),
						'section'    => 'zerif_portofolio_section',
						'settings'   => 'zerif_portofolio_text',
						'priority'   => 7
					)
				)
			);
	endif;
	

	

	   

	
	

	

	/************************************/

	/******* ABOUT US SECTION ***********/

	/************************************/

	
	if( $wp_version_nr >= 4.0 ):
		
		$wp_customize->add_panel( 'panel_6', array(
			'priority' => 35,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'About us section', 'zerif' )
		) );
		
		$wp_customize->add_section( 'zerif_aboutus_texts_section' , array(

				'title'       => __( 'Texts', 'zerif' ),

				'priority'    => 1,

				'panel' => 'panel_6'
		));
		
		/* about us show/hide */   

		$wp_customize->add_setting( 'zerif_aboutus_show');

		$wp_customize->add_control(

			'zerif_aboutus_show',

			array(

				'type' => 'checkbox',

				'label' => 'Hide about us section?',

				'section' => 'zerif_aboutus_texts_section',

				'priority'    => 1,

			)

		);

		/* title */

		$wp_customize->add_setting( 'zerif_aboutus_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'About US'));

			

		$wp_customize->add_control( 'zerif_aboutus_title', array(

				'label'    => __( 'Title', 'zerif' ),

				'section'  => 'zerif_aboutus_texts_section',

				'settings' => 'zerif_aboutus_title',

				'priority'    => 2,

		));

		/* subtitle */

		$wp_customize->add_setting( 'zerif_aboutus_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Add a subtitle in Customizer, "About us section"'));

			

		$wp_customize->add_control( 'zerif_aboutus_subtitle', array(

				'label'    => __( 'Subtitle', 'zerif' ),

				'section'  => 'zerif_aboutus_texts_section',

				'settings' => 'zerif_aboutus_subtitle',

				'priority'    => 3,

		));

		

		/* big left title */

		$wp_customize->add_setting( 'zerif_aboutus_biglefttitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Title'));

			

		$wp_customize->add_control( 'zerif_aboutus_biglefttitle', array(

				'label'    => __( 'Big left side title', 'zerif' ),

				'section'  => 'zerif_aboutus_texts_section',

				'settings' => 'zerif_aboutus_biglefttitle',

				'priority'    => 4,

		));

		

		/* text */

		$wp_customize->add_setting( 'zerif_aboutus_text', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'You can add here a large piece of text. For that, please go in the Admin Area, Customizer, "About us section"'));

			

		$wp_customize->add_control( 'zerif_aboutus_text', array(

				'label'    => __( 'Text', 'zerif' ),

				'section'  => 'zerif_aboutus_texts_section',

				'settings' => 'zerif_aboutus_text',

				'priority'    => 5,

		));


		$wp_customize->add_section( 'zerif_aboutus_feature1_section' , array(

				'title'       => __( 'Feature no#1', 'zerif' ),

				'priority'    => 2,

				'panel' => 'panel_6'
		));
		

		/* feature no#1 */

		$wp_customize->add_setting( 'zerif_aboutus_feature1_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Feature'));

			

		$wp_customize->add_control( 'zerif_aboutus_feature1_title', array(

				'label'    => __( 'Feature no1 title', 'zerif' ),

				'section'  => 'zerif_aboutus_feature1_section',

				'settings' => 'zerif_aboutus_feature1_title',

				'priority'    => 1,

		));

		

		$wp_customize->add_setting( 'zerif_aboutus_feature1_text', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_aboutus_feature1_text', array(

				'label'    => __( 'Feature no1 text', 'zerif' ),

				'section'  => 'zerif_aboutus_feature1_section',

				'settings' => 'zerif_aboutus_feature1_text',

				'priority'    => 2,

		));

		

		$wp_customize->add_setting( 'zerif_aboutus_feature1_nr', array('sanitize_callback' => 'zerif_sanitize_number','default' => '50'));

		$wp_customize->add_control(

			new Zerif_Customizer_Number_Control(

				$wp_customize,

				'zerif_aboutus_feature1_nr',

				array(

					'type' => 'number',

					'label' => __( 'Feature no1 percentage', 'zerif' ),

					'section' => 'zerif_aboutus_feature1_section',

					'settings' => 'zerif_aboutus_feature1_nr',

					'priority'    => 3

				)

			)

		); 

		
		$wp_customize->add_section( 'zerif_aboutus_feature2_section' , array(

				'title'       => __( 'Feature no#2', 'zerif' ),

				'priority'    => 3,

				'panel' => 'panel_6'
		));
		

		/* feature no#2 */

		$wp_customize->add_setting( 'zerif_aboutus_feature2_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Feature'));

			

		$wp_customize->add_control( 'zerif_aboutus_feature2_title', array(

				'label'    => __( 'Feature no2 title', 'zerif' ),

				'section'  => 'zerif_aboutus_feature2_section',

				'settings' => 'zerif_aboutus_feature2_title',

				'priority'    => 1,

		));

		

		$wp_customize->add_setting( 'zerif_aboutus_feature2_text', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_aboutus_feature2_text', array(

				'label'    => __( 'Feature no2 text', 'zerif' ),

				'section'  => 'zerif_aboutus_feature2_section',

				'settings' => 'zerif_aboutus_feature2_text',

				'priority'    => 2,

		));

		

		$wp_customize->add_setting( 'zerif_aboutus_feature2_nr', array('sanitize_callback' => 'zerif_sanitize_number','default' => '70'));

		$wp_customize->add_control(

			new Zerif_Customizer_Number_Control(

				$wp_customize,

				'zerif_aboutus_feature2_nr',

				array(

					'type' => 'number',

					'label' => __( 'Feature no2 percentage', 'zerif' ),

					'section' => 'zerif_aboutus_feature2_section',

					'settings' => 'zerif_aboutus_feature2_nr',

					'priority'    => 3

				)

			)

		); 

		$wp_customize->add_section( 'zerif_aboutus_feature3_section' , array(

				'title'       => __( 'Feature no#3', 'zerif' ),

				'priority'    => 4,

				'panel' => 'panel_6'
		));

		/* feature no#3 */

		$wp_customize->add_setting( 'zerif_aboutus_feature3_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Feature'));

			

		$wp_customize->add_control( 'zerif_aboutus_feature3_title', array(

				'label'    => __( 'Feature no3 title', 'zerif' ),

				'section'  => 'zerif_aboutus_feature3_section',

				'settings' => 'zerif_aboutus_feature3_title',

				'priority'    => 1,

		));

		

		$wp_customize->add_setting( 'zerif_aboutus_feature3_text', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_aboutus_feature3_text', array(

				'label'    => __( 'Feature no3 text', 'zerif' ),

				'section'  => 'zerif_aboutus_feature3_section',

				'settings' => 'zerif_aboutus_feature3_text',

				'priority'    => 2,

		));

		

		$wp_customize->add_setting( 'zerif_aboutus_feature3_nr', array('sanitize_callback' => 'zerif_sanitize_number','default' => '100'));

		$wp_customize->add_control(

			new Zerif_Customizer_Number_Control(

				$wp_customize,

				'zerif_aboutus_feature3_nr',

				array(

					'type' => 'number',

					'label' => __( 'Feature no3 percentage', 'zerif' ),

					'section' => 'zerif_aboutus_feature3_section',

					'settings' => 'zerif_aboutus_feature3_nr',

					'priority'    => 3

				)

			)

		); 

		$wp_customize->add_section( 'zerif_aboutus_feature4_section' , array(

				'title'       => __( 'Feature no#4', 'zerif' ),

				'priority'    => 5,

				'panel' => 'panel_6'
		));

		/* feature no#4 */

		$wp_customize->add_setting( 'zerif_aboutus_feature4_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Feature'));

			

		$wp_customize->add_control( 'zerif_aboutus_feature4_title', array(

				'label'    => __( 'Feature no4 title', 'zerif' ),

				'section'  => 'zerif_aboutus_feature4_section',

				'settings' => 'zerif_aboutus_feature4_title',

				'priority'    => 1,

		));

		

		$wp_customize->add_setting( 'zerif_aboutus_feature4_text', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_aboutus_feature4_text', array(

				'label'    => __( 'Feature no4 text', 'zerif' ),

				'section'  => 'zerif_aboutus_feature4_section',

				'settings' => 'zerif_aboutus_feature4_text',

				'priority'    => 2,

		));

		

		$wp_customize->add_setting( 'zerif_aboutus_feature4_nr', array('sanitize_callback' => 'zerif_sanitize_number','default' => '10'));

		$wp_customize->add_control(

			new Zerif_Customizer_Number_Control(

				$wp_customize,

				'zerif_aboutus_feature4_nr',

				array(

					'type' => 'number',

					'label' => __( 'Feature no4 percentage', 'zerif' ),

					'section' => 'zerif_aboutus_feature4_section',

					'settings' => 'zerif_aboutus_feature4_nr',

					'priority'    => 3

				)

			)

		); 

		$wp_customize->add_section( 'zerif_aboutus_colors_section' , array(

				'title'       => __( 'Colors', 'zerif' ),

				'priority'    => 6,

				'panel' => 'panel_6'
		));
		
		$wp_customize->add_setting(
					'zerif_aboutus_background',
					array(
						'default'     => '#272727'
					)
		);
					 
		$wp_customize->add_control(
						new Zerif_Customize_Alpha_Color_Control(
							$wp_customize,
							'zerif_aboutus_background',
							array(
								'label'    => __( 'Section background color', 'zerif' ),
								'palette' => true,
								'section'  => 'zerif_aboutus_colors_section',
								'priority'   => 1
							)
						)
		);
		
		
		
		$wp_customize->add_setting(
			'zerif_aboutus_title_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_aboutus_title_color',
				array(
					'label'      => __( 'Section titles color', 'zerif' ),
					'section'    => 'zerif_aboutus_colors_section',
					'settings'   => 'zerif_aboutus_title_color',
					'priority'   => 2
				)
			)
		);
		
		$wp_customize->add_section( 'zerif_aboutus_clients_title_section' , array(

				'title'       => __( 'Clients widget area title', 'zerif' ),

				'priority'    => 7,
				
				'panel' => 'panel_6'
		));
		
		$wp_customize->add_setting( 'zerif_aboutus_clients_title_text', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'OUR HAPPY CLIENTS'));

		$wp_customize->add_control( 'zerif_aboutus_clients_title_text', array(

				'label'    => __( 'Title', 'zerif' ),

				'section'  => 'zerif_aboutus_clients_title_section',

				'settings' => 'zerif_aboutus_clients_title_text',

				'priority'    => 1,

		));
	else:
		
			$wp_customize->add_section( 'zerif_aboutus_section' , array(

					'title'       => __( 'About us section', 'zerif' ),

					'priority'    => 35

			));
			
			/* about us show/hide */   

			$wp_customize->add_setting( 'zerif_aboutus_show');

			$wp_customize->add_control(

				'zerif_aboutus_show',

				array(

					'type' => 'checkbox',

					'label' => 'Hide about us section?',

					'section' => 'zerif_aboutus_section',

					'priority'    => 1,

				)

			);

			/* title */

			$wp_customize->add_setting( 'zerif_aboutus_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'About US'));

				

			$wp_customize->add_control( 'zerif_aboutus_title', array(

					'label'    => __( 'Title', 'zerif' ),

					'section'  => 'zerif_aboutus_section',

					'settings' => 'zerif_aboutus_title',

					'priority'    => 2,

			));

			/* subtitle */

			$wp_customize->add_setting( 'zerif_aboutus_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Add a subtitle in Customizer, "About us section"'));

				

			$wp_customize->add_control( 'zerif_aboutus_subtitle', array(

					'label'    => __( 'Subtitle', 'zerif' ),

					'section'  => 'zerif_aboutus_section',

					'settings' => 'zerif_aboutus_subtitle',

					'priority'    => 3,

			));

			

			/* big left title */

			$wp_customize->add_setting( 'zerif_aboutus_biglefttitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Title'));

				

			$wp_customize->add_control( 'zerif_aboutus_biglefttitle', array(

					'label'    => __( 'Big left side title', 'zerif' ),

					'section'  => 'zerif_aboutus_section',

					'settings' => 'zerif_aboutus_biglefttitle',

					'priority'    => 4,

			));

			

			/* text */

			$wp_customize->add_setting( 'zerif_aboutus_text', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'You can add here a large piece of text. For that, please go in the Admin Area, Customizer, "About us section"'));

				

			$wp_customize->add_control( 'zerif_aboutus_text', array(

					'label'    => __( 'Text', 'zerif' ),

					'section'  => 'zerif_aboutus_section',

					'settings' => 'zerif_aboutus_text',

					'priority'    => 5,

			));



			

			/* feature no#1 */

			$wp_customize->add_setting( 'zerif_aboutus_feature1_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Feature'));

				

			$wp_customize->add_control( 'zerif_aboutus_feature1_title', array(

					'label'    => __( 'Feature no1 title', 'zerif' ),

					'section'  => 'zerif_aboutus_section',

					'settings' => 'zerif_aboutus_feature1_title',

					'priority'    => 6,

			));

			

			$wp_customize->add_setting( 'zerif_aboutus_feature1_text', array('sanitize_callback' => 'zerif_sanitize_text'));

				

			$wp_customize->add_control( 'zerif_aboutus_feature1_text', array(

					'label'    => __( 'Feature no1 text', 'zerif' ),

					'section'  => 'zerif_aboutus_section',

					'settings' => 'zerif_aboutus_feature1_text',

					'priority'    => 7,

			));

			

			$wp_customize->add_setting( 'zerif_aboutus_feature1_nr', array('sanitize_callback' => 'zerif_sanitize_number','default' => '50'));

			$wp_customize->add_control(

				new Zerif_Customizer_Number_Control(

					$wp_customize,

					'zerif_aboutus_feature1_nr',

					array(

						'type' => 'number',

						'label' => __( 'Feature no1 percentage', 'zerif' ),

						'section' => 'zerif_aboutus_section',

						'settings' => 'zerif_aboutus_feature1_nr',

						'priority'    => 8

					)

				)

			); 

			

			/* feature no#2 */

			$wp_customize->add_setting( 'zerif_aboutus_feature2_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Feature'));

				

			$wp_customize->add_control( 'zerif_aboutus_feature2_title', array(

					'label'    => __( 'Feature no2 title', 'zerif' ),

					'section'  => 'zerif_aboutus_section',

					'settings' => 'zerif_aboutus_feature2_title',

					'priority'    => 9,

			));

			

			$wp_customize->add_setting( 'zerif_aboutus_feature2_text', array('sanitize_callback' => 'zerif_sanitize_text'));

				

			$wp_customize->add_control( 'zerif_aboutus_feature2_text', array(

					'label'    => __( 'Feature no2 text', 'zerif' ),

					'section'  => 'zerif_aboutus_section',

					'settings' => 'zerif_aboutus_feature2_text',

					'priority'    => 10,

			));

			

			$wp_customize->add_setting( 'zerif_aboutus_feature2_nr', array('sanitize_callback' => 'zerif_sanitize_number','default' => '70'));

			$wp_customize->add_control(

				new Zerif_Customizer_Number_Control(

					$wp_customize,

					'zerif_aboutus_feature2_nr',

					array(

						'type' => 'number',

						'label' => __( 'Feature no2 percentage', 'zerif' ),

						'section' => 'zerif_aboutus_section',

						'settings' => 'zerif_aboutus_feature2_nr',

						'priority'    => 11

					)

				)

			); 

			

			/* feature no#3 */

			$wp_customize->add_setting( 'zerif_aboutus_feature3_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Feature'));

				

			$wp_customize->add_control( 'zerif_aboutus_feature3_title', array(

					'label'    => __( 'Feature no3 title', 'zerif' ),

					'section'  => 'zerif_aboutus_section',

					'settings' => 'zerif_aboutus_feature3_title',

					'priority'    => 12,

			));

			

			$wp_customize->add_setting( 'zerif_aboutus_feature3_text', array('sanitize_callback' => 'zerif_sanitize_text'));

				

			$wp_customize->add_control( 'zerif_aboutus_feature3_text', array(

					'label'    => __( 'Feature no3 text', 'zerif' ),

					'section'  => 'zerif_aboutus_section',

					'settings' => 'zerif_aboutus_feature3_text',

					'priority'    => 13,

			));

			

			$wp_customize->add_setting( 'zerif_aboutus_feature3_nr', array('sanitize_callback' => 'zerif_sanitize_number','default' => '100'));

			$wp_customize->add_control(

				new Zerif_Customizer_Number_Control(

					$wp_customize,

					'zerif_aboutus_feature3_nr',

					array(

						'type' => 'number',

						'label' => __( 'Feature no3 percentage', 'zerif' ),

						'section' => 'zerif_aboutus_section',

						'settings' => 'zerif_aboutus_feature3_nr',

						'priority'    => 14

					)

				)

			); 

			

			/* feature no#4 */

			$wp_customize->add_setting( 'zerif_aboutus_feature4_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Feature'));

				

			$wp_customize->add_control( 'zerif_aboutus_feature4_title', array(

					'label'    => __( 'Feature no4 title', 'zerif' ),

					'section'  => 'zerif_aboutus_section',

					'settings' => 'zerif_aboutus_feature4_title',

					'priority'    => 15,

			));

			

			$wp_customize->add_setting( 'zerif_aboutus_feature4_text', array('sanitize_callback' => 'zerif_sanitize_text'));

				

			$wp_customize->add_control( 'zerif_aboutus_feature4_text', array(

					'label'    => __( 'Feature no4 text', 'zerif' ),

					'section'  => 'zerif_aboutus_section',

					'settings' => 'zerif_aboutus_feature4_text',

					'priority'    => 16,

			));

			

			$wp_customize->add_setting( 'zerif_aboutus_feature4_nr', array('sanitize_callback' => 'zerif_sanitize_number','default' => '10'));

			$wp_customize->add_control(

				new Zerif_Customizer_Number_Control(

					$wp_customize,

					'zerif_aboutus_feature4_nr',

					array(

						'type' => 'number',

						'label' => __( 'Feature no4 percentage', 'zerif' ),

						'section' => 'zerif_aboutus_section',

						'settings' => 'zerif_aboutus_feature4_nr',

						'priority'    => 17

					)

				)

			); 

			$wp_customize->add_setting(
						'zerif_aboutus_background',
						array(
							'default'     => '#272727'
						)
			);
						 
			$wp_customize->add_control(
							new Zerif_Customize_Alpha_Color_Control(
								$wp_customize,
								'zerif_aboutus_background',
								array(
									'label'    => __( 'Section background color', 'zerif' ),
									'palette' => true,
									'section'  => 'zerif_aboutus_section',
									'priority'   => 18
								)
							)
			);	
			
			
			$wp_customize->add_setting(
				'zerif_aboutus_title_color',
				array(
					'default'     => '#fff'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_aboutus_title_color',
					array(
						'label'      => __( 'Section titles color', 'zerif' ),
						'section'    => 'zerif_aboutus_section',
						'settings'   => 'zerif_aboutus_title_color',
						'priority'   => 19
					)
				)
			);
			

			$wp_customize->add_setting( 'zerif_aboutus_clients_title_text', array('sanitize_callback' => 'zerif_sanitize_text', 'default' => 'OUR HAPPY CLIENTS'));

			$wp_customize->add_control( 'zerif_aboutus_clients_title_text', array(

					'label'    => __( 'Title', 'zerif' ),

					'section'  => 'zerif_aboutus_section',

					'settings' => 'zerif_aboutus_clients_title_text',

					'priority'    => 20,

			));
	endif;
	


	/******************************************/

    /**********	OUR TEAM SECTION **************/

	/******************************************/

	

	if( $wp_version_nr >= 4.0 ):
		
		$wp_customize->add_panel( 'panel_7', array(
			'priority' => 36,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Our team section', 'zerif' )
		) );
		
		$wp_customize->add_section( 'zerif_ourteam_texts_section' , array(

				'title'       => __( 'Texts', 'zerif' ),

				'priority'    => 1,

				'panel' => 'panel_7'
		));
		
		
		/* our team show/hide */   

		$wp_customize->add_setting( 'zerif_ourteam_show');

		$wp_customize->add_control(

			'zerif_ourteam_show',

			array(

				'type' => 'checkbox',

				'label' => 'Hide our team section?',

				'section' => 'zerif_ourteam_texts_section',

				'priority'    => 1,

			)

		);

		   
		/* our team title */

		$wp_customize->add_setting( 'zerif_ourteam_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Our Team'));

			

		$wp_customize->add_control( 'zerif_ourteam_title', array(

				'label'    => __( 'Title', 'zerif' ),

				'section'  => 'zerif_ourteam_texts_section',

				'settings' => 'zerif_ourteam_title',

				'priority'    => 2,

		));
		

		/* our team subtitle */

		$wp_customize->add_setting( 'zerif_ourteam_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Add a subtitle in Customizer, "Our team section"'));

			

		$wp_customize->add_control( 'zerif_ourteam_subtitle', array(

				'label'    => __( 'Our team subtitle', 'zerif' ),

				'section'  => 'zerif_ourteam_texts_section',

				'settings' => 'zerif_ourteam_subtitle',

				'priority'    => 3,

		));

		$wp_customize->add_section( 'zerif_ourteam_colors_section' , array(

				'title'       => __( 'Colors', 'zerif' ),

				'priority'    => 2,

				'panel' => 'panel_7'
		));
		
		$wp_customize->add_setting(
						'zerif_ourteam_background',
						array(
							'default'     => '#fff'
						)
		);
						 
		$wp_customize->add_control(
							new Zerif_Customize_Alpha_Color_Control(
								$wp_customize,
								'zerif_ourteam_background',
								array(
									'label'    => __( 'Section background color', 'zerif' ),
									'palette' => true,
									'section'  => 'zerif_ourteam_colors_section',
									'priority'   => 1
								)
							)
		);	
		
		
		
		$wp_customize->add_setting(
			'zerif_ourteam_header',
			array(
				'default'     => '#404040'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ourteam_header',
				array(
					'label'      => __( 'Section header text color', 'zerif' ),
					'section'    => 'zerif_ourteam_colors_section',
					'settings'   => 'zerif_ourteam_header',
					'priority'   => 2
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_ourteam_text',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ourteam_text',
				array(
					'label'      => __( 'Section text color', 'zerif' ),
					'section'    => 'zerif_ourteam_colors_section',
					'settings'   => 'zerif_ourteam_text',
					'priority'   => 3
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_ourteam_socials',
			array(
				'default'     => '#808080'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ourteam_socials',
				array(
					'label'      => __( 'Section social icons color', 'zerif' ),
					'section'    => 'zerif_ourteam_colors_section',
					'settings'   => 'zerif_ourteam_socials',
					'priority'   => 4
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_ourteam_socials_hover',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ourteam_socials_hover',
				array(
					'label'      => __( 'Section social icons color - hover', 'zerif' ),
					'section'    => 'zerif_ourteam_colors_section',
					'settings'   => 'zerif_ourteam_socials_hover',
					'priority'   => 5
				)
			)
		);
	else:
		
			$wp_customize->add_section( 'zerif_ourteam_section' , array(

					'title'       => __( 'Our team section', 'zerif' ),

					'priority'    => 36

			));
			
			/* our team show/hide */   

			$wp_customize->add_setting( 'zerif_ourteam_show');

			$wp_customize->add_control(

				'zerif_ourteam_show',

				array(

					'type' => 'checkbox',

					'label' => 'Hide our team section?',

					'section' => 'zerif_ourteam_section',

					'priority'    => 1,

				)

			);

			   
			/* our team title */

			$wp_customize->add_setting( 'zerif_ourteam_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Our Team'));

				

			$wp_customize->add_control( 'zerif_ourteam_title', array(

					'label'    => __( 'Title', 'zerif' ),

					'section'  => 'zerif_ourteam_section',

					'settings' => 'zerif_ourteam_title',

					'priority'    => 2,

			));
			

			/* our team subtitle */

			$wp_customize->add_setting( 'zerif_ourteam_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Add a subtitle in Customizer, "Our team section"'));

				

			$wp_customize->add_control( 'zerif_ourteam_subtitle', array(

					'label'    => __( 'Our team subtitle', 'zerif' ),

					'section'  => 'zerif_ourteam_section',

					'settings' => 'zerif_ourteam_subtitle',

					'priority'    => 3,

			));

			
			$wp_customize->add_setting(
						'zerif_ourteam_background',
						array(
							'default'     => '#fff'
						)
			);
							 
			$wp_customize->add_control(
								new Zerif_Customize_Alpha_Color_Control(
									$wp_customize,
									'zerif_ourteam_background',
									array(
										'label'    => __( 'Section background color', 'zerif' ),
										'palette' => true,
										'section'  => 'zerif_ourteam_section',
										'priority'   => 4
									)
								)
			);
			
			$wp_customize->add_setting(
				'zerif_ourteam_header',
				array(
					'default'     => '#404040'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ourteam_header',
					array(
						'label'      => __( 'Section header text color', 'zerif' ),
						'section'    => 'zerif_ourteam_section',
						'settings'   => 'zerif_ourteam_header',
						'priority'   => 5
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_ourteam_text',
				array(
					'default'     => '#fff'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ourteam_text',
					array(
						'label'      => __( 'Section text color', 'zerif' ),
						'section'    => 'zerif_ourteam_section',
						'settings'   => 'zerif_ourteam_text',
						'priority'   => 7
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_ourteam_socials',
				array(
					'default'     => '#808080'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ourteam_socials',
					array(
						'label'      => __( 'Section social icons color', 'zerif' ),
						'section'    => 'zerif_ourteam_section',
						'settings'   => 'zerif_ourteam_socials',
						'priority'   => 8
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_ourteam_socials_hover',
				array(
					'default'     => '#e96656'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ourteam_socials_hover',
					array(
						'label'      => __( 'Section social icons color - hover', 'zerif' ),
						'section'    => 'zerif_ourteam_section',
						'settings'   => 'zerif_ourteam_socials_hover',
						'priority'   => 9
					)
				)
			);
	endif;

	

	

	/**********************************************/

    /**********	TESTIMONIALS SECTION **************/

	/**********************************************/

	
	if( $wp_version_nr >= 4.0 ):
		
		$wp_customize->add_panel( 'panel_8', array(
			'priority' => 37,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Testimonials section', 'zerif' )
		) );
		
		$wp_customize->add_section( 'zerif_testimonials_texts_section' , array(

				'title'       => __( 'Texts', 'zerif' ),

				'priority'    => 1,

				'panel' => 'panel_8'
		));
		
		/* testimonials show/hide */   

		$wp_customize->add_setting( 'zerif_testimonials_show');

		$wp_customize->add_control(

			'zerif_testimonials_show',

			array(

				'type' => 'checkbox',

				'label' => 'Hide testimonials section?',

				'section' => 'zerif_testimonials_texts_section',

				'priority'    => 1,

			)

		);

		/* testimonials title */

		$wp_customize->add_setting( 'zerif_testimonials_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Testimonials'));

			

		$wp_customize->add_control( 'zerif_testimonials_title', array(

				'label'    => __( 'Title', 'zerif' ),

				'section'  => 'zerif_testimonials_texts_section',

				'settings' => 'zerif_testimonials_title',

				'priority'    => 2,

		));

		/* testimonials subtitle */

		$wp_customize->add_setting( 'zerif_testimonials_subtitle', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_testimonials_subtitle', array(

				'label'    => __( 'Testimonials subtitle', 'zerif' ),

				'section'  => 'zerif_testimonials_texts_section',

				'settings' => 'zerif_testimonials_subtitle',

				'priority'    => 3,

		));

		$wp_customize->add_section( 'zerif_testimonials_colors_section' , array(

				'title'       => __( 'Colors', 'zerif' ),

				'priority'    => 2,

				'panel' => 'panel_8'
		));
		
		$wp_customize->add_setting(
						'zerif_testimonials_background',
						array(
							'default'     => '#dbbf56'
						)
		);
							 
		$wp_customize->add_control(
								new Zerif_Customize_Alpha_Color_Control(
									$wp_customize,
									'zerif_testimonials_background',
									array(
										'label'    => __( 'Section background color', 'zerif' ),
										'palette' => true,
										'section'  => 'zerif_testimonials_colors_section',
										'priority'   => 1
									)
								)
		);
		
		
		$wp_customize->add_setting(
			'zerif_testimonials_header',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_testimonials_header',
				array(
					'label'      => __( 'Section header text color', 'zerif' ),
					'section'    => 'zerif_testimonials_colors_section',
					'settings'   => 'zerif_testimonials_header',
					'priority'   => 2
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_testimonials_text',
			array(
				'default'     => '#909090'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_testimonials_text',
				array(
					'label'      => __( 'Section text color', 'zerif' ),
					'section'    => 'zerif_testimonials_colors_section',
					'settings'   => 'zerif_testimonials_text',
					'priority'   => 3
				)
			)
		);	
		
		$wp_customize->add_setting(
			'zerif_testimonials_author',
			array(
				'default'     => '#909090'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_testimonials_author',
				array(
					'label'      => __( 'Section author name color', 'zerif' ),
					'section'    => 'zerif_testimonials_colors_section',
					'settings'   => 'zerif_testimonials_author',
					'priority'   => 4
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_testimonials_quote',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_testimonials_quote',
				array(
					'label'      => __( 'Section quote color', 'zerif' ),
					'section'    => 'zerif_testimonials_colors_section',
					'settings'   => 'zerif_testimonials_quote',
					'priority'   => 5
				)
			)
		);
	else:
		
			$wp_customize->add_section( 'zerif_testimonials_section' , array(

					'title'       => __( 'Testimonials section', 'zerif' ),

					'priority'    => 37

			));
			
			/* testimonials show/hide */   

			$wp_customize->add_setting( 'zerif_testimonials_show');

			$wp_customize->add_control(

				'zerif_testimonials_show',

				array(

					'type' => 'checkbox',

					'label' => 'Hide testimonials section?',

					'section' => 'zerif_testimonials_section',

					'priority'    => 1,

				)

			);

			/* testimonials title */

			$wp_customize->add_setting( 'zerif_testimonials_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Testimonials'));

				

			$wp_customize->add_control( 'zerif_testimonials_title', array(

					'label'    => __( 'Title', 'zerif' ),

					'section'  => 'zerif_testimonials_section',

					'settings' => 'zerif_testimonials_title',

					'priority'    => 2,

			));

			/* testimonials subtitle */

			$wp_customize->add_setting( 'zerif_testimonials_subtitle', array('sanitize_callback' => 'zerif_sanitize_text'));

				

			$wp_customize->add_control( 'zerif_testimonials_subtitle', array(

					'label'    => __( 'Testimonials subtitle', 'zerif' ),

					'section'  => 'zerif_testimonials_section',

					'settings' => 'zerif_testimonials_subtitle',

					'priority'    => 3,

			));
			
			$wp_customize->add_setting(
						'zerif_testimonials_background',
						array(
							'default'     => '#dbbf56'
						)
			);
								 
			$wp_customize->add_control(
									new Zerif_Customize_Alpha_Color_Control(
										$wp_customize,
										'zerif_testimonials_background',
										array(
											'label'    => __( 'Section background color', 'zerif' ),
											'palette' => true,
											'section'  => 'zerif_testimonials_section',
											'priority'   => 4
										)
									)
			);
			
			$wp_customize->add_setting(
				'zerif_testimonials_header',
				array(
					'default'     => '#fff'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_testimonials_header',
					array(
						'label'      => __( 'Section header text color', 'zerif' ),
						'section'    => 'zerif_testimonials_section',
						'settings'   => 'zerif_testimonials_header',
						'priority'   => 5
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_testimonials_text',
				array(
					'default'     => '#909090'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_testimonials_text',
					array(
						'label'      => __( 'Section text color', 'zerif' ),
						'section'    => 'zerif_testimonials_section',
						'settings'   => 'zerif_testimonials_text',
						'priority'   => 7
					)
				)
			);	
			
			$wp_customize->add_setting(
				'zerif_testimonials_author',
				array(
					'default'     => '#909090'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_testimonials_author',
					array(
						'label'      => __( 'Section author name color', 'zerif' ),
						'section'    => 'zerif_testimonials_section',
						'settings'   => 'zerif_testimonials_author',
						'priority'   => 8
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_testimonials_quote',
				array(
					'default'     => '#e96656'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_testimonials_quote',
					array(
						'label'      => __( 'Section quote color', 'zerif' ),
						'section'    => 'zerif_testimonials_section',
						'settings'   => 'zerif_testimonials_quote',
						'priority'   => 9
					)
				)
			);
	endif;
	

	

	   

	
	

	

	/***********************************************************/

	/********* RIBBONS ****************************************/

	/**********************************************************/

	
	if( $wp_version_nr >= 4.0 ):
		
		$wp_customize->add_panel( 'panel_9', array(
			'priority' => 38,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Ribbon sections', 'zerif' )
		) );
		
		$wp_customize->add_section( 'zerif_bottombribbon_section' , array(

				'title'       => __( 'BottomButton Ribbon', 'zerif' ),

				'priority'    => 1,

				'panel' => 'panel_9'
		));
		
		/* RIBBON SECTION WITH BOTTOM BUTTON */

	

		/* text */	

		$wp_customize->add_setting( 'zerif_bottomribbon_text', array('sanitize_callback' => 'zerif_sanitize_text'));

	   

		$wp_customize->add_control( 'zerif_bottomribbon_text', array(

				'label'    => __( 'Text', 'zerif' ),

				'section'  => 'zerif_bottombribbon_section',

				'settings' => 'zerif_bottomribbon_text',

				'priority'    => 1,

		));

		

		/* button label */

		$wp_customize->add_setting( 'zerif_bottomribbon_buttonlabel', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_bottomribbon_buttonlabel', array(

				'label'    => __( 'Button label', 'zerif' ),

				'section'  => 'zerif_bottombribbon_section',

				'settings' => 'zerif_bottomribbon_buttonlabel',

				'priority'    => 2,

		));

		

		/* button link */

		$wp_customize->add_setting( 'zerif_bottomribbon_buttonlink', array('sanitize_callback' => 'esc_url_raw'));

			

		$wp_customize->add_control( 'zerif_bottomribbon_buttonlink', array(

				'label'    => __( 'Button link', 'zerif' ),

				'section'  => 'zerif_bottombribbon_section',

				'settings' => 'zerif_bottomribbon_buttonlink',

				'priority'    => 3,

		));
		
		$wp_customize->add_setting(
						'zerif_ribbon_background',
						array(
							'default'     => 'rgba(52, 210, 147, 0.8)'
						)
		);
								 
		$wp_customize->add_control(
						new Zerif_Customize_Alpha_Color_Control(
							$wp_customize,
							'zerif_ribbon_background',
							array(
								'label'    => __( 'Background color', 'zerif' ),
								'palette' => true,
								'section'  => 'zerif_bottombribbon_section',
								'priority'   => 4
							)
						)
		);
		
		
		$wp_customize->add_setting(
			'zerif_ribbon_text_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ribbon_text_color',
				array(
					'label'      => __( 'Text color', 'zerif' ),
					'section'    => 'zerif_bottombribbon_section',
					'settings'   => 'zerif_ribbon_text_color',
					'priority'   => 5
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_ribbon_button_background',
			array(
				'default'     => '#20AA73'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ribbon_button_background',
				array(
					'label'      => __( 'Button background color', 'zerif' ),
					'section'    => 'zerif_bottombribbon_section',
					'settings'   => 'zerif_ribbon_button_background',
					'priority'   => 6
				)
			)
		);

		$wp_customize->add_setting(
			'zerif_ribbon_button_background_hover',
			array(
				'default'     => '#14a168'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ribbon_button_background_hover',
				array(
					'label'      => __( 'Button background color hover', 'zerif' ),
					'section'    => 'zerif_bottombribbon_section',
					'settings'   => 'zerif_ribbon_button_background_hover',
					'priority'   => 7
				)
			)
		);

		

		/* RIBBON SECTION WITH BUTTON IN THE RIGHT SIDE */

		$wp_customize->add_section( 'zerif_rightbribbon_section' , array(

				'title'       => __( 'RightButton Ribbon', 'zerif' ),

				'priority'    => 2,

				'panel' => 'panel_9'
		));

		/* text */	

		$wp_customize->add_setting( 'zerif_ribbonright_text', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_ribbonright_text', array(

				'label'    => __( 'Text', 'zerif' ),

				'section'  => 'zerif_rightbribbon_section',

				'settings' => 'zerif_ribbonright_text',

				'priority'    => 1,

		));

		

		/* button label */

		$wp_customize->add_setting( 'zerif_ribbonright_buttonlabel', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_ribbonright_buttonlabel', array(

				'label'    => __( 'Button label', 'zerif' ),

				'section'  => 'zerif_rightbribbon_section',

				'settings' => 'zerif_ribbonright_buttonlabel',

				'priority'    => 2,

		));

		

		/* button link */

		$wp_customize->add_setting( 'zerif_ribbonright_buttonlink', array('sanitize_callback' => 'esc_url_raw'));

			

		$wp_customize->add_control( 'zerif_ribbonright_buttonlink', array(

				'label'    => __( 'Button link', 'zerif' ),

				'section'  => 'zerif_rightbribbon_section',

				'settings' => 'zerif_ribbonright_buttonlink',

				'priority'    => 3,

		));
		
		$wp_customize->add_setting(
						'zerif_ribbonright_background',
						array(
							'default'     => '#e96656'
						)
		);
								 
		$wp_customize->add_control(
						new Zerif_Customize_Alpha_Color_Control(
							$wp_customize,
							'zerif_ribbonright_background',
							array(
								'label'    => __( 'Section background', 'zerif' ),
								'palette' => true,
								'section'  => 'zerif_rightbribbon_section',
								'priority'   => 4
							)
						)
		);
		
		$wp_customize->add_setting(
			'zerif_ribbonright_text_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ribbonright_text_color',
				array(
					'label'      => __( 'Color text', 'zerif' ),
					'section'    => 'zerif_rightbribbon_section',
					'settings'   => 'zerif_ribbonright_text_color',
					'priority'   => 5
				)
			)
		);

		$wp_customize->add_setting(
			'zerif_ribbonright_button_background',
			array(
				'default'     => '#db5a4a'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ribbonright_button_background',
				array(
					'label'      => __( 'Button background color', 'zerif' ),
					'section'    => 'zerif_rightbribbon_section',
					'settings'   => 'zerif_ribbonright_button_background',
					'priority'   => 6
				)
			)
		);

		$wp_customize->add_setting(
			'zerif_ribbonright_button_background_hover',
			array(
				'default'     => '#bf3928'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_ribbonright_button_background_hover',
				array(
					'label'      => __( 'Button background color hover', 'zerif' ),
					'section'    => 'zerif_rightbribbon_section',
					'settings'   => 'zerif_ribbonright_button_background_hover',
					'priority'   => 7
				)
			)
		);
	else:
		
			$wp_customize->add_section( 'zerif_ribbon_section' , array(

					'title'       => __( 'Ribbon sections', 'zerif' ),

					'priority'    => 38

			));
			
			/* RIBBON SECTION WITH BOTTOM BUTTON */

	

			/* text */	

			$wp_customize->add_setting( 'zerif_bottomribbon_text', array('sanitize_callback' => 'zerif_sanitize_text'));

		   

			$wp_customize->add_control( 'zerif_bottomribbon_text', array(

					'label'    => __( 'BottomButton Ribbon - Text', 'zerif' ),

					'section'  => 'zerif_ribbon_section',

					'settings' => 'zerif_bottomribbon_text',

					'priority'    => 1,

			));

			

			/* button label */

			$wp_customize->add_setting( 'zerif_bottomribbon_buttonlabel', array('sanitize_callback' => 'zerif_sanitize_text'));

				

			$wp_customize->add_control( 'zerif_bottomribbon_buttonlabel', array(

					'label'    => __( 'BottomButton Ribbon - Button label', 'zerif' ),

					'section'  => 'zerif_ribbon_section',

					'settings' => 'zerif_bottomribbon_buttonlabel',

					'priority'    => 2,

			));

			

			/* button link */

			$wp_customize->add_setting( 'zerif_bottomribbon_buttonlink', array('sanitize_callback' => 'esc_url_raw'));

				

			$wp_customize->add_control( 'zerif_bottomribbon_buttonlink', array(

					'label'    => __( 'BottomButton Ribbon - Button link', 'zerif' ),

					'section'  => 'zerif_ribbon_section',

					'settings' => 'zerif_bottomribbon_buttonlink',

					'priority'    => 3,

			));
			
			$wp_customize->add_setting(
						'zerif_ribbon_background',
						array(
							'default'     => 'rgba(52, 210, 147, 0.8)'
						)
			);
									 
			$wp_customize->add_control(
							new Zerif_Customize_Alpha_Color_Control(
								$wp_customize,
								'zerif_ribbon_background',
								array(
									'label'    => __( 'BottomButton Ribbon - background color', 'zerif' ),
									'palette' => true,
									'section'  => 'zerif_ribbon_section',
									'priority'   => 4
								)
							)
			);
			
		
			$wp_customize->add_setting(
				'zerif_ribbon_text_color',
				array(
					'default'     => '#fff'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ribbon_text_color',
					array(
						'label'      => __( 'BottomButton Ribbon - text color', 'zerif' ),
						'section'    => 'zerif_ribbon_section',
						'settings'   => 'zerif_ribbon_text_color',
						'priority'   => 5
					)
				)
			);
			
			$wp_customize->add_setting(
				'zerif_ribbon_button_background',
				array(
					'default'     => '#20AA73'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ribbon_button_background',
					array(
						'label'      => __( 'BottomButton Ribbon - button background color', 'zerif' ),
						'section'    => 'zerif_ribbon_section',
						'settings'   => 'zerif_ribbon_button_background',
						'priority'   => 6
					)
				)
			);

			$wp_customize->add_setting(
				'zerif_ribbon_button_background_hover',
				array(
					'default'     => '#14a168'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ribbon_button_background_hover',
					array(
						'label'      => __( 'BottomButton Ribbon - button background color hover', 'zerif' ),
						'section'    => 'zerif_ribbon_section',
						'settings'   => 'zerif_ribbon_button_background_hover',
						'priority'   => 7
					)
				)
			);

			

			/* RIBBON SECTION WITH BUTTON IN THE RIGHT SIDE */



			/* text */	

			$wp_customize->add_setting( 'zerif_ribbonright_text', array('sanitize_callback' => 'zerif_sanitize_text'));

				

			$wp_customize->add_control( 'zerif_ribbonright_text', array(

					'label'    => __( 'RightButton Ribbon - Text', 'zerif' ),

					'section'  => 'zerif_ribbon_section',

					'settings' => 'zerif_ribbonright_text',

					'priority'    => 8,

			));

			

			/* button label */

			$wp_customize->add_setting( 'zerif_ribbonright_buttonlabel', array('sanitize_callback' => 'zerif_sanitize_text'));

				

			$wp_customize->add_control( 'zerif_ribbonright_buttonlabel', array(

					'label'    => __( 'RightButton Ribbon - Button label', 'zerif' ),

					'section'  => 'zerif_ribbon_section',

					'settings' => 'zerif_ribbonright_buttonlabel',

					'priority'    => 9,

			));

			

			/* button link */

			$wp_customize->add_setting( 'zerif_ribbonright_buttonlink', array('sanitize_callback' => 'esc_url_raw'));

				

			$wp_customize->add_control( 'zerif_ribbonright_buttonlink', array(

					'label'    => __( 'RightButton Ribbon - Button link', 'zerif' ),

					'section'  => 'zerif_ribbon_section',

					'settings' => 'zerif_ribbonright_buttonlink',

					'priority'    => 10,

			));

			$wp_customize->add_setting(
						'zerif_ribbonright_background',
						array(
							'default'     => '#e96656'
						)
			);
									 
			$wp_customize->add_control(
							new Zerif_Customize_Alpha_Color_Control(
								$wp_customize,
								'zerif_ribbonright_background',
								array(
									'label'    => __( 'RightButton Ribbon - section background', 'zerif' ),
									'palette' => true,
									'section'  => 'zerif_ribbon_section',
									'priority'   => 11
								)
							)
			);
			
			
			$wp_customize->add_setting(
				'zerif_ribbonright_text_color',
				array(
					'default'     => '#fff'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ribbonright_text_color',
					array(
						'label'      => __( 'RightButton Ribbon - color text', 'zerif' ),
						'section'    => 'zerif_ribbon_section',
						'settings'   => 'zerif_ribbonright_text_color',
						'priority'   => 12
					)
				)
			);

			$wp_customize->add_setting(
				'zerif_ribbonright_button_background',
				array(
					'default'     => '#db5a4a'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ribbonright_button_background',
					array(
						'label'      => __( 'RightButton Ribbon - button background color', 'zerif' ),
						'section'    => 'zerif_ribbon_section',
						'settings'   => 'zerif_ribbonright_button_background',
						'priority'   => 13
					)
				)
			);

			$wp_customize->add_setting(
				'zerif_ribbonright_button_background_hover',
				array(
					'default'     => '#bf3928'
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'zerif_ribbonright_button_background_hover',
					array(
						'label'      => __( 'RightButton Ribbon - button background color hover', 'zerif' ),
						'section'    => 'zerif_ribbon_section',
						'settings'   => 'zerif_ribbonright_button_background_hover',
						'priority'   => 14
					)
				)
			);
			
	endif;

	

	/*******************************************************/

    /************	CONTACT US SECTION *********************/

	/*******************************************************/

	
	if( $wp_version_nr >= 4.0 ):
		
		$wp_customize->add_panel( 'panel_10', array(
			'priority' => 39,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Contact us section', 'zerif' )
		) );
		
		$wp_customize->add_section( 'zerif_contactus_texts_section' , array(

				'title'       => __( 'Texts', 'zerif' ),

				'priority'    => 1,

				'panel' => 'panel_10'
		));
		
		/* contact us show/hide */   

		$wp_customize->add_setting( 'zerif_contactus_show');

		$wp_customize->add_control(

			'zerif_contactus_show',

			array(

				'type' => 'checkbox',

				'label' => 'Hide contact us section?',

				'section' => 'zerif_contactus_texts_section',

				'priority'    => 1,

			)

		);

		/* contactus title */

		$wp_customize->add_setting( 'zerif_contactus_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Get in touch'));

			

		$wp_customize->add_control( 'zerif_contactus_title', array(

				'label'    => __( 'Contact us section title', 'zerif' ),

				'section'  => 'zerif_contactus_texts_section',

				'settings' => 'zerif_contactus_title',

				'priority'    => 2,

		));

		/* contactus subtitle */

		$wp_customize->add_setting( 'zerif_contactus_subtitle', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_contactus_subtitle', array(

				'label'    => __( 'Contact us section subtitle', 'zerif' ),

				'section'  => 'zerif_contactus_texts_section',

				'settings' => 'zerif_contactus_subtitle',

				'priority'    => 3,

		));
		
		/* contactus email */

		$wp_customize->add_setting( 'zerif_contactus_email', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_contactus_email', array(

				'label'    => __( 'Email address', 'zerif' ),

				'section'  => 'zerif_contactus_texts_section',

				'settings' => 'zerif_contactus_email',

				'priority'    => 4,

		));
		
		/* contactus button label */

		$wp_customize->add_setting( 'zerif_contactus_button_label', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Send Message'));

			

		$wp_customize->add_control( 'zerif_contactus_button_label', array(

				'label'    => __( 'Button label', 'zerif' ),

				'section'  => 'zerif_contactus_texts_section',

				'settings' => 'zerif_contactus_button_label',

				'priority'    => 5,

		));
		
		$wp_customize->add_section( 'zerif_contactus_colors_section' , array(

				'title'       => __( 'Colors', 'zerif' ),

				'priority'    => 2,

				'panel' => 'panel_10'
		));

		
		$wp_customize->add_setting(
						'zerif_contacus_background',
						array(
							'default'     => 'rgba(0, 0, 0, 0.5)'
						)
		);
									 
		$wp_customize->add_control(
							new Zerif_Customize_Alpha_Color_Control(
								$wp_customize,
								'zerif_contacus_background',
								array(
									'label'    => __( 'Section background color', 'zerif' ),
									'palette' => true,
									'section'  => 'zerif_contactus_colors_section',
									'priority'   => 1
								)
							)
		);
		
		
		$wp_customize->add_setting(
			'zerif_contacus_header',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_contacus_header',
				array(
					'label'      => __( 'Section header text color', 'zerif' ),
					'section'    => 'zerif_contactus_colors_section',
					'settings'   => 'zerif_contacus_header',
					'priority'   => 2
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_contacus_button_background',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_contacus_button_background',
				array(
					'label'      => __( 'Section button background color', 'zerif' ),
					'section'    => 'zerif_contactus_colors_section',
					'settings'   => 'zerif_contacus_button_background',
					'priority'   => 3
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_contacus_button_background_hover',
			array(
				'default'     => '#cb4332'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_contacus_button_background_hover',
				array(
					'label'      => __( 'Section button background color - hover', 'zerif' ),
					'section'    => 'zerif_contactus_colors_section',
					'settings'   => 'zerif_contacus_button_background_hover',
					'priority'   => 4
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_contacus_button_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_contacus_button_color',
				array(
					'label'      => __( 'Section button color', 'zerif' ),
					'section'    => 'zerif_contactus_colors_section',
					'settings'   => 'zerif_contacus_button_color',
					'priority'   => 5
				)
			)
		);
	else:
		
			
		$wp_customize->add_section( 'zerif_contactus_section' , array(

				'title'       => __( 'Contact us section', 'zerif' ),

				'priority'    => 39

		));
		
		/* contact us show/hide */   

		$wp_customize->add_setting( 'zerif_contactus_show');

		$wp_customize->add_control(

			'zerif_contactus_show',

			array(

				'type' => 'checkbox',

				'label' => 'Hide contact us section?',

				'section' => 'zerif_contactus_section',

				'priority'    => 1,

			)

		);

		/* contactus title */

		$wp_customize->add_setting( 'zerif_contactus_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Get in touch'));

			

		$wp_customize->add_control( 'zerif_contactus_title', array(

				'label'    => __( 'Contact us section title', 'zerif' ),

				'section'  => 'zerif_contactus_section',

				'settings' => 'zerif_contactus_title',

				'priority'    => 2,

		));

		/* contactus subtitle */

		$wp_customize->add_setting( 'zerif_contactus_subtitle', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_contactus_subtitle', array(

				'label'    => __( 'Contact us section subtitle', 'zerif' ),

				'section'  => 'zerif_contactus_section',

				'settings' => 'zerif_contactus_subtitle',

				'priority'    => 3,

		));
		
		/* contactus email */

		$wp_customize->add_setting( 'zerif_contactus_email', array('sanitize_callback' => 'zerif_sanitize_text'));

			

		$wp_customize->add_control( 'zerif_contactus_email', array(

				'label'    => __( 'Email address', 'zerif' ),

				'section'  => 'zerif_contactus_section',

				'settings' => 'zerif_contactus_email',

				'priority'    => 4,

		));
		
		/* contactus button label */

		$wp_customize->add_setting( 'zerif_contactus_button_label', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Send Message'));

			

		$wp_customize->add_control( 'zerif_contactus_button_label', array(

				'label'    => __( 'Button label', 'zerif' ),

				'section'  => 'zerif_contactus_section',

				'settings' => 'zerif_contactus_button_label',

				'priority'    => 5,

		));

		$wp_customize->add_setting(
						'zerif_contacus_background',
						array(
							'default'     => 'rgba(0, 0, 0, 0.5)'
						)
		);
									 
		$wp_customize->add_control(
							new Zerif_Customize_Alpha_Color_Control(
								$wp_customize,
								'zerif_contacus_background',
								array(
									'label'    => __( 'Section background color', 'zerif' ),
									'palette' => true,
									'section'  => 'zerif_contactus_section',
									'priority'   => 6
								)
							)
		);
		
		$wp_customize->add_setting(
			'zerif_contacus_header',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_contacus_header',
				array(
					'label'      => __( 'Section header text color', 'zerif' ),
					'section'    => 'zerif_contactus_section',
					'settings'   => 'zerif_contacus_header',
					'priority'   => 7
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_contacus_button_background',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_contacus_button_background',
				array(
					'label'      => __( 'Section button background color', 'zerif' ),
					'section'    => 'zerif_contactus_section',
					'settings'   => 'zerif_contacus_button_background',
					'priority'   => 8
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_contacus_button_background_hover',
			array(
				'default'     => '#cb4332'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_contacus_button_background_hover',
				array(
					'label'      => __( 'Section button background color - hover', 'zerif' ),
					'section'    => 'zerif_contactus_section',
					'settings'   => 'zerif_contacus_button_background_hover',
					'priority'   => 9
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_contacus_button_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_contacus_button_color',
				array(
					'label'      => __( 'Section button color', 'zerif' ),
					'section'    => 'zerif_contactus_section',
					'settings'   => 'zerif_contacus_button_color',
					'priority'   => 10
				)
			)
		);
	endif;
	
	
	
	/*******************************************************/

    /************	PACKAGES SECTION *********************/

	/*******************************************************/

	
	if( $wp_version_nr >= 4.0 ):
		
		$wp_customize->add_panel( 'panel_11', array(
			'priority' => 40,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Packages section', 'zerif' )
		) );
		
		$wp_customize->add_section( 'zerif_packages_texts_section' , array(

				'title'       => __( 'Texts', 'zerif' ),

				'priority'    => 1,

				'panel' => 'panel_11'
		));
		
		/* packages show/hide */   

		$wp_customize->add_setting( 'zerif_packages_show');

		$wp_customize->add_control(

			'zerif_packages_show',

			array(

				'type' => 'checkbox',

				'label' => 'Show packages section?',

				'section' => 'zerif_packages_texts_section',

				'priority'    => 1,

			)

		);

		/* packages title */

		$wp_customize->add_setting( 'zerif_packages_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'PACKAGES'));

			

		$wp_customize->add_control( 'zerif_packages_title', array(

				'label'    => __( 'Packages section title', 'zerif' ),

				'section'  => 'zerif_packages_texts_section',

				'settings' => 'zerif_packages_title',

				'priority'    => 2,

		));

		/* packages subtitle */

		$wp_customize->add_setting( 'zerif_packages_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'We have 4 friendly packages for you. Check all the packages and choose the right one for you.'));

			

		$wp_customize->add_control( 'zerif_packages_subtitle', array(

				'label'    => __( 'Packages section subtitle', 'zerif' ),

				'section'  => 'zerif_packages_texts_section',

				'settings' => 'zerif_packages_subtitle',

				'priority'    => 3,

		));
		
		$wp_customize->add_section( 'zerif_packages_colors_section' , array(

				'title'       => __( 'Colors', 'zerif' ),

				'priority'    => 2,

				'panel' => 'panel_11'
		));

		
		$wp_customize->add_setting(
			'zerif_packages_header',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_packages_header',
				array(
					'label'      => __( 'Section header text color', 'zerif' ),
					'section'    => 'zerif_packages_colors_section',
					'settings'   => 'zerif_packages_header',
					'priority'   => 1
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_package_title_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_package_title_color',
				array(
					'label'      => __( 'Package title color', 'zerif' ),
					'section'    => 'zerif_packages_colors_section',
					'settings'   => 'zerif_package_title_color',
					'priority'   => 2
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_package_text_color',
			array(
				'default'     => '#808080'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_package_text_color',
				array(
					'label'      => __( 'Package text color', 'zerif' ),
					'section'    => 'zerif_packages_colors_section',
					'settings'   => 'zerif_package_text_color',
					'priority'   => 3
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_package_button_text_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_package_button_text_color',
				array(
					'label'      => __( 'Package button text color', 'zerif' ),
					'section'    => 'zerif_packages_colors_section',
					'settings'   => 'zerif_package_button_text_color',
					'priority'   => 4
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_package_price_background_color',
			array(
				'default'     => '#404040'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_package_price_background_color',
				array(
					'label'      => __( 'Package price background color', 'zerif' ),
					'section'    => 'zerif_packages_colors_section',
					'settings'   => 'zerif_package_price_background_color',
					'priority'   => 5
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_package_price_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_package_price_color',
				array(
					'label'      => __( 'Package price color', 'zerif' ),
					'section'    => 'zerif_packages_colors_section',
					'settings'   => 'zerif_package_price_color',
					'priority'   => 6
				)
			)
		);
		
	else:
		
			
		$wp_customize->add_section( 'zerif_packages_section' , array(

				'title'       => __( 'Packages section', 'zerif' ),

				'priority'    => 40

		));
		
		/* packages show/hide */   

		$wp_customize->add_setting( 'zerif_packages_show' );

		$wp_customize->add_control(

			'zerif_packages_show',

			array(

				'type' => 'checkbox',

				'label' => 'Show packages section?',

				'section' => 'zerif_packages_section',

				'priority'    => 1,

			)

		);

		/* packages title */

		$wp_customize->add_setting( 'zerif_packages_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'PACKAGES'));

			

		$wp_customize->add_control( 'zerif_packages_title', array(

				'label'    => __( 'Packages section title', 'zerif' ),

				'section'  => 'zerif_packages_section',

				'settings' => 'zerif_packages_title',

				'priority'    => 2,

		));

		/* packages subtitle */

		$wp_customize->add_setting( 'zerif_packages_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'We have 4 friendly packages for you. Check all the packages and choose the right one for you.'));

			

		$wp_customize->add_control( 'zerif_packages_subtitle', array(

				'label'    => __( 'Packages section subtitle', 'zerif' ),

				'section'  => 'zerif_packages_section',

				'settings' => 'zerif_packages_subtitle',

				'priority'    => 3,

		));
		
		$wp_customize->add_setting(
			'zerif_packages_header',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_packages_header',
				array(
					'label'      => __( 'Section header text color', 'zerif' ),
					'section'    => 'zerif_packages_section',
					'settings'   => 'zerif_packages_header',
					'priority'   => 4
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_package_title_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_package_title_color',
				array(
					'label'      => __( 'Package title color', 'zerif' ),
					'section'    => 'zerif_packages_section',
					'settings'   => 'zerif_package_title_color',
					'priority'   => 5
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_package_text_color',
			array(
				'default'     => '#808080'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_package_text_color',
				array(
					'label'      => __( 'Package text color', 'zerif' ),
					'section'    => 'zerif_packages_section',
					'settings'   => 'zerif_package_text_color',
					'priority'   => 6
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_package_button_text_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_package_button_text_color',
				array(
					'label'      => __( 'Package button text color', 'zerif' ),
					'section'    => 'zerif_packages_section',
					'settings'   => 'zerif_package_button_text_color',
					'priority'   => 7
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_package_price_background_color',
			array(
				'default'     => '#404040'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_package_price_background_color',
				array(
					'label'      => __( 'Package price background color', 'zerif' ),
					'section'    => 'zerif_packages_section',
					'settings'   => 'zerif_package_price_background_color',
					'priority'   => 8
				)
			)
		);
		$wp_customize->add_setting(
			'zerif_package_price_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_package_price_color',
				array(
					'label'      => __( 'Package price color', 'zerif' ),
					'section'    => 'zerif_packages_section',
					'settings'   => 'zerif_package_price_color',
					'priority'   => 9
				)
			)
		);
		
	endif;

	/*******************************************************/

    /************	GOOGLE MAP SECTION *********************/

	/*******************************************************/

	
	if( $wp_version_nr >= 4.0 ):
		
		$wp_customize->add_panel( 'panel_12', array(
			'priority' => 41,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Google map section', 'zerif' )
		) );
		
		$wp_customize->add_section( 'zerif_googlemap_section' , array(

				'title'       => __( 'Google map', 'zerif' ),

				'priority'    => 1,

				'panel' => 'panel_12'
		));
		
		/* google map show/hide */   

		$wp_customize->add_setting( 'zerif_googlemap_show');

		$wp_customize->add_control(

			'zerif_googlemap_show',

			array(

				'type' => 'checkbox',

				'label' => 'Show google map section?',

				'section' => 'zerif_googlemap_section',

				'priority'    => 1,

			)

		);

		/* google map address */

		$wp_customize->add_setting( 'zerif_googlemap_address', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'New York, Leroy Street'));

			

		$wp_customize->add_control( 'zerif_googlemap_address', array(

				'label'    => __( 'Google map address', 'zerif' ),

				'section'  => 'zerif_googlemap_section',

				'settings' => 'zerif_googlemap_address',

				'priority'    => 2,

		));
		
	else:
		
			
		$wp_customize->add_section( 'zerif_googlemap_section' , array(

				'title'       => __( 'Google map section', 'zerif' ),

				'priority'    => 41

		));
		
		/* google map show/hide */   

		$wp_customize->add_setting( 'zerif_googlemap_show' );

		$wp_customize->add_control(

			'zerif_googlemap_show',

			array(

				'type' => 'checkbox',

				'label' => 'Show google map section?',

				'section' => 'zerif_googlemap_section',

				'priority'    => 1,

			)

		);

		/* google map address */

		$wp_customize->add_setting( 'zerif_googlemap_address', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'New York, Leroy Street'));

			

		$wp_customize->add_control( 'zerif_googlemap_address', array(

				'label'    => __( 'Google map address', 'zerif' ),

				'section'  => 'zerif_googlemap_section',

				'settings' => 'zerif_googlemap_address',

				'priority'    => 2,

		));

		
	endif;
	
	/*******************************************************/

    /************	SBSCRIBE SECTION *********************/

	/*******************************************************/

	
	if( $wp_version_nr >= 4.0 ):
		
		$wp_customize->add_panel( 'panel_13', array(
			'priority' => 42,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Subscribe section', 'zerif' )
		) );
		
		$wp_customize->add_section( 'zerif_subscribe_section' , array(

				'title'       => __( 'Texts', 'zerif' ),

				'priority'    => 1,

				'panel' => 'panel_13',
				
				'description' => __('For this section to work properly, you must add the "SendinBlue Widget" to the "Subscribe section" widgets area','zerif')
		));
		
		/* subscribe show/hide */   

		$wp_customize->add_setting( 'zerif_subscribe_show');

		$wp_customize->add_control(

			'zerif_subscribe_show',

			array(

				'type' => 'checkbox',

				'label' => 'Show subscribe section?',

				'section' => 'zerif_subscribe_section',

				'priority'    => 1,

			)

		);

		/* subscribe title */

		$wp_customize->add_setting( 'zerif_subscribe_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'STAY IN TOUCH'));

			

		$wp_customize->add_control( 'zerif_subscribe_title', array(

				'label'    => __( 'Subscribe title', 'zerif' ),

				'section'  => 'zerif_subscribe_section',

				'settings' => 'zerif_subscribe_title',

				'priority'    => 2,

		));
		
		/* subscribe subtitle */

		$wp_customize->add_setting( 'zerif_subscribe_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Sign Up for Email Updates on on News & Offers'));

			

		$wp_customize->add_control( 'zerif_subscribe_subtitle', array(

				'label'    => __( 'Subscribe subtitle', 'zerif' ),

				'section'  => 'zerif_subscribe_section',

				'settings' => 'zerif_subscribe_subtitle',

				'priority'    => 3,

		));
		
		/* subscribe colors */
		
		$wp_customize->add_section( 'zerif_subscribe_color_section' , array(

				'title'       => __( 'Colors', 'zerif' ),

				'priority'    => 2,

				'panel' => 'panel_13'
		));
		
		$wp_customize->add_setting(
			'zerif_subscribe_header_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_subscribe_header_color',
				array(
					'label'      => __( 'Section header text color', 'zerif' ),
					'section'    => 'zerif_subscribe_color_section',
					'settings'   => 'zerif_subscribe_header_color',
					'priority'   => 1
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_subscribe_button_background_color',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_subscribe_button_background_color',
				array(
					'label'      => __( 'Button background color', 'zerif' ),
					'section'    => 'zerif_subscribe_color_section',
					'settings'   => 'zerif_subscribe_button_background_color',
					'priority'   => 2
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_subscribe_button_background_color_hover',
			array(
				'default'     => '#cb4332'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_subscribe_button_background_color_hover',
				array(
					'label'      => __( 'Button background color - hover', 'zerif' ),
					'section'    => 'zerif_subscribe_color_section',
					'settings'   => 'zerif_subscribe_button_background_color_hover',
					'priority'   => 3
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_subscribe_button_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_subscribe_button_color',
				array(
					'label'      => __( 'Button text color', 'zerif' ),
					'section'    => 'zerif_subscribe_color_section',
					'settings'   => 'zerif_subscribe_button_color',
					'priority'   => 4
				)
			)
		);
		
	else:
		
			
		$wp_customize->add_section( 'zerif_subscribe_section' , array(

				'title'       => __( 'Subscribe section', 'zerif' ),

				'priority'    => 42,
				
				'description' => __('For this section to work properly, you must add the "SendinBlue Widget" to the "Subscribe section" widgets area','zerif')

		));
		
		/* subscribe show/hide */   

		$wp_customize->add_setting( 'zerif_subscribe_show' );

		$wp_customize->add_control(

			'zerif_subscribe_show',

			array(

				'type' => 'checkbox',

				'label' => 'Show subscribe section?',

				'section' => 'zerif_subscribe_section',

				'priority'    => 1,

			)

		);

		/* subscribe title */

		$wp_customize->add_setting( 'zerif_subscribe_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'STAY IN TOUCH'));

			

		$wp_customize->add_control( 'zerif_subscribe_title', array(

				'label'    => __( 'Subscribe title', 'zerif' ),

				'section'  => 'zerif_subscribe_section',

				'settings' => 'zerif_subscribe_title',

				'priority'    => 2,

		));
		
		/* subscribe subtitle */

		$wp_customize->add_setting( 'zerif_subscribe_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => 'Sign Up for Email Updates on on News & Offers'));

			

		$wp_customize->add_control( 'zerif_subscribe_subtitle', array(

				'label'    => __( 'Subscribe subtitle', 'zerif' ),

				'section'  => 'zerif_subscribe_section',

				'settings' => 'zerif_subscribe_subtitle',

				'priority'    => 3,

		));
		
		/* subscribe colors */
		
		$wp_customize->add_setting(
			'zerif_subscribe_header_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_subscribe_header_color',
				array(
					'label'      => __( 'Section header text color', 'zerif' ),
					'section'    => 'zerif_subscribe_section',
					'settings'   => 'zerif_subscribe_header_color',
					'priority'   => 4
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_subscribe_button_background_color',
			array(
				'default'     => '#e96656'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_subscribe_button_background_color',
				array(
					'label'      => __( 'Button background color', 'zerif' ),
					'section'    => 'zerif_subscribe_section',
					'settings'   => 'zerif_subscribe_button_background_color',
					'priority'   => 5
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_subscribe_button_background_color_hover',
			array(
				'default'     => '#cb4332'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_subscribe_button_background_color_hover',
				array(
					'label'      => __( 'Button background color - hover', 'zerif' ),
					'section'    => 'zerif_subscribe_section',
					'settings'   => 'zerif_subscribe_button_background_color_hover',
					'priority'   => 6
				)
			)
		);
		
		$wp_customize->add_setting(
			'zerif_subscribe_button_color',
			array(
				'default'     => '#fff'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'zerif_subscribe_button_color',
				array(
					'label'      => __( 'Button text color', 'zerif' ),
					'section'    => 'zerif_subscribe_section',
					'settings'   => 'zerif_subscribe_button_color',
					'priority'   => 7
				)
			)
		);

		
	endif;
}

add_action( 'customize_register', 'wp_themeisle_customize_register' );



/**

 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.

 */

function wp_themeisle_customize_preview_js() {

	wp_enqueue_script( 'wp_themeisle_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );

}

add_action( 'customize_preview_init', 'wp_themeisle_customize_preview_js' );



function zerif_sanitize_text( $input ) {

    return wp_kses_post( force_balance_tags( $input ) );

}



function zerif_sanitize_number( $input ) {

    return force_balance_tags( $input );

}



function zerif_registers() {

    wp_register_script( 'zerif_jquery_ui', '//code.jquery.com/ui/1.10.4/jquery-ui.js', array("jquery"), '20120206', true  );

	wp_enqueue_script( 'zerif_jquery_ui' );

	

	wp_register_style( 'zerif_jquery_ui_css', '//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css');

	wp_enqueue_style( 'zerif_jquery_ui_css' );

	

	wp_register_script( 'zerif_customizer_script', get_template_directory_uri() . '/js/zerif_customizer.js', array("jquery","zerif_jquery_ui"), '20120206', true  );

	wp_enqueue_script( 'zerif_customizer_script' );

}

add_action( 'customize_controls_enqueue_scripts', 'zerif_registers' );