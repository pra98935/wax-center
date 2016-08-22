<?php
/**
 * wox Center Main functions files.
 */

// Wox center setup
function waxcenter_setup() {
	//load_theme_textdomain( 'waxcenter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array('height' => 240,'width'=> 240,'flex-height' => true,) );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );
	register_nav_menus( array(
		'primary-menu' 	=> __( 'Primary Menu', 'waxcenter' ),
		'footer-menu'  	=> __( 'Footer Menu', 'waxcenter' ),
		'login-menu'	=> __( 'Login Menu', 'waxcenter' ),
	) );

	add_theme_support( 'html5', array('search-form','comment-form','comment-list','gallery','caption',) );
	add_theme_support( 'post-formats', array('aside','image','video','quote','link','gallery','status','audio','chat',) );
	add_editor_style( array( 'css/editor-style.css', waxcenter_fonts_url() ) );
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'waxcenter_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 */
function waxcenter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'waxcenter_content_width', 840 );
}
add_action( 'after_setup_theme', 'waxcenter_content_width', 0 );

/**
 * Registers a widget area.
 */
function waxcenter_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'waxcenter' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'waxcenter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'waxcenter' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'waxcenter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Sidebar', 'waxcenter' ),
		'id'            => 'foter-sidebar',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'waxcenter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'waxcenter_widgets_init' );

if ( ! function_exists( 'waxcenter_fonts_url' ) ) :

function waxcenter_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'waxcenter' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'waxcenter' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'waxcenter' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 */
function waxcenter_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'waxcenter_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since wox Center 1.0
 */
function waxcenter_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'waxcenter-fonts', waxcenter_fonts_url(), array(), null );
	// Theme stylesheet.
	wp_enqueue_style( 'waxcenter-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 'all' );
	wp_enqueue_style( 'plugin-css', get_template_directory_uri() . '/css/plugin.css', array(), 'all' );
	wp_enqueue_style( 'font-awesome-min-css', get_template_directory_uri() . '/css/font-awesome.min.css', array(), 'all' );
	wp_enqueue_style( 'vegas-min-css', get_template_directory_uri() . '/css/vegas.min.css', array(), 'all' );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/animate.css', array(), 'all' );
	wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/custom.css', array(), 'all' );
	wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), 'all' );
	
	// Load the Jquery Script

	wp_enqueue_script( 'modernizr-custom.js', get_template_directory_uri() . '/js/modernizr-custom.js', array(), '3.7.3', true );
	wp_enqueue_script( 'jquery.min.js', get_template_directory_uri() . '/js/jquery.min.js', array(), '20160412', false );
	wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20160412', false );
	wp_enqueue_script( 'vegas.min.js', get_template_directory_uri() . '/js/vegas.min.js', array(), '20160412', false );
	wp_enqueue_script( 'plugin.js', get_template_directory_uri() . '/js/plugin.js', array(), '20160412', false );
	wp_enqueue_script( 'custom.js', get_template_directory_uri() . '/js/custom.js', array(), '20160412', false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'waxcenter-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160412' );
	}

	wp_localize_script( 'waxcenter-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'waxcenter' ),
		'collapse' => __( 'collapse child menu', 'waxcenter' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'waxcenter_scripts' );

/**
 * Adds custom classes to the array of body classes.
 */
function waxcenter_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'waxcenter_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since wox Center 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function waxcenter_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/*========================================================
 * Included Some helper files
==========================================================*/
//require get_template_directory() . '/';

function waxcenter_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'waxcenter_content_image_sizes_attr', 10 , 2 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since wox Center 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function waxcenter_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'waxcenter_widget_tag_cloud_args' );


/*==================================================================
 || Custom Post Type
====================================================================*/

// Slider Custom Post Type

add_action( 'init', 'create_slider_post_type' );
function create_slider_post_type() {
  	register_post_type( 'slider',
    	array(
      		'labels' => array(
        		'name' => __( 'Slider' ),
        		'singular_name' => __( 'Slider' )
      		),
      		'public' => true,
      		'has_archive' => true,
      		'supports'    => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' , 'custom-fields'),
    	)
  	);
}

// Faq Custom Post Type

add_action( 'init', 'create_faq_post_type' );
function create_faq_post_type() {
  	register_post_type( 'wax_faq',
    	array(
      		'labels' 	=> array(
        			'name' 	=> __( 'FAQ' ),
        			'singular_name' => __( 'Faq' )
      		),
      		'public' 	  => true,
      		'has_archive' => true,
      		'supports'    => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' , 'custom-fields'),
    	)
  	);
}

// Services Custom Post Type

add_action( 'init', 'create_packages_post_type' );
function create_packages_post_type() {
  	register_post_type( 'wax_packages',
    	array(
      		'labels' 	=> array(
        			'name' 	=> __( 'Packages' ),
        			'singular_name' => __( 'Packages' )
      		),
      		'public' 	  => true,
      		'has_archive' => true,
      		'supports'    => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' , 'custom-fields' ),
    	)
  	);
}