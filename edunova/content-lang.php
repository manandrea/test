<div class="courseContentTitle">
	<?php
		$program_subtitle_lang = get_post_meta(get_the_ID(), 'program-subtitle-lang', true);
		if(!empty($program_subtitle_lang)) {
			echo '<h2>' . $program_subtitle_lang . '</h2>';
		}
	?>
</div>
<div class="courseImage">
	<?php
		if (has_post_thumbnail() ) {
			the_post_thumbnail();
		} else {
			echo '<img src="' . get_bloginfo('stylesheet_directory') . '/images/no-image-post.jpg"/>';
		}
	?>
	<?php
		$edunova_upisi = get_theme_mod('edunova_top_tray_upisi', '');
		if (!empty($edunova_upisi)) {
			echo '<a href="' . $edunova_upisi . '">UPIŠI SE</a>';
		} else {
			echo '';
		}
	?>
</div>
<div class="courseCat">
	<?php 
		$edunova_raspored_link = get_theme_mod('edunova_download_raspored', '');
		if (!empty($edunova_raspored_link)) {
			echo '<span>GOSTUJ NA PREDAVANJU&nbsp;&nbsp;|&nbsp;&nbsp;Pogledaj <a href="' . $edunova_raspored_link . '">raspored</a> predavanja za smjer koji te zanima.</span>';
		} else {
			echo '';
		}
	?>
</div>
<div class="courseContentText">
	<?php the_content(); ?>
</div><div class="clearfix"></div>
<!-- Next/Prev Post -->
	<div class="postNav">
		<div class="navigation">
			<?php echo '<div class="postNavLeft">' . edunova_next_page_link() . '</div>'; ?>
			<?php echo '<div class="postNavRight">' . edunova_prev_page_link() . '</div>'; ?>
		</div>
	</div>
<!-- END Next/Prev Post -->
<!-- Tags -->
	<div class="courseTags">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 singleTagsShare">
			<ul>
				<li>
					<div class="sTwittr">
						<a href="#" onclick="
							window.open(
							  'https://twitter.com/home?status='+encodeURIComponent(location.href), 
							  'twitter-share-dialog'); 
							return false;" class="btn btn-default">
							<span class="fa fa-twitter"></span>
						</a>
					</div>
				</li>
				<!-- End Twitter Icon -->
				<!-- Facebook Icon -->
				<li>
					<div class="sFacebook">
						<a href="#" onclick="
							window.open(
							  'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
							  'facebook-share-dialog'); 
							return false;" class="btn btn-default">
							<span class="fa fa-facebook"></span>
						</a>
					</div>
				</li>
				<!-- End Facebook Icon -->
				<!-- Google Icon -->
				<li>
					<div class="sFacebook">
						<a href="#" onclick="
							window.open(
							  'https://plus.google.com/share?url='+encodeURIComponent(location.href), 
							  'google-share-dialog'); 
							return false;" class="btn btn-default">
							<span class="fa fa-google-plus"></span>
						</a>
					</div>
				</li>
				<!-- End Google Icon -->
				<!-- Envelope Icon -->
				<li>
					<div class="sFacebook">
						<a href="mailto:?subject=Edunova -<?php WP_title(''); ?>&body=<?php the_permalink(); ?>" class="btn btn-default">
							<span class="fa fa-envelope"></span>
						</a>
					</div>
				</li>
				<!-- End Envelope Icon -->
			</ul>
		</div>
	</div>
<!-- END Tags -->