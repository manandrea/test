<?php


/*


Plugin Name: Edunova Programs Meta Box for Courses


Plugin URI: http://www.edunova.hr/


Description: Custom meta box for displaying important info about courses.


Author: Zeljko Simic


Version: 1.0


Author URI: https://www.facebook.com/zsimic84


*/





/* Add Meta Box */


function edunova_course_custom_meta() {


	global $post;


    if(!empty($post))


    {


        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);


        if($pageTemplate == 'page-course.php' ) {


			add_meta_box('edunova_course_meta', __('Edunova Program Box - Informatika/Management', 'edunova'), 'edunova_course_meta_callback', 'page', 'normal', 'default');


		}


	}


}


add_action('add_meta_boxes', 'edunova_course_custom_meta');





/* Output the Content of the Meta Box */


function edunova_course_meta_callback($post) {


	wp_nonce_field(basename( __FILE__ ), 'edunova_course_nonce');


		$edunova_program1_stored_meta = get_post_meta($post->ID);


		$edunova_program2_stored_meta = get_post_meta($post->ID);


		$edunova_program3_stored_meta = get_post_meta($post->ID);


		$edunova_program4_stored_meta = get_post_meta($post->ID);


		$edunova_program5_stored_meta = get_post_meta($post->ID);


		$edunova_program6_stored_meta = get_post_meta($post->ID);


		$edunova_program7_stored_meta = get_post_meta($post->ID);


		$edunova_program8_stored_meta = get_post_meta($post->ID);


		$edunova_program9_stored_meta = get_post_meta($post->ID);


		$edunova_program10_stored_meta = get_post_meta($post->ID);


		$edunova_program_sati_stored_meta = get_post_meta($post->ID);


		$edunova_program_upisnina_stored_meta = get_post_meta($post->ID);


		$edunova_program_skolarina_stored_meta = get_post_meta($post->ID);
    
        
        $edunova_program_popust_stored_meta = get_post_meta($post->ID);


		$edunova_program_od_stored_meta = get_post_meta($post->ID);


		$edunova_program_do_stored_meta = get_post_meta($post->ID);


		$edunova_program_subtitle_stored_meta = get_post_meta($post->ID);


    ?>


	<style>


		#edunova_course_meta .hndle {background-color: #144f71 !important; color: #ffffff;}


		#edunova_course_meta .handlediv {color: #ffffff;}


		.wrapperProgram {display: table; width: 100%;}


		.edunova-program-textarea {display: table-cell; width: 50%; padding-right: 10px;}


		.edunova-program-textarea .cellProgram {display: table; width: 100%;}


		.edunova-program-textarea .cellRow {display: table-row; width: 100%;}


		.edunova-program-textarea .cellNumber {display: table-cell; width: 25px;}


		.edunova-program-textarea .cellInput {display: table-cell; padding-bottom: 10px;}


		.edunova-program-textarea .cellInput input {display: inline-block;}


		.edunova-program-right {display: table-cell; width: 50%; padding-left: 10px;}


		.edunova-program-right .cellProgram {display: table; width: 100%;}


		.edunova-program-right .cellRow {display: table-row; width: 100%;}


		.edunova-program-right .cellNumber {display: table-cell; width: 25px;}


		.edunova-program-right .cellInput {display: table-cell; padding-bottom: 10px;}


		.edunova-program-right .cellInput1 {display: table-cell; padding-bottom: 10px; padding-right: 20px;}


		.edunova-program-right .cellInput2 {display: table-cell; padding-bottom: 10px;}


		.edunova-program-right .cellEndput {display: table-cell; width: 50px; text-align: center; padding-left: 10px;}


		.edunova-program-right .cellEndput1 {display: table-cell; width: 30px; text-align: left;}


	</style>


	<div class="wrapperProgram">


		<div class="edunova-program-textarea">


			<p><?php _e('<b>Program Smjera:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellNumber">1.</div>


					<div class="cellInput">


						<input type="text" name="program1-meta-text" id="program1-meta-text" value="<?php if (isset($edunova_program1_stored_meta['program1-meta-text'])) echo $edunova_program1_stored_meta['program1-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Poglavlje', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">2.</div>


					<div class="cellInput">


						<input type="text" name="program2-meta-text" id="program2-meta-text" value="<?php if (isset($edunova_program1_stored_meta['program2-meta-text'])) echo $edunova_program1_stored_meta['program2-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Poglavlje', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">3.</div>


					<div class="cellInput">


						<input type="text" name="program3-meta-text" id="program3-meta-text" value="<?php if (isset($edunova_program1_stored_meta['program3-meta-text'])) echo $edunova_program1_stored_meta['program3-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Poglavlje', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">4.</div>


					<div class="cellInput">


						<input type="text" name="program4-meta-text" id="program4-meta-text" value="<?php if (isset($edunova_program1_stored_meta['program4-meta-text'])) echo $edunova_program1_stored_meta['program4-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Poglavlje', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">5.</div>


					<div class="cellInput">


						<input type="text" name="program5-meta-text" id="program5-meta-text" value="<?php if (isset($edunova_program1_stored_meta['program5-meta-text'])) echo $edunova_program1_stored_meta['program5-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Poglavlje', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">6.</div>


					<div class="cellInput">


						<input type="text" name="program6-meta-text" id="program6-meta-text" value="<?php if (isset($edunova_program1_stored_meta['program6-meta-text'])) echo $edunova_program1_stored_meta['program6-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Poglavlje', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">7.</div>


					<div class="cellInput">


						<input type="text" name="program7-meta-text" id="program7-meta-text" value="<?php if (isset($edunova_program1_stored_meta['program7-meta-text'])) echo $edunova_program1_stored_meta['program7-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Poglavlje', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">8.</div>


					<div class="cellInput">


						<input type="text" name="program8-meta-text" id="program8-meta-text" value="<?php if (isset($edunova_program1_stored_meta['program8-meta-text'])) echo $edunova_program1_stored_meta['program8-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Poglavlje', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">9.</div>


					<div class="cellInput">


						<input type="text" name="program9-meta-text" id="program9-meta-text" value="<?php if (isset($edunova_program1_stored_meta['program9-meta-text'])) echo $edunova_program1_stored_meta['program9-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Poglavlje', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">10.</div>


					<div class="cellInput">


						<input type="text" name="program10-meta-text" id="program10-meta-text" value="<?php if (isset($edunova_program1_stored_meta['program10-meta-text'])) echo $edunova_program1_stored_meta['program10-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Poglavlje', 'edunova'); ?>"/>


					</div>


				</div>


			</div>


		</div>


		


		<div class="edunova-program-right">


			<p><?php _e('<b>Broj Sati:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellInput">


						<input type="text" name="program-sati-meta-text" id="program-sati-meta-text" value="<?php if (isset($edunova_program_sati_stored_meta['program-sati-meta-text'])) echo $edunova_program_sati_stored_meta['program-sati-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Broj Sati', 'edunova'); ?>"/>


					</div>


					<div class="cellEndput">


						SATI


					</div>


				</div>


			</div>


			<p><?php _e('<b>Upisnina:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellInput">


						<input type="text" name="program-upisnina-meta-text" id="program-upisnina-meta-text" value="<?php if (isset($edunova_program_upisnina_stored_meta['program-upisnina-meta-text'])) echo $edunova_program_upisnina_stored_meta['program-upisnina-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Cijenu', 'edunova'); ?>"/>


					</div>


					<div class="cellEndput">


						KUNA


					</div>


				</div>


			</div>


			<p><?php _e('<b>Školarina:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellInput">


						<input type="text" name="program-skolarina-meta-text" id="program-skolarina-meta-text" value="<?php if (isset($edunova_program_skolarina_stored_meta['program-skolarina-meta-text'])) echo $edunova_program_skolarina_stored_meta['program-skolarina-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Cijenu', 'edunova'); ?>"/>


					</div>


					<div class="cellEndput">


						KUNA


					</div>


				</div>


			</div>
            
            
            <p><?php _e('<b>Popust:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellInput">


						<input type="text" name="program-popust-meta-text" id="program-popust-meta-text" value="<?php if (isset($edunova_program_popust_stored_meta['program-popust-meta-text'])) echo $edunova_program_popust_stored_meta['program-popust-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Popust', 'edunova'); ?>"/>


					</div>


					<div class="cellEndput">


						KUNA


					</div>


				</div>


			</div>


			<p><?php _e('<b>Mogućnost Plaćanja:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellEndput1">


						Od:


					</div>


					<div class="cellInput1">


						<input type="text" name="program-od-meta-text" id="program-od-meta-text" value="<?php if (isset($edunova_program_od_stored_meta['program-od-meta-text'])) echo $edunova_program_od_stored_meta['program-od-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Min. Rata', 'edunova'); ?>"/>


					</div>


					<div class="cellEndput1">


						Do:


					</div>


					<div class="cellInput">


						<input type="text" name="program-do-meta-text" id="program-do-meta-text" value="<?php if (isset($edunova_program_do_stored_meta['program-do-meta-text'])) echo $edunova_program_do_stored_meta['program-do-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Max. Rata', 'edunova'); ?>"/>


					</div>


				</div>


			</div>


			<p><?php _e('<b>Podnaslov Programa:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellInput">


						<input type="text" name="program-subtitle-meta-text" id="program-subtitle-meta-text" value="<?php if (isset($edunova_program_subtitle_stored_meta['program-subtitle-meta-text'])) echo $edunova_program_subtitle_stored_meta['program-subtitle-meta-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Podnaslov Programa', 'edunova'); ?>"/>


						<span><?php _e('<i>Primjer: "Kreirajte impresivne web stranice"</i>', 'edunova'); ?></span>


					</div>


				</div>


			</div>


		</div>


	</div>


<?php


}


/* Save Meta Input */


function edunova_course_meta_save($post_id) {


    // Checks save status


    $edunova_info_autosave = wp_is_post_autosave($post_id);


    $edunova_info_revision = wp_is_post_revision($post_id);


    $edunova_info_valid_nonce = (isset($_POST['edunova_course_nonce']) && wp_verify_nonce($_POST['edunova_course_nonce'], basename( __FILE__ ))) ? 'true' : 'false';


    // Exits script depending on save status


    if ( $edunova_info_autosave || $edunova_info_revision || !$edunova_info_valid_nonce ) {


        return;


    }


	// Checks for input and sanitizes/saves if needed


    if(isset($_POST['program1-meta-text'])) {


        update_post_meta($post_id, 'program1-meta-text', sanitize_text_field($_POST['program1-meta-text']));


    }


	if(isset($_POST['program2-meta-text'])) {


        update_post_meta($post_id, 'program2-meta-text', sanitize_text_field($_POST['program2-meta-text']));


    }


	if(isset($_POST['program3-meta-text'])) {


        update_post_meta($post_id, 'program3-meta-text', sanitize_text_field($_POST['program3-meta-text']));


    }


	if(isset($_POST['program4-meta-text'])) {


        update_post_meta($post_id, 'program4-meta-text', sanitize_text_field($_POST['program4-meta-text']));


    }


	if(isset($_POST['program5-meta-text'])) {


        update_post_meta($post_id, 'program5-meta-text', sanitize_text_field($_POST['program5-meta-text']));


    }


	if(isset($_POST['program6-meta-text'])) {


        update_post_meta($post_id, 'program6-meta-text', sanitize_text_field($_POST['program6-meta-text']));


    }


	if(isset($_POST['program7-meta-text'])) {


        update_post_meta($post_id, 'program7-meta-text', sanitize_text_field($_POST['program7-meta-text']));


    }


	if(isset($_POST['program8-meta-text'])) {


        update_post_meta($post_id, 'program8-meta-text', sanitize_text_field($_POST['program8-meta-text']));


    }


	if(isset($_POST['program9-meta-text'])) {


        update_post_meta($post_id, 'program9-meta-text', sanitize_text_field($_POST['program9-meta-text']));


    }


	if(isset($_POST['program10-meta-text'])) {


        update_post_meta($post_id, 'program10-meta-text', sanitize_text_field($_POST['program10-meta-text']));


    }


	if(isset($_POST['program-sati-meta-text'])) {


        update_post_meta($post_id, 'program-sati-meta-text', sanitize_text_field($_POST['program-sati-meta-text']));


    }


	if(isset($_POST['program-upisnina-meta-text'])) {


        update_post_meta($post_id, 'program-upisnina-meta-text', sanitize_text_field($_POST['program-upisnina-meta-text']));


    }


	if(isset($_POST['program-skolarina-meta-text'])) {


        update_post_meta($post_id, 'program-skolarina-meta-text', sanitize_text_field($_POST['program-skolarina-meta-text']));


    }
    
    if(isset($_POST['program-popust-meta-text'])) {


        update_post_meta($post_id, 'program-popust-meta-text', sanitize_text_field($_POST['program-popust-meta-text']));


    }


	if(isset($_POST['program-od-meta-text'])) {


        update_post_meta($post_id, 'program-od-meta-text', sanitize_text_field($_POST['program-od-meta-text']));


    }


	if(isset($_POST['program-do-meta-text'])) {


        update_post_meta($post_id, 'program-do-meta-text', sanitize_text_field($_POST['program-do-meta-text']));


    }


	if(isset($_POST['program-subtitle-meta-text'])) {


        update_post_meta($post_id, 'program-subtitle-meta-text', sanitize_text_field($_POST['program-subtitle-meta-text']));


    }


}


add_action('save_post', 'edunova_course_meta_save');


?>