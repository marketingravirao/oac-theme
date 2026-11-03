<?php
/**
 * Import the four astrology course products into the course post type.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function oac_course_products() {
	return array(
		'predictive-astrologer' => array(
			'title' => __( 'Predictive Astrologer', 'oac-theme' ),
			'badge' => __( 'Foundation Programme', 'oac-theme' ),
			'level' => 'beginner',
			'tagline' => __( 'Discover the foundations of Jyotisha and build a strong, practical base for astrological prediction through Nakshatras, zodiac signs, planetary characteristics, ascendants, houses, numerology, horary astrology, and practical principles.', 'oac-theme' ),
			'overview' => __( 'Predictive Astrologer is designed for learners beginning their journey into Jyotisha. The programme gradually introduces foundational ideas, moving from Nakshatras and zodiac signs to planetary representations, ascendants, houses, birth numbers, horary astrology, and magical astrology. Each section builds understanding through direct explanations and applied interpretation, helping learners observe chart factors, connect them to likely themes, and organize traditional principles into a practical predictive framework.', 'oac-theme' ),
			'benefits' => array( 'Recorded video lessons', 'Beginner-friendly explanations', 'Practical chart examples and exercises', 'Numerology and horary astrology foundations', 'Mobile, laptop, and TV-compatible learning', 'Learn at your own pace' ),
			'curriculum' => array(
				array( 'module_title' => __( 'Introduction to Astrology', 'oac-theme' ), 'module_summary' => __( 'Understand the purpose and scope of Jyotisha, the relationship between planets, signs, houses, and life experiences, and the basic structure of chart interpretation.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Nakshatras: Ashwini to Ashlesha', 'oac-theme' ), 'module_summary' => __( 'Study the first eight Nakshatras, their ruling planets, symbols, deities, qualities, and practical interpretive themes.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Nakshatras: Magha to Jyeshtha', 'oac-theme' ), 'module_summary' => __( 'Study royal, spiritual, intellectual, and transformative Nakshatra qualities and connect placements with personality and planetary results.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Nakshatras: Moola to Revati', 'oac-theme' ), 'module_summary' => __( 'Complete the Nakshatra journey from Moola to Revati and study the spiritual and karmic themes of the final nine stars.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Zodiac Signs (Rashi): Physical Traits', 'oac-theme' ), 'module_summary' => __( 'Study traditional physical characteristics associated with zodiac signs and how signs interact with planets and ascendants.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Zodiac Signs (Rashi): Mental Traits', 'oac-theme' ), 'module_summary' => __( 'Explore temperament, habits, decision-making styles, emotional tendencies, and communication patterns.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Zodiac Characters and Planetary Representation', 'oac-theme' ), 'module_summary' => __( 'Learn planetary meanings, signs, dignities, ownership, natural friendships, and traditional planetary symbolism.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Ascendants, Lords and Houses', 'oac-theme' ), 'module_summary' => __( 'Identify the ascendant and its lord, understand the twelve houses, and connect lords, houses, and planetary placements.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Birth Numbers and Sciences, Part 1', 'oac-theme' ), 'module_summary' => __( 'Calculate and interpret core birth numbers and study their relationship with planetary vibrations.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Birth Numbers and Sciences, Part 2', 'oac-theme' ), 'module_summary' => __( 'Study compound numbers, name-related influence, combinations, strengths, and caution areas through practical examples.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Horary Astrology, Part 1', 'oac-theme' ), 'module_summary' => __( 'Understand the purpose of horary astrology and learn to cast and interpret a chart using the ascendant, rulers, houses, and significators.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Horary Astrology, Part 2', 'oac-theme' ), 'module_summary' => __( 'Study timing, obstacles, favourable indications, complete examples, and disciplined interpretation.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Magical Astrology', 'oac-theme' ), 'module_summary' => __( 'Explore the traditional relationship between astrology and symbolic or corrective practices while maintaining responsible guidance.', 'oac-theme' ) ),
			),
		),
		'professional-astrologer' => array(
			'title' => __( 'Professional Astrologer', 'oac-theme' ),
			'badge' => __( 'Interpreter Programme', 'oac-theme' ),
			'level' => 'intermediate',
			'tagline' => __( 'Develop deeper horoscope interpretation skills through astronomy, the history of Vedic Astrology, planetary systems, detailed Bhava analysis, marriage matching, longevity assessment, and traditional predictive techniques.', 'oac-theme' ),
			'overview' => __( 'Professional Astrologer moves from familiar definitions to complete horoscope interpretation. The course introduces astronomy and Jyotisha history before exploring planetary systems, houses, marriage matching, longevity, and Balarishtas. Learners develop judgment discipline by connecting planetary strength, house ownership, aspects, relationships, and chart combinations before reaching conclusions.', 'oac-theme' ),
			'benefits' => array( 'Structured intermediate-level lessons', 'Astronomy and history foundations', 'Detailed Bhava analysis', 'Marriage compatibility principles', 'Traditional longevity framework', 'Responsible chart-judgment training' ),
			'curriculum' => array(
				array( 'module_title' => __( 'Astronomy (Khagol Shastra)', 'oac-theme' ), 'module_summary' => __( 'Study the astronomical foundation behind zodiac signs, planets, apparent movement, and horoscope calculations.', 'oac-theme' ) ),
				array( 'module_title' => __( 'History and Chronology of Vedic Astrology', 'oac-theme' ), 'module_summary' => __( 'Explore classical periods, major traditions, and the historical development of Jyotisha.', 'oac-theme' ) ),
				array( 'module_title' => __( 'The Solar System', 'oac-theme' ), 'module_summary' => __( 'Understand the planets and their symbolic role in astrology, including traditional uses of nodes and outer chart factors.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Houses (Bhavas)', 'oac-theme' ), 'module_summary' => __( 'Learn the primary meanings and relationships of the twelve houses and how signs and ownership modify them.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Judgement of Bhavas, Part 1', 'oac-theme' ), 'module_summary' => __( 'Learn house lordship, occupation, aspects, dignity, and first-level supporting or weakening factors.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Judgement of Bhavas, Part 2', 'oac-theme' ), 'module_summary' => __( 'Study functional benefic and malefic influences and use multiple chart factors instead of isolated yogas.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Judgement of Bhavas, Part 3', 'oac-theme' ), 'module_summary' => __( 'Review advanced combinations, connected houses, and complete chart synthesis through practical examples.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Marriage Matching, Part 1', 'oac-theme' ), 'module_summary' => __( 'Understand traditional compatibility factors, gunas, graha matching, and chart comparison.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Marriage Matching, Part 2', 'oac-theme' ), 'module_summary' => __( 'Study deeper compatibility factors and review complete matching examples with balanced judgment.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Longevity Assessment', 'oac-theme' ), 'module_summary' => __( 'Learn the classical framework for longevity indicators and study supportive and adverse factors cautiously.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Longevity and Balarishtas', 'oac-theme' ), 'module_summary' => __( 'Understand early-life indicators, mitigation factors, and responsible interpretation that avoids unnecessary alarm.', 'oac-theme' ) ),
			),
		),
		'master-of-astrology' => array(
			'title' => __( 'Master of Astrology', 'oac-theme' ),
			'badge' => __( 'Advanced Calculation Programme', 'oac-theme' ),
			'level' => 'advanced',
			'tagline' => __( 'Advance your Jyotisha expertise through Panchanga, Muhurta, horoscope casting, Vimshottari Dasha calculations, Shadbala, Mundane Astrology, and the Tajika system.', 'oac-theme' ),
			'overview' => __( 'Master of Astrology is an advanced programme covering the technical and predictive dimensions of Jyotisha. The curriculum combines Panchanga and Muhurta, chart casting, planetary positions, Vimshottari Dasha, Shadbala, Mundane Astrology, and the Tajika system with calculation steps and practical interpretation. Foundation and intermediate astrology knowledge are strongly recommended.', 'oac-theme' ),
			'benefits' => array( 'Step-by-step horoscope casting', 'Vimshottari Dasha practice', 'Systematic Shadbala instruction', 'Panchanga and Muhurta learning', 'Mundane Astrology foundations', 'Advanced Tajika techniques' ),
			'curriculum' => array(
				array( 'module_title' => __( 'Panchanga', 'oac-theme' ), 'module_summary' => __( 'Study Tithi, Vara, Nakshatra, Yoga, and Karana, their traditional meanings, and application to timing.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Muhurta (Electional Astrology), Part 1', 'oac-theme' ), 'module_summary' => __( 'Understand auspicious-time principles, lunar factors, weekdays, Nakshatras, Yogas, Karanas, and exclusions.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Muhurta (Electional Astrology), Part 2', 'oac-theme' ), 'module_summary' => __( 'Apply Muhurta principles through life-event examples and compare timing cautions responsibly.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Indo-Western Foundations: Planets, Bhavas and Rashi, Part 1', 'oac-theme' ), 'module_summary' => __( 'Connect classical Jyotisha concepts with modern chart presentation and understand different diagram styles.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Indo-Western Foundations: Planets, Bhavas and Rashi, Part 2', 'oac-theme' ), 'module_summary' => __( 'Apply comparative chart principles through examples and translate terminology across chart formats.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Horoscope Casting, Part 1', 'oac-theme' ), 'module_summary' => __( 'Learn birth data, time correction, chart construction, planetary placement, and chart verification.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Horoscope Casting: Shri Narendra Modi', 'oac-theme' ), 'module_summary' => __( 'Review a complete public-chart example and study the organization and interpretation of chart findings.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Planetary Positions in the Rashi Chart', 'oac-theme' ), 'module_summary' => __( 'Learn how positions affect signs and houses, including conjunctions, aspects, dignities, and ownership.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Vimshottari Dasha Calculation', 'oac-theme' ), 'module_summary' => __( 'Understand Nakshatra-based Dasha sequences, birth balance, Mahadasha, Antardasha, and related periods.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Advanced Vimshottari Dasha System, Part 1', 'oac-theme' ), 'module_summary' => __( 'Study the interaction of Dashas with natal promises, Dasha and Bhukti lords, and transits.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Advanced Vimshottari Dasha System, Part 2', 'oac-theme' ), 'module_summary' => __( 'Apply the system through advanced charts and review cancellation factors, restrictions, and timing judgment.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Shadbala, Part 1', 'oac-theme' ), 'module_summary' => __( 'Understand positional, directional, temporal, and motional strength concepts for planets.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Shadbala, Part 2', 'oac-theme' ), 'module_summary' => __( 'Compare strong, weak, and moderated planetary effects and apply strength analysis to chart judgment.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Mundane Astrology, Part 1', 'oac-theme' ), 'module_summary' => __( 'Study world and event charts, eclipses, ingress charts, houses, planets, and collective interpretation.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Mundane Astrology, Part 2', 'oac-theme' ), 'module_summary' => __( 'Apply Mundane Astrology to examples with cautious language for public and world-level events.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Advanced Tajika System, Part 1', 'oac-theme' ), 'module_summary' => __( 'Learn annual-chart foundations, Muntha, Varshesh, Sahams, and yearly combinations.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Advanced Tajika System, Part 2', 'oac-theme' ), 'module_summary' => __( 'Study advanced annual Yogas and integrate Tajika timing with Dashas and transits.', 'oac-theme' ) ),
			),
		),
		'guru-of-astrology' => array(
			'title' => __( 'Guru of Astrology', 'oac-theme' ),
			'badge' => __( 'Mastery Programme', 'oac-theme' ),
			'level' => 'advanced',
			'tagline' => __( 'Deepen your mastery of Vedic Astrology through planetary transits, divisional charts, Ashtakavarga, Medical Astrology, and Jaimini Astrology, integrating specialized techniques for advanced analysis.', 'oac-theme' ),
			'overview' => __( 'Guru of Astrology is an advanced mastery programme for learners who want to integrate specialized methods into horoscope analysis. It covers Gochar transits, divisional charts, Ashtakavarga, Medical Astrology, and Jaimini Astrology. The course emphasizes synthesis across natal, divisional, transit, and sign-based systems. Medical topics are provided for astrology education only and do not replace qualified medical care.', 'oac-theme' ),
			'benefits' => array( 'Transit analysis and Kakshya concepts', 'Major divisional chart instruction', 'Ashtakavarga calculation and application', 'Traditional Medical Astrology with safety boundaries', 'Jaimini Chara Dasha and Yoga instruction', 'Advanced technique synthesis' ),
			'curriculum' => array(
				array( 'module_title' => __( 'Transit (Gochar): Kakshya Concept', 'oac-theme' ), 'module_summary' => __( 'Learn planetary transit strength and Kakshya analysis, connecting Gochar results with Dashas and natal promises.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Divisional Charts: D2 and D3', 'oac-theme' ), 'module_summary' => __( 'Study D2 for wealth and D3 for siblings and courage, and learn when divisional evidence supports natal interpretation.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Divisional Charts: D4, D7, D9, D10, D12 and D16', 'oac-theme' ), 'module_summary' => __( 'Study property, children, marriage, career, parents, vehicles, and other major divisional-chart applications.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Ashtakavarga, Part 1', 'oac-theme' ), 'module_summary' => __( 'Understand benefic points, sign assessment, basic bindus, and general or planetary strength patterns.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Ashtakavarga, Part 2', 'oac-theme' ), 'module_summary' => __( 'Apply Ashtakavarga to transits, houses, Sarvashtakavarga totals, and complete chart judgment.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Medical Astrology, Part 1', 'oac-theme' ), 'module_summary' => __( 'Learn traditional relationships among planets, signs, and body areas while establishing medical-safety boundaries.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Medical Astrology, Part 2', 'oac-theme' ), 'module_summary' => __( 'Study constitutional patterns, health-related combinations, and non-alarming interpretation.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Medical Astrology, Part 3', 'oac-theme' ), 'module_summary' => __( 'Explore timing factors, transits, and Dashas while avoiding diagnostic certainty.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Medical Astrology, Part 4', 'oac-theme' ), 'module_summary' => __( 'Review complete examples and combine planetary, divisional, and timing evidence with responsible guidance.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Jaimini Astrology: Foundations', 'oac-theme' ), 'module_summary' => __( 'Study Jaimini karakas, sign-based analysis, houses, basic Yogas, and differences from Parashari astrology.', 'oac-theme' ) ),
				array( 'module_title' => __( 'Jaimini Astrology: Chara Dasha and Yoga', 'oac-theme' ), 'module_summary' => __( 'Learn Chara Dasha periods, Jaimini Yogas, life-theme activation, and cross-system verification.', 'oac-theme' ) ),
			),
		),
	);
}

function oac_course_import_find( $product_key ) {
	$matches = get_posts( array(
		'post_type' => 'course',
		'post_status' => 'any',
		'posts_per_page' => 1,
		'meta_key' => '_oac_imported_product',
		'meta_value' => $product_key,
	) );
	return $matches ? $matches[0] : get_page_by_path( $product_key, OBJECT, 'course' );
}

function oac_course_import_add_admin_page() {
	add_submenu_page(
		'edit.php?post_type=course',
		__( 'Import Course Products', 'oac-theme' ),
		__( 'Import Course Products', 'oac-theme' ),
		'manage_options',
		'oac-import-course-products',
		'oac_course_import_render_admin_page'
	);
}
add_action( 'admin_menu', 'oac_course_import_add_admin_page' );

function oac_course_import_render_admin_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You are not allowed to import courses.', 'oac-theme' ) );
	}
	$products = oac_course_products();
	$status = isset( $_GET['course_import_status'] ) ? sanitize_key( wp_unslash( $_GET['course_import_status'] ) ) : '';
	$count = isset( $_GET['course_import_count'] ) ? absint( $_GET['course_import_count'] ) : 0;
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Import Course Products', 'oac-theme' ); ?></h1>
		<p><?php esc_html_e( 'Select the course products to add as individual Courses. Existing imported products will be retained and will not be duplicated.', 'oac-theme' ); ?></p>
		<?php if ( 'imported' === $status ) : ?>
			<div class="notice notice-success is-dismissible"><p><?php echo esc_html( sprintf( _n( '%d course product was imported.', '%d course products were imported.', $count, 'oac-theme' ), $count ) ); ?></p></div>
		<?php elseif ( 'error' === $status ) : ?>
			<div class="notice notice-error"><p><?php echo esc_html( get_transient( 'oac_course_import_error_' . get_current_user_id() ) ?: __( 'One or more courses could not be imported.', 'oac-theme' ) ); ?></p></div>
			<?php delete_transient( 'oac_course_import_error_' . get_current_user_id() ); ?>
		<?php elseif ( 'none' === $status ) : ?>
			<div class="notice notice-warning"><p><?php esc_html_e( 'Select at least one course product.', 'oac-theme' ); ?></p></div>
		<?php endif; ?>
		<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
			<input type="hidden" name="action" value="oac_import_course_products">
			<?php wp_nonce_field( 'oac_import_course_products' ); ?>
			<table class="widefat striped">
				<thead><tr><th class="check-column"><span class="screen-reader-text">Select</span></th><th><?php esc_html_e( 'Course Product', 'oac-theme' ); ?></th><th><?php esc_html_e( 'Level', 'oac-theme' ); ?></th><th><?php esc_html_e( 'Status', 'oac-theme' ); ?></th></tr></thead>
				<tbody>
				<?php foreach ( $products as $key => $product ) : ?>
					<?php $existing = oac_course_import_find( $key ); ?>
					<tr>
						<th class="check-column"><input type="checkbox" name="course_products[]" value="<?php echo esc_attr( $key ); ?>" <?php disabled( $existing instanceof WP_Post ); ?>></th>
						<td><strong><?php echo esc_html( $product['title'] ); ?></strong><br><small><?php echo esc_html( $product['tagline'] ); ?></small></td>
						<td><?php echo esc_html( ucwords( str_replace( '-', ' ', $product['level'] ) ) ); ?></td>
						<td><?php echo $existing instanceof WP_Post ? '<a href="' . esc_url( get_edit_post_link( $existing->ID ) ) . '">' . esc_html__( 'Already imported — Edit', 'oac-theme' ) . '</a>' : esc_html__( 'Not imported', 'oac-theme' ); ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<p><?php submit_button( __( 'Import Selected Courses', 'oac-theme' ), 'primary', 'submit', false ); ?></p>
		</form>
	</div>
	<?php
}

function oac_course_import_set_field( $post_id, $field_name, $field_key, $value ) {
	if ( function_exists( 'update_field' ) ) {
		update_field( $field_key, $value, $post_id );
		return;
	}
	update_post_meta( $post_id, $field_name, $value );
	update_post_meta( $post_id, '_' . $field_name, $field_key );
}

function oac_course_import_create( $product_key, $product, $featured = false ) {
	if ( ! post_type_exists( 'course' ) ) {
		return new WP_Error( 'course_type_unavailable', __( 'The Courses post type is not registered. Make sure the OAC theme is active.', 'oac-theme' ) );
	}
	$existing = oac_course_import_find( $product_key );
	if ( $existing instanceof WP_Post ) {
		return $existing->ID;
	}

	$post_id = wp_insert_post( array(
		'post_type' => 'course',
		'post_status' => 'publish',
		'post_title' => $product['title'],
		'post_name' => $product_key,
		'post_excerpt' => $product['tagline'],
		'post_content' => '<p>' . esc_html( $product['overview'] ) . '</p>',
		'menu_order' => 0,
	), true );
	if ( is_wp_error( $post_id ) ) {
		return $post_id;
	}

	update_post_meta( $post_id, '_oac_imported_product', $product_key );
	oac_course_import_set_field( $post_id, 'course_tagline', 'field_oac_course_tagline', $product['tagline'] );
	oac_course_import_set_field( $post_id, 'course_badge', 'field_oac_course_badge', $product['badge'] );
	oac_course_import_set_field( $post_id, 'course_featured', 'field_oac_course_featured', $featured ? 1 : 0 );
	oac_course_import_set_field( $post_id, 'course_level', 'field_oac_course_level', $product['level'] );
	oac_course_import_set_field( $post_id, 'course_format', 'field_oac_course_format', 'self-paced' );
	oac_course_import_set_field( $post_id, 'course_duration', 'field_oac_course_duration', '' );
	oac_course_import_set_field( $post_id, 'course_price', 'field_oac_course_price', '' );
	oac_course_import_set_field( $post_id, 'course_lesson_count', 'field_oac_course_lesson_count', sprintf( _n( '%d lesson module', '%d lesson modules', count( $product['curriculum'] ), 'oac-theme' ), count( $product['curriculum'] ) ) );
	oac_course_import_set_field( $post_id, 'course_enrollment_url', 'field_oac_course_enrollment_url', '' );
	oac_course_import_set_field( $post_id, 'course_enrollment_label', 'field_oac_course_enrollment_label', __( 'Enroll now', 'oac-theme' ) );

	$benefits = array();
	foreach ( $product['benefits'] as $benefit ) {
		$benefits[] = array( 'benefit' => $benefit );
	}
	oac_course_import_set_field( $post_id, 'course_benefits', 'field_oac_course_benefits', $benefits );
	oac_course_import_set_field( $post_id, 'course_curriculum', 'field_oac_course_curriculum', $product['curriculum'] );

	$category_name = $product['title'];
	$category = term_exists( $category_name, 'course_category' );
	if ( ! $category ) {
		$category = wp_insert_term( $category_name, 'course_category' );
	}
	if ( is_wp_error( $category ) ) {
		return $category;
	}
	$term_id = is_array( $category ) ? (int) $category['term_id'] : (int) $category;
	$assigned = wp_set_object_terms( $post_id, array( $term_id ), 'course_category' );
	if ( is_wp_error( $assigned ) ) {
		return $assigned;
	}

	return $post_id;
}

function oac_course_import_handle() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You are not allowed to import courses.', 'oac-theme' ) );
	}
	check_admin_referer( 'oac_import_course_products' );

	$admin_page = admin_url( 'edit.php?post_type=course&page=oac-import-course-products' );
	$selected = isset( $_POST['course_products'] ) ? array_map( 'sanitize_key', (array) wp_unslash( $_POST['course_products'] ) ) : array();
	if ( ! $selected ) {
		wp_safe_redirect( add_query_arg( 'course_import_status', 'none', $admin_page ) );
		exit;
	}

	$products = oac_course_products();
	$selected = array_values( array_intersect( array_keys( $products ), $selected ) );
	$imported = 0;
	$errors = array();

	foreach ( $selected as $index => $product_key ) {
		if ( 0 === $index && function_exists( 'update_field' ) ) {
			$featured_courses = get_posts( array(
				'post_type' => 'course',
				'post_status' => 'any',
				'posts_per_page' => -1,
				'fields' => 'ids',
				'meta_key' => 'course_featured',
				'meta_value' => '1',
			) );
			foreach ( $featured_courses as $featured_course_id ) {
				update_field( 'field_oac_course_featured', false, $featured_course_id );
			}
		}

		$result = oac_course_import_create( $product_key, $products[ $product_key ], 0 === $index );
		if ( is_wp_error( $result ) ) {
			$errors[] = $result->get_error_message();
		} elseif ( is_int( $result ) ) {
			$imported++;
		}
	}

	if ( $errors ) {
		set_transient( 'oac_course_import_error_' . get_current_user_id(), implode( ' ', array_unique( $errors ) ), HOUR_IN_SECONDS );
		wp_safe_redirect( add_query_arg( 'course_import_status', 'error', $admin_page ) );
		exit;
	}

	wp_safe_redirect( add_query_arg( array( 'course_import_status' => 'imported', 'course_import_count' => $imported ), $admin_page ) );
	exit;
}
add_action( 'admin_post_oac_import_course_products', 'oac_course_import_handle' );
