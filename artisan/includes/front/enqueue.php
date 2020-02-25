<?php

function art_enqueue() {
	$theme   = wp_get_theme( 'Artisan' );
	$version = $theme->get( 'Version' );

	wp_register_style( 'art_bootstrap', get_template_directory_uri() . '/assets/styles/bootstrap.css', array(), $version, 'all' );
	wp_register_style( 'art_roboto', 'http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' );
	wp_register_style( 'art_roboto_mono', 'http://fonts.googleapis.com/css?family=Roboto+Mono:400,300,700' );
	wp_register_style( 'art_fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), $version, 'all' );
	wp_register_style( 'art_main', get_template_directory_uri() . '/assets/styles/main.css', array(), $version, 'all' );

	wp_enqueue_style( 'art_bootstrap' );
	wp_enqueue_style( 'art_roboto' );
	wp_enqueue_style( 'art_roboto_mono' );
	wp_enqueue_style( 'art_fontawesome' );
	wp_enqueue_style( 'art_main' );


	wp_register_script( 'art_fastclick', get_template_directory_uri() . '/assets/vendor/fastclick/fastclick.js', array('jquery'), $version, false );
	wp_register_script( 'art_modernizr', get_template_directory_uri() . '/assets/vendor/modernizr/modernizr.js', array('jquery'), $version, false );
	wp_register_script( 'art_bootstrap', get_template_directory_uri() . '/assets/scripts/bootstrap.min.js', array('jquery'), $version, true );
	wp_register_script( 'art_rippler', get_template_directory_uri() . '/assets/vendor/rippler/rippler.min.js', array('jquery'), $version, true );
	wp_register_script( 'art_slimscroll', get_template_directory_uri() . '/assets/vendor/slimscroll/slimscroll.min.js', array('jquery'), $version, true );
	wp_register_script( 'art_swipebox', get_template_directory_uri() . '/assets/vendor/swipebox/swipebox.min.js', array('jquery'), $version, true );
	wp_register_script( 'art_dotdotdot', get_template_directory_uri() . '/assets/vendor/dotdotdot/dotdotdot.min.js', array('jquery'), $version, true );
	wp_register_script( 'art_app', get_template_directory_uri() . '/assets/scripts/app.js', array('jquery'), $version, true );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'art_fastclick' );
	wp_enqueue_script( 'art_modernizr' );
	wp_enqueue_script( 'art_bootstrap' );
	wp_enqueue_script( 'art_rippler' );
	wp_enqueue_script( 'art_slimscroll' );
	wp_enqueue_script( 'art_swipebox' );
	wp_enqueue_script( 'art_dotdotdot' );
	wp_enqueue_script( 'art_app' );
}