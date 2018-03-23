<?php   
/**
 * Florence IT functions and definitions
 *
 * @package Florence IT
 */

if ( ! function_exists( 'florence_it_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function florence_it_setup() {
	//Set the content width based on the theme's design and stylesheet. 
	global $content_width; 
	if ( ! isset( $content_width ) )
		$content_width = 660; /* pixels */
		
	load_theme_textdomain( 'florence-it', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );	
	add_theme_support( 'custom-logo', array(
		'width'       => 200,
		'height'      => 100,		
		'flex-height' => true,
	) );	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'florence-it' ),		
		'footer' => __( 'Footer Menu', 'florence-it' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style( 'editor-style.css' );
} 
endif; // florence_it_setup
add_action( 'after_setup_theme', 'florence_it_setup' );


function florence_it_widgets_init() { 
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'florence-it' ),
		'description'   => __( 'Appears on sidebar', 'florence-it' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',	
		'after_widget'  => '</aside>',	
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		
	) );	
}
add_action( 'widgets_init', 'florence_it_widgets_init' );



function florence_it_scripts() {
	wp_enqueue_style('florence-it-font', florence_it_font_url(), array());
	wp_enqueue_style( 'florence-it-main-style', get_stylesheet_uri() );		
	wp_enqueue_style( 'florence-it-responsive', get_template_directory_uri().'/css/responsive.css');	
	wp_enqueue_script( 'jquery-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'florence-it-custom', get_template_directory_uri() . '/js/custom.js' );			
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/rotator/js/owl.carousel.css' );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/rotator/js/owl.carousel.js', array('jquery') );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'florence_it_scripts' );

function florence_it_ie_stylesheet(){
	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style('florence-it-ie', get_template_directory_uri().'/css/ie.css', array( 'florence-it-style' ), '20171108' );
	wp_style_add_data('florence-it-ie','conditional','lt IE 10');
	
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'florence-it-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'florence-it-style' ), '20171108' );
	wp_style_add_data( 'florence-it-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'florence-it-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'florence-it-style' ), '20171108' );
	wp_style_add_data( 'florence-it-ie7', 'conditional', 'lt IE 8' );
	}
add_action('wp_enqueue_scripts','florence_it_ie_stylesheet');

function florence_it_font_url(){
		$font_url = '';		
		
		/* Translators: If there are any character that are not
		* supported by Roboto, trsnalate this to off, do not
		* translate into your own language.
		*/
		$roboto = _x('on','roboto:on or off','florence-it');		
		
		if('off' !== $roboto ){
			$font_family = array();
			
			if('off' !== $roboto){
				$font_family[] = 'Roboto:300,400,600,700,800,900';
			}						
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
		
	return $font_url;
	}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/*Custom log function*/
if ( ! function_exists( 'florence_it_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function florence_it_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;