<?php
/**
 * WPBakery Visual Composer Shortcodes settings
 *
 * @package VPBakeryVisualComposer
 *
 */

$vc_is_wp_version_3_6_more = version_compare(preg_replace('/^([\d\.]+)(\-.*$)/', '$1', get_bloginfo('version')), '3.6') >= 0;

$target_arr = array(__("Same window", "js_composer") => "_self", __("New window", "js_composer") => "_blank");

// Default Font Icons Array - Entypo + Custom Social Icons  + 270 Icons
$fonticon_arr = array(
	'font-icon-phone' 		=> 'font-icon-phone',
	'font-icon-mobile' 		=> 'font-icon-mobile',
	'font-icon-mouse'		=> 'font-icon-mouse',
	'font-icon-directions'	=> 'font-icon-directions', 
	'font-icon-mail'		=> 'font-icon-mail', 
	'font-icon-paperplane'	=> 'font-icon-paperplane',
	'font-icon-pencil'		=> 'font-icon-pencil', 
	'font-icon-feather'		=> 'font-icon-feather', 
	'font-icon-paperclip'	=> 'font-icon-paperclip', 
	'font-icon-drawer'		=> 'font-icon-drawer', 
	'font-icon-reply'		=> 'font-icon-reply', 
	'font-icon-reply-all'	=> 'font-icon-reply-all',
	'font-icon-forward'		=> 'font-icon-forward', 
	'font-icon-user'		=> 'font-icon-user', 
	'font-icon-users'		=> 'font-icon-users', 
	'font-icon-user-add'	=> 'font-icon-user-add', 
	'font-icon-vcard'		=> 'font-icon-vcard', 
	'font-icon-export'		=> 'font-icon-export', 
	'font-icon-location'	=> 'font-icon-location', 
	'font-icon-map'			=> 'font-icon-map', 
	'font-icon-compass'		=> 'font-icon-compass', 
	'font-icon-location-2'	=> 'font-icon-location-2', 
	'font-icon-target'		=> 'font-icon-target', 
	'font-icon-share' 		=> 'font-icon-share', 
	'font-icon-sharable'	=> 'font-icon-sharable',
	'font-icon-heart'		=> 'font-icon-heart', 
	'font-icon-heart-2' 	=> 'font-icon-heart-2', 
	'font-icon-star'		=> 'font-icon-star', 
	'font-icon-star-2'		=> 'font-icon-star-2', 
	'font-icon-thumbs-up'	=> 'font-icon-thumbs-up', 
	'font-icon-thumbs-down'	=> 'font-icon-thumbs-down', 
	'font-icon-chat'		=> 'font-icon-chat', 
	'font-icon-comment'		=> 'font-icon-comment', 
	'font-icon-quote'		=> 'font-icon-quote', 
	'font-icon-house' 		=> 'font-icon-house',
	'font-icon-popup'		=> 'font-icon-popup',
	'font-icon-search' 		=> 'font-icon-search',
	'font-icon-signal' 		=> 'font-icon-signal',
	'font-icon-flashlight'	=> 'font-icon-flashlight', 
	'font-icon-printer' 	=> 'font-icon-printer',
	'font-icon-bell' 		=> 'font-icon-bell',
	'font-icon-link' 		=> 'font-icon-link',
	'font-icon-flag'		=> 'font-icon-flag',
	'font-icon-cog'			=> 'font-icon-cog' ,
	'font-icon-tools' 		=> 'font-icon-tools',
	'font-icon-trophy' 		=> 'font-icon-trophy',
	'font-icon-tag' 		=> 'font-icon-tag',
	'font-icon-camera' 		=> 'font-icon-camera',
	'font-icon-megaphone' 	=> 'font-icon-megaphone',
	'font-icon-moon' 		=> 'font-icon-moon',
	'font-icon-palette'		=> 'font-icon-palette',
	'font-icon-leaf' 		=> 'font-icon-leaf',
	'font-icon-music' 		=> 'font-icon-music',
	'font-icon-music-2'		=> 'font-icon-music-2', 
	'font-icon-new' 		=> 'font-icon-new',
	'font-icon-graduation'	=> 'font-icon-graduation',
	'font-icon-book' 		=> 'font-icon-book',
	'font-icon-newspaper'	=> 'font-icon-newspaper', 
	'font-icon-bag' 		=> 'font-icon-bag',
	'font-icon-airplane'	=> 'font-icon-airplane', 
	'font-icon-lifebuoy'	=> 'font-icon-lifebuoy',
	'font-icon-eye' 		=> 'font-icon-eye',
	'font-icon-clock'		=> 'font-icon-clock', 
	'font-icon-microphone' 	=> 'font-icon-microphone',
	'font-icon-calendar' 	=> 'font-icon-calendar',
	'font-icon-bolt'		=> 'font-icon-bolt',
	'font-icon-thunder'		=> 'font-icon-thunder', 
	'font-icon-droplet' 	=> 'font-icon-droplet',
	'font-icon-cd' 			=> 'font-icon-cd',
	'font-icon-briefcase' 	=> 'font-icon-briefcase',
	'font-icon-air'			=> 'font-icon-air', 
	'font-icon-hourglass' 	=> 'font-icon-hourglass',
	'font-icon-gauge'		=> 'font-icon-gauge', 
	'font-icon-language' 	=> 'font-icon-language',
	'font-icon-network' 	=> 'font-icon-network',
	'font-icon-key' 		=> 'font-icon-key',
	'font-icon-battery'		=> 'font-icon-battery',
	'font-icon-bucket'		=> 'font-icon-bucket',
	'font-icon-magnet' 		=> 'font-icon-magnet', 
	'font-icon-drive' 		=> 'font-icon-drive',
	'font-icon-cup' 		=> 'font-icon-cup',
	'font-icon-rocket' 		=> 'font-icon-rocket',
	'font-icon-brush' 		=> 'font-icon-brush',
	'font-icon-suitcase'	=> 'font-icon-suitcase',
	'font-icon-cone' 		=> 'font-icon-cone',
	'font-icon-earth' 		=> 'font-icon-earth',
	'font-icon-keyboard' 	=> 'font-icon-keyboard',
	'font-icon-browser' 	=> 'font-icon-browser',
	'font-icon-publish' 	=> 'font-icon-publish',
	'font-icon-progress-3'	=> 'font-icon-progress-3',
	'font-icon-progress-2' 	=> 'font-icon-progress-2',
	'font-icon-brogress-1' 	=> 'font-icon-brogress-1',
	'font-icon-progress-0' 	=> 'font-icon-progress-0',
	'font-icon-sun'			=> 'font-icon-sun', 
	'font-icon-sun-2' 		=> 'font-icon-sun-2',
	'font-icon-adjust' 		=> 'font-icon-adjust',
	'font-icon-code'		=> 'font-icon-code', 
	'font-icon-screen' 		=> 'font-icon-screen',
	'font-icon-light-bulb' 	=> 'font-icon-light-bulb',
	'font-icon-credit-card'	=> 'font-icon-credit-card', 
	'font-icon-database' 	=> 'font-icon-database',
	'font-icon-voicemail'	=> 'font-icon-voicemail', 
	'font-icon-clipboard' 	=> 'font-icon-clipboard',
	'font-icon-cart' 		=> 'font-icon-cart',
	'font-icon-box' 		=> 'font-icon-box',
	'font-icon-ticket' 		=> 'font-icon-ticket',
	'font-icon-rss'			=> 'font-icon-rss',
	'font-icon-signal'		=> 'font-icon-signal', 
	'font-icon-thermometer' => 'font-icon-thermometer',
	'font-icon-droplets' 	=> 'font-icon-droplets',
	'font-icon-layout-3' 	=> 'font-icon-layout-3',
	'font-icon-statistics' 	=> 'font-icon-statistics',
	'font-icon-pie' 		=> 'font-icon-pie',
	'font-icon-bars' 		=> 'font-icon-bars',
	'font-icon-graph'		=> 'font-icon-graph', 
	'font-icon-lock' 		=> 'font-icon-lock',
	'font-icon-lock-open' 	=> 'font-icon-lock-open',
	'font-icon-logout' 		=> 'font-icon-logout',
	'font-icon-login'		=> 'font-icon-login',
	'font-icon-checkmark' 	=> 'font-icon-checkmark',
	'font-icon-cross'		=> 'font-icon-cross', 
	'font-icon-minus' 		=> 'font-icon-minus',
	'font-icon-plus' 		=> 'font-icon-plus',
	'font-icon-cross-2' 	=> 'font-icon-cross-2',
	'font-icon-minus-2'		=> 'font-icon-minus-2',
	'font-icon-plus-2'		=> 'font-icon-plus-2', 
	'font-icon-cross-3' 	=> 'font-icon-cross-3',
	'font-icon-minus-3' 	=> 'font-icon-minus-3',
	'font-icon-plus-3' 		=> 'font-icon-plus-3',
	'font-icon-erase' 		=> 'font-icon-erase',
	'font-icon-blocked' 	=> 'font-icon-blocked',
	'font-icon-info' 		=> 'font-icon-info',
	'font-icon-info-2' 		=> 'font-icon-info-2',
	'font-icon-question' 	=> 'font-icon-question',
	'font-icon-help' 		=> 'font-icon-help',
	'font-icon-warning'		=> 'font-icon-warning',
	'font-icon-cycle' 		=> 'font-icon-cycle',
	'font-icon-cw' 			=> 'font-icon-cw',
	'font-icon-ccw' 		=> 'font-icon-ccw',
	'font-icon-shuffle' 	=> 'font-icon-shuffle',
	'font-icon-arrow' 		=> 'font-icon-arrow',
	'font-icon-arrow-2'		=> 'font-icon-arrow-2',
	'font-icon-retweet'	 	=> 'font-icon-retweet',
	'font-icon-loop'		=> 'font-icon-loop', 
	'font-icon-history'		=> 'font-icon-history',
	'font-icon-back'		=> 'font-icon-back', 
	'font-icon-switch' 		=> 'font-icon-switch',
	'font-icon-list'		=> 'font-icon-list',
	'font-icon-add-to-list' => 'font-icon-add-to-list',
	'font-icon-layout' 		=> 'font-icon-layout',
	'font-icon-list-2'		=> 'font-icon-list-2',
	'font-icon-text' 		=> 'font-icon-text',
	'font-icon-text-2'	 	=> 'font-icon-text-2', 
	'font-icon-document' 	=> 'font-icon-document',
	'font-icon-docs' 		=> 'font-icon-docs',
	'font-icon-landscape' 	=> 'font-icon-landscape',
	'font-icon-pictures' 	=> 'font-icon-pictures',
	'font-icon-video' 		=> 'font-icon-video',
	'font-icon-music-3' 	=> 'font-icon-music-3',
	'font-icon-folder'	 	=> 'font-icon-folder',
	'font-icon-archive' 	=> 'font-icon-archive',
	'font-icon-trash'	 	=> 'font-icon-trash',
	'font-icon-upload' 		=> 'font-icon-upload', 
	'font-icon-download' 	=> 'font-icon-download',
	'font-icon-disk' 		=> 'font-icon-disk',
	'font-icon-install'		=> 'font-icon-install',
	'font-icon-cloud' 		=> 'font-icon-cloud',
	'font-icon-upload-2' 	=> 'font-icon-upload-2',
	'font-icon-bookmark' 	=> 'font-icon-bookmark',
	'font-icon-bookmarks' 	=> 'font-icon-bookmarks',
	'font-icon-book-2'	 	=> 'font-icon-book-2',
	'font-icon-play'	 	=> 'font-icon-play',
	'font-icon-pause' 		=> 'font-icon-pause',
	'font-icon-record' 		=> 'font-icon-record',
	'font-icon-stop' 		=> 'font-icon-stop',
	'font-icon-next' 		=> 'font-icon-next',
	'font-icon-previous'	=> 'font-icon-previous',
	'font-icon-first'	 	=> 'font-icon-first',
	'font-icon-last' 		=> 'font-icon-last',
	'font-icon-resize-enlarge' 	=> 'font-icon-resize-enlarge',
	'font-icon-resize-shrink'	=> 'font-icon-resize-shrink',
	'font-icon-volume' 		=> 'font-icon-volume',
	'font-icon-sound'		=> 'font-icon-sound',
	'font-icon-mute'	 	=> 'font-icon-mute',
	'font-icon-flow-cascade'=> 'font-icon-flow-cascade',
	'font-icon-flow-branch' => 'font-icon-flow-branch',
	'font-icon-flow-tree'	=> 'font-icon-flow-tree',
	'font-icon-flow-line' 	=> 'font-icon-flow-line',
	'font-icon-flow-parallel'	=> 'font-icon-flow-parallel',	
	'font-icon-arrow-left-big-flat' 	=> 'font-icon-arrow-left-big-flat' , 
	'font-icon-arrow-down-big-flat'		=> 'font-icon-arrow-down-big-flat',
	'font-icon-arrow-up-big-flat' 		=> 'font-icon-arrow-up-big-flat',
	'font-icon-arrow-right-big-flat'	=> 'font-icon-arrow-right-big-flat', 
	'font-icon-arrow-left-small-flat'	=> 'font-icon-arrow-left-small-flat',
	'font-icon-arrow-down-small-flat' 	=> 'font-icon-arrow-down-small-flat',
	'font-icon-arrow-up-small-flat' 	=> 'font-icon-arrow-up-small-flat',
	'font-icon-arrow-right-small-flat' 	=> 'font-icon-arrow-right-small-flat', 
	'font-icon-arrow-left-circle'	=> 'font-icon-arrow-left-circle',
	'font-icon-arrow-down-circle' 	=> 'font-icon-arrow-down-circle', 
	'font-icon-arrow-up-circle' 	=> 'font-icon-arrow-up-circle',
	'font-icon-arrow-right-circle' 	=> 'font-icon-arrow-right-circle', 
	'font-icon-arrow-left-triangle'		=> 'font-icon-arrow-left-triangle',
	'font-icon-arrow-down-triangle' 	=> 'font-icon-arrow-down-triangle', 
	'font-icon-arrow-up-triangle' 		=> 'font-icon-arrow-up-triangle',
	'font-icon-arrow-right-triangle' 	=> 'font-icon-arrow-right-triangle', 
	'font-icon-arrow-left-simple-round'		=> 'font-icon-arrow-left-simple-round',
	'font-icon-arrow-down-simple-round' 	=> 'font-icon-arrow-down-simple-round', 
	'font-icon-arrow-up-simple-round' 		=> 'font-icon-arrow-up-simple-round', 
	'font-icon-arrow-right-simple-round' 	=> 'font-icon-arrow-right-simple-round',
	'font-icon-arrow-left-simple-thin-round' 	=> 'font-icon-arrow-left-simple-thin-round', 
	'font-icon-arrow-down-simple-thin-round'	=> 'font-icon-arrow-down-simple-thin-round',
	'font-icon-arrow-up-simple-thin-round' 		=> 'font-icon-arrow-up-simple-thin-round', 
	'font-icon-arrow-right-simple-thin-round' 	=> 'font-icon-arrow-right-simple-thin-round',
	'font-icon-arrow-left-simple-thin' 	=> 'font-icon-arrow-left-simple-thin',
	'font-icon-arrow-down-simple-thin' 	=> 'font-icon-arrow-down-simple-thin',
	'font-icon-arrow-up-simple-thin' 	=> 'font-icon-arrow-up-simple-thin',
	'font-icon-arrow-right-simple-thin' => 'font-icon-arrow-right-simple-thin',
	'font-icon-arrow-left-big' 	=> 'font-icon-arrow-left-big',
	'font-icon-arrow-down-big' 	=> 'font-icon-arrow-down-big',
	'font-icon-arrow-up-big' 	=> 'font-icon-arrow-up-big',
	'font-icon-arrow-right-big' => 'font-icon-arrow-right-big',
	'font-icon-arrow-menu' 		=> 'font-icon-arrow-menu',
	'font-icon-ellipsis' 		=> 'font-icon-ellipsis',
	'font-icon-dots' 			=> 'font-icon-dots',
	'font-icon-dot' 			=> 'font-icon-dot',
	'font-icon-align-right' 	=> 'font-icon-align-right',
	'font-icon-align-left' 		=> 'font-icon-align-left',
	'font-icon-align-justify' 	=> 'font-icon-align-justify',
	'font-icon-align-center' 	=> 'font-icon-align-center',
	'font-icon-group' 			=> 'font-icon-group',
	'font-icon-grid' 			=> 'font-icon-grid',
	'font-icon-grid-large' 		=> 'font-icon-grid-large',
	'font-icon-social-zerply' 			=> 'font-icon-social-zerply', 
	'font-icon-social-youtube'  		=> 'font-icon-social-youtube',
	'font-icon-social-yelp' 			=> 'font-icon-social-yelp',
	'font-icon-social-yahoo'			=> 'font-icon-social-yahoo',
	'font-icon-social-wordpress' 		=> 'font-icon-social-wordpress',
	'font-icon-social-virb' 			=> 'font-icon-social-virb',
	'font-icon-social-vimeo' 			=> 'font-icon-social-vimeo',
	'font-icon-social-viddler' 			=> 'font-icon-social-viddler',
	'font-icon-social-twitter' 			=> 'font-icon-social-twitter',
	'font-icon-social-tumblr' 			=> 'font-icon-social-tumblr',
	'font-icon-social-stumbleupon'		=> 'font-icon-social-stumbleupon',
	'font-icon-social-soundcloud' 		=> 'font-icon-social-soundcloud',
	'font-icon-social-skype' 			=> 'font-icon-social-skype',
	'font-icon-social-share-this'		=> 'font-icon-social-share-this',
	'font-icon-social-quora' 			=> 'font-icon-social-quora',
	'font-icon-social-pinterest'		=> 'font-icon-social-pinterest',
	'font-icon-social-photobucket'		=> 'font-icon-social-photobucket',
	'font-icon-social-paypal' 			=> 'font-icon-social-paypal',
	'font-icon-social-myspace' 			=> 'font-icon-social-myspace',
	'font-icon-social-linkedin' 		=> 'font-icon-social-linkedin',
	'font-icon-social-last-fm' 			=> 'font-icon-social-last-fm',
	'font-icon-social-instagram'		=> 'font-icon-social-instagram',
	'font-icon-social-grooveshark' 		=> 'font-icon-social-grooveshark',
	'font-icon-social-google-plus' 		=> 'font-icon-social-google-plus',
	'font-icon-social-github' 			=> 'font-icon-social-github',
	'font-icon-social-forrst' 			=> 'font-icon-social-forrst',
	'font-icon-social-flickr' 			=> 'font-icon-social-flickr',
	'font-icon-social-facebook' 		=> 'font-icon-social-facebook',
	'font-icon-social-evernote' 		=> 'font-icon-social-evernote',
	'font-icon-social-envato' 			=> 'font-icon-social-envato',
	'font-icon-social-email' 			=> 'font-icon-social-email', 
	'font-icon-social-dribbble'			=> 'font-icon-social-dribbble',
	'font-icon-social-digg' 			=> 'font-icon-social-digg',
	'font-icon-social-deviant-art' 		=> 'font-icon-social-deviant-art',
	'font-icon-social-blogger' 			=> 'font-icon-social-blogger',
	'font-icon-social-behance'			=> 'font-icon-social-behance',
	'font-icon-social-bebo' 			=> 'font-icon-social-bebo',
	'font-icon-social-addthis'			=> 'font-icon-social-addthis',
	'font-icon-social-500px' 			=> 'font-icon-social-500px'
);

