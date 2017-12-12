<?php
/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function charity_ngo_theme_fonts() {
	$cmsmasters_option = charity_ngo_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body,
	.wpcf7-form-control-wrap,
	.widget .textwidget li a {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_content_font_google_font']) . $cmsmasters_option['charity-ngo' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_content_font_font_style'] . ";
	}
	
	@media only screen and (max-width: 1024px) {
		body,
		.wpcf7-form-control-wrap,
		.widget .textwidget li a {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_content_font_font_size'] + 1) . "px;
		}	
	}
	
	@media only screen and (max-width: 768px) {
		body,
		.wpcf7-form-control-wrap,
		.widget .textwidget li a {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_content_font_font_size'] + 2) . "px;
		}	
	}
	
	code {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_content_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_content_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_icon_list_items li:before {
		line-height:" . $cmsmasters_option['charity-ngo' . '_content_font_line_height'] . "px;
	}
	
	/* Finish Content Font */


	/* Start Link Font */
	a {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_link_font_google_font']) . $cmsmasters_option['charity-ngo' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_link_font_text_decoration'] . ";
	}
	
	a:hover {
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	.navigation .menu-item-mega-container > ul > li > a .nav_title,
	.navigation > li > a {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_nav_title_font_google_font']) . $cmsmasters_option['charity-ngo' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_nav_title_font_text_transform'] . ";
	}
	
	.navigation .menu-item-mega-container > ul > li > a .nav_title {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_nav_title_font_font_size'] - 1) . "px;
		font-weight:normal;
	}
	
	@media only screen and (min-width: 1241px) and (max-width: 1440px) {
		.navigation > li > a {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_nav_title_font_font_size'] - 2) . "px;
		}
	}
	
	@media only screen and (min-width: 1025px) and (max-width: 1240px) {
		.navigation > li > a {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_nav_title_font_font_size'] - 3) . "px;
		}
	}
	
	@media only screen and (max-width: 1024px) {
		.navigation .menu-item-mega-container > ul > li > a .nav_title {
			font-weight:" . $cmsmasters_option['charity-ngo' . '_nav_title_font_font_weight'] . ";
		}
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	.header_top,
	.header_top a,
	.navigation ul li a,
	.navigation > li > a .nav_subtitle,
	.navigation > li > a .nav_tag,
	.top_line_nav > li > a,
	.top_line_nav ul li a {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['charity-ngo' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_nav_dropdown_font_text_transform'] . ";
	}
	
	.navigation > li > a .nav_subtitle {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_nav_dropdown_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_nav_dropdown_font_line_height'] - 5) . "px;
	}
	
	.top_line_nav ul li a,
	.top_line_nav > li > a,
	.header_top,
	.header_top a {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_nav_dropdown_font_font_size'] - 2) . "px;
	}
	
	.header_top .meta_wrap > *[class^=\"cmsmasters-icon-\"]:before, 
	.header_top .meta_wrap > *[class*=\" cmsmasters-icon-\"]:before, 
	.header_top .meta_wrap > *[class^=\"cmsmasters_theme_icon_\"]:before, 
	.header_top .meta_wrap > *[class*=\" cmsmasters_theme_icon_\"]:before {
		font-size:" . $cmsmasters_option['charity-ngo' . '_nav_dropdown_font_font_size'] . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		.navigation ul li a {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_nav_dropdown_font_font_size'] + 1) . "px;
		}
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	.cmsmasters_pricing_table .cmsmasters_currency, 
	.cmsmasters_pricing_table .cmsmasters_price,
	.cmsmasters_pricing_table .cmsmasters_coins,
	.cmsmasters_post_timeline .cmsmasters_post_day,
	#header .search_wrap .search_bar_wrap .search_field input,
	.logo .title {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h1_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_dropcap {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h1_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_placeholder:before,
	.cmsmasters_quotes_slider_type_box .cmsmasters_quote_header:before,
	blockquote:before,
	.cmsmasters_quotes_grid .cmsmasters_quotes_list:after,
	q:before,
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h1_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_post_timeline .cmsmasters_post_day {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h1_font_font_size'] + 8) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_currency, 
	.cmsmasters_pricing_table .cmsmasters_price, 
	.cmsmasters_pricing_table .cmsmasters_coins {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h1_font_font_size'] - 6) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h1_font_font_size'] - 6) . "px;
	}
	
	@media only screen and (max-width: 768px) {
		#header .header_mid .search_wrap .search_bar_wrap .search_field input {
			font-size:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_size'] . "px;
		}
	}
	
	.cmsmasters_quotes_slider_type_box .cmsmasters_quote_header:before {
		font-size:50px; /* static */
		line-height:50px; /* static */
	}
	
	#header .search_wrap .search_bar_wrap .search_field input {
		font-size:60px; /* static */
		line-height:70px; /* static */
	}
	
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_placeholder:before {
		font-size:120px; /* static */
		line-height:140px; /* static */
	}
	
	blockquote:before,
	q:before {
		font-size:50px; /* static */
		line-height:50px; /* static */
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:36px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:20px; /* static */
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h1_font_line_height'] + 15) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option['charity-ngo' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option['charity-ngo' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['charity-ngo' . '_h1_font_line_height'] + 15) . "px;
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_counter, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h2_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h2_font_text_decoration'] . ";
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h2_font_font_size'] + 32) . "px;
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_image .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h2_font_font_size'] + 4) . "px;
	}
	
	.cmsmasters_open_post .cmsmasters_post_header .cmsmasters_post_title,
	.cmsmasters_post_default .cmsmasters_post_header .cmsmasters_post_title,
	.cmsmasters_post_default .cmsmasters_post_header .cmsmasters_post_title a {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h2_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_archive_item_title a,
	.cmsmasters_archive_item_title {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h2_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h2_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_counter {
		font-size: 46px;
	}
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.cmsmasters_counters .cmsmasters_counter_title {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h3_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h3_font_text_decoration'] . ";
	}
	
	.cmsmasters_counters .cmsmasters_counter_title {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h3_font_line_height'] + 2) . "px;
	}
	
	.cmsmasters_slider_project .cmsmasters_slider_project_header .cmsmasters_slider_project_title,
	.cmsmasters_slider_project .cmsmasters_slider_project_header .cmsmasters_slider_project_title a {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h3_font_line_height'] + 4) . "px;
	}
	
	#cancel-comment-reply-link,
	.comment-reply-title,
	.post_comments_title,
	.cmsmasters_single_slider_title,
	.about_author_title {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] - 2) . "px;
	}
	
	@media only screen and (max-width: 768px) {
		.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_title {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] + 4) . "px;
		}
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a,
	.widget_nav_menu ul li a,
	.widget_rss ul li .rsswidget,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_units,
	.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_toggles .cmsmasters_toggle_title a,
	.cmsmasters_tabs .cmsmasters_tabs_list_item a,
	.widget .widgettitle,
	.post_nav a,
	.cmsmasters_table thead th,
	.cmsmasters_table tfoot td {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h4_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_table thead th,
	.cmsmasters_table tfoot td {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] - 1) . "px;
		font-weight:normal;
	}
	
	.cmsmasters_comment_item .cmsmasters_comment_item_title,
	.cmsmasters_comment_item .cmsmasters_comment_item_title a {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_line_height'] - 2) . "px;
	}
	
	.widget_nav_menu ul li a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] - 5) . "px;
	}
	
	@media only screen and (min-width: 950px) and (max-width: 1440px) {
		.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] - 6) . "px;
		}
		
		.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] - 2) . "px;
		}
	}
	
	.widget_nav_menu ul li a {
		text-transform:uppercase;
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content,
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content a,
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_subtitle_wrap a,
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_subtitle_wrap,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a	{
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h5_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_title {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] + 8) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h5_font_line_height'] + 8) . "px;
	}
	
	.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_subtitle {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] - 2) . "px;
	}
	
	@media only screen and (max-width: 768px) {
		.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_subtitle {
			font-size:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] . "px;
		}
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a,
	.cmsmasters_comment_item .cmsmasters_comment_item_date,
	.widget_tag_cloud a,
	.widget_rss ul li .rss-date,
	.widget_rss ul li cite,
	.cmsmasters_widget_project_cont_info .cmsmasters_slider_project_category a,
	.cmsmasters_widget_project_cont_info .cmsmasters_slider_project_category,
	.widget_custom_twitter_entries .tweet_time,
	.widget_pages *, 
	.widget_categories *, 
	.widget_archive *, 
	.widget_meta *, 
	.cmsmasters_slider_project .cmsmasters_slider_project_cont_info,
	.cmsmasters_slider_project .cmsmasters_slider_project_cont_info a,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info a,
	.cmsmasters_slider_post_read_more,
	.cmsmasters_pricing_table .cmsmasters_period,
	.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap,
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap,
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_quotes_grid .cmsmasters_quote_subtitle_wrap,
	.cmsmasters_quotes_grid .cmsmasters_quote_subtitle_wrap a,
	.cmsmasters_quotes_slider_type_box .cmsmasters_quote_subtitle_wrap,
	.cmsmasters_quotes_slider_type_box .cmsmasters_quote_subtitle_wrap a,
	.cmsmasters_archive_item_type,
	.cmsmasters_archive_item_info,
	.cmsmasters_archive_item_info a,
	.cmsmasters_open_profile .profile_details, 
	.cmsmasters_open_profile .profile_details a, 
	.cmsmasters_open_profile .profile_features,
	.cmsmasters_open_profile .profile_features a,
	.cmsmasters_open_project .project_details_item, 
	.cmsmasters_open_project .project_details_item a, 
	.cmsmasters_open_project .project_features_item,
	.cmsmasters_open_project .project_features_item a,
	.cmsmasters_project_puzzle .cmsmasters_project_cont_info,
	.cmsmasters_project_puzzle .cmsmasters_project_cont_info a,
	.cmsmasters_project_grid .cmsmasters_project_read_more,
	.cmsmasters_project_grid .cmsmasters_project_category,
	.cmsmasters_project_grid .cmsmasters_project_category a,
	.cmsmasters_open_post > .cmsmasters_post_cont_info .cmsmasters_post_info a span, 
	.comment-respond label,
	.cmsmasters_input label,
	.cmsmasters_radio > label,
	.cmsmasters_checkboxes > label,
	.cmsmasters_textarea label,
	.cmsmasters_select label,
	.wpcf7,
	.published,
	.cmsmasters_comment_item .comment-reply-link,
	.cmsmasters_comment_item .comment-edit-link,	
	.pingslist .pingback .comment-edit-link,
	.share_posts a,
	.post_nav .post_nav_sub,
	.cmsmasters_wrap_pagination ul li .page-numbers,
	.cmsmasters_post_read_more,
	.cmsmasters_post_cont_info .cmsmasters_post_tags,
	.cmsmasters_post_cont_info .cmsmasters_post_tags a,
	.cmsmasters_post_cont_info .cmsmasters_post_author,
	.cmsmasters_post_cont_info .cmsmasters_post_author a,
	.cmsmasters_post_cont_info .cmsmasters_post_category,
	.cmsmasters_post_cont_info .cmsmasters_post_category a,
	.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_likes span,
	.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_comments span,
	.cmsmasters_breadcrumbs,
	.cmsmasters_breadcrumbs a{
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h6_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h6_font_text_decoration'] . ";
	}
	
	
	.cmsmasters_slider_project .cmsmasters_slider_project_cont_info,
	.cmsmasters_slider_project .cmsmasters_slider_project_cont_info a,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info a {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_period {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] + 2) . "px;
	}
	
	.wpcf7,
	.cmsmasters_input label,
	.cmsmasters_radio > label,
	.cmsmasters_checkboxes > label,
	.cmsmasters_textarea label,
	.cmsmasters_select label,
	.comment-respond label {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_open_post > .cmsmasters_post_cont_info .cmsmasters_post_info a span, 
	.cmsmasters_comment_item .comment-reply-link,
	.cmsmasters_comment_item .comment-edit-link,
	.pingslist .pingback .comment-edit-link,
	.cmsmasters_comment_item .cmsmasters_comment_item_date,
	.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_likes span,
	.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_comments span {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_open_profile .profile_sidebar .cmsmasters_likes a:before, 
	.cmsmasters_open_profile .profile_sidebar .cmsmasters_comments a:before,
	.cmsmasters_open_project .project_sidebar .cmsmasters_likes a:before, 
	.cmsmasters_open_project .project_sidebar .cmsmasters_comments a:before {
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_line_height'] - 2) . "px;
	}
	
	.widget_categories ul li:before, 
	.widget_archive ul li:before {
		top:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_line_height'] / 2 + 1) . "px;
	}
	
	@media only screen and (max-width: 768px) {
		.cmsmasters_post_footer .cmsmasters_post_read_more,
		.cmsmasters_post_cont_info .cmsmasters_post_tags,
		.cmsmasters_post_cont_info .cmsmasters_post_tags a,
		.cmsmasters_post_cont_info .cmsmasters_post_author,
		.cmsmasters_post_cont_info .cmsmasters_post_author a,
		.cmsmasters_post_cont_info .cmsmasters_post_category,
		.cmsmasters_post_cont_info .cmsmasters_post_category a,
		.cmsmasters_slider_project .cmsmasters_slider_project_cont_info,
		.cmsmasters_slider_project .cmsmasters_slider_project_cont_info a,
		.cmsmasters_slider_post .cmsmasters_slider_post_cont_info,
		.cmsmasters_slider_post .cmsmasters_slider_post_cont_info a,
		.published {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] + 2) . "px;
		}
		
		.cmsmasters_slider_post .cmsmasters_slider_post_footer .cmsmasters_slider_post_footer_info a,
		.cmsmasters_slider_post .cmsmasters_slider_post_footer .cmsmasters_slider_post_footer_info a span,
		.cmsmasters_open_post > .cmsmasters_post_cont_info .cmsmasters_post_info a span, 
		.blog .cmsmasters_post_cont_info .cmsmasters_likes span,
		.blog .cmsmasters_post_cont_info .cmsmasters_comments span,
		.blog .cmsmasters_likes a, 
		.blog .cmsmasters_comments a {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] + 1) . "px;
		}
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_button_font_google_font']) . $cmsmasters_option['charity-ngo' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_button_font_text_transform'] . ";
	}
	
	.share_wrap > a:before {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_button_font_font_size'] +2) . "px;
	}
	
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a {
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_button_font_line_height'] - 2) . "px;
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['charity-ngo' . '_button_font_font_size'] . "px !important;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['charity-ngo' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['charity-ngo' . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small,
	form .formError .formErrorContent {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_small_font_google_font']) . $cmsmasters_option['charity-ngo' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_small_font_text_transform'] . ";
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_small_font_google_font']) . $cmsmasters_option['charity-ngo' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['charity-ngo' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['charity-ngo' . '_small_font_line_height'] . "px !important;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	textarea,
	select,
	option,
	code {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_input_font_google_font']) . $cmsmasters_option['charity-ngo' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['charity-ngo' . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_content,
	.cmsmasters_quotes_grid .cmsmasters_quote_content,
	.cmsmasters_quotes_slider_type_box .cmsmasters_quote_content,
	q,
	blockquote {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_quote_font_google_font']) . $cmsmasters_option['charity-ngo' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_quote_font_font_style'] . ";
	}
	
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_content {
		font-size:" . ((int)$cmsmasters_option['charity-ngo' . '_quote_font_font_size'] + 6) . "px;
		line-height:" . ((int)$cmsmasters_option['charity-ngo' . '_quote_font_line_height'] + 12) . "px;
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";


if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {

	$custom_css .= "
/***************** Start CMSMASTERS Donations Font Styles ******************/

	/* Start Content Font */
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start Navigation Title Font */
	/* Finish Navigation Title Font */
	
	
	/* Start H1 Font */
	.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h1_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h1_font_text_decoration'] . ";
	}
	
	.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h1_font_font_size'] + 14) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h1_font_line_height'] + 14) . "px;
	}
	
	@media only screen and (max-width: 540px) {
		.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h1_font_font_size'] + 4) . "px;
			line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h1_font_line_height'] + 8) . "px;
		}
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.campaign_meta_wrap .cmsmasters_campaign_target_number,
	.campaign_meta_wrap .cmsmasters_campaign_donations_count_number {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h2_font_font_size'] - 4) . "px;
	}
	
	.opened-article > .campaign .cmsmasters_campaign_title {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h2_font_font_size'] + 2) . "px;
	}
	
	.donations.opened-article > .donation .cmsmasters_donation_title {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h2_font_font_size'] + 4) . "px;
	}
	
	@media only screen and (max-width: 540px) {
		.donations.opened-article > .donation .cmsmasters_donation_title {
			font-size:" . $cmsmasters_option['charity-ngo' . '_h2_font_font_size'] . "px;
		}
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.donation_confirm_title,
	.cmsmasters_donation_form_title {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h3_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h3_font_text_decoration'] . ";
	}
	
	.cmsmasters_campaigns .campaign .cmsmasters_campaign_title a {
		font-size:" . ((int)$cmsmasters_option['charity-ngo' . '_h3_font_font_size'] - 2) . "px;
	}
	
	@media only screen and (max-width: 768px) {
		.cmsmasters_campaigns .campaign .cmsmasters_campaign_title a {
			font-size:" . $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] . "px;
		}
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.donation_confirm .donation_confirm_info_title,
	.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_donate_button a,
	.cmsmasters_campaigns .campaign .cmsmasters_campaign_donated_percent .cmsmasters_stat_title,
	.cmsmasters_donations .donation .cmsmasters_donation_amount_currency {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h4_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h4_font_text_decoration'] . ";
	}
	
	.donation_confirm .donation_confirm_info_title,
	.campaign_meta_wrap .cmsmasters_campaign_donated .cmsmasters_stat_title,
	.campaign_meta_wrap .cmsmasters_campaign_target_title, 
	.campaign_meta_wrap .cmsmasters_campaign_donations_count_title {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_campaigns .campaign .cmsmasters_campaign_donated_percent .cmsmasters_stat_title {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_line_height'] - 2) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.donations.opened-article > .donation .cmsmasters_donation_campaign a,
	.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_rest_amount,
	.cmsmasters_donations .donation .cmsmasters_donation_campaign,
	.cmsmasters_donations .donation .cmsmasters_donation_campaign a {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h5_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_donations .donation .cmsmasters_donation_campaign,
	.cmsmasters_donations .donation .cmsmasters_donation_campaign a {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h5_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_rest_amount,
	.donations.opened-article > .donation .cmsmasters_donation_campaign a {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h5_font_line_height'] + 4) . "px;
	}
	
	@media only screen and (max-width: 768px) {
		.cmsmasters_donations .donation .cmsmasters_donation_campaign,
		.cmsmasters_donations .donation .cmsmasters_donation_campaign a {
			font-size:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['charity-ngo' . '_h5_font_line_height'] . "px;
		}
	}
	
	@media only screen and (max-width: 768px) {
		.donations.opened-article > .donation .cmsmasters_donation_campaign a {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] + 2) . "px;
		}
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.cmsmasters_donation_field > label,
	.cmsmasters_donator_field label,
	.cmsmasters_donation_details_item,
	.cmsmasters_donation_details_item a,
	.cmsmasters_campaign_cont_info .cmsmasters_likes span,
	.cmsmasters_campaign_cont_info .cmsmasters_post_comments span,
	.cmsmasters_campaign_cont_info .cmsmasters_campaign_tags,
	.cmsmasters_campaign_cont_info .cmsmasters_campaign_tags a,
	.cmsmasters_campaign_cont_info .cmsmasters_campaign_category,
	.cmsmasters_campaign_cont_info .cmsmasters_campaign_category a,
	.cmsmasters_campaign_cont_info .cmsmasters_campaign_user_name,
	.cmsmasters_campaign_cont_info .cmsmasters_campaign_user_name a,
	.cmsmasters_campaigns .campaign .cmsmasters_stat_subtitle,
	.cmsmasters_donations .donation .cmsmasters_donation_amount_title {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h6_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h6_font_text_decoration'] . ";
	}
	
	.cmsmasters_campaigns .campaign .cmsmasters_stat_subtitle {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_campaign_cont_info .cmsmasters_likes span,
	.cmsmasters_campaign_cont_info .cmsmasters_post_comments span {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_line_height'] - 2) . "px;
	}
	
	@media only screen and (max-width: 768px) {
		.cmsmasters_campaigns .campaign .cmsmasters_stat_subtitle,
		.cmsmasters_donations .donation .cmsmasters_donation_amount_title,
		.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] + 2) . "px;
		}
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish CMSMASTERS Donations Font Styles ******************/


";

}


if (CMSMASTERS_WOOCOMMERCE) {

	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/
	
	/* Start Navigation Title Font */
	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button span {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_nav_title_font_google_font']) . $cmsmasters_option['charity-ngo' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_nav_title_font_text_transform'] . ";
	}
	
	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button span {
		font-weight:normal; /* static */
	}
	/* Finish Navigation Title Font */
	
	/* Start Content Font */
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_content_font_google_font']) . $cmsmasters_option['charity-ngo' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_content_font_font_style'] . ";
	}
	
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.example {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h2_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.cart_totals > h2,
	.post_comments .post_comments_title,
	div.products > h2,
	.cmsmasters_single_product .product_title,
	.shop_table.order_details tfoot tr:last-child th, 
	.shop_table.order_details tfoot tr:last-child td, 
	ul.order_details {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h3_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h3_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_product .product_title {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] + 2) . "px;
	}
	
	@media only screen and (min-width: 1025px) and (max-width: 1440px) {
		ul.order_details {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] - 2) . "px;
		}
	}
	
	@media only screen and (max-width: 768px) {
		.cmsmasters_product .cmsmasters_product_title {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] + 2) . "px;	
		}
	}	
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td .amount,
	.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal th, 
	.shop_table.woocommerce-checkout-review-order-table th.product-name, 
	.cart_totals table .cart-subtotal th, 
	.cart_totals table .cart-subtotal .amount, 
	.cart_totals table .order-total th, 
	.cart_totals td strong > .amount,
	.cart_totals table .order-total .amount,
	.shop_table .product-name a, 
	.shop_table thead th, 
	.cmsmasters_woo_wrap_result .woocommerce-result-count, 
	.shop_table.order_details tfoot tr td, 
	ul.order_details strong, 
	.widget_layered_nav ul li, 
	.widget_layered_nav ul li a, 
	.widget_layered_nav_filters ul li, 
	.widget_layered_nav_filters ul li a, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a, 
	.widget_shopping_cart .cart_list a, 
	.widget > .product_list_widget a {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h4_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h4_font_text_decoration'] . ";
	}
	
	.cart_totals table .cart-subtotal th, 
	.cart_totals table .cart-subtotal .amount, 
	.cart_totals table .order-total th, 
	.cart_totals td strong > .amount,
	.cart_totals table .order-total .amount,
	.shop_table .product-name a, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a, 
	.widget_shopping_cart .cart_list a, 
	.widget > .product_list_widget a {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_line_height'] - 2) . "px;
	}
	
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td .amount,
	.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal th, 
	.shop_table.woocommerce-checkout-review-order-table th.product-name {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] - 1) . "px;
	}
	
	@media only screen and (max-width: 768px) {
		.shop_table .product-name a {
			font-size:" . $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] . "px;	
		}
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.cmsmasters_single_product .price,
	.cmsmasters_product .button_to_cart,
	.cmsmasters_product .price, 
	.shop_table.order_details tfoot tr th {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h5_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_product .price {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] + 8) . "px;
	}
	
	@media only screen and (max-width: 768px) {
		.cmsmasters_product .button_to_cart {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] + 2) . "px;	
		}
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.widget > .product_list_widget .reviewer,
	.widget > .product_list_widget .amount, 
	.widget_product_categories ul li, 
	.widget_product_categories ul li a, 
	.widget_price_filter .price_slider_amount .price_label, 
	.widget_shopping_cart .total, 
	.widget_shopping_cart .total strong, 
	.widget_shopping_cart .cart_list .quantity, 
	.form-row label,
	.form-row label a,
	.shop_table td > .amount, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity, 
	.shop_attributes td,
	.cmsmasters_product .price del,
	.onsale, 
	.out-of-stock, 
	.stock, 
	.cmsmasters_product .cmsmasters_product_cat, 
	.cmsmasters_product .cmsmasters_product_cat a, 
	.cmsmasters_single_product .product_meta, 
	.cmsmasters_single_product .product_meta a {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h6_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h6_font_text_decoration'] . ";
	}
	
	.form-row label a,
	.form-row label {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_product .price del {
		text-decoration:line-through;
	}
	
	@media only screen and (max-width: 768px) {
		.shop_table td > .amount {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] + 1) . "px;
		}	
	
		.cmsmasters_product .cmsmasters_product_cat, 
		.cmsmasters_product .cmsmasters_product_cat a {
			font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] + 2) . "px;
		}	
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.widget_price_filter .price_slider_amount .button,
	.widget_shopping_cart .buttons .button,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_button_font_google_font']) . $cmsmasters_option['charity-ngo' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_button_font_text_transform'] . ";
	}
	
	.widget_price_filter .price_slider_amount .button,
	.widget_shopping_cart .buttons .button,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_button_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_button_font_line_height'] - 6) . "px;
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish WooCommerce Font Styles ******************/


