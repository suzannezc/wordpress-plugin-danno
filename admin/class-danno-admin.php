<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/wrdsb
 * @since      0.0.1
 *
 * @package    Danno
 * @subpackage Danno/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Danno
 * @subpackage Danno/admin
 * @author     WRDSB <website@wrdsb.on.ca>
 */
class Danno_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.0.1
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	public function admin_menu() {
		add_menu_page( 'Bookings', 'Bookings', 'administrator', 'danno-menu', array( $this, 'danno_menu' ));
		add_submenu_page( 'danno-menu', 'Resources', 'Resources', 'administrator', 'danno-resources', array( $this, 'resources_menu' ));
		add_submenu_page( 'danno-menu', 'Resource Types', 'Resource Types', 'administrator', 'danno-resource-cats', array( $this, 'resource_cats_menu' ));
		add_submenu_page( 'danno-menu', 'Services', 'Services', 'administrator', 'danno-services', array( $this, 'services_menu' ));
	}

	public function danno_menu() {
		echo '<div class="wrap">';
		echo '<h1 class="wp-heading-inline">Bookings</h1>';
		echo '<p>3-month date picker here</p>';
		echo '</div>';
	}

	public function resources_menu() {
		echo '<div class="wrap">';
		echo '<h1 class="wp-heading-inline">Resources</h1>';
		echo '</div>';
	}

	public function resource_cats_menu() {
		echo '<div class="wrap">';
		echo '<h1 class="wp-heading-inline">Resource Types</h1>';
		echo '</div>';
	}

	public function services_menu() {
		echo '<div class="wrap">';
		echo '<h1 class="wp-heading-inline">Services</h1>';
		echo '</div>';
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    0.0.1
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Danno_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Danno_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/danno-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    0.0.1
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Danno_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Danno_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/danno-admin.js', array( 'jquery' ), $this->version, false );

	}

}
