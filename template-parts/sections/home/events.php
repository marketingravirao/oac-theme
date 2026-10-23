<section class="events" id="events">
	<div class="site-width events__inner">
		<div data-animate="fade-left"><p class="eyebrow"><?php esc_html_e( 'Learn together', 'oac-theme' ); ?></p><h2 data-animate="words"><?php esc_html_e( 'Events that bring insight to life.', 'oac-theme' ); ?></h2></div>
		<div class="events__copy" data-animate="fade-right">
			<p><?php esc_html_e( 'Join sessions that connect astrological insight with everyday questions, shared learning, and new perspectives.', 'oac-theme' ); ?></p>
			<?php get_template_part( 'template-parts/components/button', null, array( 'text' => __( 'Ask about upcoming events', 'oac-theme' ), 'url' => home_url( '/contact/' ), 'variant' => 'light' ) ); ?>
		</div>
	</div>
</section>