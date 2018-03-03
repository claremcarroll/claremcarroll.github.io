<?php
/**
 * WPBakery Visual Composer shortcodes
 *
 * @package WPBakeryVisualComposer
 *
 */

/* Progress Bar
---------------------------------------------------------- */

class WPBakeryShortCode_AZ_Progress_Bar extends WPBakeryShortCode {
  protected function content($atts, $content = null) {
    $animation_loading = $animation_loading_effects = $animation_delay = $field = $percentage = $bgcolor = $checkicon = $icon = $custombarcolor = $el_class = '';
      extract( shortcode_atts( array(
	  	'animation_loading' => '',
		'animation_loading_effects' => '',
		'animation_delay' => '',
        'field' => '',
        'percentage' => '',
        'bgcolor' => '',
		'checkicon' => '',
		'icon' => '',
        'custombarcolor' => '',
        'el_class' => ''
      ), $atts ) );
      $output = '';
      $el_class = $this->getExtraClass($el_class);
      
	  if ($bgcolor=="custom") { $bgcolor = ' background-color: '.$custombarcolor.';'; }
	  if ($checkicon=="custom_icon") { $icon = '<i class="'.$icon.'"></i>'; } else { $icon = ""; }
	  
	  $animation_loading_class = null;
	  if ($animation_loading == "yes") {
		$animation_loading_class = 'animated-content';
	  }
	  
	  $animation_effect_class = null;
	  if ($animation_loading == "yes") {
		$animation_effect_class = $animation_loading_effects;
	  }

	  $animation_delay_class = null;
	  if ($animation_loading == "yes" && !empty($animation_delay)) {
		$animation_delay_class = ' data-delay="'.$animation_delay.'"';
	  }
	  

  	$class = setClass(array('progress-bar', $el_class, $animation_loading_class, $animation_effect_class));

	$output .= '<div'.$class.''.$animation_delay_class.'>';
	$output .= '<div class="progress">';
	$output .= '<span class="field">'.$icon.$field.'</span>';
	$output .= '<div class="bar" style="width: '.$percentage.'%; '.$bgcolor.'"></div>';
	$output .= '</div></div>';
  
  	return $output . $this->endBlockComment('az_progress_bar') . "\n";
  }
}

?>