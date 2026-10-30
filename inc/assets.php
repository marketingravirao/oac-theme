<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function oac_enqueue_assets() {
	$theme_css = '/assets/css/theme.css';
	wp_enqueue_style( 'oac-theme', get_theme_file_uri( $theme_css ), array(), oac_asset_version( $theme_css ) );
	wp_enqueue_style( 'oac-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), '6.7.2' );
	$preloader_script = '/assets/js/preloader.js';
	wp_enqueue_script( 'oac-preloader', get_theme_file_uri( $preloader_script ), array(), oac_asset_version( $preloader_script ), true );
	wp_script_add_data( 'oac-preloader', 'strategy', 'defer' );
	$header_script = '/assets/js/header-scroll.js';
	wp_enqueue_script( 'oac-header-scroll', get_theme_file_uri( $header_script ), array(), oac_asset_version( $header_script ), true );
	wp_script_add_data( 'oac-header-scroll', 'strategy', 'defer' );
	$mobile_menu_script = '/assets/js/mobile-menu.js';
	wp_enqueue_script( 'oac-mobile-menu', get_theme_file_uri( $mobile_menu_script ), array(), oac_asset_version( $mobile_menu_script ), true );
	wp_script_add_data( 'oac-mobile-menu', 'strategy', 'defer' );
	$nav_pill_script = '/assets/js/nav-pill.js';
	wp_enqueue_script( 'oac-nav-pill', get_theme_file_uri( $nav_pill_script ), array(), oac_asset_version( $nav_pill_script ), true );
	wp_script_add_data( 'oac-nav-pill', 'strategy', 'defer' );

	$is_home = is_front_page();
	$is_about = is_page_template( 'templates/template-about.php' );
	$is_contact = is_page_template( 'templates/template-contact.php' );
	$is_affiliates = is_page_template( 'templates/template-affiliates.php' );
	$is_courses = is_post_type_archive( 'course' ) || is_singular( 'course' );
	if ( $is_home ) {
		$home_css = '/assets/css/pages/home.css';
		wp_enqueue_style( 'oac-home', get_theme_file_uri( $home_css ), array( 'oac-theme' ), oac_asset_version( $home_css ) );
	}
	if ( $is_about ) {
		$about_css = '/assets/css/pages/about.css';
		wp_enqueue_style( 'oac-about', get_theme_file_uri( $about_css ), array( 'oac-theme' ), oac_asset_version( $about_css ) );
	}
	if ( $is_contact ) {
		$contact_css = '/assets/css/pages/contact.css';
		wp_enqueue_style( 'oac-contact', get_theme_file_uri( $contact_css ), array( 'oac-theme' ), oac_asset_version( $contact_css ) );
		wp_enqueue_script( 'oac-leadconnector-form', 'https://link.msgsndr.com/js/form_embed.js?ver=4.0.6', array(), null, true );
		wp_script_add_data( 'oac-leadconnector-form', 'strategy', 'defer' );
	}
	if ( $is_affiliates ) {
		$affiliates_css = '/assets/css/pages/affiliates.css';
		wp_enqueue_style( 'oac-affiliates', get_theme_file_uri( $affiliates_css ), array( 'oac-theme' ), oac_asset_version( $affiliates_css ) );
		wp_enqueue_script( 'oac-affiliate-form', 'https://app.onlineastrologyclasses.com/js/form_embed.js', array(), null, true );
		wp_script_add_data( 'oac-affiliate-form', 'strategy', 'defer' );
	}
	if ( $is_courses ) {
		$courses_css = '/assets/css/pages/courses.css';
		wp_enqueue_style( 'oac-courses', get_theme_file_uri( $courses_css ), array( 'oac-theme' ), oac_asset_version( $courses_css ) );
	}
	if ( is_page_template(
		array(
			'templates/template-policy-privacy.php',
			'templates/template-policy-terms.php',
			'templates/template-policy-refund.php',
			'templates/template-policy-cancellation.php',
			'templates/template-policy-cookies.php',
		)
	) ) {
		$policies_css = '/assets/css/pages/policies.css';
		wp_enqueue_style( 'oac-policies', get_theme_file_uri( $policies_css ), array( 'oac-theme' ), oac_asset_version( $policies_css ) );
		$policies_script = '/assets/js/policy-accordion.js';
		wp_enqueue_script( 'oac-policy-accordion', get_theme_file_uri( $policies_script ), array(), oac_asset_version( $policies_script ), true );
		wp_script_add_data( 'oac-policy-accordion', 'strategy', 'defer' );
	}
	if ( $is_home || $is_about || $is_courses ) {
		$faq_script = '/assets/js/faq-accordion.js';
		wp_enqueue_script( 'oac-faq-accordion', get_theme_file_uri( $faq_script ), array(), oac_asset_version( $faq_script ), true );
		wp_script_add_data( 'oac-faq-accordion', 'strategy', 'defer' );
	}
	if ( ! $is_home && ! $is_about && ! $is_contact && ! $is_affiliates && ! $is_courses ) {
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