<?php
get_header();

while ( have_posts() ) :
	the_post();
	$course_id  = get_the_ID();
	$tagline    = oac_course_field( 'course_tagline', $course_id );
	$badge      = oac_course_field( 'course_badge', $course_id );
	$image      = oac_course_cover_url( $course_id );
	$level      = oac_course_field( 'course_level', $course_id );
	$format     = oac_course_field( 'course_format', $course_id );
	$duration   = oac_course_field( 'course_duration', $course_id );
	$price      = oac_course_field( 'course_price', $course_id );
	$lesson_count = oac_course_field( 'course_lesson_count', $course_id );
	$benefits   = oac_course_field( 'course_benefits', $course_id );
	$curriculum = oac_course_field( 'course_curriculum', $course_id );
	$enroll_url = oac_course_field( 'course_enrollment_url', $course_id );
	$enroll_label = oac_course_field( 'course_enrollment_label', $course_id );
	$categories = oac_course_categories( $course_id );
	?>
	<main id="course-page" class="course-page">
		<section class="course-hero" aria-labelledby="course-title">
			<div class="site-width course-hero__inner<?php echo $image ? '' : ' course-hero__inner--no-image'; ?>">
				<div class="course-hero__content" data-animate="fade-up">
					<p class="eyebrow eyebrow--coral"><?php echo esc_html( $badge ? $badge : __( 'Online course', 'oac-theme' ) ); ?></p>
					<h1 id="course-title" data-animate="words" data-trigger="load"><?php the_title(); ?></h1>
					<?php if ( $tagline ) : ?>
						<p class="course-hero__summary"><?php echo esc_html( $tagline ); ?></p>
					<?php elseif ( has_excerpt() ) : ?>
						<p class="course-hero__summary"><?php echo esc_html( get_the_excerpt() ); ?></p>
					<?php endif; ?>
					<ul class="courses-meta" aria-label="<?php esc_attr_e( 'Course details', 'oac-theme' ); ?>">
						<?php if ( $categories ) : ?><li><?php echo esc_html( $categories[0]->name ); ?></li><?php endif; ?>
						<?php if ( $level ) : ?><li><?php echo esc_html( ucwords( str_replace( '-', ' ', $level ) ) ); ?></li><?php endif; ?>
						<?php if ( $format ) : ?><li><?php echo esc_html( ucwords( str_replace( '-', ' ', $format ) ) ); ?></li><?php endif; ?>
						<?php if ( $duration ) : ?><li><?php echo esc_html( $duration ); ?> <?php esc_html_e( 'access', 'oac-theme' ); ?></li><?php endif; ?>
					</ul>
				</div>
				<?php if ( $image ) : ?>
					<div class="course-hero__image" data-animate="fade-left">
						<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" fetchpriority="high">
					</div>
				<?php endif; ?>
			</div>
		</section>

		<?php if ( $price || $enroll_url || $lesson_count || $duration ) : ?>
			<section class="course-purchase" aria-label="<?php esc_attr_e( 'Course enrollment', 'oac-theme' ); ?>">
				<div class="site-width course-purchase__inner" data-animate="fade-up">
					<div class="course-purchase__details">
						<?php if ( $price ) : ?><div><span><?php esc_html_e( 'Course fee', 'oac-theme' ); ?></span><strong><?php echo esc_html( $price ); ?></strong></div><?php endif; ?>
						<?php if ( $duration ) : ?><div><span><?php esc_html_e( 'Access period', 'oac-theme' ); ?></span><strong><?php echo esc_html( $duration ); ?></strong></div><?php endif; ?>
						<?php if ( $lesson_count ) : ?><div><span><?php esc_html_e( 'Course content', 'oac-theme' ); ?></span><strong><?php echo esc_html( $lesson_count ); ?></strong></div><?php endif; ?>
					</div>
					<?php if ( $enroll_url ) : ?>
						<a class="button button--coral" href="<?php echo esc_url( $enroll_url ); ?>" target="_blank" rel="noopener noreferrer">
							<?php echo esc_html( $enroll_label ? $enroll_label : __( 'Explore enrollment', 'oac-theme' ) ); ?><span aria-hidden="true">→</span>
						</a>
					<?php endif; ?>
				</div>
			</section>
		<?php endif; ?>

		<?php if ( get_the_content() ) : ?>
			<section class="section course-overview" aria-labelledby="course-overview-title">
				<div class="site-width course-overview__inner">
					<header class="course-overview__heading" data-animate="fade-up">
						<div class="course-overview__eyebrow">
							<p class="eyebrow"><?php esc_html_e( 'About this course', 'oac-theme' ); ?></p>
							<span aria-hidden="true"><?php esc_html_e( 'Course overview', 'oac-theme' ); ?></span>
						</div>
						<h2 id="course-overview-title"><?php esc_html_e( 'A clear path to practical understanding.', 'oac-theme' ); ?></h2>
					</header>
					<div class="course-overview__body" data-animate="fade-up" data-delay="0.1">
						<div class="course-rich-content"><?php the_content(); ?></div>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<?php if ( is_array( $benefits ) && $benefits ) : ?>
			<section class="section course-benefits" aria-labelledby="course-benefits-title">
				<div class="site-width">
					<div class="section-heading section-heading--center" data-animate="fade-up">
						<p class="eyebrow"><?php esc_html_e( 'Your learning experience', 'oac-theme' ); ?></p>
						<h2 id="course-benefits-title" data-animate="words"><?php esc_html_e( 'Designed to help you learn with confidence.', 'oac-theme' ); ?></h2>
					</div>
					<ul class="course-benefits__grid" data-animate-group="fade-up" data-stagger="0.08">
						<?php foreach ( $benefits as $row ) : ?>
							<?php if ( ! empty( $row['benefit'] ) ) : ?>
								<li data-animate-item><span aria-hidden="true">✓</span><?php echo esc_html( $row['benefit'] ); ?></li>
							<?php endif; ?>
						<?php endforeach; ?>
					</ul>
				</div>
			</section>
		<?php endif; ?>

		<?php if ( is_array( $curriculum ) && $curriculum ) : ?>
			<section class="section course-curriculum" aria-labelledby="course-curriculum-title">
				<div class="site-width course-content-grid">
					<header class="course-section-heading" data-animate="fade-right">
						<p class="eyebrow"><?php esc_html_e( 'What you will study', 'oac-theme' ); ?></p>
						<h2 id="course-curriculum-title" data-animate="words"><?php esc_html_e( 'A structured learning journey.', 'oac-theme' ); ?></h2>
					</header>
					<ol class="course-curriculum__list" data-animate-group="fade-up" data-stagger="0.08">
						<?php foreach ( $curriculum as $index => $module ) : ?>
							<?php if ( ! empty( $module['module_title'] ) ) : ?>
								<li data-animate-item>
									<span class="course-curriculum__number"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
									<div><h3><?php echo esc_html( $module['module_title'] ); ?></h3>
										<?php if ( ! empty( $module['module_summary'] ) ) : ?><p><?php echo esc_html( $module['module_summary'] ); ?></p><?php endif; ?>
									</div>
								</li>
							<?php endif; ?>
						<?php endforeach; ?>
					</ol>
				</div>
			</section>
		<?php endif; ?>

		<?php get_template_part( 'template-parts/sections/courses/faq' ); ?>

		<?php if ( $enroll_url ) : ?>
			<section class="course-final-cta">
				<div class="site-width course-final-cta__inner">
					<div><p class="eyebrow eyebrow--coral"><?php esc_html_e( 'Ready to begin?', 'oac-theme' ); ?></p><h2><?php esc_html_e( 'Take the next step in your learning journey.', 'oac-theme' ); ?></h2></div>
					<a class="button button--coral" href="<?php echo esc_url( $enroll_url ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $enroll_label ? $enroll_label : __( 'Explore enrollment', 'oac-theme' ) ); ?><span aria-hidden="true">→</span></a>
				</div>
			</section>
		<?php endif; ?>
	</main>
	<?php
endwhile;

get_footer();
