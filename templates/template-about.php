<?php
/**
 * Template Name: About Us
 * Template Post Type: page
 */

get_header();
?>
<main id="about-page">
	<?php
	get_template_part( 'template-parts/sections/about/banner' );
	get_template_part( 'template-parts/sections/about/overview' );
	get_template_part( 'template-parts/sections/about/mission' );
	get_template_part( 'template-parts/sections/about/timeline' );
	get_template_part( 'template-parts/sections/about/faq' );
	?>
</main>
<?php get_footer(); ?>