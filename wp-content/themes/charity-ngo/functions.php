<?php
/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version		1.0.0
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */



/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('charity_ngo_system_fonts_list')) {
	function charity_ngo_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Google Fonts List
if (!function_exists('charity_ngo_get_google_fonts_list')) {
	function charity_ngo_get_google_fonts_list() {
		$fonts = array( 
			'' => esc_html__('None', 'charity-ngo'), 
			'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic' => 'Titillium Web', 
			'Roboto:300,300italic,400,400italic,500,500italic,700,700italic' => 'Roboto', 
			'Roboto+Condensed:400,400italic,700,700italic' => 'Roboto Condensed', 
			'Open+Sans:300,300italic,400,400italic,700,700italic' => 'Open Sans', 
			'Open+Sans+Condensed:300,300italic,700' => 'Open Sans Condensed', 
			'Crimson+Text:400,400italic,700,700italic' => 'Crimson Text', 
			'Droid+Sans:400,700' => 'Droid Sans', 
			'Droid+Serif:400,400italic,700,700italic' => 'Droid Serif', 
			'PT+Sans:400,400italic,700,700italic' => 'PT Sans', 
			'PT+Sans+Caption:400,700' => 'PT Sans Caption', 
			'PT+Sans+Narrow:400,700' => 'PT Sans Narrow', 
			'PT+Serif:400,400italic,700,700italic' => 'PT Serif', 
			'Ubuntu:400,400italic,700,700italic' => 'Ubuntu', 
			'Ubuntu+Condensed' => 'Ubuntu Condensed', 
			'Headland+One' => 'Headland One', 
			'Source+Sans+Pro:300,300italic,400,400italic,700,700italic' => 'Source Sans Pro', 
			'Lato:400,400italic,700,700italic' => 'Lato', 
			'Cuprum:400,400italic,700,700italic' => 'Cuprum', 
			'Oswald:300,400,700' => 'Oswald', 
			'Yanone+Kaffeesatz:300,400,700' => 'Yanone Kaffeesatz', 
			'Lobster' => 'Lobster', 
			'Lobster+Two:400,400italic,700,700italic' => 'Lobster Two', 
			'Questrial' => 'Questrial', 
			'Raleway:300,400,500,600,700' => 'Raleway', 
			'Dosis:300,400,500,700' => 'Dosis', 
			'Cutive+Mono' => 'Cutive Mono', 
			'Quicksand:300,400,700' => 'Quicksand', 
			'Montserrat:400,700' => 'Montserrat', 
			'Cookie' => 'Cookie', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('charity_ngo_text_transform_list')) {
	function charity_ngo_text_transform_list() {
		$list = array( 
			'none' => esc_html__('none', 'charity-ngo'), 
			'uppercase' => esc_html__('uppercase', 'charity-ngo'), 
			'lowercase' => esc_html__('lowercase', 'charity-ngo'), 
			'capitalize' => esc_html__('capitalize', 'charity-ngo'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('charity_ngo_text_decoration_list')) {
	function charity_ngo_text_decoration_list() {
		$list = array( 
			'none' => esc_html__('none', 'charity-ngo'), 
			'underline' => esc_html__('underline', 'charity-ngo'), 
			'overline' => esc_html__('overline', 'charity-ngo'), 
			'line-through' => esc_html__('line-through', 'charity-ngo'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('charity_ngo_custom_color_schemes_list')) {
	function charity_ngo_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'charity-ngo'), 
			'second' => esc_html__('Custom 2', 'charity-ngo'), 
			'third' => esc_html__('Custom 3', 'charity-ngo')
		);
		
		
		return $list;
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/


// Theme Plugin Support Constants
define('CMSMASTERS_CONTENT_COMPOSER', true);

define('CMSMASTERS_DONATIONS', true);

define('CMSMASTERS_EVENTS_SCHEDULE', false);

define('CMSMASTERS_CONTACT_FORM_BUILDER', true);

define('CMSMASTERS_MEGA_MENU', true);

define('CMSMASTERS_SERMONS', false);

if (class_exists('woocommerce')) {
	define('CMSMASTERS_WOOCOMMERCE', true);
} else {
	define('CMSMASTERS_WOOCOMMERCE', false);
}

if (class_exists('Tribe__Events__Main')) {
	define('CMSMASTERS_EVENTS_CALENDAR', true);
} else {
	define('CMSMASTERS_EVENTS_CALENDAR', false);
}

if (class_exists('PayPalDonations')) {
	define('CMSMASTERS_PAYPALDONATIONS', true);
} else {
	define('CMSMASTERS_PAYPALDONATIONS', false);
}

if (function_exists('timetable_events_init')) {
	define('CMSMASTERS_TIMETABLE', false);
} else {
	define('CMSMASTERS_TIMETABLE', false);
}

if (class_exists('TC')) {
	define('CMSMASTERS_TC_EVENTS', false);
} else {
	define('CMSMASTERS_TC_EVENTS', false);
}

if (function_exists('sb_instagram_activate')) {
	define('CMSMASTERS_INSTAGRAM_FEED', true);
} else {
	define('CMSMASTERS_INSTAGRAM_FEED', false);
}


// Theme Colored Categories Constant
define('CMSMASTERS_COLORED_CATEGORIES', true);

// Theme Projects Compatible
define('CMSMASTERS_PROJECT_COMPATIBLE', true);

// Theme Profiles Compatible
define('CMSMASTERS_PROFILE_COMPATIBLE', true);

// Developer Mode Constant
define('CMSMASTERS_DEVELOPER_MODE', true);

// Change FS Method
if (!defined('FS_METHOD')) {
	define('FS_METHOD', 'direct');
}




// Theme Image Thumbnails Size
if (!function_exists('charity_ngo_get_image_thumbnail_list')) {
	function charity_ngo_get_image_thumbnail_list() {
		$list = array( 
			'cmsmasters-small-thumb' => array( 
				'width' => 		70, 
				'height' => 	70, 
				'crop' => 		true 
			), 
			'cmsmasters-square-thumb' => array( 
				'width' => 		300, 
				'height' => 	300, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Square', 'charity-ngo') 
			), 
			'cmsmasters-blog-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	420, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Masonry Blog', 'charity-ngo') 
			), 
			'cmsmasters-project-grid-thumb' => array( 
				'width' => 		360, 
				'height' => 	360, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project Grid', 'charity-ngo') 
			), 
			'cmsmasters-project-thumb' => array( 
				'width' => 		580, 
				'height' => 	580, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project', 'charity-ngo') 
			), 
			'cmsmasters-project-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Project', 'charity-ngo') 
			), 
			'post-thumbnail' => array( 
				'width' => 		860, 
				'height' => 	500, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Featured', 'charity-ngo') 
			), 
			'cmsmasters-masonry-thumb' => array( 
				'width' => 		860, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry', 'charity-ngo') 
			), 
			'cmsmasters-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	650, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Full', 'charity-ngo') 
			), 
			'cmsmasters-project-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	700, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project Full', 'charity-ngo') 
			), 
			'cmsmasters-full-masonry-thumb' => array( 
				'width' => 		1160, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Full', 'charity-ngo') 
			) 
		);
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {
			$list['cmsmasters-event-thumb'] = array( 
				'width' => 		580, 
				'height' => 	420, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Event', 'charity-ngo') 
			);
		}
		
		
		return $list;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('charity_ngo_all_color_schemes_list')) {
	function charity_ngo_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'charity-ngo'), 
			'header' => 		esc_html__('Header', 'charity-ngo'), 
			'navigation' => 	esc_html__('Navigation', 'charity-ngo'), 
			'header_top' => 	esc_html__('Header Top', 'charity-ngo'), 
			'footer' => 		esc_html__('Footer', 'charity-ngo') 
		);
		
		
		$out = array_merge($list, charity_ngo_custom_color_schemes_list());
		
		
		return apply_filters('cmsmasters_all_color_schemes_list_filter', $out);
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('charity_ngo_color_schemes_defaults')) {
	function charity_ngo_color_schemes_defaults() {
		$list = array( 
			'default' => array( // content default color scheme
				'color' => 		'#8b8b8b', 
				'link' => 		'#d94b38', 
				'hover' => 		'#acacac', 
				'heading' => 	'#212938', 
				'bg' => 		'#f9f9f9', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#eaeaea' 
			), 
			'header' => array( // Header color scheme
				'mid_color' => 		'#ffffff', 
				'mid_link' => 		'#ffffff', 
				'mid_hover' => 		'rgba(255,255,255,0.5)', 
				'mid_bg' => 		'#1a252e', 
				'mid_bg_scroll' => 	'#1a252e', 
				'mid_border' => 	'rgba(255,255,255,0)', 
				'bot_color' => 		'#ffffff', 
				'bot_link' => 		'#ffffff', 
				'bot_hover' => 		'rgba(255,255,255,0.5)', 
				'bot_bg' => 		'#1a252e', 
				'bot_bg_scroll' => 	'#1a252e', 
				'bot_border' => 	'rgba(255,255,255,0)' 
			), 
			'navigation' => array( // Navigation color scheme
				'title_link' => 			'#ffffff', 
				'title_link_hover' => 		'#ffffff', 
				'title_link_current' => 	'#ffffff', 
				'title_link_subtitle' => 	'rgba(255,255,255,0.3)', 
				'title_link_bg' => 			'rgba(255,255,255,0)', 
				'title_link_bg_hover' => 	'#d94b38', 
				'title_link_bg_current' => 	'#d94b38', 
				'title_link_border' => 		'rgba(255,255,255,0)', 
				'dropdown_text' => 			'#ffffff', 
				'dropdown_bg' => 			'#1e2b36', 
				'dropdown_border' => 		'rgba(255,255,255,0)', 
				'dropdown_link' => 			'rgba(255,255,255,0.5)', 
				'dropdown_link_hover' => 	'#ffffff', 
				'dropdown_link_subtitle' => 'rgba(255,255,255,0.3)', 
				'dropdown_link_highlight' => 'rgba(255,255,255,0.15)', 
				'dropdown_link_border' => 	'rgba(255,255,255,0)' 
			), 
			'header_top' => array( // Header Top color scheme
				'color' => 					'#ffffff', 
				'link' => 					'#ffffff', 
				'hover' => 					'rgba(255,255,255,0.5)', 
				'bg' => 					'#212938', 
				'border' => 				'rgba(255,255,255,0)', 
				'title_link' => 			'#ffffff', 
				'title_link_hover' => 		'rgba(255,255,255,0.5)', 
				'title_link_bg' => 			'rgba(255,255,255,0)', 
				'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
				'title_link_border' => 		'rgba(255,255,255,0)', 
				'dropdown_bg' => 			'#1e2b36', 
				'dropdown_border' => 		'rgba(255,255,255,0)', 
				'dropdown_link' => 			'rgba(255,255,255,0.5)', 
				'dropdown_link_hover' => 	'#ffffff', 
				'dropdown_link_highlight' => 'rgba(255,255,255,0.15)', 
				'dropdown_link_border' => 	'rgba(255,255,255,0)' 
			), 
			'footer' => array( // Footer color scheme
				'color' => 		'#76828a', 
				'link' => 		'#76828a', 
				'hover' => 		'rgba(97,106,113,0.5)', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#1a252e', 
				'alternate' => 	'#ffffff', 
				'border' => 	'rgba(97,106,113,0.5)' 
			), 
			'first' => array( // custom color scheme 1
				'color' => 		'rgba(255,255,255,0.8)', 
				'link' => 		'#ffffff', 
				'hover' => 		'rgba(255,255,255,0.5)', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#212938', 
				'alternate' => 	'rgba(255,255,255,0)', 
				'border' => 	'rgba(255,255,255,0.4)' 
			), 
			'second' => array( // custom color scheme 2
				'color' => 		'#76828a', 
				'link' => 		'#76828a', 
				'hover' => 		'rgba(97,106,113,0.7)', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#1a252e', 
				'alternate' => 	'rgba(255,255,255,0)', 
				'border' => 	'rgba(97,106,113,0.5)' 
			), 
			'third' => array( // custom color scheme 3
				'color' => 		'rgba(255,255,255,0.4)', 
				'link' => 		'#ffffff', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#e4e4e4' 
			)
		);
		
		
		return $list;
	}
}



