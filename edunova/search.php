<?php get_header();?>
	<section>
		<!-- Page Title -->
		<div id="pageTitle" class="container-fluid bcgDarkBlue">
			<div class="container">
				<div class="row">
					<div class="wow animated fadeInRight" data-wow-delay="0.5s"><h1><?php printf( __('Rezultat pretrage za: %s', 'edunova'), get_search_query() ); ?></h1></div>
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
								<?php
									$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
									global $query_string;

									$query_args = explode("&", $query_string);
									$search_query = array();

									foreach($query_args as $key => $string) {
										$query_split = explode("=", $string);
										$search_query[$query_split[0]] = urldecode($query_split[1]);
									} // foreach

									$search = new WP_Query($search_query);
								?>
								<?php if ($search->have_posts()) : ?>
									<ul class="uPostList">
										<?php while ($search->have_posts()) : $search->the_post(); ?>
											<!-- Content -->
												<?php get_template_part('content', get_post_format()); ?>
											<!-- END Content -->
										<?php endwhile; ?>
									</ul>
										<!-- Page Navigation -->
											<div class="blogNav wow animated flipInY">
												<?php
													$big = 999999999;
													echo paginate_links(array(
														'base' => str_replace($big, '%#%', esc_url(get_pagenum_link( $big ))),
														'format' => '?paged=%#%',
														'current' => max(1, get_query_var('paged')),
														'total' => $search->max_num_pages,
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