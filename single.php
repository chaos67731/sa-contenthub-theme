<?php 
	if ( !defined('ABSPATH')) exit;
	get_header(); 
	setPostViews(get_the_ID());
?>
<div class="root container"> 
	<div class="BasicPost">
		<?php
			if (have_posts()) :
				while (have_posts()) : ?>
		<header>
			<h1 class="Post-Headline"><?php the_title(); ?></h1>
			<div class="Post-byline">
				by <h5 class="FrontPostAuthor"><?php the_author_link(); ?> <?php echo get_the_date(); ?></h5>
			</div>
		</header>
		
				<?php 
					the_post(); 
					the_content();  
				?>
	</div>
			<?php 
			endwhile; 
			endif; 
			
			comments_template();
			?>

	<div class="sidebar BasicPostSideBar">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Other name this  Sidebar') ):  endif;?>
	</div>
</div>

<?php get_footer(); ?>
