<?php
/**
 * Arkitekter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Arkitekter
 */

if ( ! function_exists( 'arkitekter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function arkitekter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Arkitekter, use a find and replace
	 * to change 'arkitekter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'arkitekter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Set up the WordPress core custom logo feature.
	add_theme_support( 'custom-logo', apply_filters( 'arkitekter_custom_logo_args', array(
        'width'       		=> 376,
		'height'      		=> 38,
        'flex-height' 		=> true,
        'flex-width'  		=> true
	) ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Main Navigation', 'arkitekter' ),
		'mobile' => esc_html__( 'Mobile Navigation', 'arkitekter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'arkitekter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function arkitekter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'arkitekter_content_width', 640 );
}
add_action( 'after_setup_theme', 'arkitekter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function arkitekter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'arkitekter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'arkitekter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Section', 'arkitekter' ),
		'id'            => 'footer-section',
		'description'   => esc_html__( 'Add widgets here.', 'arkitekter' ),
		'before_widget' => '<div class="footer-section">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'arkitekter_widgets_init' );

/**
 * Enqueue script.
 */
function arkitekter_scripts() {
	wp_enqueue_script( 'arkitekter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'arkitekter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Main scripts of the theme.
	wp_enqueue_script( 'arkitekter-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'arkitekter_scripts' );

/**
 * Enqueue styles.
 */
function arkitekter_styles() {
	// Add Google fonts.
	wp_enqueue_style( 'arkitekter-fonts', 'http://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i' );

	// Enqueue magnific popup plugin.
	wp_enqueue_style( 'arkitekter-magnific-popup',  get_template_directory_uri() . '/assets/css/magnific-popup.css' );

	// Enqueue hamburger plugin.
	wp_enqueue_style( 'arkitekter-hamburger-style',  get_template_directory_uri() . '/assets/css/hamburger.css' );

	// Enqueue default theme stylesheet.
	wp_enqueue_style( 'arkitekter-style',  get_template_directory_uri() . '/style.css' );

	// Enqueue custom theme stylesheet.
	wp_enqueue_style( 'arkitekter-custom-style',  get_template_directory_uri() . '/assets/css/custom-style.css' );
}
add_action( 'wp_enqueue_scripts', 'arkitekter_styles' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Widgets additions.
 */
if ( class_exists( 'SiteOrigin_Widget' ) ) :
	require get_template_directory() . '/inc/arkitekter-widgets.php';
endif;