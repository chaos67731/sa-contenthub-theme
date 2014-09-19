<?php 
    if ( !defined('ABSPATH')) exit;
    get_header(); 
?>

<div class="root container"> 
    <div class="BasicLoop">
        <?php 
            if (have_posts()) :
            while (have_posts()) :
            the_post(); 

                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } 

                else{
                    echo '<img width="150" height="111" src="' . get_template_directory_uri() . '/images/logo.png">';
                }
        ?>

        <h3 class="job-title"><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>

    <?php
        endwhile; 
        endif; 
    ?>
    </div>

    <div class="BasicLoop sidebar">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Page Sidebar') ):  endif;?>
    </div>
</div>

<?php get_footer(); ?>