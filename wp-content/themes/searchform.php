<form action="/" method="get">
	<input type="text" name="s" id="search" placeholder="color nyc etc.." value="<?php the_search_query(); ?>" />
	<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
</form>