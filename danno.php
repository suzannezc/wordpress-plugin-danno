<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/wrdsb
 * @since             0.0.1
 * @package           Danno
 *
 * @wordpress-plugin
 * Plugin Name:       Danno
 * Plugin URI:        https://github.com/wrdsb/wordpress-plugin-danno
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.0.1
 * Author:            WRDSB
 * Author URI:        https://github.com/wrdsb
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       danno
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-danno-activator.php
 */
function activate_danno() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-danno-activator.php';
	Danno_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-danno-deactivator.php
 */
function deactivate_danno() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-danno-deactivator.php';
	Danno_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_danno' );
register_deactivation_hook( __FILE__, 'deactivate_danno' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-danno.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.0.1
 */
function run_danno() {

	$plugin = new Danno();
	$plugin->run();

}
run_danno();
