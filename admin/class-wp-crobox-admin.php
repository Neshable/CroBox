<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://neshable.com
 * @since      1.0.0
 *
 * @package    Wp_Crobox
 * @subpackage Wp_Crobox/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Crobox
 * @subpackage Wp_Crobox/admin
 * @author     Nesho Sabakov <info@neshable.com>
 */
class Wp_Crobox_Admin {

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

		wp_enqueue_style('wp-color-picker');

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-crobox-admin.css', array(), $this->version, 'all' );

		wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '4.4.0', 'all');

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
		 * defined in Wp_Crobox_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Crobox_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-crobox-admin.js', array( 'jquery', 'wp-color-picker' ), $this->version, false );

	}

	public function add_plugin_admin_menu() {

    /*
     * Add a settings page for this plugin to the Settings menu.
     *
     * NOTE:  Alternative menu locations are available via WordPress administration menu functions.
     *
     *        Administration Menus: http://codex.wordpress.org/Administration_Menus
     *
     */
    add_options_page( 'WP CroBox Setup', 'WP CroBox', 'manage_options', $this->plugin_name, array($this, 'display_plugin_setup_page')
    );
	}

	 /**
	 * Add settings action link to the plugins page.
	 *
	 * @since    1.0.0
	 */
	 
	public function add_action_links( $links ) {
	    /*
	    *  Documentation : https://codex.wordpress.org/Plugin_API/Filter_Reference/plugin_action_links_(plugin_file_name)
	    */
	   $settings_link = array(
	    '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __('Settings', $this->plugin_name) . '</a>',
	   );
	   return array_merge(  $settings_link, $links );

	}

	/**
	 * Render the settings page for this plugin.
	 *
	 * @since    1.0.0
	 */
	 
	public function display_plugin_setup_page() {
	    include_once( 'partials/wp-crobox-admin-display.php' );
	}

	public function options_update() {
    	register_setting($this->plugin_name, $this->plugin_name, array($this, 'validate'));
 	}

	public function validate($input) {
	    // All checkboxes inputs        
	    $valid = array();

	    // General settings
	    $valid['main_switch'] = (isset($input['main_switch']) && !empty($input['main_switch'])) ? 1 : 0;
	    $valid['enable_footer'] = (isset($input['enable_footer']) && !empty($input['enable_footer'])) ? 1 : 0;
	    $valid['cta_text'] = sanitize_text_field($input['cta_text']);
	    $valid['button_text'] = sanitize_text_field($input['button_text']);
	    $valid['footer_text'] = sanitize_text_field($input['footer_text']);
	    $valid['button_url'] = esc_url($input['button_url']);
	    $valid['front_icon'] = sanitize_text_field($input['front_icon']);
	    $valid['scroll_position'] = sanitize_text_field($input['scroll_position']);

	    // Colors
	    $valid['pop_color'] = sanitize_text_field($input['pop_color']);
	    $valid['button_color'] = sanitize_text_field($input['button_color']);
	    $valid['form_background'] = sanitize_text_field($input['form_background']);



	    return $valid;
	 }

}
