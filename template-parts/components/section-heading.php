<?php
$args = wp_parse_args( $args, array( 'eyebrow' => '', 'title' => '', 'description' => '', 'align' => 'left', 'animation' => '', 'light' => false ) );
$classes = array( 'section-heading' );
if ( 'center' === $args['align'] ) {
	$classes[] = 'section-heading--center';
}
if ( $args['light'] ) {
	$classes[] = 'section-heading--light';
}
$animation = in_array( $args['animation'], array( 'words', 'fade-up', 'fade-down', 'fade-left', 'fade-right', 'scale-up', 'fade-scale' ), true ) ? $args['animation'] : '';
?>
<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<?php if ( '' !== $args['eyebrow'] ) : ?><p class="eyebrow<?php echo $args['light'] ? '' : ' eyebrow--coral'; ?>"><?php echo esc_html( $args['eyebrow'] ); ?></p><?php endif; ?>
	<?php if ( '' !== $args['title'] ) : ?><h2<?php if ( '' !== $animation ) : ?> data-animate="<?php echo esc_attr( $animation ); ?>"<?php if ( 'words' === $animation ) : ?> data-trigger="scroll"<?php endif; ?><?php endif; ?>><?php echo esc_html( $args['title'] ); ?></h2><?php endif; ?>
	<?php if ( '' !== $args['description'] ) : ?><p><?php echo esc_html( $args['description'] ); ?></p><?php endif; ?>
</div>