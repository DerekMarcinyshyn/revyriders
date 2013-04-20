<?php
/**
 * Revy Riders custom theme functions
 *
 * @author  Derek Marcinyshyn <derek@marcinyshyn.com>
 * @since   April 19, 2013
 */

/**
 * Toolbar modifications and tweaks
 */
function toolbar_tweaks() {
	global $wp_admin_bar;

	$wp_admin_bar->remove_menu('wp-logo');
	$wp_admin_bar->remove_menu('about');
	$wp_admin_bar->remove_menu('wporg');
	$wp_admin_bar->remove_menu('documentation');
	$wp_admin_bar->remove_menu('support-forums');
	$wp_admin_bar->remove_menu('feedback');
	$wp_admin_bar->remove_menu('view-site');
	$wp_admin_bar->remove_menu('site-name');
	$wp_admin_bar->remove_menu('s2-site-name');
}

add_action( 'wp_before_admin_bar_render', 'toolbar_tweaks' );
