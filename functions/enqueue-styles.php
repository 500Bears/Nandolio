<?php

/* Theme Styles
---------------------------------------------------------------------------------------------------- */

function theme_styles() {

	wp_enqueue_style(
		'all.css',
		get_template_directory_uri() . '/css/all.css',
		array(),
		'9920'
	);

	wp_enqueue_style(
		'style.css',
		get_template_directory_uri() . '/style.css',
		array(),
		'9920'
	);

}
add_action('wp_enqueue_scripts', 'theme_styles');
