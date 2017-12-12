<?php 
/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function charity_ngo_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'charity-ngo');
	$tabs['icon'] = esc_attr__('Social Icons', 'charity-ngo');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'charity-ngo');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'charity-ngo');
	$tabs['error'] = esc_attr__('404', 'charity-ngo');
	$tabs['code'] = esc_attr__('Custom Codes', 'charity-ngo');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'charity-ngo');
	}
	
	return $tabs;
}


function charity_ngo_options_element_sections() {
	$tab = charity_ngo_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'charity-ngo');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'charity-ngo');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'charity-ngo');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'charity-ngo');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'charity-ngo');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'charity-ngo');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'charity-ngo');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return $sections;	
} 


function charity_ngo_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = charity_ngo_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'charity-ngo' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'charity-ngo' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				'cmsmasters-icon-linkedin|#|' . esc_html__('Linkedin', 'charity-ngo') . '|true||', 
				'cmsmasters-icon-facebook|#|' . esc_html__('Facebook', 'charity-ngo') . '|true||', 
				'cmsmasters-icon-gplus|#|' . esc_html__('Google', 'charity-ngo') . '|true||', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'charity-ngo') . '|true||', 
				'cmsmasters-icon-skype|#|' . esc_html__('Skype', 'charity-ngo') . '|true||'  
			) 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'dark', 
			'choices' => array( 
				esc_html__('Dark', 'charity-ngo') . '|dark', 
				esc_html__('Light', 'charity-ngo') . '|light', 
				esc_html__('Mac', 'charity-ngo') . '|mac', 
				esc_html__('Metro Black', 'charity-ngo') . '|metro-black', 
				esc_html__('Metro White', 'charity-ngo') . '|metro-white', 
				esc_html__('Parade', 'charity-ngo') . '|parade', 
				esc_html__('Smooth', 'charity-ngo') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'charity-ngo'), 
			'desc' => esc_html__('Sets path for switching windows', 'charity-ngo'), 
			'type' => 'radio', 
			'std' => 'vertical', 
			'choices' => array( 
				esc_html__('Vertical', 'charity-ngo') . '|vertical', 
				esc_html__('Horizontal', 'charity-ngo') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'charity-ngo'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'charity-ngo'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'charity-ngo'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'charity-ngo'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'charity-ngo'), 
			'type' => 'number', 
			'std' => 1, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'charity-ngo'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'charity-ngo'), 
			'type' => 'number', 
			'std' => 0.2, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'charity-ngo'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'charity-ngo'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'charity-ngo'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'charity-ngo'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'charity-ngo'), 
			'type' => 'select', 
			'std' => 'center', 
			'choices' => array( 
				esc_html__('Center', 'charity-ngo') . '|center', 
				esc_html__('Fit', 'charity-ngo') . '|fit', 
				esc_html__('Fill', 'charity-ngo') . '|fill', 
				esc_html__('Stretch', 'charity-ngo') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'charity-ngo'), 
			'desc' => esc_html__('Sets buttons be available or not', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'charity-ngo'), 
			'desc' => esc_html__('Enable the arrow buttons', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'charity-ngo'), 
			'desc' => esc_html__('Sets the fullscreen button', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'charity-ngo'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'charity-ngo'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'charity-ngo'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'charity-ngo'), 
			'desc' => esc_html__('Sets the swipe navigation', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'charity-ngo' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'charity-ngo'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'charity-ngo' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'charity-ngo' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'charity-ngo' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'charity-ngo' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'charity-ngo' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'charity-ngo' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'charity-ngo' . '_error_color', 
			'title' => esc_html__('Text Color', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#292929' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'charity-ngo' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#fcfcfc' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'charity-ngo' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'charity-ngo' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'charity-ngo'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'charity-ngo'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'charity-ngo' . '_error_bg_rep', 
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
			'section' => 'error_section', 
			'id' => 'charity-ngo' . '_error_bg_pos', 
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
			'section' => 'error_section', 
			'id' => 'charity-ngo' . '_error_bg_att', 
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
			'section' => 'error_section', 
			'id' => 'charity-ngo' . '_error_bg_size', 
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
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'charity-ngo' . '_error_search', 
			'title' => esc_html__('Search Line', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'charity-ngo' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'charity-ngo' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'charity-ngo' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'charity-ngo' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'charity-ngo' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'charity-ngo' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'charity-ngo' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'charity-ngo' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'charity-ngo' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'charity-ngo' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'charity-ngo' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

