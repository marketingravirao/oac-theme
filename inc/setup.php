<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function oac_theme_setup() {
	load_theme_textdomain( 'oac-theme', get_theme_file_path( '/languages' ) );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus(
		array(
			'primary' => __( 'Main Menu', 'oac-theme' ),
			'footer'  => __( 'Footer Menu', 'oac-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'oac_theme_setup' );

function oac_mark_login_menu_item( $classes, $item, $args ) {
	if ( 'primary' === $args->theme_location && untrailingslashit( $item->url ) === untrailingslashit( home_url( '/login/' ) ) ) {
		$classes[] = 'nav-login-item';
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'oac_mark_login_menu_item', 10, 3 );