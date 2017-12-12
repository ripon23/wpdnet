<?php
/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version		1.0.0
 * 
 * Single Project Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = charity_ngo_get_global_options();


$project_tags = get_the_terms(get_the_ID(), 'pj-tags');


$cmsmasters_project_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_project_sharing_box', true);

$cmsmasters_project_author_box = get_post_meta(get_the_ID(), 'cmsmasters_project_author_box', true);

$cmsmasters_project_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_project_more_posts', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div class="middle_content entry" >';


if (have_posts()) : the_post();
	echo '<div class="portfolio opened-article">' . "\n";
	
	
	if (get_post_format() != '') {
		get_template_part('framework/postType/portfolio/post/' . get_post_format());
	} else {
		get_template_part('framework/postType/portfolio/post/standard');
	}
	
	
	if ($cmsmasters_project_sharing_box == 'true') {
		charity_ngo_sharing_box();
	}
	
	
	if ($cmsmasters_option['charity-ngo' . '_portfolio_project_nav_box']) {
		charity_ngo_prev_next_posts();
	}
	
	
	if ($cmsmasters_project_author_box == 'true') {
		charity_ngo_author_box(esc_html__('About author', 'charity-ngo'), 'h3', 'h5');
	}
	
	
	if ($project_tags) {
		$tgsarray = array();
		
		
		foreach ($project_tags as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}  
	} else {
		$tgsarray = '';
	}
	
	
	if ($cmsmasters_project_more_posts != 'hide') {
		charity_ngo_related( 
			'h3', 
			esc_html__('More projects', 'charity-ngo'),
			esc_html__('No projects found', 'charity-ngo'),
			$cmsmasters_project_more_posts, 
			$tgsarray, 
			$cmsmasters_option['charity-ngo' . '_portfolio_more_projects_count'], 
			$cmsmasters_option['charity-ngo' . '_portfolio_more_projects_pause'], 
			'project', 
			'pj-tags' 
		);
	}
	
	
	comments_template(); 
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

