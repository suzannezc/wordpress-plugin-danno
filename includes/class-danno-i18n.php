<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/wrdsb
 * @since      0.0.1
 *
 * @package    Danno
 * @subpackage Danno/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      0.0.1
 * @package    Danno
 * @subpackage Danno/includes
 * @author     WRDSB <website@wrdsb.on.ca>
 */
class Danno_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    0.0.1
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'danno',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
