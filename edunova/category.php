<?php get_header();?>
	<section>
		<!-- Page Title -->
		<div id="pageTitle" class="container-fluid bcgDarkBlue">
			<div class="container">
				<div class="row">
					<div class="wow animated tada"><h1><?php wp_title(''); ?></h1></div>
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
							<!-- Special Custom Loop with Pagination -->
								<?php if (have_posts()) : ?>
									<ul class="uPostList">
										<?php while (have_posts()) : the_post(); ?>
											<!-- Content -->
												<?php get_template_part('content', get_post_format()); ?>
											<!-- END Content -->
										<?php endwhile; ?>
									</ul>
										<!-- Page Navigation -->
											<div class="blogNav wow animated flipInY">
												<?php
													global $wp_query;
													$big = 999999999;
													echo paginate_links(array(
														'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big) )),
														'format' => '?paged=%#%',
														'current' => max(1, get_query_var('paged')),
														'total' => $wp_query->max_num_pages,
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