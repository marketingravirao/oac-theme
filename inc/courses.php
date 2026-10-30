<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function oac_register_courses() {
	$labels = array(
		'name'                  => __( 'Courses', 'oac-theme' ),
		'singular_name'         => __( 'Course', 'oac-theme' ),
		'menu_name'             => __( 'Courses', 'oac-theme' ),
		'name_admin_bar'        => __( 'Course', 'oac-theme' ),
		'add_new'               => __( 'Add Course', 'oac-theme' ),
		'add_new_item'          => __( 'Add New Course', 'oac-theme' ),
		'new_item'              => __( 'New Course', 'oac-theme' ),
		'edit_item'             => __( 'Edit Course', 'oac-theme' ),
		'view_item'             => __( 'View Course', 'oac-theme' ),
		'all_items'             => __( 'All Courses', 'oac-theme' ),
		'search_items'          => __( 'Search Courses', 'oac-theme' ),
		'not_found'             => __( 'No courses found.', 'oac-theme' ),
		'not_found_in_trash'    => __( 'No courses found in Trash.', 'oac-theme' ),
		'featured_image'        => __( 'Course Cover Image', 'oac-theme' ),
		'set_featured_image'    => __( 'Set course cover image', 'oac-theme' ),
		'remove_featured_image' => __( 'Remove course cover image', 'oac-theme' ),
		'use_featured_image'    => __( 'Use as course cover image', 'oac-theme' ),
	);

	register_post_type(
		'course',
		array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_in_rest'       => true,
			'has_archive'        => 'our-courses',
			'menu_icon'          => 'dashicons-welcome-learn-more',
			'menu_position'      => 22,
			'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'revisions' ),
			'rewrite'            => array(
				'slug'       => 'courses',
				'with_front' => false,
			),
		)
	);

	register_taxonomy(
		'course_category',
		'course',
		array(
			'labels'            => array(
				'name'          => __( 'Course Categories', 'oac-theme' ),
				'singular_name' => __( 'Course Category', 'oac-theme' ),
				'search_items'  => __( 'Search Course Categories', 'oac-theme' ),
				'all_items'     => __( 'All Course Categories', 'oac-theme' ),
				'edit_item'     => __( 'Edit Course Category', 'oac-theme' ),
				'update_item'   => __( 'Update Course Category', 'oac-theme' ),
				'add_new_item'  => __( 'Add New Course Category', 'oac-theme' ),
				'new_item_name' => __( 'New Course Category Name', 'oac-theme' ),
				'menu_name'     => __( 'Categories', 'oac-theme' ),
			),
			'public'            => true,
			'hierarchical'      => true,
			'show_in_rest'      => true,
			'rewrite'           => array(
				'slug'       => 'course-category',
				'with_front' => false,
			),
		)
	);
}
add_action( 'init', 'oac_register_courses' );

