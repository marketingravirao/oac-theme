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
		<a href="mailto:support@onlineastrologyclasses.com"><?php esc_html_e( 'support@onlineastrologyclasses.com', 'oac-theme' ); ?></a>
		<a href="tel:+918320345627"><?php esc_html_e( 'Call us: +91 83203 45627', 'oac-theme' ); ?></a>
		<div class="contact-bar__social">
			<a href="https://www.facebook.com/Onlineastrologyclassesoac/" aria-label="Facebook">Facebook</a>
			<a href="https://www.instagram.com/online_astrology_classes/" aria-label="Instagram">Instagram</a>
			<a href="https://wa.link/ilyiox" aria-label="WhatsApp">WhatsApp</a>
		</div>
	</div>
</div>
<header class="site-header" data-scroll-header>
	<div class="site-width site-header__inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Online Astrology Classes home', 'oac-theme' ); ?>">
			<img src="<?php echo esc_url( oac_upload_url( '2025/03/cropped-Astro-Class-Logo-png.png' ) ); ?>" alt="Online Astrology Classes" width="190" height="46">
		</a>
		<nav class="main-nav" aria-label="<?php esc_attr_e( 'Main navigation', 'oac-theme' ); ?>">
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
		</nav>
	</div>
</header>