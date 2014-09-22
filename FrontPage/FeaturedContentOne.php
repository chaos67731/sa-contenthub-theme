<?php
	// Get the Category Name
	$FrontCategoryOneTitle = get_term_by( 'slug', get_option('FrontCategoryOne'), 'category');

	// Get the URL
    $GetFrontCategoryOneTitle = get_cat_ID( $FrontCategoryOneTitle->name );
    $GetFrontCategoryOneTitleLink = get_category_link( $GetFrontCategoryOneTitle );
?>


<div class="Section">

	<h3 class="SectionTitle">
		<?php echo $FrontCategoryOneTitle->name; ?>
		<span class="SectionTitleRight">
			<a href="<?php echo esc_url( $GetFrontCategoryOneTitleLink ); ?>">View All &raquo; </a>
		</span>
	</h3>

	<?php
		$catquery = new WP_Query( 'category_name='.get_option('FrontCategoryOne').'&posts_per_page='.get_option('FrontCategoryOneNumber').' ' );
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
		<h6 class="FrontPostInfo"><?php comments_number( 'no commentss', 'one comments', '% commentss' ); ?> * <?php echo getPostViews(get_the_ID()); ?></h6>
	</div>
	<?php endwhile; ?>
</div>