<?php
$args = wp_parse_args( $args, array( 'question' => '', 'answer' => '' ) );
$panel_id = wp_unique_id( 'oac-faq-answer-' );
?>
<div class="faq-item" data-faq-item data-animate-item>
	<button class="faq-item__trigger" type="button" aria-expanded="true" aria-controls="<?php echo esc_attr( $panel_id ); ?>">
		<span><?php echo esc_html( $args['question'] ); ?></span>
		<span class="faq-item__icon" aria-hidden="true">+</span>
	</button>
	<div class="faq-item__panel" id="<?php echo esc_attr( $panel_id ); ?>" aria-hidden="false">
		<div class="faq-item__inner"><p><?php echo esc_html( $args['answer'] ); ?></p></div>
	</div>
</div>