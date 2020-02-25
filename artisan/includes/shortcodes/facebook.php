<?php

function art_facebook_shortcode( $atts, $content = 'Like us on Facebook' ) {
	$theme_opts = get_option( 'art_opts' );
	
	$atts = shortcode_atts( array(
		'page' => $theme_opts['facebook']
	), $atts );
	
	return '<a href="https://facebook.com/' . $atts['page'] . '" class="btn bg-facebook">' . 
		   do_shortcode( $content ) . 
		   '</a>';
}