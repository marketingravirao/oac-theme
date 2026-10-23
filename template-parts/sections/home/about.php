<section class="about section" id="about">
	<div class="site-width about__grid">
		<div class="about__mark" data-animate="fade-left"><img src="<?php echo esc_url( oac_upload_url( '2025/04/Untitled-design-19.png' ) ); ?>" alt="<?php esc_attr_e( 'Illustrated zodiac wheel', 'oac-theme' ); ?>" loading="lazy"></div>
		<div class="about__copy" data-animate="fade-right">
			<?php get_template_part( 'template-parts/components/section-heading', null, array( 'eyebrow' => __( 'Learn with purpose', 'oac-theme' ), 'title' => __( 'Astrology for a more considered life.', 'oac-theme' ), 'animation' => 'words' ) ); ?>
			<p><?php esc_html_e( 'Led by Dr. Ravi Rao and an experienced teaching team, Online Astrology Classes gives students practical tools for personal and professional growth. Explore an ancient discipline through clear, flexible online learning.', 'oac-theme' ); ?></p>
			<a class="text-link" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"><?php esc_html_e( 'Meet our team', 'oac-theme' ); ?> <span aria-hidden="true">→</span></a>
		</div>
	</div>
</section>