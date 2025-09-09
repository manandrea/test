<?php
/**
 * Template for Desplaying Page Content
 **/
?>
<li id="post-<?php the_ID(); ?>" <?php post_class('postArticle'); ?>>
<article>
	<!-- Single Content -->
		<div id="pageDetails" class="col-lg-12 col-md-12 col-sm-12 col-lg-xs">
			<div class="pageContentText">
				<?php the_content(); ?>
			</div>
			<!-- END Single Content Text -->
		</div>
	<!-- END Single Content -->
</article>
</li>