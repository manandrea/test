<?php /* Template Name: Program - Testiranje */ ?>
<?php get_header();?>
	<section>
		<!-- Page Title -->
		<div id="pageTitle" class="container-fluid bcgDarkBlue">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animated fadeInRight"><h1><?php wp_title(''); ?></h1></div>
				</div>
			</div>
		</div>
		<!-- END Page Title -->
		<!-- Page Content -->
		<div id="pageContent">
			<!-- Course Details -->
				<div id="courseDetails" class="container-fluid bcgWhite">
					<div class="container">
						<div class="row">
							<div id="courseContent" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<!-- Content -->
										<?php get_template_part('content', 'tests'); ?>
									<!-- END Content -->
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
								<?php else : ?>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="noPosts">
											<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
											<p><?php _e('Ne postoji niti jedna objava iz tražene kategorije.'); ?></p>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			<!-- END Course Details -->
		</div>
		<!-- END Page Content -->
	</section>
<?php get_footer();?>