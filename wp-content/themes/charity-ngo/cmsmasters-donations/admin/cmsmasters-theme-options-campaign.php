<?php 
/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version		1.0.0
 * 
 * Donations Campaign Options Functions
 * Created by CMSMasters
 * 
 */


if (!function_exists('charity_ngo_get_custom_campaign_meta_fields')) {
function charity_ngo_get_custom_campaign_meta_fields() {
	$cmsmasters_option = charity_ngo_get_global_options();


	$cmsmasters_global_donations_campaign_layout = (isset($cmsmasters_option['charity-ngo' . '_donations_campaign_layout']) && $cmsmasters_option['charity-ngo' . '_donations_campaign_layout'] !== '') ? $cmsmasters_option['charity-ngo' . '_donations_campaign_layout'] : 'r_sidebar';

	$cmsmasters_global_bottom_sidebar = (isset($cmsmasters_option['charity-ngo' . '_bottom_sidebar']) && $cmsmasters_option['charity-ngo' . '_bottom_sidebar'] !== '') ? (($cmsmasters_option['charity-ngo' . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';

	$cmsmasters_global_bottom_sidebar_layout = (isset($cmsmasters_option['charity-ngo' . '_bottom_sidebar_layout'])) ? $cmsmasters_option['charity-ngo' . '_bottom_sidebar_layout'] : '14141414';

	$cmsmasters_global_bg = (isset($cmsmasters_option['charity-ngo' . '_theme_layout']) && $cmsmasters_option['charity-ngo' . '_theme_layout'] === 'boxed') ? true : false;


	$cmsmasters_global_donations_campaign_title = (isset($cmsmasters_option['charity-ngo' . '_donations_campaign_title']) && $cmsmasters_option['charity-ngo' . '_donations_campaign_title'] !== '') ? (($cmsmasters_option['charity-ngo' . '_donations_campaign_title'] == 1) ? 'true' : 'false') : 'true';

	$cmsmasters_global_donations_campaign_share_box = (isset($cmsmasters_option['charity-ngo' . '_donations_campaign_share_box']) && $cmsmasters_option['charity-ngo' . '_donations_campaign_share_box'] !== '') ? (($cmsmasters_option['charity-ngo' . '_donations_campaign_share_box'] == 1) ? 'true' : 'false') : 'true';

	$cmsmasters_global_donations_campaign_author_box = (isset($cmsmasters_option['charity-ngo' . '_donations_campaign_author_box']) && $cmsmasters_option['charity-ngo' . '_donations_campaign_author_box'] !== '') ? (($cmsmasters_option['charity-ngo' . '_donations_campaign_author_box'] == 1) ? 'true' : 'false') : 'true';

	$cmsmasters_global_donations_more_campaigns_box = (isset($cmsmasters_option['charity-ngo' . '_donations_more_campaigns_box'])) ? $cmsmasters_option['charity-ngo' . '_donations_more_campaigns_box'] : 'related';


	$cmsmasters_option_name = 'cmsmasters_campaign_';


	$tabs_array = array();


	$tabs_array['cmsmasters_campaign'] = array( 
		'label' => esc_html__('Campaign', 'charity-ngo'), 
		'value'	=> 'cmsmasters_campaign' 
	);


	$tabs_array['cmsmasters_layout'] = array( 
		'label' => esc_html__('Layout', 'charity-ngo'), 
		'value'	=> 'cmsmasters_layout' 
	);


	if ($cmsmasters_global_bg) {
		$tabs_array['cmsmasters_bg'] = array( 
			'label' => esc_html__('Background', 'charity-ngo'), 
			'value'	=> 'cmsmasters_bg' 
		);
	}


	$tabs_array['cmsmasters_heading'] = array( 
		'label' => esc_html__('Heading', 'charity-ngo'), 
		'value'	=> 'cmsmasters_heading' 
	);


	$custom_campaign_meta_fields = array( 
		array( 
			'id'	=> $cmsmasters_option_name . 'tabs', 
			'type'	=> 'tabs', 
			'std'	=> 'cmsmasters_campaign', 
			'options' => $tabs_array 
		), 
		array( 
			'id'	=> 'cmsmasters_campaign', 
			'type'	=> 'tab_start', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> esc_html__('Campaign Target', 'charity-ngo'), 
			'desc'	=> esc_html__('do not add currency symbol', 'charity-ngo'), 
			'id'	=> $cmsmasters_option_name . 'target', 
			'type'	=> 'number', 
			'hide'	=> '', 
			'std'	=> '0', 
			'min' 	=> '0', 
			'max' 	=> '', 
			'step' 	=> '10', 
			'size' 	=> '10' 
		), 
		array( 
			'label'	=> esc_html__('Campaign Funds', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'funds', 
			'type'	=> 'funds', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Campaign Title', 'charity-ngo'), 
			'desc'	=> esc_html__('Show', 'charity-ngo'), 
			'id'	=> $cmsmasters_option_name . 'title', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_donations_campaign_title 
		), 
		array( 
			'label'	=> esc_html__('Sharing Box', 'charity-ngo'), 
			'desc'	=> esc_html__('Show', 'charity-ngo'), 
			'id'	=> $cmsmasters_option_name . 'sharing_box', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_donations_campaign_share_box 
		), 
		array( 
			'label'	=> esc_html__('About Author Box', 'charity-ngo'), 
			'desc'	=> esc_html__('Show', 'charity-ngo'), 
			'id'	=> $cmsmasters_option_name . 'author_box', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_donations_campaign_author_box 
		), 
		array( 
			'label'	=> esc_html__('More Posts Box', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'more_posts', 
			'type'	=> 'select', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_donations_more_campaigns_box, 
			'options' => array( 
				'related' => array( 
					'label' => esc_html__('Show Related Tab', 'charity-ngo'), 
					'value'	=> 'related' 
				), 
				'popular' => array( 
					'label' => esc_html__('Show Popular Tab', 'charity-ngo'), 
					'value'	=> 'popular' 
				), 
				'recent' => array( 
					'label' => esc_html__('Show Recent Tab', 'charity-ngo'), 
					'value'	=> 'recent' 
				), 
				'hide' => array( 
					'label' => esc_html__('Hide More Posts Box', 'charity-ngo'), 
					'value'	=> 'hide' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__("'Read More' Buttons Text", 'charity-ngo'), 
			'desc'	=> esc_html__("Enter the 'Read More' button text that should be used in you campaigns shortcode", 'charity-ngo'), 
			'id'	=> $cmsmasters_option_name . 'read_more', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> esc_html__('Read More', 'charity-ngo') 
		), 
		array( 
			'id'	=> 'cmsmasters_campaign', 
			'type'	=> 'tab_finish' 
		), 
		array( 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Page Color Scheme', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_page_scheme', 
			'type'	=> 'select_scheme', 
			'hide'	=> 'false', 
			'std'	=> 'default' 
		), 
		array( 
			'label'	=> esc_html__('Page Layout', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'radio_img', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_donations_campaign_layout, 
			'options' => array( 
				'r_sidebar' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg', 
					'label' => esc_html__('Right Sidebar', 'charity-ngo'), 
					'value'	=> 'r_sidebar' 
				), 
				'l_sidebar' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg', 
					'label' => esc_html__('Left Sidebar', 'charity-ngo'), 
					'value'	=> 'l_sidebar' 
				), 
				'fullwidth' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg', 
					'label' => esc_html__('Full Width', 'charity-ngo'), 
					'value'	=> 'fullwidth' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__('Choose Right\Left Sidebar', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_sidebar_id', 
			'type'	=> 'select_sidebar', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Bottom Sidebar', 'charity-ngo'), 
			'desc'	=> esc_html__('Show', 'charity-ngo'), 
			'id'	=> 'cmsmasters_bottom_sidebar', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_bottom_sidebar 
		), 
		array( 
			'label'	=> esc_html__('Choose Bottom Sidebar', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bottom_sidebar_id', 
			'type'	=> 'select_sidebar', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Choose Bottom Sidebar Layout', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bottom_sidebar_layout', 
			'type'	=> 'select', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_bottom_sidebar_layout, 
			'options' => array( 
				'11' => array( 
					'label' => '1/1',
					'value'	=> '11' 
				), 
				'1212' => array( 
					'label' => '1/2 + 1/2',
					'value'	=> '1212' 
				), 
				'1323' => array( 
					'label' => '1/3 + 2/3',
					'value'	=> '1323' 
				), 
				'2313' => array( 
					'label' => '2/3 + 1/3',
					'value'	=> '2313' 
				), 
				'1434' => array( 
					'label' => '1/4 + 3/4',
					'value'	=> '1434' 
				), 
				'3414' => array( 
					'label' => '3/4 + 1/4',
					'value'	=> '3414' 
				), 
				'131313' => array( 
					'label' => '1/3 + 1/3 + 1/3',
					'value'	=> '131313' 
				), 
				'121414' => array( 
					'label' => '1/2 + 1/4 + 1/4',
					'value'	=> '121414' 
				), 
				'141214' => array( 
					'label' => '1/4 + 1/2 + 1/4',
					'value'	=> '141214' 
				), 
				'141412' => array( 
					'label' => '1/4 + 1/4 + 1/2',
					'value'	=> '141412' 
				), 
				'14141414' => array( 
					'label' => '1/4 + 1/4 + 1/4 + 1/4',
					'value'	=> '14141414' 
				) 
			) 
		), 
		array( 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'tab_finish' 
		) 
	);


	return $custom_campaign_meta_fields;
}
}