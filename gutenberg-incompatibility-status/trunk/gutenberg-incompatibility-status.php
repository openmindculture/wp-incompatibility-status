<?php
/**
 * @package	gutenberg-incompatibility-status
 * @author	Ingo Steinke
 * @version 1.0.0
 *
 * @wordpress-plugin
 * Plugin Name: Gutenberg Incompatibility Status
 * Text Domain: gutenberg-incompatibility-status
 * Domain Path: /languages
 * Plugin URI: https://github.com/openmindculture/wp-incompatibility-status/
 * Description: Gutenberg Incompatibility Status adds a status message to the admin dashboard to display possible incompatibility issues using the block editor and full-site editing.
 * Short Description: Show Gutenberg Incompatibility Status in WP-Admin
 * Version: 1.0.0
 *  Author: openmindculture
 * Author URI: https://wordpress.org/support/users/openmindculture/
 * Requires at least: 6.0
 * Tested up to: 6.3
 * Requires PHP: 7.4
 */

if ( is_admin() ) {
	define( 'openmindculture_gutenbergstatus__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
	define( 'openmindculture_gutenbergstatus__PLUGIN_VERSION', '1.0.0');


}
