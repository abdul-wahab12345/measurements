<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://abdulwahab.live/
 * @since             1.0.0
 * @package           Measurements
 *
 * @wordpress-plugin
 * Plugin Name:       Measurements
 * Plugin URI:        http://abdulwahab.live/measurements
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Abdul Wahab
 * Author URI:        http://abdulwahab.live/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       measurements
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MEASUREMENTS_VERSION', '1.0.0' );


define("MEASUREMENTS_PATH",plugin_dir_path( __FILE__ ));
define("MEASUREMENTS_URL",plugin_dir_url( __FILE__ ));


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-measurements-activator.php
 */
function activate_measurements() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-measurements-activator.php';
	Measurements_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-measurements-deactivator.php
 */
function deactivate_measurements() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-measurements-deactivator.php';
	Measurements_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_measurements' );
register_deactivation_hook( __FILE__, 'deactivate_measurements' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-measurements.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_measurements() {

	$plugin = new Measurements();
	$plugin->run();

}
run_measurements();
