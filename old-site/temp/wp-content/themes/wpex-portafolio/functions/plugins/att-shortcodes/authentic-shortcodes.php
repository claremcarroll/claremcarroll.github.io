<?php
/*
Plugin Name: Authentic Shortcodes
Plugin URI: http://authenticthemes.com/plugins/
Description: Adds hortcodes to your theme for use with Authentic Themes
Author: Authentic Themes
Author URI: http://authenticthemes.com
Version: 1.0
License: GNU General Public License version 3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html


Include functions */
require_once( dirname(__FILE__) . '/includes/scripts.php' ); // Adds plugin JS and CSS
require_once( dirname(__FILE__) . '/includes/shortcode-functions.php'); // Main shortcode functions
require_once( dirname(__FILE__) . '/includes/mce/att_shortcodes_tinymce.php'); // Add mce buttons to post editor
