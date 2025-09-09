<?php
/*
Plugin Name: Edunova Meta Box for Posts
Plugin URI: http://www.edunova.hr/
Description: Custom meta box for displaying important info about schedules and other news.
Author: Zeljko Simic
Version: 1.0
Author URI: https://www.facebook.com/zsimic84
*/

/* Add Meta Box */
function edunova_info_custom_meta() {
	add_meta_box('edunova_meta', __('Edunova Info Box', 'edunova'), 'edunova_info_meta_callback', 'post', 'side', 'default');
}
add_action('add_meta_boxes', 'edunova_info_custom_meta');

/* Output the Content of the Meta Box */
function edunova_info_meta_callback($post) {
	wp_nonce_field(basename( __FILE__ ), 'edunova_info_nonce');
		$edunova_date_stored_meta = get_post_meta($post->ID);
		$edunova_address_stored_meta = get_post_meta($post->ID);
    ?>
	<style>
		#edunova_meta {background-color: #144f71;}
		#edunova_meta .handlediv {color: #ffffff;}
		#edunova_meta .hndle {color: #ffffff; border-color: #2a6182;}
		#edunova_meta .inside {padding-top: 10px; padding-bottom: 15px;}
		#edunova_meta .inside p {overflow: hidden;}
		#edunova_meta .inside p input {background-color: #32749b; color: #ffffff; border-color: #32749b;}
	</style>
	
	<p style="margin: 0px;">
        <input type="text" name="date-meta-text" id="date-meta-text" value="<?php if (isset($edunova_date_stored_meta['date-meta-text'])) echo $edunova_date_stored_meta['date-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Dan, Datum i Vrijeme', 'edunova'); ?>"/>
		<i style="margin-top: 5px; color: #ffffff; opacity: .5;"><?php _e('"U subotu, 15. siječnja, 2015. u 11 sati."', 'edunova'); ?></i>
	</p>
	<span style="display: inline-block; width: 100%; height: 1px; background-color: #2a6182; margin-top: 15px; margin-bottom: 15px;"></span>
	<p style="margin: 0px;">
        <input type="text" name="address-meta-text" id="address-meta-text" value="<?php if (isset($edunova_address_stored_meta['address-meta-text'])) echo $edunova_address_stored_meta['address-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Lokacija, Adresa i Mjesto', 'edunova'); ?>"/>
		<i style="margin-top: 5px; color: #ffffff; opacity: .5;"><?php _e('"U prostorijama Edunove, L. Jagera 5 Osijek."', 'edunova'); ?></i>
	</p>
<?php
}
/* Save Meta Input */
function edunova_info_meta_save($post_id) {
    // Checks save status
    $edunova_info_autosave = wp_is_post_autosave($post_id);
    $edunova_info_revision = wp_is_post_revision($post_id);
    $edunova_info_valid_nonce = (isset($_POST['edunova_nonce']) && wp_verify_nonce($_POST['edunova_nonce'], basename( __FILE__ ))) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $edunova_info_autosave || $edunova_info_revision || !$edunova_info_valid_nonce ) {
        return;
    }
    // Checks for input and sanitizes/saves if needed
    if(isset($_POST['date-meta-text'])) {
        update_post_meta($post_id, 'date-meta-text', sanitize_text_field($_POST['date-meta-text']));
    }
	if(isset($_POST['address-meta-text'])) {
        update_post_meta($post_id, 'address-meta-text', sanitize_text_field($_POST['address-meta-text']));
    }
}
add_action('save_post', 'edunova_info_meta_save');
?>