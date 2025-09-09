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
		$edunova_test1_active = get_post_meta($post->ID);
		$edunova_test_image1_store = get_post_meta($post->ID);
		$edunova_test_content1_store = get_post_meta($post->ID);
		$edunova_test_name1_store = get_post_meta($post->ID);
		$edunova_test2_active = get_post_meta($post->ID);
		$edunova_test_image2_store = get_post_meta($post->ID);
		$edunova_test_content2_store = get_post_meta($post->ID);
		$edunova_test_name2_store = get_post_meta($post->ID);
		$edunova_test3_active = get_post_meta($post->ID);
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
		#test-comment1-text, #test-comment2-text, #test-comment3-text {width: 100%; height: 98px !important;}
	</style>
	
	<div id="eduTable">
		<div class="eduRow">
			<div class="eduCell">
				<div id="eduTable">
					<div class="eduRow">
						<div class="innerCell cell-20">
							<p>1.</p>
							<input type="checkbox" name="test-active1-checkbox" id="test-active1-checkbox" value="active" <?php if (isset($edunova_test1_active['test-active1-checkbox'])) checked($edunova_test1_active['test-active1-checkbox'][0], 'active'); ?>/>
						</div>
						<div class="innerCell padding-r-15">
							<p><?php _e('<b>URL Slike:</b> ', 'edunova'); ?></p>
							<input type="text" name="test-url1-text" id="test-url1-text" value="<?php if (isset($edunova_test_image1_store['test-url1-text'])) echo $edunova_test_image1_store['test-url1-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi URL Slike', 'edunova'); ?>"/>
							<i style="font-size: 12px;">Veličina: 200x200px.</i>
							<div id="eduTable">
								<div class="eduRow">
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
				<p><?php _e('<b>Komentar Polaznika:</b> ', 'edunova'); ?></p>
				<textarea name="test-comment1-text" id="test-comment1-text" placeholder="<?php _e('Unesi Komentar Polaznika', 'edunova'); ?>"><?php if (isset($edunova_test_content1_store['test-comment1-text'] )) echo $edunova_test_content1_store['test-comment1-text'][0]; ?></textarea>
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
							<input type="checkbox" name="test-active2-checkbox" id="test-active2-checkbox" value="active" <?php if (isset($edunova_test2_active['test-active2-checkbox'])) checked($edunova_test2_active['test-active2-checkbox'][0], 'active'); ?>/>
						</div>
						<div class="innerCell padding-r-15">
							<p><?php _e('<b>URL Slike:</b> ', 'edunova'); ?></p>
							<input type="text" name="test-url2-text" id="test-url2-text" value="<?php if (isset($edunova_test_image2_store['test-url2-text'])) echo $edunova_test_image2_store['test-url2-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi URL Slike', 'edunova'); ?>"/>
							<i style="font-size: 12px;">Veličina: 200x200px.</i>
							<div id="eduTable">
								<div class="eduRow">
									<div class="innerCell">
										<p><?php _e('<b>Ime Polaznika i Datum Objave:</b> ', 'edunova'); ?></p>
										<input type="text" name="test-name2-text" id="test-name2-text" value="<?php if (isset($edunova_test_name2_store['test-name2-text'])) echo $edunova_test_name2_store['test-name2-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Ime Polaznika i Datum Objave', 'edunova'); ?>"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="eduCell">
				<p><?php _e('<b>Komentar Polaznika:</b> ', 'edunova'); ?></p>
				<textarea name="test-comment2-text" id="test-comment2-text" placeholder="<?php _e('Unesi Komentar Polaznika', 'edunova'); ?>"><?php if (isset($edunova_test_content2_store['test-comment2-text'] )) echo $edunova_test_content2_store['test-comment2-text'][0]; ?></textarea>
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
							<p>3.</p>
							<input type="checkbox" name="test-active3-checkbox" id="test-active3-checkbox" value="active" <?php if (isset($edunova_test3_active['test-active3-checkbox'])) checked($edunova_test3_active['test-active3-checkbox'][0], 'active'); ?>/>
						</div>
						<div class="innerCell padding-r-15">
							<p><?php _e('<b>URL Slike:</b> ', 'edunova'); ?></p>
							<input type="text" name="test-url3-text" id="test-url3-text" value="<?php if (isset($edunova_test_image3_store['test-url3-text'])) echo $edunova_test_image3_store['test-url3-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi URL Slike', 'edunova'); ?>"/>
							<i style="font-size: 12px;">Veličina: 200x200px.</i>
							<div id="eduTable">
								<div class="eduRow">
									<div class="innerCell">
										<p><?php _e('<b>Ime Polaznika i Datum Objave:</b> ', 'edunova'); ?></p>
										<input type="text" name="test-name3-text" id="test-name3-text" value="<?php if (isset($edunova_test_name3_store['test-name3-text'])) echo $edunova_test_name3_store['test-name3-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Ime Polaznika i Datum Objave', 'edunova'); ?>"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="eduCell">
				<p><?php _e('<b>Komentar Polaznika:</b> ', 'edunova'); ?></p>
				<textarea name="test-comment3-text" id="test-comment3-text" placeholder="<?php _e('Unesi Komentar Polaznika', 'edunova'); ?>"><?php if (isset($edunova_test_content3_store['test-comment3-text'] )) echo $edunova_test_content3_store['test-comment3-text'][0]; ?></textarea>
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
	if(isset($_POST['test-active1-checkbox'])) {
		update_post_meta($post_id, 'test-active1-checkbox', 'active');
	} else {
		update_post_meta( $post_id, 'test-active1-checkbox', '' );
	}
    if(isset($_POST['test-url1-text'])) {
		update_post_meta($post_id, 'test-url1-text', sanitize_text_field($_POST['test-url1-text']));
    }
	if(isset($_POST['test-name1-text'])) {
		update_post_meta($post_id, 'test-name1-text', sanitize_text_field($_POST['test-name1-text']));
    }
	if(isset($_POST['test-comment1-text'])) {
		update_post_meta($post_id, 'test-comment1-text', sanitize_text_field($_POST['test-comment1-text']));
    }
	// Checks for input and sanitizes/saves if needed
	if(isset($_POST['test-active2-checkbox'])) {
		update_post_meta($post_id, 'test-active2-checkbox', 'active');
	} else {
		update_post_meta( $post_id, 'test-active2-checkbox', '' );
	}
    if(isset($_POST['test-url2-text'])) {
		update_post_meta($post_id, 'test-url2-text', sanitize_text_field($_POST['test-url2-text']));
    }
	if(isset($_POST['test-name2-text'])) {
		update_post_meta($post_id, 'test-name2-text', sanitize_text_field($_POST['test-name2-text']));
    }
	if(isset($_POST['test-comment2-text'])) {
		update_post_meta($post_id, 'test-comment2-text', sanitize_text_field($_POST['test-comment2-text']));
    }
	// Checks for input and sanitizes/saves if needed
	if(isset($_POST['test-active3-checkbox'])) {
		update_post_meta($post_id, 'test-active3-checkbox', 'active');
	} else {
		update_post_meta( $post_id, 'test-active3-checkbox', '' );
	}
    if(isset($_POST['test-url3-text'])) {
		update_post_meta($post_id, 'test-url3-text', sanitize_text_field($_POST['test-url3-text']));
    }
	if(isset($_POST['test-name1-text'])) {
		update_post_meta($post_id, 'test-name3-text', sanitize_text_field($_POST['test-name3-text']));
    }
	if(isset($_POST['test-comment3-text'])) {
		update_post_meta($post_id, 'test-comment3-text', sanitize_text_field($_POST['test-comment3-text']));
    }
}
add_action('save_post', 'edunova_test_meta_save');
?>