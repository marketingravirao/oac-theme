<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function oac_enqueue_assets() {
	$theme_css = '/assets/css/theme.css';
	wp_enqueue_style( 'oac-theme', get_theme_file_uri( $theme_css ), array(), oac_asset_version( $theme_css ) );
	$header_script = '/assets/js/header-scroll.js';
	wp_enqueue_script( 'oac-header-scroll', get_theme_file_uri( $header_script ), array(), oac_asset_version( $header_script ), true );
	wp_script_add_data( 'oac-header-scroll', 'strategy', 'defer' );

	$is_home = is_front_page();
	$is_about = is_page_template( 'templates/template-about.php' );
	if ( $is_home ) {
		$home_css = '/assets/css/pages/home.css';
		wp_enqueue_style( 'oac-home', get_theme_file_uri( $home_css ), array( 'oac-theme' ), oac_asset_version( $home_css ) );
	}
	if ( $is_about ) {
		$about_css = '/assets/css/pages/about.css';
		wp_enqueue_style( 'oac-about', get_theme_file_uri( $about_css ), array( 'oac-theme' ), oac_asset_version( $about_css ) );
	}
	if ( $is_home || $is_about ) {
		$faq_script = '/assets/js/faq-accordion.js';
		wp_enqueue_script( 'oac-faq-accordion', get_theme_file_uri( $faq_script ), array(), oac_asset_version( $faq_script ), true );
		wp_script_add_data( 'oac-faq-accordion', 'strategy', 'defer' );
	}
	if ( ! $is_home && ! $is_about ) {
		return;
	}

	$gsap_core = '/assets/vendor/gsap/gsap.min.js';
	$scroll_trigger = '/assets/vendor/gsap/ScrollTrigger.min.js';
	$split_text = '/assets/vendor/gsap/SplitText.min.js';
	$animations = '/assets/js/animations.js';

	wp_enqueue_script( 'oac-gsap', get_theme_file_uri( $gsap_core ), array(), oac_asset_version( $gsap_core ), true );
	wp_enqueue_script( 'oac-scroll-trigger', get_theme_file_uri( $scroll_trigger ), array( 'oac-gsap' ), oac_asset_version( $scroll_trigger ), true );
	wp_enqueue_script( 'oac-split-text', get_theme_file_uri( $split_text ), array( 'oac-gsap' ), oac_asset_version( $split_text ), true );
	wp_enqueue_script( 'oac-animations', get_theme_file_uri( $animations ), array( 'oac-gsap', 'oac-scroll-trigger', 'oac-split-text' ), oac_asset_version( $animations ), true );

	foreach ( array( 'oac-gsap', 'oac-scroll-trigger', 'oac-split-text', 'oac-animations' ) as $handle ) {
		wp_script_add_data( $handle, 'strategy', 'defer' );
	}
}
add_action( 'wp_enqueue_scripts', 'oac_enqueue_assets' );