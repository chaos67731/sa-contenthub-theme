<div class="wrap">
	<h1>Front Page Settings</h1>

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


			<div class="wrap">
				<table class="form-table widefat">	
					<tr><h2>Show Sidebar On Front Page</h2></tr>
						<tr valign="top">
							<th scope="row">Show</th>
							<td>
							<?php
								function ShowFrontSidebarFunction() {
									echo '<input name="ShowFrontSidebar" id="gv_thumbnails_insert_into_excerpt" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'ShowFrontSidebar' ), false ) . ' />';
								}
								echo ShowFrontSidebarFunction();
							?>
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