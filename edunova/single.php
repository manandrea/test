<?php get_header();?>
	<section>
		<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
		<!-- Page Title -->
		<div id="pageTitle" class="container-fluid bcgDarkBlue">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow animated fadeInRight" data-wow-delay="0.5s"><h1 itemprop="headline"><?php wp_title(''); ?></h1></div>
				</div>
			</div>
		</div>
		<!-- END Page Title -->
		<!-- Page Content -->
		<div id="pageContent">
			<!-- Single Content -->
				<div id="singleDetails" class="container-fluid bcgWhite">
					<div class="container">
						<div class="row">
							<div id="singleContent" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 infoPlan">
								<?php while (have_posts()) : the_post(); ?>
									<!-- Content -->
										<?php get_template_part('content', 'news'); ?>
									<!-- END Content -->
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							</div>
							<!-- Sidebar -->
								<div id="sidebarContent" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="serviceAddon">
										<h2>EDUNOVA PROGRAMI</h2>
										<ul>
											<li><a href="http://www.edunova.hr/informatika/">Informatika</a></li>
											<li><a href="http://www.edunova.hr/management/">Management</a></li>
											<li><a href="http://www.edunova.hr/strani-jezici/">Jezici</a></li>
											<li><a href="http://www.edunova.hr/seminari/">Seminari</a></li>
										</ul>
									</div>
									<div class="signUp">
										<?php
											$edunova_upisi = get_theme_mod('edunova_top_tray_upisi', '');
											if (!empty($edunova_upisi)) {
												echo '<div class="courseButton">
											<a href="' . $edunova_upisi . '" class="btn btn-default">UPIŠI SE</a>
										</div>';
											} else {
												echo '';
											}
										?>
									</div>
									<div class="edunova-events">
										<?php echo do_shortcode('[add_eventon_dv]'); ?>
									</div>
									<div class="latestPosts">
										<div data-example-id="togglable-tabs" role="tabpanel">
											<!-- Nav tabs -->
											<ul class="nav nav-tabs" role="tablist">
												<li class="sidebarNews active"><a href="#news" data-toggle="tab">Novosti</a></li>
												<li class="sidebarArchive"><a href="#archive" data-toggle="tab">Arhiva</a></li>
											</ul>
											<!-- Tab panes -->
											<div class="tab-content">
												<div class="tab-pane active" id="news">
													<!-- Special Custom Loop with Pagination -->
														<?php
															$content_args = array(
																	'category_name' => 'seminar, obavijest, raspored, novosti',
																	'posts_per_page' => '5'
															);
															$content_query = new WP_Query($content_args); 
															?>
															<?php if ($content_query->have_posts()) : ?>
														<ul>
															<?php while ($content_query->have_posts()) : $content_query->the_post(); ?>
																<!-- Content -->
																	<li>
																		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
																			<span><?php the_title(); ?></span>
																			<p><?php the_time(__('d. F, Y.')); ?></p>
																		</a>
																	</li>
																<!-- END Content -->
															<?php endwhile; ?>
														</ul>
														<?php wp_reset_postdata(); ?>
														<?php else : ?>
															<?php echo ""; ?>
														<?php endif; ?>
													<!-- END Special Custom Loop with Pagination -->
												</div>
												<div class="tab-pane" id="archive">
													<ul>
														<?php wp_get_archives(array(
															'type'            => 'monthly',
															'limit'           => '12',
															'format'          => 'html', 
															'before'          => '<span>',
															'after'           => '</span>',
															'show_post_count' => false,
															'echo'            => 1,
															'order'           => 'DESC'
														)); ?> 
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							<!-- END Sidebar -->
						</div>
					</div>
				</div>
			<!-- END Single Content -->
		</div>
		<!-- END Page Content -->
	</section>
<?php get_footer();?>