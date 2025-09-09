<footer><div id="eduDownloads" class="container-fluid bcgLightGray"><div class="container"><div class="row"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php $edunova_brosura_link=get_theme_mod ('edunova_download_brosura', '');if (!empty($edunova_brosura_link)){echo '<a href="' . get_theme_mod ('edunova_download_brosura', '') . '" class="downDownloads" target="_blank"><div class="iconBroDownloads"></div><div class="titleDownloads"><p class="dTitle">EDUNOVA - <span class="greenText">BROŠURA</span></p><p class="dSubtitle">Preuzmi brošuru škole.</p></div></a>';}else{echo '';}?></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php $edunova_raspored_link=get_theme_mod('edunova_download_raspored', '');if (!empty($edunova_raspored_link)){echo '<a href="' . get_theme_mod('edunova_download_raspored', '') . '" class="downDownloads" target="_blank"><div class="iconRasDownloads"></div><div class="titleDownloads"><p class="dTitle">EDUNOVA - <span class="greenText">RASPORED SATI</span></p><p class="dSubtitle">Preuzmi raspored predavanja.</p></div></a>';}else{echo '';}?></div></div></div></div><div id="eduLogos" class="container-fluid bcgDarkGray"><div class="container"><div class="row"><ul class="logoList"><li class="col-lg-2 col-md-2 col-sm-2 col-xs-4"><a href="http://home.pearsonvue.com/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/logo1.png" alt="Logo1"/></a></li><li class="col-lg-2 col-md-2 col-sm-2 col-xs-4"><a href="https://www.prometric.com/en-us/Pages/home.aspx" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/logo2.png" alt="Logo2"/></a></li><li class="col-lg-2 col-md-2 col-sm-2 col-xs-4"><a href="https://mspartner.microsoft.com/en/us/Pages/Locale.aspx" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/logo3.png" alt="Logo3"/></a></li><li class="col-lg-2 col-md-2 col-sm-2 col-xs-4"><a href="http://www.eselondon.ac.uk/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/logo4.png" alt="Logo4"/></a></li><li class="col-lg-2 col-md-2 col-sm-2 col-xs-4"><a href="http://www.college.hr/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/logo5.png" alt="Logo5"/></a></li><li class="col-lg-2 col-md-2 col-sm-2 col-xs-4"><a href="http://softwarecity.hr/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/logo6.png" alt="Logo6"/></a></li></ul></div></div></div><div id="mainFooter" class="container-fluid bcgBlack"><div class="container"><div class="row" itemscope itemtype="http://schema.org/LocalBusiness"><div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footerInfo"><?php $edunova_logo_foot=get_theme_mod ('edunova_logo_foot', '');if (!empty($edunova_logo_foot)){echo '<div class="footerLogo"><a href="#"><img src="' . get_theme_mod ('edunova_logo_foot', '') . '" alt="Logo"/></a></div>';}?>
<?php $edunova_adresa_foot=get_theme_mod('edunova_adresa_foot', '');if (!empty($edunova_adresa_foot)){echo '<div class="footerTitle"><p>Adresa:</p></div><div class="footerSubTitle"><p itemprop="address">' . get_theme_mod('edunova_adresa_foot', '') . '</p></div>';}?><?php $edunova_rad_foot=get_theme_mod('edunova_rad_foot', '');if (!empty($edunova_rad_foot)){echo '<div class="footerTitle"><p>Radno Vrijeme Referade:</p></div><div class="footerSubTitle"><p itemprop="openingHours" content="Mo,Tu,We,Th,Fr 10:00-17:00">' . get_theme_mod('edunova_rad_foot', '') . '</p></div>';}?><div class="footerSocial"><ul><?php $edunova_facebook=get_theme_mod('edunova_top_tray_facebook', '');$edunova_twittr=get_theme_mod('edunova_top_tray_twittr', '');if (!empty($edunova_facebook)){echo '<li><a href="' . $edunova_facebook . '" target="_blank"><img src="' . get_bloginfo('template_directory') . '/images/faceIcon.png" alt="Facebook"/></a></li>';}else{echo '';}if (!empty($edunova_facebook)){echo '<li><a href="' . $edunova_twittr . '" target="_blank"><img src="' . get_bloginfo('template_directory') . '/images/twitrIcon.png" alt="Tweetr"/></a></li>';}else{echo '';}?><li><a href="https://hr.jooble.org/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/rssIcon.png" alt="RSS"/></a></li></ul></div></div><div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 emptyCol">.</div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footerTweets"><div class="tweetsTitle"><p>PRATITE NAS</p></div><div class="tweetPost">
<p style="color:white;font-family: arial,sans-serif;font-size: 16px;">Primajte obavjesti o seminarima, edukacijama i subvencijama.</p>
<style>
.widget_wysija label{
	font-family: bikoregular,arial,sans-serif;
    	font-size: 16px;
	color:white;
	font-weight:400;
}

