<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

<div class="section-inner clear">
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
	<?php get_template_part( 'sidebar' ); ?>
</div><!-- .section-inner -->

<?php get_footer(); ?>
