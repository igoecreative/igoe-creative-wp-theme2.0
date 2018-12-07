<!-- search -->
<div id="search">
	<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div>
			<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
			<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
			<!-- <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( '&#128269;', 'submit button' ); ?>" /> -->
			<button class="btn search-btn my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- /search -->
