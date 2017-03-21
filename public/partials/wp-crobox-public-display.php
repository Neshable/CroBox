<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://neshable.com
 * @since      1.0.0
 *
 * @package    Wp_Crobox
 * @subpackage Wp_Crobox/public/partials
 */

?>
	<div id="popUp">
	    <div id="close" class="close"><i class="fa fa-times"></i></div>
	    <h2><?php echo get_option($this->plugin_name)['cta_text']; ?></h2>
	    <br>
	    
	    <a href="<?php echo get_option($this->plugin_name)['button_url']; ?>" target="_blank" class="button">
	    	<?php echo get_option($this->plugin_name)['button_text']; ?>
	    </a>
	    <?php 
	     if (get_option($this->plugin_name)['enable_footer'] == 1) {
	     	?>
	     	<span class="footer">
	     		<?php echo get_option($this->plugin_name)['footer_text']; ?>
	     	</span>
	     <?php
	     }
	    ?>
	    
	  </div>
	  <div id="plus"><span>
	  <i class="fa <?php echo get_option($this->plugin_name)['front_icon']; ?>" aria-hidden="true"></i>
	  </span></div>
	</div>
