<div class="wrap">
	<h2>Front Category One</h2>
	<table class="form-table widefat">	


			<tr valign="top">
				<th scope="row">Show Front Category [<?php echo get_option('ShowFrontCategoryOne'); ?>]</th>
				<td>
				<?php
					function ShowFrontCategoryOneFunction() {
						echo '<input name="ShowFrontCategoryOne" id="gv_thumbnails_insert_into_excerpt" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'ShowFrontCategoryOne' ), false ) . ' />';
					}
					echo ShowFrontCategoryOneFunction();
				?>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">Front Category One</th>
				<td>
					<select name="FrontCategoryOne" > 
						 <option value="">Select Event</option> 
							<?php
									$categories = get_categories();
									foreach ($categories as $category) {
							  		if($category->category_nicename == get_option('FrontCategoryOne')){
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
					<p class="description"><b>Being Used: <?php echo get_option('FrontCategoryOne'); ?></b> - <?php $FrontCategoryOneTitle = get_term_by( 'slug', get_option('FrontCategoryOne'), 'category'); echo $FrontCategoryOneTitle->name;  ?></p>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">Front Category One</th>
				<td>
				<select name="FrontCategoryOneNumber" > 
					<?php
						foreach(range(1, 10) as $number) {
							if(get_option('FrontCategoryOneNumber') == $number){
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
					<p class="description"><b>Being Used: <?php echo get_option('FrontCategoryOneNumber'); ?></b></p>
				</td>
			</tr>
		</table>
	</div>