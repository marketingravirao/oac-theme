<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 */

get_header();
?>
<main id="contact-page">
	<?php
	get_template_part( 'template-parts/sections/contact/hero' );
	get_template_part( 'template-parts/sections/contact/details' );
	get_template_part( 'template-parts/sections/contact/location' );
	?>
</main>
<?php get_footer(); ?>