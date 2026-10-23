<?php
$args = wp_parse_args( $args, array( 'number' => '', 'title' => '', 'url' => '' ) );
?>
<a class="topic" href="<?php echo esc_url( $args['url'] ); ?>" data-animate-item>
	<span class="topic__number"><?php echo esc_html( $args['number'] ); ?></span>
	<h3><?php echo esc_html( $args['title'] ); ?></h3>
	<span class="topic__arrow" aria-hidden="true">↗</span>
</a>