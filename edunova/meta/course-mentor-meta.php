<?php
/*
Plugin Name: Edunova Meta Box for Mentors
Plugin URI: http://www.edunova.hr/
Description: Custom meta box for displaying important info about mentors.
Author: Zeljko Simic
Version: 1.0
Author URI: https://www.facebook.com/zsimic84
*/

/* Add Meta Box */
function edunova_mentor_custom_meta() {
	global $post;
    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if($pageTemplate == 'page-course.php' ) {
			add_meta_box('edunova_mentor_meta', __('Edunova Mentor Box', 'edunova'), 'edunova_mentor_meta_callback', 'page', 'normal', 'default');
		}
		if($pageTemplate == 'page-courselang.php' ) {
			add_meta_box('edunova_mentor_meta', __('Edunova Mentor Box', 'edunova'), 'edunova_mentor_meta_callback', 'page', 'normal', 'default');
		}
	}
}
add_action('add_meta_boxes', 'edunova_mentor_custom_meta');

/* Output the Content of the Meta Box */
function edunova_mentor_meta_callback($post) {
	wp_nonce_field(basename( __FILE__ ), 'edunova_mentor_nonce');
		$edunova_mentor_avatar_stored_meta = get_post_meta($post->ID);
		$edunova_mentor_name_stored_meta = get_post_meta($post->ID);
		$edunova_mentor_info_stored_meta = get_post_meta($post->ID);
    ?>
	<style>
		#edunova_mentor_meta .hndle {background-color: #70c115 !important; color: #ffffff !important;}
		#edunova_mentor_meta .handlediv {color: #ffffff !important;}
		#mentorTable {display: table; width: 100%;}
		#mentorTable .mentorTableRow {display: table-row; width: 100%;}
		#mentorTable .mentorImage {display: table-cell; width: 50%; padding-right: 15px;}
		#mentorTable .mentorInfos {display: table-cell; width: 50%; padding-left: 15px;}
		#mentorTable .mentorImage .edunova-row-title {width: 100%; margin-bottom: 10px;}
		#mentorTable .mentorImage input {width: 100%;}
		#mentorTable #mentor-meta-info {width: 100%; height: 121px; padding: 10px;}
	</style>
	
	<div id="mentorTable">
		<div class="mentorTableRow">
			<div class="mentorImage">
				<p class="imageAvatar">
					<p class="edunova-row-title"><?php _e('Slika Mentora:', 'edunova')?></p>
					<input type="text" name="mentor-meta-image" id="mentor-meta-image" value="<?php if (isset($edunova_mentor_avatar_stored_meta['mentor-meta-image'])) echo $edunova_mentor_avatar_stored_meta['mentor-meta-image'][0]; ?>" placeholder="<?php _e('Unesi URL Adresu', 'edunova'); ?>"/>
					<i style="margin-top: 5px; display: inline-block;">Upisati URL adresu slike u polje. Veličina slike: <b>110</b>x<b>120</b> px.</i>
				</p>
				<p>
					<p class="edunova-row-title"><?php _e('Ime i Prezime Mentora:', 'edunova')?></p>
					<input type="text" name="mentor-name-meta-text" id="mentor-name-meta-text" value="<?php if (isset($edunova_mentor_name_stored_meta['mentor-name-meta-text'])) echo $edunova_mentor_name_stored_meta['mentor-name-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi ime Mentora', 'edunova'); ?>"/>
				</p>
			</div>
			<div class="mentorInfos">
				<p class="edunova-row-title"><?php _e('Info o Mentoru:', 'edunova')?></p>
				<textarea name="mentor-meta-info" id="mentor-meta-info" placeholder="<?php _e('Unesi par riječi o Mentoru', 'edunova'); ?>"><?php if ( isset ( $edunova_mentor_info_stored_meta['mentor-meta-info'] ) ) echo $edunova_mentor_info_stored_meta['mentor-meta-info'][0]; ?></textarea>
			</div>
		</div>
	</div>
<?php
}

/* Save Meta Input */
function edunova_mentor_meta_save($post_id) {
    // Checks save status
    $edunova_info_autosave = wp_is_post_autosave($post_id);
    $edunova_info_revision = wp_is_post_revision($post_id);
    $edunova_info_valid_nonce = (isset($_POST['edunova_mentor_nonce']) && wp_verify_nonce($_POST['edunova_mentor_nonce'], basename( __FILE__ ))) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $edunova_info_autosave || $edunova_info_revision || !$edunova_info_valid_nonce ) {
        return;
    }
	// Checks for input and sanitizes/saves if needed
    if(isset($_POST['mentor-meta-image'])) {
        update_post_meta($post_id, 'mentor-meta-image', sanitize_text_field($_POST['mentor-meta-image']));
    }
	if(isset($_POST['mentor-name-meta-text'])) {
        update_post_meta($post_id, 'mentor-name-meta-text', sanitize_text_field($_POST['mentor-name-meta-text']));
    }
	if(isset($_POST['mentor-meta-info'])) {
        update_post_meta($post_id, 'mentor-meta-info', sanitize_text_field($_POST['mentor-meta-info']));
    }
}
add_action('save_post', 'edunova_mentor_meta_save');
?>