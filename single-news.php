<?php
get_header();
while ( have_posts() ) :
	the_post();
	$word_count = str_word_count( wp_strip_all_tags( get_the_content( null, false ) ) );
	$read_time = max( 1, ceil( $word_count / 220 ) );
	$category = get_post_meta( get_the_ID(), '_oac_news_category', true ) ?: __( 'Astronomy News', 'oac-theme' );
?>
<main class="blog-single">
	<article <?php post_class( 'blog-article' ); ?>>
		<section class="blog-article-hero<?php echo has_post_thumbnail() ? ' blog-article-hero--has-image' : ''; ?>" aria-labelledby="news-article-title">
			<div class="site-width blog-article-hero__inner">
				<div class="blog-article-hero__copy">
					<p class="eyebrow eyebrow--coral" data-animate="fade-up"><?php echo esc_html( $category ); ?></p>
					<h1 id="news-article-title" data-animate="words" data-trigger="load"><?php the_title(); ?></h1>
					<div class="blog-article-hero__meta" data-animate="fade-up" data-delay="0.1">
						<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
						<span aria-hidden="true">•</span>
						<span><?php echo esc_html( sprintf( _n( '%d minute read', '%d minute read', $read_time, 'oac-theme' ), $read_time ) ); ?></span>
					</div>
				</div>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="blog-article-hero__featured" data-animate="fade-up" data-scroll-effect="scale" data-scale="0.94">
						<?php the_post_thumbnail( 'large', array( 'loading' => 'eager', 'fetchpriority' => 'high' ) ); ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
		<div class="site-width blog-article__layout">
			<div class="blog-article__content" data-animate="fade-up" data-delay="0.08">
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div>
			<aside class="blog-article__aside" aria-label="<?php esc_attr_e( 'Related news', 'oac-theme' ); ?>" data-animate="fade-left">
				<div class="blog-article__aside-inner">
					<p class="eyebrow"><?php esc_html_e( 'Keep reading', 'oac-theme' ); ?></p>
					<h2><?php esc_html_e( 'More news', 'oac-theme' ); ?></h2>
					<?php
					$related = new WP_Query( array( 'post_type' => 'news', 'post_status' => 'publish', 'posts_per_page' => 3, 'post__not_in' => array( get_the_ID() ), 'orderby' => 'date', 'order' => 'DESC' ) );
					if ( $related->have_posts() ) :
						while ( $related->have_posts() ) :
							$related->the_post();
							?>
							<a class="blog-article__related" href="<?php the_permalink(); ?>">
								<span><?php echo esc_html( get_the_date() ); ?></span>
								<strong><?php echo esc_html( get_the_title() ); ?></strong>
								<em aria-hidden="true">→</em>
							</a>
						<?php endwhile; wp_reset_postdata();
					endif;
					?>
					<a class="button button--coral" href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>"><?php esc_html_e( 'View all news', 'oac-theme' ); ?><span aria-hidden="true">→</span></a>
				</div>
			</aside>
		</div>
	</article>
</main>
<?php endwhile; get_footer(); ?>
