<?php
/*
Plugin Name: Edunova Meta Kontakt - Google Map Box
Plugin URI: http://www.edunova.hr/
Description: Custom meta box for displaying Google Map.
Author: Zeljko Simic
Version: 1.0
Author URI: https://www.facebook.com/zsimic84
*/

/* Add Meta Box */
function edunova_gmap_meta() {
	global $post;
    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if($pageTemplate == 'page-contact.php' ) {
			add_meta_box('edunova_gmap_meta', __('Edunova Kontakt - Google Map Box', 'edunova'), 'edunova_gmap_callback', 'page', 'normal', 'default');
		}
	}
}
add_action('add_meta_boxes', 'edunova_gmap_meta');

/* Output the Content of the Meta Box */
function edunova_gmap_callback($post) {
	wp_nonce_field(basename( __FILE__ ), 'edunova_gmap_nonce');
		$edunova_gname_store = get_post_meta($post->ID);
		$edunova_gstreet_store = get_post_meta($post->ID);
		$edunova_gpostnum_store = get_post_meta($post->ID);
		$edunova_gcity_store = get_post_meta($post->ID);
    ?>
	<style>
		#edunova_gmap_meta .hndle {background-color: #144f71 !important; color: #ffffff !important;}
		#edunova_gmap_meta .handlediv {color: #ffffff !important;}
		#eduTable {display: table; width: 100%;}
		#eduTable .eduRow {display: table-row; width: 100%;}
		#eduTable .eduCell {display: table-cell; width: 50%;}
		#eduTable .innerCell {display: table-cell;}
		.cell-20 {width: 20px;}
		.width-25 {width: 25%;}
		.width-50 {width: 50%;}
		.padding-r-15 {padding-right: 15px;}
		.padding-l-15 {padding-left: 15px;}
		.eduTableDivider {display: inline-block; width: 100%; height: 1px; margin-top: 30px; margin-bottom: 10px; background-color: #cccccc;}
		#slider1-short-text, #slider2-short-text {width: 100%; height: 97.5px;}
	</style>
	<div id="eduTable">
		<div class="eduRow">
			<div class="eduCell">
				<div id="eduTable">
					<div class="eduRow">
						<div class="eduCell padding-r-15">
							<p>Traženi Pojam:</p>
							<input type="text" name="services-gname-text" id="services-gname-text" value="<?php if (isset($edunova_gname_store['services-gname-text'])) echo $edunova_gname_store['services-gname-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Pojam', 'edunova'); ?>"/>
							<i style="font-size: 12px; color: #999999;">Primjer: Edunova</i>
						</div>
					</div>
					<div class="eduRow">
						<div class="eduCell padding-r-15">
							<p>Ulica i Br:</p>
							<input type="text" name="services-gstreet-text" id="services-gstreet-text" value="<?php if (isset($edunova_gstreet_store['services-gstreet-text'])) echo $edunova_gstreet_store['services-gstreet-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Ulicu i Broj', 'edunova'); ?>"/>
							<i style="font-size: 12px; color: #999999;">Primjer: Lorenza Jagera 5</i>
						</div>
					</div>
				</div>
				<div id="eduTable">
					<div class="eduRow">
						<div class="eduCell padding-r-15">
							<p>Poštanski Broj:</p>
							<input type="text" name="services-gpostnum-text" id="services-gpostnum-text" value="<?php if (isset($edunova_gpostnum_store['services-gpostnum-text'])) echo $edunova_gpostnum_store['services-gpostnum-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Poštanski Broj', 'edunova'); ?>"/>
							<i style="font-size: 12px; color: #999999;">Primjer: 31000</i>
						</div>
						<div class="eduCell padding-r-15">
							<p>Grad:</p>
							<input type="text" name="services-gcity-text" id="services-gcity-text" value="<?php if (isset($edunova_gcity_store['services-gcity-text'])) echo $edunova_gcity_store['services-gcity-text'][0]; ?>" style="width: 100%;" placeholder="<?php _e('Unesi Grad', 'edunova'); ?>"/>
							<i style="font-size: 12px; color: #999999;">Primjer: Osijek</i>
						</div>
					</div>
				</div>
			</div>
			<div class="eduCell">
				<p>Google Karta:</p>
				<?php 
					$edu_city = get_post_meta(get_the_ID(), 'services-gcity-text', true);
					$edu_name = get_post_meta(get_the_ID(), 'services-gname-text', true);
					$edu_street = get_post_meta(get_the_ID(), 'services-gstreet-text', true);
					$edu_post = get_post_meta(get_the_ID(), 'services-gpostnum-text', true);
					echo '<iframe src="https://maps.google.hr/maps?f=d&source=s_d&saddr='.$edu_city.',+'.$edu_name.',+'.$edu_street.',+'.$edu_post.',+'.$edu_city.'&geocode=FRIdtwIdWkUdASl1gHJpqOdcRzGVEaQhVnKMWw%3BFXsytwIdRAwdASmXWNdkpudcRzGm_DRWrFulsQ&hl=hr&dirflg=w&mra=ls&ie=UTF8&t=m&z=16&output=embed" width="100%" height="217" frameborder="0" style="border:0"></iframe>'; 
				?>
			</div>
		</div>
	</div>
<?php
}
/* Save Meta Input */
function edunova_gmap_save($post_id) {
    // Checks save status
    $edunova_info_autosave = wp_is_post_autosave($post_id);
    $edunova_info_revision = wp_is_post_revision($post_id);
    $edunova_info_valid_nonce = (isset($_POST['edunova_gmap_nonce']) && wp_verify_nonce($_POST['edunova_gmap_nonce'], basename( __FILE__ ))) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $edunova_info_autosave || $edunova_info_revision || !$edunova_info_valid_nonce ) {
        return;
    }
    // Checks for input and sanitizes/saves if needed
	if(isset($_POST['services-gname-text'])) {
		update_post_meta($post_id, 'services-gname-text', sanitize_text_field($_POST['services-gname-text']));
    }
	if(isset($_POST['services-gstreet-text'])) {
		update_post_meta($post_id, 'services-gstreet-text', sanitize_text_field($_POST['services-gstreet-text']));
    }
	if(isset($_POST['services-gpostnum-text'])) {
		update_post_meta($post_id, 'services-gpostnum-text', sanitize_text_field($_POST['services-gpostnum-text']));
    }
	if(isset($_POST['services-gcity-text'])) {
		update_post_meta($post_id, 'services-gcity-text', sanitize_text_field($_POST['services-gcity-text']));
    }
}
add_action('save_post', 'edunova_gmap_save');
?>