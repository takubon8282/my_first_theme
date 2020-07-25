<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>
			<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
				<div id="footer-above" class="widget-area">
					<div class="section-inner">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div><!-- #footer-above -->
				</div><!-- #footer-above -->
			<?php endif; ?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group clear">

				<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
					<div class="section-inner">
						<div id="footer-1" class="widget-area">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div><!-- #footer-1 -->
						<div id="footer-2" class="widget-area">
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div><!-- #footer-2 -->
						<div id="footer-3" class="widget-are last">
							<?php dynamic_sidebar( 'footer-3' ); ?>
						</div><!-- #footer-3 -->
					</div>
				<?php endif; ?>

			</footer>
			<div id="footer-below" class="clear">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo esc_attr(
								date_i18n(
									/* translators: Copyright date format, see https://www.php.net/date */
									_x( 'Y', 'copyright date format', 'wsu-business' )
								)
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<?php
						/* translators: %s: HTML character for up arrow. */
						printf( esc_html__( 'To the top %s', 'wsu-business' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
						?>
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
