<li id="post-<?php the_ID(); ?>" <?php post_class('col-lg-6 col-md-6 col-sm-6 col-xs-12'); ?>>
<?php $program_popust = get_post_meta(get_the_ID(), 'program-popust-meta-text', true);
$program_jezik_popust = get_post_meta(get_the_ID(),'program-popust-lang-text',true);
?>
<article>
    <?php
        if(!empty($program_popust) || !empty($program_jezik_popust)){
            if($program_popust != "" || $program_jezik_popust != "")
                echo '<i class="fa fa-tag" style="position: absolute;top: -3px;font-size: 4rem;right: 15px;color: #e67a20;z-index: 2;transform: rotate(90deg);"></i>';
        }
    ?>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cImage">
		<span><?php
			if (has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail');
			} else {
				echo '<img src="' . get_bloginfo('stylesheet_directory') . '/images/no-image-course-list.jpg"/>';
			}
		?></span>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cInfo">
		<div class="courseTitle"><p><?php the_title(); ?></p></div>
        <?php
        if(!empty($program_popust)) {
            if($program_popust != "")
                echo '<div class="" style="padding: 0 20px;"><b style="text-transform:uppercase;color:#252525;font-size:14px!important;">Promotivni popust:</b><p style="font-size:14px!important;" class="orangeText">'.$program_popust.' </p></div>';
        }
        if(!empty($program_jezik_popust)){
            if($program_jezik_popust != "")
                echo '<div class="" style="padding: 0 20px;"><b style="text-transform:uppercase;color:#252525;font-size:14px!important;">Promotivni popust:</b><p style="font-size:14px!important;" class="orangeText">'.$program_jezik_popust.' </p></div>';
        }
        ?>
		<div class="courseText"><p><?php the_excerpt('edunova_page_excerpt_length'); ?></p></div>
		<?php
			$edunova_upisi = get_theme_mod('edunova_top_tray_upisi', '');
			if (!empty($edunova_upisi)) {
				echo '<div class="courseSignUp"><a href="' . $edunova_upisi . '">Upiši Se</a></div>';
			} else {
				echo '';
			}
		?>
		<div class="courseEnter"><a href="<?php the_permalink(); ?>">Pogledaj Program</a></div>
	</div>
</article>
</li>
