<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://neshable.com
 * @since      1.0.0
 *
 * @package    Wp_Crobox
 * @subpackage Wp_Crobox/admin/partials
 */
?>


  <h2><?php _e( 'CroBox Settings Page', $this->plugin_name); ?></h2>
 

  <h2 class="nav-tab-wrapper">
        <a href="#main-settings" class="nav-tab nav-tab-active"><?php _e('Main Settings', $this->plugin_name);?></a>
        <a href="#color-settings" class="nav-tab"><?php _e('Color Settings', $this->plugin_name);?></a>
        <a href="#custom-css" class="nav-tab"><?php _e('Custom CSS', $this->plugin_name);?></a>
  </h2>

    
    <form method="post" name="crobox_options" action="options.php">


    <?php
        //Grab all options
        $options = get_option($this->plugin_name);

        $cta_text = $options['cta_text'];
        $main_switch = $options['main_switch'];
        $button_color = $options['button_color'];
        $pop_color = $options['pop_color'];
        $button_text = $options['button_text'];
        $button_url = $options['button_url'];
        $enable_footer = $options['enable_footer'];
        $footer_text = $options['footer_text'];
        $form_background = $options['form_background'];
        $front_icon = $options['front_icon'];
        $scroll_position = $options['scroll_position'];

        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);

    ?>

   <div id="main-settings" class="wrap metabox-holder columns-2 wp_cbf-metaboxes">
   <h2><?php _e( 'General settings', $this->plugin_name); ?></h2>
   <p><?php _e( 'General options for the CroBox.', $this->plugin_name); ?></p>
	<hr>

   <table class="form-table">
	    	<tr valign="top">
	    		<th scope="row">Enable CroBox</th>
	    		<td>
	    		<input type="checkbox" name="<?php echo $this->plugin_name; ?>[main_switch]" value="1" <?php checked($main_switch, 1); ?> />
	    		<i>Enable or disable your crobox</i>
	    		</td>
	    	</tr>

	        <tr valign="top">
	        <th scope="row">Main Box Text</th>
	        <td>
	        ​<textarea name="<?php echo $this->plugin_name;?>[cta_text]" rows="3" cols="50"><?php echo $cta_text; ?></textarea>
	        </td>

	        </tr>
	         
	        <tr valign="top">
	        <th scope="row">Box Button Text</th>
	        <td><input type="text" name="<?php echo $this->plugin_name;?>[button_text]" 
	        value="<?php echo $button_text; ?>" placeholder="Button text"/></td>
	        </tr>

	        <tr valign="top">
	        <th scope="row">Box Button URL</th>
	        <td><input type="text" name="<?php echo $this->plugin_name;?>[button_url]" 
	        value="<?php echo $button_url; ?>" placeholder="Button URL"/></td>
	        </tr>

	        <tr valign="top">
	        	<th scope="row">Enable Footer?</th>
		        <td>
		        <input type="checkbox" id="<?php echo $this->plugin_name; ?>-enable_footer" name="<?php echo $this->plugin_name; ?>[enable_footer]" value="1" <?php checked($enable_footer, 1); ?> />
		        </td>
	        </tr>

	        <tr valign="top">
	        <th scope="row">Footer Text</th>
	        <td><input type="text" name="<?php echo $this->plugin_name;?>[footer_text]" 
	        value="<?php echo $footer_text; ?>" placeholder="Footer text"/></td>
	        </tr>

	        <tr valign="top">
	        <th scope="row">Show at what scroll position</th>
	        <td><input type="number" min="0" max="100" name="<?php echo $this->plugin_name;?>[scroll_position]" value="<?php echo $scroll_position; ?>" /> (in % of total page height)</td>
	        </tr>
	        
	        <tr valign="top">
	        <th scope="row">Front pop icon<br> 
	        </th>
	        <td><input type="text" name="<?php echo $this->plugin_name;?>[front_icon]" value="<?php echo get_option($this->plugin_name)['front_icon']; ?>" /> Preview: <i class="fa fa-lg <?php echo $front_icon; ?>" aria-hidden="true"></i></td>

	        </tr>
	</table>
	</div>

	<?php
		// Get other options as partials
		require_once('wp-crobox-admin-colors.php');
		require_once('wp-crobox-admin-contact.php');

		submit_button('Save Your Changes', 'primary', 'submit', TRUE);

	?>


    </form>


