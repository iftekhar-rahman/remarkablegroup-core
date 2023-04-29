<?php
/**
 * Plugin Name: Remarkable Group Addon
 * Description: Remarkable Group Addon
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Iftekhar Rahman
 * Author URI:  https://developers.elementor.com/
 * Text Domain: remarkablegroup-addon
 * 
 * Elementor tested up to:     3.5.0
 * Elementor Pro tested up to: 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function remarkablegroup_addon() {

	// Load plugin file
	require_once( __DIR__ . '/includes/plugin.php' );

	// Run the plugin
	\Remarkable_Group_Addon\Plugin::instance();

}
add_action( 'plugins_loaded', 'remarkablegroup_addon' );