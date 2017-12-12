<?php 
/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version		1.0.0
 * 
 * Admin Panel Post, Project, Profile & Donations Campaign Settings
 * Created by CMSMasters
 * 
 */


function charity_ngo_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'charity-ngo');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'charity-ngo');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'charity-ngo');
	}
	
	if (CMSMASTERS_TIMETABLE) {
		$tabs['tt_event'] = esc_attr__('Timetable Event', 'charity-ngo');
	}
	
	if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
		$tabs['campaign'] = esc_attr__('Campaign', 'charity-ngo');
	}
	
	if (CMSMASTERS_SERMONS) {
		$tabs['sermon'] = esc_attr__('Sermon', 'charity-ngo');
	}
	
	
	return $tabs;
}


function charity_ngo_options_single_sections() {
	$tab = charity_ngo_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'charity-ngo');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'charity-ngo');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'charity-ngo');
		
		
		break;
	case 'tt_event':
		$sections = array();
		
		$sections['tt_event_section'] = esc_attr__('Timetable Event Options', 'charity-ngo');
		
		
		break;
	case 'campaign':
		$sections = array();
		
		$sections['campaign_section'] = esc_attr__('Donations Campaign Options', 'charity-ngo');
		
		
		break;
	case 'sermon':
		$sections = array();
		
		$sections['sermon_section'] = esc_attr__('Sermons Options', 'charity-ngo');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function charity_ngo_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = charity_ngo_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'charity-ngo'), 
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
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_post_share_box', 
			'title' => esc_html__('Sharing Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'popular', 
			'choices' => array( 
				esc_html__('Show Related Posts', 'charity-ngo') . '|related', 
				esc_html__('Show Popular Posts', 'charity-ngo') . '|popular', 
				esc_html__('Show Recent Posts', 'charity-ngo') . '|recent', 
				esc_html__('Hide More Posts Box', 'charity-ngo') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'charity-ngo'), 
			'desc' => esc_html__('posts', 'charity-ngo'), 
			'type' => 'number', 
			'std' => '3', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'charity-ngo' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'charity-ngo'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'charity-ngo'), 
			'type' => 'number', 
			'std' => '1', 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'charity-ngo'), 
			'desc' => esc_html__('Enter a project details block title', 'charity-ngo'), 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'popular', 
			'choices' => array( 
				esc_html__('Show Related Projects', 'charity-ngo') . '|related', 
				esc_html__('Show Popular Projects', 'charity-ngo') . '|popular', 
				esc_html__('Show Recent Projects', 'charity-ngo') . '|recent', 
				esc_html__('Hide More Projects Box', 'charity-ngo') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'charity-ngo'), 
			'desc' => esc_html__('projects', 'charity-ngo'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'charity-ngo'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'charity-ngo'), 
			'type' => 'number', 
			'std' => '1', 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'charity-ngo'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'charity-ngo'), 
			'type' => 'text', 
			'std' => 'project', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'charity-ngo'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'charity-ngo'), 
			'type' => 'text', 
			'std' => 'pj-categs', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'charity-ngo' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'charity-ngo'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'charity-ngo'), 
			'type' => 'text', 
			'std' => 'pj-tags', 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'charity-ngo' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'charity-ngo' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'charity-ngo'), 
			'desc' => esc_html__('Enter a profile details block title', 'charity-ngo'), 
			'type' => 'text', 
			'std' => 'Profile details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'charity-ngo' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'charity-ngo' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'charity-ngo' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'charity-ngo' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'charity-ngo' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'charity-ngo' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'charity-ngo'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'charity-ngo'), 
			'type' => 'text', 
			'std' => 'profile', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'charity-ngo' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'charity-ngo'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'charity-ngo'), 
			'type' => 'text', 
			'std' => 'pl-categs', 
			'class' => '' 
		);
		
		
		break;
	case 'tt_event':
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'charity-ngo' . '_tt_event_hours', 
			'title' => esc_html__('Event Hours', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'charity-ngo' . '_tt_event_hours_title', 
			'title' => esc_html__('Event Hours Title', 'charity-ngo'), 
			'desc' => esc_html__('Enter a event hours block title', 'charity-ngo'), 
			'type' => 'text', 
			'std' => 'Event Hours', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'charity-ngo' . '_tt_event_details_title', 
			'title' => esc_html__('Event Details Title', 'charity-ngo'), 
			'desc' => esc_html__('Enter a event details block title', 'charity-ngo'), 
			'type' => 'text', 
			'std' => 'Event Details', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'charity-ngo' . '_tt_event_cat', 
			'title' => esc_html__('Event Categories', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		
		break;
	case 'campaign':
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_campaign_layout', 
			'title' => esc_html__('Layout Type', 'charity-ngo'), 
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
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_campaign_title', 
			'title' => esc_html__('Campaign Title', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_campaign_date', 
			'title' => esc_html__('Campaign Date', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_campaign_cat', 
			'title' => esc_html__('Campaign Categories', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_campaign_author', 
			'title' => esc_html__('Campaign Author', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_campaign_comment', 
			'title' => esc_html__('Campaign Comments', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_campaign_tag', 
			'title' => esc_html__('Campaign Tags', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_campaign_like', 
			'title' => esc_html__('Campaign Likes', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_campaign_nav_box', 
			'title' => esc_html__('Campaign Navigation Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_campaign_share_box', 
			'title' => esc_html__('Sharing Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_campaign_author_box', 
			'title' => esc_html__('About Author Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_more_campaigns_box', 
			'title' => esc_html__('More Campaigns Box', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'related', 
			'choices' => array( 
				esc_html__('Show Related Campaigns', 'charity-ngo') . '|related', 
				esc_html__('Show Popular Campaigns', 'charity-ngo') . '|popular', 
				esc_html__('Show Recent Campaigns', 'charity-ngo') . '|recent', 
				esc_html__('Hide More Campaigns Box', 'charity-ngo') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_more_campaigns_count', 
			'title' => esc_html__('More Campaigns Box Items Number', 'charity-ngo'), 
			'desc' => esc_html__('campaigns', 'charity-ngo'), 
			'type' => 'number', 
			'std' => '3', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_more_campaigns_pause', 
			'title' => esc_html__('More Campaigns Slider Pause Time', 'charity-ngo'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'charity-ngo'), 
			'type' => 'number', 
			'std' => '0', 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'charity-ngo' . '_donations_campaign_slug', 
			'title' => esc_html__('Campaign Slug', 'charity-ngo'), 
			'desc' => esc_html__('Enter a page slug that should be used for your donations campaign single item', 'charity-ngo'), 
			'type' => 'text', 
			'std' => 'campaign', 
			'class' => '' 
		);
		
		
		break;
	case 'sermon':
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_layout', 
			'title' => esc_html__('Sermon Layout Type', 'charity-ngo'), 
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
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_title', 
			'title' => esc_html__('Sermon Title', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_date', 
			'title' => esc_html__('Sermon Date', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_cat', 
			'title' => esc_html__('Sermon Categories', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_tag', 
			'title' => esc_html__('Sermon Tags', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_author', 
			'title' => esc_html__('Sermon Author', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_comment', 
			'title' => esc_html__('Sermon Comments', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_like', 
			'title' => esc_html__('Sermon Likes', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_nav_box', 
			'title' => esc_html__('Sermon Navigation Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_share_box', 
			'title' => esc_html__('Sharing Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_author_box', 
			'title' => esc_html__('About Author Box', 'charity-ngo'), 
			'desc' => esc_html__('show', 'charity-ngo'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_more_posts_box', 
			'title' => esc_html__('More Sermons Box', 'charity-ngo'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'popular', 
			'choices' => array( 
				esc_html__('Show Related Sermons', 'charity-ngo') . '|related', 
				esc_html__('Show Popular Sermons', 'charity-ngo') . '|popular', 
				esc_html__('Show Recent Sermons', 'charity-ngo') . '|recent', 
				esc_html__('Hide More Sermons Box', 'charity-ngo') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_more_posts_count', 
			'title' => esc_html__('More Sermons Box Items Number', 'charity-ngo'), 
			'desc' => esc_html__('sermons', 'charity-ngo'), 
			'type' => 'number', 
			'std' => '3', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_more_posts_pause', 
			'title' => esc_html__('More Sermons Slider Pause Time', 'charity-ngo'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'charity-ngo'), 
			'type' => 'number', 
			'std' => '1', 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_post_slug', 
			'title' => esc_html__('Sermon Slug', 'charity-ngo'), 
			'desc' => esc_html__('Enter a page slug that should be used for your sermons single item', 'charity-ngo'), 
			'type' => 'text', 
			'std' => 'sermon', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_srm_categs_slug', 
			'title' => esc_html__('Sermon Categories Slug', 'charity-ngo'), 
			'desc' => esc_html__('Enter page slug that should be used on sermons categories archive page', 'charity-ngo'), 
			'type' => 'text', 
			'std' => 'srm-categs', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'sermon_section', 
			'id' => 'charity-ngo' . '_sermon_srm_tags_slug', 
			'title' => esc_html__('Sermon Tags Slug', 'charity-ngo'), 
			'desc' => esc_html__('Enter page slug that should be used on sermons tags archive page', 'charity-ngo'), 
			'type' => 'text', 
			'std' => 'srm-tags', 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return $options;
}

