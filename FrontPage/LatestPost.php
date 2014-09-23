		


		<div class="Section">
			<h3 class="SectionTitle">
				Latest Post
			</h3>
				
			<?php
			 $postslist = get_posts('numberposts='.  get_option('LatestPostCount') .'');
			 foreach ($postslist as $post) :
			    setup_postdata($post);
			?>
			<div class="FrontPost">
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
				<h4 class="FrontPostTitle"><?php the_title(); ?></h4>
				<h5 class="FrontPostAuthor"><?php $author = get_the_author();  echo "$author";?> <?php echo get_the_date(); ?></h5>
				<?php the_excerpt() ?>

				<h6 class="FrontPostInfo"><?php comments_number( 'no commentss', 'one comments', '% commentss' ); ?> * <?php echo getPostViews(get_the_ID()); ?></h6>
			</div>
			<?php endforeach ?>
		</div>
 