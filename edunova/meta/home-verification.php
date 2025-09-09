<?php
/*
Plugin Name: Edunova Meta Verification Box
Plugin URI: http://www.edunova.hr/
Description: Custom meta box for displaying government info.
Author: Zeljko Simic
Version: 1.0
Author URI: https://www.facebook.com/zsimic84
*/

/* Add Meta Box */
function edunova_ver_meta() {
	global $post;
    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if($pageTemplate == 'page-home.php' ) {
			add_meta_box('edunova_ver_meta', __('Edunova Verifikacija/Ministarstvo Box', 'edunova'), 'edunova_ver_callback', 'page', 'normal', 'default');
		}
	}
}
add_action('add_meta_boxes', 'edunova_ver_meta');

/* Output the Content of the Meta Box */
function edunova_ver_callback($post) {
	wp_nonce_field(basename( __FILE__ ), 'edunova_ver_nonce');
		$edunova_ver_text_store = get_post_meta($post->ID);
		$edunova_upis_text_store = get_post_meta($post->ID);

    ?>
	<style>
		#edunova_ver_meta .hndle {background-color: #e67a20 !important; color: #ffffff !important;}
		#edunova_ver_meta .handlediv {color: #ffffff !important;}
		#eduTable {display: table; width: 100%;}
		#eduTable .eduRow {display: table-row; width: 100%;}
		#eduTable .eduCell {display: table-cell; width: 50%;}
		#eduTable .innerCell {display: table-cell;}
		.cell-20 {width: 20px;}
		.width-25 {width: 25%;}
		.padding-bottom {padding-bottom: 15px;}
		.padding-r-15 {padding-right: 15px;}
		.padding-l-15 {padding-left: 15px;}
		.eduTableDivider {display: inline-block; width: 100%; height: 1px; margin-top: 30px; margin-bottom: 10px; background-color: #cccccc;}
		#slider1-short-text, #slider2-short-text {width: 100%; height: 97.5px;}
	</style>
	<div id="eduTable" class="padding-bottom">
		<div class="eduRow">
			<div class="innerCell width-25 padding-r-15">
				<p>Smjerovi (info):</p>
				<input type="text" name="home-ver-text" id="home-ver-text" value="<?php if (isset($edunova_ver_text_store['home-ver-text'])) echo $edunova_ver_text_store['home-ver-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Tekst', 'edunova'); ?>"/>
			</div>
			<div class="innerCell width-25">
				<p>Upis (info):</p>
				<input type="text" name="home-upis-text" id="home-upis-text" value="<?php if (isset($edunova_upis_text_store['home-upis-text'])) echo $edunova_upis_text_store['home-upis-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Tekst', 'edunova'); ?>"/>
			</div>
		</div>
	</div>
<?php
}
/* Save Meta Input */
function edunova_ver_save($post_id) {
    // Checks save status
    $edunova_info_autosave = wp_is_post_autosave($post_id);
    $edunova_info_revision = wp_is_post_revision($post_id);
    $edunova_info_valid_nonce = (isset($_POST['edunova_ver_nonce']) && wp_verify_nonce($_POST['edunova_ver_nonce'], basename( __FILE__ ))) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $edunova_info_autosave || $edunova_info_revision || !$edunova_info_valid_nonce ) {
        return;
    }
    // Checks for input and sanitizes/saves if needed
	if(isset($_POST['home-ver-text'])) {
		update_post_meta($post_id, 'home-ver-text', sanitize_text_field($_POST['home-ver-text']));
    }
	if(isset($_POST['home-upis-text'])) {
		update_post_meta($post_id, 'home-upis-text', sanitize_text_field($_POST['home-upis-text']));
    }
}
add_action('save_post', 'edunova_ver_save');
?>