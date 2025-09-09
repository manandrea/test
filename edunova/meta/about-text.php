<?php
/*
Plugin Name: Edunova Meta About Box
Plugin URI: http://www.edunova.hr/
Description: Custom meta box for displaying ABOUT COMPANY info.
Author: Zeljko Simic
Version: 1.0
Author URI: https://www.facebook.com/zsimic84
*/

/* Add Meta Box */
function edunova_about_meta() {
	global $post;
    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if($pageTemplate == 'page-about.php' ) {
			add_meta_box('edunova_about_meta', __('Edunova "O Nama" Box', 'edunova'), 'edunova_about_callback', 'page', 'normal', 'default');
		}
	}
}
add_action('add_meta_boxes', 'edunova_about_meta');

/* Output the Content of the Meta Box */
function edunova_about_callback($post) {
	wp_nonce_field(basename( __FILE__ ), 'edunova_about_nonce');
		$edunova_about_title1_store = get_post_meta($post->ID);
		$edunova_about_content1_store = get_post_meta($post->ID);
		$edunova_about_image1_store = get_post_meta($post->ID);				$edunova_about_link1_store = get_post_meta($post->ID);
		$edunova_about_edu1_store = get_post_meta($post->ID);
		$edunova_about_edu2_store = get_post_meta($post->ID);
		$edunova_about_edu3_store = get_post_meta($post->ID);
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
		#about-content1-text, #about-content2-text {width: 100%; height: 120px;}
	</style>
	<div id="eduTable">
		<div class="eduRow">
			<div class="innerCell cell-20">
				<p>1.</p>
			</div>
			<div class="innerCell">
				<p>Naslov:</p>
				<input type="text" name="about-title1-text" id="about-title1-text" value="<?php if (isset($edunova_about_title1_store['about-title1-text'])) echo $edunova_about_title1_store['about-title1-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Naslov', 'edunova'); ?>"/>
				<p>Sadržaj:</p>
				<textarea name="about-content1-text" id="about-content1-text" placeholder="<?php _e('Unesi Sadržaj', 'edunova'); ?>"><?php if (isset($edunova_about_content1_store['about-content1-text'] )) echo $edunova_about_content1_store['about-content1-text'][0]; ?></textarea>
				<p>URL Slike:</p>
				<input type="text" name="about-url1-text" id="about-url1-text" value="<?php if (isset($edunova_about_image1_store['about-url1-text'])) echo $edunova_about_image1_store['about-url1-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi URL Slike', 'edunova'); ?>"/>
				<p>Link - Upiši Se:</p>				<input type="text" name="about-link1-text" id="about-link1-text" value="<?php if (isset($edunova_about_link1_store['about-link1-text'])) echo $edunova_about_link1_store['about-link1-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Link forme Upisa', 'edunova'); ?>"/>			</div>
		</div>
	</div>
	<div class="eduTableDivider"></div>
	<div id="eduTable">
		<div class="eduRow">
			<div class="innerCell cell-20">
				<p>2.</p>
			</div>
			<div class="innerCell padding-r-15">
				<p>Školovanih Polaznika:</p>
				<input type="text" name="about-edu1-text" id="about-edu1-text" value="<?php if (isset($edunova_about_edu1_store['about-edu1-text'])) echo $edunova_about_edu1_store['about-edu1-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Broj Polaznika', 'edunova'); ?>"/>
				<i style="font-size: 12px; padding: 5px 0px 10px 0px; display: inline-block;">*upisati brojeve.</i>
			</div>
			<div class="innerCell padding-r-15">
				<p>Generacija Polaznika:</p>
				<input type="text" name="about-edu2-text" id="about-edu2-text" value="<?php if (isset($edunova_about_edu2_store['about-edu2-text'])) echo $edunova_about_edu2_store['about-edu2-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Broj Generacija', 'edunova'); ?>"/>
				<i style="font-size: 12px; padding: 5px 0px 10px 0px; display: inline-block;">*upisati brojeve.</i>
			</div>
			<div class="innerCell">
				<p>Aktualnih Smjerova:</p>
				<input type="text" name="about-edu3-text" id="about-edu3-text" value="<?php if (isset($edunova_about_edu3_store['about-edu3-text'])) echo $edunova_about_edu3_store['about-edu3-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Broj Smjerova', 'edunova'); ?>"/>
				<i style="font-size: 12px; padding: 5px 0px 10px 0px; display: inline-block;">*upisati brojeve.</i>
			</div>
		</div>
	</div>
<?php
}
/* Save Meta Input */
function edunova_about_save($post_id) {
    // Checks save status
    $edunova_info_autosave = wp_is_post_autosave($post_id);
    $edunova_info_revision = wp_is_post_revision($post_id);
    $edunova_info_valid_nonce = (isset($_POST['edunova_about_nonce']) && wp_verify_nonce($_POST['edunova_about_nonce'], basename( __FILE__ ))) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $edunova_info_autosave || $edunova_info_revision || !$edunova_info_valid_nonce ) {
        return;
    }
    // Checks for input and sanitizes/saves if needed
	if(isset($_POST['about-title1-text'])) {
		update_post_meta($post_id, 'about-title1-text', sanitize_text_field($_POST['about-title1-text']));
    }
	if(isset($_POST['about-content1-text'])) {
		update_post_meta($post_id, 'about-content1-text', implode("\n", array_map('sanitize_text_field', explode("\n",$_POST['about-content1-text']))));
    }
	if(isset($_POST['about-url1-text'])) {
		update_post_meta($post_id, 'about-url1-text', sanitize_text_field($_POST['about-url1-text']));
    }		if(isset($_POST['about-link1-text'])) {		update_post_meta($post_id, 'about-link1-text', sanitize_text_field($_POST['about-link1-text']));    }
	if(isset($_POST['about-edu1-text'])) {
		update_post_meta($post_id, 'about-edu1-text', sanitize_text_field($_POST['about-edu1-text']));
    }
	if(isset($_POST['about-edu2-text'])) {
		update_post_meta($post_id, 'about-edu2-text', sanitize_text_field($_POST['about-edu2-text']));
    }
	if(isset($_POST['about-edu3-text'])) {
		update_post_meta($post_id, 'about-edu3-text', sanitize_text_field($_POST['about-edu3-text']));
    }
}
add_action('save_post', 'edunova_about_save');
?>