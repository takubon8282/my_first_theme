<?php
/**
 * The template for displaying the 404 template in the WSU Business theme.
 */

get_header();
?>

<div class="section-inner clear">
	<main id="site-content">

	<div class="error404-content">

		<h1 class="entry-title"><?php esc_html_e( 'Page Not Found', 'wsu-business' ); ?></h1>

		<div class="intro-text"><p><?php esc_html_e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'wsu-business' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'wsu-business' ),
			)
		);
		?>

	</main><!-- #site-content -->
	<?php get_template_part( 'sidebar' ); ?>
</div><!-- .section-inner -->

<?php get_footer(); ?>