$animated_choice = 
	array(
      	"type" => "dropdown",
      	"heading" => __("Animation?", "js_composer"),
      	"param_name" => "animation_loading",
      	"value" => array ( __("No", "js_composer") => "no", __("Yes", "js_composer") => "yes"),
	  	"admin_label" => false,
      	"description" => __("Enable or Disable animation on item.", "js_composer")
    );
	
$animated_effects =	
	array(
      	"type" => "dropdown",
      	"heading" => __("Animation Effects", "js_composer"),
      	"param_name" => "animation_loading_effects",
      	"value" => array(__("Fade In", "js_composer") => "fade_in", __("Move Left", "js_composer") => "move_left", __("Move Right", "js_composer") => "move_right", __("Move Up", "js_composer") => "move_up", __("Scale Up", "js_composer") => "scale_up", __("Little Bounce", "js_composer") => "little_bounce"),
	  	"admin_label" => false,
      	"description" => __("Select your animation.", "js_composer"),
	  	"dependency" => Array('element' => "animation_loading", 'value' => array('yes'))
    );

$animated_delay =	
	array(
      	"type" => "textfield",
      	"heading" => __("Animation Delay", "js_composer"),
      	"param_name" => "animation_delay",
	  	"admin_label" => false,
      	"description" => __("<strong>Optional</strong> If you want you can insert a delay for animation. For example write 100 = 0.1 seconds", "js_composer"),
	  	"dependency" => Array('element' => "animation_loading", 'value' => array('yes'))
    );

