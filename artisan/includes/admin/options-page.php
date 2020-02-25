<?php

function art_theme_opts_page() {

	$theme_opts = get_option( 'art_opts' );
?>
<div class="wrap">
	<h1><?php _e( 'Artisan Theme Settings', 'artisan' ); ?></h1>

	<?php if ( isset( $_GET['status'] ) && $_GET['status'] == '1' ): ?>
		<div class="updated">
    		<p><?php _e( 'Success! Options have been saved.', 'artisan' ); ?></p>
  		</div>
	<?php endif; ?>

	<form action="admin-post.php" method="post">
		<input type="hidden" name="action" value="art_save_options">
		<?php wp_nonce_field( 'art_options_verify' ); ?>

		<h2 class="title"><?php _e( 'Social icons', 'artisan' ); ?></h2>
		<table class="form-table">
		    <tr>
			    <th scope="row">
			        <label for="art_inputTwitter"><?php _e( 'Twitter:', 'artisan' ); ?></label>
			    </th>			 
			    <td>
			        <input type="text" value="<?php echo $theme_opts['twitter']; ?>" id="art_inputTwitter" name="art_inputTwitter" class="regular-text">
			        <br>
			        <span class="description"><?php _e( 'Your Twitter alias', 'artisan' ); ?></span>
			    </td>
			</tr>
			<tr>
			    <th scope="row">
			        <label for="art_inputFacebook"><?php _e( 'Facebook:', 'artisan' ); ?></label>
			    </th>			 
			    <td>
			        <input type="text" value="<?php echo $theme_opts['facebook']; ?>" id="art_inputFacebook" name="art_inputFacebook" class="regular-text">
			        <br>
			        <span class="description"><?php _e( 'Your Facebook alias', 'artisan' ); ?></span>
			    </td>
			</tr>
			<tr>
			    <th scope="row">
			        <label for="art_inputYoutube"><?php _e( 'Youtube:', 'artisan' ); ?></label>
			    </th>			 
			    <td>
			        <input type="text" value="<?php echo $theme_opts['youtube']; ?>" id="art_inputYoutube" name="art_inputYoutube" class="regular-text">
			        <br>
			        <span class="description"><?php _e( 'Your Youtube alias', 'artisan' ); ?></span>
			    </td>
			</tr>
		</table>

		<h2 class="title"><?php _e( 'Logo', 'artisan' ); ?></h2>
		<table class="form-table">
		    <tr>
			    <th scope="row">
			        <label for="art_inputLogotyle"><?php _e( 'Logo type:', 'artisan' ); ?></label>
			    </th>			 
			    <td>
			        <select name="art_inputLogotyle" class="regular-text">
			        	<option value="1"><?php _e( 'Site name', 'artisan' ); ?></option>
			        	<option value="2" <?php echo $theme_opts['logo_type'] == 2 ? 'selected' : ''; ?>><?php _e( 'Logo', 'artisan' ); ?></option>
			        </select>
			    </td>
			</tr>
			<tr>
			    <th scope="row">
			        <label for="art_inputLogoImg"><?php _e( 'Logo Image:', 'artisan' ); ?></label>
			    </th>			 
			    <td>
			        <input type="text" value="<?php echo $theme_opts['logo_img']; ?>" id="art_inputLogoImg" name="art_inputLogoImg" class="regular-text">
			        <br><br>
			        <button type="button" class="button-secondary" id="art_uploadLogoImgBtn" ><?php _e( 'Select or upload image', 'artisan' ); ?></button>
			        <br>
			        <span class="description"><?php _e( 'Press this button to select or upload logo', 'artisan' ); ?></span>
			    </td>
			</tr>
		</table>

		<h2 class="title"><?php _e( 'Footer', 'artisan' ); ?></h2>
		<table class="form-table">
		    <tr>
			    <th scope="row">
			        <label for="art_inputFooter"><?php _e( 'Footer text:', 'artisan' ); ?></label>
			    </th>			 
			    <td>
			        <textarea id="art_inputFooter" name="art_inputFooter" class="regular-text"><?php echo stripslashes_deep( $theme_opts['footer'] ); ?></textarea>
			        <br>
			        <span class="description"><?php _e( 'Your custom footer text', 'artisan' ); ?></span>
			    </td>
			</tr>
		</table>

		<p class="submit">
			<input type="submit" value="Save Changes" class="button-primary" name="Submit">
		</p>
	</form>
</div>
<?php
}