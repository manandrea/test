<?php /* Template Name: O Nama */ ?>
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
	<style>#bigImage .coverBigText .coverCellText .coverInnerWrapper span p {text-align:left!important;}</style>
	<div id="bigImage" class="container-fluid">
		<div class="container">
			<div class="row">
				<?php 
					$about_text1_meta = get_post_meta(get_the_ID(), 'about-title1-text', true);
					$about_content1_meta = wpautop(get_post_meta(get_the_ID(), 'about-content1-text', true));
					$about_image1_meta = get_post_meta(get_the_ID(), 'about-url1-text', true);										$about_link1_meta = get_post_meta(get_the_ID(), 'about-link1-text', true);
					if((!empty($about_text1_meta)) && (!empty($about_content1_meta)) && (!empty($about_image1_meta))) {
						echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 coverBigText">
								<div class="coverCellText">
									<div class="coverInnerWrapper">
										<h1>' . $about_text1_meta . '</h1>
										<span>
										' . $about_content1_meta . '
										</span>
										<a class="wow animated bounceInLeft" data-wow-delay="0.5s" href="' . $about_link1_meta . '"><button type="button" class="btn btn-default" aria-expanded="false">UPIŠI SE</button></a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 coverBigImage">
								<img src="' . $about_image1_meta . '"/>
							</div>';
					}
				?>
			</div>
		</div>
	</div>
	<!-- END Images -->
	<!-- About Stats -->
	<div id="counterInfo" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php 
						$about_num1_meta = get_post_meta(get_the_ID(), 'about-edu1-text', true);
						$about_num2_meta = get_post_meta(get_the_ID(), 'about-edu2-text', true);
						$about_num3_meta = get_post_meta(get_the_ID(), 'about-edu3-text', true);
						if((!empty($about_num1_meta)) && (!empty($about_num2_meta)) && (!empty($about_num3_meta))) {
							echo '<div class="statsInfo">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 statContent">
										<p class="numscroller" data-slno=\'1\' data-min=\'0\' data-max=' . $about_num1_meta . ' data-delay=\'10\' data-increment="23">0</p>
										<h2>ŠKOLOVANIH POLAZNIKA</h2>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 statContent">
										<p class="numscroller" data-slno=\'1\' data-min=\'0\' data-max=' . $about_num2_meta . ' data-delay=\'1.5\' data-increment="1">16</p>
										<h2>GENERACIJA POLAZNIKA</h2>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 statContent">
										<p class="numscroller" data-slno=\'1\' data-min=\'0\' data-max=' . $about_num3_meta . ' data-delay=\'1.5\' data-increment="1">24</p>
										<h2>AKTUALNA SMJERA</h2>
									</div>
								</div>';
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- END About Stats -->
	<div id="pageContentAbout">
		<div id="aboutPage" class="container-fluid bcgLightBlue">
			<div class="container">
				<div class="row">
					<!-- About Info -->
						<div class="aboutWrapper">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<span class="aboutImageOne"><img src="<?php echo get_bloginfo('template_directory');?>/images/aboutNova.png" alt="O Nama"/></span>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class=" aboutContent">
									<span class="spanAboutContent">
										<!-- Page Loop -->
											<?php if (have_posts()) : ?>
											<?php while (have_posts()) : the_post(); ?>
												<!-- Content -->
													<?php the_content(); ?>
												<!-- END Content -->
											<?php endwhile; ?>
											<?php wp_reset_postdata(); ?>
											<?php endif; ?>
										<!-- END Page Loop -->
									</span>
								</div>
							</div>
						</div>
					<!-- END About Info -->
				</div>
			</div>
		</div>
	</div>
	<div style="margin:0;padding:0;">
		<div style="margin-bottom:0;" class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p style="padding-top:50px;padding-bottom:50px;text-align:center;margin:0;">
							<span style="font-weight:bold;font-family:arial;text-transform:uppercase;font-size:24px;">Edunova - Ustanova za obrazovanje odraslih</span><br/><br/>
							<span style="font-family:arial;font-size:18px;">Sjedište: Osijek, Lorenza Jagera 5</span><br/>
							<span style="font-family:arial;font-size:18px;">Sud: Trgovački sud u Osijeku, Tt-06/1476-5</span><br/>
							<span style="font-family:arial;font-size:18px;">MBS: 030089107 OIB: 92513197513</span><br/>
							<span style="font-family:arial;font-size:18px;">Osobe ovlaštene za zastupanje:  Eduard Kuzma</span><br/>
							<span style="font-family:arial;font-size:18px;">Temeljni kapital: 20.000,00 kn uplaćen u cijelosti</span><br/>
							<span style="font-family:arial;font-size:18px;">Banka: Raiffeisenbank Austria d.d. (RBA) Sjedište: Zagreb, Petrinjska 59</span><br/>
							<span style="font-family:arial;font-size:18px;">Broj računa: IBAN: HR2324840081103858771 SWIFT: RZBHHR2X</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- END About Us Content -->
</section>
<?php get_footer();?>