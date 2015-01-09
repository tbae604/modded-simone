<?php
/**
 * foodnowyes functions and definitions
 *
 * @package foodnowyes
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'foodnowyes_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function foodnowyes_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on foodnowyes, use a find and replace
	 * to change 'foodnowyes' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'foodnowyes', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('large-thumb', 640, 480, true); // anytime new image uploaded, create two additional images
	add_image_size('index-thumb', 533, 400, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'foodnowyes' ),
		'social' => __('Social Menu', 'foodnowyes' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside'
//		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
//	add_theme_support( 'custom-background', apply_filters( 'foodnowyes_custom_background_args', array(
//		'default-color' => 'ffffff',
//		'default-image' => '',
//	) ) );

	/*
	 * Enable support for infinite scroll
	 */
	add_theme_support( 'infinite-scroll', array(
		'container'    => 'content',
	) );
}
endif; // foodnowyes_setup
add_action( 'after_setup_theme', 'foodnowyes_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function foodnowyes_widgets_init() { /* registers widgetized areas ('sidebars') for anywhere */
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'foodnowyes' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'foodnowyes' ),
		'id'            => 'sidebar-2',
		'description'   => __('Footer widgets area in the site footer', 'foodnowyes'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));
}
add_action( 'widgets_init', 'foodnowyes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function foodnowyes_scripts() {
	wp_enqueue_style( 'foodnowyes-style', get_stylesheet_uri() );

	wp_enqueue_style('foodnowyes-content-sidebar', get_template_directory_uri() . '/layouts/content-sidebar.css');

	wp_enqueue_style('foodnowyes-google-fonts', 'http://fonts.googleapis.com/css?family=Questrial|Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300,100italic,100');

	wp_enqueue_style('foodnowyes-fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

	wp_enqueue_script('foodnowyes-superfish', get_template_directory_uri() .  '/js/superfish.min.js', array(), '20150101', true);

	wp_enqueue_script('foodnowyes-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array(), '20150101', true);

	wp_enqueue_script( 'foodnowyes-hide-search', get_template_directory_uri() . '/js/hide-search.js', array(), '20150101', true );

	wp_enqueue_script( 'foodnowyes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'foodnowyes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script('foodnowyes-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array("masonry"), '20150103', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'foodnowyes_scripts' );

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
