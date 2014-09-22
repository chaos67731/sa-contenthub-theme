<div class="wrap">
	<h2>Theme Settings</h2>

	<form method="post" action="options.php">
		
		<?php if(isset( $_GET['settings-updated'])) { ?>
			<div class="updated">
		        <p>Settings updated successfully</p>
		    </div>
		<?php } ?>


			<div class="wrap">
				<table class="form-table widefat">	
					<tr><h2>Latest Post Count</h2></tr>
					<tr valign="top">
						<th scope="row">Latest Post Count <?php echo get_option('LatestPostCount'); ?></th>
						<td>
							<select name="LatestPostCount" > 
							<?php
								foreach(range(1, 10) as $number) {
									if(get_option('LatestPostCount') == $number){
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
						</td>
					</tr>
				</table>
			</div>






		<?php 

			include  'Section/FrontSectionOne.php';
			include  'Section/FrontSectionTwo.php';
			include  'Section/FrontSectionThree.php';
		 ?>
 
 


			<?php settings_fields( 'theme-settings-general' ); ?>
			<?php do_settings_sections( 'theme-settings-general' ); ?>

	    <?php submit_button(); ?>
	</form>
</div>