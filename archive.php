<?php get_header(); ?>
<main class="site-width content-page">
	<header class="archive-header">
		<h1><?php the_archive_title(); ?></h1>
		<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
	</header>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'content-entry' ); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
			</article>
		<?php endwhile; ?>
		<?php the_posts_navigation(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'No posts found.', 'oac-theme' ); ?></p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>