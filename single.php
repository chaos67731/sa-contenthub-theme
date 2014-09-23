<?php 
	if ( !defined('ABSPATH')) exit;
	get_header(); 
	setPostViews(get_the_ID());
?>
<div class="container"> 
	<div class="Post">		
		<?php 
			echo get_post_meta( $post->ID, 'custom_post_heading', true );
			echo get_post_meta( $post->ID, 'custome_post_summary', true );

			if (have_posts()) :
				while (have_posts()) :
				the_post(); ?>

			<header class="Post-Header">
				<h1 class="Post-Headline"><?php the_title(); ?></h1>
				<div class="Post-byline"><h5 class="FrontPostAuthor">By <?php the_author(); ?> <?php echo get_the_date(); ?></h5>
				</div>
			</header>
		
			<div class="Post-Body">
				<div class="Post-Content">
					<?php if ( has_post_thumbnail() ) { ?>
						<figure class="Post-PhotoHero">
		                    <?php the_post_thumbnail('post-photo-hero'); ?>
						</figure>
	                <?php }; ?>

					<?php 
						the_content();
						comments_template();
					?>
				</div>
				
				<div class="Post-SideBar">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Basic Post Sidebar') ):  endif;?>
				</div>
			</div>
			<?php 
			endwhile; 
			endif; 

			?>

	</div>
</div>

<?php get_footer(); ?>
