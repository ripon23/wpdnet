<?php
/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version 	1.0.0
 * 
 * Content Composer Attributes Filters
 * Created by CMSMasters
 * 
 */



/* Register Admin Panel JS Scripts */
function charity_ngo_register_admin_js_scripts() {
	global $pagenow;
	
	$cmsmasters_option = charity_ngo_get_global_options();
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('charity-ngo-composer-shortcodes-extend', get_template_directory_uri() . '/cmsmasters-c-c/js/cmsmasters-c-c-shortcodes-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('charity-ngo-composer-shortcodes-extend', 'composer_shortcodes_extend', array( 
			'blog_field_layout_mode_puzzle' => 						esc_attr__('Puzzle', 'charity-ngo'), 
			'quotes_field_slider_type_title' => 					esc_attr__('Slider Type', 'charity-ngo'), 
			'quotes_field_slider_type_descr' => 					esc_attr__('Choose your quotes slider style type', 'charity-ngo'), 
			'quotes_field_type_choice_box' => 						esc_attr__('Boxed', 'charity-ngo'), 
			'quotes_field_type_choice_center' => 					esc_attr__('Centered', 'charity-ngo'),
			'quotes_field_item_color_title' => 						esc_attr__('Color', 'charity-ngo'),
			'quotes_field_item_color_descr' => 						esc_attr__('Enter this quote custom color', 'charity-ngo'),
			'cmsmasters_featured_block_resp_padding_check' => 		esc_attr__('Enable Padding On Responsive', 'charity-ngo'),
			'cmsmasters_featured_block_resp_padding_check_descr' => esc_attr__('Enable to set padding top\bottom on responsive', 'charity-ngo'),
			'cmsmasters_featured_block_resp_padding' => 			esc_attr__('Padding On Responsive', 'charity-ngo'),
			'cmsmasters_featured_block_medium_tablet' => 			esc_attr__('1024px', 'charity-ngo'),
			'cmsmasters_featured_block_small_tablet' => 			esc_attr__('768px', 'charity-ngo'),
			'cmsmasters_featured_block_big_phone' => 				esc_attr__('600px', 'charity-ngo'),
			'cmsmasters_featured_block_normal_phone' => 			esc_attr__('540px', 'charity-ngo'),
			'cmsmasters_featured_block_small_phone' => 				esc_attr__('320px', 'charity-ngo'),
			'cmsmasters_featured_block_resp_padding_top' => 		esc_attr__('Featured Block Top Padding On Responsive', 'charity-ngo'),
			'cmsmasters_featured_block_resp_padding_bottom' => 		esc_attr__('Featured Block Bottom Padding On Responsive', 'charity-ngo'),
			'cmsmasters_featured_block_border_width_title' => 		esc_attr__('Featured Block Border Width', 'charity-ngo'),
			'cmsmasters_featured_block_border_style_title' => 		esc_attr__('Featured Block Border Style', 'charity-ngo'),
			'cmsmasters_featured_block_border_color_title' => 		esc_attr__('Featured Block Border Color', 'charity-ngo'),
			'cmsmasters_featured_block_border_color_descr' => 		esc_attr__('Choose your custom featured block border color', 'charity-ngo'),
			'featured_campaign_color_title' => 						esc_attr__('Campaign progress color', 'charity-ngo'),
			'featured_campaign_color' => 							$cmsmasters_option['charity-ngo' . '_default' . '_link']
		));
	}
}

add_action('admin_enqueue_scripts', 'charity_ngo_register_admin_js_scripts');



// Quotes Shortcode Attributes Filter
add_filter('cmsmasters_quotes_atts_filter', 'cmsmasters_quotes_atts');

function cmsmasters_quotes_atts() {
	return array( 
		'shortcode_id' => 		'', 
		'mode' => 				'grid', 
		'type' => 				'boxed', 
		'columns' => 			'3', 
		'speed' => 				'10', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


// Featured Campaign Shortcode Attributes Filter
add_filter('cmsmasters_featured_block_atts_filter', 'cmsmasters_featured_block_atts');

function cmsmasters_featured_block_atts() {
	return array( 
		'shortcode_id' => 		'', 
		'text_width' => 		'100', 
		'text_position' => 		'center', 
		'text_padding' => 		'', 
		'text_align' => 		'left', 
		'color_overlay' => 		'', 
		'fb_bg_color' => 		'', 
		'bg_img' => 			'', 
		'bg_position' => 		'', 
		'bg_repeat' => 			'', 
		'bg_attachment' => 		'', 
		'bg_size' => 			'', 
		'top_padding' => 		'', 
		'bottom_padding' => 	'', 
		'resp_padding_check' =>	'', 
		'resp_padding' => 		'', 
		'resp_padding_top' => 	'', 
		'resp_padding_bottom' =>'', 
		'border_radius' => 		'',
		'border_width' =>		'',	
		'border_style' =>		'',	
		'border_color' =>		'',	
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


// Featured Campaign Shortcode Attributes Filter
add_filter('cmsmasters_featured_campaign_atts_filter', 'cmsmasters_featured_campaign_atts');

function cmsmasters_featured_campaign_atts() {
	return array( 
		'campaign' => 			'', 
		'campaign_metadata' => 	'', 
		'campaign_color' => 	'', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}