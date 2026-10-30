<?php
get_header();

$featured_query = new WP_Query(
	array(
		'post_type'      => 'course',
		'post_status'    => 'publish',
		'posts_per_page' => 1,
		'meta_key'       => 'course_featured',
		'meta_value'     => '1',
		'orderby'        => array(
			'menu_order' => 'ASC',
			'date'       => 'DESC',
		),
	)
);

if ( ! $featured_query->have_posts() ) {
	$featured_query = new WP_Query(
		array(
			'post_type'      => 'course',
			'post_status'    => 'publish',
			'posts_per_page' => 1,
			'orderby'        => array(
				'menu_order' => 'ASC',
				'date'       => 'DESC',
			),
		)
	);
}

$featured_id = $featured_query->have_posts() ? (int) $featured_query->posts[0]->ID : 0;
$courses_query = new WP_Query(
	array(
		'post_type'      => 'course',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'orderby'        => array(
			'menu_order' => 'ASC',
			'title'      => 'ASC',
		),
		'post__not_in'   => $featured_id ? array( $featured_id ) : array(),
	)
);
?>
<main id="courses-page" class="courses-page">
	<section class="courses-hero" aria-labelledby="courses-title">
		<div class="site-width courses-hero__inner">
			<h1 id="courses-title" data-animate="words" data-trigger="load"><?php esc_html_e( 'Our Courses', 'oac-theme' ); ?></h1>
			<p data-animate="fade-up" data-delay="0.1"><?php esc_html_e( 'Choose a course below to start your learning journey with Online Astrology Classes.', 'oac-theme' ); ?></p>
		</div>
	</section>

	<?php if ( $featured_id ) : ?>
		<?php
		$featured_post = get_post( $featured_id );
		$featured_image = oac_course_cover_url( $featured_id );
		$featured_summary = oac_course_field( 'course_tagline', $featured_id );
		if ( ! $featured_summary ) {
			$featured_summary = get_the_excerpt( $featured_id );
		}
		$featured_badge = oac_course_field( 'course_badge', $featured_id );
		?>
		<section class="courses-feature section" aria-label="<?php esc_attr_e( 'Featured course', 'oac-theme' ); ?>">
			<div class="site-width">
				<article class="courses-feature__card<?php echo $featured_image ? '' : ' courses-feature__card--no-image'; ?>" data-animate="fade-up">
					<?php if ( $featured_image ) : ?>
						<a class="courses-feature__image" href="<?php echo esc_url( get_permalink( $featured_post ) ); ?>" tabindex="-1" aria-hidden="true">
							<img src="<?php echo esc_url( $featured_image ); ?>" alt="" loading="lazy">
						</a>
					<?php endif; ?>
					<div class="courses-feature__content">
						<p class="eyebrow eyebrow--coral"><?php echo esc_html( $featured_badge ? $featured_badge : __( 'Featured course', 'oac-theme' ) ); ?></p>
						<h2><a href="<?php echo esc_url( get_permalink( $featured_post ) ); ?>"><?php echo esc_html( get_the_title( $featured_post ) ); ?></a></h2>
						<?php if ( $featured_summary ) : ?>
							<p><?php echo esc_html( wp_strip_all_tags( $featured_summary ) ); ?></p>
						<?php endif; ?>
						<?php
						$featured_level = oac_course_field( 'course_level', $featured_id );
						$featured_format = oac_course_field( 'course_format', $featured_id );
						$featured_duration = oac_course_field( 'course_duration', $featured_id );
						?>
						<ul class="courses-meta" aria-label="<?php esc_attr_e( 'Course details', 'oac-theme' ); ?>">
							<?php if ( $featured_level ) : ?><li><?php echo esc_html( ucwords( str_replace( '-', ' ', $featured_level ) ) ); ?></li><?php endif; ?>
							<?php if ( $featured_format ) : ?><li><?php echo esc_html( ucwords( str_replace( '-', ' ', $featured_format ) ) ); ?></li><?php endif; ?>
							<?php if ( $featured_duration ) : ?><li><?php echo esc_html( $featured_duration ); ?> <?php esc_html_e( 'access', 'oac-theme' ); ?></li><?php endif; ?>
						</ul>
						<a class="button button--coral" href="<?php echo esc_url( get_permalink( $featured_post ) ); ?>"><?php esc_html_e( 'Explore featured course', 'oac-theme' ); ?><span aria-hidden="true">→</span></a>
					</div>
				</article>
			</div>
		</section>
	<?php endif; ?>

	<section class="section courses-catalog" aria-labelledby="courses-catalog-title">
		<div class="site-width">
			<div class="section-heading" data-animate="fade-up">
				<p class="eyebrow"><?php esc_html_e( 'Our courses', 'oac-theme' ); ?></p>
				<h2 id="courses-catalog-title" data-animate="words"><?php esc_html_e( 'Explore Our Astrology Masterclasses.', 'oac-theme' ); ?></h2>
				<p><?php esc_html_e( 'Choose a course to see what you will learn, how the program works, and how to enroll.', 'oac-theme' ); ?></p>
			</div>
			<?php if ( $courses_query->have_posts() ) : ?>
				<div class="courses-grid" data-animate-group="fade-up" data-stagger="0.1">
					<?php
					while ( $courses_query->have_posts() ) :
						$courses_query->the_post();
						$course_id = get_the_ID();
						$image = oac_course_cover_url( $course_id );
						$summary = oac_course_field( 'course_tagline', $course_id );
						if ( ! $summary ) {
							$summary = get_the_excerpt();
						}
						$categories = oac_course_categories( $course_id );
						$level = oac_course_field( 'course_level', $course_id );
						$duration = oac_course_field( 'course_duration', $course_id );
						?>
						<article class="course-card" data-animate-item>
							<a class="course-card__image" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
								<?php if ( $image ) : ?>
									<img src="<?php echo esc_url( $image ); ?>" alt="" loading="lazy">
								<?php else : ?>
									<span class="course-card__image-placeholder" aria-hidden="true">OAC</span>
								<?php endif; ?>
							</a>
							<div class="course-card__content">
								<?php if ( $categories ) : ?><p class="course-card__category"><?php echo esc_html( $categories[0]->name ); ?></p><?php endif; ?>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php if ( $summary ) : ?><p><?php echo esc_html( wp_trim_words( wp_strip_all_tags( $summary ), 24 ) ); ?></p><?php endif; ?>
								<?php if ( $level || $duration ) : ?>
									<ul class="courses-meta">
										<?php if ( $level ) : ?><li><?php echo esc_html( ucwords( str_replace( '-', ' ', $level ) ) ); ?></li><?php endif; ?>
										<?php if ( $duration ) : ?><li><?php echo esc_html( $duration ); ?></li><?php endif; ?>
									</ul>
								<?php endif; ?>
								<a class="text-link" href="<?php the_permalink(); ?>"><span><?php esc_html_e( 'View course', 'oac-theme' ); ?></span><span aria-hidden="true">→</span></a>
							</div>
						</article>
					<?php endwhile; ?>
				</div>
			<?php elseif ( ! $featured_id ) : ?>
				<div class="courses-empty">
					<p><?php esc_html_e( 'Our courses are being prepared. Please check back soon.', 'oac-theme' ); ?></p>
				</div>
			<?php else : ?>
				<div class="courses-empty">
					<p><?php esc_html_e( 'More courses are coming soon. Explore the featured course above in the meantime.', 'oac-theme' ); ?></p>
				</div>
			<?php endif; ?>
		</div>
	</section>
	<?php get_template_part( 'template-parts/sections/courses/faq' ); ?>
</main>
<?php
wp_reset_postdata();
get_footer();
