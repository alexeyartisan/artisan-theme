<?php

function art_admin_menus() {
	add_menu_page(
		'Artisan Theme Options',
		'Theme Options',
		'edit_theme_options',
		'art_theme_opts',
		'art_theme_opts_page'
	);
}