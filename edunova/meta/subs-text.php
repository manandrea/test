<?php
/*
Plugin Name: Edunova Meta Subs Box
Plugin URI: http://www.edunova.hr/
Description: Custom meta box for displaying SUBS COMPANY info.
Author: Zeljko Simic
Version: 1.0
Author URI: https://www.facebook.com/zsimic84
*/

/* Add Meta Box */
function edunova_subs_meta() {
	global $post;
    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if($pageTemplate == 'page-subs.php' ) {
			add_meta_box('edunova_subs_meta', __('Edunova "Subvencije" Box', 'edunova'), 'edunova_subs_callback', 'page', 'normal', 'default');
		}
	}
}
add_action('add_meta_boxes', 'edunova_subs_meta');

/* Output the Content of the Meta Box */
function edunova_subs_callback($post) {
	wp_nonce_field(basename( __FILE__ ), 'edunova_subs_nonce');
		$edunova_subs_title1_store = get_post_meta($post->ID);
		$edunova_subs_content1_store = get_post_meta($post->ID);
		$edunova_subs_image1_store = get_post_meta($post->ID);								$edunova_subs_link1_store = get_post_meta($post->ID);				$edunova_subs_broj1_store = get_post_meta($post->ID);
    ?>
	<style>
		#edunova_about_meta .hndle {background-color: #144f71 !important; color: #ffffff !important;}
		#edunova_about_meta .handlediv {color: #ffffff !important;}
		#eduTable {display: table; width: 100%;}
		#eduTable .eduRow {display: table-row; width: 100%;}
		#eduTable .eduCell {display: table-cell; width: 50%;}
		#eduTable .innerCell {display: table-cell;}
		.cell-20 {width: 20px;}
		.width-25 {width: 25%;}
		.padding-r-15 {padding-right: 15px;}
		.padding-l-15 {padding-left: 15px;}
		.eduTableDivider {display: inline-block; width: 100%; height: 1px; margin-top: 30px; margin-bottom: 10px; background-color: #cccccc;}
		#subs-content1-text, #subs-content2-text {width: 100%; height: 120px;}
	</style>
	<div id="eduTable">
		<div class="eduRow">
			<div class="innerCell cell-20">
				<p>1.</p>
			</div>
			<div class="innerCell">
				<p>Naslov:</p>
				<input type="text" name="subs-title1-text" id="subs-title1-text" value="<?php if (isset($edunova_subs_title1_store['subs-title1-text'])) echo $edunova_subs_title1_store['subs-title1-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Naslov', 'edunova'); ?>"/>
				<p>Sadržaj:</p>
				<textarea name="subs-content1-text" id="subs-content1-text" placeholder="<?php _e('Unesi Sadržaj', 'edunova'); ?>"><?php if (isset($edunova_subs_content1_store['subs-content1-text'] )) echo $edunova_subs_content1_store['subs-content1-text'][0]; ?></textarea>
				<p>URL Slike:</p>
				<input type="text" name="subs-url1-text" id="subs-url1-text" value="<?php if (isset($edunova_subs_image1_store['subs-url1-text'])) echo $edunova_subs_image1_store['subs-url1-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi URL Slike', 'edunova'); ?>"/>
				<p>Link na Obrazac:</p>												<input type="text" name="subs-link1-text" id="subs-link1-text" value="<?php if (isset($edunova_subs_link1_store['subs-link1-text'])) echo $edunova_subs_link1_store['subs-link1-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Link na Obrazac', 'edunova'); ?>"/>								<p>Broj Subvencija:</p>												<input type="text" name="subs-broj1" id="subs-broj1" value="<?php if (isset($edunova_subs_broj1_store['subs-broj1'])) echo $edunova_subs_broj1_store['subs-broj1'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Broj Subvencija', 'edunova'); ?>"/>						</div>
		</div>
	</div>
<?php
}
/* Save Meta Input */
function edunova_subs_save($post_id) {
    // Checks save status
    $edunova_info_autosave = wp_is_post_autosave($post_id);
    $edunova_info_revision = wp_is_post_revision($post_id);
    $edunova_info_valid_nonce = (isset($_POST['edunova_about_nonce']) && wp_verify_nonce($_POST['edunova_about_nonce'], basename( __FILE__ ))) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $edunova_info_autosave || $edunova_info_revision || !$edunova_info_valid_nonce ) {
        return;
    }
    // Checks for input and sanitizes/saves if needed
	if(isset($_POST['subs-title1-text'])) {
		update_post_meta($post_id, 'subs-title1-text', sanitize_text_field($_POST['subs-title1-text']));
    }
	if(isset($_POST['subs-content1-text'])) {
		update_post_meta($post_id, 'subs-content1-text', implode("\n", array_map('sanitize_text_field', explode("\n",$_POST['subs-content1-text']))));
    }
	if(isset($_POST['subs-url1-text'])) {
		update_post_meta($post_id, 'subs-url1-text', sanitize_text_field($_POST['subs-url1-text']));
    }				if(isset($_POST['subs-link1-text'])) {				update_post_meta($post_id, 'subs-link1-text', sanitize_text_field($_POST['subs-link1-text']));    		}		if(isset($_POST['subs-broj1'])) {				update_post_meta($post_id, 'subs-broj1', sanitize_text_field($_POST['subs-broj1']));    		}
}
add_action('save_post', 'edunova_subs_save');
?>