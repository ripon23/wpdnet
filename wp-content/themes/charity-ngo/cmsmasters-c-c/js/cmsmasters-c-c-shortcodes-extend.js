/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version		1.0.0
 * 
 * Visual Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */
 



/**
 * Blog Extend
 */

var blog_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_blog.fields) {
	if (id === 'filter_text') { 
		delete cmsmastersShortcodes.cmsmasters_blog.fields[id];
	} else {
		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_blog.fields = blog_new_fields;



/**
 * Portfolio Extend
 */

var portfolio_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_portfolio.fields) {
	if (id === 'columns') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['def'] = '3';
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'metadata_grid') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['def'] = 'title,excerpt,categories,rollover,more';
		
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['more'] = cmsmasters_shortcodes.choice_more;
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'metadata_puzzle') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['def'] = 'title,categories,comments,likes';
		
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['rollover'];
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'gap') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['depend'] = 'layout:puzzle';
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'filter_text') { 
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else {
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_portfolio.fields = portfolio_new_fields;



/**
 * Quotes Extend
 */

var quotes_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_quotes.fields) {
	if (id === 'mode') {
		quotes_new_fields[id] = cmsmastersShortcodes.cmsmasters_quotes.fields[id];
		
		
		quotes_new_fields['type'] = { 
			type : 		'radio', 
			title : 	composer_shortcodes_extend.quotes_field_slider_type_title, 
			descr : 	composer_shortcodes_extend.quotes_field_slider_type_descr, 
			def : 		'box', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'box' : 	composer_shortcodes_extend.quotes_field_type_choice_box, 
						'center' : 	composer_shortcodes_extend.quotes_field_type_choice_center 
			}, 
			depend : 	'mode:slider'  
		};
	} else {
		quotes_new_fields[id] = cmsmastersShortcodes.cmsmasters_quotes.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_quotes.fields = quotes_new_fields;



/**
 * Posts Slider Extend
 */

var cmsmasters_posts_slider_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {
	if (id === 'columns') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['def'] = '3';
		
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['depend'];  
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'amount') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'blog_metadata') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['def'] = 'title,excerpt,date,categories,author,comments,likes,more';
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'portfolio_metadata') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['def'] = 'title,excerpt,categories,more';
		
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises']['more'] = cmsmasters_shortcodes.choice_more;
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else {
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_posts_slider.fields = cmsmasters_posts_slider_new_fields;


/**
 * Featured Block Extend
 */
var cmsmasters_featured_block_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_featured_block.fields) {
	if (id === 'border_radius') {
		cmsmasters_featured_block_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_block.fields[id];
		
		
		cmsmasters_featured_block_new_fields['border_width'] = { 
			type : 		'range', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_border_width_title, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.size_note_pixel + "</span>", 
			def : 		'0', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			max : 		'20' 
		},
		cmsmasters_featured_block_new_fields['border_style'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_border_style_title, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'solid' : 	cmsmasters_shortcodes.choice_solid, 
						'dotted' : 	cmsmasters_shortcodes.choice_dotted, 
						'dashed' : 	cmsmasters_shortcodes.choice_dashed, 
						'double' : 	cmsmasters_shortcodes.choice_double, 
						'groove' : 	cmsmasters_shortcodes.choice_groove, 
						'ridge' : 	cmsmasters_shortcodes.choice_ridge, 
						'inset' : 	cmsmasters_shortcodes.choice_inset, 
						'outset' : 	cmsmasters_shortcodes.choice_outset 
			} 
		},	
		cmsmasters_featured_block_new_fields['border_color'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_border_color_title, 
			descr : 	composer_shortcodes_extend.cmsmasters_featured_block_border_color_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.clear_color_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
		}	
	} else if (id === 'bottom_padding')  {
		cmsmasters_featured_block_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_block.fields[id];
		
		cmsmasters_featured_block_new_fields['resp_padding_check'] = { 
			type : 		'checkbox', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_resp_padding_check, 
			descr : 	composer_shortcodes_extend.cmsmasters_featured_block_resp_padding_check_descr, 
			def : 		'false', 
			required : 	false, 
			width : 	'half',  
			choises : { 
						'true' : 	cmsmasters_shortcodes.choice_show 
			} 
		},		
		cmsmasters_featured_block_new_fields['resp_padding'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_resp_padding, 
			descr : 	'', 
			def : 		'768', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'1024' : 	composer_shortcodes_extend.cmsmasters_featured_block_medium_tablet, 
						'768' : 	composer_shortcodes_extend.cmsmasters_featured_block_small_tablet, 
						'600' : 	composer_shortcodes_extend.cmsmasters_featured_block_big_phone, 
						'540' : 	composer_shortcodes_extend.cmsmasters_featured_block_normal_phone, 
						'320' : 	composer_shortcodes_extend.cmsmasters_featured_block_small_phone
			}, 
			depend : 	'resp_padding_check:true'  
		},
		cmsmasters_featured_block_new_fields['resp_padding_top'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_resp_padding_top, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.size_note_short + ' ' + cmsmasters_shortcodes.value_zero + "</span>", 
			def : 		'0', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'resp_padding_check:true' 
		},
		cmsmasters_featured_block_new_fields['resp_padding_bottom'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_resp_padding_bottom, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.size_note_short + ' ' + cmsmasters_shortcodes.value_zero + "</span>", 
			def : 		'0', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'resp_padding_check:true' 
		}
	} else {
		cmsmasters_featured_block_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_block.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_featured_block.fields = cmsmasters_featured_block_new_fields;



/**
 * Featured Campaign Extend
 */
if (cmsmasters_composer_donations() === 'true') {
	var cmsmasters_featured_campaign_new_fields = {};


	for (var id in cmsmastersShortcodes.cmsmasters_featured_campaign.fields) {
		if (id === 'campaign_metadata') {
			cmsmasters_featured_campaign_new_fields['campaign_color'] = { 
				type : 		'rgba', 
				title : 	composer_shortcodes_extend.featured_campaign_color_title, 
				descr : 	'', 
				def : 		composer_shortcodes_extend.featured_campaign_color, 
				required : 	false, 
				width : 	'half' 
			};
			
			cmsmasters_featured_campaign_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_campaign.fields[id];
		} else {
			cmsmasters_featured_campaign_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_campaign.fields[id];
		}
	}


	cmsmastersShortcodes.cmsmasters_featured_campaign.fields = cmsmasters_featured_campaign_new_fields;
}
 

 


