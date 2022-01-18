<?php

/**
 * Fired during plugin activation
 *
 * @link       http://abdulwahab.live/
 * @since      1.0.0
 *
 * @package    Measurements
 * @subpackage Measurements/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Measurements
 * @subpackage Measurements/includes
 * @author     Abdul Wahab <rockingwahab9@gmail.com>
 */
class Measurements_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {


        $profile = get_option('aw_profile_page');

        if(!$profile){

            $id = wp_insert_post(['post_title' => "Profile","post_type" => "page","post_content" => "","post_status" => "publish"]);

            update_option("aw_profile_page",$id);


        }

    }

}