/* Clean Output Classes */
function setClass($classes){
  if($classes){
    $return = '';
    foreach($classes as $class)
    {
        if(trim($class))
        $return .= trim($class).' ';
    }
    if(trim($return) != '')
    return ' class="'.trim($return).'"';
 }
}

/*-----------------------------------------------------------------------------------*/
/*	Section
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Section", "js_composer"),
	"base" => "vc_row",
	"is_container" => true,
	"icon" => "icon-wpb-section",
	"show_settings_on_create" => false,
	"category" => __('Layout', 'js_composer'),
	"params" => array(
	
		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra ID name", "js_composer"),
		  	"param_name" => "section_id",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a ID and then refer to it in your css file.", "js_composer")
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra Section Class name", "js_composer"),
		  	"param_name" => "section_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Section Mode", "js_composer"),
		  	"param_name" => "section_mode",
		  	"value" => array(__("Default", "js_composer") => "normal", __("Full Width", "js_composer") => "fluid"),
		  	"description" => __("Choose Layout Mode. Default 1170px Container. Full Width is a 100% Container.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Background Mode", "js_composer"),
		  	"param_name" => "bgmode",
		  	"value" => array(__("Default", "js_composer") => "default", __("Custom Image", "js_composer") => "customimagebg", __("Custom Color", "js_composer") => "custom", __("Custom Video", "js_composer") => "video"),
		  	"description" => __("Choose Background Mode.", "js_composer"),
		  	"admin_label" => false
		),

		// Custom Image Settings
		array(
		  	"type" => "attach_image",
		  	"heading" => __("Image", "js_composer"),
		  	"param_name" => "image",
		  	"value" => "",
		  	"description" => __("Select image from media library.", "js_composer"),
		  	"dependency" => Array('element' => "bgmode", 'value' => array('customimagebg'))
		),

		array(
		  	"type" => "colorpicker",
		  	"heading" => __("Background Color Image", "js_composer"),
		  	"param_name" => "bgimagebackgrouncolor",
		  	"description" => __("Choose a background color for your transparent image block.", "js_composer"),
		  	"dependency" => Array('element' => "image", 'not_empty' => true,)
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Background Image Position", "js_composer"),
		  	"param_name" => "bgposition",
		  	"value" => 
			  	array(
			  		__("Top Left", "js_composer") => "top left",
					__("Top Center", "js_composer") => "top center",
					__("Top Right", "js_composer") => "top right", 
					__("Bottom Left", "js_composer") => "bottom left",
					__("Bottom Center", "js_composer") => "bottom center",
					__("Bottom Right", "js_composer") => "bottom right",
					__("Center Left", "js_composer") => "center left",
					__("Center Center", "js_composer") => "center center",
					__("Center Right", "js_composer") => "center right"
				),
		  	"dependency" => Array('element' => "image", 'not_empty' => true)
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Background Image Repeat", "js_composer"),
		  	"param_name" => "bgrepeat",
		  	"value" => 
			  	array(
			  		__("No Repeat", "js_composer") => "no-repeat",
					__("Repeat", "js_composer") => "repeat",
					__("Repeat Horizontally", "js_composer") => "repeat-x",
					__("Repeat vertically", "js_composer") => "repeat-y",
					__("Stretch to fit", "js_composer") => "stretch"
				),
		  	"dependency" => Array('element' => "image", 'not_empty' => true)
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Background Attachment", "js_composer"),
		  	"param_name" => "bgattachment",
		  	"value" => 
			  	array(
			  		__("Scroll", "js_composer") => "scroll",
					__("Fixed", "js_composer") => "fixed"
				),
		  	"dependency" => Array('element' => "image", 'not_empty' => true)
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Overlay Mask", "js_composer"),
		  	"param_name" => "section_overlay",
		  	"value" => array(__("No Overlay Mask", "js_composer") => "no_overlay", __("Yes, Overlay Mask", "js_composer") => "yes_overlay"),
		  	"description" => __("Enable or Disable the custom options for overlay section.", "js_composer"),
		  	"dependency" => Array('element' => "bgmode", 'value' => array('customimagebg'))
		),

		array(
		  	"type" => "colorpicker",
		  	"heading" => __("Background Color Overlay Mask", "js_composer"),
		  	"param_name" => "sectionoveralycolor",
		  	"description" => __("Choose a background color overlay for your title block. Only if Overlay Mask is enable.", "js_composer"),
		  	"dependency" => Array('element' => "section_overlay", 'value' => array('yes_overlay'))
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Background Opacity Overlay Mask", "js_composer"),
		  	"param_name" => "sectionoverlayopacity",
		  	"description" => __("Enter a number 0 - 1 for your background color opacity. Default 0.70. Only if Overlay Mask is enable.", "js_composer"),
		  	"value" => "0.70",
		  	"dependency" => Array('element' => "section_overlay", 'value' => array('yes_overlay'))
		),

		// Background Color Without Image Settings
		array(
		  	"type" => "colorpicker",
		  	"heading" => __("Background Color", "js_composer"),
		  	"param_name" => "custombgcolor",
		  	"description" => __("Select a custom background color.", "js_composer"),
		  	"dependency" => Array('element' => "bgmode", 'value' => array('custom'))
		),

		// Video Settings
		array(
		  	"type" => "textfield",
		  	"heading" => __("WEBM File URL", "js_composer"),
		  	"param_name" => "customvideowebm",
		  	"description" => __("Upload a WEBM File.", "js_composer"),
		  	"dependency" => Array('element' => "bgmode", 'value' => array('video'))
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("M4V File URL", "js_composer"),
		  	"param_name" => "customvideom4v",
		  	"description" => __("Upload a M4V File.", "js_composer"),
		  	"dependency" => Array('element' => "bgmode", 'value' => array('video'))
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("OGV File URL", "js_composer"),
		  	"param_name" => "customvideoogv",
		  	"description" => __("Upload a OGV File.", "js_composer"),
		  	"dependency" => Array('element' => "bgmode", 'value' => array('video'))
		),

		array(
		  	"type" => "attach_image",
		  	"heading" => __("Video Preview Image", "js_composer"),
		  	"param_name" => "customimagevideo",
		  	"value" => "",
		  	"description" => __("Select image from media library.", "js_composer"),
		  	"dependency" => Array('element' => "bgmode", 'value' => array('video'))
		),

		array(
		  	"type" => 'checkbox',
		  	"heading" => __("Video Overlay?", "js_composer"),
		  	"param_name" => "video_overlay",
		  	"value" => Array(__("Use transparent overlay over video?", "js_composer") => 'show_video_overlay'),
		 	"dependency" => Array('element' => "bgmode", 'value' => array('video'))
		),

		array(
		  	"type" => "colorpicker",
		  	"heading" => __("Video Overlay Color", "js_composer"),
		  	"param_name" => "video_color_overlay",
		  	"description" => __("Select a custom color for overlay block.", "js_composer"),
		  	"dependency" => Array('element' => "video_overlay", 'value' => array('show_video_overlay'))
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Video Overlay Opacity", "js_composer"),
		  	"param_name" => "video_opacity_overlay",
		  	"description" => __("Enter a number 0 - 1 for your overlay color opacity. Default 0.70. Only if Video Overlay Mask is enable.", "js_composer"),
		  	"value" => "0.70",
		  	"dependency" => Array('element' => "video_overlay", 'value' => array('show_video_overlay'))
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Section Padding", "js_composer"),
		  	"param_name" => "padding",
		  	"value" => array(__("No Padding", "js_composer") => "no-padding", __("Small Padding", "js_composer") => "small-padding", __("Default Padding", "js_composer") => "default-padding", __("Large Padding", "js_composer") => "large-padding", __("Custom Padding", "js_composer") => "custom-padding"),
		  	"description" => __("Define the sections top and bottom padding.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Padding Top", "js_composer"),
		  	"param_name" => "padding_top_value",
		  	"description" => __("Padding Top value in pixel. Enter only number value. Default value is 70.", "js_composer"),
		  	"value" => "70",
		  	"dependency" => Array('element' => "padding", 'value' => array('custom-padding'))
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Padding Bottom", "js_composer"),
		  	"param_name" => "padding_bottom_value",
		  	"description" => __("Padding Bottom value in pixel. Enter only number value. Default value is 70.", "js_composer"),
		  	"value" => "70",
		  	"dependency" => Array('element' => "padding", 'value' => array('custom-padding'))
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Section Shadow", "js_composer"),
		  	"param_name" => "shadow",
		  	"value" => array(__("No Shadow", "js_composer") => "shadow-off", __("Display Shadow", "js_composer") => "shadow-on"),
		  	"description" => __("Display a small styling shadow at the top and bottom of the section.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra Row Class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	),
	"js_view" => 'VcRowView'
));

/*-----------------------------------------------------------------------------------*/
/*	Row Inner and Columns
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Row Inner", "js_composer"), //Inner Row
	"base" => "vc_row_inner",
	"is_container" => true,
	"category" => __('Layout', 'js_composer'),
	"icon" => "icon-wpb-row-inner",
	"show_settings_on_create" => false,
	"params" => array(
		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	),
	"js_view" => 'VcRowView'
));

wpb_map(array(
	"name" => __("Column", "js_composer"),
	"base" => "vc_column",
	"is_container" => true,
	"content_element" => false,
	"params" => array(
		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	),
	"js_view" => 'VcColumnView'
));

/*-----------------------------------------------------------------------------------*/
/*	Special Heading
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Special Heading", "js_composer"),
	"base" => "az_special_heading",
	"icon" => "icon-wpb-special-heading",
	"wrapper_class" => "clearfix",
	"category" => __('Content', 'js_composer'),
	"params" => array(
	
		array(
		  	"type" => "textarea",
		  	"holder" => "div",
		  	"heading" => __("Text", "js_composer"),
		  	"param_name" => "content",
		  	"value" => __("I am Heading Text.", "js_composer"),
		  	"description" => __("Insert your text. HTML is allowed.", "js_composer"),
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Heading Type", "js_composer"),
		  	"param_name" => "heading_type",
		  	"value" => 
			  	array(
					__("H1", "js_composer") => "1", 
					__("H2", "js_composer") => "2",
					__("H3", "js_composer") => "3",
					__("H4", "js_composer") => "4", 
					__("H5", "js_composer") => "5", 
					__("H6", "js_composer") => "6"
				),
		  	"description" => __("Select which kind of heading you want to display.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Font Color", "js_composer"),
		  	"param_name" => "heading_color",
		  	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
		  	"description" => __("Choose a color for your heading text.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "colorpicker",
		  	"heading" => __("Heading Custom Color", "js_composer"),
		  	"param_name" => "custom_heading_color",
		  	"description" => __("Select custom color for heading text.", "js_composer"),
		  	"dependency" => Array('element' => "heading_color", 'value' => array('custom'))
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Font Heading Size", "js_composer"),
		  	"param_name" => "heading_size",
		  	"value" => array(__("Theme Size Default", "js_composer") => "", __("Custom Size", "js_composer") => "custom"),
		  	"description" => __("Choose a size for your heading text.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Heading Custom Size", "js_composer"),
		  	"param_name" => "custom_heading_size",
		  	"description" => __("Font Size in pixel. Enter only number value.", "js_composer"),
		  	"value" => "",
		  	"dependency" => Array('element' => "heading_size", 'value' => array('custom')),
		  	"admin_label" => false
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Heading Style", "js_composer"),
		  	"param_name" => "heading_style",
		  	"value" => 
			  	array(
					__("Default Style", "js_composer") => "default",
					__("Italic Style", "js_composer") => "italic"
				),
		  	"description" => __("Select a heading style.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Heading Align", "js_composer"),
		  	"param_name" => "heading_align",
		  	"value" => 
			  	array(
					__("Align Left", "js_composer") => "textalignleft",
					__("Align Center", "js_composer") => "textaligncenter",
					__("Align Right", "js_composer") => "textalignright",
				),
		  	"description" => __("Select a heading align.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Padding Bottom", "js_composer"),
		  	"param_name" => "padding_bottom_heading",
		  	"description" => __("Bottom Padding in pixel. Enter only number value. Default value is 30.", "js_composer"),
		  	"value" => "30",
		  	"admin_label" => false
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Text Block
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Text Block", "js_composer"),
	"base" => "vc_column_text",
	"icon" => "icon-wpb-text-block",
	"wrapper_class" => "clearfix",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		
		array(
		  	"type" => "textarea_html",
		  	"holder" => "div",
		  	"heading" => __("Text", "js_composer"),
		  	"param_name" => "content",
		  	"value" => __("I am text block. Click edit button to change this text.", "js_composer")
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Divider and Blank Divider
/*-----------------------------------------------------------------------------------*/

