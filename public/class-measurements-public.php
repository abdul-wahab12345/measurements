<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://abdulwahab.live/
 * @since      1.0.0
 *
 * @package    Measurements
 * @subpackage Measurements/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Measurements
 * @subpackage Measurements/public
 * @author     Abdul Wahab <rockingwahab9@gmail.com>
 */
class Measurements_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/measurements-public.css', array(), $this->version, 'all' );

		global $post;
		$profile = get_option('aw_profile_page');


		if($profile == $post->ID)
			wp_enqueue_style( 'swiper-style-min', "https://unpkg.com/swiper/swiper-bundle.min.css" );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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
		global $post;
		$profile = get_option('aw_profile_page');

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/measurements-public.js', array( 'jquery' ), $this->version, false );

		if($profile == $post->ID)
			wp_enqueue_script( 'swiper-script-min', "https://unpkg.com/swiper/swiper-bundle.min.js", array('jquery') );


	}

	/*
	*Change Template Callback
	*/

	public function aw_change_template($template){

		global $post;

		$profile = get_option('aw_profile_page');

		if($profile && $post->ID == $profile){

			$template = plugin_dir_path( __FILE__ ) . "partials/profile.php";

		}


		return $template;

	}


	/*
	*Add my account page callback
	*/

	public function aw_add_my_account_page($menu_links ){


		$new = array( 'men' => 'Measurements' );

		$menu_links = array_slice( $menu_links, 0, 1, true ) 
		+ $new 
		+ array_slice( $menu_links, 1, NULL, true );

		return $menu_links;

	}

	public function add_endpoint(){
		add_rewrite_endpoint( 'men', EP_PAGES );
		add_rewrite_endpoint( 'women', EP_PAGES );
	}

	public function aw_my_account_endpoint_content_men(){

		include plugin_dir_path( __FILE__ ) . "partials/men-profile.php";

	}

	public function aw_my_account_endpoint_content_women(){

		include plugin_dir_path( __FILE__ ) . "partials/women-profile.php";

	}

	public function footer(){

		$my_account_page = get_permalink( get_option('woocommerce_myaccount_page_id') );
		$men_url = $my_account_page . "men";
		$women_url = $my_account_page . "women";

		?>

		<script>
			

			var $ = jQuery;

			$(document).ready(function(){


				$('li.woocommerce-MyAccount-navigation-link--men').append(`

					<ul class="aw_measurements">

					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--men-child">
					<a href="<?= $men_url;?>">Men</a>
					</li>
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--women">
					<a href="<?= $women_url;?>">Women</a>
					</li>

					</ul>

					`);

			});

		</script>

		<style>


		ul.aw_measurements{

			display: none;

		}

		li.woocommerce-MyAccount-navigation-link--men:hover ul.aw_measurements{
			display: block;
		}

		#profile_div{
			margin: 10px;
		}


	</style>

	<?php

}


	/*
	*Show dropdown to select profiles
	*/

	public function before_add_cart_button(){

		$profiles = get_posts(['post_type' => "profiles","numberposts" => -1,"author" => get_current_user_id()]);
		$profile = get_option('aw_profile_page');
		$my_account_page = get_permalink( get_option('woocommerce_myaccount_page_id') ) . "men";




		?>
		<div id="profile_div">

			<label for="aw_profiles">Profile</label>
			<select required name="aw_profile">
				
				<option value="">Select Profile</option>

				<?php

				foreach ($profiles as $key => $value) {
					?> <option value="<?= $value->ID;?>"><?= $value->post_title;?></option> <?php
				}

				?>

			</select>

			<a href="<?=$my_account_page;?>">Measurements</a>


		</div>


		<?php

	}


	/*
	*add profile data to cart
	*/

	public function aw_cart_item_data($cart_item_data,$product_id){

		if(isset($_POST['aw_profile'])) {

			$cart_item_data['aw_profile'] = $_POST['aw_profile'];

		}	


		return $cart_item_data;

	}

	/*
	*Show profile in cart
	*/

	public function show_in_cart($item_data, $cart_item){


		if ( empty( $cart_item['aw_profile'] ) ) {
			return $item_data;
		}

		$item_data[] = array(
			'key'     => __( 'Profile', 'aw_profile' ),
			'value'   => get_the_title( $cart_item['aw_profile'] ),
			'display' => '',
		);

		return $item_data;

	}


	/*
	*Save Profile
	*/

	public function save_profile($item, $cart_item_key, $values, $order){


		if ( empty( $values['aw_profile'] ) ) {
			return;
		}

		$url = get_edit_post_link($values['aw_profile']);

		$item->add_meta_data( __( 'Profile', 'iconic' ), "<a href='{$url}'>" . get_the_title($values['aw_profile']) . "</a>" );

	}


	/*
	*Save Profile
	*/

	public function save_profile_data(){

		if(isset($_POST['aw_save_profile'])){

			$type = $_POST['product_type'];
			$profile_name = $_POST['profile_name'];
			$unit = $_POST['unit_selector'];

			$measurements = $_POST['aw_measurement'];

			if(isset($_POST['old_id'])){
				$id = $_POST['old_id'];
				$id = wp_insert_post(['ID' => $id,'post_type' => 'profiles', 'post_title' => $profile_name,'post_status' => 'publish']);
			}else{
				$id = wp_insert_post(['post_type' => 'profiles', 'post_title' => $profile_name,'post_status' => 'publish']);
			}


			update_post_meta($id,'type',$type);
			update_post_meta($id,'unit',$unit);
			update_post_meta($id,'measurements',$measurements);

			wp_redirect($_POST['redirect']);
			die;

		}

	}

}

	/*
	*get measurement
	*/

	function aw_get_m($id,$m){

		if(!$id){
			return "";
		}


		$measurements = get_post_meta($id,'measurements',true);

		if(!$measurements){
			return "";
		}

		if(!isset($measurements[$m])){
			return "";
		}

		return $measurements[$m];

	}

