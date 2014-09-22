<div class="wrap">
	<h2>Front Category Three</h2>
	<table class="form-table widefat">	

			<tr valign="top">
				<th scope="row">Show Front Category [<?php echo get_option('ShowFrontCategoryThree'); ?>]</th>
				<td>
				<?php
					function ShowFrontCategoryThreeFunction() {
						echo '<input name="ShowFrontCategoryThree" id="gv_thumbnails_insert_into_excerpt" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'ShowFrontCategoryThree' ), false ) . ' />';
					}
					echo ShowFrontCategoryThreeFunction();
				?>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">Front Category Three</th>
				<td>
					<select name="FrontCategoryThree" > 
						 <option value="">Select Event</option> 
							<?php
									$categories = get_categories();
									foreach ($categories as $category) {
							  		if($category->category_nicename == get_option('FrontCategoryThree')){
							  			$selected = 'selected="selected"';
							  		}
							  		else{
							  			$selected = null;
							  		}
								  $option = '<option value="'.$category->category_nicename.'" '.$selected.' >';
								  $option .= $category->cat_name;
								  $option .= ' ('.$category->category_count.')';
								  $option .= '</option>';
								  echo $option;
							  }



							   

							?>
					</select>
					<p class="description"><b>Being Used: <?php echo get_option('FrontCategoryThree'); ?></b> - <?php $FrontCategoryThreeTitle = get_term_by( 'slug', get_option('FrontCategoryThree'), 'category'); echo $FrontCategoryThreeTitle->name;  ?></p>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">Front Category Three</th>
				<td>
				<select name="FrontCategoryThreeNumber" > 
					<?php
						foreach(range(1, 10) as $number) {
							if(get_option('FrontCategoryThreeNumber') == $number){
								$selected = 'selected="selected"';
							}
							else{
								$selected = null;
							}
							$frontoptionnumber = '<option value="'.$number.'" '.$selected.' > '. $number .' </option>';
							echo $frontoptionnumber;
						}
					?>
				</select>
					<p class="description"><b>Being Used: <?php echo get_option('FrontCategoryThreeNumber'); ?></b></p>
				</td>
			</tr>

		</table>
	</div>