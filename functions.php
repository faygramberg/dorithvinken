<?php
/**
 * DorithVinken functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DorithVinken
 */

if ( ! function_exists( 'dorithvinken_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dorithvinken_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on DorithVinken, use a find and replace
	 * to change 'dorithvinken' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'dorithvinken', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'dorithvinken' ),
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
	add_theme_support( 'custom-background', apply_filters( 'dorithvinken_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	// Add wide image support
	add_theme_support( 'align-wide' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add editor styles
	//add_theme_support('editor-styles');

	// Add custom logo
	add_theme_support( 'custom-logo' );

	// Editor color palette.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Primary', 'dorithvinken' ),
				'slug'  => 'primary',
				'color' => '#007bff',
			),
			array(
				'name'  => __( 'Secondary', 'dorithvinken' ),
				'slug'  => 'secondary',
				'color' => '#6c757d',
			),
			array(
				'name'  => __( 'Success', 'dorithvinken' ),
				'slug'  => 'success',
				'color' => '#28a745',
			),
			array(
				'name'  => __( 'Danger', 'dorithvinken' ),
				'slug'  => 'danger',
				'color' => '#dc3545',
			),
			array(
				'name'  => __( 'Warning', 'dorithvinken' ),
				'slug'  => 'warning',
				'color' => '#ffc107',
			),
			array(
				'name'  => __( 'Info', 'dorithvinken' ),
				'slug'  => 'info',
				'color' => '#17a2b8',
			),
			array(
				'name'  => __( 'Dark Gray', 'dorithvinken' ),
				'slug'  => 'dark',
				'color' => '#343a40',
			),
			array(
				'name'  => __( 'Light Gray', 'dorithvinken' ),
				'slug'  => 'light',
				'color' => '#f8f9fa',
			),
			array(
				'name'  => __( 'White', 'dorithvinken' ),
				'slug'  => 'white',
				'color' => '#FFF',
			),
		)
	);

	
}
endif;
add_action( 'after_setup_theme', 'dorithvinken_setup' );




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dorithvinken_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dorithvinken_content_width', 640 );
}
add_action( 'after_setup_theme', 'dorithvinken_content_width', 0 );


/**
 * Add CSS/JS Scritps
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Register Widget Areas
 */
require get_template_directory() . '/inc/widgets.php';

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
 * Bootstrap Walker.
 */
require get_template_directory() . '/inc/bootstrap-walker.php';

/**
 * Plugins Needed
 */
require get_template_directory() . '/plugin-activation/install-plugins.php';

/**
 * Metabox.
 */
require get_template_directory() . '/inc/metaboxes.php';

/**
 * Custom Post Type Settings
 */
require get_template_directory() . '/inc/cpt-settings.php';
