<?php 
	if ( !defined('ABSPATH')) exit;
	get_header(); 
?>
<div class="root container"> 
	<div class="BasicPost">
		<?php 
			if (have_posts()) :
			while (have_posts()) :
			the_post(); 
				the_content();  
			endwhile; 
			endif; 

			comments_template();
		?>
	</div>

	<div class="sidebar BasicPostSideBar">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Basic Post Sidebar') ):  endif;?>
	</div>
</div>

<?php get_footer(); ?>
