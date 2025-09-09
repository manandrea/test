<?php get_header();?>
	<section>
		<!-- Page Title -->
		<div id="pageTitle" class="container-fluid bcgDarkBlue">
			<div class="container">
				<div class="row">
					<div class="animated fadeInRight"><h1><?php wp_title(''); ?></h1></div>
				</div>
			</div>
		</div>
		<!-- END Page Title -->
		<!-- Page Content -->
		<div id="pageContent">
			<!-- List of Posts -->
			<div id="blogList" class="container-fluid bcgWhite">
				<div class="container">
					<div class="row">
						<!-- Content Loop -->
						<div class="blogList">
							<!-- Sticky Loop - Check For Sticky Posts and Show Only One -->
								<?php
									$sticky = get_option('sticky_posts');
									$sticky_args = array(
										'posts_per_page' => 1,
										'post__in'  => $sticky,
										'ignore_sticky_posts' => 1
									);
									$sticky_query = new WP_Query($sticky_args);
								?>
								<?php if ( isset($sticky[0]) ) { ?>
										<?php while ($sticky_query->have_posts()) : $sticky_query->the_post(); ?>
											<?php get_template_part('content', get_post_format()); ?>
										<?php endwhile; ?>
										<?php wp_reset_postdata(); ?>
								<?php } ?>
								<?php wp_reset_postdata(); ?>
							<!-- END Sticky Loop - Check For Sticky Posts and Show Only One -->
							<!-- Special Custom Loop with Pagination -->
								<?php
									$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
									$content_args = array(
											'post_type' => 'post',
											'paged' => $paged,
											'post__not_in' => get_option('sticky_posts')
									);
									$content_query = new WP_Query($content_args); 
									?>
								<?php if ($content_query->have_posts()) : ?>
									<ul class="uPostList">
										<?php while ($content_query->have_posts()) : $content_query->the_post(); ?>
											<!-- Content -->
												<?php get_template_part('content', get_post_format()); ?>
											<!-- END Content -->
										<?php endwhile; ?>
									</ul>
										<!-- Page Navigation -->
											<div class="blogNav">
												<?php
													$big = 999999999;
													echo paginate_links(array(
														'base' => str_replace($big, '%#%', esc_url(get_pagenum_link( $big ))),
														'format' => '?paged=%#%',
														'current' => max(1, get_query_var('paged')),
														'total' => $content_query->max_num_pages,
														'type' => 'list',
														'prev_text' => '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
														'next_text' => '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
													));
												?>
											</div>
										<!-- END Page Navigation -->
									<?php wp_reset_postdata(); ?>
								<?php else : ?>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="noPosts">
											<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
											<p><?php _e('Ne postoji niti jedna objava iz tražene kategorije.'); ?></p>
										</div>
									</div>
								<?php endif; ?>
							<!-- END Special Custom Loop with Pagination -->
						</div>
						<!-- END Content Loop -->
					</div>
				</div>
			</div>
			<!-- END List of Posts -->
		</div>
		<!-- END Page Content -->
	</section>
<?php get_footer();?>