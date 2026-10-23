<?php
$args = wp_parse_args( $args, array( 'title' => '', 'description' => '', 'image' => '', 'url' => '' ) );
?>
<article class="book" data-animate-item>
	<a class="book__cover" href="<?php echo esc_url( $args['url'] ); ?>" target="_blank" rel="noopener noreferrer">
		<img src="<?php echo esc_url( $args['image'] ); ?>" alt="<?php echo esc_attr( $args['title'] ); ?> book cover" loading="lazy">
	</a>
	<div class="book__copy">
		<h3><?php echo esc_html( $args['title'] ); ?></h3>
		<p><?php echo esc_html( $args['description'] ); ?></p>
		<a class="text-link" href="<?php echo esc_url( $args['url'] ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'View book', 'oac-theme' ); ?> <span aria-hidden="true">→</span></a>
	</div>
</article>