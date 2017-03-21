<?php

/**
 * Provide a dynamic head CSS for the plugin
 *
 * 
 *
 * @link       http://neshable.com
 * @since      1.0.0
 *
 * @package    Wp_Crobox
 * @subpackage Wp_Crobox/public/partials
 */

?>

        <style>
            #plus::after {
            	background-color: <?php echo get_option($this->plugin_name)['pop_color']; ?>;
			}
			#popUp a.button {
				background: <?php echo get_option($this->plugin_name)['button_color']; ?>;
			}
			#popUp {
  				background: <?php echo get_option($this->plugin_name)['form_background']; ?>;
  			}
        </style>