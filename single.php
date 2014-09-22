<?php 
	if ( !defined('ABSPATH')) exit;
	get_header(); 
	setPostViews(get_the_ID());
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

			echo the_author_posts_link();

			comments_template();
		?>
	</div>

	<div class="sidebar BasicPostSideBar">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Other name this  Sidebar') ):  endif;?>
	</div>
</div>

<?php get_footer(); ?>
