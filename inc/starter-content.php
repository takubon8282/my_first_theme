<?php
/**
 * WSU Business Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 */

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `wsu_business_starter_content` filter before returning.
 *
 * @return array a filtered array of args for the starter_content.
 */
function wsu_business_get_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets'   => array(
			// Place one core-defined widgets in the first footer widget area.
			'sidebar-1' => array(
				'text_about',
			),
			// Place one core-defined widgets in the second footer widget area.
			'footer-1'  => array(
				'text_business_info',
			),
			// Place one core-defined widgets in the second footer widget area.
			'footer-2'  => array(
				'text_about',
			),
			'footer-3'  => array(
				'text_about',
			),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'     => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => __( 'Website Setup Business Theme', 'wsu-business' ),
				'template'     => 'templates/template-full-width.php',
				'post_content' =>
						'<!-- wp:spacer {"height":50} -->
						<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->

						<!-- wp:media-text {"align":"","mediaId":100,"mediaLink":"","mediaType":"image","mediaWidth":47,"imageFill":false} -->
						<div class="wp-block-media-text is-stacked-on-mobile" style="grid-template-columns:47% auto"><figure class="wp-block-media-text__media"><img src="' . get_theme_file_uri() . '/assets/images/wsu-profile-image.jpg" alt="" class="wp-image-100"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":""} -->
						<p>' . __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'wsu-business' ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"placeholder":""} -->
						<p>' . __( 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'wsu-business' ) . '</p>
						<!-- /wp:paragraph --></div></div>
						<!-- /wp:media-text -->

						<!-- wp:spacer {"height":50} -->
						<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->

						<!-- wp:columns {"customBackgroundColor":"#e9f0f7","align":"full"} -->
						<div class="wp-block-columns alignfull has-background" style="background-color:#e9f0f7"><!-- wp:column -->
						<div class="wp-block-column"><!-- wp:cover {"url":"' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-3.jpg","id":96,"dimRatio":0} -->
						<div class="wp-block-cover" style="background-image:url(' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-3.jpg)"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"","fontSize":"large"} -->
						<p class="has-text-align-center has-large-font-size"></p>
						<!-- /wp:paragraph --></div></div>
						<!-- /wp:cover -->

						<!-- wp:paragraph -->
						<p></p>
						<!-- /wp:paragraph --></div>
						<!-- /wp:column -->

						<!-- wp:column {"className":"padding-100"} -->
						<div class="wp-block-column padding-100"><!-- wp:heading -->
						<h2>' . __( 'Business Heading', 'wsu-business' ) . '</h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'wsu-business' ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p>' . __( 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'wsu-business' ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p>' . __( 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'wsu-business' ) . '</p>
						<!-- /wp:paragraph --></div>
						<!-- /wp:column --></div>
						<!-- /wp:columns -->

						<!-- wp:columns {"customBackgroundColor":"#e9f0f7","align":"full"} -->
						<div class="wp-block-columns alignfull has-background" style="background-color:#e9f0f7"><!-- wp:column {"className":"padding-100"} -->
						<div class="wp-block-column padding-100"><!-- wp:heading -->
						<h2>' . __( 'Business Heading', 'wsu-business' ) . '</h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'wsu-business' ) . '</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p>' . __( 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'wsu-business' ) . '</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p>' . __( 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'wsu-business' ) . '</p>
						<!-- /wp:paragraph --></div>
						<!-- /wp:column -->
						<!-- wp:column -->
						<div class="wp-block-column"><!-- wp:cover {"url":"' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-5.jpg","id":98,"dimRatio":0} -->
						<div class="wp-block-cover" style="background-image:url(' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-5.jpg)"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"","fontSize":"large"} -->
						<p class="has-text-align-center has-large-font-size"></p>
						<!-- /wp:paragraph --></div></div>
						<!-- /wp:cover -->
						<!-- wp:paragraph -->
						<p></p>
						<!-- /wp:paragraph --></div>
						<!-- /wp:column --></div>
						<!-- /wp:columns -->
						<!-- wp:columns {"customBackgroundColor":"#e9f0f7","align":"full"} -->
						<div class="wp-block-columns alignfull has-background" style="background-color:#e9f0f7"><!-- wp:column -->
						<div class="wp-block-column"><!-- wp:cover {"url":"' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-1.jpg","id":94,"dimRatio":0} -->
						<div class="wp-block-cover" style="background-image:url(' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-1.jpg)"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"","fontSize":"large"} -->
						<p class="has-text-align-center has-large-font-size"></p>
						<!-- /wp:paragraph --></div></div>
						<!-- /wp:cover --></div>
						<!-- /wp:column -->
						<!-- wp:column {"className":"padding-100"} -->
						<div class="wp-block-column padding-100"><!-- wp:heading -->
						<h2>' . __( 'Business Heading', 'wsu-business' ) . '</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p>' . __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'wsu-business' ) . '</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p>' . __( 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'wsu-business' ) . '</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p>' . __( 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'wsu-business' ) . '</p>
						<!-- /wp:paragraph --></div>
						<!-- /wp:column --></div>
						<!-- /wp:columns -->
						<!-- wp:spacer {"height":50} -->
						<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->
						<!-- wp:heading {"align":"center","className":"underline"} -->
						<h2 class="has-text-align-center underline">' . __( 'Clients I Have Worked With', 'wsu-business' ) . '</h2>
						<!-- /wp:heading -->
						<!-- wp:gallery {"ids":[119,124,128,129,130],"columns":5,"sizeSlug":"medium"} -->
						<figure class="wp-block-gallery columns-5 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/wsu-client-logo-1.jpg" alt="" data-id="119" data-link="" class="wp-image-119"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/wsu-client-logo-2.jpg" alt="" data-id="124" data-link="" class="wp-image-124"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/wsu-client-logo-5.jpg" alt="" data-id="128" data-full-url="' . get_theme_file_uri() . '/assets/images/wsu-client-logo-5.jpg" data-link="" class="wp-image-128"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/wsu-client-logo-4.jpg" alt="" data-id="129" data-full-url="' . get_theme_file_uri() . '/assets/images/wsu-client-logo-4.jpg" data-link="" class="wp-image-129"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/wsu-client-logo-3.jpg" alt="" data-id="130" data-full-url="' . get_theme_file_uri() . '/assets/images/wsu-client-logo-3.jpg" data-link="" class="wp-image-130"/></figure></li></ul></figure>
						<!-- /wp:gallery -->
						<!-- wp:spacer {"height":20} -->
						<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->
						<!-- wp:cover {"url":"' . get_theme_file_uri() . '/assets/images/wsu-map.jpg","id":114,"dimRatio":80,"customOverlayColor":"#30425b","align":"full"} -->
						<div class="wp-block-cover alignfull has-background-dim-80 has-background-dim" style="background-image:url(' . get_theme_file_uri() . '/assets/images/wsu-map.jpg);background-color:#30425b"><div class="wp-block-cover__inner-container"><!-- wp:heading {"align":"center","level":3} -->
						<h3 class="has-text-align-center">' . __( 'Reach Out To Us', 'wsu-business' ) . '</h3>
						<!-- /wp:heading -->
						<!-- wp:group -->
						<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:paragraph {"align":"center"} -->
						<p class="has-text-align-center">' . __( 'Jackson Heights, NY 11372<br>+0122-123-123<br>sales@emailwebsite.com', 'wsu-business' ) . '</p>
						<!-- /wp:paragraph --></div></div>
						<!-- /wp:group -->
						<!-- wp:paragraph -->
						<p></p>
						<!-- /wp:paragraph --></div></div>
						<!-- /wp:cover -->
						<!-- wp:spacer {"height":50} -->
						<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->
						<!-- wp:heading -->
						<h2>' . __( 'Latest Posts', 'wsu-business' ) . '</h2>
						<!-- /wp:heading -->
						<!-- wp:latest-posts {"postsToShow":6,"displayPostDate":true} /-->
						<!-- wp:gallery {"ids":[99,98,96,94,95,97],"columns":3,"align":"full"} -->
						<figure class="wp-block-gallery alignfull columns-3 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-6.jpg" alt="" data-id="99" data-full-url="' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-6.jpg" data-link="" class="wp-image-99"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-5.jpg" alt="" data-id="98" data-full-url="' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-5.jpg" data-link="" class="wp-image-98"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-3.jpg" alt="" data-id="96" data-full-url="' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-3.jpg" data-link="" class="wp-image-96"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-1.jpg" alt="" data-id="94" data-full-url="' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-1.jpg" data-link="" class="wp-image-94"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-2.jpg" alt="" data-id="95" data-full-url="' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-2.jpg" data-link="" class="wp-image-95"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-4.jpg" alt="" data-id="97" data-full-url="' . get_theme_file_uri() . '/assets/images/wsu-business-gallery-4.jpg" data-link="" class="wp-image-97"/></figure></li></ul></figure>
						<!-- /wp:gallery -->
						<!-- wp:quote -->
						<blockquote class="wp-block-quote"><p>' . __( 'JR produced the best photos of our wedding. 10 out of 10 would recommend him and his team for people who need their event covered.', 'wsu-business' ) . '</p><cite>' . __( 'Random Human', 'wsu-business' ) . '</cite></blockquote>
						<!-- /wp:quote -->',
			),
			'about',
			'contact',
			'blog',
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{front}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "Header Menu" location.
			'menu-1' => array(
				'name'  => __( 'Header Menu', 'wsu-business' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
	);

	/**
	 * Filters WSU Business array of starter content.
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'wsu_business_starter_content', $starter_content );

}
