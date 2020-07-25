<?php
/**
 * Template Name: Full Width Template
 * Template Post Type: post, page
 */

get_header();
?>

<div class="section-inner full-width clear">
	<main id="site-content">

		<?php

		if ( have_posts() ) {

			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );
			}
		}

		?>

	</main><!-- #site-content -->
</div><!-- .section-inner -->

<?php get_footer(); ?>
