<li id="post-<?php the_ID(); ?>" <?php post_class('postArticle'); ?> itemscope itemtype="http://schema.org/Article">
<meta itemprop="datePublished" content="<?php the_time('Y-m-d'); ?>"/>
<meta itemprop="dateModified" content="<?php the_modified_date('Y-m-d'); ?>"/>
<article>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 postImage">
		<a href="<?php the_permalink(); ?>" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<?php
				if (has_post_thumbnail() ) {
					the_post_thumbnail('post-list');
				} else {
					echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/no-image.jpg" />';
				}
			?>
			<meta itemprop="url" content="<?php the_post_thumbnail_url(); ?>">
			<?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail'); ?>
			<?php $image_width = $image_data[1]; ?>
			<?php $image_height = $image_data[2]; ?>
			<meta itemprop="width" content="<?php echo $image_width; ?>">
			<meta itemprop="height" content="<?php echo $image_height; ?>">
		</a>
	</div>
<span hidden itemprop="author" itemscope itemtype="https://schema.org/Organization "><span itemprop="name">Edunova</span></span>
<div hidden itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
      <img src="https://www.edunova.hr/wp-content/uploads/2015/08/logo.png"/>
      <meta itemprop="url" content="https://www.edunova.hr/wp-content/uploads/2015/08/logo.png">
      <meta itemprop="width" content="500">
      <meta itemprop="height" content="105">
    </div>
    <meta itemprop="name" content="Google">
</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 postText">
		<div class="blogListHeight">
			<div class="postCat">
				<?php 
					$eduCat = get_the_category(); 
					if($eduCat[0]){
					echo '<a href="'.get_category_link($eduCat[0]->term_id).'">'.$eduCat[0]->cat_name.'</a>';
					}
				?>
			</div>
			<div class="postTitle" data-wow-delay="1.5s"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" itemprop="headline"><?php the_title(); ?></a></div>
			<div class="postContent" data-wow-delay="2s" itemprop="description"><?php the_excerpt(); ?></div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-7 postDate" data-wow-delay="2.5s"><span><?php the_time(__('d. F, Y.')); ?></span></div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-5 postLink" data-wow-delay="3s"><a href="<?php the_permalink(); ?>">Pročitaj</a></div>
		</div>
	</div>
</article>
</li>