// Divider
wpb_map(array(
    "base"		=> "az_divider",
    "name"		=> __("Divider", "js_composer"),
    "class"		=> "wpb_vc_separator",
    "icon"      => "icon-wpb-divider",
	"category" 	=> __('Content', 'js_composer'),
    "params"	=> array(
		
		array(
		 	"type" => "dropdown",
		 	"heading" => __("Divider Style", "js_composer"),
		 	"param_name" => "div_type",
		  	"value" => array( __("Normal", "js_composer") => "normal", __("Short", "js_composer") => "short" ),
		  	"admin_label" => false,
		  	"description" => __("Choose between the two available divider styles.", "js_composer")
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Margin Top Value", "js_composer"),
		  	"param_name" => "margin_top_value",
		  	"description" => __("Margin Top Value in pixel. Enter only number value. Default value is 30.", "js_composer"),
		  	"value" => "30"
		),

		array(
		  	"type" => "textfield",
		 	"heading" => __("Margin Bottom Value", "js_composer"),
		  	"param_name" => "margin_bottom_value",
		  	"description" => __("Margin Bottom Value in pixel. Enter only number value. Default value is 36.", "js_composer"),
		  	"value" => "36"
		),
		
		$animated_choice,
		$animated_effects,
		$animated_delay,
	
        array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
    )
));

// Blank Divider
wpb_map(array(
    "base"		=> "az_blank_divider",
    "name"		=> __("Blank Divider", "js_composer"),
    "class"		=> "wpb_vc_separator",
    "icon"      => "icon-wpb-divider",
	"category" 	=> __('Content', 'js_composer'),
    "params"	=> array(
		array(
		  	"type" => "textfield",
		  	"heading" => __("Height Value", "js_composer"),
		  	"param_name" => "height_value",
		  	"description" => __("Height Value in pixel. Enter only number value. Default value is 20.", "js_composer"),
		  	"value" => "20"
		),

        array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
    )
));


/*-----------------------------------------------------------------------------------*/
/*	Alert Boxes
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
    "base"		=> "az_alert_box",
    "name"		=> __("Alert Box", "js_composer"),
    "class"		=> "",
    "icon"      => "icon-wpb-alert",
	"category" 	=> __('Content', 'js_composer'),
    "params"	=> array(
		
		array(
		  	"type" => "dropdown",
		  	"heading" => __("Type", "js_composer"),
		  	"param_name" => "type",
		  	"value" => $type_arr,
		  	"description" => __("Select your Alert Box.", "js_composer")
		),

		array(
		  	"type" => "textarea",
		  	"holder" => "div",
		  	"heading" => __("Text", "js_composer"),
		  	"param_name" => "content",
		  	"value" => __("I am text block. Click edit button to change this text.", "js_composer")
		),
		
		$animated_choice,
		$animated_effects,
		$animated_delay,
		
		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
    )
));

/*-----------------------------------------------------------------------------------*/
/*	Accordion / Toggle / Tab
/*-----------------------------------------------------------------------------------*/

