<?php 
/* HPD Belisce News & Info Customizer Section */
function edunova_customizr($wp_customize) {
	/* SECTIONS */
		//Top Tray Section
		$wp_customize->add_section('edunova_top_tray', array(
			'title' => __('EduNova - Gornja Traka', 'edunova'),
			'description' => __('<i style="display: inline-block; margin-bottom: 15px;">Upiši web adrese i kontakt informacije važne za zaglavlje stranice.</i>', 'edunova'),
			'priority' => '30'
		));
		//Logo Section
		$wp_customize->add_section('edunova_logo', array(
			'title' => __('EduNova - Logo', 'edunova'),
			'description' => __('<i style="display: inline-block; margin-bottom: 15px;">Učitaj Logo za prikaz u Zaglavlju.<br/>Veličina: 382x80px.</i>', 'edunova'),
			'priority' => '31'
		));
		//Download Section
		$wp_customize->add_section('edunova_download', array(
			'title' => __('EduNova - Downloads', 'edunova'),
			'description' => __('<i style="display: inline-block; margin-bottom: 15px;">Unesi web adrese za preuzimanje Rasporeda i Brošure.</i>', 'edunova'),
			'priority' => '32'
		));
		//Contact Section
		$wp_customize->add_section('edunova_contact', array(
			'title' => __('EduNova - Kontakt Info', 'edunova'),
			'description' => __('<i style="display: inline-block; margin-bottom: 15px;">Unesi kontakt Informacije.</i>', 'edunova'),
			'priority' => '33'
		));
	/* END SECTIONS */
	/* SETTINGS */
		//Settings for Top Tray
		$wp_customize->add_setting('edunova_top_tray_katedra', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_top_tray_prijevod', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_top_tray_telefon', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_top_tray_email', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_top_tray_upisi', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_top_tray_facebook', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_top_tray_twittr', array(
			'default' => ''
		));
		//Settings for Logo
		$wp_customize->add_setting('edunova_logo_set', array(
			'default' => ''
		));
		//Settings for Downloads
		$wp_customize->add_setting('edunova_download_brosura', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_download_raspored', array(
			'default' => ''
		));
		//Settings for Footer
		$wp_customize->add_setting('edunova_logo_foot', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_adresa_foot', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_rad_foot', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_tel_foot', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_mob_foot', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_email_foot', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_firma_foot', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_iban_foot', array(
			'default' => ''
		));
		$wp_customize->add_setting('edunova_oib_foot', array(
			'default' => ''
		));
	/* END SETTINGS */
	/* CONTROLS */
		//Controls for Katedra
		$wp_customize->add_control('edunova_top_tray_katedra',
			array(
				'label' => __('Web adresa Katedre Stranih Jezika:', 'edunova'),
				'section' => 'edunova_top_tray',
				'settings' => 'edunova_top_tray_katedra',
				'type' => 'text'
			));
		//Controls for Prijevod
		$wp_customize->add_control('edunova_top_tray_prijevod',
			array(
				'label' => __('Web adresa Prijevoda:', 'edunova'),
				'section' => 'edunova_top_tray',
				'settings' => 'edunova_top_tray_prijevod',
				'type' => 'text'
			));
		//Controls for Telefon
		$wp_customize->add_control('edunova_top_tray_telefon',
			array(
				'label' => __('Edunova Telefon:', 'edunova'),
				'section' => 'edunova_top_tray',
				'settings' => 'edunova_top_tray_telefon',
				'type' => 'text'
			));
		//Controls for Email
		$wp_customize->add_control('edunova_top_tray_email',
			array(
				'label' => __('Edunova Email:', 'edunova'),
				'section' => 'edunova_top_tray',
				'settings' => 'edunova_top_tray_email',
				'type' => 'text'
			));
		//Controls for Upisi
		$wp_customize->add_control('edunova_top_tray_upisi',
			array(
				'label' => __('Web adresa forme za Upise:', 'edunova'),
				'section' => 'edunova_top_tray',
				'settings' => 'edunova_top_tray_upisi',
				'type' => 'text'
			));
		//Controls for Facebook
		$wp_customize->add_control('edunova_top_tray_facebook',
			array(
				'label' => __('Web adresa Facebook stranice:', 'edunova'),
				'section' => 'edunova_top_tray',
				'settings' => 'edunova_top_tray_facebook',
				'type' => 'text'
			));
		//Controls for Twittr
		$wp_customize->add_control('edunova_top_tray_twittr',
			array(
				'label' => __('Web adresa Twittr stranice:', 'edunova'),
				'section' => 'edunova_top_tray',
				'settings' => 'edunova_top_tray_twittr',
				'type' => 'text'
			));
		//Controls for Logo
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'edunova_logo_set',
			array(
				'label' => __('Logo:', 'edunova'),
				'section' => 'edunova_logo',
				'settings' => 'edunova_logo_set'
			)));
		//Controls for Brosura
		$wp_customize->add_control ('edunova_download_brosura',
			array(
				'label' => __('Link za preuzimanje Brošure:', 'edunova'),
				'section' => 'edunova_download',
				'settings' => 'edunova_download_brosura',
				'type' => 'text'
			));
			//Controls for Raspored
		$wp_customize->add_control ('edunova_download_raspored',
			array(
				'label' => __('Link za preuzimanje Rasporeda:', 'edunova'),
				'section' => 'edunova_download',
				'settings' => 'edunova_download_raspored',
				'type' => 'text'
			));
		//Controls for Logo Footer
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'edunova_logo_foot',
			array(
				'label' => __('Logo(negative verzija):', 'edunova'),
				'section' => 'edunova_contact',
				'settings' => 'edunova_logo_foot'
			)));
		//Controls for Adresa
		$wp_customize->add_control ('edunova_adresa_foot',
			array(
				'label' => __('Adresa:', 'edunova'),
				'section' => 'edunova_contact',
				'settings' => 'edunova_adresa_foot',
				'type' => 'text'
			));
		//Controls for Radno Vrijeme
		$wp_customize->add_control ('edunova_rad_foot',
			array(
				'label' => __('Radno Vrijeme:', 'edunova'),
				'section' => 'edunova_contact',
				'settings' => 'edunova_rad_foot',
				'type' => 'text'
			));
		//Controls for Telefon
		$wp_customize->add_control ('edunova_tel_foot',
			array(
				'label' => __('Telefon:', 'edunova'),
				'section' => 'edunova_contact',
				'settings' => 'edunova_tel_foot',
				'type' => 'text'
			));
		//Controls for Mobitel
		$wp_customize->add_control ('edunova_mob_foot',
			array(
				'label' => __('Mobitel:', 'edunova'),
				'section' => 'edunova_contact',
				'settings' => 'edunova_mob_foot',
				'type' => 'text'
			));
		//Controls for Radno Vrijeme
		$wp_customize->add_control ('edunova_email_foot',
			array(
				'label' => __('Email:', 'edunova'),
				'section' => 'edunova_contact',
				'settings' => 'edunova_email_foot',
				'type' => 'text'
			));
		//Controls for Radno Vrijeme
		$wp_customize->add_control ('edunova_firma_foot',
			array(
				'label' => __('Ime Firme:', 'edunova'),
				'section' => 'edunova_contact',
				'settings' => 'edunova_firma_foot',
				'type' => 'text'
			));
		//Controls for Radno Vrijeme
		$wp_customize->add_control ('edunova_iban_foot',
			array(
				'label' => __('IBAN:', 'edunova'),
				'section' => 'edunova_contact',
				'settings' => 'edunova_iban_foot',
				'type' => 'text'
			));
		//Controls for Radno Vrijeme
		$wp_customize->add_control ('edunova_oib_foot',
			array(
				'label' => __('OIB:', 'edunova'),
				'section' => 'edunova_contact',
				'settings' => 'edunova_oib_foot',
				'type' => 'text'
			));
	/* END CONTROLS */
}
add_action('customize_register', 'edunova_customizr');