<li id="post-<?php the_ID(); ?>" <?php post_class('postArticle'); ?>>
<article>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 postImage">
		<a href="<?php the_permalink(); ?>">
			<?php
				if (has_post_thumbnail() ) {
					the_post_thumbnail('post-list');
				} else {
					echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/no-image.jpg" />';
				}
			?>
		</a>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 postText">
		<div class="blogListHeight">
			<div class="postCat">
				<?php 
					$eduCat = get_the_category(); 
					if($eduCat[0]){
					echo '<a href="'.get_category_link($eduCat[0]->term_id).'">'.$eduCat[0]->cat_name.'</a>';
					}
				?>
			</div>
			<div class="postTitle"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
			<div class="postContent"><?php the_excerpt(); ?></div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-7 postDate"><span><?php the_time(__('d. F, Y.')); ?></span></div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-5 postLink"><a href="<?php the_permalink(); ?>">Pročitaj</a></div>
		</div>
	</div>
</article>
</li>