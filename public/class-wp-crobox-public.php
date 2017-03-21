<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://neshable.com
 * @since      1.0.0
 *
 * @package    Wp_Crobox
 * @subpackage Wp_Crobox/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Crobox
 * @subpackage Wp_Crobox/public
 * @author     Nesho Sabakov <info@neshable.com>
 */
class Wp_Crobox_Public {

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
		 * defined in Wp_Crobox_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Crobox_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '4.4.0', 'all');

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-crobox-public.css', array(), $this->version, 'all' );

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
		 * defined in Wp_Crobox_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Crobox_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		$data = array(
			    'scrollPos'   => get_option($this->plugin_name)['scroll_position']
			);

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-crobox-public.js', array( 'jquery' ), $this->version, false );

		wp_localize_script( $this->plugin_name, 'phpVars', $data );

	}
	
	public function crobox_main() {
	
		include_once( 'partials/wp-crobox-public-display.php' );
	
	}

	public function hook_css() {
		
		include_once( 'partials/wp-crobox-public-css.php' );
	
	}

}
