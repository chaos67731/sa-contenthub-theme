<?php

// Here are the sidebars
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' =>'Home Page Widgets',
		'description' => "Home Page Widgets - On The Side",
		'before_widget' => '<div id="%1$s" class="widget %2$s">', 
		'after_widget' => '</div>', 
		'before_title' => '<h3 class="widgettitle">', 
		'after_title' => '</h3>', 
));


if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name' => 'Home Page Content',
	'description' => "Home Page Content",
	'before_widget' => '<div id="%1$s" class="widget %2$s">', 
	'after_widget' => '</div>', 
	'before_title' => '<h3 class="widgettitle SectionTitle">', 
	'after_title' => '</h3>', 
	));
	
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name' => 'Home Page Pools',
	'description' => "Used To display Pools on the Home Page",
	'before_widget' => '<div id="%1$s" class="widget %2$s">', 
	'after_widget' => '</div>', 
	'before_title' => '<h3 class="widgettitle">', 
	'after_title' => '</h3>', 
	));
 
    if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'name' =>'Basic Post Sidebar',
    'description' => "Basic Post Sidebar.",
    'before_widget' => '<div id="%1$s" class="widget %2$s">', 
    'after_widget' => '</div>', 
    'before_title' => '<h3 class="widgettitle">', 
    'after_title' => '</h3>', 
    ));
	
    if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'name' =>'Other Page Sidebar',
    'description' => "This is for post only.",
    'before_widget' => '<div id="%1$s" class="widget %2$s">', 
    'after_widget' => '</div>', 
    'before_title' => '<h3 class="widgettitle">', 
    'after_title' => '</h3>', 
    ));


    if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'name' =>'Other name this  Sidebar',
    'description' => "This is for post only.",
    'before_widget' => '<div id="%1$s" class="widget %2$s">', 
    'after_widget' => '</div>', 
    'before_title' => '<h3 class="widgettitle">', 
    'after_title' => '</h3>', 
    ));

    ?>