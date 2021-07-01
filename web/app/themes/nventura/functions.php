<?php

/**
 * nventura functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nventura
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('nventura_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nventura_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nventura, use a find and replace
		 * to change 'nventura' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('nventura', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'nventura'),
				'menu-legal' => esc_html__('Menu Legal', 'nventura'),
				'menu-dahab' => esc_html__('Menu dahab', 'nventura'),
			)
		);

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
				'nventura_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'nventura_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nventura_content_width()
{
	$GLOBALS['content_width'] = apply_filters('nventura_content_width', 640);
}
add_action('after_setup_theme', 'nventura_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nventura_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Slide Home', 'nventura'),
			'id'            => 'slide-home',
			'description'   => esc_html__('Add widgets here.', 'nventura'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Buscador Home', 'nventura'),
			'id'            => 'busc-home',
			'description'   => esc_html__('Add widgets here.', 'nventura'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Slide Qui som', 'nventura'),
			'id'            => 'slide-quisom',
			'description'   => esc_html__('Add widgets here.', 'nventura'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Slide Contactar', 'nventura'),
			'id'            => 'slide-contactar',
			'description'   => esc_html__('Add widgets here.', 'nventura'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'nventura'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'nventura'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Idiomas header', 'nventura'),
			'id'            => 'idiomas',
			'description'   => esc_html__('Add widgets here.', 'nventura'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Enlaces footer', 'nventura'),
			'id'            => 'enlaces',
			'description'   => esc_html__('Add widgets here.', 'nventura'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Menú footer', 'nventura'),
			'id'            => 'menu-footer',
			'description'   => esc_html__('Add widgets here.', 'nventura'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Menú footer final', 'nventura'),
			'id'            => 'footer4',
			'description'   => esc_html__('Add widgets here.', 'nventura'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'nventura_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function nventura_scripts()
{

	// wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css', array());
	wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', array());
	wp_style_add_data('nventura-style', 'rtl', 'replace');
	wp_enqueue_style('nventura-style', get_stylesheet_uri(), array());
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), _S_VERSION);
	// wp_enqueue_script('nventura-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('myjs', get_template_directory_uri() . '/js/jquery.bxslider.js', array('jquery'), 4.2, true);
	wp_enqueue_script('bxSlideer', get_template_directory_uri() . '/js/myjquery.js', array('jquery'), true);
	wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), true);
	wp_enqueue_script('map', get_template_directory_uri() . '/js/map.js', array('jquery'), true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	wp_enqueue_style('fuentes-google', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&display=swap', array());
}
add_action('wp_enqueue_scripts', 'nventura_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Register Custom (bootstrap) Navigation Walker
 */
function register_navwalker()
{
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');


/*------------------------------------*
	PSA ACF
*------------------------------------*/
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'General Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme CTA Settings',
		'menu_title'	=> 'CTA',
		'parent_slug'	=> 'theme-general-settings',
	));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Direccion Settings',
	// 	'menu_title'	=> 'Dirección',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
};
/*
* Desactiva la opción de «Modo a pantalla completa»
* por default del editor de Gutenberg.
*/
function psa_desactivar_editor_gb_pantalla_completa_por_default()
{
	$script = "window.onload = function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } }";
	wp_add_inline_script('wp-blocks', $script);
}
add_action('enqueue_block_editor_assets', 'psa_desactivar_editor_gb_pantalla_completa_por_default');
/*------------------------------------*
Mostrar miniatura
*------------------------------------*/
//Nueva columna con las miniaturas en los listados de entradas y páginas
if (!function_exists('AddThumbColumn') && function_exists('add_theme_support')) {

	// por si el tema no tiene soporte de miniaturas para entradas y páginas, lo habilitamos y creamos la columna a la que llamamos Miniatura
	add_theme_support('post-thumbnails', array('post', 'page'));

	function AddThumbColumn($cols)
	{

		$cols['thumbnail'] = __('Miniatura');

		return $cols;
	}

	function AddThumbValue($column_name, $post_id)
	{

		$width = (int) 135;
		$height = (int) 135;

		if ('thumbnail' == $column_name) {
			// desde las miniaturas de WP 2.9
			$thumbnail_id = get_post_meta($post_id, '_thumbnail_id', true);
			// desde la galería
			$attachments = get_children(array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image'));
			if ($thumbnail_id)
				$thumb = wp_get_attachment_image($thumbnail_id, array($width, $height), true);
			elseif ($attachments) {
				foreach ($attachments as $attachment_id => $attachment) {
					$thumb = wp_get_attachment_image($attachment_id, array($width, $height), true);
				}
			}
			if (isset($thumb) && $thumb) {
				echo $thumb;
			} else {
				echo __('None');
			}
		}
	}
}
// para las entradas
add_filter('manage_propietat_posts_columns', 'AddThumbColumn');
add_action('manage_propietat_posts_custom_column', 'AddThumbValue', 10, 2);

// add this to functions.php
//register acf fields to Wordpress API
//https://support.advancedcustomfields.com/forums/topic/json-rest-api-and-acf/

function acf_to_rest_api($response, $post, $request)
{
	if (!function_exists('get_fields')) return $response;

	if (isset($post)) {
		$acf = get_fields($post->id);
		$response->data['acf'] = $acf;
	}
	return $response;
}
add_filter('rest_prepare_property', 'acf_to_rest_api', 10, 3);


add_image_size('nv-340x340', 340, 340, true);
add_image_size('nv-340x340-nc', 340, 340, false);
