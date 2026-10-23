<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function oac_theme_setup() {
	load_theme_textdomain( 'oac-theme', get_theme_file_path( '/languages' ) );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus( array( 'primary' => __( 'Primary Navigation', 'oac-theme' ) ) );
}
add_action( 'after_setup_theme', 'oac_theme_setup' );

function oac_primary_menu_fallback() {
	$items = array(
		__( 'Home', 'oac-theme' ) => home_url( '/' ),
		__( 'About Us', 'oac-theme' ) => home_url( '/about-us/' ),
		__( 'Our Courses', 'oac-theme' ) => home_url( '/our-courses/' ),
		__( 'Events', 'oac-theme' ) => home_url( '/#events' ),
		__( 'Books', 'oac-theme' ) => home_url( '/#books' ),
		__( 'Contact', 'oac-theme' ) => home_url( '/contact/' ),
		__( 'Log In', 'oac-theme' ) => home_url( '/login/' ),
	);

	echo '<ul class="main-nav__list">';
	foreach ( $items as $label => $url ) {
		$class = untrailingslashit( $url ) === untrailingslashit( home_url( '/login/' ) ) ? ' class="nav-login-item"' : '';
		echo '<li' . $class . '><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
	}
	echo '</ul>';
}

function oac_mark_login_menu_item( $classes, $item, $args ) {
	if ( 'primary' === $args->theme_location && untrailingslashit( $item->url ) === untrailingslashit( home_url( '/login/' ) ) ) {
		$classes[] = 'nav-login-item';
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'oac_mark_login_menu_item', 10, 3 );