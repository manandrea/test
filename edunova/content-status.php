<li id="post-<?php the_ID(); ?>" <?php post_class('postArticle'); ?>>
<article>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blogText">
		<div class="statusList">
			<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
				<span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
				<div class="statusTitle wow animated bounceInRight"><span><?php the_title(); ?></span></div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
				<div class="statusLink wow animated flipInY"><span><a href="<?php the_permalink(); ?>">Pročitaj</a></span></div>
			</div>
		
			
		</div>
	</div>
</article>
</li>