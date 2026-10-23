<footer class="site-footer" id="contact">
	<div class="site-width footer__grid">
		<div class="footer__brand">
			<img src="<?php echo esc_url( oac_upload_url( '2025/03/cropped-cropped-Astro-Class-Logo-png.png' ) ); ?>" alt="Online Astrology Classes" width="180" height="70" loading="lazy">
			<p><?php esc_html_e( 'Flexible astrology learning for personal and career growth.', 'oac-theme' ); ?></p>
		</div>
		<div>
			<h2><?php esc_html_e( 'Explore', 'oac-theme' ); ?></h2>
			<a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"><?php esc_html_e( 'About us', 'oac-theme' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/our-courses/' ) ); ?>"><?php esc_html_e( 'Courses', 'oac-theme' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/#events' ) ); ?>"><?php esc_html_e( 'Events', 'oac-theme' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/#books' ) ); ?>"><?php esc_html_e( 'Books', 'oac-theme' ); ?></a>
		</div>
		<div>
			<h2><?php esc_html_e( 'Get in touch', 'oac-theme' ); ?></h2>
			<a href="mailto:support@onlineastrologyclasses.com">support@onlineastrologyclasses.com</a>
			<a href="tel:+918320345627">+91 83203 45627</a>
			<p><?php esc_html_e( 'B-302, Balleshwar Square, S.G. Highway, Ahmedabad, 380015', 'oac-theme' ); ?></p>
		</div>
	</div>
	<div class="site-width footer__bottom">
		<span><?php echo esc_html( sprintf( __( '© %s Online Astrology Classes', 'oac-theme' ), gmdate( 'Y' ) ) ); ?></span>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>#home"><?php esc_html_e( 'Back to top ↑', 'oac-theme' ); ?></a>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>