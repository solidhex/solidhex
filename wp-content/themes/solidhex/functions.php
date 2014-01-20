<?php

	/**
	 * Settings
	 */
	
	// turn off admin bar
	add_filter( 'show_admin_bar', '__return_false' );
	
	// remove WP version from meta tags
	remove_action('wp_head', 'wp_generator');
	
?>