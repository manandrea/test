<!DOCTYPE html><!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]--><!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]--><html <?php language_attributes();?> class="no-js"><head><link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"></link><link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png"></link><meta charset="<?php bloginfo('charset'); ?>"></meta><meta http-equiv="Content-Language" content="hr"></meta><meta name="copyright" content="Copyright (c) 2015., EduNova - Ustanova za obrazovanje odraslih."></meta><meta name="viewport" content="width=device-width, initial-scale=1.0"></meta><meta name="facebook-domain-verification" content="etx5863ehsghlvfl5osdvxn3iykpch" /><title><?php bloginfo('name');?> | <?php wp_title(''); ?></title><meta name="theme-color" content="#2a6182"><!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '170055663433753');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=170055663433753&ev=PageView&noscript=1"
/></noscript>

<!-- End Facebook Pixel Code --><?php wp_head(); ?></head><body <?php body_class(); ?>><!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5BFMTS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5BFMTS');</script>
<!-- End Google Tag Manager --><header class="navHeader"><div id="topTray" class="container-fluid bcgLightBlue"><div class="container"><div class="row"><div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 whiteText alignLeft topLeft"><p><?php $edunova_katedra=get_theme_mod('edunova_top_tray_katedra', '');$edunova_prijevod=get_theme_mod('edunova_top_tray_prijevod', '');$edunova_telefon=get_theme_mod('edunova_top_tray_telefon', '');$edunova_email=get_theme_mod('edunova_top_tray_email', '');if (!empty($edunova_katedra) && empty($edunova_prijevod) && empty($edunova_telefon) && empty($edunova_email)){echo '<span class="langLink"><a href="' . get_theme_mod('edunova_top_tray_katedra', '') . '" target="_blank">Katedra Stranih Jezika</a></span>';}else if (!empty($edunova_katedra) && !empty($edunova_prijevod) && empty($edunova_telefon) && empty($edunova_email)){echo '<span class="langLink"><a href="' . get_theme_mod('edunova_top_tray_katedra', '') . '" target="_blank">Katedra Stranih Jezika</a></span> | <span class="langLink"><a href="' . get_theme_mod('edunova_top_tray_prijevod', '') . '" target="_blank">Prijevodi</a></span>';}else if (!empty($edunova_katedra) && !empty($edunova_prijevod) && !empty($edunova_telefon) && empty($edunova_email)){echo '<span class="langLink"><a href="' . get_theme_mod('edunova_top_tray_katedra', '') . '" target="_blank">Katedra Stranih Jezika</a></span> | <span class="langLink"><a href="' . get_theme_mod('edunova_top_tray_prijevod', '') . '" target="_blank">Prijevodi</a></span> | Tel.: ' . get_theme_mod('edunova_top_tray_telefon', '') . '';}else if (!empty($edunova_katedra) && !empty($edunova_prijevod) && !empty($edunova_telefon) && !empty($edunova_email)){echo '<span class="langLink"><a href="' . get_theme_mod('edunova_top_tray_katedra', '') . '" target="_blank">Katedra Stranih Jezika</a></span> | <span class="langLink"><a href="' . get_theme_mod('edunova_top_tray_prijevod', '') . '" target="_blank">Prijevodi</a></span> | Tel.: ' . get_theme_mod('edunova_top_tray_telefon', '') . ' <span class="hideIt">| E-mail: <span class="langLink"><a href="mailto:' . get_theme_mod('edunova_top_tray_email', '') . '">info@edunova.hr</a></span></span>';}else if (!empty($edunova_katedra) && empty($edunova_prijevod) && !empty($edunova_telefon) && !empty($edunova_email)){echo '<span class="langLink"><a href="' . get_theme_mod('edunova_top_tray_katedra', '') . '" target="_blank">Katedra Stranih Jezika</a></span> | Tel.: ' . get_theme_mod('edunova_top_tray_telefon', '') . ' <span class="hideIt">| E-mail: <span class="langLink"><a href="mailto:' . get_theme_mod('edunova_top_tray_email', '') . '">info@edunova.hr</a></span></span>';}else{echo '';}?></p></div><div id="ssMenu" class="col-lg-6 col-md-6 col-sm-7 col-xs-12 whiteText alignRight topRight"><ul><li><div class="sMenu"><?php get_search_form('true'); ?></div></li><?php $edunova_upisi=get_theme_mod('edunova_top_tray_upisi', '');$edunova_facebook=get_theme_mod('edunova_top_tray_facebook','');$edunova_twittr=get_theme_mod('edunova_top_tray_twittr', '');if (!empty($edunova_twittr)){echo '<li><div class="sInstagram"><a href="' . get_theme_mod('edunova_top_tray_twittr', '') . '" class="btn btn-default"><span class="fa fa-instagram"></span></a></div></li>';}else{echo '';}if (!empty($edunova_facebook)){echo '<li><div class="sFacebook"><a href="' . get_theme_mod('edunova_top_tray_facebook', '') . '" class="btn btn-default"><span class="fa fa-facebook"></span></a></div></li>';}else{echo '';}if (!empty($edunova_upisi)){echo '<li><div class="sTrans"><a href="' . get_theme_mod('edunova_top_tray_upisi', '') . '" class="btn btn-default"><span class="">UPIŠI SE</span></a></div></li>';}else{echo '';}?></ul></div></div></div></div><div class="menu-wrapper"><div id="mainMenu" class="container-fluid bcgDarkBlue" data-spy="affix" data-offset-top="38"><div class="container"><div class="row"><?php $edu_logo=get_theme_mod('edunova_logo_set', '');if (!empty($edu_logo)){echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bcgWhite logoBox" itemprop="publisher" itemscope itemtype="https://schema.org/Organization"><a href="' . esc_url(home_url()) . '" rel="home" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject"><img src="' . get_theme_mod('edunova_logo_set', '') . '" alt="Logo"/>
<meta itemprop="url" content="' . get_theme_mod('edunova_logo_set', '') . '">
<meta itemprop="width" content="500">
<meta itemprop="height" content="115">

