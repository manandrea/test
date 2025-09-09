<?php
/*
Plugin Name: Edunova Meta Services Box
Plugin URI: http://www.edunova.hr/
Description: Custom meta box for displaying slider info.
Author: Zeljko Simic
Version: 1.0
Author URI: https://www.facebook.com/zsimic84
*/

/* Add Meta Box */
function edunova_services_meta() {
	global $post;
    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if($pageTemplate == 'page-home.php' ) {
			add_meta_box('edunova_services_meta', __('Edunova Usluge Box', 'edunova'), 'edunova_services_callback', 'page', 'normal', 'default');
		}
	}
}
add_action('add_meta_boxes', 'edunova_services_meta');

/* Output the Content of the Meta Box */
function edunova_services_callback($post) {
	wp_nonce_field(basename( __FILE__ ), 'edunova_services_nonce');
		$edunova_services_title_store = get_post_meta($post->ID);
		$edunova_services_informatics_store = get_post_meta($post->ID);
		$edunova_services_management_store = get_post_meta($post->ID);
		$edunova_services_lang_store = get_post_meta($post->ID);
		$edunova_services_seminars_store = get_post_meta($post->ID);
		$edunova_services_action_store = get_post_meta($post->ID);

    ?>
	<style>
		#edunova_services_meta .hndle {background-color: #70c115 !important; color: #ffffff !important;}
		#edunova_services_meta .handlediv {color: #ffffff !important;}
		#eduTable {display: table; width: 100%;}
		#eduTable .eduRow {display: table-row; width: 100%;}
		#eduTable .eduCell {display: table-cell; width: 50%;}
		#eduTable .innerCell {display: table-cell;}
		.cell-20 {width: 20px;}
		.width-25 {width: 25%;}
		.padding-r-15 {padding-right: 15px;}
		.padding-l-15 {padding-left: 15px;}
		.eduTableDivider {display: inline-block; width: 100%; height: 1px; margin-top: 30px; margin-bottom: 10px; background-color: #cccccc;}
		#slider1-short-text, #slider2-short-text {width: 100%; height: 97.5px;}
	</style>
	<div id="eduTable">
		<div class="eduRow">
			<div class="innerCell">
				<p>Naslov Sekcije:</p>
				<input type="text" name="services-title-text" id="services-title-text" value="<?php if (isset($edunova_services_title_store['services-title-text'])) echo $edunova_services_title_store['services-title-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Naslov Usluga', 'edunova'); ?>"/>
			</div>
		</div>
	</div>
	<div id="eduTable">
		<div class="eduRow">
			<div class="innerCell width-25 padding-r-15">
				<p>Informatika (URL):</p>
				<input type="text" name="services-informatics-text" id="services-informatics-text" value="<?php if (isset($edunova_services_informatics_store['services-informatics-text'])) echo $edunova_services_informatics_store['services-informatics-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi URL Adresu', 'edunova'); ?>"/>
			</div>
			<div class="innerCell width-25 padding-r-15">
				<p>Management (URL):</p>
				<input type="text" name="services-management-text" id="services-management-text" value="<?php if (isset($edunova_services_management_store['services-management-text'])) echo $edunova_services_management_store['services-management-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi URL Adresu', 'edunova'); ?>"/>
			</div>
			<div class="innerCell width-25 padding-r-15">
				<p>Strani Jezici (URL):</p>
				<input type="text" name="services-lang-text" id="services-lang-text" value="<?php if (isset($edunova_services_lang_store['services-lang-text'])) echo $edunova_services_lang_store['services-lang-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi URL Adresu', 'edunova'); ?>"/>
			</div>
			<div class="innerCell width-25">
				<p>Seminari (URL):</p>
				<input type="text" name="services-seminars-text" id="services-seminars-text" value="<?php if (isset($edunova_services_seminars_store['services-seminars-text'])) echo $edunova_services_seminars_store['services-seminars-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi URL Adresu', 'edunova'); ?>"/>
			</div>
		</div>
	</div>
	<div id="eduTable">
		<div class="eduRow">
			<div class="innerCell">
				<p>Unesi Akciju:</p>
				<input type="text" name="services-action-text" id="services-action-text" value="<?php if (isset($edunova_services_action_store['services-action-text'])) echo $edunova_services_action_store['services-action-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Akciju', 'edunova'); ?>"/>
			</div>
		</div>
	</div>
<?php
}
/* Save Meta Input */
function edunova_services_save($post_id) {
    // Checks save status
    $edunova_info_autosave = wp_is_post_autosave($post_id);
    $edunova_info_revision = wp_is_post_revision($post_id);
    $edunova_info_valid_nonce = (isset($_POST['edunova_services_nonce']) && wp_verify_nonce($_POST['edunova_services_nonce'], basename( __FILE__ ))) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $edunova_info_autosave || $edunova_info_revision || !$edunova_info_valid_nonce ) {
        return;
    }
    // Checks for input and sanitizes/saves if needed
	if(isset($_POST['services-title-text'])) {
		update_post_meta($post_id, 'services-title-text', sanitize_text_field($_POST['services-title-text']));
    }
	if(isset($_POST['services-informatics-text'])) {
		update_post_meta($post_id, 'services-informatics-text', sanitize_text_field($_POST['services-informatics-text']));
    }
	if(isset($_POST['services-management-text'])) {
		update_post_meta($post_id, 'services-management-text', sanitize_text_field($_POST['services-management-text']));
    }
	if(isset($_POST['services-lang-text'])) {
		update_post_meta($post_id, 'services-lang-text', sanitize_text_field($_POST['services-lang-text']));
    }
	if(isset($_POST['services-seminars-text'])) {
		update_post_meta($post_id, 'services-seminars-text', sanitize_text_field($_POST['services-seminars-text']));
    }
	if(isset($_POST['services-action-text'])) {
		update_post_meta($post_id, 'services-action-text', sanitize_text_field($_POST['services-action-text']));
    }
}
add_action('save_post', 'edunova_services_save');
?>