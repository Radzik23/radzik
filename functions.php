<?php
/**
 * Radzik functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Radzik
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function radzik_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Radzik, use a find and replace
		* to change 'radzik' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'radzik', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'radzik' ),
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
			'radzik_custom_background_args',
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
add_action( 'after_setup_theme', 'radzik_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function radzik_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'radzik_content_width', 640 );
}
add_action( 'after_setup_theme', 'radzik_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function radzik_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'radzik' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'radzik' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'radzik_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function radzik_scripts() {
	wp_enqueue_style( 'radzik-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'radzik-style', 'rtl', 'replace' );

	wp_enqueue_script( 'radzik-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'radzik_scripts' );

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

function radzik_theme_setup() {
	register_nav_menu('main-menu', 'Main Menu');
}
add_action('after_setup_theme', 'radzik_theme_setup');

function radzik_enqueue_scripts() {
    wp_enqueue_script('header-scroll', get_template_directory_uri() . '/js/header-scroll.js', array(), null, true);
    wp_enqueue_script('sticky-header', get_template_directory_uri() . '/js/sticky-header.js', array(), null, true);
    wp_enqueue_script('burger-menu', get_template_directory_uri() . '/js/burger-menu.js', array(), null, true);

	//css burger-menu
    wp_enqueue_style('burger-menu-style', get_template_directory_uri() . '/burger.css', array(), '1.0');
	
}
add_action('wp_enqueue_scripts', 'radzik_enqueue_scripts');


function custom_enqueue_portfolio_styles() {
  if (is_page('portfolio')) {
    wp_enqueue_style(
      'portfolio-style',
      get_template_directory_uri() . '/portfolio.css',
      array(),
      '1.0'
    );
  }
}
add_action('wp_enqueue_scripts', 'custom_enqueue_portfolio_styles');





function load_custom_calendar_script() {
    if (is_front_page()) {
        wp_enqueue_style('flatpickr-css', 'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css');
        wp_enqueue_script('flatpickr-js', 'https://cdn.jsdelivr.net/npm/flatpickr', [], null, true);

        wp_enqueue_script('custom-calendar', get_template_directory_uri() . '/js/calendar.js', ['flatpickr-js'], null, true);

        $unavailable_dates = get_option('zablokowane_daty', []);

        wp_localize_script('custom-calendar', 'calendarData', [
            'unavailableDates' => $unavailable_dates
        ]);
    }
}
add_action('wp_enqueue_scripts', 'load_custom_calendar_script');


add_action('admin_menu', 'dodaj_strone_daty_niedostepne');

function dodaj_strone_daty_niedostepne() {
    add_menu_page(
        'Dostępne daty',
        'Dostępne daty',
        'manage_options',
        'dostepne-daty',
        'renderuj_strone_daty',
        'dashicons-calendar-alt',
        20
    );
}


function renderuj_strone_daty() {
    if (isset($_POST['zapisz_daty']) && check_admin_referer('zapisz_daty_nonce')) {
        $daty = array_map('sanitize_text_field', $_POST['daty'] ?? []);
        $daty = array_filter($daty);
        update_option('zablokowane_daty', $daty);
        echo '<div class="updated"><p>Daty zostały zapisane.</p></div>';
    }

    $zablokowane_daty = get_option('zablokowane_daty', []);

    echo '<div class="wrap">';
    echo '<h1>Zablokowane daty</h1>';
    echo '<form method="post">';
    wp_nonce_field('zapisz_daty_nonce');

    echo '<table>';
    for ($i = 0; $i < 10; $i++) {
        $wartosc = $zablokowane_daty[$i] ?? '';
        echo "<tr><td><input type='date' name='daty[]' value='" . esc_attr($wartosc) . "' /></td></tr>";
    }
    echo '</table>';

    echo '<p><input type="submit" name="zapisz_daty" class="button-primary" value="Zapisz daty" /></p>';
    echo '</form>';
    echo '</div>';
}


