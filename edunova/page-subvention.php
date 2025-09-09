<?php /* Template Name: Subvencije - Formular */ ?>
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
		<div id="pageContentContact">
			<!-- Contact Form -->
			<div id="signUpForm" class="container-fluid bcgWhite">
				<div class="container">
					<div class="row">
						<form method="POST" action="<?php echo get_template_directory_uri(); ?>/contact/subvention.php" accept-charset="utf-8" enctype="multipart/form-data">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 leftSide">
								<input type="text" name="eduName" placeholder="IME" required/>
								<input type="text" name="eduSurrname" placeholder="PREZIME" required/>
								<input type="phone" name="eduPhone" placeholder="TELEFON/MOB" required/>
								<input type="email" name="eduMail" placeholder="E-MAIL" required/>							
																								<input type="file" name="eduFile" id="eduFile" required/>

								<p style="font-style: italic; font-size: 12px;">*molimo dodajte svoj životopis</p>

								<p style="font-style: italic; font-size: 12px;">*dozvoljene datoteke: pdf, doc, docx, odt, fodt, png, jpeg, jpg, rtf, txt</p>

							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 rightSide">
								<div class="boot-list">
									<select class="selectpicker" name="Course" data-size="10" data-dropup-auto=false>
											<option value="izaberi">IZABERI EDUKACIJU</option>
										<optgroup label="Informatika">
											<option value="Računalni Operater">Računalni Operater</option>
											<option value="Web Dizajner">Web Dizajner</option>
											<option value="Grafički Dizajner">Grafički Dizajner</option>
											<option value="3D Print Dizajner">3D Print Dizajner</option>
											<option value="Web Programer">Web Programer</option>
											<option value="Java Programer">Java programer</option>
											<option value="Programer Mobilnih Aplikacija">Programer Mobilnih Aplikacija</option>
											<option value="CAD Dizajner">CAD Dizajner</option>
											<option value="Serviser Računala">Serviser Računala</option>
											<option value="Mrežni Administrator">Mrežni Administrator</option>
										</optgroup>
										<optgroup label="Management">
											<option value="Voditelj EU Projekta">Voditelj EU Projekta</option>
											<option value="Knjigovođa">Knjigovođa</option>
											<option value="Manager Prodaje">Manager Prodaje</option>
											<option value="Manager Marketinga">Manager Marketinga</option>
											<option value="Manager Turizma">Manager Turizma</option>
											<option value="Financijski Manager">Financijski Manager</option>
											<option value="Community Manager">Community Manager</option>
											<option value="Bankar">Bankar</option>
										</optgroup>
										<optgroup label="Strani Jezici">
											<option value="Engleski Jezik">Engleski Jezik</option>
											<option value="Business English">Business English</option>
											<option value="Legal English">Legal English</option>
											<option value="Njemački Jezik">Njemački Jezik</option>
											<option value="Talijanski Jezik">Talijanski Jezik</option>
											<option value="Francuski Jezik">Francuski Jezik</option>
											<option value="Ruski Jezik">Ruski Jezik</option>
										</optgroup>
									</select>
								</div>
								<textarea name="eduMessage" placeholder="PORUKA"></textarea>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 eduCaptcha">
									<input type="text" name="eduCaptcha" placeholder="" required/>
									<p>3+2=?</p>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 eduSend">
									 <?php GDPR::consent_checkboxes(); ?>
									<input class="btn btn-default" type="submit" name="eduSubmit" value="POŠALJI"/>
									<input class="eduEdu" type="text" name="eduCheck" placeholder=""/>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- END Contact Form -->
		</div>
	<!-- END Page Content -->
</section>
<?php get_footer(); ?>