function oac_register_course_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'                   => 'group_oac_course_details',
			'title'                 => __( 'Course Information', 'oac-theme' ),
			'fields'                => array(
				array(
					'key'          => 'field_oac_course_overview_tab',
					'label'        => __( 'Overview', 'oac-theme' ),
					'type'         => 'tab',
					'placement'    => 'top',
					'endpoint'     => 0,
				),
				array(
					'key'           => 'field_oac_course_tagline',
					'label'         => __( 'Short introduction', 'oac-theme' ),
					'name'          => 'course_tagline',
					'type'         => 'textarea',
					'rows'         => 3,
					'instructions' => __( 'A brief summary shown near the course title and on course cards.', 'oac-theme' ),
					'wrapper'       => array( 'width' => '100' ),
				),
				array(
					'key'           => 'field_oac_course_badge',
					'label'         => __( 'Small label', 'oac-theme' ),
					'name'          => 'course_badge',
					'type'          => 'text',
					'instructions'  => __( 'Optional label such as “Self-paced” or “Masterclass”.', 'oac-theme' ),
					'wrapper'       => array( 'width' => '50' ),
				),
				array(
					'key'           => 'field_oac_course_cover',
					'label'         => __( 'Course cover image', 'oac-theme' ),
					'name'          => 'course_cover_image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
					'library'       => 'all',
					'instructions'  => __( 'Choose a clear course image. If empty, the Featured Image is used.', 'oac-theme' ),
					'wrapper'       => array( 'width' => '50' ),
				),
				array(
					'key'          => 'field_oac_course_featured',
					'label'        => __( 'Feature this course', 'oac-theme' ),
					'name'         => 'course_featured',
					'type'         => 'true_false',
					'ui'           => 1,
					'ui_on_text'   => __( 'Featured', 'oac-theme' ),
					'ui_off_text'  => __( 'Standard', 'oac-theme' ),
					'instructions' => __( 'Show this course in the featured area at the top of the Courses page. Feature one course at a time.', 'oac-theme' ),
				),
				array(
					'key'          => 'field_oac_course_legacy_slug',
					'label'        => __( 'Previous page slug (optional)', 'oac-theme' ),
					'name'         => 'course_legacy_slug',
					'type'         => 'text',
					'placeholder'  => __( 'For example: numerology-1', 'oac-theme' ),
					'instructions' => __( 'Only use this when replacing an existing course page. Enter the old page slug without slashes to redirect visitors to this course.', 'oac-theme' ),
				),
				array(
					'key'       => 'field_oac_course_details_tab',
					'label'     => __( 'Course Details', 'oac-theme' ),
					'type'      => 'tab',
					'placement' => 'top',
					'endpoint'  => 0,
				),
				array(
					'key'          => 'field_oac_course_level',
					'label'        => __( 'Learning level', 'oac-theme' ),
					'name'         => 'course_level',
					'type'         => 'select',
					'choices'      => array(
						'beginner'     => __( 'Beginner', 'oac-theme' ),
						'intermediate' => __( 'Intermediate', 'oac-theme' ),
						'advanced'     => __( 'Advanced', 'oac-theme' ),
						'all-levels'   => __( 'All levels', 'oac-theme' ),
					),
					'allow_null'   => 1,
					'ui'           => 1,
					'wrapper'      => array( 'width' => '33' ),
				),
				array(
					'key'          => 'field_oac_course_format',
					'label'        => __( 'Learning format', 'oac-theme' ),
					'name'         => 'course_format',
					'type'         => 'select',
					'choices'      => array(
						'self-paced' => __( 'Self-paced', 'oac-theme' ),
						'live'       => __( 'Live classes', 'oac-theme' ),
						'hybrid'     => __( 'Live and recorded', 'oac-theme' ),
					),
					'allow_null'   => 1,
					'ui'           => 1,
					'wrapper'      => array( 'width' => '33' ),
				),
				array(
					'key'          => 'field_oac_course_duration',
					'label'        => __( 'Access period', 'oac-theme' ),
					'name'         => 'course_duration',
					'type'         => 'text',
					'placeholder'  => __( 'For example: 6 months', 'oac-theme' ),
					'wrapper'      => array( 'width' => '34' ),
				),
				array(
					'key'          => 'field_oac_course_price',
					'label'        => __( 'Course price', 'oac-theme' ),
					'name'         => 'course_price',
					'type'         => 'text',
					'placeholder'  => __( 'For example: $125', 'oac-theme' ),
					'instructions' => __( 'Enter the price exactly as you want it displayed.', 'oac-theme' ),
					'wrapper'      => array( 'width' => '33' ),
				),
				array(
					'key'          => 'field_oac_course_lesson_count',
					'label'        => __( 'Number of lessons', 'oac-theme' ),
					'name'         => 'course_lesson_count',
					'type'         => 'text',
					'placeholder'  => __( 'For example: 4 video lessons', 'oac-theme' ),
					'wrapper'      => array( 'width' => '33' ),
				),
				array(
					'key'          => 'field_oac_course_enrollment_url',
					'label'        => __( 'Enrollment link', 'oac-theme' ),
					'name'         => 'course_enrollment_url',
					'type'         => 'url',
					'instructions' => __( 'Paste the secure checkout or enrollment page link.', 'oac-theme' ),
					'wrapper'      => array( 'width' => '67' ),
				),
				array(
					'key'          => 'field_oac_course_enrollment_label',
					'label'        => __( 'Button text', 'oac-theme' ),
					'name'         => 'course_enrollment_label',
					'type'         => 'text',
					'default_value' => __( 'Explore enrollment', 'oac-theme' ),
					'wrapper'      => array( 'width' => '33' ),
				),
				array(
					'key'       => 'field_oac_course_benefits_tab',
					'label'     => __( 'Benefits & Learning', 'oac-theme' ),
					'type'      => 'tab',
					'placement' => 'top',
					'endpoint'  => 0,
				),
				array(
					'key'          => 'field_oac_course_benefits',
					'label'        => __( 'Course benefits', 'oac-theme' ),
					'name'         => 'course_benefits',
					'type'         => 'repeater',
					'layout'       => 'table',
					'button_label' => __( 'Add a benefit', 'oac-theme' ),
					'instructions' => __( 'Add the key benefits learners receive, such as worksheets, community access, or a certificate.', 'oac-theme' ),
					'sub_fields'   => array(
						array(
							'key'      => 'field_oac_course_benefit',
							'label'    => __( 'Benefit', 'oac-theme' ),
							'name'     => 'benefit',
							'type'     => 'text',
							'required' => 1,
						),
					),
				),
				array(
					'key'          => 'field_oac_course_curriculum',
					'label'        => __( 'Curriculum modules', 'oac-theme' ),
					'name'         => 'course_curriculum',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => __( 'Add a module', 'oac-theme' ),
					'instructions' => __( 'Add course modules in the order learners should follow them.', 'oac-theme' ),
					'sub_fields'   => array(
						array(
							'key'      => 'field_oac_course_module_title',
							'label'    => __( 'Module title', 'oac-theme' ),
							'name'     => 'module_title',
							'type'     => 'text',
							'required' => 1,
						),
						array(
							'key'         => 'field_oac_course_module_summary',
							'label'       => __( 'What learners will cover', 'oac-theme' ),
							'name'        => 'module_summary',
							'type'        => 'textarea',
							'rows'        => 2,
						),
					),
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'course',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'active'                => true,
			'show_in_rest'          => 1,
		)
	);
}
add_action( 'acf/init', 'oac_register_course_fields' );

