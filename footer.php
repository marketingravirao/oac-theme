<footer class="site-footer" id="contact">
	<div class="site-width footer__grid">
		<div class="footer__brand">
			<img src="<?php echo esc_url( oac_upload_url( '2025/03/cropped-Astro-Class-Logo-png.png' ) ); ?>" alt="Online Astrology Classes" width="180" height="43" loading="lazy">
			<p><?php esc_html_e( 'Join our online courses and access astrology education from anywhere in the world — including Asia, Europe, North America, South America, Africa, Australia, and even Antarctica.', 'oac-theme' ); ?></p>
		</div>
		<nav class="footer__explore" aria-label="<?php esc_attr_e( 'Explore', 'oac-theme' ); ?>">
			<h2><?php esc_html_e( 'Explore', 'oac-theme' ); ?></h2>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu'           => 'Footer Menu',
					'container'      => false,
					'menu_class'     => 'footer__menu',
					'fallback_cb'    => false,
					'depth'          => 1,
				)
			);
			?>
		</nav>
		<div class="footer__contact">
			<h2><?php esc_html_e( 'Get in touch', 'oac-theme' ); ?></h2>
			<a class="footer__contact-item" href="mailto:support@onlineastrologyclasses.com">
				<span class="footer__contact-icon" aria-hidden="true"><i class="fa-regular fa-envelope"></i></span>
				<span><small><?php esc_html_e( 'Email us', 'oac-theme' ); ?></small>support@onlineastrologyclasses.com</span>
			</a>
			<a class="footer__contact-item" href="tel:+918320345627">
				<span class="footer__contact-icon" aria-hidden="true"><i class="fa-solid fa-phone"></i></span>
				<span><small><?php esc_html_e( 'Call us', 'oac-theme' ); ?></small>+91 83203 45627</span>
			</a>
			<p class="footer__contact-item footer__contact-address">
				<span class="footer__contact-icon" aria-hidden="true"><i class="fa-solid fa-location-dot"></i></span>
				<span><small><?php esc_html_e( 'Visit us', 'oac-theme' ); ?></small><?php esc_html_e( 'B-302, Balleshwar Square, S.G. Highway, Ahmedabad, 380015', 'oac-theme' ); ?></span>
			</p>
		</div>
	</div>
	<div class="site-width footer__bottom">
		<span><?php echo esc_html( sprintf( __( '© %s Online Astrology Classes', 'oac-theme' ), gmdate( 'Y' ) ) ); ?></span>
		<a href="#"><?php esc_html_e( 'Back to top ↑', 'oac-theme' ); ?></a>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>