<?php 

// custom-excerpt.php

///// Add read more link to end of excrpt -
function new_excerpt_more( $more ) {
    return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('[read more]', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// Add excerpts to pages 
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
 
}

?>