";

}


if (CMSMASTERS_EVENTS_CALENDAR) {

	$custom_css .= "
/***************** Start Events Font Styles ******************/

	/* Start Content Font */
	.tribe-events-tooltip,
	.tribe-events-tooltip a,
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a, 
	.tribe-mini-calendar tbody, 
	.tribe-mini-calendar tbody a, 
	.tribe-events-countdown-widget .tribe-countdown-time span, 
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_content_font_google_font']) . $cmsmasters_option['charity-ngo' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_content_font_font_style'] . ";
	}
	
	.tribe-events-tooltip .description, 
	.tribe-events-tooltip .duration .published,
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a, 
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_content_font_font_size'] - 1) . "px;
	}
	
	.tribe-mini-calendar tbody, 
	.tribe-mini-calendar tbody a, 
	.tribe-mini-calendar thead th, 
	.tribe-events-grid .column.first > span,
	.tribe-events-grid .tribe-week-grid-hours div,
	.tribe-this-week-events-widget .tribe-events-viewmore a {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_content_font_line_height'] - 6) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start H1 Font */
	.cmsmasters_event_big_day {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h1_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_event_big_day {
		font-size:50px;
		line-height:50px;
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.cmsmasters_event_day,
	.cmsmasters_sidebar .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .entry-title a,
	.cmsmasters_sidebar .tribe-events-list-widget .tribe-events-list-widget-content-wrap .entry-title a,
	.tribe-mobile-day .tribe-mobile-day-date,
	.tribe-events-countdown-widget .tribe-countdown-time {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h2_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h2_font_text_decoration'] . ";
	}
	
	.cmsmasters_sidebar .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .entry-title a,
	.tribe-events-list .tribe-events-list-event-title a {
		font-size:" . ((int)$cmsmasters_option['charity-ngo' . '_h2_font_font_size'] - 4) . "px;
		line-height:" . ((int)$cmsmasters_option['charity-ngo' . '_h2_font_line_height'] - 4) . "px;
	}
	
	.tribe-events-countdown-widget .tribe-countdown-time {
		font-size:36px;
		line-height:40px;
	}
	
	.cmsmasters_sidebar.sidebar_layout_11 .tribe-events-countdown-widget .tribe-countdown-time {
		font-size:48px;
		line-height:48px;
	}
	
	@media only screen and (min-width: 1440px) {
		.cmsmasters_sidebar.sidebar_layout_11 .tribe-events-countdown-widget .tribe-countdown-time {
			font-size:56px;
			line-height:56px;
		}
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.tribe-events-related-events-title,
	.tribe-events-page-title {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h3_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h3_font_text_decoration'] . ";
	}
	
	.tribe-events-related-events-title {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] - 2) . "px;
	}
	
	.tribe-events-photo .tribe-events-list-event-title,
	.tribe-events-photo .tribe-events-list-event-title a {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h3_font_font_size'] + 2) . "px;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.tribe-events-venue-widget .vcalendar .entry-title, 
	.tribe-events-venue-widget .vcalendar .entry-title a, 
	.tribe-events-countdown-widget .tribe-countdown-text, 
	.tribe-events-countdown-widget .tribe-countdown-text a,
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .entry-title, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .entry-title a,
	.tribe-mini-calendar [id*=tribe-mini-calendar-month], 
	.tribe-events-grid .tribe-week-event .vevent .entry-title a,
	.cmsmasters_event_month,
	.tribe-events-list .tribe-events-day-time-slot > h5, 
	.tribe-events-tooltip .entry-title,
	.tribe-events-list .tribe-events-list-separator-month,
	.tribe-bar-filters-inner > div label, 
	table.tribe-events-calendar tbody td .tribe-events-month-event-title, 
	table.tribe-events-calendar tbody td .tribe-events-month-event-title a, 
	.tribe-mobile-day .tribe-events-read-more {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h4_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h4_font_text_decoration'] . ";
	}
	
	.tribe-this-week-events-widget .tribe-this-week-event .entry-title,
	.tribe-this-week-events-widget .tribe-this-week-event .entry-title a,
	.tribe-events-venue-widget .vcalendar .entry-title, 
	.tribe-events-venue-widget .vcalendar .entry-title a, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .entry-title, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .entry-title a,
	.widget .vcalendar .entry-title, 
	.widget .vcalendar .entry-title a, 
	.tribe-mini-calendar-list-wrapper .entry-title,
	.tribe-mini-calendar-list-wrapper .entry-title a,
	table.tribe-events-calendar tbody td .tribe-events-month-event-title, 
	table.tribe-events-calendar tbody td .tribe-events-month-event-title a,
	.tribe-events-tooltip .entry-title,
	.tribe-events-list .tribe-events-day-time-slot > h5, 
	.tribe-events-list .tribe-events-list-separator-month {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_line_height'] - 2) . "px;
	}
	
	.tribe-mini-calendar [id*=tribe-mini-calendar-month], 
	.tribe-events-grid .tribe-week-event .vevent .entry-title a,
	.cmsmasters_event_month {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h4_font_line_height'] - 6) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.cmsmasters_event_big_month,
	.cmsmasters_event_big_week,
	.cmsmasters_sidebar .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info,
	.cmsmasters_sidebar .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info a,
	.cmsmasters_sidebar .tribe-events-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info,
	.cmsmasters_sidebar .tribe-events-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info a,
	.cmsmasters_sidebar .tribe-events-countdown-widget .tribe-countdown-text a,
	.tribe-events-venue-widget .tribe-venue-widget-venue-name a {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h5_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_event_big_week {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_sidebar .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info,
	.cmsmasters_sidebar .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info a,
	.cmsmasters_sidebar .tribe-events-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info,
	.cmsmasters_sidebar .tribe-events-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info a {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h5_font_font_size'] - 1) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.tribe-this-week-events-widget .tribe-this-week-event .duration, 
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue,
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a,
	.tribe-this-week-events-widget .tribe-events-page-title, 
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-under,
	.widget .vcalendar .cmsmasters_widget_event_info, 
	.widget .vcalendar .cmsmasters_widget_event_info a, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a, 
	.tribe-events-organizer .cmsmasters_events_organizer_header_right a, 
	#tribe-events-content > .tribe-events-button, 
	table.tribe-events-calendar tbody td .tribe-events-viewmore a,
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item, 
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item a, 
	.cmsmasters_single_event .tribe-events-cost, 
	.cmsmasters_single_event .cmsmasters_single_event_header_right a, 
	.tribe-events-list .tribe-events-event-meta .published, 
	.tribe-events-list .tribe-events-event-meta .published a, 
	.tribe-events-list .tribe-events-event-meta .tribe-events-address,
	.tribe-events-list .tribe-events-event-cost, 
	.tribe-events-list .tribe-events-event-meta,  
	.tribe-events-list .tribe-events-event-meta a, 
	.tribe-events-photo .tribe-events-event-meta, 
	.tribe-events-photo .tribe-events-event-meta a, 
	.cmsmasters_single_event .tribe-events-schedule, 
	.cmsmasters_single_event .tribe-events-schedule a, 
	.tribe-events-venue .tribe-events-event-meta, 
	.tribe-events-venue .tribe-events-event-meta a, 
	.tribe-events-organizer .tribe-events-event-meta, 
	.tribe-events-organizer .tribe-events-event-meta a, 
	.tribe-events-venue .cmsmasters_events_venue_header_right a, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a, 
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info, 
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info a, 
	.tribe-mobile-day .tribe-events-event-schedule-details, 
	.tribe-mobile-day .tribe-event-schedule-details {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_h6_font_google_font']) . $cmsmasters_option['charity-ngo' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['charity-ngo' . '_h6_font_text_decoration'] . ";
	}
	
	.tribe-events-organizer .tribe-events-event-meta, 
	.tribe-events-organizer .tribe-events-event-meta a, 
	.tribe-events-venue .tribe-events-event-meta, 
	.tribe-events-venue .tribe-events-event-meta a, 
	.cmsmasters_single_event .tribe-events-cost, 
	.cmsmasters_single_event .tribe-events-schedule, 
	.cmsmasters_single_event .tribe-events-schedule a, 
	.tribe-events-list .tribe-events-event-meta .published, 
	.tribe-events-list .tribe-events-event-meta .published a, 
	.tribe-events-list .tribe-events-event-meta .tribe-events-address, 
	.tribe-events-list .tribe-events-event-meta, 
	.tribe-events-list .tribe-events-event-meta a, 
	.tribe-events-list .tribe-events-event-cost {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] + 2) . "px;
	}
	
	.tribe-this-week-events-widget .tribe-this-week-event .duration, 
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue,
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a,
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-under,
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a, 
	.widget .vcalendar .cmsmasters_widget_event_info, 
	.widget .vcalendar .cmsmasters_widget_event_info a, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a, 
	table.tribe-events-calendar tbody td .tribe-events-viewmore a,
	ul.tribe-related-events .tribe-related-event-info .published {
		font-size:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['charity-ngo' . '_h6_font_line_height'] - 4) . "px;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.cmsmasters_sidebar.sidebar_layout_11 .tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-under,
	.tribe-events-grid .tribe-grid-header span,
	table.tribe-events-calendar thead th, 
	#tribe-bar-views .tribe-bar-views-list li, 
	#tribe-bar-views .tribe-bar-views-list li a {
		font-family:" . charity_ngo_get_google_font($cmsmasters_option['charity-ngo' . '_button_font_google_font']) . $cmsmasters_option['charity-ngo' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['charity-ngo' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['charity-ngo' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['charity-ngo' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['charity-ngo' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['charity-ngo' . '_button_font_text_transform'] . ";
	}
	
	.cmsmasters_sidebar.sidebar_layout_11 .tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-under,
	.tribe-events-grid .tribe-grid-header span,
	table.tribe-events-calendar thead th {
		line-height:20px;
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish Events Font Styles ******************/


";

}


	return apply_filters('charity_ngo_theme_fonts_filter', $custom_css);
}

