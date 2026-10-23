<section class="astrology section" aria-labelledby="astrology-title">
	<div class="site-width astrology__panel">
		<div class="astrology__copy" data-animate="fade-right">
			<p class="eyebrow eyebrow--coral"><?php esc_html_e( 'A practice with perspective', 'oac-theme' ); ?></p>
			<h2 id="astrology-title" data-animate="words"><?php esc_html_e( 'Master astrology. Read life with clarity.', 'oac-theme' ); ?></h2>
			<p><?php esc_html_e( 'Build a thoughtful foundation in astrology with flexible online lessons taught by experienced practitioners. Learn at your own pace, wherever you are.', 'oac-theme' ); ?></p>
			<?php get_template_part( 'template-parts/components/button', null, array( 'text' => __( 'Explore astrology courses', 'oac-theme' ), 'url' => home_url( '/our-courses/' ), 'variant' => 'coral' ) ); ?>
		</div>
		<div class="astrology__image"><img src="<?php echo esc_url( oac_upload_url( '2025/04/Untitled-design-19.png' ) ); ?>" alt="<?php esc_attr_e( 'Vedic astrology zodiac chart', 'oac-theme' ); ?>" loading="lazy" data-scroll-effect="scale"></div>
	</div>
</section>