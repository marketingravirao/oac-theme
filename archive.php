<?php
get_header();

$paged = max( 1, get_query_var( 'paged' ) );
$query_post_ids = array();
foreach ( $GLOBALS['wp_query']->posts as $query_post ) {
	$query_post_ids[] = (int) $query_post->ID;
}
$sticky_posts = get_option( 'sticky_posts', array() );
$sticky_posts = is_array( $sticky_posts ) ? $sticky_posts : array();
$featured_post_id = 0;
if ( 1 === $paged ) {
	foreach ( $sticky_posts as $sticky_post_id ) {
		$sticky_post_id = (int) $sticky_post_id;
		if ( in_array( $sticky_post_id, $query_post_ids, true ) && 'publish' === get_post_status( $sticky_post_id ) ) {
			$featured_post_id = $sticky_post_id;
			break;
		}
	}
	if ( ! $featured_post_id && ! empty( $query_post_ids ) ) {
		$featured_post_id = $query_post_ids[0];
	}
}
?>
<main class="blogs-page">
	<section class="blogs-hero" aria-labelledby="blogs-title">
		<div class="site-width blogs-hero__inner">
			<p class="eyebrow eyebrow--coral" data-animate="fade-up"><?php esc_html_e( 'Astrology insights', 'oac-theme' ); ?></p>
			<h1 id="blogs-title" data-animate="words" data-trigger="load"><?php echo esc_html( is_category() ? single_cat_title( '', false ) : __( 'Astrology Insights', 'oac-theme' ) ); ?></h1>
			<p data-animate="fade-up" data-delay="0.1"><?php esc_html_e( 'Practical guidance on astrology, numerology, prediction, and conscious personal growth.', 'oac-theme' ); ?></p>
		</div>
	</section>

	<?php if ( 1 === $paged && $featured_post_id && get_post_status( $featured_post_id ) ) : ?>
		<?php
		$featured_post = get_post( $featured_post_id );
		$featured_image = get_the_post_thumbnail_url( $featured_post, 'large' );
		?>
		<section class="blogs-feature section" aria-label="<?php esc_attr_e( 'Featured article', 'oac-theme' ); ?>">
			<div class="site-width">
				<article class="blogs-feature__card" data-animate="fade-up">
					<a class="blogs-feature__image" href="<?php echo esc_url( get_permalink( $featured_post ) ); ?>" tabindex="-1" aria-hidden="true">
						<?php if ( $featured_image ) : ?>
							<img src="<?php echo esc_url( $featured_image ); ?>" alt="" fetchpriority="high">
						<?php else : ?>
							<span>OAC</span>
						<?php endif; ?>
					</a>
					<div class="blogs-feature__content">
						<p class="blogs-card__category"><?php echo esc_html( get_the_category_list( ', ', '', $featured_post_id ) ? wp_strip_all_tags( get_the_category_list( ', ', '', $featured_post_id ) ) : __( 'Insights', 'oac-theme' ) ); ?></p>
						<h2><a href="<?php echo esc_url( get_permalink( $featured_post ) ); ?>"><?php echo esc_html( get_the_title( $featured_post ) ); ?></a></h2>
						<p><?php echo esc_html( wp_trim_words( wp_strip_all_tags( has_excerpt( $featured_post_id ) ? get_the_excerpt( $featured_post_id ) : $featured_post->post_content ), 32 ) ); ?></p>
						<div class="blogs-card__meta">
							<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C, $featured_post_id ) ); ?>"><?php echo esc_html( get_the_date( '', $featured_post_id ) ); ?></time>
							<span aria-hidden="true">•</span>
							<span><?php echo esc_html( sprintf( __( '%d min read', 'oac-theme' ), max( 1, ceil( str_word_count( wp_strip_all_tags( $featured_post->post_content ) ) / 220 ) ) ) ); ?></span>
						</div>
						<a class="text-link" href="<?php echo esc_url( get_permalink( $featured_post ) ); ?>"><span><?php esc_html_e( 'Read article', 'oac-theme' ); ?></span><span aria-hidden="true">→</span></a>
					</div>
				</article>
			</div>
		</section>
	<?php endif; ?>

	<section class="section blogs-catalog" aria-labelledby="blogs-catalog-title">
		<div class="site-width">
			<header class="section-heading section-heading--center" data-animate="fade-up">
				<p class="eyebrow"><?php esc_html_e( 'Latest wisdom', 'oac-theme' ); ?></p>
				<h2 id="blogs-catalog-title" data-animate="words"><?php esc_html_e( 'Explore our latest articles.', 'oac-theme' ); ?></h2>
			</header>
			<?php if ( have_posts() ) : ?>
				<div class="blogs-grid" data-animate-group="fade-up" data-stagger="0.08">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php if ( get_the_ID() === $featured_post_id && 1 === $paged ) { continue; } ?>
						<article <?php post_class( 'blogs-card' ); ?> data-animate-item>
							<a class="blogs-card__image" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large', array( 'loading' => 'lazy' ) ); ?>
								<?php else : ?>
									<span>OAC</span>
								<?php endif; ?>
							</a>
							<div class="blogs-card__content">
								<p class="blogs-card__category"><?php echo esc_html( wp_strip_all_tags( get_the_category_list( ', ' ) ) ? wp_strip_all_tags( get_the_category_list( ', ' ) ) : __( 'Astrology Insights', 'oac-theme' ) ); ?></p>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
								<div class="blogs-card__meta">
									<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
									<span aria-hidden="true">•</span>
									<span><?php echo esc_html( sprintf( __( '%d min read', 'oac-theme' ), max( 1, ceil( str_word_count( wp_strip_all_tags( get_the_content( null, false ) ) ) / 220 ) ) ) ); ?></span>
								</div>
								<a class="text-link" href="<?php the_permalink(); ?>"><span><?php esc_html_e( 'Read article', 'oac-theme' ); ?></span><span aria-hidden="true">→</span></a>
							</div>
						</article>
					<?php endwhile; ?>
				</div>
				<?php
				the_posts_pagination(
					array(
						'mid_size' => 1,
						'prev_text' => __( '← Previous', 'oac-theme' ),
						'next_text' => __( 'Next →', 'oac-theme' ),
					)
				);
				?>
			<?php else : ?>
				<p class="blogs-empty"><?php esc_html_e( 'New articles are coming soon. Please check back later.', 'oac-theme' ); ?></p>
			<?php endif; ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>