<?php

/*

Plugin Name: Edunova Meta Box for Mentor List

Plugin URI: http://www.edunova.hr/

Description: Custom meta box listing for displaying important info about mentors.

Author: Zeljko Simic

Version: 1.0

Author URI: https://www.facebook.com/zsimic84

*/



/* Add Meta Box */

function edunova_mentor_list_meta() {

	global $post;

    if(!empty($post))

    {

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if($pageTemplate == 'page-course.php' ) {

			add_meta_box('edunova_mentor_list', __('Edunova Mentor List Box', 'edunova'), 'edunova_mentor_list_callback', 'page', 'normal', 'default');

		}

		if($pageTemplate == 'page-courselang.php' ) {

			add_meta_box('edunova_mentor_list', __('Edunova Mentor List Box', 'edunova'), 'edunova_mentor_list_callback', 'page', 'normal', 'default');

		}

	}

}

add_action('add_meta_boxes', 'edunova_mentor_list_meta');

/* Output the Content of the Meta Box */

function edunova_mentor_list_callback($post) {

	wp_nonce_field(basename( __FILE__ ), 'edunova_mentor_list_nonce');

		$edunova_mentor_list_name1 = get_post_meta($post->ID);

		$edunova_mentor_list_text1 = get_post_meta($post->ID);
		
		$edunova_mentor_list_name2 = get_post_meta($post->ID);

		$edunova_mentor_list_text2 = get_post_meta($post->ID);
		
		$edunova_mentor_list_name3 = get_post_meta($post->ID);

		$edunova_mentor_list_text3 = get_post_meta($post->ID);
		
		$edunova_mentor_list_name4 = get_post_meta($post->ID);

		$edunova_mentor_list_text4 = get_post_meta($post->ID);
		
		$edunova_mentor_list_name5 = get_post_meta($post->ID);

		$edunova_mentor_list_text5 = get_post_meta($post->ID);
		
		$edunova_mentor_list_name6 = get_post_meta($post->ID);

		$edunova_mentor_list_text6 = get_post_meta($post->ID);

    ?>

	<style>

		#edunova_mentor_list .hndle {background-color: #000 !important; color: #ffffff !important;}

		#edunova_mentor_list .handlediv {color: #ffffff !important;}

		#mentorTable1 {display: table; width: 100%; border-bottom: 1px solid #ccc; padding-bottom: 20px; margin-bottom: 20px;}

		#mentorTable1 .mentorTableRow {display: table-row; width: 100%;}

		#mentorTable1 .mentorImage1 {display: table-cell; width: calc(100% - 30px);}
		
		#mentorTable1 .mentorImage2 {display: table-cell; width: 30px;}

		#mentorTable1 .mentorInfos1 {width: 100%;}

		#mentorTable1 .mentorImage1 .edunova-row-title {width: 100%; margin-bottom: 10px;}

		#mentorTable1 .mentorImage1 input {width: 100%; padding: 3px 10px;}

		#mentorTable1 textarea{width: 100%; height: 140px; padding: 10px;}
		
		#mentorTable2 {display: table; width: 100%; padding-bottom: 20px;}

		#mentorTable2 .mentorTableRow {display: table-row; width: 100%;}

		#mentorTable2 .mentorImage1 {display: table-cell; width: calc(100% - 30px);}
		
		#mentorTable2 .mentorImage2 {display: table-cell; width: 30px;}

		#mentorTable2 .mentorInfos1 {width: 100%;}

		#mentorTable2 .mentorImage1 .edunova-row-title {width: 100%; margin-bottom: 10px;}

		#mentorTable2 .mentorImage1 input {width: 100%; padding: 3px 10px;}

		#mentorTable2 textarea{width: 100%; height: 140px; padding: 10px;}

	</style>

	

	<div id="mentorTable1">

		<div class="mentorTableRow">
			
			<div class="mentorImage2">
				<span>1.</span>
			</div>
			
			<div class="mentorImage1">

				<p class="imageAvatar">

					<p class="edunova-row-title"><?php _e('Ime Mentora:', 'edunova')?></p>

					<input type="text" name="mentor-meta-list-name1" id="mentor-meta-list-name1" value="<?php if (isset($edunova_mentor_list_name1['mentor-meta-list-name1'])) echo $edunova_mentor_list_name1['mentor-meta-list-name1'][0]; ?>" placeholder="<?php _e('Unesi Ime Mentora', 'edunova'); ?>"/>

				</p>

				<div class="mentorInfos1">

					<p class="edunova-row-title"><?php _e('Info o Mentoru:', 'edunova')?></p>

					<textarea name="mentor-list-info1" id="mentor-list-info1" placeholder="<?php _e('Unesi par riječi o Mentoru', 'edunova'); ?>"><?php if ( isset ( $edunova_mentor_list_text1['mentor-list-info1'] ) ) echo $edunova_mentor_list_text1['mentor-list-info1'][0]; ?></textarea>

				</div>

			</div>

		</div>

	</div>
	
	<div id="mentorTable1">

		<div class="mentorTableRow">
			
			<div class="mentorImage2">
				<span>2.</span>
			</div>
			
			<div class="mentorImage1">

				<p class="imageAvatar">

					<p class="edunova-row-title"><?php _e('Ime Mentora:', 'edunova')?></p>

					<input type="text" name="mentor-meta-list-name2" id="mentor-meta-list-name2" value="<?php if (isset($edunova_mentor_list_name2['mentor-meta-list-name2'])) echo $edunova_mentor_list_name2['mentor-meta-list-name2'][0]; ?>" placeholder="<?php _e('Unesi Ime Mentora', 'edunova'); ?>"/>

				</p>

				<div class="mentorInfos1">

					<p class="edunova-row-title"><?php _e('Info o Mentoru:', 'edunova')?></p>

					<textarea name="mentor-list-info2" id="mentor-list-info2" placeholder="<?php _e('Unesi par riječi o Mentoru', 'edunova'); ?>"><?php if ( isset ( $edunova_mentor_list_text2['mentor-list-info2'] ) ) echo $edunova_mentor_list_text2['mentor-list-info2'][0]; ?></textarea>

				</div>

			</div>

		</div>

	</div>
	
	<div id="mentorTable1">

		<div class="mentorTableRow">
			
			<div class="mentorImage2">
				<span>3.</span>
			</div>
			
			<div class="mentorImage1">

				<p class="imageAvatar">

					<p class="edunova-row-title"><?php _e('Ime Mentora:', 'edunova')?></p>

					<input type="text" name="mentor-meta-list-name3" id="mentor-meta-list-name3" value="<?php if (isset($edunova_mentor_list_name3['mentor-meta-list-name3'])) echo $edunova_mentor_list_name3['mentor-meta-list-name3'][0]; ?>" placeholder="<?php _e('Unesi Ime Mentora', 'edunova'); ?>"/>

				</p>

				<div class="mentorInfos1">

					<p class="edunova-row-title"><?php _e('Info o Mentoru:', 'edunova')?></p>

					<textarea name="mentor-list-info3" id="mentor-list-info3" placeholder="<?php _e('Unesi par riječi o Mentoru', 'edunova'); ?>"><?php if ( isset ( $edunova_mentor_list_text3['mentor-list-info3'] ) ) echo $edunova_mentor_list_text3['mentor-list-info3'][0]; ?></textarea>

				</div>

			</div>

		</div>

	</div>
	
	<div id="mentorTable1">

		<div class="mentorTableRow">
			
			<div class="mentorImage2">
				<span>4.</span>
			</div>
			
			<div class="mentorImage1">

				<p class="imageAvatar">

					<p class="edunova-row-title"><?php _e('Ime Mentora:', 'edunova')?></p>

					<input type="text" name="mentor-meta-list-name4" id="mentor-meta-list-name4" value="<?php if (isset($edunova_mentor_list_name4['mentor-meta-list-name4'])) echo $edunova_mentor_list_name4['mentor-meta-list-name4'][0]; ?>" placeholder="<?php _e('Unesi Ime Mentora', 'edunova'); ?>"/>

				</p>

				<div class="mentorInfos1">

					<p class="edunova-row-title"><?php _e('Info o Mentoru:', 'edunova')?></p>

					<textarea name="mentor-list-info4" id="mentor-list-info4" placeholder="<?php _e('Unesi par riječi o Mentoru', 'edunova'); ?>"><?php if ( isset ( $edunova_mentor_list_text4['mentor-list-info4'] ) ) echo $edunova_mentor_list_text4['mentor-list-info4'][0]; ?></textarea>

				</div>

			</div>

		</div>

	</div>
	
	<div id="mentorTable1">

		<div class="mentorTableRow">
			
			<div class="mentorImage2">
				<span>5.</span>
			</div>
			
			<div class="mentorImage1">

				<p class="imageAvatar">

					<p class="edunova-row-title"><?php _e('Ime Mentora:', 'edunova')?></p>

					<input type="text" name="mentor-meta-list-name5" id="mentor-meta-list-name5" value="<?php if (isset($edunova_mentor_list_name5['mentor-meta-list-name5'])) echo $edunova_mentor_list_name5['mentor-meta-list-name5'][0]; ?>" placeholder="<?php _e('Unesi Ime Mentora', 'edunova'); ?>"/>

				</p>

				<div class="mentorInfos1">

					<p class="edunova-row-title"><?php _e('Info o Mentoru:', 'edunova')?></p>

					<textarea name="mentor-list-info5" id="mentor-list-info5" placeholder="<?php _e('Unesi par riječi o Mentoru', 'edunova'); ?>"><?php if ( isset ( $edunova_mentor_list_text5['mentor-list-info5'] ) ) echo $edunova_mentor_list_text5['mentor-list-info5'][0]; ?></textarea>

				</div>

			</div>

		</div>

	</div>
	
	<div id="mentorTable2">

		<div class="mentorTableRow">
			
			<div class="mentorImage2">
				<span>6.</span>
			</div>
			
			<div class="mentorImage1">

				<p class="imageAvatar">

					<p class="edunova-row-title"><?php _e('Ime Mentora:', 'edunova')?></p>

					<input type="text" name="mentor-meta-list-name6" id="mentor-meta-list-name6" value="<?php if (isset($edunova_mentor_list_name6['mentor-meta-list-name6'])) echo $edunova_mentor_list_name6['mentor-meta-list-name6'][0]; ?>" placeholder="<?php _e('Unesi Ime Mentora', 'edunova'); ?>"/>

				</p>

				<div class="mentorInfos1">

					<p class="edunova-row-title"><?php _e('Info o Mentoru:', 'edunova')?></p>

					<textarea name="mentor-list-info6" id="mentor-list-info6" placeholder="<?php _e('Unesi par riječi o Mentoru', 'edunova'); ?>"><?php if ( isset ( $edunova_mentor_list_text6['mentor-list-info6'] ) ) echo $edunova_mentor_list_text6['mentor-list-info6'][0]; ?></textarea>

				</div>

			</div>

		</div>

	</div>

<?php

}


