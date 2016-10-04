<?php
/**
 * erin functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package erin
 */

if ( ! function_exists( 'erin_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function erin_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on erin, use a find and replace
	 * to change 'erin' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'erin', get_template_directory() . '/languages' );

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

	// Register image sizes
	add_image_size( 'grid-image', 360, 360, true );
	add_image_size( 'nav-image', 64, 64, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main' => esc_html__( 'Main Menu', 'erin' ),
		'footer' => esc_html__( 'Footer Menu', 'erin' ),
		'alt' => esc_html__( 'Footer Alt Menu', 'erin' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'erin_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_filter( 'body_class', function( $classes ) {
	    return array_merge( $classes, array( 'drawer drawer--right' ) );
	} );
}
endif;
add_action( 'after_setup_theme', 'erin_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function erin_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'erin_content_width', 640 );
}
add_action( 'after_setup_theme', 'erin_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function erin_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'erin' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'erin' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'erin_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function erin_scripts() {
	wp_enqueue_style( 'erin-style', get_stylesheet_uri() );
	wp_enqueue_style( 'erin-fa', get_template_directory_uri() . '/css/font-awesome.min.css');
	
	wp_enqueue_script( 'erin-js', get_template_directory_uri() . '/js/erin.min.js', array(), '20161215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'erin_scripts' );

// Adds animations to the home page
function erin_front_page_script() {
	if( is_front_page() ) {
		wp_enqueue_script( 'frontpage-js', get_template_directory_uri() . '/js/frontpage.min.js', array(), '20161003', true );
	}
}
add_action( 'wp_enqueue_scripts', 'erin_front_page_script' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
