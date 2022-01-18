<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://abdulwahab.live/
 * @since      1.0.0
 *
 * @package    Measurements
 * @subpackage Measurements/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Measurements
 * @subpackage Measurements/includes
 * @author     Abdul Wahab <rockingwahab9@gmail.com>
 */
class Measurements {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Measurements_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'MEASUREMENTS_VERSION' ) ) {
			$this->version = MEASUREMENTS_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'measurements';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Measurements_Loader. Orchestrates the hooks of the plugin.
	 * - Measurements_i18n. Defines internationalization functionality.
	 * - Measurements_Admin. Defines all hooks for the admin area.
	 * - Measurements_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-measurements-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-measurements-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-measurements-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-measurements-public.php';

		$this->loader = new Measurements_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Measurements_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Measurements_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Measurements_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		$this->loader->add_action( 'init', $plugin_admin, 'register_post' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Measurements_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

		/*
		*Change Template
		*/

		$this->loader->add_action( 'template_include', $plugin_public, 'aw_change_template' );


		/*
		*Add my account page
		*/

		$this->loader->add_filter ( 'woocommerce_account_menu_items', $plugin_public, 'aw_add_my_account_page',40 );
		$this->loader->add_action( 'init', $plugin_public, 'add_endpoint' );
		$this->loader->add_action( 'woocommerce_account_men_endpoint', $plugin_public, 'aw_my_account_endpoint_content_men' );
		$this->loader->add_action( 'woocommerce_account_women_endpoint', $plugin_public, 'aw_my_account_endpoint_content_women' );

		/*
		*Footer Code js and css
		*/

		$this->loader->add_action('wp_footer',$plugin_public,"footer");

		/*
		*Add Dropdown before cart button to select profiles
		*/

		$this->loader->add_action('woocommerce_before_add_to_cart_button',$plugin_public,'before_add_cart_button');

		/*
		*Add profile data to cart item
		*/

		$this->loader->add_filter('woocommerce_add_cart_item_data',$plugin_public,'aw_cart_item_data',1,2);

		/*
		*Show in cart
		*/

		$this->loader->add_filter('woocommerce_get_item_data',$plugin_public,'show_in_cart',10,2);

		/*
		*Save data in order item
		*/

		$this->loader->add_action('woocommerce_checkout_create_order_line_item',$plugin_public,'save_profile',10,4);

		/*
		*Save Profile
		*/

		$this->loader->add_action("template_redirect",$plugin_public,"save_profile_data");

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Measurements_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