/* Save Meta Input */

function edunova_mentor_list_save($post_id) {

    // Checks save status

    $edunova_info_autosave = wp_is_post_autosave($post_id);

    $edunova_info_revision = wp_is_post_revision($post_id);

    $edunova_info_valid_nonce = (isset($_POST['edunova_mentor_list_nonce']) && wp_verify_nonce($_POST['edunova_mentor_list_nonce'], basename( __FILE__ ))) ? 'true' : 'false';

    // Exits script depending on save status

    if ( $edunova_info_autosave || $edunova_info_revision || !$edunova_info_valid_nonce ) {

        return;

    }

	// Checks for input and sanitizes/saves if needed

    if(isset($_POST['mentor-meta-list-name1'])) {

        update_post_meta($post_id, 'mentor-meta-list-name1', sanitize_text_field($_POST['mentor-meta-list-name1']));

    }

	if(isset($_POST['mentor-list-info1'])) {

        update_post_meta($post_id, 'mentor-list-info1', sanitize_text_field($_POST['mentor-list-info1']));

    }
	
	if(isset($_POST['mentor-meta-list-name2'])) {

        update_post_meta($post_id, 'mentor-meta-list-name2', sanitize_text_field($_POST['mentor-meta-list-name2']));

    }

	if(isset($_POST['mentor-list-info2'])) {

        update_post_meta($post_id, 'mentor-list-info2', sanitize_text_field($_POST['mentor-list-info2']));

    }
	
	if(isset($_POST['mentor-meta-list-name3'])) {

        update_post_meta($post_id, 'mentor-meta-list-name3', sanitize_text_field($_POST['mentor-meta-list-name3']));

    }

	if(isset($_POST['mentor-list-info3'])) {

        update_post_meta($post_id, 'mentor-list-info3', sanitize_text_field($_POST['mentor-list-info3']));

    }
	
	if(isset($_POST['mentor-meta-list-name4'])) {

        update_post_meta($post_id, 'mentor-meta-list-name4', sanitize_text_field($_POST['mentor-meta-list-name4']));

    }

	if(isset($_POST['mentor-list-info4'])) {

        update_post_meta($post_id, 'mentor-list-info4', sanitize_text_field($_POST['mentor-list-info4']));

    }
	
	if(isset($_POST['mentor-meta-list-name5'])) {

        update_post_meta($post_id, 'mentor-meta-list-name5', sanitize_text_field($_POST['mentor-meta-list-name5']));

    }

	if(isset($_POST['mentor-list-info5'])) {

        update_post_meta($post_id, 'mentor-list-info5', sanitize_text_field($_POST['mentor-list-info5']));

    }
	
	if(isset($_POST['mentor-meta-list-name6'])) {

        update_post_meta($post_id, 'mentor-meta-list-name6', sanitize_text_field($_POST['mentor-meta-list-name6']));

    }

	if(isset($_POST['mentor-list-info6'])) {

        update_post_meta($post_id, 'mentor-list-info6', sanitize_text_field($_POST['mentor-list-info6']));

    }
}

add_action('save_post', 'edunova_mentor_list_save');

?>