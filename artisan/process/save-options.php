<?php

function art_save_options() {
	if ( !current_user_can( 'edit_theme_options' ) ) {
		wp_die( __( 'You are not allowed to be on this page!', 'artisan' ) );
	}

	check_admin_referer( 'art_options_verify' );

	$opts = get_option( 'art_opts' );

	$opts['twitter'] = sanitize_text_field( $_POST['art_inputTwitter'] );
	$opts['facebook'] = sanitize_text_field( $_POST['art_inputFacebook'] );
	$opts['youtube'] = sanitize_text_field( $_POST['art_inputYoutube'] );	
	$opts['logo_type'] = absint( $_POST['art_inputLogotyle'] );
	$opts['logo_img'] = esc_url_raw( $_POST['art_inputLogoImg'] );
	$opts['footer'] = $_POST['art_inputFooter'];


	update_option( 'art_opts', $opts );

	wp_redirect( admin_url( 'admin.php?page=art_theme_opts&status=1' ) );
}