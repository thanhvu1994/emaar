<?php
/**
 *Buildup Theme Customizer
 *
 * @package Buildup
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function buildup_customize_register( $wp_customize ) {	
	
	function buildup_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}
		
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	//Layout Options
	$wp_customize->add_section('layout_option',array(
			'title'	=> __('Layout Option','buildup'),			
			'priority'	=> 1,
	));		
	
	$wp_customize->add_setting('box_layout',array(
			'sanitize_callback' => 'buildup_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'box_layout', array(
    	   'section'   => 'layout_option',    	 
		   'label'	=> __('Check to Box Layout','buildup'),
		   'description'	=> __('if you want to box layout please check the Box Layout Option.','buildup'),
    	   'type'      => 'checkbox'
     )); //Layout Section 
	
	$wp_customize->add_setting('color_scheme',array(
			'default'	=> '#efc62c',
			'sanitize_callback'	=> 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','buildup'),			
			 'description'	=> __('More color options in PRO Version','buildup'),
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);
	
	
	 // Top Header Section 
	 $wp_customize->add_section('social_sec',array(
			'title'	=> __('Top Header Social Icons','buildup'),
			'description' => __( 'Add social icons link here.', 'buildup' ),			
			'priority'		=> null
	));
	$wp_customize->add_setting('fb_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'	
	));
	
	$wp_customize->add_control('fb_link',array(
			'label'	=> __('Add facebook link here','buildup'),
			'section'	=> 'social_sec',
			'setting'	=> 'fb_link'
	));	
	$wp_customize->add_setting('twitt_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('twitt_link',array(
			'label'	=> __('Add twitter link here','buildup'),
			'section'	=> 'social_sec',
			'setting'	=> 'twitt_link'
	));
	$wp_customize->add_setting('gplus_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gplus_link',array(
			'label'	=> __('Add google plus link here','buildup'),
			'section'	=> 'social_sec',
			'setting'	=> 'gplus_link'
	));
	$wp_customize->add_setting('linked_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('linked_link',array(
			'label'	=> __('Add linkedin link here','buildup'),
			'section'	=> 'social_sec',
			'setting'	=> 'linked_link'
	));
	
	$wp_customize->add_setting('show_social',array(
				'default' => false,
				'sanitize_callback' => 'buildup_sanitize_checkbox',
				'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'show_social', array(
			   'settings' => 'show_social',
			   'section'   => 'social_sec',
			   'label'     => __('Check To show This Section','buildup'),
			   'type'      => 'checkbox'
	 ));//Show Top Header Section
	 
	
	// Slider Section		
	$wp_customize->add_section( 'slider_options', array(
            'title' => __('Slider Section', 'buildup'),
            'priority' => null,
			'description'	=> __('Featured Image Size Should be ( 1400x600 ).','buildup'),            			
    ));
	
	$wp_customize->add_setting('slide-page7',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slide-page7',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide one:','buildup'),
			'section'	=> 'slider_options'
	));	
	
	$wp_customize->add_setting('slide-page8',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slide-page8',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide two:','buildup'),
			'section'	=> 'slider_options'
	));	
	
	$wp_customize->add_setting('slide-page9',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slide-page9',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide three:','buildup'),
			'section'	=> 'slider_options'
	));	// Slider Section
	
	 $wp_customize->add_setting('slider_readmore',array(
	 		'default'	=> null,
			'sanitize_callback'	=> 'sanitize_text_field'
	 ));
	 
	 $wp_customize->add_control('slider_readmore',array(
	 		'settings'	=> 'slider_readmore',
			'section'	=> 'slider_options',
			'label'		=> __('Add text for slide read more button','buildup'),
			'type'		=> 'text'
	 ));// Slider Read more	
	
	$wp_customize->add_setting('show_slider',array(
				'default' => false,
				'sanitize_callback' => 'buildup_sanitize_checkbox',
				'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'show_slider', array(
			   'settings' => 'show_slider',
			   'section'   => 'slider_options',
			   'label'     => __('Check To Show This Section','buildup'),
			   'type'      => 'checkbox'
	 ));//Show Slider Section	
	
	
	// Welcome Section 	
	$wp_customize->add_section('welcomepage_section', array(
		'title'	=> __('Welcome Page Section','buildup'),
		'description'	=> __('Select Pages from the dropdown for welcome page section','buildup'),
		'priority'	=> null
	));		
	
	$wp_customize->add_setting('welcomepage',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));
 
	$wp_customize->add_control(	'welcomepage',array(
			'type' => 'dropdown-pages',			
			'section' => 'welcomepage_section',
	));		
	
	
	$wp_customize->add_setting('show_welcomepage',array(
			'default' => false,
			'sanitize_callback' => 'buildup_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'show_welcomepage', array(
			   'settings' => 'show_welcomepage',
			   'section'   => 'welcomepage_section',
			   'label'     => __('Check To Show This Section','buildup'),
			   'type'      => 'checkbox'
	 ));//Show Welcome Section
	 
	 // Four Page Boxes Services Section 	
	$wp_customize->add_section('pageboxes_section', array(
		'title'	=> __('Services Section','buildup'),
		'description'	=> __('Select Pages from the dropdown for four column services section','buildup'),
		'priority'	=> null
	));		
	
	$wp_customize->add_setting('pagebxno10',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));
 
	$wp_customize->add_control(	'pagebxno10',array(
			'type' => 'dropdown-pages',			
			'section' => 'pageboxes_section',
	));		
	
	$wp_customize->add_setting('pagebxno11',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));
 
	$wp_customize->add_control(	'pagebxno11',array(
			'type' => 'dropdown-pages',			
			'section' => 'pageboxes_section',
	));
	
	$wp_customize->add_setting('pagebxno12',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));
 
	$wp_customize->add_control(	'pagebxno12',array(
			'type' => 'dropdown-pages',			
			'section' => 'pageboxes_section',
	));
	
	$wp_customize->add_setting('pagebxno13',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));
 
	$wp_customize->add_control(	'pagebxno13',array(
			'type' => 'dropdown-pages',			
			'section' => 'pageboxes_section',
	));//end four column page boxes	
	
	$wp_customize->add_setting('show_services',array(
			'default' => false,
			'sanitize_callback' => 'buildup_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'show_services', array(
			   'settings' => 'show_services',
			   'section'   => 'pageboxes_section',
			   'label'     => __('Check To Show This Section','buildup'),
			   'type'      => 'checkbox'
	 ));//Show Services Section	 
	
	 
}
add_action( 'customize_register', 'buildup_customize_register' );

function buildup_custom_css(){
		?>
        	<style type="text/css"> 					
					a, .recent_articles h2 a:hover,
					#sidebar ul li a:hover,									
					.recent_articles h3 a:hover,
					.cols-4 ul li a:hover, .cols-4 ul li.current_page_item a,
					.recent-post h6:hover,					
					.page-four-column:hover h3,
					.footer-icons a:hover,	
					.fourboxdiv:hover h5 a,				
					.postmeta a:hover,					
					.sitemainmenu ul li a:hover, 
					.sitemainmenu ul li.current_page_item a, 
					.sitemainmenu ul li.current-menu-ancestor a.parent
					{ color:<?php echo esc_html( get_theme_mod('color_scheme','#efc62c')); ?>;}
					 
					
					.pagination ul li .current, .pagination ul li a:hover, 
					#commentform input#submit:hover,					
					.nivo-controlNav a.active,
					.ReadMore,
					.slide_info .slide_more,
					.appbutton:hover,					
					#sidebar .search-form input.search-submit,				
					.wpcf7 input[type='submit'],
					#featureswrap,
					.fourboxdiv:hover .ReadMore			
					{ background-color:<?php echo esc_html( get_theme_mod('color_scheme','#efc62c')); ?>;}						
					
			</style> 
<?php                       
}
         
add_action('wp_head','buildup_custom_css');	 

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function buildup_customize_preview_js() {
	wp_enqueue_script( 'buildup_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20161014', true );
}
add_action( 'customize_preview_init', 'buildup_customize_preview_js' );