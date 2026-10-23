<section class="about-journey section" aria-labelledby="about-journey-title">
	<div class="site-width">
		<div class="about-journey__panel">
			<div class="section-heading" data-animate="fade-up">
				<p class="eyebrow"><?php esc_html_e( 'Contributions to the astrology community', 'oac-theme' ); ?></p>
				<h2 id="about-journey-title" data-animate="words"><?php esc_html_e( 'Dr. Ravi Rao’s Astrology Journey Since 1990', 'oac-theme' ); ?></h2>
				<p><?php esc_html_e( 'A continuous contribution to teaching, mentoring, and guiding students in Vedic Astrology across India and the global community.', 'oac-theme' ); ?></p>
			</div>
			<ol class="about-timeline" data-animate-group="fade-up" data-stagger="0.08">
				<?php foreach ( oac_about_timeline() as $milestone ) : ?>
					<li class="about-timeline__item" data-animate-item>
						<h3><?php echo esc_html( $milestone['era'] ); ?></h3>
						<p><?php echo esc_html( $milestone['content'] ); ?></p>
					</li>
				<?php endforeach; ?>
			</ol>
			<div class="about-journey__action" data-animate="fade-up">
				<?php get_template_part( 'template-parts/components/button', null, array( 'text' => __( 'Find out more', 'oac-theme' ), 'url' => home_url( '/our-courses/' ), 'variant' => 'coral' ) ); ?>
			</div>
		</div>
	</div>
</section>