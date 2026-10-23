<?php get_header(); ?>
<main class="site-width content-page not-found">
	<p class="eyebrow eyebrow--coral"><?php esc_html_e( '404 error', 'oac-theme' ); ?></p>
	<h1><?php esc_html_e( 'This page could not be found.', 'oac-theme' ); ?></h1>
	<p><?php esc_html_e( 'Try searching for what you need or return to the homepage.', 'oac-theme' ); ?></p>
	<?php get_search_form(); ?>
	<a class="button button--navy" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go to homepage', 'oac-theme' ); ?></a>
</main>
<?php get_footer(); ?>