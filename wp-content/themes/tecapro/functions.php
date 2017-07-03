<?php
/**
 * Tecapro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tecapro
 */

if (!function_exists('tecapro_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function tecapro_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Tecapro, use a find and replace
         * to change 'tecapro' to the name of your theme in all the template files.
         */
        load_theme_textdomain('tecapro', get_template_directory() . '/languages');

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
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'tecapro'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('tecapro_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'tecapro_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tecapro_content_width()
{
    $GLOBALS['content_width'] = apply_filters('tecapro_content_width', 640);
}

add_action('after_setup_theme', 'tecapro_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tecapro_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'tecapro'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'tecapro'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'tecapro_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function tecapro_scripts()
{

    /*
         *       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
           <link rel="shortcut icon" href="images/logo.png">
          <script src="bootstrap/js/bootstrap.min.js"></script>
          <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
          <script src="bootstrap/owl.carousel.2.0.0-beta.2.4/owl.carousel.js"></script>
          <script src="bootstrap/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js"></script>
          <link href="css/style_Home.css" rel="stylesheet" />
          <link href="css/style.css" rel="stylesheet" />
          <script src="js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
          <link rel="stylesheet" type="text/css" href="css/component.css" />
          <script src="js/modernizr.custom.js"></script>
          <script src="js/menu.js"></script>
          <!-- 	<script src="js/init.js"></script> -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         */

//    wp_enqueue_script( 'tecapro-bootstrap', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );
//    wp_enqueue_script( 'tecapro-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '20151215', true );
//    wp_enqueue_script( 'tecapro-carousel', get_template_directory_uri() . '/bootstrap/owl.carousel.2.0.0-beta.2.4/owl.carousel.js', array(), '20151215', true );
//    wp_enqueue_script( 'tecapro-jssor', get_template_directory_uri() . '/js/jssor.slider-21.1.6.mini.js', array(), '20151215', true );
//    wp_enqueue_script( 'tecapro-modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '20151215', true );
//    wp_enqueue_script( 'tecapro-menu', get_template_directory_uri() . '/js/menu.js', array(), '20151215', true );
//    wp_enqueue_style( 'tecapro-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '20151215', true );
//    wp_enqueue_style( 'tecapro-style_Home', get_template_directory_uri() . '/css/style_Home.css', array(), '20151215', true );
//    wp_enqueue_style( 'tecapro-style', get_template_directory_uri() . '/css/style.css', array(), '20151215', true );
//    wp_enqueue_style( 'tecapro-component', get_template_directory_uri() . '/css/component.css', array(), '20151215', true );


    wp_enqueue_style('tecapro-style', get_stylesheet_uri());

    wp_enqueue_script('tecapro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('tecapro-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'tecapro_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

if (!function_exists('tecapro_head_scripts')) {
    function tecapro_head_scripts()
    {
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>';
        echo '<script src="' . get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js"></script>';
        echo '<link href="' . get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css" rel="stylesheet" />';
        echo '<script src="' . get_template_directory_uri() . '/bootstrap/owl.carousel.2.0.0-beta.2.4/owl.carousel.js"></script>';
        echo '<script src="' . get_template_directory_uri() . '/bootstrap/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js"></script>';
        echo '<link href="' . get_template_directory_uri() . '/css/style_Home.css" rel="stylesheet" />';
        echo '<script src="' . get_template_directory_uri() . '/js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>';
        echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/component.css" />';
        echo '<script src="' . get_template_directory_uri() . '/js/modernizr.custom.js"></script>';
        echo '<script src="' . get_template_directory_uri() . '/js/menu.js"></script>';
        echo '<script src="' . get_template_directory_uri() . '/js/menu_left.js"></script>';
        echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
    }
}
add_action('wp_head', 'tecapro_head_scripts');

if (!function_exists('tecapro_body_class')) {
    function tecapro_body_class($classes)
    {
        $classes[] = 'pushmenu-push';
        return $classes;
    }
}
add_filter('body_class', 'tecapro_body_class');