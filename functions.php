<?php
if ( ! function_exists( 'mindu_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function mindu_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mindu, use a find and replace
	 * to change 'mindu' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mindu', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded  tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	// register_nav_menus( array(
	// 	'primary' => __( 'Primary Menu',      'mindu' )
	// ) );

	register_nav_menus( array(
		'main-menu'=> __('Main Menu', 'mindu'),
		'Language_Menu'=> __('Language Option Menu', 'mindu'),
		'Footer_Menu'=> __('Footer Menu', 'mindu')
	));
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		 'image', 'video', 'quote', 'gallery',  'audio'
	) );

	remove_theme_support('widgets-block-editor');

}
endif; 

// mindu_setup
add_action( 'after_setup_theme', 'mindu_setup' );


/**
 * Add a sidebar.
 */
function mindu_footer_widgets() {
	register_sidebar( 
		array(
		'name'          => __( 'Footer-1 : Widget-1 ', 'mindu' ),
		'id'            => 'footer1-widget-1',
		'description'   => __( 'Footer widget 1 Information.', 'mindu' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget mb-30 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title text-white mb-20">',
		'after_title'   => '</h3>',
	)
	);
	register_sidebar( 
		array(
		'name'          => __( 'Footer-2 : Widget-2 ', 'mindu' ),
		'id'            => 'footer2-widget-2',
		'description'   => __( 'Footer widget 2 Information.', 'mindu' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-80 mb-30 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title text-white mb-20">',
		'after_title'   => '</h3>',
	)
	);
	register_sidebar( 
		array(
		'name'          => __( 'Footer-3 : Widget-3 ', 'mindu' ),
		'id'            => 'footer3-widget-3',
		'description'   => __( 'Footer widget 3Information.', 'mindu' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-80 mb-30 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title text-white mb-20">',
		'after_title'   => '</h3>',
	)
	);
	register_sidebar( 
		array(
		'name'          => __( 'Footer-4 : Widget-4 ', 'mindu' ),
		'id'            => 'footer4-widget-4',
		'description'   => __( 'Footer widget 4 Information.', 'mindu' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-80 mb-30 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title text-white mb-20">',
		'after_title'   => '</h3>',
	)
	);
	//Blog Post Sidebar 
	register_sidebar( 
		array(
		'name'          => __( 'BlogPost-Widget ', 'mindu' ),
		'id'            => 'blogpost-widget-1',
		'description'   => __( 'Blog post widget 1 Information.', 'mindu' ),
		'before_widget' => '<div id="%1$s" class="tp-sidebar-service-list tp-sidebar-border pb-30 mb-35 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-sidebar-service-title mb-20 tp-ff-body">',
		'after_title'   => '</h3>',
	)
	);
	register_sidebar( 
		array(
		'name'          => __( 'BlogPost-Tag-Widget ', 'mindu' ),
		'id'            => 'blogpost-tag-widget',
		'description'   => __( 'Blog post Tag widget Information.', 'mindu' ),
		'before_widget' => '<div id="%1$s" class="tp-sidebar-widget tp-sidebar-border pb-30 mb-50 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-sidebar-service-title mb-20 tp-ff-body">',
		'after_title'   => '</h3>',
	)
	);
}
add_action( 'widgets_init', 'mindu_footer_widgets' );

function add_theme_scripts() {

	//! CSS
	wp_enqueue_style('style', get_stylesheet_uri());
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.3.8', 'all' );
	wp_enqueue_style('swiper-bundle',get_template_directory_uri().'/assets/css/swiper-bundle.css', array(), '8.4.5', 'all');
	wp_enqueue_style('magnific-popup',get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0.0', 'all');
	wp_enqueue_style('font-awesome-pro',get_template_directory_uri().'/assets/css/font-awesome-pro.css', array(), '6.0.0', 'all');
	wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.css', array(), '1.0.0', 'all');
	wp_enqueue_style('mindu-spacing',get_template_directory_uri().'/assets/css/spacing.css', array(), '1.0.0', 'all');
	wp_enqueue_style('mindu-main',get_template_directory_uri().'/assets/css/main.css', array(), '1.0.0', 'all');

	// wp_register_style( 'mindu-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all' );
	// wp_enqueue_style('mindu-custom');
	wp_enqueue_style('mindu-custom',get_template_directory_uri().'/assets/css/custom.css', array(), '1.0.0', 'all');

	//! Js
	
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array('jquery'), '5.3.8', true );
	wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array('jquery'), '8.4.5', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array(), '1.5.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.1.3', true );
	wp_enqueue_script( 'jquery-one-page-nav', get_template_directory_uri() . '/assets/js/jquery-one-page-nav.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'mindu-slider-init', get_template_directory_uri() . '/assets/js/slider-init.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'mindu-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function redux_option(){
if ( class_exists( 'Redux' ) ) {
        require_once('include/theme-option.php');
    }
}

add_action( 'after_setup_theme', 'redux_option' );


require_once('include/theme-helper.php');
require_once('include/nav-walker.php');