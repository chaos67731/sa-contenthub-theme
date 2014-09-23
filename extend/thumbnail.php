<?php

// Add Thumbnail Support
if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   
}
if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'medium-thumb', 200, 500 ); //300 pixels wide (and unlimited height)
		add_image_size( 'large-thumb', 400, 400, true ); //(cropped)
        add_image_size( 'post-photo-hero', 755, 557, true ); //(cropped)
}

?>