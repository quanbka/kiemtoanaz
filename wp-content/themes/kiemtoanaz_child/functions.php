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
			'name'          => esc_html__( 'Home Content', 'tuvibattu' ),
			'id'            => 'home-content',
			'description'   => esc_html__( 'Add widgets here.', 'tuvibattu' ),
			'before_title'  => '<h3 class="module-title ">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Post', 'kiemtoanaz' ),
			'id'            => 'sidebar-1',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="module-title ">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Archive', 'kiemtoanaz' ),
			'id'            => 'sidebar-archive',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="module-title ">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Home', 'kiemtoanaz' ),
			'id'            => 'sidebar-home',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="module-title ">',
			'after_title'   => '</h3>',
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



class MenuWalker extends Walker_Nav_Menu {
	/**
	 * What the class handles.
	 *
	 * @since 3.0.0
	 * @var string
	 *
	 * @see Walker::$tree_type
	 */
	public $tree_type = array( 'post_type', 'taxonomy', 'custom' );

	/**
	 * Database fields to use.
	 *
	 * @since 3.0.0
	 * @todo Decouple this.
	 * @var array
	 *
	 * @see Walker::$db_fields
	 */
	public $db_fields = array(
		'parent' => 'menu_item_parent',
		'id'     => 'db_id',
	);