// CMSMasters Framework Directories Constants
define('CMSMASTERS_FRAMEWORK', get_template_directory() . '/framework');
define('CMSMASTERS_ADMIN', CMSMASTERS_FRAMEWORK . '/admin');
define('CMSMASTERS_SETTINGS', CMSMASTERS_ADMIN . '/settings');
define('CMSMASTERS_OPTIONS', CMSMASTERS_ADMIN . '/options');
define('CMSMASTERS_ADMIN_INC', CMSMASTERS_ADMIN . '/inc');
define('CMSMASTERS_CLASS', CMSMASTERS_FRAMEWORK . '/class');
define('CMSMASTERS_FUNCTION', CMSMASTERS_FRAMEWORK . '/function');
define('CMSMASTERS_COMPOSER', get_template_directory() . '/cmsmasters-c-c');



// Load Framework Parts
require_once(CMSMASTERS_CLASS . '/Browser.php');

require_once(CMSMASTERS_ADMIN_INC . '/config-functions.php');

require_once(CMSMASTERS_FUNCTION . '/theme-functions.php');

require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings.php');

require_once(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options.php');

require_once(CMSMASTERS_ADMIN_INC . '/admin-scripts.php');

require_once(CMSMASTERS_ADMIN_INC . '/plugin-activator.php');

require_once(CMSMASTERS_CLASS . '/twitteroauth.php');

require_once(CMSMASTERS_CLASS . '/widgets.php');

require_once(CMSMASTERS_FUNCTION . '/breadcrumbs.php');

require_once(CMSMASTERS_FUNCTION . '/likes.php');

require_once(CMSMASTERS_FUNCTION . '/pagination.php');

require_once(CMSMASTERS_FUNCTION . '/single-comment.php');

require_once(CMSMASTERS_FUNCTION . '/theme-fonts.php');

require_once(CMSMASTERS_FUNCTION . '/theme-colors-primary.php');

require_once(CMSMASTERS_FUNCTION . '/theme-colors-secondary.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-post.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-project.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-profile.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-shortcodes.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-widgets.php');


// Theme Colored Categories Functions
if (CMSMASTERS_COLORED_CATEGORIES) {
	require_once(CMSMASTERS_FUNCTION . '/theme-colored-categories.php');
}


if (class_exists('Cmsmasters_Content_Composer')) {
	require_once(CMSMASTERS_COMPOSER . '/filters/cmsmasters-c-c-atts-filters.php');
}


// CMSMASTERS Donations functions
if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
	require_once(get_template_directory() . '/cmsmasters-donations/function/template-functions-donation.php');
}

