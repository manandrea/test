<?php /* Template Name: Seminari */ ?>
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
			<div id="courseList" class="container-fluid bcgWhite">
				<div class="container">
					<div class="row">
						<!-- Content Loop -->
							<!-- Special Custom Loop with Pagination -->
								<?php
									$content_args = array(
											'category_name' => 'seminar',
											'posts_per_page' => -1,
											'nopaging' => true,
											'post__not_in' => get_option('sticky_posts')
									);
									$content_query = new WP_Query($content_args); 
									?>
								<?php if ($content_query->have_posts()) : ?>
									<ul>
										<?php while ($content_query->have_posts()) : $content_query->the_post(); ?>
											<!-- Content -->
												<?php get_template_part('content', 'seminar-list'); ?>
											<!-- END Content -->
										<?php endwhile; ?>
									</ul>
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
						<!-- END Content Loop -->
					</div>
				</div>
			</div>
			<!-- END List of Posts -->
		</div>
		<!-- END Page Content -->
	</section>
<?php get_footer();?>