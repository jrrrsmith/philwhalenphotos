<?php get_header();?>
<div class="search-wrap">
<?php while(have_posts()) : the_post(); ?>
	<div class="index-body">
		<?php the_content('Read More'); ?>
	</div>
	<!-- <div class="navigation"><p><?php posts_nav_link(); ?></p></div> -->
<?php endwhile; ?>
</div> <!-- END OF SEARCH WRAP -->
<?php get_footer();?>