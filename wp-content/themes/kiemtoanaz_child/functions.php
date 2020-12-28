<?php
/**
 * kiemtoanaz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kiemtoanaz
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'kiemtoanaz_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kiemtoanaz_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kiemtoanaz, use a find and replace
		 * to change 'kiemtoanaz' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kiemtoanaz', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'kiemtoanaz' ),
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
				'kiemtoanaz_custom_background_args',
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
add_action( 'after_setup_theme', 'kiemtoanaz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kiemtoanaz_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kiemtoanaz_content_width', 640 );
}
add_action( 'after_setup_theme', 'kiemtoanaz_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kiemtoanaz_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kiemtoanaz' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kiemtoanaz' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kiemtoanaz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kiemtoanaz_scripts() {
	wp_enqueue_style( 'kiemtoanaz-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'kiemtoanaz-style', 'rtl', 'replace' );

	wp_enqueue_script( 'kiemtoanaz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kiemtoanaz_scripts' );

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


// function clean_custom_menus() {
// 	$menu_name = 'menu-1'; // specify custom menu slug
// 	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
// 		$menu = wp_get_nav_menu_object($locations[$menu_name]);
// 		$menu_items = wp_get_nav_menu_items($menu->term_id);
//
// 		$menu_list = '<ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="nav navbar-nav level0">' ."\n";
// 		foreach ((array) $menu_items as $key => $menu_item) {
// 			// print_r($menu_item);
// 			$title = $menu_item->title;
// 			$url = $menu_item->url;
// 			if (!$menu_item->menu_item_parent) {
// 				$menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'">'. $title .'</a></li>' ."\n";
// 			} else {
//
// 			}
// 		}
// 		// die;
// 		$menu_list .= "\t\t\t". '</ul>' ."\n";
// 	} else {
// 		// $menu_list = '<!-- no list defined -->';
// 	}
// 	echo $menu_list;
// }


add_action( 'customize_register', 'custom_header_settings' );

function mytheme_customize_css()
{
    ?>
		 <style media="screen">
	 		:root {
	 			--primary-color : <?php echo get_theme_mod('primary_color', '#000000'); ?>;
	 			--secondary-color : <?php echo get_theme_mod('secondary_color', '#000000'); ?>;
	 			/* --primary-color : #0c468a; */
	 		}
	 	</style>
    <?php
}


add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

function custom_header_settings($wp_customize){
    $wp_customize->add_section( 'header_settings' , array(
        'title'      => 'Color picker',
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'primary_color' , array(
        'default'     => '#0c468a',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_setting( 'secondary_color' , array(
        'default'     => '#009cd7',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label'      => 'Primary Color',
        'section'    => 'header_settings',
        'settings'   => 'primary_color',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
        'label'      => 'Secondary Color',
        'section'    => 'header_settings',
        'settings'   => 'secondary_color',
    ) ) );
}

function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">Tác giả: ' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }

    return $title;
}

function tuvibattu_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Home', 'tuvibattu' ),
			'id'            => 'home',
			'description'   => esc_html__( 'Add widgets here.', 'tuvibattu' ),
			'before_widget' => '<div class="module-ct">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="module-title ">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'tuvibattu_widgets_init' );
