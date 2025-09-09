<meta itemprop="datePublished" content="<?php the_time('Y-m-d'); ?>"/>
<meta itemprop="dateModified" content="<?php the_modified_date('Y-m-d'); ?>"/>
<!-- Featured image -->
	<div class="singleImage">
		<div class="fImage" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<?php
				if (has_post_thumbnail() ) {
					the_post_thumbnail();
				} else {
					echo '<img src="' . get_bloginfo('stylesheet_directory') . '/images/no-image-post.jpg"/>';
				}
			?>
			<meta itemprop="url" content="<?php the_post_thumbnail_url(); ?>">
			<?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail'); ?>
			<?php $image_width = $image_data[1]; ?>
			<?php $image_height = $image_data[2]; ?>
			<meta itemprop="width" content="<?php echo $image_width; ?>">
			<meta itemprop="height" content="<?php echo $image_height; ?>">
		</div>
		<?php
			$date_meta_value = get_post_meta(get_the_ID(), 'date-meta-text', true);
			$address_meta_value = get_post_meta(get_the_ID(), 'address-meta-text', true);
			if(!empty($date_meta_value) && !empty($address_meta_value)) {
				echo '<div class="singleInfo"><span><div class="singleInfoCell"><h4>' . $date_meta_value . '<br/>' . $address_meta_value . '</h4></div></span></div>';
			}
		?>
	</div>
	<!-- END Featured image -->
	<!-- Category and Share -->
	<div class="catShare">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 singleCat">
			
			<?php 
				$eduCat = get_the_category(); 
				if($eduCat[0]){
				echo '<a href="'.get_category_link($eduCat[0]->term_id).'">'.$eduCat[0]->cat_name.'</a>';
				}
			?>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 singleShare">
			<span>Objavljeno: <?php the_time(__('d. F, Y.')); ?></span>
		</div>
	</div>
	<!-- END Category and Share -->
	<!-- Single Content Text -->
	<div class="singleContentText">
		<?php the_content(); ?>
	</div>	<div class="clearfix"></div>
	<!-- END Single Content Text -->
	<!-- Next/Prev Post -->
		<div class="postNav">
			<?php next_post_link('%link', '<div class="postNavLeft"><span class="btn btn-default">&#10094 &nbsp;&nbsp;Novije objave</span></div>', FALSE, '384 and 387'); ?>
			<?php previous_post_link('%link', '<div class="postNavRight"><span class="btn btn-default">Starije objave&nbsp;&nbsp; &#10095;</span></div>', FALSE, '384 and 387'); ?>
		</div>
	<!-- END Next/Prev Post -->
	<!-- Tags -->
	<div class="singleTags">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 singleTagsShare">
			<ul>
				<li>
					<div class="sTwittr">
						<a href="#" onclick="
							window.open(
							  'https://twitter.com/home?status='+encodeURIComponent(location.href), 
							  'twitter-share-dialog'); 
							return false;" class="btn btn-default">
							<span class="fa fa-twitter"></span>
						</a>
					</div>
				</li>
				<!-- End Twitter Icon -->
				<!-- Facebook Icon -->
				<li>
					<div class="sFacebook">
						<a href="#" onclick="
							window.open(
							  'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
							  'facebook-share-dialog'); 
							return false;" class="btn btn-default">
							<span class="fa fa-facebook"></span>
						</a>
					</div>
				</li>
				<!-- End Facebook Icon -->
				<!-- Google Icon -->
				<li>
					<div class="sFacebook">
						<a href="#" onclick="
							window.open(
							  'https://plus.google.com/share?url='+encodeURIComponent(location.href), 
							  'google-share-dialog'); 
							return false;" class="btn btn-default">
							<span class="fa fa-google-plus"></span>
						</a>
					</div>
				</li>
				<!-- End Google Icon -->
				<!-- Envelope Icon -->
				<li>
					<div class="sFacebook">
						<a href="mailto:?subject=Edunova -<?php WP_title(''); ?>&body=<?php the_permalink(); ?>" class="btn btn-default">
							<span class="fa fa-envelope"></span>
						</a>
					</div>
				</li>
				<!-- End Envelope Icon -->
			</ul>
		</div>
	</div>
<!-- END Tags -->
