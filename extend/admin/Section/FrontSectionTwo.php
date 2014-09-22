<div class="wrap">
	<h2>Front Category Two</h2>
	<table class="form-table widefat">	

			<tr valign="top">
				<th scope="row">Show Front Category [<?php echo get_option('ShowFrontCategoryTwo'); ?>]</th>
				<td>
				<?php
					function ShowFrontCategoryTwoFunction() {
						echo '<input name="ShowFrontCategoryTwo" id="gv_thumbnails_insert_into_excerpt" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'ShowFrontCategoryTwo' ), false ) . ' />';
					}
					echo ShowFrontCategoryTwoFunction();
				?>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">Front Category Two</th>
				<td>
					<select name="FrontCategoryTwo" > 
						 <option value="">Select Event</option> 
							<?php
									$categories = get_categories();
									foreach ($categories as $category) {
							  		if($category->category_nicename == get_option('FrontCategoryTwo')){
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
					<p class="description"><b>Being Used: <?php echo get_option('FrontCategoryTwo'); ?></b> - <?php $FrontCategoryTwoTitle = get_term_by( 'slug', get_option('FrontCategoryTwo'), 'category'); echo $FrontCategoryTwoTitle->name;  ?></p>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">Front Category Two</th>
				<td>
				<select name="FrontCategoryTwoNumber" > 
					<?php
						foreach(range(1, 10) as $number) {
							if(get_option('FrontCategoryTwoNumber') == $number){
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
					<p class="description"><b>Being Used: <?php echo get_option('FrontCategoryTwoNumber'); ?></b></p>
				</td>
			</tr>

		</table>
	</div>