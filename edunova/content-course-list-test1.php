<li id="post-<?php the_ID(); ?>" <?php post_class('col-lg-6 col-md-6 col-sm-6 col-xs-12'); ?>>
<article>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cImage">
		<span><?php
			if (has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail');
			} else {
				echo '<img src="' . get_bloginfo('stylesheet_directory') . '/images/no-image-course-list.jpg"/>';
			}
		?></span>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cInfo">
		<div class="courseTitle"><p><?php the_title(); ?></p></div>
		<div class="courseText"><p><?php the_excerpt(); ?></p></div>
		<?php
			$edunova_upisi = get_theme_mod('edunova_top_tray_upisi', '');
			if (!empty($edunova_upisi)) {
				echo '<div class="courseSignUp"><a href="' . $edunova_upisi . '">Upiši Se</a></div>';
			} else {
				echo '';
			}
		?>
		<div class="courseEnter"><a href="<?php the_permalink(); ?>">Riješi Test</a></div>
	</div>
</article>
</li>