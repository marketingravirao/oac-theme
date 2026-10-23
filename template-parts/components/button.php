<?php
$args = wp_parse_args( $args, array( 'text' => '', 'url' => '', 'variant' => 'coral', 'size' => 'regular', 'target' => '', 'rel' => '', 'aria_label' => '' ) );
if ( '' === $args['text'] || '' === $args['url'] ) {
	return;
}
$classes = array( 'button', 'button--' . sanitize_html_class( $args['variant'] ) );
if ( 'regular' !== $args['size'] ) {
	$classes[] = 'button--' . sanitize_html_class( $args['size'] );
}
?>
<a class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>" href="<?php echo esc_url( $args['url'] ); ?>"<?php if ( '' !== $args['target'] ) : ?> target="<?php echo esc_attr( $args['target'] ); ?>"<?php endif; ?><?php if ( '' !== $args['rel'] ) : ?> rel="<?php echo esc_attr( $args['rel'] ); ?>"<?php endif; ?><?php if ( '' !== $args['aria_label'] ) : ?> aria-label="<?php echo esc_attr( $args['aria_label'] ); ?>"<?php endif; ?>><?php echo esc_html( $args['text'] ); ?></a>