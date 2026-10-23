<?php get_header(); ?>
<main id="home">
	<?php
	get_template_part( 'template-parts/sections/home/hero' );
	get_template_part( 'template-parts/sections/home/about' );
	get_template_part( 'template-parts/sections/home/questions' );
	get_template_part( 'template-parts/sections/home/astrology' );
	get_template_part( 'template-parts/sections/home/events' );
	get_template_part( 'template-parts/sections/home/books' );
	get_template_part( 'template-parts/sections/home/mission' );
	get_template_part( 'template-parts/sections/home/faq' );
	?>
</main>
<?php get_footer(); ?>