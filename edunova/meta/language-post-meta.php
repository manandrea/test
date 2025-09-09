<?php


/*


Plugin Name: Edunova Programs Meta Box for Language Course


Plugin URI: http://www.edunova.hr/


Description: Custom meta box for displaying important info about language courses.


Author: Zeljko Simic


Version: 1.0


Author URI: https://www.facebook.com/zsimic84


*/





/* Add Meta Box */


function edunova_lang_custom_meta() {


	global $post;


    if(!empty($post))


    {


        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);


        if($pageTemplate == 'page-courselang.php' ) {


			add_meta_box('edunova_lang_meta', __('Edunova Program Box - Strani Jezici', 'edunova'), 'edunova_lang_meta_callback', 'page', 'normal', 'default');


		}


	}


}


add_action('add_meta_boxes', 'edunova_lang_custom_meta');





/* Output the Content of the Meta Box */


function edunova_lang_meta_callback($post) {


	wp_nonce_field(basename( __FILE__ ), 'edunova_lang_nonce');


		$program_a1_re_lang_stored_meta = get_post_meta($post->ID);


		$program_a1_coed_lang_stored_meta = get_post_meta($post->ID);


		$program_a2_re_lang_stored_meta = get_post_meta($post->ID);


		$program_a2_coed_lang_stored_meta = get_post_meta($post->ID);


		$program_b1_re_lang_stored_meta = get_post_meta($post->ID);


		$program_b1_coed_lang_stored_meta = get_post_meta($post->ID);


		$program_b2_re_lang_stored_meta = get_post_meta($post->ID);


		$program_b2_coed_lang_stored_meta = get_post_meta($post->ID);


		$program_c1_re_lang_stored_meta = get_post_meta($post->ID);


		$program_c1_coed_lang_stored_meta = get_post_meta($post->ID);


		$program_c2_re_lang_stored_meta = get_post_meta($post->ID);


		$program_c2_coed_lang_stored_meta = get_post_meta($post->ID);


		$program_subtitle_lang_stored_meta = get_post_meta($post->ID);


		$program_popust_lang_stored_meta = get_post_meta($post->ID);


		$program_sati_lang_stored_meta = get_post_meta($post->ID);


		$program_upisnina_lang_stored_meta = get_post_meta($post->ID);
        
        
        $program_popust_lang_stored_meta = get_post_meta($post->ID);


		$program_skolarina_grupno_lang_stored_meta = get_post_meta($post->ID);


		$program_skolarina_indi_lang_stored_meta = get_post_meta($post->ID);


		$program_brojsati_grupno_lang_stored_meta = get_post_meta($post->ID);


		$program_brojsati_indi_lang_stored_meta = get_post_meta($post->ID);


		$program_placanje_od_lang_stored_meta = get_post_meta($post->ID);


		$program_placanje_do_lang_stored_meta = get_post_meta($post->ID);


		$program_uplate_mjeseci_lang_stored_meta = get_post_meta($post->ID);


    ?>


	<style>


		#edunova_lang_meta .hndle {background-color: #144f71 !important; color: #ffffff;}


		#edunova_lang_meta .handlediv {color: #ffffff;}


		.wrapperProgram {display: table; width: 100%;}


		.edunova-program-textarea {display: table-cell; width: 50%; padding-right: 10px;}


		.edunova-program-textarea .cellProgram {display: table; width: 100%;}


		.edunova-program-textarea .cellRow {display: table-row; width: 100%;}


		.edunova-program-textarea .cellNumber {display: table-cell; width: 25px;}


		.edunova-program-textarea .cellInput {display: table-cell; padding: 0px 5px 10px 5px;}


		.edunova-program-textarea .cellInput input {display: inline-block;}


		.edunova-program-textarea #popust-lang-text {width: 100%; height: 65px; padding: 10px;}


		.edunova-program-right {display: table-cell; width: 50%; padding-left: 10px;}


		.edunova-program-right .cellProgram {display: table; width: 100%;}


		.edunova-program-right .cellRow {display: table-row; width: 100%;}


		.edunova-program-right .cellNumber {display: table-cell; width: 25px;}


		.edunova-program-right .cellInput {display: table-cell; padding-bottom: 10px;}


		.edunova-program-right .cellInput1 {display: table-cell; padding-bottom: 10px; padding-right: 20px;}


		.edunova-program-right .cellInput2 {display: table-cell; padding-bottom: 10px;}


		.edunova-program-right .cellEndput {display: table-cell; width: 50px; text-align: center; padding-left: 10px;}


		.edunova-program-right .cellEndput1 {display: table-cell; padding-right: 5px; text-align: left;}


	</style>


	<div class="wrapperProgram">


		<div class="edunova-program-textarea">


			<p><?php _e('<b>Program Smjera:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellNumber">A1</div>


					<div class="cellInput">


						<input type="text" name="program-a1-re-lang" id="program-a1-re-lang" value="<?php if (isset($program_a1_re_lang_stored_meta['program-a1-re-lang'])) echo $program_a1_re_lang_stored_meta['program-a1-re-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi RE', 'edunova'); ?>"/>


					</div>


					<div class="cellInput">


						<input type="text" name="program-a1-coed-lang" id="program-a1-coed-lang" value="<?php if (isset($program_a1_coed_lang_stored_meta['program-a1-coed-lang'])) echo $program_a1_coed_lang_stored_meta['program-a1-coed-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi CoED', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">A2</div>


					<div class="cellInput">


						<input type="text" name="program-a2-re-lang" id="program-a2-re-lang" value="<?php if (isset($program_a2_re_lang_stored_meta['program-a2-re-lang'])) echo $program_a2_re_lang_stored_meta['program-a2-re-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi RE', 'edunova'); ?>"/>


					</div>


					<div class="cellInput">


						<input type="text" name="program-a2-coed-lang" id="program-a2-coed-lang" value="<?php if (isset($program_a2_coed_lang_stored_meta['program-a2-coed-lang'])) echo $program_a2_coed_lang_stored_meta['program-a2-coed-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi CoED', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">B1</div>


					<div class="cellInput">


						<input type="text" name="program-b1-re-lang" id="program-b1-re-lang" value="<?php if (isset($program_b1_re_lang_stored_meta['program-b1-re-lang'])) echo $program_b1_re_lang_stored_meta['program-b1-re-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi RE', 'edunova'); ?>"/>


					</div>


					<div class="cellInput">


						<input type="text" name="program-b1-coed-lang" id="program-b1-coed-lang" value="<?php if (isset($program_b1_coed_lang_stored_meta['program-b1-coed-lang'])) echo $program_b1_coed_lang_stored_meta['program-b1-coed-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi CoED', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">B2</div>


					<div class="cellInput">


						<input type="text" name="program-b2-re-lang" id="program-b2-re-lang" value="<?php if (isset($program_b2_re_lang_stored_meta['program-b2-re-lang'])) echo $program_b2_re_lang_stored_meta['program-b2-re-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi RE', 'edunova'); ?>"/>


					</div>


					<div class="cellInput">


						<input type="text" name="program-b2-coed-lang" id="program-b2-coed-lang" value="<?php if (isset($program_b2_coed_lang_stored_meta['program-b2-coed-lang'])) echo $program_b2_coed_lang_stored_meta['program-b2-coed-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi CoED', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">C1</div>


					<div class="cellInput">


						<input type="text" name="program-c1-re-lang" id="program-c1-re-lang" value="<?php if (isset($program_c1_re_lang_stored_meta['program-c1-re-lang'])) echo $program_c1_re_lang_stored_meta['program-c1-re-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi RE', 'edunova'); ?>"/>


					</div>


					<div class="cellInput">


						<input type="text" name="program-c1-coed-lang" id="program-c1-coed-lang" value="<?php if (isset($program_c1_coed_lang_stored_meta['program-c1-coed-lang'])) echo $program_c1_coed_lang_stored_meta['program-c1-coed-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi CoED', 'edunova'); ?>"/>


					</div>


				</div>


				<div class="cellRow">


					<div class="cellNumber">C2</div>


					<div class="cellInput">


						<input type="text" name="program-c2-re-lang" id="program-c2-re-lang" value="<?php if (isset($program_c2_re_lang_stored_meta['program-c2-re-lang'])) echo $program_c2_re_lang_stored_meta['program-c2-re-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi RE', 'edunova'); ?>"/>


					</div>


					<div class="cellInput">


						<input type="text" name="program-c2-coed-lang" id="program-c2-coed-lang" value="<?php if (isset($program_c2_coed_lang_stored_meta['program-c2-coed-lang'])) echo $program_c2_coed_lang_stored_meta['program-c2-coed-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi CoED', 'edunova'); ?>"/>


					</div>


				</div>


			</div>


			<p style="margin: 0; font-size: 12px;"><i>*RE = Related Examinations</i></p>


			<p style="margin: 0 0 10px 0; font-size: 12px"><i>*CoED = Council of Europe Document</i></p>


			<p><?php _e('<b>Podnaslov Programa:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellInput">


						<input type="text" name="program-subtitle-lang" id="program-subtitle-lang" value="<?php if (isset($program_subtitle_lang_stored_meta['program-subtitle-lang'])) echo $program_subtitle_lang_stored_meta['program-subtitle-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Podnaslov Programa', 'edunova'); ?>"/>


						<span><?php _e('<i style="font-size: 12px;">Primjer: "Kreirajte impresivne web stranice"</i>', 'edunova'); ?></span>


					</div>


				</div>


			</div>


			<p><?php _e('<b>Popust na Program:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellInput">


						<textarea name="popust-lang-text" id="popust-lang-text" placeholder="<?php _e('Unesi Popust', 'edunova'); ?>"><?php if ( isset ( $program_popust_lang_stored_meta['popust-lang-text'] ) ) echo $program_popust_lang_stored_meta['popust-lang-text'][0]; ?></textarea>


					</div>


				</div>


			</div>


		</div>


		


		<div class="edunova-program-right">


			<p><?php _e('<b>Broj Sati:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellInput">


						<input type="text" name="program-sati-meta-lang" id="program-sati-meta-lang" value="<?php if (isset($program_sati_lang_stored_meta['program-sati-meta-lang'])) echo $program_sati_lang_stored_meta['program-sati-meta-lang'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Broj Sati', 'edunova'); ?>"/>


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


						<input type="text" name="program-upisnina-lang-text" id="program-upisnina-lang-text" value="<?php if (isset($program_upisnina_lang_stored_meta['program-upisnina-lang-text'])) echo $program_upisnina_lang_stored_meta['program-upisnina-lang-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Cijenu', 'edunova'); ?>"/>


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


						<input type="text" name="program-popust-lang-text" id="program-popust-lang-text" value="<?php if (isset($program_popust_lang_stored_meta['program-popust-lang-text'])) echo $program_popust_lang_stored_meta['program-popust-lang-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Popust', 'edunova'); ?>"/>


					</div>


					<div class="cellEndput">


						KUNA


					</div>


				</div>


			</div>


			<p><?php _e('<b>Školarina:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellEndput1">


						Grupno:


					</div>


					<div class="cellInput1">


						<input type="text" name="program-skolarina-grupno-lang-text" id="program-skolarina-grupno-lang-text" value="<?php if (isset($program_skolarina_grupno_lang_stored_meta['program-skolarina-grupno-lang-text'])) echo $program_skolarina_grupno_lang_stored_meta['program-skolarina-grupno-lang-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Cijenu', 'edunova'); ?>"/>


					</div>


					<div class="cellEndput1">


						Individualno:


					</div>


					<div class="cellInput">


						<input type="text" name="program-skolarina-indi-lang-text" id="program-skolarina-indi-lang-text" value="<?php if (isset($program_skolarina_indi_lang_stored_meta['program-skolarina-indi-lang-text'])) echo $program_skolarina_indi_lang_stored_meta['program-skolarina-indi-lang-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Cijenu', 'edunova'); ?>"/>


					</div>


				</div>


			</div>


			<p><?php _e('<b>Broj Sati:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellEndput1">


						Grupno:


					</div>


					<div class="cellInput1">


						<input type="text" name="program-brojsati-grupno-lang-text" id="program-brojsati-grupno-lang-text" value="<?php if (isset($program_brojsati_grupno_lang_stored_meta['program-brojsati-grupno-lang-text'])) echo $program_brojsati_grupno_lang_stored_meta['program-brojsati-grupno-lang-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Broj Sati', 'edunova'); ?>"/>


					</div>


					<div class="cellEndput1">


						Individualno:


					</div>


					<div class="cellInput">


						<input type="text" name="program-brojsati-indi-lang-text" id="program-brojsati-indi-lang-text" value="<?php if (isset($program_brojsati_indi_lang_stored_meta['program-brojsati-indi-lang-text'])) echo $program_brojsati_indi_lang_stored_meta['program-brojsati-indi-lang-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Broj Sati', 'edunova'); ?>"/>


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


						<input type="text" name="program-placanje-od-lang-text" id="program-placanje-od-lang-text" value="<?php if (isset($program_placanje_od_lang_stored_meta['program-placanje-od-lang-text'])) echo $program_placanje_od_lang_stored_meta['program-placanje-od-lang-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Min. Rata', 'edunova'); ?>"/>


					</div>


					<div class="cellEndput1">


						Do:


					</div>


					<div class="cellInput">


						<input type="text" name="program-placanje-do-lang-text" id="program-placanje-do-lang-text" value="<?php if (isset($program_placanje_do_lang_stored_meta['program-placanje-do-lang-text'])) echo $program_placanje_do_lang_stored_meta['program-placanje-do-lang-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Max. Rata', 'edunova'); ?>"/>


					</div>


				</div>


			</div>


			<p><?php _e('<b>Uplate po Mjesecima:</b> ', 'edunova'); ?></p>


			<div class="cellProgram">


				<div class="cellRow">


					<div class="cellInput">


						<input type="text" name="program-uplate-mjeseci-lang-text" id="program-uplate-mjeseci-lang-text" value="<?php if (isset($program_uplate_mjeseci_lang_stored_meta['program-uplate-mjeseci-lang-text'])) echo $program_uplate_mjeseci_lang_stored_meta['program-uplate-mjeseci-lang-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Cijenu po Mjesecima', 'edunova'); ?>"/>


						<span><?php _e('<i style="font-size: 12px;">"Primjer: 6 x 238,00 KN"</i>', 'edunova'); ?></span>


					</div>


				</div>


			</div>


		</div>


	</div>


<?php


}


/* Save Meta Input */


function edunova_lang_meta_save($post_id) {


    // Checks save status


    $edunova_info_autosave = wp_is_post_autosave($post_id);


    $edunova_info_revision = wp_is_post_revision($post_id);


    $edunova_info_valid_nonce = (isset($_POST['edunova_lang_nonce']) && wp_verify_nonce($_POST['edunova_lang_nonce'], basename( __FILE__ ))) ? 'true' : 'false';


    // Exits script depending on save status


    if ( $edunova_info_autosave || $edunova_info_revision || !$edunova_info_valid_nonce ) {


        return;


    }


	// Checks for input and sanitizes/saves if needed


    if(isset($_POST['program-a1-re-lang'])) {


        update_post_meta($post_id, 'program-a1-re-lang', sanitize_text_field($_POST['program-a1-re-lang']));


    }


	if(isset($_POST['program-a1-coed-lang'])) {


        update_post_meta($post_id, 'program-a1-coed-lang', sanitize_text_field($_POST['program-a1-coed-lang']));


    }


	if(isset($_POST['program-a2-re-lang'])) {


        update_post_meta($post_id, 'program-a2-re-lang', sanitize_text_field($_POST['program-a2-re-lang']));


    }


	if(isset($_POST['program-a2-coed-lang'])) {


        update_post_meta($post_id, 'program-a2-coed-lang', sanitize_text_field($_POST['program-a2-coed-lang']));


    }


	if(isset($_POST['program-b1-re-lang'])) {


        update_post_meta($post_id, 'program-b1-re-lang', sanitize_text_field($_POST['program-b1-re-lang']));


    }


	if(isset($_POST['program-b1-coed-lang'])) {


        update_post_meta($post_id, 'program-b1-coed-lang', sanitize_text_field($_POST['program-b1-coed-lang']));


    }


	if(isset($_POST['program-b2-re-lang'])) {


        update_post_meta($post_id, 'program-b2-re-lang', sanitize_text_field($_POST['program-b2-re-lang']));


    }


	if(isset($_POST['program-b2-coed-lang'])) {


        update_post_meta($post_id, 'program-b2-coed-lang', sanitize_text_field($_POST['program-b2-coed-lang']));


    }


	if(isset($_POST['program-c1-re-lang'])) {


        update_post_meta($post_id, 'program-c1-re-lang', sanitize_text_field($_POST['program-c1-re-lang']));


    }


	if(isset($_POST['program-c1-coed-lang'])) {


        update_post_meta($post_id, 'program-c1-coed-lang', sanitize_text_field($_POST['program-c1-coed-lang']));


    }


	if(isset($_POST['program-c2-re-lang'])) {


        update_post_meta($post_id, 'program-c2-re-lang', sanitize_text_field($_POST['program-c2-re-lang']));


    }


	if(isset($_POST['program-c2-coed-lang'])) {


        update_post_meta($post_id, 'program-c2-coed-lang', sanitize_text_field($_POST['program-c2-coed-lang']));


    }


	if(isset($_POST['program-subtitle-lang'])) {


        update_post_meta($post_id, 'program-subtitle-lang', sanitize_text_field($_POST['program-subtitle-lang']));


    }


	if(isset($_POST['popust-lang-text'])) {


        update_post_meta($post_id, 'popust-lang-text', sanitize_text_field($_POST['popust-lang-text']));


    }


	if(isset($_POST['program-sati-meta-lang'])) {


        update_post_meta($post_id, 'program-sati-meta-lang', sanitize_text_field($_POST['program-sati-meta-lang']));


    }


	if(isset($_POST['program-upisnina-lang-text'])) {


        update_post_meta($post_id, 'program-upisnina-lang-text', sanitize_text_field($_POST['program-upisnina-lang-text']));


    }
    
    if(isset($_POST['program-popust-lang-text'])) {


        update_post_meta($post_id, 'program-popust-lang-text', sanitize_text_field($_POST['program-popust-lang-text']));


    }


	if(isset($_POST['program-skolarina-grupno-lang-text'])) {


        update_post_meta($post_id, 'program-skolarina-grupno-lang-text', sanitize_text_field($_POST['program-skolarina-grupno-lang-text']));


    }


	if(isset($_POST['program-skolarina-indi-lang-text'])) {


        update_post_meta($post_id, 'program-skolarina-indi-lang-text', sanitize_text_field($_POST['program-skolarina-indi-lang-text']));


    }


	if(isset($_POST['program-brojsati-grupno-lang-text'])) {


        update_post_meta($post_id, 'program-brojsati-grupno-lang-text', sanitize_text_field($_POST['program-brojsati-grupno-lang-text']));


    }


	if(isset($_POST['program-brojsati-indi-lang-text'])) {


        update_post_meta($post_id, 'program-brojsati-indi-lang-text', sanitize_text_field($_POST['program-brojsati-indi-lang-text']));


    }


	if(isset($_POST['program-placanje-od-lang-text'])) {


        update_post_meta($post_id, 'program-placanje-od-lang-text', sanitize_text_field($_POST['program-placanje-od-lang-text']));


    }


	if(isset($_POST['program-placanje-do-lang-text'])) {


        update_post_meta($post_id, 'program-placanje-do-lang-text', sanitize_text_field($_POST['program-placanje-do-lang-text']));


    }


	if(isset($_POST['program-uplate-mjeseci-lang-text'])) {


        update_post_meta($post_id, 'program-uplate-mjeseci-lang-text', sanitize_text_field($_POST['program-uplate-mjeseci-lang-text']));


    }


}


add_action('save_post', 'edunova_lang_meta_save');


?>