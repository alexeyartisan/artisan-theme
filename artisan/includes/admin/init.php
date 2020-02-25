<?php

function art_admin_init() {
	require( 'enqueue.php' );

	add_action( 'admin_enqueue_scripts', 'art_admin_enqueue' );
	add_action( 'admin_post_art_save_options', 'art_save_options' );
}