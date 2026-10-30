<section class="page-hero hero" aria-labelledby="hero-title">
	<div class="hero__media" aria-hidden="true"><img src="<?php echo esc_url( oac_upload_url( '/2026/10/oac-home-hero-banner-2.png' ) ); ?>" alt="" fetchpriority="high"></div>
	<div class="site-width hero__content">
		<p class="eyebrow"><?php esc_html_e( 'Online Astrology Classes', 'oac-theme' ); ?></p>
		<h1 id="hero-title" data-animate="words" data-trigger="load"><?php esc_html_e( 'Global education. Ancient wisdom, taught online.', 'oac-theme' ); ?></h1>
		<p class="hero__intro" data-animate="fade-up" data-delay="0.15"><?php esc_html_e( 'Study with Dr. Ravi Rao and learn astrology for personal insight, meaningful guidance, and career growth.', 'oac-theme' ); ?></p>
		<div class="hero__actions" data-animate="fade-up" data-delay="0.25">
			<?php get_template_part( 'template-parts/components/button', null, array( 'text' => __( 'Explore courses', 'oac-theme' ), 'url' => home_url( '/our-courses/' ), 'variant' => 'coral' ) ); ?>
			<?php get_template_part( 'template-parts/components/button', null, array( 'text' => __( 'Discover our approach', 'oac-theme' ), 'url' => '#about', 'variant' => 'outline' ) ); ?>
		</div>
	</div>
</section>