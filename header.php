<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
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
			</div>
		</nav>
	</div>
</header>