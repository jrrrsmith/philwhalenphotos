<?php

/**
 * Template Name: Home Page
 */

get_header(); 

?>
<div class="photos-page pages">
	<div class="bio-img-wrap">
		<img src="<?php the_field('home_page_photo'); ?>" />
	</div>
	<div class="bio-wrap">
		<?php the_field('home_page_bio'); ?>
	</div>
</div> 	<!-- END OF FIRST PAGE -->

<?php get_footer(); ?>