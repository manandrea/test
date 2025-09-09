<?php /* Template Name: Subvencije */ ?>
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
<!-- About Us Content -->
	<!-- Images -->
	<div id="bigImageSubs" class="container-fluid bcgLightGray">
		<div class="container">
			<div class="row">
				<?php 
					$subs_text1_meta = get_post_meta(get_the_ID(), 'subs-title1-text', true);
					$subs_content1_meta = wpautop(get_post_meta(get_the_ID(), 'subs-content1-text', true));
					$subs_image1_meta = get_post_meta(get_the_ID(), 'subs-url1-text', true);										$subs_link1_meta = get_post_meta(get_the_ID(), 'subs-link1-text', true);
					if((!empty($subs_text1_meta)) && (!empty($subs_content1_meta)) && (!empty($subs_image1_meta))) {
						echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 coverBigImage">
								<img src="' . $subs_image1_meta . '"/>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 coverBigText">
								<div class="coverCellText">
									<div class="coverInnerWrapper">
										<h1>' . $subs_text1_meta . '</h1>
										<span>
										' . $subs_content1_meta . '
										</span>
										<a class="" data-wow-delay="0.5s" href="' . $subs_link1_meta . '"><button type="button" class="btn btn-default" aria-expanded="false">PRIJAVI SE</button></a>
									</div>
								</div>
							</div>';
					} else {						echo '';					}
				?>
			</div>
		</div>
	</div>
	<div class="sub-div"></div>
	<!-- END Images -->
	<div id="pageSubs">
		<div id="singleDetails" class="container-fluid">
			<div class="container">
				<div class="row">
					<!-- About Info -->
						<div id="singleContent" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<!-- Page Loop -->
								<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<!-- Content -->
										<div class="singleContentText">
											<?php the_content(); ?>
										</div>
									<!-- END Content -->
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
								<?php endif; ?>
							<!-- END Page Loop -->
						</div>
					<!-- END About Info -->
				</div>
			</div>
		</div>
	</div>	<?php 		$subs_link1_meta = get_post_meta(get_the_ID(), 'subs-link1-text', true); $subs_broj1_meta = get_post_meta(get_the_ID(), 'subs-broj1', true);		if(!empty($subs_link1_meta) && !empty($subs_broj1_meta)) {			echo '<div id="signUpSubs" class="container-fluid bcgLightBlue">					<div class="container">						<div class="row">							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">								<p>Prijavi se na natječaj i osvoji jednu od ' . $subs_broj1_meta . ' subvencija za obrazovni program po tvom izboru!</p>							</div>							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">															<a href="' . $subs_link1_meta . '">Prijavi Se</a>							</div>						</div>					</div>				</div>';		} else {			echo '';		}	?>
<!-- END About Us Content -->
</section>
<?php get_footer();?>