function oac_keep_single_featured_course( $post_id ) {
	$post_id = absint( $post_id );
	if ( ! $post_id || 'course' !== get_post_type( $post_id ) || ! function_exists( 'get_field' ) || ! get_field( 'course_featured', $post_id ) ) {
		return;
	}

	$other_featured_courses = get_posts(
		array(
			'post_type'      => 'course',
			'post_status'    => 'any',
			'posts_per_page' => -1,
			'fields'         => 'ids',
			'post__not_in'   => array( $post_id ),
			'meta_key'       => 'course_featured',
			'meta_value'     => '1',
		)
	);

	foreach ( $other_featured_courses as $other_course_id ) {
		update_field( 'course_featured', false, $other_course_id );
	}
}
add_action( 'acf/save_post', 'oac_keep_single_featured_course', 20 );

function oac_course_field( $field_name, $post_id = 0 ) {
	if ( ! function_exists( 'get_field' ) ) {
		return null;
	}

	return get_field( $field_name, $post_id ? $post_id : get_the_ID() );
}

function oac_course_cover_url( $post_id = 0 ) {
	$post_id = $post_id ? $post_id : get_the_ID();
	$image   = oac_course_field( 'course_cover_image', $post_id );

	if ( is_array( $image ) && ! empty( $image['url'] ) ) {
		return esc_url( $image['url'] );
	}

	if ( is_numeric( $image ) ) {
		$image_url = wp_get_attachment_image_url( (int) $image, 'large' );
		if ( $image_url ) {
			return esc_url( $image_url );
		}
	}

	$image_url = get_post_meta( $post_id, 'course_cover_image', true );
	if ( is_string( $image_url ) && wp_http_validate_url( $image_url ) ) {
		return esc_url( $image_url );
	}

	return get_the_post_thumbnail_url( $post_id, 'large' );
}

