<?php 
/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version		1.0.0
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function charity_ngo_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'charity-ngo');
	$tabs['export'] = esc_attr__('Export', 'charity-ngo');
	
	
	return $tabs;
}


function charity_ngo_options_demo_sections() {
	$tab = charity_ngo_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'charity-ngo');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'charity-ngo');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function charity_ngo_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = charity_ngo_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => 'charity-ngo' . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'charity-ngo'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'charity-ngo'), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => 'charity-ngo' . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'charity-ngo'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file", 'charity-ngo'), 
			'type' => 'button', 
			'std' => esc_html__('Export Theme Settings', 'charity-ngo'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

