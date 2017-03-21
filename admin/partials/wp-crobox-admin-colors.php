<?php

/**
 * Edit colors tab
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

<div id="color-settings" class="wrap metabox-holder columns-2 wp_cbf-metaboxes hidden">

	<h2><?php esc_attr_e( 'Box Colors', $this->plugin_name ); ?></h2>
        <p><?php _e('Customize the main look of the box', $this->plugin_name);?></p>
    <hr>

    <table class="form-table">
	<tr valign="top">
	        <th scope="row">Pop Color</th>
	        <td>
	        	<input type="text" name="<?php echo $this->plugin_name;?>[pop_color]" 
	        	value="<?php echo $pop_color; ?>" class="my-color-field" data-default-color="#effeff" />
			</td>
	        </tr>

	        <tr valign="top">
	        <th scope="row">Box Button Color</th>
	        <td>
	        	<input type="text" name="<?php echo $this->plugin_name;?>[button_color]" 
	        	value="<?php echo $button_color; ?>" class="my-color-field" data-default-color="#effeff" />
			</td>
	        </tr>
	<tr valign="top">
	        <th scope="row">Box Background Color</th>
	        <td>
	        	<input type="text" name="<?php echo $this->plugin_name;?>[form_background]" 
	        	value="<?php echo $form_background; ?>" class="my-color-field" data-default-color="#effeff" />
			</td>
	        </tr>
	 </table>

</div>