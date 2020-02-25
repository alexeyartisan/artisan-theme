<?php

function art_admin_enqueue() {
	if ( !isset($_GET['page']) || $_GET['page'] !== 'art_theme_opts' ) {
		return;
	}

	$theme   = wp_get_theme( 'Artisan' );
	$version = $theme->get( 'Version' );

	wp_register_script( 'art_options', get_template_directory_uri() . '/assets/scripts/options.js', array('jquery'), $version, true );

	wp_enqueue_media();
	wp_enqueue_script( 'art_options' ); 
}