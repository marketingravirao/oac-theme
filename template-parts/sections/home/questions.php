<section class="questions section" id="courses">
	<div class="site-width">
		<?php get_template_part( 'template-parts/components/section-heading', null, array( 'eyebrow' => __( 'What would you like to understand?', 'oac-theme' ), 'title' => __( 'Find a course that meets you where you are.', 'oac-theme' ), 'description' => __( 'Study astrology, earn a degree, and find meaning in the questions that matter to you.', 'oac-theme' ), 'align' => 'center', 'animation' => 'words' ) ); ?>
		<div class="topic-grid" data-animate-group="fade-up" data-stagger="0.08">
			<?php foreach ( oac_home_topics() as $index => $topic ) : ?>
				<?php get_template_part( 'template-parts/components/topic-card', null, array( 'number' => sprintf( '0%d', $index + 1 ), 'title' => $topic, 'url' => home_url( '/our-courses/' ) ) ); ?>
			<?php endforeach; ?>
		</div>
		<div class="questions__close" data-animate="fade-up">
			<h2><?php esc_html_e( 'Find the answers within yourself.', 'oac-theme' ); ?></h2>
			<p><?php esc_html_e( 'Join a free trial class and begin a transformative learning journey.', 'oac-theme' ); ?></p>
			<?php get_template_part( 'template-parts/components/button', null, array( 'text' => __( 'Explore courses', 'oac-theme' ), 'url' => home_url( '/our-courses/' ), 'variant' => 'navy' ) ); ?>
		</div>
	</div>
</section>