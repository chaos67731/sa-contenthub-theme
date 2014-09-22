<?php
	// Get the Category Name
	$FrontCategoryThreeTitle = get_term_by( 'slug', get_option('FrontCategoryThree'), 'category');

	// Get the URL
    $GetFrontCategoryThreeTitle = get_cat_ID( $FrontCategoryThreeTitle->name );
    $GetFrontCategoryThreeTitleLink = get_category_link( $GetFrontCategoryThreeTitle );
?>


<div class="Section">

	<h3 class="SectionTitle">
		<?php echo $FrontCategoryThreeTitle->name; ?>
		<span class="SectionTitleRight">
			<a href="<?php echo esc_url( $GetFrontCategoryThreeTitleLink ); ?>">View All &raquo; </a>
		</span>
	</h3>

	<?php
		$catquery = new WP_Query( 'category_name='.get_option('FrontCategoryThree').'&posts_per_page='.get_option('FrontCategoryThreeNumber').' ' );
		while($catquery->have_posts()) : $catquery->the_post();
	?>

	<div class="FrontPost">
		<a href="<?php the_permalink() ?>" rel="bookmark">
			<?php
                /// Getting the Image 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('medium-thumb');
                } 

                else{
                    echo '<img width="150" height="111" src="' . get_template_directory_uri() . '/images/logo.png">';
                }
                /// END Getting the image 
			 ?>
		</a>
		<h4 class="FrontPostTitle"><?php the_title(); ?></h4>
<?php
	  
				the_excerpt();  
	 

			?>

		<h6 class="FrontPostInfo"><?php comments_number( 'no commentss', 'Three comments', '% commentss' ); ?> * <?php echo getPostViews(get_the_ID()); ?></h6>
	</div>
	<?php endwhile; ?>
</div>