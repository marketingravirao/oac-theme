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
			'primary'        => __( 'Main Menu', 'oac-theme' ),
			'footer_explore' => __( 'Footer Menu - Explore', 'oac-theme' ),
			'footer_legal'   => __( 'Footer Menu - Legal', 'oac-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'oac_theme_setup' );

function oac_register_news_post_type() {
	register_post_type(
		'news',
		array(
			'labels' => array(
				'name' => __( 'News', 'oac-theme' ),
				'singular_name' => __( 'News Article', 'oac-theme' ),
				'add_new' => __( 'Add News Article', 'oac-theme' ),
				'add_new_item' => __( 'Add New News Article', 'oac-theme' ),
				'edit_item' => __( 'Edit News Article', 'oac-theme' ),
				'view_item' => __( 'View News Article', 'oac-theme' ),
				'all_items' => __( 'All News', 'oac-theme' ),
			),
			'public' => true,
			'has_archive' => true,
			'show_in_nav_menus' => true,
			'rewrite' => array( 'slug' => 'news', 'with_front' => false ),
			'menu_icon' => 'dashicons-megaphone',
			'menu_position' => 21,
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'oac_register_news_post_type' );

function oac_flush_news_rewrite_rules() {
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'oac_flush_news_rewrite_rules' );

function oac_mark_login_menu_item( $classes, $item, $args ) {
	$is_login_item = in_array( 'header-login-btn', $classes, true )
		|| stripos( $item->title, 'login' ) !== false
		|| untrailingslashit( $item->url ) === untrailingslashit( home_url( '/login/' ) );

	if ( 'primary' === $args->theme_location && $is_login_item ) {
		$classes[] = 'nav-login-item';
		if ( ! in_array( 'header-login-btn', $classes, true ) ) {
			$classes[] = 'header-login-btn';
		}
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'oac_mark_login_menu_item', 10, 3 );