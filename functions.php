<?php
if ( !defined('ABSPATH')) exit;

// Extends / Why make things a mess in here? Or add a plugin :) - build it - include it - and your good to go

// Custom Category Templates
    include  'extend/CustomCategoryTemplates.php';
// Menus
    include  'extend/menus.php';
// Sidebars
    include  'extend/sidebars.php';
// Thumbnail
    include  'extend/thumbnail.php';
// Post Count
    include  'extend/post-count.php';
// Custom Excerpt - Added rea dmore link 
    include  'extend/custom-excerpt.php';
// Custom Excerpt - Added rea dmore link 
    include  'extend/add-thumbnails-preview.php';
// Custom WP Login - link and image  
    include  'extend/wp-custom-login.php';
// Custom Theme settings   
    include  'extend/custom-settings.php';
// Custom Theme settings   
    include  'extend/summary-post.php';

// Remove Wordpress Version 
remove_action('wp_head', 'wp_generator');

// Stop wordpress from wanting link images when making a post
update_option('image_default_link_type' , '');

// What Jquery to use 
add_action('wp_enqueue_scripts', 'no_more_jquery');
function no_more_jquery(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . 
    ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . 
    "://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}


add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}



