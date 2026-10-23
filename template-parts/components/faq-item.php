<?php
$args = wp_parse_args( $args, array( 'question' => '', 'answer' => '' ) );
?>
<details class="faq-item" data-animate-item>
	<summary><?php echo esc_html( $args['question'] ); ?><span aria-hidden="true">+</span></summary>
	<p><?php echo esc_html( $args['answer'] ); ?></p>
</details>