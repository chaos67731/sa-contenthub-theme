<?php
/*
Template Name: Wide Page | No Sidebar
*/
	if ( !defined('ABSPATH')) exit;
	get_header(); 
?>
 <div class="root container"> 
	<div class="WidePage">
		<?php 
			if (have_posts()) :
			while (have_posts()) :
			the_post(); 
	 		the_content();  
			endwhile; 
			endif; 
		?>
	</div>
</div>

<?php get_footer(); ?>
