<?php
/**
 * DMS Admin
 * 
 * @package DMS_Admin
 * @author Dixon Martinez <dixonalvarezm@gmail.com>
 * @license GPL-2.0+
 * @link https://github.com/dixonmartinez/dms-admin-plugin
 * @copyright 2019 Dixon Martinez
 * 
 * @wordpress-plugin
 * Plugin Name: 		DMS Admin
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
if ( ! defined( 'WPINC' ) ) {
	die();
}

/**
 * Currently plugin version
 * 
 */
if ( ! defined( 'DMS_ADMIN_VERSION' ) ) {
	define( 'DMS_ADMIN_VERSION', '0.0.0' );
}

if ( ! function_exists( 'activate_dms_admin' ) ) {
	/**
	 * The code that runs during plugin activation.
	 */
	function activate_dms_admin() {
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-dms-admin-activator.php';
		DMS_Admin_Activator::activate();
	};
}

if ( ! function_exists( 'deactivate_dms_admin' ) ) {
	function deactivate_dms_admin() {
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-dms-admin-deactivator.php';
		DMS_Admin_Deactivator::deactivate();
	};
}

register_activation_hook( __FILE__, 'activate_dms_admin' );
register_deactivation_hook( __FILE__, 'deactivate_dms_admin' );