</a><meta itemprop="name" content="Edunova">
</div>';}else{echo '';}?><div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 bcgDarkBlue navMenu"><nav class="navbar navbar-default"><div class="container-fluid"><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#edunova-navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="iconIzbornik">IZBORNIK</span></button></div><div class="collapse navbar-collapse navbar-right" id="edunova-navbar-collapse"><?php wp_nav_menu(array('theme_location'=> 'main_nav','depth'=> 2,'container'=> false,'menu_class'=> 'nav navbar-nav','fallback_cb'=> 'false',/* Custom navigation walker script */'walker'=> new wp_bootstrap_navwalker()));?></div></div></nav></div></div></div></div></div></header>
<style>
#eduSlider .carousel-inner a .btn{color:white!important;border-color:#70c115;background-color:#70c115!important;}
#wysija-subscriptions{text-align:center;}
#wysija-subscriptions .form-table{display:inline-block;}
#wysija-subscriptions .form-table tr:nth-child(4),#wysija-subscriptions .form-table tr:nth-child(7){text-align:left;}
#wysija-subscriptions .form-table tr:nth-child(4) label,#wysija-subscriptions .form-table tr:nth-child(7) label{margin-right:25px;}
#wysija-subscriptions .form-table tr:nth-child(4) input,#wysija-subscriptions .form-table tr:nth-child(7) input{width:auto;}
#wysija-subscriptions .form-table tr:nth-child(4) label input{margin-bottom:0;}
#wysija-subscriptions .form-table input{
transition: all .5s ease 0s;
font-family: bikoregular,arial,sans-serif;
font-size: 16px;
width: 100%;
margin-bottom: 25px;
padding: 15px;
outline:none;
box-shadow:none;
}
#wysija-subscriptions .form-table label {margin-bottom:25px;}
#wysija-subscriptions .button-primary {
    padding: 15px 50px;
    font-size: 16px;
    font-family: bikoregular,arial,sans-serif;
    background-color: #144f71;
    color: #fff;
    border: none;
    border-radius: 0;
    cursor: cover;
    transition: all .5s ease 0s;
    outline:none;
    box-shadow:none;
text-transform:uppercase;
}
#wysija-subscriptions .button-primary:hover{
background-color:#e67a20;
}
</style>