function oac_course_categories( $post_id = 0 ) {
	$terms = get_the_terms( $post_id ? $post_id : get_the_ID(), 'course_category' );

	return is_array( $terms ) ? $terms : array();
}

function oac_course_admin_columns( $columns ) {
	$columns['course_cover']    = __( 'Cover', 'oac-theme' );
	$columns['course_category'] = __( 'Course Category', 'oac-theme' );
	$columns['course_price']    = __( 'Price', 'oac-theme' );
	$columns['course_featured'] = __( 'Featured', 'oac-theme' );

	return $columns;
}
add_filter( 'manage_course_posts_columns', 'oac_course_admin_columns' );

function oac_course_admin_column_content( $column, $post_id ) {
	if ( 'course_cover' === $column ) {
		$image = oac_course_cover_url( $post_id );
		echo $image ? '<img src="' . esc_url( $image ) . '" alt="" style="width:52px;height:42px;object-fit:cover;border-radius:4px;">' : '&mdash;';
	}

	if ( 'course_category' === $column ) {
		$terms = oac_course_categories( $post_id );
		echo esc_html( $terms ? implode( ', ', wp_list_pluck( $terms, 'name' ) ) : '—' );
	}

	if ( 'course_price' === $column ) {
		echo esc_html( (string) oac_course_field( 'course_price', $post_id ) ?: '—' );
	}

	if ( 'course_featured' === $column ) {
		echo oac_course_field( 'course_featured', $post_id ) ? esc_html__( 'Yes', 'oac-theme' ) : '—';
	}
}
add_action( 'manage_course_posts_custom_column', 'oac_course_admin_column_content', 10, 2 );

function oac_course_acf_admin_notice() {
	if ( function_exists( 'acf_add_local_field_group' ) || ! function_exists( 'get_current_screen' ) ) {
		return;
	}

	$screen = get_current_screen();
	if ( ! $screen || 'course' !== $screen->post_type ) {
		return;
	}
	?>
	<div class="notice notice-warning">
		<p><?php esc_html_e( 'Course detail fields require ACF Pro. Install and activate ACF Pro to manage course highlights, pricing, curriculum, enrollment links, and FAQs.', 'oac-theme' ); ?></p>
	</div>
	<?php
}
add_action( 'admin_notices', 'oac_course_acf_admin_notice' );

function oac_redirect_legacy_numerology_course() {
	if ( ! is_page() ) {
		return;
	}

	global $post;
	if ( ! $post instanceof WP_Post ) {
		return;
	}

	$legacy_slug   = $post->post_name;
	$legacy_courses = get_posts(
		array(
			'post_type'      => 'course',
			'post_status'    => 'publish',
			'posts_per_page' => 1,
			'meta_key'       => 'course_legacy_slug',
			'meta_value'     => $legacy_slug,
		)
	);
	$course = $legacy_courses ? $legacy_courses[0] : false;
	if ( ! $course && 'numerology-1' === $legacy_slug ) {
		$course = get_page_by_path( 'numerology', OBJECT, 'course' );
	}

	if ( ! $course instanceof WP_Post || 'publish' !== $course->post_status ) {
		return;
	}

	wp_safe_redirect( get_permalink( $course ), 301, 'OAC Course Migration' );
	exit;
}
add_action( 'template_redirect', 'oac_redirect_legacy_numerology_course' );
