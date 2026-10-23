<section class="books section" id="books">
	<div class="site-width">
		<?php get_template_part( 'template-parts/components/section-heading', null, array( 'eyebrow' => __( 'Read and reflect', 'oac-theme' ), 'title' => __( 'Books by Dr. Ravi Rao', 'oac-theme' ), 'description' => __( 'Explore astrology and Vaastu through practical guides rooted in traditional knowledge.', 'oac-theme' ), 'align' => 'center', 'animation' => 'words', 'light' => true ) ); ?>
		<div class="book-grid" data-animate-group="fade-up" data-stagger="0.1">
			<?php foreach ( oac_home_books() as $book ) : ?>
				<?php $book['image'] = oac_upload_url( $book['image'] ); ?>
				<?php get_template_part( 'template-parts/components/book-card', null, $book ); ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>