<?php
/**
 * m2collab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package m2collab
 */

//  Скрыть админ-бар вне админки.
add_filter('show_admin_bar', '__return_false');

/* 
 *	Required: set 'ot_theme_mode' filter true. Подключение фильтра плагина OptionTree
 */
add_filter('ot_theme_mode', '__return_true');

/*
 *	Required: include OptionTree. Подключение к теме OptionTree.
 */
require(trailingslashit( get_template_directory_uri() ) . 'option-tree/ot-loader.php');

if ( ! function_exists( 'm2col_setup' ) ) :
	function m2col_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Автоматическое расставление тегов "title"
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Поддержка миниатюр
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location. Регистрация меню.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'm2col' ),
		) );

		/*
		 * Поддержка поисков, комментарий, галлерей, картинок постов.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}
endif;
add_action( 'after_setup_theme', 'm2col_setup' );

/*
 * Register widget area. Регистрация сайтбаров (область виджетов).
 */
function m2col_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'm2col' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'm2col' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'm2col_widgets_init' );

/*
 * Enqueue scripts and styles.
 * Подключение стилей и скриптов.
 */
function m2col_scripts() {
	wp_enqueue_style('style-css', get_stylesheet_uri());

	wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr');
	wp_enqueue_style('slick-css', get_template_directory_uri() . 'assets/slick/slick.css');
	wp_enqueue_style('slick-theme', get_template_directory_uri() . 'assets/slick/slick-theme.css');
	wp_enqueue_style('style-th', get_template_directory_uri() . '/assets/css/style-th.css');
	wp_enqueue_style( 'm2col-style', get_template_directory_uri() . '/assets/css/style.css' );


	//  Правильная регистрация jQuery
	wp_deregister_script( 'jquery' );
	wp_register_script('jquery', get_template_directory_uri() . 'assets/js/jquery.js');
	wp_enqueue_script('jquery');

	wp_enqueue_script('slick-min-js', get_template_directory_uri() . 'assets/slick/slick.min.js');
	wp_enqueue_script('google-maps', '//maps.googleapis.com/maps/api/js?key=AIzaSyAvRgLYDOQfs9dQOcWZppo_QJ1ZyBWGwrM');
	wp_enqueue_script('m2col-js', get_template_directory_uri() . 'assets/js/js.js');
	wp_enqueue_script('main-js', get_template_directory_uri() . 'assets/js/script.js');

//	wp_enqueue_script( 'm2col-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

//	wp_enqueue_script( 'm2col-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
}
add_action( 'wp_enqueue_scripts', 'm2col_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//if ( defined( 'JETPACK__VERSION' ) ) {
//	require get_template_directory() . '/inc/jetpack.php';
//}

