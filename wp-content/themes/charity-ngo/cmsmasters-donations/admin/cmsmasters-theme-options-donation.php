<?php 
/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version		1.0.0
 * 
 * Donation Options Functions
 * Created by CMSMasters
 * 
 */


if (!function_exists('charity_ngo_get_custom_donation_meta_fields')) {
function charity_ngo_get_custom_donation_meta_fields() {
	$cmsmasters_option = charity_ngo_get_global_options();


	$cmsmasters_global_bottom_sidebar = (isset($cmsmasters_option['charity-ngo' . '_bottom_sidebar']) && $cmsmasters_option['charity-ngo' . '_bottom_sidebar'] !== '') ? (($cmsmasters_option['charity-ngo' . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';

	$cmsmasters_global_bottom_sidebar_layout = (isset($cmsmasters_option['charity-ngo' . '_bottom_sidebar_layout'])) ? $cmsmasters_option['charity-ngo' . '_bottom_sidebar_layout'] : '14141414';

	$cmsmasters_global_bg = (isset($cmsmasters_option['charity-ngo' . '_theme_layout']) && $cmsmasters_option['charity-ngo' . '_theme_layout'] === 'boxed') ? true : false;


	$tabs_array = array();


	$tabs_array['cmsmasters_donation'] = array( 
		'label' => esc_html__('Donation', 'charity-ngo'), 
		'value'	=> 'cmsmasters_donation' 
	);


	$tabs_array['cmsmasters_donator'] = array( 
		'label' => esc_html__('Donator', 'charity-ngo'), 
		'value'	=> 'cmsmasters_donator' 
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


	$custom_donation_meta_fields = array( 
		array( 
			'id'	=> 'cmsmasters_donation_tabs', 
			'type'	=> 'tabs', 
			'std'	=> 'cmsmasters_donation', 
			'options' => $tabs_array 
		), 
		array( 
			'id'	=> 'cmsmasters_donation', 
			'type'	=> 'tab_start', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> esc_html__('Amount', 'charity-ngo'), 
			'desc'	=> esc_html__('do not add currency symbol. Note: changes apply only to appearance, not to money transfer process.', 'charity-ngo'), 
			'id'	=> 'cmsmasters_donation_amount', 
			'type'	=> 'number', 
			'hide'	=> '', 
			'std'	=> '', 
			'min' 	=> '1', 
			'max' 	=> '', 
			'step' 	=> '1' 
		), 
		array( 
			'label'	=> esc_html__('Recurrence', 'charity-ngo'), 
			'desc'	=> esc_html__('Choose whether and how often you want to repeat this donation. Note: changes apply only to appearance, not to money transfer process.', 'charity-ngo'), 
			'id'	=> 'cmsmasters_recurrence_period', 
			'type'	=> 'radio', 
			'hide'	=> '', 
			'std'	=> '1', 
			'options' => array( 
				'1' => array( 
					'label' => esc_html__('Not recurring', 'charity-ngo'), 
					'value'	=> '1' 
				), 
				'7' => array( 
					'label' => esc_html__('Weekly', 'charity-ngo'), 
					'value'	=> '7' 
				), 
				'30' => array( 
					'label' => esc_html__('Monthly', 'charity-ngo'), 
					'value'	=> '30' 
				), 
				'365' => array( 
					'label' => esc_html__('Yearly', 'charity-ngo'), 
					'value'	=> '365' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__('Campaign', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_donation_campaign', 
			'type'	=> 'select', 
			'hide'	=> '', 
			'std'	=> '', 
			'options' => cmsmasters_get_donation_campaigns() 
		), 
		array( 
			'label'	=> esc_html__('Hide Donator Information?', 'charity-ngo'), 
			'desc'	=> esc_html__('Yes', 'charity-ngo'), 
			'id'	=> 'cmsmasters_anonymous_donation', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> 'false' 
		), 
		array( 
			'label'	=> esc_html__('Donations Navigation Box', 'charity-ngo'), 
			'desc'	=> esc_html__('Show', 'charity-ngo'), 
			'id'	=> 'cmsmasters_donation_nav_box', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> 'true' 
		), 
		array( 
			'id'	=> 'cmsmasters_donation', 
			'type'	=> 'tab_finish' 
		), 
		array( 
			'id'	=> 'cmsmasters_donator', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Donator Details Title', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_donator_details_title', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> 'Details' 
		), 
		array( 
			'label'	=> esc_html__('First Name', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_donator_firstname', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Last Name', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_donator_lastname', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Email', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_donator_email', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Company', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_donator_company', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Address', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_donator_address', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('City', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_donator_city', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('State / Province', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_donator_state', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Postal / Zip Code', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_donator_zip', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Country', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_donator_country', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Phone Number', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_donator_phone', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Website', 'charity-ngo'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_donator_website', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'id'	=> 'cmsmasters_donator', 
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
	
	
	return $custom_donation_meta_fields;
}
}


/* Get Donation Campaigns Array For Select */
function cmsmasters_get_donation_campaigns() {
	$campaigns = get_posts(array( 
		'post_type' => 			'campaign', 
		'orderby' => 			'post_date', 
	    'order' => 				'ASC', 
	    'posts_per_page' => 	-1 
	) );
	
	
	$array = array();
	
	
	$array[''] = array( 
		'label' => 	esc_html__('No special campaign', 'charity-ngo'), 
		'value' => 	'' 
	);
	
	
	foreach ($campaigns as $campaign) {
		$array[$campaign->ID] = array( 
			'label' => 	$campaign->post_title, 
			'value' => 	$campaign->ID 
		);
	}
	
	
	return $array;
}

