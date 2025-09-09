<?php
/*
Plugin Name: Edunova Meta Testimonial Box
Plugin URI: http://www.edunova.hr/
Description: Custom meta box for displaying actual slider comments.
Author: Zeljko Simic
Version: 1.0
Author URI: https://www.facebook.com/zsimic84
*/

/* Add Meta Box */
function edunova_test_meta() {
	global $post;
    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if($pageTemplate == 'page-home.php' ) {
			add_meta_box('edunova_test_meta', __('Edunova Komentari Polaznika Box', 'edunova'), 'edunova_test_callback', 'page', 'normal', 'default');
		}
	}
}
add_action('add_meta_boxes', 'edunova_test_meta');

/* Output the Content of the Meta Box */
function edunova_test_callback($post) {
	wp_nonce_field(basename( __FILE__ ), 'edunova_test_nonce');
		$edunova_test_image1_store = get_post_meta($post->ID);
		$edunova_test_content1_store = get_post_meta($post->ID);
		$edunova_test_name1_store = get_post_meta($post->ID);
		$edunova_test_image2_store = get_post_meta($post->ID);
		$edunova_test_content2_store = get_post_meta($post->ID);
		$edunova_test_name2_store = get_post_meta($post->ID);
		$edunova_test_image3_store = get_post_meta($post->ID);
		$edunova_test_content3_store = get_post_meta($post->ID);
		$edunova_test_name3_store = get_post_meta($post->ID);
		
    ?>
	<style>
		#edunova_test_meta .hndle {background-color: #252525 !important; color: #ffffff !important;}
		#edunova_test_meta .handlediv {color: #ffffff !important;}
		#eduTable {display: table; width: 100%;}
		#eduTable .eduRow {display: table-row; width: 100%;}
		#eduTable .eduCell {display: table-cell; width: 50%;}
		#eduTable .innerCell {display: table-cell;}
		.cell-20 {width: 20px;}
		.padding-r-15 {padding-right: 15px;}
		.padding-l-15 {padding-left: 15px;}
		.eduTableDivider {display: inline-block; width: 100%; height: 1px; margin-top: 30px; margin-bottom: 10px; background-color: #cccccc;}
		#slider1-short-text, #slider2-short-text {width: 100%; height: 103px !important;}
	</style>
	
	<div id="eduTable">
		<div class="eduRow">
			<div class="eduCell">
				<div id="eduTable">
					<div class="eduRow">
						<div class="innerCell cell-20">
								<p>1.</p>
								<input type="checkbox" name="slider1-active-checkbox" id="slider1-active-checkbox" value="active" <?php if (isset($edunova_slider1_active['slider1-active-checkbox'])) checked($edunova_slider1_active['slider1-active-checkbox'][0], 'active'); ?>/>
						</div>
						<div class="innerCell padding-r-15">
							<p><?php _e('<b>URL Slike:</b> ', 'edunova'); ?></p>
							<input type="text" name="test-url1-text" id="test-url1-text" value="<?php if (isset($edunova_test_image1_store['test-url1-text'])) echo $edunova_test_image1_store['test-url1-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi URL Slike', 'edunova'); ?>"/>
							<div id="eduTable">
								<div class="eduRow">
									<div class="innerCell padding-r-15">
										<p><?php _e('<b>Komentar Polaznika:</b> ', 'edunova'); ?></p>
										<textarea name="test-comment1-text" id="test-comment1-text" placeholder="<?php _e('Unesi Komentar Polaznika', 'edunova'); ?>"><?php if (isset($edunova_test_content1_store['test-comment1-text'] )) echo $edunova_test_content1_store['test-comment1-text'][0]; ?></textarea>
									</div>
									<div class="innerCell">
										<p><?php _e('<b>Ime Polaznika i Datum Objave:</b> ', 'edunova'); ?></p>
										<input type="text" name="test-name1-text" id="test-name1-text" value="<?php if (isset($edunova_test_name1_store['test-name1-text'])) echo $edunova_test_name1_store['test-name1-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Ime Polaznika i Datum Objave', 'edunova'); ?>"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="eduCell">
				<p><?php _e('<b>Kratki Text:</b> ', 'edunova'); ?></p>
				<textarea name="slider1-short-text" id="slider1-short-text" placeholder="<?php _e('Unesi Kratki Text', 'edunova'); ?>"><?php if ( isset ( $edunova_slider1_text['slider1-short-text'] ) ) echo $edunova_slider1_text['slider1-short-text'][0]; ?></textarea>
			</div>
		</div>
	</div>
	<div id="eduTable">
		<div class="eduRow">
			<div class="innerCell cell-20"></div>
			<div class="innerCell">
				<p><?php _e('<b>Unesi URL Pozadinske Slike:</b> ', 'edunova'); ?></p>
				<input type="text" name="slider1-bcg-image" id="slider1-bcg-image" value="<?php if (isset($edunova_slider1_bcg_url['slider1-bcg-image'])) echo $edunova_slider1_bcg_url['slider1-bcg-image'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi URL Adresu Slike', 'edunova'); ?>"/>
			</div>
		</div>
	</div>
	
	<div class="eduTableDivider"></div>
	
	<div id="eduTable">
		<div class="eduRow">
			<div class="eduCell">
				<div id="eduTable">
					<div class="eduRow">
						<div class="innerCell cell-20">
								<p>2.</p>
								<input type="checkbox" name="slider2-active-checkbox" id="slider2-active-checkbox" value="active" <?php if (isset($edunova_slider2_active['slider2-active-checkbox'])) checked($edunova_slider2_active['slider2-active-checkbox'][0], 'active'); ?>/>
						</div>
						<div class="innerCell padding-r-15">
							<p><?php _e('<b>Glavni Naslov:</b> ', 'edunova'); ?></p>
							<input type="text" name="slider2-title-text" id="slider2-title-text" value="<?php if (isset($edunova_slider2_title['slider2-title-text'])) echo $edunova_slider2_title['slider2-title-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Naslov', 'edunova'); ?>"/>
							<div id="eduTable">
								<div class="eduRow">
									<div class="innerCell padding-r-15">
										<p><?php _e('<b>Naziv Linka:</b> ', 'edunova'); ?></p>
										<input type="text" name="slider2-link-name-text" id="slider2-link-name-text" value="<?php if (isset($edunova_slider2_btn_name['slider2-link-name-text'])) echo $edunova_slider2_btn_name['slider2-link-name-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Naziv Linka', 'edunova'); ?>"/>
									</div>
									<div class="innerCell">
										<p><?php _e('<b>URL Adresa:</b> ', 'edunova'); ?></p>
										<input type="text" name="slider2-link-url-text" id="slider2-link-url-text" value="<?php if (isset($edunova_slider2_btn_url['slider2-link-url-text'])) echo $edunova_slider2_btn_url['slider2-link-url-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi URL Adresu', 'edunova'); ?>"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="eduCell">
				<p><?php _e('<b>Kratki Text:</b> ', 'edunova'); ?></p>
				<textarea name="slider2-short-text" id="slider2-short-text" placeholder="<?php _e('Unesi Kratki Text', 'edunova'); ?>"><?php if ( isset ( $edunova_slider2_text['slider2-short-text'] ) ) echo $edunova_slider2_text['slider2-short-text'][0]; ?></textarea>
			</div>
		</div>
	</div>
	<div id="eduTable">
		<div class="eduRow">
			<div class="innerCell cell-20"></div>
			<div class="innerCell">
				<p><?php _e('<b>Unesi URL Pozadinske Slike:</b> ', 'edunova'); ?></p>
				<input type="text" name="slider2-bcg-image" id="slider2-bcg-image" value="<?php if (isset($edunova_slider2_bcg_url['slider2-bcg-image'])) echo $edunova_slider2_bcg_url['slider2-bcg-image'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi URL Adresu Slike', 'edunova'); ?>"/>
			</div>
		</div>
	</div>

<?php
}
/* Save Meta Input */
function edunova_test_meta_save($post_id) {
    // Checks save status
    $edunova_info_autosave = wp_is_post_autosave($post_id);
    $edunova_info_revision = wp_is_post_revision($post_id);
    $edunova_info_valid_nonce = (isset($_POST['edunova_test_nonce']) && wp_verify_nonce($_POST['edunova_test_nonce'], basename( __FILE__ ))) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $edunova_info_autosave || $edunova_info_revision || !$edunova_info_valid_nonce ) {
        return;
    }
    // Checks for input and sanitizes/saves if needed
	if(isset($_POST['slider1-active-checkbox'])) {
		update_post_meta($post_id, 'slider1-active-checkbox', 'active');
	} else {
		update_post_meta( $post_id, 'slider1-active-checkbox', '' );
	}
    if(isset($_POST['slider1-title-text'])) {
		update_post_meta($post_id, 'slider1-title-text', sanitize_text_field($_POST['slider1-title-text']));
    }
	if(isset($_POST['slider1-link-name-text'])) {
		update_post_meta($post_id, 'slider1-link-name-text', sanitize_text_field($_POST['slider1-link-name-text']));
    }
	if(isset($_POST['slider1-link-url-text'])) {
		update_post_meta($post_id, 'slider1-link-url-text', sanitize_text_field($_POST['slider1-link-url-text']));
    }
	if(isset($_POST['slider1-short-text'])) {
		update_post_meta($post_id, 'slider1-short-text', sanitize_text_field($_POST['slider1-short-text']));
    }
	if(isset($_POST['slider1-bcg-image'])) {
		update_post_meta($post_id, 'slider1-bcg-image', sanitize_text_field($_POST['slider1-bcg-image']));
    }
	 // Checks for input and sanitizes/saves if needed
	if(isset($_POST['slider2-active-checkbox'])) {
		update_post_meta($post_id, 'slider2-active-checkbox', 'active');
	} else {
		update_post_meta( $post_id, 'slider2-active-checkbox', '' );
	}
    if(isset($_POST['slider2-title-text'])) {
		update_post_meta($post_id, 'slider2-title-text', sanitize_text_field($_POST['slider2-title-text']));
    }
	if(isset($_POST['slider2-link-name-text'])) {
		update_post_meta($post_id, 'slider2-link-name-text', sanitize_text_field($_POST['slider2-link-name-text']));
    }
	if(isset($_POST['slider2-link-url-text'])) {
		update_post_meta($post_id, 'slider2-link-url-text', sanitize_text_field($_POST['slider2-link-url-text']));
    }
	if(isset($_POST['slider2-short-text'])) {
		update_post_meta($post_id, 'slider2-short-text', sanitize_text_field($_POST['slider2-short-text']));
    }
	if(isset($_POST['slider2-bcg-image'])) {
		update_post_meta($post_id, 'slider2-bcg-image', sanitize_text_field($_POST['slider2-bcg-image']));
    }
}
add_action('save_post', 'edunova_slider_meta_save');
?>