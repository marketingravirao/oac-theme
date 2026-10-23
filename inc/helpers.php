<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function oac_asset_version( $relative_path ) {
	$file_path = get_theme_file_path( $relative_path );

	return file_exists( $file_path ) ? (string) filemtime( $file_path ) : wp_get_theme()->get( 'Version' );
}

function oac_upload_url( $relative_path ) {
	$uploads = wp_get_upload_dir();

	return trailingslashit( $uploads['baseurl'] ) . ltrim( $relative_path, '/' );
}