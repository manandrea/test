<form action="<?php echo home_url();?>" method="get" id="search-form" role="search">
	<div class="searchWrap">
		<div class="collapse width" id="searchButton">
		  <div class="searchWell">
				<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Pretraži Web"/>
		  </div>
		</div>
	</div>
	<div type="submit" class="btn btn-primary" data-toggle="collapse" href="#searchButton" aria-expanded="false" aria-controls="searchButton">
		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	</div>
</form>