// Accordions
wpb_map(array(
	"name" => __("Accordion", "js_composer"),
	"base" => "az_acc_container",
	"icon" => "icon-wpb-accordion",
	"category" => __('Content', 'js_composer'),
	"params" => array(

		array(
		  	"type" => "textarea_html",
		  	"holder" => "div",
		  	"heading" => __("Accordion", "js_composer"),
		  	"param_name" => "content",
		  	"description" => __("Click on the <strong>AZ Shortcode Button</strong> and select <strong>Accordion Section Shortcode</strong>.", "js_composer"),
		  	"value" => __("", "js_composer")
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

// Toggles
wpb_map(array(
	"name" => __("Toggle", "js_composer"),
	"base" => "az_tog_container",
	"icon" => "icon-wpb-toggle",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		
		array(
		  	"type" => "textarea_html",
		  	"holder" => "div",
		  	"heading" => __("Toggle", "js_composer"),
		  	"param_name" => "content",
		  	"description" => __("Click on the <strong>AZ Shortcode Button</strong> and select <strong>Toggle Section Shortcode</strong>.", "js_composer"),
		  	"value" => __("", "js_composer")
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

// Tabs
wpb_map(array(
	"name" => __("Tab", "js_composer"),
	"base" => "az_tab_container",
	"icon" => "icon-wpb-tab",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		
		array(
		  	"type" => "textarea_html",
		  	"holder" => "div",
		  	"heading" => __("Tab", "js_composer"),
		  	"param_name" => "content",
		  	"description" => __("Click on the <strong>AZ Shortcode Button</strong> and select <strong>Tab Section Shortcode</strong>.", "js_composer"),
		  	"value" => __("", "js_composer")
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

// Testimonials
wpb_map(array(
	"name" => __("Testimonial", "js_composer"),
	"base" => "az_testimonial_container",
	"icon" => "icon-wpb-testimonial",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		
		array(
		  	"type" => "textarea_html",
		  	"holder" => "div",
		  	"heading" => __("Testimonial", "js_composer"),
		  	"param_name" => "content",
		  	"description" => __("Click on the <strong>AZ Shortcode Button</strong> and select <strong>Testimonial Section Shortcode</strong>. Don't add more one testimonial slider shortcode to the same page.", "js_composer"),
		  	"value" => __("", "js_composer")
		),

		$animated_choice,
		$animated_effects,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		 	 "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Single Image / Lightbox Image / Video
/*-----------------------------------------------------------------------------------*/

// Single Image
wpb_map(array(
    "base"		=> "az_single_image",
    "name"		=> __("Single Image", "js_composer"),
    "class"		=> "",
    "icon"      => "icon-wpb-light-image",
	"category" 	=> __('Content', 'js_composer'),
    "params"	=> array(
        
        array(
		  	"type" => "attach_image",
		  	"heading" => __("Image", "js_composer"),
		  	"param_name" => "image",
      	  	"value" => "",
		  	"description" => __("Select image from media library.", "js_composer")
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Image Mode", "js_composer"),
		  	"param_name" => "image_mode",
      	  	"value" => array(__("No Responsive", "js_composer") => "img-no-responsive", __("Responsive", "js_composer") => "img-responsive", __("Full Responsive", "js_composer") => "img-full-responsive"),
		  	"description" => __("Select mode of your image.", "js_composer"),
		  	"dependency" => Array('element' => "image", 'not_empty' => true),
      	  	"admin_label" => false
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Image Alignment", "js_composer"),
		  	"param_name" => "image_alignment",
      	  	"value" => array(__("Left", "js_composer") => "alignleft", __("Center", "js_composer") => "aligncenter", __("Right", "js_composer") => "alignright"),
		  	"description" => __("Select mode of your image.", "js_composer"),
		  	"dependency" => Array('element' => "image", 'not_empty' => true),
      	  	"admin_label" => false
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Image Link", "js_composer"),
		  	"param_name" => "image_link",
      	  	"value" => array(__("No", "js_composer") => "no-link", __("Yes", "js_composer") => "yes"),
		  	"description" => __("Select mode of your image.", "js_composer"),
		  	"dependency" => Array('element' => "image", 'not_empty' => true),
      	  	"admin_label" => false
		),
		
		array(
	      	"type" => "textfield",
	      	"heading" => __("Link URL", "js_composer"),
	      	"param_name" => "image_link_url",
	      	"description" => __("Where should your image link to?", "js_composer"),
	      	"dependency" => Array('element' => "image_link", 'value' => array('yes')),
		  	"admin_label" => false
	    ),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Link Target", "js_composer"),
		  	"param_name" => "target",
		  	"value" => $target_arr,
		  	"dependency" => Array('element' => "image_link", 'value' => array('yes'))
		),
		
		$animated_choice,
		$animated_effects,
		$animated_delay,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
    )
));

// LightBox Image
wpb_map(array(
    "base"		=> "az_lightbox_image",
    "name"		=> __("LightBox Image", "js_composer"),
    "class"		=> "",
    "icon"      => "icon-wpb-light-image",
	"category" 	=> __('Content', 'js_composer'),
    "params"	=> array(
        
        array(
		  	"type" => "attach_image",
		  	"heading" => __("Image", "js_composer"),
		  	"param_name" => "image",
      	  	"value" => "",
		  	"description" => __("Select image from media library.", "js_composer")
		),
		
		array(
		  	"type" => "attach_image",
		  	"heading" => __("Different PopUp Image (Optional)", "js_composer"),
		  	"param_name" => "image_popup",
      	  	"value" => "",
		  	"description" => __("Select image from media library. If you want a different PopUp Image.", "js_composer"),
		  	"dependency" => Array('element' => "image", 'not_empty' => true)
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Thumbnail Width (Optional)", "js_composer"),
		  	"param_name" => "thumb_widht",
      	  	"value" => "",
		  	"description" => __("If you wish choose a width for your thumbnail. It will be automatically cropped and resized. Enter only number value.", "js_composer"),
		  	"dependency" => Array('element' => "image", 'not_empty' => true)
		),
		
		array(
		  	"type" => "textfield",
		  	"heading" => __("Title", "js_composer"),
		  	"param_name" => "title",
		  	"description" => __("Title of Image.", "js_composer")
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Gallery Name", "js_composer"),
		  	"param_name" => "gallery_name",
		  	"description" => __("Title of Gallery Name.", "js_composer")
		),
		
		$animated_choice,
		$animated_effects,
		$animated_delay,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
    )
));

// Lightbox Video
wpb_map(array(
    "base"		=> "az_lightbox_video",
    "name"		=> __("LightBox Video", "js_composer"),
    "class"		=> "",
    "icon"      => "icon-wpb-light-video",
	"category" => __('Content', 'js_composer'),
    "params"	=> array(
        
        array(
		  	"type" => "attach_image",
		  	"heading" => __("Image", "js_composer"),
		  	"param_name" => "image",
      	  	"value" => "",
		  	"description" => __("Select image from media library.", "js_composer")
		),
		
		array(
		  	"type" => "textfield",
		  	"heading" => __("Thumbnail Width (Optional)", "js_composer"),
		  	"param_name" => "thumb_widht",
      	  	"value" => "",
		  	"description" => __("If you wish choose a width for your thumbnail. It will be automatically cropped and resized.", "js_composer"),
		  	"dependency" => Array('element' => "image", 'not_empty' => true)
		),
		
		array(
		  	"type" => "textfield",
		  	"heading" => __("Link URL", "js_composer"),
		  	"param_name" => "link_url",
		  	"description" => __("Insert Link for your video.", "js_composer")
		),
		
		array(
		  	"type" => "textfield",
		  	"heading" => __("Title", "js_composer"),
		  	"param_name" => "title",
		  	"description" => __("Title of Video.", "js_composer")
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Gallery Name", "js_composer"),
		  	"param_name" => "gallery_name",
		  	"description" => __("Title of Gallery.", "js_composer")
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
    )
));

// Lightbox Image Gallery
wpb_map(array(
    "base"		=> "az_lightbox_image_gallery",
    "name"		=> __("LightBox Gallery", "js_composer"),
    "class"		=> "",
    "icon"      => "icon-wpb-light-image",
	"category" 	=> __('Content', 'js_composer'),
    "params"	=> array(
        
        array(
		  	"type" => "attach_image",
		  	"heading" => __("Thumbnail Image", "js_composer"),
		  	"param_name" => "image",
      	  	"value" => "",
		  	"description" => __("Select thumbnail image from media library.", "js_composer")
		),
		
		array(
		  	"type" => "attach_images",
		  	"heading" => __("Images for Gallery", "js_composer"),
		  	"param_name" => "images_gallery",
      	  	"value" => "",
		  	"description" => __("Select images from media library.", "js_composer"),
		  	"dependency" => Array('element' => "image", 'not_empty' => true)
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Thumbnail Width (Optional)", "js_composer"),
		  	"param_name" => "thumb_widht",
      	  	"value" => "",
		  	"description" => __("If you wish choose a width for your thumbnail. It will be automatically cropped and resized. Enter only number value.", "js_composer"),
		  	"dependency" => Array('element' => "image", 'not_empty' => true)
		),
		
		array(
		  	"type" => "textfield",
		  	"heading" => __("Thumbnail Title", "js_composer"),
		  	"param_name" => "title",
		  	"description" => __("Title of Thumbnail Image.", "js_composer")
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Gallery Name", "js_composer"),
		  	"param_name" => "gallery_name",
		  	"description" => __("Title of Gallery Name.", "js_composer")
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
    )
));


/*-----------------------------------------------------------------------------------*/
/*	Progress Bar
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Progress Bar", "js_composer"),
	"base" => "az_progress_bar",
	"icon" => "icon-wpb-progress-bar",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		
		array(
		  	"type" => "textfield",
		 	"heading" => __("Progress Bar Field", "js_composer"),
		  	"param_name" => "field",
		  	"description" => __("Enter the Progress Bar Field title here.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		 	"type" => "textfield",
		  	"heading" => __("Progress in %", "js_composer"),
		  	"param_name" => "percentage",
		  	"description" => __("Enter a number between 0 and 100.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Bar color", "js_composer"),
		  	"param_name" => "bgcolor",
		  	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
		  	"description" => __("Choose a color for your progress bar here.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "colorpicker",
		  	"heading" => __("Bar Custom Color", "js_composer"),
		  	"param_name" => "custombarcolor",
		  	"description" => __("Select custom background color for bar.", "js_composer"),
		  	"dependency" => Array('element' => "bgcolor", 'value' => array('custom'))
		),
			
		array(
		  	"type" => "dropdown",
		  	"heading" => __("Icon", "js_composer"),
		  	"param_name" => "checkicon",
		  	"value" => array(__("No Icon", "js_composer") => "no_icon", __("Yes, Display Icon", "js_composer") => "custom_icon"),
		  	"description" => __("Should an icon be displayed at the left side of the progress bar.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "icons",
		  	"heading" => __("Icon", "js_composer"),
		  	"param_name" => "icon",
		  	"value" => $fonticon_arr,
		  	"dependency" => Array('element' => "checkicon", 'value' => array('custom_icon'))
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Circular Progress Bar
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Circular Bar", "js_composer"),
	"base" => "az_circular_progress_bar",
	"icon" => "icon-wpb-circular-bar",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		
		array(
		  	"type" => "textfield",
		  	"heading" => __("Circular Progress Bar Field", "js_composer"),
		  	"param_name" => "circular_field",
		  	"description" => __("Enter the Circular Progress Bar Field title here.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Circular Progress in %", "js_composer"),
		  	"param_name" => "circular_percentage",
		  	"description" => __("Enter a number between 0 and 100.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "colorpicker",
		  	"heading" => __("Circular Bar Color", "js_composer"),
		  	"param_name" => "circular_bgcolor",
		  	"value" => "#FE4444",
		  	"description" => __("Select custom color for circular bar.", "js_composer")
		),

		array(
		  	"type" => "colorpicker",
		  	"heading" => __("Circular Track Color", "js_composer"),
		  	"param_name" => "circular_trackcolor",
		  	"value" => "#EBEDEF",
		  	"description" => __("Select custom color of the track for the bar.", "js_composer")
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Circular Progress Size", "js_composer"),
		  	"param_name" => "circular_size",
		  	"description" => __("Enter a number for the size of your circle progress in px. Default size is 220.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Line Width Circle Progress", "js_composer"),
		  	"param_name" => "circular_line",
		  	"description" => __("Enter a number for the width of the bar line in px. Default size is 24.", "js_composer"),
		  	"admin_label" => false
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Count Number
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Count Number", "js_composer"),
	"base" => "az_count_number",
	"icon" => "icon-wpb-count-number",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		
		array(
		  	"type" => "textfield",
		  	"heading" => __("Count Number Field", "js_composer"),
		  	"param_name" => "number_field",
		  	"description" => __("Enter the Progress Bar Field title here.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Count Number From", "js_composer"),
		  	"param_name" => "number_value_from",
		  	"value" => "0",
		  	"description" => __("The number to start counting from. Default value is 0.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Count Number To", "js_composer"),
		  	"param_name" => "number_value_to",
		  	"value" => "100",
		  	"description" => __("The number to stop counting at. Default value is 100.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Count Number Speed", "js_composer"),
		  	"param_name" => "number_speed",
		  	"value" => "1000",
		  	"description" => __("The number of milliseconds it should take to finish counting. Default value is 1000.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Icon", "js_composer"),
		  	"param_name" => "checkicon",
		  	"value" => array(__("No Icon", "js_composer") => "no_icon", __("Yes, Display Icon", "js_composer") => "custom_icon"),
		  	"description" => __("Should an icon be displayed at the top of the count number.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "icons",
		  	"heading" => __("Icon", "js_composer"),
		  	"param_name" => "icon",
		  	"value" => $fonticon_arr,
		  	"dependency" => Array('element' => "checkicon", 'value' => array('custom_icon'))
		),

		$animated_choice,
		$animated_effects,

		array(
		  	"type" => "textfield",
		 	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Pricing Table
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
    "base"		=> "az_pricing_table",
    "name"		=> __("Pricing Table", "js_composer"),
    "class"		=> "",
    "icon"      => "icon-wpb-pricing-table",
	"category" 	=> __('Content', 'js_composer'),
    "params"	=> array(
        
        array(
		  	"type" => "textfield",
		  	"heading" => __("Pricing Table Title", "js_composer"),
		  	"param_name" => "title"
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Pricing Table Price", "js_composer"),
		  	"param_name" => "price"
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Pricing Table Currency Symbol", "js_composer"),
		  	"param_name" => "currency"
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Pricing Table Interval Time", "js_composer"),
		  	"param_name" => "interval"
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Pricing Table Button URL", "js_composer"),
		  	"param_name" => "link_url",
		  	"value" => "#"
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Pricing Table Button Text", "js_composer"),
		  	"param_name" => "link_text",
		  	"value" => "Button Text"
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Pricing Table Link Target", "js_composer"),
		  	"param_name" => "target",
		  	"value" => $target_arr
		),

		array(
		  	"type" => 'checkbox',
		  	"heading" => __("Highlight Pricing Table?", "js_composer"),
		  	"param_name" => "highlight",
		  	"value" => Array(__("Yes, please", "js_composer") => 'yes')
		),
		
		array(
		  	"type" => "textarea_html",
		  	"holder" => "div",
		  	"heading" => __("Text", "js_composer"),
		  	"param_name" => "content",
		  	"value" => __("<ul><li>5 Project</li><li>5GB Storage</li><li>12 Users</li><li>Tasks</li><li>CRM</li><li>Your Domain</li></ul>", "js_composer")
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,
		
		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
    )
));

/*-----------------------------------------------------------------------------------*/
/*	Icons
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Icon", "js_composer"),
	"base" => "az_icon",
	"icon" => "icon-wpb-single-icon",
	"category" => __('Content', 'js_composer'),
	"params" => array(

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Icon Color", "js_composer"),
		  	"param_name" => "icon_color",
		  	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
		  	"description" => __("Choose a color for your icon.", "js_composer"),
		  	"admin_label" => false
		),

		array(
		  	"type" => "colorpicker",
		  	"heading" => __("Icon Custom Color", "js_composer"),
		  	"param_name" => "custom_icon_color",
		  	"description" => __("Select custom color for icon.", "js_composer"),
		  	"dependency" => Array('element' => "icon_color", 'value' => array('custom'))
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Icon Size", "js_composer"),
		  	"param_name" => "icon_size",
		  	"description" => __("Size Value in pixel. Enter only number value. Default value is 16.", "js_composer"),
		  	"value" => "16"
		),
		
		array(
		  	"type" => "icons",
		  	"heading" => __("Icon", "js_composer"),
		  	"param_name" => "icon",
		  	"value" => $fonticon_arr,
		  	"admin_label" => false
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));


/*-----------------------------------------------------------------------------------*/
/*	Box Icon
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Box Icon", "js_composer"),
	"base" => "az_box_icon",
	"icon" => "icon-wpb-box-icon",
	"category" => __('Content', 'js_composer'),
	"params" => array(

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Icons Select", "js_composer"),
		  	"param_name" => "icons_select",
		  	"value" => array(
		  					__("Click For Select", "js_composer") => "",
		  					__("Boxed Version", "js_composer") => "boxed_version", 
		  					__("Circle Icon", "js_composer") => "icon_circle",
		  					__("Icon Only", "js_composer") => "icon_only",
		  					__("Standard Icon with Title") => "icon_standard"
		  				),
		  	"admin_label" => false,
		  	"description" => __("Select Your Favorite Box Icons Style.", "js_composer")
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Icon Position", "js_composer"),
		  	"param_name" => "position",
		  	"value" => array(
		  					__("Left", "js_composer") => "left", 
		  					__("Top", "js_composer") => "top", 
		  					__("Right", "js_composer") => "right"
		  				),
		  	"description" => __("Should the icon be positioned at the left, right or at the top?", "js_composer"),
		  	"dependency" => Array('element' => "icons_select", 'value' => array('icon_circle', 'icon_only')),
		  	"admin_label" => false
		),
		
		array(
		  	"type" => "icons",
		  	"heading" => __("Icon", "js_composer"),
		  	"param_name" => "icon",
		  	"value" => $fonticon_arr,
		  	"dependency" => Array('element' => "icons_select", 'value' => array('icon_circle', 'icon_only', 'icon_standard', 'boxed_version')),
		  	"admin_label" => false
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Title", "js_composer"),
		  	"param_name" => "title",
		  	"description" => __("Add an Box Icon title here.", "js_composer"),
		  	"value" => "Box Icon Title",
		  	"admin_label" => false
		),

		array(
		  	"type" => "textarea_html",
		  	"holder" => "div",
		  	"heading" => __("Text", "js_composer"),
		  	"param_name" => "content",
		  	"value" => __("Insert Your Text.", "js_composer")
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		 	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Widgetised sidebar
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Sidebar", "js_composer"),
	"base" => "vc_widget_sidebar",
	"class" => "wpb_widget_sidebar_widget",
	"icon" => "icon-wpb-sidebar",
	"category" => __('Content', 'js_composer'),
	"params" => array(

		array(
		  	"type" => "textfield",
		  	"heading" => __("Widget title", "js_composer"),
		  	"param_name" => "title",
		  	"description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
		),

		array(
		  	"type" => "widgetised_sidebars",
		  	"heading" => __("Sidebar", "js_composer"),
		  	"param_name" => "sidebar_id",
		  	"description" => __("Select which widget area output.", "js_composer")
		),
		
		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Portfolio Grid
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Portfolio Grid", "js_composer"),
	"base" => "az_portfolio_grid",
	"icon" => "icon-wpb-portfolio",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		
		array(
		  	"type" => "dropdown",
		  	"heading" => __("Layout Mode", "js_composer"),
		  	"param_name" => "portfolio_layout",
		  	"value" => array(__("Grid", "js_composer") => "grid-portfolio", __("Masonry", "js_composer") => "masonry-portfolio"),
		  	"admin_label" => false,
		  	"description" => __("Select Portfolio Layout Mode", "js_composer")
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Columns", "js_composer"),
		  	"param_name" => "portfolio_columns_count",
		  	"value" => array(__("2 Columns", "js_composer") => "2clm", __("3 Columns", "js_composer") => "3clm", __("4 Columns", "js_composer") => "4clm", __("5 Columns (Only Wall Effect Enabled)", "js_composer") => "5clm", __("6 Columns (Only Wall Effect Enabled)", "js_composer") => "6clm"),
		  	"admin_label" => false,
		  	"description" => __("How many columns should be displayed?", "js_composer")
		),

		array(
		  	"type" => 'checkbox',
		  	"heading" => __("Enable Wall Effect?", "js_composer"),
		  	"param_name" => "portfolio_wall",
		  	"value" => Array(__("Yes, please", "js_composer") => 'yes'),
		  	"description" => __("Enable or Disable Portfolio Wall Effect!", "js_composer")
		),

		array(
		  	"type" => 'checkbox',
		  	"heading" => __("Remove Link to Single Portfolio Item?", "js_composer"),
		  	"param_name" => "link_portfolio_item",
		  	"value" => Array(__("Yes, please", "js_composer") => 'yes'),
		  	"description" => __("Enable or Disable the link for the single portfolio item page.", "js_composer")
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Link Handling", "js_composer"),
		  	"param_name" => "portfolio_post_link",
		  	"value" => array(__("Open the entry on a new page", "js_composer") => "link_post", __("Display the big image/video in a Fancybox", "js_composer") => "link_fancybox"),
		  	"admin_label" => false,
		  	"description" => __("When clicking on an item:", "js_composer")
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Sortable", "js_composer"),
		  	"param_name" => "portfolio_sortable_mode",
		  	"value" => array(__("Yes", "js_composer") => "yes", __("No", "js_composer") => "no"),
		  	"admin_label" => false,
		  	"description" => __("Should the sorting options based on categories be displayed? Disable if you want display a custom portfolio categories.", "js_composer")
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Portfolio Sortable Name", "js_composer"),
		  	"param_name" => "portfolio_sortable_name",
		  	"value" => "All Projects",
		  	"admin_label" => false,
		  	"description" => __('Enter sortable name. Default value is All Projects', "js_composer"),
		  	"dependency" => Array('element' => "portfolio_sortable_mode", 'value' => array('yes'))
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Post Number", "js_composer"),
		  	"param_name" => "portfolio_post_number",
		  	"admin_label" => false,
		  	"description" => __('How many post to show? Enter number or word "All". Default value is All.', "js_composer")
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Portfolio Categories", "js_composer"),
		  	"param_name" => "portfolio_categories",
		  	"admin_label" => false,
		  	"description" => __("If you want to show only certain portfolio categories, not the entire portfolio, please write the categories in this field, separated by commas. Please use the <strong>category slug</strong>, not the title.", "js_composer")
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Order by", "js_composer"),
		  	"param_name" => "orderby",
		  	"value" => array( "", __("Date", "js_composer") => "date", __("ID", "js_composer") => "ID", __("Author", "js_composer") => "author", __("Title", "js_composer") => "title", __("Modified", "js_composer") => "modified", __("Random", "js_composer") => "rand", __("Comment count", "js_composer") => "comment_count", __("Menu order", "js_composer") => "menu_order" ),
		  	"admin_label" => false,
		  	"description" => sprintf(__('Select how to sort retrieved posts. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Order way", "js_composer"),
		  	"param_name" => "order",
		  	"value" => array( __("Descending", "js_composer") => "DESC", __("Ascending", "js_composer") => "ASC" ),
		  	"admin_label" => false,
		  	"description" => sprintf(__('Designates the ascending or descending order. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
		),

		$animated_choice,
		$animated_effects,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Team Grid
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Team Grid", "js_composer"),
	"base" => "az_team_grid",
	"icon" => "icon-wpb-team",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		
		array(
		  	"type" => "dropdown",
		  	"heading" => __("Columns", "js_composer"),
		  	"param_name" => "team_columns_count",
		  	"value" => array(__("2 Columns", "js_composer") => "2clm", __("3 Columns", "js_composer") => "3clm", __("4 Columns", "js_composer") => "4clm"),
		  	"admin_label" => false,
		  	"description" => __("How many columns should be displayed?", "js_composer")
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Sortable", "js_composer"),
		  	"param_name" => "team_sortable_mode",
		  	"value" => array(__("Yes", "js_composer") => "yes", __("No", "js_composer") => "no"),
		  	"admin_label" => false,
		  	"description" => __("Should the sorting options based on categories be displayed? Disable if you want display a custom team categories.", "js_composer")
		),

		array(
		 	"type" => "textfield",
		  	"heading" => __("Team Sortable Name", "js_composer"),
		  	"param_name" => "team_sortable_name",
		  	"value" => "All Discipline",
		  	"admin_label" => false,
		  	"description" => __('Enter sortable name. Default value is All Discipline', "js_composer"),
		  	"dependency" => Array('element' => "team_sortable_mode", 'value' => array('yes'))
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Team Number", "js_composer"),
		  	"param_name" => "team_post_number",
		  	"admin_label" => false,
		  	"description" => __('How many post to show? Enter number or word "All". Default value is All.', "js_composer")
		),

		array(
		  	"type" => "textfield",
		  	"heading" => __("Team Categories", "js_composer"),
		  	"param_name" => "team_categories",
		  	"admin_label" => false,
		  	"description" => __("If you want to show only certain team categories, not the entire team, please write the categories in this field, separated by commas. Please use the <strong>category slug</strong>, not the title.", "js_composer")
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Order by", "js_composer"),
		  	"param_name" => "orderby",
		  	"value" => array( "", __("Date", "js_composer") => "date", __("ID", "js_composer") => "ID", __("Author", "js_composer") => "author", __("Title", "js_composer") => "title", __("Modified", "js_composer") => "modified", __("Random", "js_composer") => "rand", __("Comment count", "js_composer") => "comment_count", __("Menu order", "js_composer") => "menu_order" ),
		  	"admin_label" => false,
		  	"description" => sprintf(__('Select how to sort retrieved posts. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
		),

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Order way", "js_composer"),
		  	"param_name" => "order",
		  	"value" => array( __("Descending", "js_composer") => "DESC", __("Ascending", "js_composer") => "ASC" ),
		  	"admin_label" => false,
		  	"description" => sprintf(__('Designates the ascending or descending order. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
		),

		$animated_choice,
		$animated_effects,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Latest Posts
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Latest Posts", "js_composer"),
	"base" => "az_latest_posts",
	"icon" => "icon-wpb-latest-posts",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		
		array(
		  	"type" => "dropdown",
		  	"heading" => __("Columns", "js_composer"),
		  	"param_name" => "post_columns_count",
		  	"value" => array(__("2 Columns", "js_composer") => "2clm", __("3 Columns", "js_composer") => "3clm", __("4 Columns", "js_composer") => "4clm"),
		  	"admin_label" => false,
		  	"description" => __("How many columns should be displayed?", "js_composer")
		),
			
		array(
		  	"type" => "textfield",
		  	"heading" => __("Post Number", "js_composer"),
			"param_name" => "post_number",
		  	"admin_label" => false,
		  	"description" => __('How many post to show? Enter number or word "All". Default value is All.', "js_composer")
		),

		array(
		 	"type" => "textfield",
		  	"heading" => __("Categories", "js_composer"),
		  	"param_name" => "post_categories",
		  	"admin_label" => false,
		  	"description" => __("If you want to show only certain posts categories, not the entire blog, please write the categories in this field, separated by commas. Please use the <strong>category slug</strong>, not the title.", "js_composer")
		),

		$animated_choice,
		$animated_effects,

		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Video Embed or Video Self Hosted
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Video", "js_composer"),
	"base" => "az_video_container",
	"icon" => "icon-wpb-video",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		
		array(
		  	"type" => "textarea_html",
		  	"holder" => "div",
		  	"heading" => __("Video Embed / Video Self Hosted", "js_composer"),
		  	"param_name" => "content",
		  	"description" => __("Click on the <strong>AZ Shortcode Button</strong> and select <strong>Video Embed or Video Self Hosted Shortcode</strong>.
		  	<br/><br/>A list of all supported Video Services can be found on <a href='http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F' target='_blank'>WordPress.org</a><br/>
		  	<br/>Working examples, in case you want to use an external service (Video Embed Shortcode):
		  	<br/><strong>https://vimeo.com/charlex/shapeshifter</strong>
		  	<br/><strong>http://www.youtube.com/watch?v=CZIt20emgLY</strong>", "js_composer"),
		  	"value" => __("", "js_composer")
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,
			
		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Audio Self Hosted
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Audio", "js_composer"),
	"base" => "az_audio_container",
	"icon" => "icon-wpb-audio",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		
		array(
		  	"type" => "textarea_html",
		  	"holder" => "div",
		  	"heading" => __("Audio Self Hosted", "js_composer"),
		  	"param_name" => "content",
		  	"description" => __("Click on the <strong>AZ Shortcode Button</strong> and select <strong>Audio Self Hosted Shortcode</strong>.", "js_composer"),
		  	"value" => __("", "js_composer")
		),

		$animated_choice,
		$animated_effects,
		$animated_delay,
			
		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Big Twitter Feed
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Big Twitter Feed", "js_composer"),
	"base" => "az_big_tweet_feed",
	"icon" => "icon-wpb-tweet",
	"category" => __('Content', 'js_composer'),
	"params" => array(

		array(
		  	"type" => "dropdown",
		  	"heading" => __("Big Twitter Feed Type", "js_composer"),
		  	"param_name" => "twitter_mode",
		  	"value" => array(__("One Tweet", "js_composer") => "one_tweet", __("More Tweet", "js_composer") => "more_tweet"),
		  	"admin_label" => false,
		  	"description" => __("Select Your Favorite Twitter Style.", "js_composer")
		),
		
		array(
		  	"type" => "textfield",
		  	"heading" => __("Twitter Username", "js_composer"),
		  	"param_name" => "twitter_username",
		  	"value" => "Bluxart",
		  	"description" => __("Insert here your twitter username only.", "js_composer"),
		  	"admin_label" => false
		),

		array(
			"type" => "textfield",
			"heading" => __("Number Tweet", "js_composer"),
			"param_name" => "num_tweet",
			"value" => "",
			"description" => __("Display total tweets.", "js_composer"),
			"dependency" => Array('element' => "twitter_mode", 'value' => array('more_tweet'))
		),

		$animated_choice,
		$animated_effects,
			
		array(
		  	"type" => "textfield",
		  	"heading" => __("Extra class name", "js_composer"),
		  	"param_name" => "el_class",
		  	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		)
	)
));

/*-----------------------------------------------------------------------------------*/
/*	Social Profiles
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Social Profile", "js_composer"),
  	"base" => "az_social_profile",
  	"icon" => "icon-wpb-social",
  	"category" => __('Content', 'js_composer'),
  	"params" => array(
		
		array( 
		  	"type" => "textfield",
		  	"heading" => __("500PX Profile", "js_composer"),
		  	"param_name" => "px",
		  	"description" => __("Please enter in your 500PX URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Add This Profile", "js_composer"),
		  	"param_name" => "addthis",
		  	"description" => __("Please enter in your Add This URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Behance Profile", "js_composer"),
		  	"param_name" => "behance",
		  	"description" => __("Please enter in your Behance URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Bebo Profile", "js_composer"),
		  	"param_name" => "bebo",
		  	"description" => __("Please enter in your Bebo URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Blogger Profile", "js_composer"),
		  	"param_name" => "blogger",
		  	"description" => __("Please enter in your Blogger URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Deviant Art Profile", "js_composer"),
		  	"param_name" => "deviantart",
		  	"description" => __("Please enter in your Deviant Art URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Digg Profile", "js_composer"),
		  	"param_name" => "digg",
		  	"description" => __("Please enter in your Digg URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Dribbble Profile", "js_composer"),
		  	"param_name" => "dribbble",
		  	"description" => __("Please enter in your Dribbble URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Email Profile", "js_composer"),
		  	"param_name" => "email",
		  	"description" => __("Please enter in your Email URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Envato Profile", "js_composer"),
		  	"param_name" => "envato",
		  	"description" => __("Please enter in your Envato URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Evernote Profile", "js_composer"),
		  	"param_name" => "evernote",
		  	"description" => __("Please enter in your Evernote URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Facebook Profile", "js_composer"),
		  	"param_name" => "facebook",
		  	"description" => __("Please enter in your Facebook URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Flickr Profile", "js_composer"),
		  	"param_name" => "flickr",
		  	"description" => __("Please enter in your Flickr URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Forrst Profile", "js_composer"),
		  	"param_name" => "forrst",
		  	"description" => __("Please enter in your Forrst URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Github Profile", "js_composer"),
		  	"param_name" => "github",
		  	"description" => __("Please enter in your Github URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Google Plus Profile", "js_composer"),
		  	"param_name" => "googleplus",
		  	"description" => __("Please enter in your Google Plus URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Grooveshark Profile", "js_composer"),
		  	"param_name" => "grooveshark",
		  	"description" => __("Please enter in your Grooveshark URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Instagram Profile", "js_composer"),
		  	"param_name" => "instagram",
		  	"description" => __("Please enter in your Instagram URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Last Fm Profile", "js_composer"),
		  	"param_name" => "lastfm",
		  	"description" => __("Please enter in your Last Fm URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Linked In Profile", "js_composer"),
		  	"param_name" => "linkedin",
		  	"description" => __("Please enter in your Linked In URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("My Space Profile", "js_composer"),
		  	"param_name" => "myspace",
		  	"description" => __("Please enter in your My Space URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("PayPal Profile", "js_composer"),
		  	"param_name" => "paypal",
		  	"description" => __("Please enter in your PayPal URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Photobucket Profile", "js_composer"),
		  	"param_name" => "photobucket",
		  	"description" => __("Please enter in your Photobucket URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Pinterest Profile", "js_composer"),
		  	"param_name" => "pinterest",
		  	"description" => __("Please enter in your Pinterest URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Quora Profile", "js_composer"),
		  	"param_name" => "quora",
		  	"description" => __("Please enter in your Quora URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Share This Profile", "js_composer"),
		  	"param_name" => "sharethis",
		  	"description" => __("Please enter in your Share This URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Skype Profile", "js_composer"),
		  	"param_name" => "skype",
		  	"description" => __("Please enter in your Skype URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Soundcloud Profile", "js_composer"),
		  	"param_name" => "soundcloud",
		  	"description" => __("Please enter in your Soundcloud URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("StumbleUpon Profile", "js_composer"),
		  	"param_name" => "stumbleupon",
		  	"description" => __("Please enter in your StumbleUpon URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Tumblr Profile", "js_composer"),
		  	"param_name" => "tumblr",
		  	"description" => __("Please enter in your Tumblr URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Twitter Profile", "js_composer"),
		  	"param_name" => "twitter",
		  	"description" => __("Please enter in your Twitter URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Viddler Profile", "js_composer"),
		  	"param_name" => "viddler",
		  	"description" => __("Please enter in your Viddler URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Vimeo Profile", "js_composer"),
		  	"param_name" => "vimeo",
		  	"description" => __("Please enter in your Vimeo URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Virb Profile", "js_composer"),
		  	"param_name" => "virb",
		  	"description" => __("Please enter in your Virb URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Wordpress Profile", "js_composer"),
		  	"param_name" => "wordpress",
		  	"description" => __("Please enter in your Wordpress URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Yahoo Profile", "js_composer"),
		  	"param_name" => "yahoo",
		  	"description" => __("Please enter in your Yahoo URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Yelp Profile", "js_composer"),
		  	"param_name" => "yelp",
		  	"description" => __("Please enter in your Yelp URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("You Tube Profile", "js_composer"),
		  	"param_name" => "youtube",
		  	"description" => __("Please enter in your You Tube URL.", "js_composer"),
		  	"value" => ""
		),

		array( 
		  	"type" => "textfield",
		  	"heading" => __("Zerply Profile", "js_composer"),
		  	"param_name" => "zerply",
		  	"description" => __("Please enter in your Zerply URL.", "js_composer"),
		  	"value" => ""
		),

		array(
	      	"type" => "textfield",
	      	"heading" => __("Extra class name", "js_composer"),
	      	"param_name" => "el_class",
	      	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
	    )
  	)
));

/*-----------------------------------------------------------------------------------*/
/*	Button
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
	"name" => __("Button", "js_composer"),
  	"base" => "az_buttons",
  	"icon" => "icon-wpb-btn",
  	"category" => __('Content', 'js_composer'),
  	"params" => array(
		
		array(
      		"type" => "textfield",
      		"heading" => __("Button Label", "js_composer"),
      		"param_name" => "buttonlabel",
      		"description" => __("This is the text that appears on your button.", "js_composer"),
	  		"value" => "Button Title",
	  		"admin_label" => false
    	),
	
		array(
	      	"type" => "textfield",
	      	"heading" => __("Button Link", "js_composer"),
	      	"param_name" => "buttonlink",
	      	"description" => __("Where should your button link to?", "js_composer"),
		  	"admin_label" => false
	    ),
	
		array(
		  	"type" => "dropdown",
		  	"heading" => __("Button Link Target", "js_composer"),
		  	"param_name" => "target",
		  	"value" => $target_arr
		),
		
		array(
		  	"type" => "dropdown",
		  	"heading" => __("Button Size", "js_composer"),
		  	"param_name" => "buttonsize",
		  	"value" => array(__("Mini", "js_composer") => "button-mini", __("Small", "js_composer") => "button-small", __("Medium", "js_composer") => "button-medium", __("Large", "js_composer") => "button-large"),
		  	"admin_label" => false
		),
		
		array(
	      	"type" => "dropdown",
	      	"heading" => __("Button Color", "js_composer"),
	      	"param_name" => "buttoncolor",
	      	"value" => array(__("Theme Color Default", "js_composer") => "", __("Custom Color", "js_composer") => "custom"),
	      	"description" => __("Choose a color for your button here.", "js_composer"),
	      	"admin_label" => false
	    ),
	    
	    array(
	      	"type" => "colorpicker",
	      	"heading" => __("Button Custom Color", "js_composer"),
	      	"param_name" => "custombuttoncolor",
	      	"description" => __("Select custom color for button.", "js_composer"),
	      	"dependency" => Array('element' => "buttoncolor", 'value' => array('custom'))
	    ),
		
		array(
		  	"type" => 'checkbox',
		  	"heading" => __("Inverted Color?", "js_composer"),
		  	"param_name" => "inverted",
		  	"value" => Array(__("Yes, please", "js_composer") => 'yes')
		),
		
		array(
	      	"type" => "dropdown",
	      	"heading" => __("Icon", "js_composer"),
	      	"param_name" => "checkicon",
	      	"value" => array(__("No Icon", "js_composer") => "no_icon", __("Yes, Display Icon", "js_composer") => "custom_icon"),
	      	"description" => __("Should an icon be displayed at the left side of the progress bar.", "js_composer"),
	      	"admin_label" => false
	    ),

		array(
	      	"type" => "icons",
	      	"heading" => __("Icon", "js_composer"),
	      	"param_name" => "icon",
	      	"value" => $fonticon_arr,
		  	"dependency" => Array('element' => "checkicon", 'value' => array('custom_icon'))
	    ),

	    $animated_choice,
		$animated_effects,
		$animated_delay,

		array(
	      	"type" => "textfield",
	      	"heading" => __("Extra class name", "js_composer"),
	      	"param_name" => "el_class",
	      	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
	    )
  	)
));

/*-----------------------------------------------------------------------------------*/
/*	Raw HTML / JS
/*-----------------------------------------------------------------------------------*/

wpb_map(array(
  	"name" => __("Raw HTML", "js_composer"),
	"base" => "vc_raw_html",
	"icon" => "icon-wpb-html-raw",
	"category" => __('Content', 'js_composer'),
	"wrapper_class" => "clearfix",
	"params" => array(
		array(
  			"type" => "textarea_raw_html",
			"holder" => "div",
			"heading" => __("Raw HTML", "js_composer"),
			"param_name" => "content",
			"value" => base64_encode("<p>I am raw html block.<br/>Click edit button to change this html</p>"),
			"description" => __("Enter your HTML content.", "js_composer")
		)
	)
));

wpb_map(array(
	"name" => __("Raw JS", "js_composer"),
	"base" => "vc_raw_js",
	"icon" => "icon-wpb-html-js",
	"category" => __('Content', 'js_composer'),
	"wrapper_class" => "clearfix",
	"params" => array(
  		array(
  			"type" => "textarea_raw_html",
			"holder" => "div",
			"heading" => __("Raw js", "js_composer"),
			"param_name" => "content",
			"value" => __(base64_encode("<script type='text/javascript'> alert('Enter your js here!'); </script>"), "js_composer"),
			"description" => __("Enter your JS code.", "js_composer")
		)
	)
));


/*-----------------------------------------------------------------------------------*/
/*	Support for 3rd Party plugins
/*-----------------------------------------------------------------------------------*/

// Contact form 7 plugin
include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); // Require plugin.php to use is_plugin_active() below
if (is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
  global $wpdb;
  $cf7 = $wpdb->get_results( 
  	"
  	SELECT ID, post_title 
  	FROM $wpdb->posts
  	WHERE post_type = 'wpcf7_contact_form' 
  	"
  );
  $contact_forms = array();
  if ($cf7) {
    foreach ( $cf7 as $cform ) {
      $contact_forms[$cform->post_title] = $cform->ID;
    }
  } else {
    $contact_forms["No contact forms found"] = 0;
  }
  wpb_map(array(
  	"base" => "contact-form-7",
    "name" => __("Contact Form 7", "js_composer"),
    "icon" => "icon-wpb-contactform",
    "category" => __('Content', 'js_composer'),
    "params" => array(
    	array(
        	"type" => "textfield",
        	"heading" => __("Form title", "js_composer"),
        	"param_name" => "title",
        	"admin_label" => false,
        	"description" => __("What text use as form title. Leave blank if no title is needed.", "js_composer")
      	),
      	
      	array(
        	"type" => "dropdown",
        	"heading" => __("Select contact form", "js_composer"),
        	"param_name" => "id",
        	"value" => $contact_forms,
        	"description" => __("Choose previously created contact form from the drop down list.", "js_composer")
      	)
    )
  ));
} // if contact form7 plugin active

if (is_plugin_active('revslider/revslider.php')) {
  global $wpdb;
  $rs = $wpdb->get_results( 
  	"
  	SELECT id, title, alias
  	FROM ".$wpdb->prefix."revslider_sliders
  	ORDER BY id ASC LIMIT 100
  	"
  );
  $revsliders = array();
  if ($rs) {
    foreach ( $rs as $slider ) {
      $revsliders[$slider->title] = $slider->alias;
    }
  } else {
    $revsliders["No sliders found"] = 0;
  }
  wpb_map(array(
    "base" => "rev_slider_vc",
    "name" => __("Revolution Slider", "js_composer"),
    "icon" => "icon-wpb-revslider",
    "category" => __('Content', 'js_composer'),
    "params"=> array(
    	array(
        	"type" => "textfield",
        	"heading" => __("Widget title", "js_composer"),
        	"param_name" => "title",
        	"description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
      	),
      
      	array(
        	"type" => "dropdown",
        	"heading" => __("Revolution Slider", "js_composer"),
        	"param_name" => "alias",
        	"admin_label" => false,
        	"value" => $revsliders,
        	"description" => __("Select your Revolution Slider.", "js_composer")
      	),
      
      	array(
        	"type" => "textfield",
        	"heading" => __("Extra class name", "js_composer"),
        	"param_name" => "el_class",
        	"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
      	)
    )
  ));
} // if revslider plugin active


WPBMap::layout(array('id'=>'column_12', 'title'=>'1/2'));
WPBMap::layout(array('id'=>'column_12-12', 'title'=>'1/2 + 1/2'));
WPBMap::layout(array('id'=>'column_13', 'title'=>'1/3'));
WPBMap::layout(array('id'=>'column_13-13-13', 'title'=>'1/3 + 1/3 + 1/3'));
WPBMap::layout(array('id'=>'column_13-23', 'title'=>'1/3 + 2/3'));
WPBMap::layout(array('id'=>'column_14', 'title'=>'1/4'));
WPBMap::layout(array('id'=>'column_14-14-14-14', 'title'=>'1/4 + 1/4 + 1/4 + 1/4'));
WPBMap::layout(array('id'=>'column_16', 'title'=>'1/6'));
WPBMap::layout(array('id'=>'column_11', 'title'=>'1/1'));