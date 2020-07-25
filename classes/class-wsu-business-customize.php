<?php
/**
 * Customizer settings for this theme.
 */

if ( ! class_exists( 'WSU_Business_Customize' ) ) {
	/**
	 * CUSTOMIZER SETTINGS
	 */
	class WSU_Business_Customize {

		/**
		 * Register customizer options.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		public static function register( $wp_customize ) {

			/**
			 * Site Title & Description.
			 * */
			$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
			$wp_customize->remove_control('header_textcolor');
			
			// Footer Background Color.
			$wp_customize->add_setting(
				'footer_background_color',
				array(
					'default'           => '#22222e',
					'sanitize_callback' => 'sanitize_hex_color',
					'transport'         => 'refresh',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_background_color',
					array(
						'label'   => __( 'Footer Background Color', 'wsu-business' ),
						'section' => 'colors',
					)
				)
			);

			// Sub Footer Background Color.
			$wp_customize->add_setting(
				'sub_footer_background_color',
				array(
					'default'           => '#181924',
					'sanitize_callback' => 'sanitize_hex_color',
					'transport'         => 'refresh',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sub_footer_background_color',
					array(
						'label'   => __( 'Sub Footer Background Color', 'wsu-business' ),
						'section' => 'colors',
					)
				)
			);

			// Accent Color.
			$wp_customize->add_setting(
				'accent_color',
				array(
					'default'           => '#2f4565',
					'sanitize_callback' => 'sanitize_hex_color',
					'transport'         => 'refresh',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'accent_color',
					array(
						'label'   => __( 'Accent Color', 'wsu-business' ),
						'section' => 'colors',
					)
				)
			);

			/**
			 * Header Background Settings
			 */

			/* Overlay Background Color ------ */

			$wp_customize->add_setting(
				'header_overlay_background_color',
				array(
					'default'           => '#050019',
					'sanitize_callback' => 'sanitize_hex_color',
					'transport'         => 'refresh',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'header_overlay_background_color',
					array(
						'label'       => __( 'Overlay Background Color', 'wsu-business' ),
						'description' => __( 'The color used for the overlay. Defaults to the accent color.', 'wsu-business' ),
						'section'     => 'header_image',
					)
				)
			);

			/* Overlay Color Opacity --------- */

			$wp_customize->add_setting(
				'header_overlay_opacity',
				array(
					'default'           => 85,
					'sanitize_callback' => 'absint',
					'transport'         => 'refresh',
				)
			);

			$wp_customize->add_control(
				'header_overlay_opacity',
				array(
					'label'       => __( 'Overlay Opacity', 'wsu-business' ),
					'description' => __( 'Make sure that the contrast is high enough so that the text is readable.', 'wsu-business' ),
					'section'     => 'header_image',
					'type'        => 'range',
					'input_attrs' => wsu_business_customize_opacity_range(),
				)
			);

		}

	}

	// Setup the Theme Customizer settings and controls.
	add_action( 'customize_register', array( 'WSU_Business_Customize', 'register' ) );

}

/**
 * PARTIAL REFRESH FUNCTIONS
 * */
if ( ! function_exists( 'wsu_business_customize_partial_blogname' ) ) {
	/**
	 * Render the site title for the selective refresh partial.
	 */
	function wsu_business_customize_partial_blogname() {
		bloginfo( 'name' );
	}
}

if ( ! function_exists( 'wsu_business_customize_partial_blogdescription' ) ) {
	/**
	 * Render the site description for the selective refresh partial.
	 */
	function wsu_business_customize_partial_blogdescription() {
		bloginfo( 'description' );
	}
}

/**
 * Input attributes for cover overlay opacity option.
 *
 * @return array Array containing attribute names and their values.
 */
function wsu_business_customize_opacity_range() {
	/**
	 * Filter the input attributes for opacity
	 *
	 * @param array $attrs {
	 *     The attributes
	 *
	 *     @type int $min Minimum value
	 *     @type int $max Maximum value
	 *     @type int $step Interval between numbers
	 * }
	 */
	return apply_filters(
		'wsu_business_customize_opacity_range',
		array(
			'min'  => 0,
			'max'  => 100,
			'step' => 5,
		)
	);
}
