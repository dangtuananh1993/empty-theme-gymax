<?php
/**
 * emptytheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package emptytheme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'emptytheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function emptytheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on emptytheme, use a find and replace
		 * to change 'emptytheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'emptytheme', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'Menu-header' => esc_html__( 'Header Menu', 'emptytheme' ),
				'Menu-footer-information' => esc_html__( 'Footer Menu Info', 'emptytheme' ),
				'Menu-footer-quicklink' => esc_html__( 'Footer Menu Quicklink', 'emptytheme' ),
				'Menu-footer-my-account' => esc_html__( 'Footer Menu Account', 'emptytheme' ),
			)
		);
		// $location = get_nav_menu_locations();
		// $menu_id = $location['Menu-header'];
		// echo "<pre>";
		// print_r($location);
		// print_r($menu_id);
		// wp_die();

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
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'emptytheme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'emptytheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function emptytheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'emptytheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'emptytheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function emptytheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'emptytheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'emptytheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'emptytheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function emptytheme_scripts() {
	// wp_enqueue_style( 'emptytheme-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'emptytheme-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'emptytheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }

	//add css gymmax
	wp_register_style('gymmax-css', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('gymmax-css');

	wp_register_style('fontawesome', get_template_directory_uri() . '/css/fontawesome.min.css');
	wp_enqueue_style('fontawesome');

	wp_register_style('slick', get_template_directory_uri() . '/css/slick.css');
	wp_enqueue_style('slick');

	wp_register_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
	wp_enqueue_style('slick-theme');
	
	//add js gymmax
	wp_register_script('jquery-1', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), false, true);
	wp_enqueue_script('jquery-1');

	wp_register_script('gymmax-js', get_template_directory_uri() . '/js/scrip.js', ['jquery-1'], false, true);
	wp_enqueue_script('gymmax-js');

	wp_register_script('gymmax-slick', get_template_directory_uri() . '/js/slick.min.js', ['jquery-1'], false, true);
	wp_enqueue_script('gymmax-slick');

}
add_action( 'wp_enqueue_scripts', 'emptytheme_scripts' );

/**
 * Add image sizes
 */ 
add_image_size('slide', 1920, 950, true );
add_image_size('banner-image', 390, 250, false );
add_image_size('banner-image-icon', 56, 56, true );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//add_action('woocommerce_after_shop_loop_item_title' , 'action_woocommerce_after_shop_loop_item_title');

// function action_woocommerce_after_shop_loop_item_title(){
//     echo "<div class='product-meta'><span class='product-meta-label'>my text here 1</span></div>";
// }

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'About Us Settings',
		'menu_title'	=> 'About Us',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

add_theme_support( 'woocommerce' );