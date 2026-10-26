<section class="faq section" id="faq">
	<div class="site-width faq__grid">
		<div class="faq__heading" data-animate="fade-right">
			<?php get_template_part( 'template-parts/components/section-heading', null, array( 'eyebrow' => __( 'Good to know', 'oac-theme' ), 'title' => __( 'Frequently asked questions', 'oac-theme' ), 'animation' => 'words' ) ); ?>
			<p><?php esc_html_e( 'Everything you need to get started with online learning.', 'oac-theme' ); ?></p>
			<a class="text-link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Still have a question? Contact us', 'oac-theme' ); ?> <span aria-hidden="true">→</span></a>
		</div>
		<div class="faq__list" data-faq-accordion data-animate-group="fade-up" data-stagger="0.06">
			<?php foreach ( oac_home_faqs() as $question => $answer ) : ?>
				<?php get_template_part( 'template-parts/components/faq-item', null, array( 'question' => $question, 'answer' => $answer ) ); ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>