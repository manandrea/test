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
						<div class="blogList">
							<!-- Page Loop -->
							<ul class="uPostList">
								<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<!-- Content -->
										<?php get_template_part('content', 'page'); ?>
									<!-- END Content -->
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
								<?php endif; ?>
							</ul>
							<!-- END Page Loop -->
						</div>
					</div>
				</div>
			</div>
			<!-- END List of Posts -->
		</div>
		<!-- END Page Content -->
	</section>
<?php get_footer();?>