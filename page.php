<?php 
	if ( !defined('ABSPATH')) exit;
	get_header(); 
?>
 <div class="root container"> 
	<div class="BasicPage">
		<?php 
			if (have_posts()) :
			while (have_posts()) :
			the_post(); 
	 		the_content();  
			endwhile; 
			endif; 
		?>
	</div>

	 <div class="BasicPage sidebar">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Page Sidebar') ):  endif;?>
	</div>
</div>

<?php get_footer(); ?>
