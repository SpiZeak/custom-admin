<?php
/**
* Plugin Name: WP Custom Admin
* Description: This plugin allows the admins of a Wordpress site to customize the interface.
* Version: 1.0
* Author: Max Trewhitt
* Author URI: https://max.trewhitt.se/
**/

/**
 * Set up CSS variable
 */
function set_color() {
	echo "<style>:root { --admin-color: red; }</style>";
}
add_action('wp_head', 'set_color');
add_action('admin_head', 'set_color');

/**
 * Register and enqueue styles in the WordPress admin.
 */
add_action('admin_enqueue_scripts', function() {
	wp_enqueue_style( 'custom_wp_admin_css', plugins_url('admin.css', __FILE__), false, '1.0.0' );
});

/**
 * Register and enqueue styles on the frontend (the admin bar).
 */
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'custom_wp_admin_css', plugins_url('admin.css', __FILE__), false, '1.0.0' );
} );
