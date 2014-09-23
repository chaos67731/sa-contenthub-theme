<?php 
	if ( !defined('ABSPATH')) exit;
	get_header(); 
?>
<div class="root container"> 
	
	<div class="HomeSlider">
		HomeSlider >> Need to find plugin
	</div>

	<div class="FrontPage">
		<div class="left">


		<?php
			include  'FrontPage/LatestPost.php';

			if(get_option('ShowFrontCategoryOne') == '1')
			{
				include  'FrontPage/FeaturedContentOne.php';
		 	} 

			if(get_option('ShowFrontCategoryTwo') == '1')
			{
				include  'FrontPage/FeaturedContentTwo.php';
		 	} 

			if(get_option('ShowFrontSidebar') == '1')
			{
				include  'FrontPage/ShowFrontSidebar.php';
		 	} 

			if(get_option('ShowFrontCategoryThree') == '1')
			{
				include  'FrontPage/FeaturedContentThree.php';
		 	} 
		 ?>







 

		<!-- END OF LEFT SIDE -->
		</div>
		

		<div class="right">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Page Content') ):  endif;?>
		</div>
	</div>

</div>
<?php get_footer(); ?>