.widget_wysija input{
	transition: all .5s ease 0s;
    	font-family: bikoregular,arial,sans-serif;
    	font-size: 16px;
    	width: 100%;
    	margin-bottom: 0px;
    	padding: 10px;
	outline:none!important;
	box-shadow:none!important;
	border:none!important;
}
.wysija-submit{
	width:50%!important;
	background-color:#144f71!important;
	color:white!important;
	text-transform:uppercase;
	display:inline-block!important;
}
.wysija-submit:hover{
	background-color:#e67a20!important;
}
@media (max-width: 767px){
#mainFooter .footerTweets {
    margin-bottom: 15px!important;
    padding: 0 15%!important;
	text-align:center;
}}
@media (max-width: 991px) and (min-width: 768px) {
.tweetPost p, .wysija-submit, .widget_wysija label {
    font-size: 12px!important;
}
.wysija-submit{
	width:100%!important;
}}
@media (max-width: 1199px) and (min-width: 992px) {
.tweetPost p, .wysija-submit, .widget_wysija label {
    font-size: 14px!important;
}}
.widget_wysija_cont .updated, .widget_wysija_cont .login .message {
    background-color: #e67a20!important;
    border-color: #e67a20!important;
	color:white!important;
}
</style>

<!--<ul><li><a href="#"><div class="tweetIcon"><img src="<?php echo get_bloginfo('template_directory');?>/images/tIcon.png" alt="Tweets"/></div><p>@robigroza @mornarka <br/>neki poznat lik</p></a></li><li><a href="#"><div class="tweetIcon"><img src="<?php echo get_bloginfo('template_directory');?>/images/tIcon.png" alt="Tweets"/></div><p>Mostar postaje „software grad“ na SIT-u <br/>http://t.co/0l54wUk3L4 via @bugonline</p></a></li></ul>--></div></div><div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 emptyCol">.</div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><div class=" footerContact"><?php $edunova_telefon_foot=get_theme_mod('edunova_tel_foot', '');$edunova_mobitel_foot=get_theme_mod('edunova_mob_foot', '');if (!empty($edunova_telefon_foot) && !empty($edunova_mobitel_foot)){echo '<div class="contactTitle"><p>KONTAKT INFO</p></div><div class="footerTitle"><p>Telefon | Mobitel:</p></div><div class="footerSubTitle"><p itemprop="telephone">' . get_theme_mod('edunova_tel_foot', '') . ' | ' . get_theme_mod('edunova_mob_foot', '') . '</p></div>';}else{echo '';}?><?php $edunova_email_foot=get_theme_mod('edunova_email_foot', '');if (!empty($edunova_email_foot)){echo '<div class="footerTitle"><p>E-mail:</p></div><div class="footerSubTitle"><p itemprop="email">' . get_theme_mod('edunova_email_foot', '') . '</p></div>';}else{echo '';}?><?php $edunova_iban_foot=get_theme_mod('edunova_iban_foot', '');if (!empty($edunova_iban_foot)){echo '<div class="footerTitle"><p>IBAN</p></div><div class="footerSubTitle"><p>' . get_theme_mod('edunova_iban_foot', '') . '</p></div>';}else{echo '';}?></div></div></div></div></div><div id="footerCopyright" class="container-fluid bcgDarkBlue"><div class="container"><div class="row"><div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 footerInfo"><?php $edunova_oib_foot=get_theme_mod('edunova_oib_foot', '');$edunova_iban_foot=get_theme_mod('edunova_iban_foot', '');if (!empty($edunova_oib_foot) && !empty($edunova_iban_foot)){echo '<div class="footerTitle"><p itemprop="author" itemscope itemtype="https://schema.org/Person"><span class="orangeText" itemprop="name">EDUNOVA</span> - Ustanova za obrazovanje odraslih</p></div><div class="footerSubTitle"><p><span class="orangeText">OIB:</span>' . get_theme_mod('edunova_oib_foot', '') . ' | <span class="orangeText">IBAN: </span>' . get_theme_mod('edunova_iban_foot', '') . '</p></div>';}else{echo '';}?></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footerReturn"><div class="footerTitle"><p><a href="#"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a></p></div></div></div></div></div></footer><script src="<?php echo get_bloginfo('template_directory');?>/js/wow.js"></script><script>new WOW().init();</script><?php wp_footer(); ?></body></html>