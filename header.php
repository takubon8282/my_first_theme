<?php
/**
 * Header file for the WSU Business WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner" style="background-image:url(' <?php header_image(); ?>');">
			<div class="header-inner section-inner clear">

				<div class="header-titles-wrapper">

					<div class="header-titles">

						<?php
							// Site title or logo.
							wsu_business_site_logo();
						?>

					</div><!-- .header-titles -->

				</div><!-- .header-titles-wrapper -->

				<div id="site-navigation" class="header-navigation-wrapper">

					<?php
					if ( has_nav_menu( 'menu-1' ) ) {
						?>

							<nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'wsu-business' ); ?>" role="navigation">
								<button class="menu-toggle" aria-controls="site-menu" aria-expanded="false">
									<?php esc_html_e( 'Site Navigation', 'wsu-business' ); ?>
								</button>
								<ul class="primary-menu">

									<?php wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'menu-1',
										)
									); ?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->
						<?php
					}

						?>

						</div><!-- .header-toggles -->

				</div><!-- .header-navigation-wrapper -->

			</div><!-- .header-inner -->
			<div class="header-headline section-inner">
<!-- <?php if( is_page() ) the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->
</div>
		</header><!-- #site-header -->
		<?php if ( is_active_sidebar( 'header-1' ) ) : ?>
			<div id="header-below" class="widget-area">
				<div class="section-inner">
					<?php dynamic_sidebar( 'header-1' ); ?>
				</div>
			</div><!-- #header-below -->
		<?php endif; ?>
