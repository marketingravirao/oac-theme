<section class="page-hero hero" aria-roledescription="carousel" aria-label="<?php esc_attr_e( 'Featured content', 'oac-theme' ); ?>">
	<div class="hero__track" data-home-hero-slider>
		<?php
		$hero_slides = array(
			array(
				'image' => '2026/11/astrology_banner_no_text_3150x1060-scaled.png',
				'title_id' => 'hero-title',
		 ),
			array(
				'image' => '2026/11/Dr.-Rao-Beige-Hero-section-Beige.png',
				'title_id' => 'hero-title-second',
			),
		);
		foreach ( $hero_slides as $index => $hero_slide ) :
		?>
			<div class="hero__slide<?php echo $index === 0 ? ' hero__slide--blue' : ' hero__slide--beige'; ?>"<?php echo $index === 0 ? '' : ' aria-hidden="true"'; ?> data-hero-slide>
				<div class="hero__media" aria-hidden="true">
					<img src="<?php echo esc_url( oac_upload_url( $hero_slide['image'] ) ); ?>" alt=""<?php echo $index === 0 ? ' fetchpriority="high"' : ' loading="lazy"'; ?>>
				</div>
				<div class="site-width hero__content">
					<p class="eyebrow"><?php esc_html_e( 'Online Astrology Classes', 'oac-theme' ); ?></p>
					<h1 id="<?php echo esc_attr( $hero_slide['title_id'] ); ?>"><?php esc_html_e( 'The Ancient Science of', 'oac-theme' ); ?> <span class="hero__jyotisha">Jyotisha</span><?php esc_html_e(', Made for Modern Minds.', 'oac-theme' ); ?></h1>
					<p class="hero__intro"><?php esc_html_e( 'Authentic Vedic Astrology for modern people. Learn online, in your language, from Dr. Ravi Rao, with 30+ years of teaching and practice behind every lesson.', 'oac-theme' ); ?></p>
					<div class="hero__actions">
						<?php get_template_part( 'template-parts/components/button', null, array( 'text' => __( 'Explore courses', 'oac-theme' ), 'url' => home_url( '/our-courses/' ), 'variant' => 'coral' ) ); ?>
						<?php get_template_part( 'template-parts/components/button', null, array( 'text' => __( 'Discover our mission', 'oac-theme' ), 'url' => '#mission', 'variant' => 'outline' ) ); ?>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="hero__controls" aria-label="<?php esc_attr_e( 'Hero slides', 'oac-theme' ); ?>">
		<button class="hero__dot is-active" type="button" aria-label="<?php esc_attr_e( 'Show slide 1', 'oac-theme' ); ?>" aria-current="true" data-hero-dot="0"></button>
		<button class="hero__dot" type="button" aria-label="<?php esc_attr_e( 'Show slide 2', 'oac-theme' ); ?>" aria-current="false" data-hero-dot="1"></button>
	</div>
</section>