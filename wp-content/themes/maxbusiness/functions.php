<?php
/**
 * MaxBusiness functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MaxBusiness
 */

if ( ! function_exists( 'maxbusiness_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function maxbusiness_setup() {
	load_theme_textdomain( 'maxbusiness', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'maxbusiness' ),
	) );
	add_theme_support( 'html5', array(
		'gallery',
		'caption',
	) );
	add_theme_support( 'custom-background', apply_filters( 'maxbusiness_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	add_theme_support( 'custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	));
	add_theme_support( 'woocommerce' );
	add_image_size( 'maxbusiness-thumb', '338', '225', true);
	add_image_size( 'maxbusiness-blog', '825', '350', true);
}
endif;
add_action( 'after_setup_theme', 'maxbusiness_setup' );

function maxbusiness_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'maxbusiness_content_width', 640 );
}
add_action( 'after_setup_theme', 'maxbusiness_content_width', 0 );

function maxbusiness_widgets_init() {
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'maxbusiness' ),
		'id'            => 'sidebar-area',
		'description'   => esc_html__('Sidebar Widget Area', 'maxbusiness' ),
		'before_widget' => '<div id="%1$s" class="col-md-12 widget sidebar-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-heading"><h2>',
		'after_title'   => '</h2></div>',
	) );
	
	register_sidebar( array(
    		'name' => esc_html__( 'Footer Widget Area', 'maxbusiness' ),
    		'id' => 'footer-widget-area',
    		'description' => esc_html__( 'footer widget area', 'maxbusiness' ),
    		'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 widget footer-widget %2$s">',
    		'after_widget'  =>  '</div>',
    		'before_title'  =>  '<div class="row widget-heading"><h2>',
    		'after_title'   =>  '</h2></div>',
	) );
}
add_action( 'widgets_init', 'maxbusiness_widgets_init' );

function maxbusiness_scripts() {
	
	wp_enqueue_style( 'maxbusiness-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300,400italic|Lato:400,400italic,700,900,300'); 
    wp_enqueue_style( 'font-awesome',  get_template_directory_uri()."/css/font-awesome.min.css");
    wp_enqueue_style( 'swiper',  get_template_directory_uri()."/css/swiper.min.css");
    wp_enqueue_style( 'bootstrap',  get_template_directory_uri()."/css/bootstrap.min.css");
    wp_enqueue_style( 'animate',  get_template_directory_uri()."/css/animate.min.css");
    wp_enqueue_style( 'simplelightbox',  get_template_directory_uri()."/css/simplelightbox.css");
    wp_enqueue_style( 'maxbusiness-style', get_stylesheet_uri() );
    wp_enqueue_style( 'maxbusiness-media-style', get_template_directory_uri()."/css/media-screen.css" );
    
        
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); 	}
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20160902', true );
	wp_enqueue_script( 'simple-lightbox', get_template_directory_uri() . '/js/simple-lightbox.min.js', array('jquery'), '20160902', true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), '20160902', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '20160902', true );
	wp_enqueue_script( 'maxbusiness-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'maxbusiness-custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), '20160902', true );

	wp_enqueue_script( 'respond', get_template_directory_uri().'/js/respond.min.js' );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
 
    wp_enqueue_script( 'html5shiv',get_template_directory_uri().'/js/html5shiv.js');
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

}
add_action( 'wp_enqueue_scripts', 'maxbusiness_scripts' );


require get_template_directory() . '/inc/sanitize-cb.php';
require get_template_directory() . '/inc/menu-walker.php';
require get_template_directory() . '/inc/functions.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';
