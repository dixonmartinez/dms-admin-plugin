<?php
/**
 * DMS Admin Plugin
 * 
 * @package DMS_Admin_Plugin
 * @author Dixon Martinez <dixonalvarezm@gmail.com>
 * @license GPL-2.0+
 * @link https://github.com/dixonmartinez/dms-admin-plugin
 * @copyright 2019 Dixon Martinez
 * 
 * @wordpress-plugin
 * Plugin Name: 		DMS Admin Plugin
 * Plugin Uri: 			https://github.com/dixonmartinez/dms-admin-plugin
 * Description: 		This plugin
 * Version: 			0.0.0
 * Author: 				Dixon Martinez
 * Author URI: 			https://dixonmartinez.github.io
 * License: 			GPL2
 * License URI: 		https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: 		dms-admin-plugin
 * Domain Path: 		/languages
 * GitHub Plugin URI: 	https://github.com/dixonmartinez/dms-admin-plugin
 * GitHub Branch:		master
 *
 *
 * {Plugin Name} is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 * {Plugin Name} is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with {Plugin Name}. If not, see {License URI}.
 */

//	If this file is called directly, abort
if ( ! defined( 'WPINC' )) {
	die();
}

// register_activation_hook ( __FILE__, 'dms_active_function' );
// register_deactivation_hook ( __FILE__, 'dms_deactive_function' );

//	Create function dms_active_function if it doesn't exist
if ( ! function_exists( 'dms_active_function' ) ) {
	/**
	 * Activate Function
	 */
	function dms_active_function() {
		echo 'Plugins Function Activate';
	}
}

//	Create function dms_deactive_funtion if it doesn't exist
if ( ! function_exists( 'dms_deactive_funtion' ) ) {
	function dms_deactive_funtion() {
		echo 'Plugins Function Deactivate';
	}
}

function pluginprefix_setup_post_type() {
	// register the "book" custom post type
	register_post_type ( 'book', [ 
			'public' => 'true'
	] );
}
add_action ( 'init', 'pluginprefix_setup_post_type' );
function pluginprefix_install() {
	// trigger our function that registers the custom post type
	pluginprefix_setup_post_type ();

	// clear the permalinks after the post type has been registered
	flush_rewrite_rules ();
}
register_activation_hook ( __FILE__, 'pluginprefix_install' );

function pluginprefix_deactivation() {
	// unregister the post type, so the rules are no longer in memory
	unregister_post_type( 'book' );
	// clear the permalinks to remove our post type's rules from the database
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'pluginprefix_deactivation' );
