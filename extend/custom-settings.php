<?php

/**
* Create link to the menu page.
*/
add_action('admin_menu', 'ISG_create_menu');
function ISG_create_menu() {
	add_menu_page('Theme Settings', 'Theme Settings', 'administrator', 'ISG-theme-settings', 'FPS_settings_page', 'dashicons-admin-generic' , 3);	
}

/**
* Create settings fields.
*/
add_action( 'admin_init', 'register_themesettings' );
	function register_themesettings() {

		register_setting( 'theme-settings-general', 'LatestPostCount' );


		register_setting( 'theme-settings-general', 'ShowFrontCategoryOne' );
		register_setting( 'theme-settings-general', 'FrontCategoryOne' );
		register_setting( 'theme-settings-general', 'FrontCategoryOneNumber' );

		register_setting( 'theme-settings-general', 'ShowFrontCategoryTwo' );
		register_setting( 'theme-settings-general', 'FrontCategoryTwo' );
		register_setting( 'theme-settings-general', 'FrontCategoryTwoNumber' );

		register_setting( 'theme-settings-general', 'ShowFrontCategoryThree' );
		register_setting( 'theme-settings-general', 'FrontCategoryThree' );
		register_setting( 'theme-settings-general', 'FrontCategoryThreeNumber' );
	}

/** 
* Create the markup for the options page
*/
function FPS_settings_page() {
	require_once __DIR__ . '/admin/FrontPageSettings.php';	
	} 
?>