<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://abdulwahab.live/
 * @since      1.0.0
 *
 * @package    Measurements
 * @subpackage Measurements/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Measurements
 * @subpackage Measurements/admin
 * @author     Abdul Wahab <rockingwahab9@gmail.com>
 */
class Measurements_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Measurements_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Measurements_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/measurements-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Measurements_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Measurements_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/measurements-admin.js', array( 'jquery' ), $this->version, false );

	}


	public function register_post(){


		register_post_type('profiles',
			array(
				'labels'      => array(
					'name'          => __('Profiles', 'textdomain'),
					'singular_name' => __('Profile', 'textdomain'),
				),
				'public'      => true,
				'has_archive' => false,
			)
		);	

	}

}
