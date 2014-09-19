<?php 
/*
* Category Template: Custom Category
*/
    if ( !defined('ABSPATH')) exit;
    get_header(); 
?>

<div class="root container <?php $category = get_the_category();echo $category[0]->slug; ?>"> 
    <div class="CustomCategory">
        <?php 
            if (have_posts()) :
            while (have_posts()) :
            the_post(); 
        ?>

        <div class="thepost"  style="background: #ccc; margin-bottom: 20px;">
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

        <h3 class="job-title"><?php the_title(); ?></h3>
        <h5 class="LoopPostAuthor">
            <?php 
                $author = get_the_author();  echo "$author";
                echo get_the_date(); 
            ?>
        </h5>
        <?php
            the_excerpt(); 
        ?>
        <h6 class="LoopPostInfo">
            <?php comments_number( 'no comments', '1 comment', '% comments' ); ?> 
            * 
            <?php echo getPostViews(get_the_ID()); ?>
        </h6>
    </div>
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