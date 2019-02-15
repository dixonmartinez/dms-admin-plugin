<?php

/**
 * Fired during plugin deactivation.
 *
 * @link https://github.com/dixonmartinez/dms-admin-plugin
 * @since 1.0.0
 *
 * @package DMS_Admin
 * @subpackage DMS_Admin/includes
 */

if ( ! class_exists( 'DMS_Admin_Activator' ) ) {
	/**
	 * Fired during plugin deactivation.
	 *
	 * This class defines all code necessary to run during the plugin's activation.
	 *
	 * @since 1.0.0
	 * @package DMS_Admin
	 * @subpackage DMS_Admin/includes
	 * @author Dixon Martinez <dixonalvarezm@gmail.com>
	 */
	class DMS_Admin_Deactivator {
		/**
		 * Short Description.
		 * (use period)
		 *
		 * Long Description.
		 *
		 * @since 1.0.0
		 */
		public static function deactivate() {
			
		}
	}
}