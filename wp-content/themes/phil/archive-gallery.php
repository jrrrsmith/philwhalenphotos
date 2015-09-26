<?php

/**
 * Template Name: Gallery Page
 */

get_header(); 

?>

<div class="photos-page pages">
	<div class="album-grid">
    <ul>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php
			// first, get the image ID returned by ACF
			$image_id = get_field('featured_image');
			// and the image size you want to return
			$image_size = 'thumbnail';
			// use wp_get_attachment_image_src to return an array containing the image
			// we'll pass in the $image_id in the first parameter
			// and the image size registered using add_image_size() in the second
			$image_array = wp_get_attachment_image_src($image_id, $image_size);
			// finally, extract and store the URL from $image_array
			$image_url = $image_array[0];
			?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<div class="overlay-box"><span><?php the_title(); ?></span></div>
					<img class="thumb" src="<?php echo $image_url; ?>" />
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div> <!-- END OF PHOTO GRID -->
</div> 	<!-- END OF FIRST PAGE -->

<?php get_footer(); ?>