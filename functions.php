<?php
/**
 * WSU Business functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wsu_business_theme_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	$header_default = array(
		'default-image' => get_template_directory_uri() . '/assets/images/wsu-business-header-bg.jpg',
	);
	add_theme_support( 'custom-header', $header_default );

	add_theme_support( 'custom-header-uploads' );

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'ffffff',
		)
	);

	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 1040;
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1040, 9999 );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 120,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WSU Business, use a find and replace
	 * to change 'wsu-business' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wsu-business' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	/*
	 * Adds starter content to highlight the theme on fresh sites.
	 * This is done conditionally to avoid loading the starter content on every
	 * page load, as it is a one-off operation only needed once in the customizer.
	 */
	if ( is_customize_preview() ) {
		require get_template_directory() . '/inc/starter-content.php';
		add_theme_support( 'starter-content', wsu_business_get_starter_content() );
	}

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

}

add_action( 'after_setup_theme', 'wsu_business_theme_support' );

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/template-tags.php';

// Handle SVG icons.
require get_template_directory() . '/classes/class-wsu-business-svg-icons.php';
require get_template_directory() . '/inc/svg-icons.php';

// Handle Customizer settings.
require get_template_directory() . '/classes/class-wsu-business-customize.php';

// Custom CSS.
require get_template_directory() . '/inc/custom-css.php';

/**
 * Register and Enqueue Styles.
 */
function wsu_business_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'wsu-business-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style( 'wsu-business-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:700,700italic|Lato:400,400italic,700,700italic', array(), $theme_version );

	// Add output of Customizer settings as inline style.
	wp_add_inline_style( 'wsu-business-style', wsu_business_get_customizer_css( 'front-end' ) );

}

add_action( 'wp_enqueue_scripts', 'wsu_business_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function wsu_business_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'wsu-business-navigation-js', get_template_directory_uri() . '/assets/js/navigation.js', array(), $theme_version, true );

}

add_action( 'wp_enqueue_scripts', 'wsu_business_register_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function wsu_business_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'wsu_business_skip_link_focus_fix' );


/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function wsu_business_menus() {

	$locations = array(
		'menu-1' => __( 'Header Menu', 'wsu-business' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'wsu_business_menus' );

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 */
function wsu_business_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#site-content">' . esc_html__( 'Skip to the content', 'wsu-business' ) . '</a>';
}

add_action( 'wp_body_open', 'wsu_business_skip_link', 5 );

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wsu_business_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Primary Sidebar.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Sidebar', 'wsu-business' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'wsu-business' ),
			)
		)
	);

	// Below Header Widget Area.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Below Header', 'wsu-business' ),
				'id'          => 'header-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'wsu-business' ),
			)
		)
	);

	// Above Footer Widget Area.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Above Footer', 'wsu-business' ),
				'id'          => 'footer-4',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'wsu-business' ),
			)
		)
	);

	// Footer First Widget Area.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer One', 'wsu-business' ),
				'id'          => 'footer-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'wsu-business' ),
			)
		)
	);

	// Footer Second Widget Area.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer Two', 'wsu-business' ),
				'id'          => 'footer-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'wsu-business' ),
			)
		)
	);

	// Footer Third Widget Area.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer Three', 'wsu-business' ),
				'id'          => 'footer-3',
				'description' => __( 'Widgets in this area will be displayed in the third column in the footer.', 'wsu-business' ),
			)
		)
	);

}

add_action( 'widgets_init', 'wsu_business_sidebar_registration' );

/**
 * Overwrite default more tag with styling and screen reader markup.
 *
 * @param string $html The default output HTML for the more tag.
 *
 * @return string $html
 */
function wsu_business_read_more_tag( $html ) {
	return preg_replace( '/<a(.*)>(.*)<\/a>/iU', sprintf( '<div class="read-more-button-wrap"><a$1><span class="faux-button">$2</span> <span class="screen-reader-text">"%1$s"</span></a></div>', get_the_title( get_the_ID() ) ), $html );
}

add_filter( 'the_content_more_link', 'wsu_business_read_more_tag' );

function firstBotton($atts, $contents = null){
	$color = (isset($atts['color'])) ? esc_attr($atts['color']) : "#FF1659";
	$link =  (isset($atts['link'])) ? esc_attr($atts['link']) : null;
	$content = do_shortcode($content);

	$buttonobj = (OBJECT) [
		"color" => $color,
		"link" => $link,
		"content" => $content
	];

	$output = <<< EOT
     <a class="btn-wrapper" href="{$buttonObj->link}" style="background: '{$buttonObj->color}';">
      <span class="btn-txt">{$buttonObj->content}</span>
     </a>  
    EOT;

  return $output;
}

add_shortcode('custom-button','firstButton');