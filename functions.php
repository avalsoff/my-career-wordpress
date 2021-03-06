<?php
/**
 * My Career functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package My_Career
 */

function my_career_query_vars($vars) {
	$vars[] = 'region';
	$vars[] = 'prof';
	return $vars;
}
add_filter('query_vars', 'my_career_query_vars');


// if ( ! function_exists( 'my_career_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function my_career_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on My Career, use a find and replace
		 * to change 'my-career' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'my-career', get_template_directory() . '/languages' );

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
		// register_nav_menus([
		// 	'headerTopMenu' 		=> 'Верхнее меню шапки',
		// 	'headerBottomMenu' 	=> 'Нижнее меню шапки',
		// 	'footerMenu'				=> 'Меню подвала'					
		// ]);

		register_nav_menu('headerTopMenu', 'Верхнее меню шапки');
		register_nav_menu('headerBottomMenu', 'Нижнее меню шапки');
		register_nav_menu('footerMenu', 'Меню подвала');

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
		add_theme_support( 'custom-background', apply_filters( 'my_career_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
// endif;
add_action( 'after_setup_theme', 'my_career_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function my_career_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'my_career_content_width', 640 );
}
add_action( 'after_setup_theme', 'my_career_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function my_career_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'my-career' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'my-career' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'my_career_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function my_career_scripts() {
	wp_enqueue_style( 'my-career-style', get_stylesheet_uri() );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&amp;subset=cyrillic', false );

	wp_enqueue_script( 'my-career-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'my-career-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'my-career-main', get_template_directory_uri() . '/js/index.min.js', array('jquery'), microtime(), true );
}
add_action( 'wp_enqueue_scripts', 'my_career_scripts' );

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
 * Custom breadcrumbs
 */
require get_template_directory() . '/inc/breadcrumbs.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function my_career_adjust_queries($query) {
	if ( !is_admin() 
		&& is_post_type_archive('profession') 
    && $query->is_main_query() 
  ) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);
  }
}

add_action('pre_get_posts', 'my_career_adjust_queries');

function my_template_select() {
	if (is_category() && !is_feed()) {
			if (is_category(get_cat_id('useful-materials')) || cat_is_ancestor_of(get_cat_id('useful-materials'), get_query_var('cat'))) {
					load_template(TEMPLATEPATH . '/category-useful-materials.php');
					exit;
			}
	}
}

add_action('template_redirect', 'my_template_select');


function get_html_sitemap( $atts ){

	$result = '';
	$args = ['public' => 1];

	$ignoreposttypes = ['attachment', 'post', 'municipality', 'announcement'];

	$post_types = get_post_types( $args, 'objects' ); 

	foreach ($post_types as $post_type) {
			if( !in_array($post_type->name, $ignoreposttypes) ) {
					$result .= '<h2>' . $post_type->labels->name . '</h2>';
					$args = [
							'posts_per_page'   => -1,
							'post_type'        => $post_type->name,
							'post_status'      => 'publish'
					];
					$posts_array = get_posts($args); 
					$result .=  '<ul>';
					foreach ($posts_array as $pst) {
							$result .=  '<li><a href="' . get_permalink($pst->ID) . '">' . $pst->post_title . '</a></li>';
					}
					$result .=  '</ul>';
			}
	}

	return $result;
}

add_shortcode('htmlsitemap', 'get_html_sitemap');
