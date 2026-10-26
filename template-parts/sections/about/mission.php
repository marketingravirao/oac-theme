<section class="about-mission section" aria-labelledby="about-mission-title">
	<div class="site-width about-mission__grid">
		<div class="about-mission__portrait" data-animate="fade-left">
			<img src="<?php echo esc_url( oac_upload_url( '2025/12/About-us-ravirao.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Dr. Ravi Rao, educator at Online Astrology Classes', 'oac-theme' ); ?>" width="1600" height="1067" loading="lazy" data-scroll-effect="scale">
		</div>
		<div class="about-mission__copy" data-animate="fade-right">
			<p class="eyebrow eyebrow--coral"><?php esc_html_e( 'Our mission', 'oac-theme' ); ?></p>
			<h2 id="about-mission-title" data-animate="words"><?php esc_html_e( 'Bring ancient wisdom into modern life.', 'oac-theme' ); ?></h2>
			<p><?php esc_html_e( 'At Online Astrology Classes, our mission is to empower individuals with the profound knowledge of Astrology and Vaastu Shastra to bring harmony, prosperity, and well-being into their lives.', 'oac-theme' ); ?></p>
			<p><?php esc_html_e( 'We are committed to providing authentic, scientific, and practical teachings that blend ancient wisdom with modern insights.', 'oac-theme' ); ?></p>
			<?php get_template_part( 'template-parts/components/button', null, array( 'text' => __( 'Explore our courses', 'oac-theme' ), 'url' => home_url( '/our-courses/' ), 'variant' => 'coral' ) ); ?>
		</div>
	</div>
</section>