// Woocommerce functions
if (CMSMASTERS_WOOCOMMERCE) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-woo-functions.php');
}

// Events functions
if (CMSMASTERS_EVENTS_CALENDAR) {
	require_once(get_template_directory() . '/tribe-events/cmsmasters-events-functions.php');
}

// CMSMasters Events Schedule functions
if (CMSMASTERS_EVENTS_SCHEDULE && class_exists('Cmsmasters_Events_Schedule')) {
	require_once(get_template_directory() . '/cmsmasters-events-schedule/cmsmasters-events-schedule-functions.php');
}

// Instagram Feed functions
if (CMSMASTERS_INSTAGRAM_FEED) {
	require_once(get_template_directory() . '/instagram-feed/cmsmasters-plugin-functions.php');
}



// Load Theme Local File
if (!function_exists('charity_ngo_load_theme_textdomain')) {
	function charity_ngo_load_theme_textdomain() {
		load_theme_textdomain('charity-ngo', CMSMASTERS_FRAMEWORK . '/languages');
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'charity_ngo_load_theme_textdomain')) {
	add_action('after_setup_theme', 'charity_ngo_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('charity_ngo_theme_activation')) {
	function charity_ngo_theme_activation() {
		if (get_option('cmsmasters_active_theme') != 'charity-ngo') {
			add_option('cmsmasters_active_theme', 'charity-ngo', '', 'yes');
			
			
			charity_ngo_add_global_options();
			
			
			charity_ngo_add_global_icons();
			
			
			wp_redirect(esc_url(admin_url('admin.php?page=cmsmasters-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'charity_ngo_theme_activation');



// Framework Deactivation
if (!function_exists('charity_ngo_theme_deactivation')) {
	function charity_ngo_theme_deactivation() {
		delete_option('cmsmasters_active_theme');
	}
}

// Framework Deactivation Action
if (!has_action('switch_theme', 'charity_ngo_theme_deactivation')) {
	add_action('switch_theme', 'charity_ngo_theme_deactivation');
}



// Plugin Activation Regenerate Styles
if (!function_exists('charity_ngo_plugin_activation')) {
	function charity_ngo_plugin_activation() {
		update_option('cmsmasters_plugin_activation', 'true');
	}
}

add_action('activate_cmsmasters-donations/cmsmasters-donations.php', 'charity_ngo_plugin_activation');
add_action('activate_the-events-calendar/the-events-calendar.php', 'charity_ngo_plugin_activation');
add_action('activate_timetable/timetable.php', 'charity_ngo_plugin_activation');
add_action('activate_woocommerce/woocommerce.php', 'charity_ngo_plugin_activation');


if (!function_exists('charity_ngo_plugin_activation_regenerate')) {
	function charity_ngo_plugin_activation_regenerate() {
		if (!get_option('cmsmasters_plugin_activation')) {
			add_option('cmsmasters_plugin_activation', 'false');
		}
		
		if (get_option('cmsmasters_plugin_activation') != 'false') {
			charity_ngo_regenerate_styles();
			
			update_option('cmsmasters_plugin_activation', 'false');
		}
	}
}

add_action('init', 'charity_ngo_plugin_activation_regenerate');

