<?php get_header(); ?>
<main class="site-width content-page">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'content-entry' ); ?>>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php the_excerpt(); ?>
			</article>
		<?php endwhile; ?>
		<?php the_posts_navigation(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'No posts found.', 'oac-theme' ); ?></p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>