<?php 
/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version 	1.0.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function charity_ngo_options_general_tabs() {
	$cmsmasters_option = charity_ngo_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'charity-ngo');
	
	if ($cmsmasters_option['charity-ngo' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'charity-ngo');
	}
	
	$tabs['header'] = esc_attr__('Header', 'charity-ngo');
	$tabs['content'] = esc_attr__('Content', 'charity-ngo');
	$tabs['footer'] = esc_attr__('Footer', 'charity-ngo');
	
	return $tabs;
}


function charity_ngo_options_general_sections() {
	$tab = charity_ngo_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'charity-ngo');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'charity-ngo');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'charity-ngo');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'charity-ngo');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'charity-ngo');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return $sections;
} 


function charity_ngo_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = charity_ngo_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'charity-ngo' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'liquid', 
			'choices' => array( 
				esc_html__('Liquid', 'charity-ngo') . '|liquid', 
				esc_html__('Boxed', 'charity-ngo') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'charity-ngo' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'image', 
			'choices' => array( 
				esc_html__('Image', 'charity-ngo') . '|image', 
				esc_html__('Text', 'charity-ngo') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'charity-ngo' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'charity-ngo'), 
			'desc' => esc_html__('Choose your website logo image.', 'charity-ngo'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'charity-ngo' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'charity-ngo'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one', 'charity-ngo'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'charity-ngo' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ((get_bloginfo('name')) ? get_bloginfo('name') : 'Charity NGO'), 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'charity-ngo' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'charity-ngo' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'charity-ngo'), 
			'desc' => esc_html__('enable', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'charity-ngo' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'charity-ngo' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'charity-ngo' . '_bg_col', 
			'title' => esc_html__('Background Color', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'charity-ngo' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'charity-ngo' . '_bg_img', 
			'title' => esc_html__('Background Image', 'charity-ngo'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'charity-ngo'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'charity-ngo' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_html__('No Repeat', 'charity-ngo') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'charity-ngo') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'charity-ngo') . '|repeat-y', 
				esc_html__('Repeat', 'charity-ngo') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'charity-ngo' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				esc_html__('Top Left', 'charity-ngo') . '|top left', 
				esc_html__('Top Center', 'charity-ngo') . '|top center', 
				esc_html__('Top Right', 'charity-ngo') . '|top right', 
				esc_html__('Center Left', 'charity-ngo') . '|center left', 
				esc_html__('Center Center', 'charity-ngo') . '|center center', 
				esc_html__('Center Right', 'charity-ngo') . '|center right', 
				esc_html__('Bottom Left', 'charity-ngo') . '|bottom left', 
				esc_html__('Bottom Center', 'charity-ngo') . '|bottom center', 
				esc_html__('Bottom Right', 'charity-ngo') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'charity-ngo' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_html__('Scroll', 'charity-ngo') . '|scroll', 
				esc_html__('Fixed', 'charity-ngo') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'charity-ngo' . '_bg_size', 
			'title' => esc_html__('Background Size', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_html__('Auto', 'charity-ngo') . '|auto', 
				esc_html__('Cover', 'charity-ngo') . '|cover', 
				esc_html__('Contain', 'charity-ngo') . '|contain' 
			) 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'charity-ngo'), 
			'desc' => esc_html__('enable', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content', 'charity-ngo'), 
			'desc' => esc_html__('enable', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'charity-ngo'), 
			'desc' => esc_html__('pixels', 'charity-ngo'), 
			'type' => 'number', 
			'std' => '32', 
			'min' => '30' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'charity-ngo'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'charity-ngo') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				esc_html__('None', 'charity-ngo') . '|none', 
				esc_html__('Top Line Social Icons', 'charity-ngo') . '|social', 
				esc_html__('Top Line Navigation', 'charity-ngo') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'fullwidth', 
			'choices' => array( 
				esc_html__('Fullwidth Header Style', 'charity-ngo') . '|fullwidth', 
				esc_html__('Middle Header Style', 'charity-ngo') . '|default', 
				esc_html__('Compact Style Left Navigation', 'charity-ngo') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'charity-ngo') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'charity-ngo') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'charity-ngo'), 
			'desc' => esc_html__('pixels', 'charity-ngo'), 
			'type' => 'number', 
			'std' => '86', 
			'min' => '80' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'charity-ngo'), 
			'desc' => esc_html__('pixels', 'charity-ngo'), 
			'type' => 'number', 
			'std' => '60', 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_header_search', 
			'title' => esc_html__('Header Search', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
	if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_header_donations_but', 
			'title' => esc_html__('Header Donations Button', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_header_donations_but_text', 
			'title' => esc_html__('Header Donations Button Text', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => esc_html__('Donate', 'charity-ngo'), 
			'class' => 'nohtml' 
		);
	}
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'none', 
			'choices' => array( 
				esc_html__('None', 'charity-ngo') . '|none', 
				esc_html__('Header Social Icons', 'charity-ngo') . '|social', 
				esc_html__('Header Custom HTML', 'charity-ngo') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'charity-ngo' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'charity-ngo'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'charity-ngo') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
	if (CMSMASTERS_EVENTS_CALENDAR) {
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_events_layout', 
			'title' => esc_html__('Events Calendar Layout Type', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
	}
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'charity-ngo'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'charity-ngo') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'center', 
			'choices' => array( 
				esc_html__('Left', 'charity-ngo') . '|left', 
				esc_html__('Right', 'charity-ngo') . '|right', 
				esc_html__('Center', 'charity-ngo') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_heading_scheme', 
			'title' => esc_html__('Heading Custom Color Scheme by Default', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'first', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'charity-ngo'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'charity-ngo'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/heading_bg.jpg', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_html__('No Repeat', 'charity-ngo') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'charity-ngo') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'charity-ngo') . '|repeat-y', 
				esc_html__('Repeat', 'charity-ngo') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_html__('Scroll', 'charity-ngo') . '|scroll', 
				esc_html__('Fixed', 'charity-ngo') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_html__('Auto', 'charity-ngo') . '|auto', 
				esc_html__('Cover', 'charity-ngo') . '|cover', 
				esc_html__('Contain', 'charity-ngo') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'charity-ngo'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => 'rgba(35,35,35,0.3)' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'charity-ngo'), 
			'desc' => esc_html__('pixels', 'charity-ngo'), 
			'type' => 'number', 
			'std' => '300', 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Custom Color Scheme', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'second', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'charity-ngo' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => '14141414', 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'charity-ngo' . '_footer_scheme', 
			'title' => esc_html__('Footer Custom Color Scheme', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'charity-ngo' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'small', 
			'choices' => array( 
				esc_html__('With logo', 'charity-ngo') . '|default', 
				esc_html__('Small', 'charity-ngo') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'charity-ngo' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				esc_html__('None', 'charity-ngo') . '|none', 
				esc_html__('Footer Navigation', 'charity-ngo') . '|nav', 
				esc_html__('Social Icons', 'charity-ngo') . '|social', 
				esc_html__('Custom HTML', 'charity-ngo') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'charity-ngo' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'charity-ngo' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'charity-ngo'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'charity-ngo'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'charity-ngo' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'charity-ngo'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'charity-ngo'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'charity-ngo' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'charity-ngo' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'charity-ngo' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'charity-ngo'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'charity-ngo') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'charity-ngo' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '&copy; 2017 ' . 'Charity NGO', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

