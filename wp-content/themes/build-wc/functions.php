<?php 
/**
 *Buildup functions and definitions
 *
 * @package Buildup 
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'buildup_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.  
 */
function buildup_setup() {		
	global $content_width;   
    if ( ! isset( $content_width ) ) {
        $content_width = 680; /* pixels */
    }	

	load_theme_textdomain( 'buildup', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support('html5');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header', array( 
		'default-text-color' => false,
		'header-text' => false,
	) );
	add_theme_support( 'title-tag' );	
	add_theme_support( 'custom-logo', array(
		'height'      => 50,
		'width'       => 100,
		'flex-height' => true,
	) );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'buildup' ),		
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style( 'editor-style.css' );
} 
endif; // buildup_setup
add_action( 'after_setup_theme', 'buildup_setup' );
function buildup_widgets_init() { 	
	
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'buildup' ),
		'description'   => __( 'Appears on blog page sidebar', 'buildup' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Header Contact info', 'buildup' ),
		'description'   => __( 'Appears on the header when you add something here.', 'buildup' ),
		'id'            => 'header-1',
		'before_widget' => '<aside id="%1$s" class="infobox %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="infotitle">',
		'after_title'   => '</h5>',
	) );
	
}
add_action( 'widgets_init', 'buildup_widgets_init' );


function buildup_font_url(){
		$font_url = '';		
		
		/* Translators: If there are any character that are not
		* supported by Montserrat, trsnalate this to off, do not
		* translate into your own language.
		*/
		$montserrat = _x('on','montserrat:on or off','buildup');			
		
		if('off' !== $montserrat ){
			$font_family = array();
			
			if('off' !== $montserrat){
				$font_family[] = 'Montserrat:300,400,600,700,800,900';
			}
					
						
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
		
	return $font_url;
	}


function buildup_scripts() {
	wp_enqueue_style('buildup-font', buildup_font_url(), array());
	wp_enqueue_style( 'buildup-basic-style', get_stylesheet_uri() );	
	wp_enqueue_style( 'nivo-slider', get_template_directory_uri()."/css/nivo-slider.css" );
	wp_enqueue_style( 'buildup-responsive', get_template_directory_uri()."/css/responsive.css" );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri()."/css/font-awesome.css" );
	wp_enqueue_script( 'jquery-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'buildup-editable', get_template_directory_uri() . '/js/editable.js' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'buildup_scripts' );

function buildup_ie_stylesheet(){
	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style('buildup-ie', get_template_directory_uri().'/css/ie.css', array( 'buildup-style' ), '20160928' );
	wp_style_add_data('buildup-ie','conditional','lt IE 10');
	
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'buildup-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'buildup-style' ), '20160928' );
	wp_style_add_data( 'buildup-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'buildup-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'buildup-style' ), '20160928' );
	wp_style_add_data( 'buildup-ie7', 'conditional', 'lt IE 8' );	
	}
add_action('wp_enqueue_scripts','buildup_ie_stylesheet');

define('BUILDUP_THEME_DOC','https://www.gracethemes.com/documentation/buildup-doc/','buildup');
define('BUILDUP_PROTHEME_URL','https://gracethemes.com/themes/construction-renovation-company-wordpress-theme/','buildup');
define('BUILDUP_LIVE_DEMO','https://www.gracethemes.com/demo/buildup/','buildup');

if ( ! function_exists( 'buildup_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function buildup_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template for about theme.
 */
if ( is_admin() ) { 
require get_template_directory() . '/inc/about-themes.php';
}

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';