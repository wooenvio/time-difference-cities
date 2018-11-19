<?php

add_action( 'admin_menu', 'tdc_add_menu_page' );

function tdc_add_menu_page() {
	add_menu_page(
		'Time Difference Cities Settings',  // Page title
		'TDC Settings',                     // Menu title
		'manage_options',               // Capability
		'tdc-settings',                 // Menu slug
		'tdc_display_settings_page'     // Callable
	);
}

function tdc_display_settings_page() {

	$local_city = get_option( 'tdc_local_city', 'Madrid' );

	$available_cities = [
		'Madrid',
		'New York',
		'London',
	];

	require_once __DIR__ . '/template/settings-page.php';
}

add_action( 'admin_init', 'tdc_register_settings' );

function tdc_register_settings() {

	register_setting(
		'tdc_settings_group',   // Settings group name
		'tdc_local_city',       // Option name
		'sanitize_text_field'   // Arguments or sanitize funcion
	);
}
