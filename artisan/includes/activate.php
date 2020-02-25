<?php

function art_activate() {
	if ( version_compare( get_bloginfo('version'), '5.0', '<') ) {
		wp_die( __( 'You must have a minimum version of 5.0 to use this theme!', 'artisan' ) );
	}

	$theme_opt = get_option( 'art_opts' );

	if ( !$theme_opt ) {
		$theme_opt = array(
			'facebook' => '',
			'twitter' => '',
			'youtube' => '',
			'logo_type' => 1,
			'logo_img' => '',
			'footer' => ''
		);

		add_option( 'art_opts', $theme_opt );
	}
}