<?php
/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version		1.0.0
 * 
 * Blog Post Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = charity_ngo_get_global_options();


$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);

$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));


list($cmsmasters_layout) = charity_ngo_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-thumb';
} else {
	$cmsmasters_image_thumb_size = 'post-thumbnail';
}

?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post'); ?>>
	<?php 
	if ($cmsmasters_option['charity-ngo' . '_blog_post_date']) {
		charity_ngo_get_post_date('post');
	}
	
	
	if ($cmsmasters_post_title == 'true') {
		charity_ngo_post_title_nolink(get_the_ID(), 'h2');
	}
	
	
	if (
		$cmsmasters_option['charity-ngo' . '_blog_post_tag'] || 
		$cmsmasters_option['charity-ngo' . '_blog_post_author'] || 
		$cmsmasters_option['charity-ngo' . '_blog_post_cat'] || 
		$cmsmasters_option['charity-ngo' . '_blog_post_like'] || 
		$cmsmasters_option['charity-ngo' . '_blog_post_comment'] 
	) {
		echo '<div class="cmsmasters_post_cont_info entry-meta">';
			
			if (
				$cmsmasters_option['charity-ngo' . '_blog_post_tag'] || 
				$cmsmasters_option['charity-ngo' . '_blog_post_author'] ||  
				$cmsmasters_option['charity-ngo' . '_blog_post_cat'] 
			) {
				echo '<div class="cmsmasters_post_cont_info_inner entry-meta">';
			
					charity_ngo_get_post_author('post');
			
					charity_ngo_get_post_category(get_the_ID(), 'category', 'post');
			
					charity_ngo_get_post_tags();
			
				echo '</div>';
			}
			
			if (
				$cmsmasters_option['charity-ngo' . '_blog_post_like'] || 
				$cmsmasters_option['charity-ngo' . '_blog_post_comment'] 
			) {
				echo '<div class="cmsmasters_post_info">';
					
					charity_ngo_get_post_likes('post');
					
					charity_ngo_get_post_comments('post');
					
				echo '</div>';
			}
			
		echo '</div>';
	}
	
	
	if (!post_password_required()) {
		if (sizeof($cmsmasters_post_images) > 1) {
			echo '<div' . 
				' id="cmsmasters_owl_slider_' . esc_attr(uniqid()) . '"' . 
				' class="cmsmasters_owl_slider"' . 
				' data-navigation="false"' .
			'>';
			
				foreach ($cmsmasters_post_images as $cmsmasters_post_image) {
					$image_atts = wp_prepare_attachment_for_js(strstr($cmsmasters_post_image, '|', true));
					
					
					echo '<div class="cmsmasters_owl_slider_item">' . 
						'<figure>' . 
							wp_get_attachment_image(strstr($cmsmasters_post_image, '|', true), $cmsmasters_image_thumb_size, false, array( 
								'class' => 	'full-width', 
								'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsmasters_title(get_the_ID(), false), 
								'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false) 
							)) . 
						'</figure>' . 
					'</div>';
				}
			echo '</div>';
		} elseif (sizeof($cmsmasters_post_images) == 1 && $cmsmasters_post_images[0] != '') {
			charity_ngo_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'img_' . get_the_ID(), true, true, true, true, $cmsmasters_post_images[0]);
		} elseif (has_post_thumbnail()) {
			charity_ngo_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'img_' . get_the_ID(), true, true, true, true, false);
		}
	}
	
	
	if (get_the_content() != '') {
		echo '<div class="cmsmasters_post_content entry-content">';
			
			the_content();
			
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav" >' . '<strong>' . esc_html__('Pages', 'charity-ngo') . ':</strong>', 
				'after' => '</div>', 
				'link_before' => '<span>', 
				'link_after' => '</span>' 
			));
			
		echo '</div>';
	}
	?>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

