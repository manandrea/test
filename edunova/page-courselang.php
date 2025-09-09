<?php /* Template Name: Program - Strani Jezici */ ?>
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
									<div class="langProgram" data-example-id="togglable-tabs" role="tabpanel">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="cPlan "><a href="#nastavniPlan" aria-controls="nastavniPlan" role="tab" data-toggle="tab">Stupnjevi</a></li>
											<li role="presentation" class="cPrice active"><a href="#price" aria-controls="price" role="tab" data-toggle="tab">Cijena</a></li>
										</ul>
										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane " id="nastavniPlan">
												<div class="langTable">
													<div class="langRow">
														<div class="langCell width-10 bcgLightGray orangeText"><b>CEF Level</b></div>
														<div class="langCell width-35 bcgLightGray blueText"><b>Related Examinations</b></div>
														<div class="langCell bcgLightGray blueText"><b>Council of Europe Document</b></div>
													</div>
													<div class="langRow">
														<div class="langCell"><b>A1</b></div>
														<div class="langCell">
															<?php
																$program_a1_re_lang = get_post_meta(get_the_ID(), 'program-a1-re-lang', true);
																if(!empty($program_a1_re_lang)) {
																	echo $program_a1_re_lang;
																} else {
																	echo '-';
																}
															?>
														</div>
														<div class="langCell">
															<?php
																$program_a1_coed_lang = get_post_meta(get_the_ID(), 'program-a1-coed-lang', true);
																if(!empty($program_a1_coed_lang)) {
																	echo $program_a1_coed_lang;
																} else {
																	echo '-';
																}
															?>
														</div>
													</div>
													<div class="langRow">
														<div class="langCell"><b>A2</b></div>
														<div class="langCell">
															<?php
																$program_a2_re_lang = get_post_meta(get_the_ID(), 'program-a2-re-lang', true);
																if(!empty($program_a2_re_lang)) {
																	echo $program_a2_re_lang;
																} else {
																	echo '-';
																}
															?>
														</div>
														<div class="langCell">
															<?php
																$program_a2_coed_lang = get_post_meta(get_the_ID(), 'program-a2-coed-lang', true);
																if(!empty($program_a2_coed_lang)) {
																	echo $program_a2_coed_lang;
																} else {
																	echo '-';
																}
															?>
														</div>
													</div>
													<div class="langRow">
														<div class="langCell"><b>B1</b></div>
														<div class="langCell">
															<?php
																$program_b1_re_lang = get_post_meta(get_the_ID(), 'program-b1-re-lang', true);
																if(!empty($program_b1_re_lang)) {
																	echo $program_b1_re_lang;
																} else {
																	echo '-';
																}
															?>
														</div>
														<div class="langCell">
															<?php
																$program_b1_coed_lang = get_post_meta(get_the_ID(), 'program-b1-coed-lang', true);
																if(!empty($program_b1_coed_lang)) {
																	echo $program_b1_coed_lang;
																} else {
																	echo '-';
																}
															?>
														</div>
													</div>
													<div class="langRow">
														<div class="langCell"><b>B2</b></div>
														<div class="langCell">
															<?php
																$program_b2_re_lang = get_post_meta(get_the_ID(), 'program-b2-re-lang', true);
																if(!empty($program_b2_re_lang)) {
																	echo $program_b2_re_lang;
																} else {
																	echo '-';
																}
															?>
														</div>
														<div class="langCell">
															<?php
																$program_b2_coed_lang = get_post_meta(get_the_ID(), 'program-b2-coed-lang', true);
																if(!empty($program_b2_coed_lang)) {
																	echo $program_b2_coed_lang;
																} else {
																	echo '-';
																}
															?>
														</div>
													</div>
													<div class="langRow">
														<div class="langCell"><b>C1</b></div>
														<div class="langCell">
															<?php
																$program_c1_re_lang = get_post_meta(get_the_ID(), 'program-c1-re-lang', true);
																if(!empty($program_c1_re_lang)) {
																	echo $program_c1_re_lang;
																} else {
																	echo '-';
																}
															?>
														</div>
														<div class="langCell">
															<?php
																$program_c1_coed_lang = get_post_meta(get_the_ID(), 'program-c1-coed-lang', true);
																if(!empty($program_c1_coed_lang)) {
																	echo $program_c1_coed_lang;
																} else {
																	echo '-';
																}
															?>
														</div>
													</div>
													<div class="langRow">
														<div class="langCell"><b>C2</b></div>
														<div class="langCell">
															<?php
																$program_c2_re_lang = get_post_meta(get_the_ID(), 'program-c2-re-lang', true);
																if(!empty($program_c2_re_lang)) {
																	echo $program_c2_re_lang;
																} else {
																	echo '-';
																}
															?>
														</div>
														<div class="langCell">
															<?php
																$program_c2_coed_lang = get_post_meta(get_the_ID(), 'program-c2-coed-lang', true);
																if(!empty($program_c2_coed_lang)) {
																	echo $program_c2_coed_lang;
																} else {
																	echo '-';
																}
															?>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane active" id="price">
												<div class="langPrice">
													<?php
														$program_skolarina_grupno = get_post_meta(get_the_ID(), 'program-skolarina-grupno-lang-text', true);
														$program_brojsati_grupno = get_post_meta(get_the_ID(), 'program-brojsati-grupno-lang-text', true);
														if((!empty($program_skolarina_grupno)) && (!empty($program_brojsati_grupno))) {
															echo '<p>Poluindividualno: <span class="orangeText font-size-20">' . $program_skolarina_grupno . ' €</span><br/>Trajanje: <span class="font-size-20">' . $program_brojsati_grupno . '</span> šk. sati</p>';
														}
													?>
													<?php
														$program_skolarina_indi = get_post_meta(get_the_ID(), 'program-skolarina-indi-lang-text', true);
														$program_brojsati_indi = get_post_meta(get_the_ID(), 'program-brojsati-indi-lang-text', true);
														if((!empty($program_skolarina_indi)) && (!empty($program_brojsati_indi))) {
															echo '<p>Individualno: <span class="orangeText font-size-20">' . $program_skolarina_indi . ' €</span><br/>Trajanje: <span class="font-size-20">' . $program_brojsati_indi . '</span> šk. sati</p>';
														}
													?>
													<?php
														$program_upisnina_lang = get_post_meta(get_the_ID(), 'program-upisnina-lang-text', true);
                                                        $program_popust_lang = get_post_meta(get_the_ID(), 'program-popust-lang-text', true);
														if(!empty($program_upisnina_lang)) {
															echo '<p>Upisnina: <span class="orangeText font-size-20">' . $program_upisnina_lang . ' €</span></p>';
														} else {
															echo '';
														}
                                                        if(!empty($program_popust_lang)) {
															echo '<p><b style="text-transform:uppercase;color:#252525;">Promotivni popust:</b> <span style="color:#70c115!important;" class="orangeText font-size-20">' . $program_popust_lang . ' €</span></p>';
														} else {
															echo '';
														}
													?>
													<p>Cijena uključuje:</p>
													<ul>
														<li>testiranje za određivanje stupnja</li>
														<li>konzultacije za vrijeme nastave</li>
														<li>stručno praćenje napretka polaznika</li>
														<li>komplet materijala za nastavu</li>
														<li>završni ispit i diplomu</li>
                                                        <li>troškove obrade dokumentacije</li>
													</ul>
													<?php
														$program_placanje_od_lang = get_post_meta(get_the_ID(), 'program-placanje-od-lang-text', true);
														$program_placanje_do_lang = get_post_meta(get_the_ID(), 'program-placanje-do-lang-text', true);
														$program_cijena_mjeseci_lang = get_post_meta(get_the_ID(), 'program-uplate-mjeseci-lang-text', true);
														if((!empty($program_placanje_od_lang)) && (!empty($program_placanje_do_lang)) || (!empty($program_cijena_mjeseci_lang))) {
															echo '<p>Mogućnost plaćanja na <span class="font-size-20">' . $program_placanje_od_lang . '</span> do <span class="font-size-20">' . $program_placanje_do_lang . '</span> rate.<br/>(<span class="font-size-20">' . $program_cijena_mjeseci_lang . ' kartice/gotovina</span>)';
														}
													?>
													<?php
														$program_popust_lang = get_post_meta(get_the_ID(), 'popust-lang-text', true);
														if(!empty($program_popust_lang)) {
															echo '<p>' . $program_popust_lang . '</p>';
														}
													?>
												</div>
											</div>
										</div>
									</div>
									<div class="courseTime">
										<ul>
											<li class="cTimeTitle">Trajanje Tečaja</li>
											<li class="cTime">
												<?php
													$program_sati_lang = get_post_meta(get_the_ID(), 'program-sati-meta-lang', true);
													if(!empty($program_sati_lang)) {
														echo $program_sati_lang . " SATI";
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
									?>																			<?php include('plugins/profesor-list.php'); ?>									
								</div>
							<!-- END Sidebar -->
							<div id="courseContent" class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<!-- Content -->
										<?php get_template_part('content', 'lang'); ?>
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