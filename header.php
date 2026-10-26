<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-preloader" role="status" aria-label="<?php esc_attr_e( 'Loading page', 'oac-theme' ); ?>">
	<div class="site-preloader__content">
		<span class="site-preloader__mark" aria-hidden="true"></span>
		<span class="site-preloader__label"><?php esc_html_e( 'Preparing your experience', 'oac-theme' ); ?></span>
	</div>
</div>
<div class="site-header-group">
<div class="contact-bar">
	<div class="site-width contact-bar__inner">
		<div class="contact-bar__contact">
			<a class="contact-bar__link" href="mailto:support@onlineastrologyclasses.com">
				<i class="fa-solid fa-envelope" aria-hidden="true"></i>
				<span><?php esc_html_e( 'support@onlineastrologyclasses.com', 'oac-theme' ); ?></span>
			</a>
			<a class="contact-bar__link" href="tel:+918320345627">
				<i class="fa-solid fa-phone" aria-hidden="true"></i>
				<span><?php esc_html_e( 'Call us: +91 83203 45627', 'oac-theme' ); ?></span>
			</a>
		</div>
		<div class="contact-bar__social" role="group" aria-label="<?php esc_attr_e( 'Follow us on social media', 'oac-theme' ); ?>">
			<span class="contact-bar__social-label"><?php esc_html_e( 'Follow us:', 'oac-theme' ); ?></span>
			<a href="https://www.facebook.com/Onlineastrologyclassesoac/" aria-label="Facebook" title="Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com/online_astrology_classes/" aria-label="Instagram" title="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
			<a href="https://wa.link/ilyiox" aria-label="WhatsApp" title="WhatsApp"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
		</div>
	</div>
</div>
<header class="site-header" data-scroll-header>
	<div class="site-width site-header__inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Online Astrology Classes home', 'oac-theme' ); ?>">
			<img src="<?php echo esc_url( oac_upload_url( '2025/03/cropped-Astro-Class-Logo-png.png' ) ); ?>" alt="Online Astrology Classes" width="190" height="46">
		</a>
		<button class="mobile-menu-toggle" type="button" aria-controls="primary-menu-panel" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open main menu', 'oac-theme' ); ?>">
			<i class="mobile-menu-toggle__open fa-solid fa-bars" aria-hidden="true"></i>
			<i class="mobile-menu-toggle__close fa-solid fa-xmark" aria-hidden="true"></i>
		</button>
		<nav class="main-nav" aria-label="<?php esc_attr_e( 'Main navigation', 'oac-theme' ); ?>">
			<button class="mobile-menu-backdrop" type="button" aria-label="<?php esc_attr_e( 'Close main menu', 'oac-theme' ); ?>" aria-hidden="true" tabindex="-1"></button>
			<div class="main-nav__panel" id="primary-menu-panel" aria-hidden="false">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'main-nav__list',
						'fallback_cb'    => false,
						'depth'          => 1,
					)
				);
				?>
				<div class="mobile-menu-contact">
					<p class="mobile-menu-contact__label"><?php esc_html_e( 'Get in touch', 'oac-theme' ); ?></p>
					<a class="mobile-menu-contact__link" href="mailto:support@onlineastrologyclasses.com">
						<i class="fa-solid fa-envelope" aria-hidden="true"></i>
						<span><?php esc_html_e( 'support@onlineastrologyclasses.com', 'oac-theme' ); ?></span>
					</a>
					<a class="mobile-menu-contact__link" href="tel:+918320345627">
						<i class="fa-solid fa-phone" aria-hidden="true"></i>
						<span><?php esc_html_e( 'Call us: +91 83203 45627', 'oac-theme' ); ?></span>
					</a>
					<div class="mobile-menu-contact__social" role="group" aria-label="<?php esc_attr_e( 'Follow us on social media', 'oac-theme' ); ?>">
						<a href="https://www.facebook.com/Onlineastrologyclassesoac/" aria-label="Facebook" title="Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/online_astrology_classes/" aria-label="Instagram" title="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
						<a href="https://wa.link/ilyiox" aria-label="WhatsApp" title="WhatsApp"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>
</div>