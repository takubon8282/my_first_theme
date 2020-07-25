<?php
/**
 * WSU Business Custom CSS
 */

if ( ! function_exists( 'wsu_business_generate_css' ) ) {

	/**
	 * Generate CSS.
	 *
	 * @param string $selector The CSS selector.
	 * @param string $style The CSS style.
	 * @param string $value The CSS value.
	 * @param string $prefix The CSS prefix.
	 * @param string $suffix The CSS suffix.
	 * @param bool   $echo Echo the styles.
	 */
	function wsu_business_generate_css( $selector, $style, $value, $prefix = '', $suffix = '', $echo = true ) {

		$return = '';

		/*
		 * Bail early if we have no $selector elements or properties and $value.
		 */
		if ( ! $value || ! $selector ) {
			return;
		}

		$return = sprintf( '%s { %s: %s; }', $selector, $style, $prefix . $value . $suffix );

		if ( $echo ) {

			echo $return; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;)

		}

		return $return;

	}
}

if ( ! function_exists( 'wsu_business_get_customizer_css' ) ) {

	/**
	 * Get CSS Built from Customizer Options.
	 * Build CSS reflecting colors, fonts and other options set in the Customizer, and return them for output.
	 */
	function wsu_business_get_customizer_css() {

		/**
		 * Note – Styles are applied in this order:
		 * 1. Element specific
		 * 2. Helper classes
		 *
		 * This enables all helper classes to overwrite base element styles,
		 * meaning that any color classes applied in the block editor will
		 * have a higher priority than the base element styles.
		*/

		ob_start();

		$header_overlay_background_color = sanitize_hex_color( get_theme_mod( 'header_overlay_background_color', '#050019' ) );
		$opacity                         = absint( get_theme_mod( 'header_overlay_opacity', '85' ) );
		$footer_bg_color                 = sanitize_hex_color( get_theme_mod( 'footer_background_color' ) );
		$sub_footer_bg_color             = sanitize_hex_color( get_theme_mod( 'sub_footer_background_color' ) );
		$accent_color                    = sanitize_hex_color( get_theme_mod( 'accent_color' ) );

		wsu_business_generate_css( '#site-header:before', 'background-color', $header_overlay_background_color );
		wsu_business_generate_css( '#site-header:before', 'opacity', $opacity / 100 );
		wsu_business_generate_css( '#site-footer', 'background-color', $footer_bg_color );
		wsu_business_generate_css( '#footer-below', 'background-color', $sub_footer_bg_color );
		wsu_business_generate_css( 'button, input[type="submit"], .comment-reply-link', 'background-color', $accent_color );
		wsu_business_generate_css( 'a', 'color', $accent_color );

		// Return the results.
		return ob_get_clean();

	}
}
