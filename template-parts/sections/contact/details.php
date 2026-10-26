<section class="contact-workspace section" aria-labelledby="contact-details-title">
	<div class="site-width contact-workspace__grid">
		<div class="contact-details" data-animate="fade-left">
			<p class="eyebrow eyebrow--coral"><?php esc_html_e( 'Ways to connect', 'oac-theme' ); ?></p>
			<h2 id="contact-details-title"><?php esc_html_e( 'We’re here to help.', 'oac-theme' ); ?></h2>
			<p class="contact-details__intro"><?php esc_html_e( 'Tell us what you’re looking for and our team will help you find the right next step.', 'oac-theme' ); ?></p>
			<ol class="contact-methods" data-animate-group="fade-up" data-stagger="0.08">
				<?php foreach ( oac_contact_methods() as $method ) : ?>
					<li class="contact-method" data-animate-item>
						<span class="contact-method__number" aria-hidden="true"><?php echo esc_html( $method['number'] ); ?></span>
						<div class="contact-method__copy">
							<h3><?php echo esc_html( $method['label'] ); ?></h3>
							<a href="<?php echo esc_url( $method['url'] ); ?>"<?php if ( '' !== $method['target'] ) : ?> target="<?php echo esc_attr( $method['target'] ); ?>" rel="noopener noreferrer"<?php endif; ?>><?php echo esc_html( $method['value'] ); ?></a>
							<p><?php echo esc_html( $method['detail'] ); ?></p>
						</div>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
		<div class="contact-form" id="contact-form" data-animate="fade-right">
			<div class="contact-form__heading">
				<p><?php esc_html_e( 'Share your question below and we’ll be in touch.', 'oac-theme' ); ?></p>
			</div>
			<iframe
				class="contact-form__frame"
				height="650"
				src="https://api.leadconnectorhq.com/widget/form/isBdKn4dg3C12T6CVe5P"
				id="oac-contact-form"
				data-layout="{'id':'INLINE','minimizedTitle':'','isLeftAligned':true,'isRightAligned':false,'allowMinimize':false}"
				data-trigger-type="alwaysShow"
				data-activation-type="alwaysActivated"
				data-deactivation-type="neverDeactivate"
				data-form-name="contact us"
				data-height="650"
				data-layout-iframe-id="oac-contact-form"
				data-form-id="isBdKn4dg3C12T6CVe5P"
				title="<?php esc_attr_e( 'Contact Online Astrology Classes form', 'oac-theme' ); ?>"
			></iframe>
		</div>
	</div>
</section>