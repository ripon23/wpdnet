<?php
/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version		1.0.0
 * 
 * Single Campaign Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = charity_ngo_get_global_options();


list($cmsmasters_layout) = charity_ngo_theme_page_layout_scheme();


$campaign_tags = get_the_terms(get_the_ID(), 'cp-tags');


$cmsmasters_campaign_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_campaign_sharing_box', true);

$cmsmasters_campaign_author_box = get_post_meta(get_the_ID(), 'cmsmasters_campaign_author_box', true);

$cmsmasters_campaign_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_campaign_more_posts', true);

$cmsmasters_campaign_title = get_post_meta(get_the_ID(), 'cmsmasters_campaign_title', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry" >' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr" >' . "\n\t";
} else {
	echo '<div class="middle_content entry" >';
}


if (have_posts()) : the_post();
	echo '<div class="campaigns opened-article">' . "\n";


?>
<!--_________________________ Start Standard Campaign _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_campaign_cont">
	<?php
		if ($cmsmasters_option['charity-ngo' . '_donations_campaign_date']) {
			cmsmasters_campaign_date('post');
		}
		
		
		if ($cmsmasters_campaign_title == 'true') {
			cmsmasters_campaign_heading(get_the_ID(), 'h2', false);
		}
		
		
		if ( 
			$cmsmasters_option['charity-ngo' . '_donations_campaign_author'] || 
			$cmsmasters_option['charity-ngo' . '_donations_campaign_cat'] || 
			$cmsmasters_option['charity-ngo' . '_donations_campaign_tag'] || 
			$cmsmasters_option['charity-ngo' . '_donations_campaign_like'] || 
			$cmsmasters_option['charity-ngo' . '_donations_campaign_comment'] 
		) {
			echo '<div class="cmsmasters_campaign_cont_info entry-meta' . ((get_the_content() == '') ? ' no_bdb' : '') . '">';
				
				if ( 
					$cmsmasters_option['charity-ngo' . '_donations_campaign_like'] || 
					$cmsmasters_option['charity-ngo' . '_donations_campaign_comment'] 
				) {
					echo '<div class="cmsmasters_campaign_meta_info">';
						
						cmsmasters_campaign_like('post');
						
						cmsmasters_campaign_comments('post');
						
					echo '</div>';
				}
				
				
				cmsmasters_campaign_author('post');
				
				cmsmasters_campaign_category(get_the_ID(), 'cp-categs', 'post');
				
				cmsmasters_campaign_tags(get_the_ID(), 'cp-tags', 'post');
				
			echo '</div>';
		}
		
		
		if (!post_password_required() && has_post_thumbnail()) {
			charity_ngo_thumb(get_the_ID(), 'post-thumbnail', false, true, true, true, true, true, false);
		}
		
		
		echo '<div class="campaign_meta_wrap">';
		
			cmsmasters_campaign_target(get_the_ID(), true);
			
			cmsmasters_campaign_donations_count(get_the_ID(), true);
			
			cmsmasters_campaign_donated(get_the_ID(), 'post');
			
			cmsmasters_campaign_donate_button(get_the_ID(), true);
			
		echo '</div>';
		
		
		if (get_the_content() != '') {
			echo '<div class="cmsmasters_campaign_content entry-content">';
				
				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav" >' . '<strong>' . esc_html__('Pages', 'charity-ngo') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => ' [ ', 
					'link_after' => ' ] ' 
				));
				
			echo '<div class="cl"></div>' . 
			'</div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Standard Campaign _________________________ -->
<?php
	
	
	if ($cmsmasters_campaign_sharing_box == 'true') {
		charity_ngo_sharing_box();
	}
	
	
	if ($cmsmasters_option['charity-ngo' . '_donations_campaign_nav_box']) {
		charity_ngo_prev_next_posts();
	}
	
	
	if ($cmsmasters_campaign_author_box == 'true') {
		charity_ngo_author_box(esc_html__('About author', 'charity-ngo'), 'h3', 'h5');
	}
	
	
	if ($campaign_tags) {
		$tgsarray = array();
		
		foreach ($campaign_tags as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}  
	} else {
		$tgsarray = '';
	}
	
	
	if ($cmsmasters_campaign_more_posts != 'hide') {
		charity_ngo_related( 
			'h3', 
			esc_html__('More campaigns', 'charity-ngo'),
			esc_html__('No campaigns found', 'charity-ngo'),
			$cmsmasters_campaign_more_posts, 
			$tgsarray, 
			$cmsmasters_option['charity-ngo' . '_donations_more_campaigns_count'], 
			$cmsmasters_option['charity-ngo' . '_donations_more_campaigns_pause'], 
			'campaign', 
			'cp-tags'  
		);
	}
	
	
	comments_template(); 
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar" >' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar fl" >' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}


get_footer();

