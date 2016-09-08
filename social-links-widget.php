<?php
/**
*
* Plugin Name: Social Links Widget
* Description: Adds social icons with links to profiles under the widget section for your WordPress setup
* Version: 1.0
* Author: Kiran Dash
**/

// Exit if Accessed Directly
if( !defined('ABSPATH') ){
	exit;
}

// Load Scripts
require_once( plugin_dir_path(__FILE__) . 'includes/social-links-widget-scripts.php' );

// Load Class
require_once( plugin_dir_path(__FILE__) . 'includes/social-links-widget-class.php' );

// Register Widget
function register_social_links_widget() {
	register_widget( 'Social_Links_Widget' );
}

add_action( 'widgets_init', 'register_social_links_widget' );

?>