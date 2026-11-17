<?php
/**
 * Template Name: Thank You - Purchase
 * Template Post Type: page
 */

get_header();
?>
<main class="purchase-thank-you" id="purchase-thank-you">
	<section class="purchase-thank-you__section" aria-labelledby="purchase-thank-you-title">
		<div class="site-width">
			<div class="purchase-thank-you__card" data-animate="fade-up">
				<header class="purchase-thank-you__header">
					<p class="purchase-thank-you__eyebrow"><?php esc_html_e( 'ENROLLMENT CONFIRMATION', 'oac-theme' ); ?></p>
					<h1 id="purchase-thank-you-title"><?php esc_html_e( 'Thank you. Your next chapter starts here.', 'oac-theme' ); ?></h1>
					<p class="purchase-thank-you__intro"><?php esc_html_e( 'If your payment was successful, we’ll email your order confirmation and course access details to the address you used at enrollment.', 'oac-theme' ); ?></p>
				</header>

				<section class="purchase-thank-you__next" aria-labelledby="purchase-thank-you-next-title">
					<h2 id="purchase-thank-you-next-title"><?php esc_html_e( 'What happens next', 'oac-theme' ); ?></h2>
					<ol>
						<li><?php esc_html_e( 'Check your inbox for the confirmation and course access email.', 'oac-theme' ); ?></li>
						<li><?php esc_html_e( 'If it’s missing, check your spam or promotions folder.', 'oac-theme' ); ?></li>
						<li><?php esc_html_e( 'Keep the email handy for course access and support.', 'oac-theme' ); ?></li>
					</ol>
				</section>

				<footer class="purchase-thank-you__footer">
					<div class="purchase-thank-you__actions">
						<a class="button button--coral" href="<?php echo esc_url( get_post_type_archive_link( 'course' ) ); ?>">
							<?php esc_html_e( 'Explore more courses', 'oac-theme' ); ?><span aria-hidden="true">→</span>
						</a>
						<a class="button button--outline" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
							<?php esc_html_e( 'Contact support', 'oac-theme' ); ?>
						</a>
					</div>
					<p class="purchase-thank-you__support">
						<?php esc_html_e( 'Need help?', 'oac-theme' ); ?>
						<a href="mailto:support@onlineastrologyclasses.com">support@onlineastrologyclasses.com</a>
						<span aria-hidden="true">·</span>
						<a href="tel:+918320345627">+91 83203 45627</a>
					</p>
				</footer>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
