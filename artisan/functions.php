<?php

// Setup

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-formats', array( 'link', 'quote', 'video' ) );

// Includes

require( get_template_directory() . '/includes/front/enqueue.php' );
require( get_template_directory() . '/includes/setup.php' );
require( get_template_directory() . '/includes/widgets.php' );
require( get_template_directory() . '/includes/activate.php' );
require( get_template_directory() . '/includes/admin/menus.php' );
require( get_template_directory() . '/includes/admin/options-page.php' );
require( get_template_directory() . '/includes/admin/init.php' );
require( get_template_directory() . '/process/save-options.php' );
require( get_template_directory() . '/includes/shortcodes/facebook.php' );
require( get_template_directory() . '/includes/shortcodes/icon.php' );
require( get_template_directory() . '/includes/theme-customizer.php' );
require( get_template_directory() . '/includes/front/head.php' );

// Action & Filter Hooks

add_action( 'wp_enqueue_scripts', 'art_enqueue' );
add_action( 'after_setup_theme', 'art_setup_theme' );
add_action( 'widgets_init', 'art_widgets' );
add_action( 'after_switch_theme', 'art_activate' );
add_action( 'admin_menu', 'art_admin_menus' );
add_action( 'admin_init', 'art_admin_init' );
add_action( 'customize_register', 'art_customize_register' );
add_action( 'wp_head', 'art_head' );

// Shortcodes

add_shortcode( 'artfb', 'art_facebook_shortcode' );
add_shortcode( 'articon', 'art_icon_shortcode' );