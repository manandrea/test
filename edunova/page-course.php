<?php /* Template Name: Program - Informatika/Management */ ?>
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
							<!-- Sidebar -->
								<div id="courseInfo" class="col-lg-4 col-md-4 col-sm-4 col-xs-12 infoPlan">
									<div class="infoMan" data-example-id="togglable-tabs" role="tabpanel">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="cPlan "><a href="#nastavniPlan" aria-controls="nastavniPlan" role="tab" data-toggle="tab">Nastavni plan</a></li>
											<li role="presentation" class="cPrice active"><a href="#price" aria-controls="price" role="tab" data-toggle="tab">Cijena</a></li>
										</ul>
										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane " id="nastavniPlan">
												<ul>
													<?php
														$program1_meta_value = get_post_meta(get_the_ID(), 'program1-meta-text', true);
														$program2_meta_value = get_post_meta(get_the_ID(), 'program2-meta-text', true);
														$program3_meta_value = get_post_meta(get_the_ID(), 'program3-meta-text', true);
														$program4_meta_value = get_post_meta(get_the_ID(), 'program4-meta-text', true);
														$program5_meta_value = get_post_meta(get_the_ID(), 'program5-meta-text', true);
														$program6_meta_value = get_post_meta(get_the_ID(), 'program6-meta-text', true);
														$program7_meta_value = get_post_meta(get_the_ID(), 'program7-meta-text', true);
														$program8_meta_value = get_post_meta(get_the_ID(), 'program8-meta-text', true);
														$program9_meta_value = get_post_meta(get_the_ID(), 'program9-meta-text', true);
														$program10_meta_value = get_post_meta(get_the_ID(), 'program10-meta-text', true);
														if(!empty($program1_meta_value)) {
															echo '<li>' . $program1_meta_value . '</li>';
														}
														if(!empty($program2_meta_value)) {
															echo '<li>' . $program2_meta_value . '</li>';
														}
														if(!empty($program3_meta_value)) {
															echo '<li>' . $program3_meta_value . '</li>';
														}
														if(!empty($program4_meta_value)) {
															echo '<li>' . $program4_meta_value . '</li>';
														}
														if(!empty($program5_meta_value)) {
															echo '<li>' . $program5_meta_value . '</li>';
														}
														if(!empty($program6_meta_value)) {
															echo '<li>' . $program6_meta_value . '</li>';
														}
														if(!empty($program7_meta_value)) {
															echo '<li>' . $program7_meta_value . '</li>';
														}
														if(!empty($program8_meta_value)) {
															echo '<li>' . $program8_meta_value . '</li>';
														}
														if(!empty($program9_meta_value)) {
															echo '<li>' . $program9_meta_value . '</li>';
														}
														if(!empty($program10_meta_value)) {
															echo '<li>' . $program10_meta_value . '</li>';
														}
													?>
												</ul>
											</div>
											<div role="tabpanel" class="tab-pane active" id="price">
												<?php
													$program_upisnina_meta_value = get_post_meta(get_the_ID(), 'program-upisnina-meta-text', true);
													$program_skolarina_meta_value = get_post_meta(get_the_ID(), 'program-skolarina-meta-text', true);
                                                    $program_popust_meta_value = get_post_meta(get_the_ID(), 'program-popust-meta-text', true);
													if((!empty($program_upisnina_meta_value)) && (!empty($program_skolarina_meta_value))) {
														echo '<p>Upisnina: <span class="orangeText font-size-20">' . $program_upisnina_meta_value . ' €</span></p><p>Školarina: <span class="orangeText font-size-20">' . $program_skolarina_meta_value . ' €</span></p>';
													}
                                                    if(!empty($program_popust_meta_value)) {
														echo '<p><b style="text-transform:uppercase;color:#252525;">Promotivni popust:</b> <span style="color:#70c115!important;" class="orangeText font-size-20">' . $program_popust_meta_value . ' €</span></p>';
													}
												?>
												<p>Cijena uključuje digitalne materijale, uvjerenje ili potvrdu o završetku, ispite i troškove dokumentacije.</p>
												<?php
													$program_od_meta_value = get_post_meta(get_the_ID(), 'program-od-meta-text', true);
													$program_do_meta_value = get_post_meta(get_the_ID(), 'program-do-meta-text', true);
													if((!empty($program_od_meta_value)) && (!empty($program_do_meta_value))) {
														echo '<p>Mogućnost plaćanja na <span class="font-size-20">' . $program_od_meta_value . '</span> do <span class="font-size-20">' . $program_do_meta_value . '</span> rata. Molimo da za uvjete plaćanja na rate kontaktirate referadu.</p>';
													}
												?>
											</div>
										</div>
									</div>
									<div class="courseTime">
										<ul>
											<li class="cTimeTitle">Trajanje Tečaja</li>
											<li class="cTime">
												<?php
													$program_sati_meta_value = get_post_meta(get_the_ID(), 'program-sati-meta-text', true);
													if(!empty($program_sati_meta_value)) {
														echo $program_sati_meta_value . ' sati';
													} else {
														echo '-';
													}
												?>
											</li>
										</ul>
									</div>
									<?php
										$edunova_upisi = get_theme_mod('edunova_top_tray_upisi', '');
										if (!empty($edunova_upisi)) {
											echo '<div class="courseButton wow animated fadeInLeft" data-wow-delay="1s">
													<a href="' . $edunova_upisi . '" class="btn btn-default">UPIŠI SE</a>
												</div>';
										} else {
											echo '';
										}
									?>
									<?php
										$mentor_meta_image = get_post_meta(get_the_ID(), 'mentor-meta-image', true);
										$mentor_meta_name = get_post_meta(get_the_ID(), 'mentor-name-meta-text', true);
										$mentor_meta_info = get_post_meta(get_the_ID(), 'mentor-meta-info', true);
										if(!empty($mentor_meta_image) && !empty($mentor_meta_name) && !empty($mentor_meta_info)) {
											echo '
												<div id="mentorBox">
													<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mentorInfo" aria-expanded="false" aria-controls="mentorInfo">
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  mentorImg">
															<div class="l-border"></div>
															<span><img src="' . $mentor_meta_image . '"/></span>
														</div>
														<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 mentorName">
															<div class="autor-cell"><span><p>' . $mentor_meta_name . '</p></span>
															<div class="mentorTitle">Predavač</div></div>
														</div>
													</button>
													<div class="collapse" id="mentorInfo">
													  <div class="well">
														' . $mentor_meta_info . '
													  </div>
													</div>
												</div>';
										}
									?>
									<?php include('plugins/profesor-list.php'); ?>
								</div>
							<!-- END Sidebar -->
							<div id="courseContent" class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<!-- Content -->
										<?php get_template_part('content', 'course'); ?>
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