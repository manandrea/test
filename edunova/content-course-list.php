<li id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-3 col-sm-3 col-xs-12'); ?>>
<article>
	<a href="<?php the_permalink(); ?>">
		<?php
			if (has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail');
			} else {
				echo '<img src="' . get_bloginfo('stylesheet_directory') . '/images/no-image-course-list.jpg"/>';
			}
		?>
		<div class="courseTitle"><div class="outterTitle"><div class="innerTitle"><p><?php the_title(); ?></p></div></div></div>
	</a>
</article>
</li>