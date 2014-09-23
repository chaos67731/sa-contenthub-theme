<?php 
	if ( !defined('ABSPATH')) exit;
	get_header(); 
	setPostViews(get_the_ID());
?>
<div class="root container"> 
	<div class="Post">		
		<?php 
			echo get_post_meta( $post->ID, 'custom_post_heading', true );
			echo get_post_meta( $post->ID, 'custome_post_summary', true );

			if (have_posts()) :
				while (have_posts()) : ?>
		<header class="Post-Header">
			<h1 class="Post-Headline"><?php the_title(); ?></h1>
			<div class="Post-byline">
				by <h5 class="FrontPostAuthor"><?php the_author_link(); ?> <?php echo get_the_date(); ?></h5>
			</div>
		</header>
		
				<?php 
					the_post(); 
					the_content();  
				?>
			<?php 
			endwhile; 
			endif; 

			comments_template();
			?>

	</div>
	<div class="sidebar BasicPostSideBar">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Other name this  Sidebar') ):  endif;?>
	</div>
</div>

<?php get_footer(); ?>
