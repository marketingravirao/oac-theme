<?php
/**
 * Demo astronomy and Vastu news importer.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function oac_demo_news_articles() {
	return array(
		'lunar-observatories-global-network' => array(
			'title' => __( 'New Global Network Helps Observatories Coordinate Lunar Research', 'oac-theme' ),
			'category' => __( 'Astronomy News', 'oac-theme' ),
			'excerpt' => __( 'International observatories are sharing lunar imaging data to improve coverage of eclipses, occultations, and changing surface conditions.', 'oac-theme' ),
			'content' => __( '<p>Observatories around the world are increasingly coordinating their lunar imaging schedules to create continuous records of events visible only from selected regions. This collaborative approach is improving coverage of eclipses, occultations, and short-lived changes near the lunar surface.</p><p>For students of astronomy, the growing availability of shared datasets offers a valuable opportunity to compare atmospheric distortion, telescope resolution, and timing records across different locations.</p><h2>Why coordinated observation matters</h2><p>One observatory alone may lose sight of an event because of weather or daylight. A connected network can provide overlapping observations, helping researchers improve the reliability and scientific value of their findings.</p>', 'oac-theme' ),
			'image' => 'https://images.unsplash.com/photo-1446941611757-91d2c3bd3d45?auto=format&fit=crop&w=1600&q=85',
		),
		'exoplanet-atmosphere-signatures' => array(
			'title' => __( 'Exoplanet Atmospheres Reveal Complex Weather Patterns', 'oac-theme' ),
			'category' => __( 'Space Research', 'oac-theme' ),
			'excerpt' => __( 'New telescope observations are helping scientists study clouds, temperature gradients, and possible atmospheric chemistry on distant worlds.', 'oac-theme' ),
			'content' => __( '<p>Recent international telescope campaigns have produced detailed spectra from a growing list of exoplanets. Researchers use these measurements to identify atmospheric molecules, estimate temperatures, and look for signs of cloud formation.</p><p>Because no distant atmosphere is observed directly, scientists interpret light passing through it during transit or light reflected by the planet. Small variations in that signal can indicate remarkable structures far beyond our solar system.</p><h2>From data to discovery</h2><p>The work demonstrates how astronomy combines physics, careful measurement, and patient comparison of hundreds of observations before a scientific conclusion is announced.</p>', 'oac-theme' ),
			'image' => 'https://images.unsplash.com/photo-1462331940025-496dfbfc7564?auto=format&fit=crop&w=1600&q=85',
		),
		'solar-weather-air-travel' => array(
			'title' => __( 'Solar Weather Forecasting Gains Importance for Global Aviation', 'oac-theme' ),
			'category' => __( 'Solar Science', 'oac-theme' ),
			'excerpt' => __( 'International agencies are improving alerts for solar storms that can affect satellites, navigation, communication, and polar flight routes.', 'oac-theme' ),
			'content' => __( '<p>Space-weather services are expanding monitoring of solar flares and coronal mass ejections. Strong solar activity can disturb radio communication, satellite navigation, power systems, and communications used by aircraft.</p><p>Airlines may adjust polar routes, navigation procedures, and communications planning during elevated solar activity. Forecasting agencies therefore monitor the Sun continuously and publish alerts for operators worldwide.</p><h2>A modern relationship with the Sun</h2><p>The Sun remains central to astronomical observation, but modern forecasting also shows why solar activity has practical consequences for technology and daily life.</p>', 'oac-theme' ),
			'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1600&q=85',
		),
		'vedic-vastu-building-orientation' => array(
			'title' => __( 'Vastu Research Examines Building Orientation and Natural Light', 'oac-theme' ),
			'category' => __( 'Vastu & Architecture', 'oac-theme' ),
			'excerpt' => __( 'Design researchers are studying how orientation, daylight, ventilation, and spatial balance influence comfort in modern buildings.', 'oac-theme' ),
			'content' => __( '<p>Contemporary architecture increasingly studies the relationship between building orientation, daylight, air movement, and occupant comfort. These themes also feature prominently in traditional Vastu principles.</p><p>North-east openings, controlled south-west massing, courtyard planning, and cross ventilation are often discussed as ways to balance environmental conditions. Modern evidence-based analysis can help evaluate whether traditional recommendations perform well in a specific climate.</p><h2>Practical Vastu integration</h2><p>Responsible Vastu guidance should combine orientation, structural safety, local climate, user needs, and building regulations rather than relying on one rule in isolation.</p>', 'oac-theme' ),
			'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1600&q=85',
		),
		'ark-sky-preservation' => array(
			'title' => __( 'Dark-Sky Preservation Expands Around Major Observatories', 'oac-theme' ),
			'category' => __( 'Observatory News', 'oac-theme' ),
			'excerpt' => __( 'Communities near astronomy sites are adopting lighting standards to protect night-sky visibility for science, wildlife, and culture.', 'oac-theme' ),
			'content' => __( '<p>Dark-sky initiatives are growing around observatories and protected areas worldwide. Shielded streetlights, warmer illumination, reduced glare, and limits on advertising lighting can protect night-time visibility without compromising safety.</p><p>These efforts benefit astronomers and also support ecosystems that depend on natural darkness. Many communities now describe clear night skies as an environmental and cultural resource.</p><h2>Preserving the view of the stars</h2><p>International observatories frequently work with nearby towns to adopt lighting codes that allow essential visibility while minimizing unnecessary brightness and upward light spill.</p>', 'oac-theme' ),
			'image' => 'https://images.unsplash.com/photo-1444703686981-a3abbc4d4fe3?auto=format&fit=crop&w=1600&q=85',
		),
		'gravitational-wave-global-observation' => array(
			'title' => __( 'Global Gravitational-Wave Network Expands Cosmic Monitoring', 'oac-theme' ),
			'category' => __( 'International Astronomy', 'oac-theme' ),
			'excerpt' => __( 'Detector facilities across continents are working together to identify distant mergers and improve source-location accuracy.', 'oac-theme' ),
			'content' => __( '<p>Gravitational-wave observatories work together by recording subtle changes in space caused by energetic events such as merging black holes and neutron stars. More detectors provide a stronger signal and help locate cosmic events more precisely.</p><p>International coordination allows teams to compare arrival times and confirm detections while reducing the chance of interpreting instrumental noise as a genuine event.</p><h2>A new astronomical messenger</h2><p>Alongside visible light and particles, gravitational waves give scientists an additional way to understand powerful processes that conventional telescopes cannot observe directly.</p>', 'oac-theme' ),
			'image' => 'https://images.unsplash.com/photo-1465101162946-4377e57745c3?auto=format&fit=crop&w=1600&q=85',
		),
	);
}

function oac_news_import_find( $article_key ) {
	$matches = get_posts(
		array(
			'post_type' => 'news',
			'post_status' => 'any',
			'posts_per_page' => 1,
			'meta_key' => '_oac_demo_news_key',
			'meta_value' => $article_key,
		)
	);
	return $matches ? $matches[0] : get_page_by_path( $article_key, OBJECT, 'news' );
}

function oac_news_import_set_featured_image( $post_id, $image_url, $title ) {
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/media.php';
	require_once ABSPATH . 'wp-admin/includes/image.php';

	$attachment_id = media_sideload_image( $image_url, $post_id, $title, 'id' );
	if ( ! is_wp_error( $attachment_id ) ) {
		set_post_thumbnail( $post_id, (int) $attachment_id );
		return true;
	}
	return false;
}

function oac_news_import_create( $article_key, $article, $index ) {
	if ( ! post_type_exists( 'news' ) ) {
		return new WP_Error( 'news_type_unavailable', __( 'The News post type is not registered. Make sure the OAC theme is active.', 'oac-theme' ) );
	}
	$existing = oac_news_import_find( $article_key );
	if ( $existing instanceof WP_Post ) {
		return $existing->ID;
	}

	$post_id = wp_insert_post(
		array(
			'post_type' => 'news',
			'post_status' => 'publish',
			'post_title' => $article['title'],
			'post_name' => $article_key,
			'post_excerpt' => $article['excerpt'],
			'post_content' => $article['content'],
			'menu_order' => $index,
			'post_date' => gmdate( 'Y-m-d H:i:s', strtotime( '-' . ( $index * 2 ) . ' days' ) ),
		),
		true
	);
	if ( is_wp_error( $post_id ) ) {
		return $post_id;
	}

	update_post_meta( $post_id, '_oac_demo_news_key', $article_key );
	update_post_meta( $post_id, '_oac_news_category', $article['category'] );
	oac_news_import_set_featured_image( $post_id, $article['image'], $article['title'] );
	return $post_id;
}

function oac_news_import_add_admin_page() {
	add_submenu_page(
		'edit.php?post_type=news',
		__( 'Import Demo News', 'oac-theme' ),
		__( 'Import Demo News', 'oac-theme' ),
		'manage_options',
		'oac-import-demo-news',
		'oac_news_import_render_admin_page'
	);
}
add_action( 'admin_menu', 'oac_news_import_add_admin_page' );

function oac_news_import_render_admin_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You are not allowed to import news.', 'oac-theme' ) );
	}
	$articles = oac_demo_news_articles();
	$status = isset( $_GET['news_import_status'] ) ? sanitize_key( wp_unslash( $_GET['news_import_status'] ) ) : '';
	$count = isset( $_GET['news_import_count'] ) ? absint( $_GET['news_import_count'] ) : 0;
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Import Demo Astronomy & Vastu News', 'oac-theme' ); ?></h1>
		<p><?php esc_html_e( 'Add sample international astronomy and Vastu articles with featured images. Re-running the importer will not duplicate articles.', 'oac-theme' ); ?></p>
		<?php if ( 'imported' === $status ) : ?>
			<div class="notice notice-success"><p><?php echo esc_html( sprintf( _n( '%d demo news article was imported or already existed.', '%d demo news articles were imported or already existed.', $count, 'oac-theme' ), $count ) ); ?></p></div>
		<?php elseif ( 'none' === $status ) : ?>
			<div class="notice notice-warning"><p><?php esc_html_e( 'Select at least one demo article.', 'oac-theme' ); ?></p></div>
		<?php endif; ?>
		<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
			<input type="hidden" name="action" value="oac_import_demo_news">
			<?php wp_nonce_field( 'oac_import_demo_news' ); ?>
			<table class="widefat striped">
				<thead><tr><th class="check-column"><span class="screen-reader-text">Select</span></th><th><?php esc_html_e( 'Article', 'oac-theme' ); ?></th><th><?php esc_html_e( 'Category', 'oac-theme' ); ?></th><th><?php esc_html_e( 'Status', 'oac-theme' ); ?></th></tr></thead>
				<tbody>
				<?php foreach ( $articles as $key => $article ) : ?>
					<?php $existing = oac_news_import_find( $key ); ?>
					<tr>
						<td class="check-column"><input type="checkbox" name="news_articles[]" value="<?php echo esc_attr( $key ); ?>"></td>
						<td><strong><?php echo esc_html( $article['title'] ); ?></strong></td>
						<td><?php echo esc_html( $article['category'] ); ?></td>
						<td><?php echo $existing ? esc_html__( 'Already imported', 'oac-theme' ) : esc_html__( 'Ready to import', 'oac-theme' ); ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<p><button class="button button-primary" type="submit"><?php esc_html_e( 'Import selected articles', 'oac-theme' ); ?></button></p>
		</form>
	</div>
	<?php
}

function oac_news_import_handle() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You are not allowed to import news.', 'oac-theme' ) );
	}
	check_admin_referer( 'oac_import_demo_news' );

	$admin_page = admin_url( 'edit.php?post_type=news&page=oac-import-demo-news' );
	$selected = isset( $_POST['news_articles'] ) ? array_map( 'sanitize_key', (array) wp_unslash( $_POST['news_articles'] ) ) : array();
	if ( ! $selected ) {
		wp_safe_redirect( add_query_arg( 'news_import_status', 'none', $admin_page ) );
		exit;
	}

	$articles = oac_demo_news_articles();
	$selected = array_values( array_intersect( array_keys( $articles ), $selected ) );
	$count = 0;
	foreach ( $selected as $index => $key ) {
		$result = oac_news_import_create( $key, $articles[ $key ], $index );
		if ( ! is_wp_error( $result ) ) {
			$count++;
		}
	}
	flush_rewrite_rules();
	wp_safe_redirect( add_query_arg( array( 'news_import_status' => 'imported', 'news_import_count' => $count ), $admin_page ) );
	exit;
}
add_action( 'admin_post_oac_import_demo_news', 'oac_news_import_handle' );
