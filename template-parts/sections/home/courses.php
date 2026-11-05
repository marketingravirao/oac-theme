<?php
$courses_query = new WP_Query(
	array(
		'post_type'      => 'course',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'orderby'        => array( 'menu_order' => 'ASC', 'title' => 'ASC' ),
	)
);

if ( ! $courses_query->have_posts() ) {
	return;
}
?>
<section class="section home-courses" aria-labelledby="home-courses-title">
	<div class="site-width">
		<div class="section-heading" data-animate="fade-up">
			<p class="eyebrow"><?php esc_html_e( 'Explore our courses', 'oac-theme' ); ?></p>
			<h2 id="home-courses-title" data-animate="words"><?php esc_html_e( 'Choose your path', 'oac-theme' ); ?></h2>
		</div>
		<div class="home-courses__slider swiper" data-home-courses-slider>
			<div class="swiper-wrapper home-courses__grid">
			<?php
			while ( $courses_query->have_posts() ) :
				$courses_query->the_post();
				$course_id = get_the_ID();
				$image = oac_course_cover_url( $course_id );
				$summary = oac_course_field( 'course_tagline', $course_id ) ?: get_the_excerpt();
				$categories = oac_course_categories( $course_id );
				$level = oac_course_field( 'course_level', $course_id );
				$duration = oac_course_field( 'course_duration', $course_id );
				$enroll_url = oac_course_field( 'course_enrollment_url', $course_id );
				?>
				<article class="home-course-card swiper-slide" data-animate-item>
					<a class="home-course-card__image" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
						<?php if ( $image ) : ?>
							<img src="<?php echo esc_url( $image ); ?>" alt="" loading="lazy">
						<?php else : ?>
							<span class="home-course-card__placeholder" aria-hidden="true">OAC</span>
						<?php endif; ?>
					</a>
					<div class="home-course-card__content">
						<?php if ( $categories ) : ?>
							<p class="home-course-card__category"><?php echo esc_html( $categories[0]->name ); ?></p>
						<?php endif; ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php if ( $summary ) : ?>
							<p class="home-course-card__summary"><?php echo esc_html( wp_trim_words( wp_strip_all_tags( $summary ), 22 ) ); ?></p>
						<?php endif; ?>
						<?php if ( $level || $duration ) : ?>
							<ul class="home-course-card__meta" aria-label="<?php esc_attr_e( 'Course details', 'oac-theme' ); ?>">
								<?php if ( $level ) : ?><li><?php echo esc_html( ucwords( str_replace( '-', ' ', $level ) ) ); ?></li><?php endif; ?>
								<?php if ( $duration ) : ?><li><?php echo esc_html( $duration ); ?></li><?php endif; ?>
							</ul>
						<?php endif; ?>
						<div class="home-course-card__actions">
							<?php if ( $enroll_url ) : ?>
								<a class="button button--coral" href="<?php echo esc_url( $enroll_url ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Enroll Now', 'oac-theme' ); ?></a>
							<?php endif; ?>
							<a class="button button--outline" href="<?php the_permalink(); ?>"><?php esc_html_e( 'More Information', 'oac-theme' ); ?></a>
						</div>
					</div>
				</article>
			<?php endwhile; ?>
				</div>
			<div class="home-courses__controls" aria-label="<?php esc_attr_e( 'Course slides', 'oac-theme' ); ?>">
				<button class="home-courses__arrow home-courses__arrow--prev" type="button" aria-label="<?php esc_attr_e( 'Previous courses', 'oac-theme' ); ?>" data-courses-prev>
					<i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
				</button>
				<div class="home-courses__dots" data-courses-dots aria-label="<?php esc_attr_e( 'Choose course slide', 'oac-theme' ); ?>"></div>
				<button class="home-courses__arrow home-courses__arrow--next" type="button" aria-label="<?php esc_attr_e( 'Next courses', 'oac-theme' ); ?>" data-courses-next>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</button>
			</div>
		</div>
	</div>
</section>
<?php wp_reset_postdata(); ?>
