<?php
get_header();
$paged = max( 1, get_query_var( 'paged' ) );
$featured_id = 0;
if ( 1 === $paged ) {
	$featured = get_posts(
		array(
			'post_type' => 'news',
			'post_status' => 'publish',
			'posts_per_page' => 1,
			'orderby' => array( 'menu_order' => 'ASC', 'date' => 'DESC' ),
		)
	);
	if ( $featured ) {
		$featured_id = $featured[0]->ID;
	}
}
?>
<main class="blogs-page">
	<section class="blogs-hero" aria-labelledby="news-title">
		<div class="site-width blogs-hero__inner">
			<p class="eyebrow eyebrow--coral" data-animate="fade-up"><?php esc_html_e( 'Astronomy & Vastu updates', 'oac-theme' ); ?></p>
			<h1 id="news-title" data-animate="words" data-trigger="load"><?php esc_html_e( 'News and discoveries', 'oac-theme' ); ?></h1>
			<p data-animate="fade-up" data-delay="0.1"><?php esc_html_e( 'International astronomy developments, observatory research, space milestones, and Vastu perspectives.', 'oac-theme' ); ?></p>
		</div>
	</section>

	<?php if ( $featured_id ) : ?>
		<?php $featured_post = get_post( $featured_id ); ?>
		<section class="blogs-feature section" aria-label="<?php esc_attr_e( 'Featured news', 'oac-theme' ); ?>">
			<div class="site-width">
				<article class="blogs-feature__card" data-animate="fade-up">
					<a class="blogs-feature__image" href="<?php echo esc_url( get_permalink( $featured_post ) ); ?>" tabindex="-1" aria-hidden="true">
						<?php if ( has_post_thumbnail( $featured_post ) ) : ?>
							<?php echo get_the_post_thumbnail( $featured_post, 'large', array( 'loading' => 'eager', 'fetchpriority' => 'high' ) ); ?>
						<?php else : ?>
							<span>OAC</span>
						<?php endif; ?>
					</a>
					<div class="blogs-feature__content">
						<p class="blogs-card__category"><?php echo esc_html( get_post_meta( $featured_id, '_oac_news_category', true ) ?: __( 'Astronomy News', 'oac-theme' ) ); ?></p>
						<h2><a href="<?php echo esc_url( get_permalink( $featured_post ) ); ?>"><?php echo esc_html( get_the_title( $featured_post ) ); ?></a></h2>
						<p><?php echo esc_html( wp_trim_words( get_the_excerpt( $featured_post ), 32 ) ); ?></p>
						<div class="blogs-card__meta">
							<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C, $featured_post ) ); ?>"><?php echo esc_html( get_the_date( '', $featured_post ) ); ?></time>
							<span aria-hidden="true">•</span>
							<span><?php echo esc_html( sprintf( __( '%d min read', 'oac-theme' ), max( 1, ceil( str_word_count( wp_strip_all_tags( $featured_post->post_content ) ) / 220 ) ) ) ); ?></span>
						</div>
						<a class="text-link" href="<?php echo esc_url( get_permalink( $featured_post ) ); ?>"><span><?php esc_html_e( 'Read news', 'oac-theme' ); ?></span><span aria-hidden="true">→</span></a>
					</div>
				</article>
			</div>
		</section>
	<?php endif; ?>

	<section class="section blogs-catalog" aria-labelledby="news-catalog-title">
		<div class="site-width">
			<header class="section-heading section-heading--center" data-animate="fade-up">
				<p class="eyebrow"><?php esc_html_e( 'Latest updates', 'oac-theme' ); ?></p>
				<h2 id="news-catalog-title" data-animate="words"><?php esc_html_e( 'Explore the latest news.', 'oac-theme' ); ?></h2>
			</header>
			<?php if ( have_posts() ) : ?>
				<div class="blogs-grid" data-animate-group="fade-up" data-stagger="0.08">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php if ( get_the_ID() === $featured_id && 1 === $paged ) { continue; } ?>
						<article <?php post_class( 'blogs-card' ); ?> data-animate-item>
							<a class="blogs-card__image" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large', array( 'loading' => 'lazy' ) ); ?>
								<?php else : ?>
									<span>OAC</span>
								<?php endif; ?>
							</a>
							<div class="blogs-card__content">
								<p class="blogs-card__category"><?php echo esc_html( get_post_meta( get_the_ID(), '_oac_news_category', true ) ?: __( 'Astronomy News', 'oac-theme' ) ); ?></p>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
								<div class="blogs-card__meta">
									<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
									<span aria-hidden="true">•</span>
									<span><?php echo esc_html( sprintf( __( '%d min read', 'oac-theme' ), max( 1, ceil( str_word_count( wp_strip_all_tags( get_the_content( null, false ) ) ) / 220 ) ) ) ); ?></span>
								</div>
								<a class="text-link" href="<?php the_permalink(); ?>"><span><?php esc_html_e( 'Read news', 'oac-theme' ); ?></span><span aria-hidden="true">→</span></a>
							</div>
						</article>
					<?php endwhile; ?>
				</div>
				<?php the_posts_pagination( array( 'mid_size' => 1, 'prev_text' => __( '← Previous', 'oac-theme' ), 'next_text' => __( 'Next →', 'oac-theme' ) ) ); ?>
			<?php else : ?>
				<p class="blogs-empty"><?php esc_html_e( 'New news articles are coming soon. Please check back later.', 'oac-theme' ); ?></p>
			<?php endif; ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>
