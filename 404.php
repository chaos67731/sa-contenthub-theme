<?php 
	if ( !defined('ABSPATH')) exit;
	get_header(); 
?>
 <div class="root container"> 
	<div class="BasicPage">
		<h1>404: Sorry, but we can't seem to find the page you are looking for.</h1>
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
