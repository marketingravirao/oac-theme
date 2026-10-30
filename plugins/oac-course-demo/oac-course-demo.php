<?php
/**
 * Theme module: adds one editable Numerology demo course.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function oac_demo_course_find() {
	$courses = get_posts(
		array(
			'post_type'      => 'course',
			'post_status'    => 'any',
			'posts_per_page' => 1,
			'meta_key'       => '_oac_demo_course',
			'meta_value'     => '1',
		)
	);

	if ( $courses ) {
		return $courses[0];
	}

	return get_page_by_path( 'numerology-demo', OBJECT, 'course' );
}

function oac_demo_course_add_admin_page() {
	add_submenu_page(
		'edit.php?post_type=course',
		__( 'Generate Demo Course', 'oac-theme' ),
		__( 'Generate Demo Course', 'oac-theme' ),
		'edit_posts',
		'oac-generate-demo-course',
		'oac_demo_course_render_admin_page'
	);
}
add_action( 'admin_menu', 'oac_demo_course_add_admin_page' );

function oac_demo_course_render_admin_page() {
	if ( ! current_user_can( 'edit_posts' ) ) {
		wp_die( esc_html__( 'You are not allowed to manage courses.', 'oac-theme' ) );
	}

	$demo_course = oac_demo_course_find();
	$status      = isset( $_GET['demo_course_status'] ) ? sanitize_key( wp_unslash( $_GET['demo_course_status'] ) ) : '';
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Generate a Demo Course', 'oac-theme' ); ?></h1>
		<p><?php esc_html_e( 'Create one fully populated Numerology example course to preview the Courses layout and see how course information is organized.', 'oac-theme' ); ?></p>
		<?php if ( 'created' === $status ) : ?>
			<div class="notice notice-success is-dismissible"><p><?php esc_html_e( 'The demo course has been created and added to Courses.', 'oac-theme' ); ?></p></div>
		<?php elseif ( 'exists' === $status ) : ?>
			<div class="notice notice-info"><p><?php esc_html_e( 'A demo course already exists. Edit or delete it below before creating another.', 'oac-theme' ); ?></p></div>
		<?php elseif ( 'error' === $status ) : ?>
			<div class="notice notice-error"><p><?php echo esc_html( get_transient( 'oac_demo_course_error_' . get_current_user_id() ) ?: __( 'The demo course could not be created. Please try again.', 'oac-theme' ) ); ?></p></div>
			<?php delete_transient( 'oac_demo_course_error_' . get_current_user_id() ); ?>
		<?php endif; ?>

		<?php if ( $demo_course instanceof WP_Post ) : ?>
			<p>
				<strong><?php echo esc_html( get_the_title( $demo_course ) ); ?></strong>
				&mdash; <a href="<?php echo esc_url( get_edit_post_link( $demo_course->ID ) ); ?>"><?php esc_html_e( 'Edit demo course', 'oac-theme' ); ?></a>
				<?php if ( 'publish' === $demo_course->post_status ) : ?>
					| <a href="<?php echo esc_url( get_permalink( $demo_course ) ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'View course', 'oac-theme' ); ?></a>
				<?php endif; ?>
			</p>
		<?php else : ?>
			<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
				<input type="hidden" name="action" value="oac_generate_demo_course">
				<?php wp_nonce_field( 'oac_generate_demo_course' ); ?>
				<?php submit_button( __( 'Generate Demo Course', 'oac-theme' ), 'primary', 'submit', false ); ?>
			</form>
		<?php endif; ?>
	</div>
	<?php
}

function oac_demo_course_handle_generate() {
	if ( ! current_user_can( 'edit_posts' ) ) {
		wp_die( esc_html__( 'You are not allowed to manage courses.', 'oac-theme' ) );
	}
	check_admin_referer( 'oac_generate_demo_course' );

	$admin_page = admin_url( 'edit.php?post_type=course&page=oac-generate-demo-course' );
	$existing   = oac_demo_course_find();
	if ( $existing instanceof WP_Post ) {
		wp_safe_redirect( add_query_arg( 'demo_course_status', 'exists', $admin_page ) );
		exit;
	}

	$course_id = oac_demo_course_create();
	if ( is_wp_error( $course_id ) ) {
		set_transient( 'oac_demo_course_error_' . get_current_user_id(), $course_id->get_error_message(), HOUR_IN_SECONDS );
		wp_safe_redirect( add_query_arg( 'demo_course_status', 'error', $admin_page ) );
		exit;
	}

	wp_safe_redirect( add_query_arg( 'demo_course_status', 'created', $admin_page ) );
	exit;
}
add_action( 'admin_post_oac_generate_demo_course', 'oac_demo_course_handle_generate' );

function oac_demo_course_set_field( $post_id, $field_name, $field_key, $value ) {
	if ( function_exists( 'update_field' ) ) {
		update_field( $field_key, $value, $post_id );
		return;
	}

	update_post_meta( $post_id, $field_name, $value );
	update_post_meta( $post_id, '_' . $field_name, $field_key );
}

function oac_demo_course_create() {
	if ( ! post_type_exists( 'course' ) ) {
		return new WP_Error( 'course_type_unavailable', __( 'The Courses post type is not registered. Make sure the OAC theme is active.', 'oac-theme' ) );
	}
	$tagline = __( 'A comprehensive, self-paced blueprint to understanding core vibrations, name correction, and predictive destiny patterns. Start learning instantly upon enrollment.', 'oac-theme' );
	$post_id = wp_insert_post(
		array(
			'post_type'    => 'course',
			'post_status'  => 'publish',
			'post_title'   => __( 'Numerology: Decode Numbers & Destiny', 'oac-theme' ),
			'post_name'    => 'numerology-demo',
			'post_excerpt' => $tagline,
			'post_content' => '<p>' . esc_html__( 'Explore the meaning of numbers, their ruling planets, and the patterns they reveal. This self-paced Numerology masterclass includes four focused video lessons, guided learning materials, and practical blueprints for working with numbers, names, and life cycles.', 'oac-theme' ) . '</p>',
			'menu_order'   => 0,
		),
		true
	);

	if ( is_wp_error( $post_id ) ) {
		return $post_id;
	}
	update_post_meta( $post_id, '_oac_demo_course', '1' );

	$fields = array(
		array( 'course_tagline', 'field_oac_course_tagline', $tagline ),
		array( 'course_badge', 'field_oac_course_badge', __( 'Demo course · Masterclass Edition', 'oac-theme' ) ),
		array( 'course_featured', 'field_oac_course_featured', 1 ),
		array( 'course_legacy_slug', 'field_oac_course_legacy_slug', '' ),
		array( 'course_level', 'field_oac_course_level', 'beginner' ),
		array( 'course_format', 'field_oac_course_format', 'self-paced' ),
		array( 'course_duration', 'field_oac_course_duration', __( '6 months', 'oac-theme' ) ),
		array( 'course_price', 'field_oac_course_price', '$125' ),
		array( 'course_lesson_count', 'field_oac_course_lesson_count', __( '4 focused video lessons', 'oac-theme' ) ),
		array( 'course_enrollment_url', 'field_oac_course_enrollment_url', 'https://numerologycourse.onlineastrologyclasses.com' ),
		array( 'course_enrollment_label', 'field_oac_course_enrollment_label', __( 'Enroll on website', 'oac-theme' ) ),
	);

	foreach ( $fields as $field ) {
		oac_demo_course_set_field( $post_id, $field[0], $field[1], $field[2] );
	}

	$uploads   = wp_get_upload_dir();
	$image_url = trailingslashit( $uploads['baseurl'] ) . '2025/12/9.png';
	$image_id  = attachment_url_to_postid( $image_url );
	if ( $image_id ) {
		oac_demo_course_set_field( $post_id, 'course_cover_image', 'field_oac_course_cover', $image_id );
		set_post_thumbnail( $post_id, $image_id );
	} else {
		update_post_meta( $post_id, 'course_cover_image', $image_url );
		update_post_meta( $post_id, '_course_cover_image', 'field_oac_course_cover' );
	}

	oac_demo_course_set_field(
		$post_id,
		'course_benefits',
		'field_oac_course_benefits',
		array(
			array( 'benefit' => __( '4 focused video lessons', 'oac-theme' ) ),
			array( 'benefit' => __( '6 months access', 'oac-theme' ) ),
			array( 'benefit' => __( 'Private Astrology Community', 'oac-theme' ) ),
			array( 'benefit' => __( 'Certificate after completion', 'oac-theme' ) ),
			array( 'benefit' => __( 'MCQs for better understanding', 'oac-theme' ) ),
			array( 'benefit' => __( 'Mobile, laptop, and TV compatible', 'oac-theme' ) ),
			array( 'benefit' => __( 'Learn anytime, anywhere', 'oac-theme' ) ),
		)
	);

	oac_demo_course_set_field(
		$post_id,
		'course_curriculum',
		'field_oac_course_curriculum',
		array(
			array(
				'module_title'   => __( 'Birth Numbers & Ruling Planets (1–5)', 'oac-theme' ),
				'module_summary' => __( 'Birth number calculation, numbers 1–5 with ruling planets, and core personality traits.', 'oac-theme' ),
			),
			array(
				'module_title'   => __( 'Planetary Numbers (6–9)', 'oac-theme' ),
				'module_summary' => __( 'Venus and harmony, spiritual number 7, Saturn and success, and Mars with action and courage.', 'oac-theme' ),
			),
			array(
				'module_title'   => __( 'Direction Number', 'oac-theme' ),
				'module_summary' => __( 'Calculate the direction number from birth time and use it as a key for life guidance.', 'oac-theme' ),
			),
			array(
				'module_title'   => __( 'Destiny Number', 'oac-theme' ),
				'module_summary' => __( 'Derive a destiny number from the full birth date to explore life path, purpose, strengths, and challenges.', 'oac-theme' ),
			),
		)
	);

	$category = term_exists( 'Numerology', 'course_category' );
	if ( ! $category ) {
		$category = wp_insert_term( __( 'Numerology', 'oac-theme' ), 'course_category' );
	}
	if ( ! is_wp_error( $category ) && $category ) {
		$term_id  = is_array( $category ) ? (int) $category['term_id'] : (int) $category;
		$assigned = wp_set_object_terms( $post_id, array( $term_id ), 'course_category' );
		if ( is_wp_error( $assigned ) ) {
			return $assigned;
		}
	} elseif ( is_wp_error( $category ) ) {
		return $category;
	} else {
		return new WP_Error( 'course_category_unavailable', __( 'The Numerology course category could not be created.', 'oac-theme' ) );
	}

	return $post_id;
}
