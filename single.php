<?php get_header(); ?>
<main class="site-width content-page">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class( 'single-entry' ); ?>>
			<h1><?php the_title(); ?></h1>
			<p class="entry-meta"><?php echo esc_html( get_the_date() ); ?></p>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</article>
		<?php the_post_navigation(); ?>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>