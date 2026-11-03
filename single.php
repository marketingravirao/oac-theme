<?php
get_header();
while ( have_posts() ) :
	the_post();
	$word_count = str_word_count( wp_strip_all_tags( get_the_content( null, false ) ) );
	$read_time = max( 1, ceil( $word_count / 220 ) );
	$categories = get_the_category();
	?>
	<main class="blog-single">
		<header class="blog-article-hero" aria-labelledby="blog-article-title">
			<div class="site-width blog-article-hero__inner">
				<p class="eyebrow eyebrow--coral" data-animate="fade-up"><?php echo $categories ? esc_html( $categories[0]->name ) : esc_html__( 'Astrology Insight', 'oac-theme' ); ?></p>
				<h1 id="blog-article-title" data-animate="words" data-trigger="load"><?php the_title(); ?></h1>
				<div class="blog-article-hero__meta" data-animate="fade-up" data-delay="0.1">
					<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
					<span aria-hidden="true">•</span>
					<span><?php echo esc_html( sprintf( _n( '%d minute read', '%d minute read', $read_time, 'oac-theme' ), $read_time ) ); ?></span>
				</div>
			</div>
		</header>

		<article <?php post_class( 'blog-article' ); ?>>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="site-width blog-article__featured" data-animate="fade-up" data-scroll-effect="scale" data-scale="0.94">
					<?php the_post_thumbnail( 'large', array( 'loading' => 'eager', 'fetchpriority' => 'high' ) ); ?>
				</div>
			<?php endif; ?>
			<div class="site-width blog-article__layout">
				<div class="blog-article__content" data-animate="fade-up" data-delay="0.08">
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
					<?php
					$tags = get_the_tags();
					if ( $tags ) :
						?>
						<div class="blog-article__tags" aria-label="<?php esc_attr_e( 'Article topics', 'oac-theme' ); ?>">
							<?php foreach ( $tags as $tag ) : ?>
								<a href="<?php echo esc_url( get_tag_link( $tag ) ); ?>"><?php echo esc_html( $tag->name ); ?></a>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
				<aside class="blog-article__aside" aria-label="<?php esc_attr_e( 'Related articles', 'oac-theme' ); ?>" data-animate="fade-left">
					<div class="blog-article__aside-inner">
						<p class="eyebrow"><?php esc_html_e( 'Keep reading', 'oac-theme' ); ?></p>
						<h2><?php esc_html_e( 'More insights', 'oac-theme' ); ?></h2>
						<?php
						$related_query = new WP_Query(
							array(
								'post_type' => 'post',
								'post_status' => 'publish',
								'posts_per_page' => 3,
								'post__not_in' => array( get_the_ID() ),
								'orderby' => 'date',
								'order' => 'DESC',
							)
						);
						if ( $related_query->have_posts() ) :
							while ( $related_query->have_posts() ) :
								$related_query->the_post();
								?>
								<a class="blog-article__related" href="<?php the_permalink(); ?>">
									<span><?php echo esc_html( get_the_date() ); ?></span>
									<strong><?php the_title(); ?></strong>
									<em aria-hidden="true">→</em>
								</a>
							<?php
							endwhile;
							wp_reset_postdata();
						endif;
						?>
						<a class="button button--coral" href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>"><?php esc_html_e( 'View all articles', 'oac-theme' ); ?><span aria-hidden="true">→</span></a>
					</div>
				</aside>
			</div>
		</article>
	</main>
<?php
endwhile;
get_footer();