	/**
	 * Starts the list before the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::start_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<div class="nav-child dropdown-menu mega-dropdown-menu">
                                                    <div class="mega-dropdown-inner">
                                                        <div class="row-fluid">
                                                            <div class="span12 mega-col-nav" data-width="12">
                                                                <div class="mega-inner">
                                                                    <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level1">';
		// if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
		// 	$t = '';
		// 	$n = '';
		// } else {
		// 	$t = "\t";
		// 	$n = "\n";
		// }
		// $indent = str_repeat( $t, $depth );
		//
		// // Default class.
		// $classes = array( 'sub-menu' );
		//
		// /**
		//  * Filters the CSS class(es) applied to a menu list element.
		//  *
		//  * @since 4.8.0
		//  *
		//  * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
		//  * @param stdClass $args    An object of `wp_nav_menu()` arguments.
		//  * @param int      $depth   Depth of menu item. Used for padding.
		//  */
		// $class_names = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		// $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		//
		// $output .= "{$n}{$indent}<ul$class_names>{$n}";

	}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::end_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>';
	}

	/**
	 * Starts the element output.
	 *
	 * @since 3.0.0
	 * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
	 *
	 * @see Walker::start_el()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$title = apply_filters( 'the_title', $item->title, $item->ID );
		$atts           = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		if ( '_blank' === $item->target && empty( $item->xfn ) ) {
			$atts['rel'] = 'noopener';
		} else {
			$atts['rel'] = $item->xfn;
		}
		$atts['href']         = ! empty( $item->url ) ? $item->url : '';
		$atts['aria-current'] = $item->current ? 'active' : '';
		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		// $listAttribute = $item->current ? ''

		switch ($depth) {
			case 0:
				$output .=
				'<li itemprop="name" class="'.$atts['aria-current'].' dropdown mega"  data-level="1">
					<a '.$attributes.'>'
						.$title.
					'</a>
                            ';
				break;
			case 1 :
				$output .=
				'<li itemprop="name" data-id="954" data-level="2">
				<a '.$attributes.'>'
					.$title.
				'</a>

                                                                        </li>';

			default:
				// code...
				break;
		}
		// if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
		// 	$t = '';
		// 	$n = '';
		// } else {
		// 	$t = "\t";
		// 	$n = "\n";
		// }
		// $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
		//
		// $classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		// $classes[] = 'menu-item-' . $item->ID;
		//
		// /**
		//  * Filters the arguments for a single nav menu item.
		//  *
		//  * @since 4.4.0
		//  *
		//  * @param stdClass $args  An object of wp_nav_menu() arguments.
		//  * @param WP_Post  $item  Menu item data object.
		//  * @param int      $depth Depth of menu item. Used for padding.
		//  */
		// $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
		//
		// /**
		//  * Filters the CSS classes applied to a menu item's list item element.
		//  *
		//  * @since 3.0.0
		//  * @since 4.1.0 The `$depth` parameter was added.
		//  *
		//  * @param string[] $classes Array of the CSS classes that are applied to the menu item's `<li>` element.
		//  * @param WP_Post  $item    The current menu item.
		//  * @param stdClass $args    An object of wp_nav_menu() arguments.
		//  * @param int      $depth   Depth of menu item. Used for padding.
		//  */
		// $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		// $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		//
		// /**
		//  * Filters the ID applied to a menu item's list item element.
		//  *
		//  * @since 3.0.1
		//  * @since 4.1.0 The `$depth` parameter was added.
		//  *
		//  * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
		//  * @param WP_Post  $item    The current menu item.
		//  * @param stdClass $args    An object of wp_nav_menu() arguments.
		//  * @param int      $depth   Depth of menu item. Used for padding.
		//  */
		// $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
		// $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		//
		// $output .= $indent . '<li' . $id . $class_names . '>';
		//
		// $atts           = array();
		// $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		// $atts['target'] = ! empty( $item->target ) ? $item->target : '';
		// if ( '_blank' === $item->target && empty( $item->xfn ) ) {
		// 	$atts['rel'] = 'noopener';
		// } else {
		// 	$atts['rel'] = $item->xfn;
		// }
		// $atts['href']         = ! empty( $item->url ) ? $item->url : '';
		// $atts['aria-current'] = $item->current ? 'page' : '';
		//
		// /**
		//  * Filters the HTML attributes applied to a menu item's anchor element.
		//  *
		//  * @since 3.6.0
		//  * @since 4.1.0 The `$depth` parameter was added.
		//  *
		//  * @param array $atts {
		//  *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		//  *
		//  *     @type string $title        Title attribute.
		//  *     @type string $target       Target attribute.
		//  *     @type string $rel          The rel attribute.
		//  *     @type string $href         The href attribute.
		//  *     @type string $aria_current The aria-current attribute.
		//  * }
		//  * @param WP_Post  $item  The current menu item.
		//  * @param stdClass $args  An object of wp_nav_menu() arguments.
		//  * @param int      $depth Depth of menu item. Used for padding.
		//  */
		// $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
		//
		// $attributes = '';
		// foreach ( $atts as $attr => $value ) {
		// 	if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
		// 		$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
		// 		$attributes .= ' ' . $attr . '="' . $value . '"';
		// 	}
		// }
		//
		// /** This filter is documented in wp-includes/post-template.php */
		// $title = apply_filters( 'the_title', $item->title, $item->ID );
		//
		// /**
		//  * Filters a menu item's title.
		//  *
		//  * @since 4.4.0
		//  *
		//  * @param string   $title The menu item's title.
		//  * @param WP_Post  $item  The current menu item.
		//  * @param stdClass $args  An object of wp_nav_menu() arguments.
		//  * @param int      $depth Depth of menu item. Used for padding.
		//  */
		// $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
		//
		// $item_output  = $args->before;
		// $item_output .= '<a' . $attributes . '>';
		// $item_output .= $args->link_before . $title . $args->link_after;
		// $item_output .= '</a>';
		// $item_output .= $args->after;
		//
		// /**
		//  * Filters a menu item's starting output.
		//  *
		//  * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		//  * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		//  * no filter for modifying the opening and closing `<li>` for a menu item.
		//  *
		//  * @since 3.0.0
		//  *
		//  * @param string   $item_output The menu item's starting HTML output.
		//  * @param WP_Post  $item        Menu item data object.
		//  * @param int      $depth       Depth of menu item. Used for padding.
		//  * @param stdClass $args        An object of wp_nav_menu() arguments.
		//  */
		// $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	/**
	 * Ends the element output, if needed.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::end_el()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Page data object. Not used.
	 * @param int      $depth  Depth of page. Not Used.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		switch ($depth) {
			case 0:
				$output .= '</li>';
				break;

			default:
				// code...
				break;
		}
		// if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
		// 	$t = '';
		// 	$n = '';
		// } else {
		// 	$t = "\t";
		// 	$n = "\n";
		// }
		// $output .= "</li>{$n}";
	}

}
