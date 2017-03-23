<?php

/**
 * Fired during plugin activation
 *
 * @link       http://neshable.com
 * @since      1.0.0
 *
 * @package    Wp_Crobox
 * @subpackage Wp_Crobox/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wp_Crobox
 * @subpackage Wp_Crobox/includes
 * @author     Nesho Sabakov <info@neshable.com>
 */

class Wp_Crobox_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */

	
	public static function activate() {
		// Check if the options are already available
		if(!get_option('wp-crobox')) {
	        
	        $default = array(
	        	
	            'cta_text' => 'Get the latest news and promotions directly to your inbox! Join us now!',
	            'button_text' => 'Sign up',
	            'front_icon' => 'fa-envelope',
	            'scroll_position' => 50,
	            'pop_color' => '#0A54B8',
	            'button_color' => '#0A54B8',
	            'form_background' => '#F1F1F1'

	        );
        	// Create the default options for the plugin
        	add_option('wp-crobox', $default);
    	}

	}

}
