<?php 
	if ( !defined('ABSPATH')) exit;
	get_header(); 
	setPostViews(get_the_ID());
?>
 <div class="root container"> 
	<div class="BasicPage">
		<?php 
			if (have_posts()) :
			while (have_posts()) :
			the_post(); ?>
		<div style="background: red; margin-bottom: 25px;">
			<h1><?php the_title(); ?></h1>
		<?php 
	 		the_excerpt();  
	 	?>
	 </div>
	 <?php
		endwhile; 
		else: 
	?>


		NOTHING - Search Again Yo


	<?php
		endif; 
	?>
	</div>

	 <div class="BasicPage sidebar">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Page Sidebar') ):  endif;?>
	</div>
</div>

<?php get_footer(); ?>
