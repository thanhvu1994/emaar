<?php
/**
 * MaxBusiness Theme Customizer
 *
 * @package MaxBusiness
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function maxbusiness_customize_register( $wp_customize ) {
	
	$wp_customize->add_section('maxbusiness_theme_info_section', array(
		'title'    => __('MaxBusiness Info', 'maxbusiness'),
		'priority' => 1,
	));

	$wp_customize->add_setting('maxbusiness_page_setup', array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'maxbusiness_sanitize_html',
	));

	$wp_customize->add_control(new MaxBusiness_Info_Text($wp_customize, 'maxbusiness_page_setup',
		array(
			'label'    => __('Front Page/Blog page Setup', 'maxbusiness'),
			'description' => __('Go To Appearance -> Customize -> Static Front Page -> Front page displays set it to "A static page". <br> if you have not created pages with name <strong> "Home or Front Page" </strong> and <strong> "Blog" </strong> you may create in customizer by clicking <div><strong>"+ Add New Page"</strong></div> in "Static Front Page" section <br> <strong> <br> 1. For Front Page select Home or Front Page and select "Home Page" Template by editing selected page. <br> 2. For Posts Page select Blog.</strong> <br> <a class="maxbusiness_go_to_section" href="#accordion-section-static_front_page"> Switch To "A Static Page"</a>', 'maxbusiness'),
			'priority' => 1,
			'section'  => 'maxbusiness_theme_info_section',
	)));


	//Home page options
	$wp_customize->add_panel('maxbusiness_homepage_settings', array(
		'priority'    => 20,
		'title'       => __('Home Page Settings', 'maxbusiness'),
		'description' => __('MaxBusiness Home Page Settings', 'maxbusiness'),
	));

/*Slider Options */
	$wp_customize->add_section('maxbusiness_slider_section', array(
		'title'       => __('Slider Options', 'maxbusiness'),
		'description' => __('MaxBusiness Slider Options', 'maxbusiness'),
		'capability'  => 'edit_theme_options',
		'panel'       => 'maxbusiness_homepage_settings',
	));


	for ($i = 1; $i <= 3; $i++) {

		$wp_customize->add_setting('maxbusiness_slider_heading' . $i, array(
			'sanitize_callback' => 'sanitize_text_field',
		));

		$wp_customize->add_control(new MaxBusiness_Customize_Heading($wp_customize, 'maxbusiness_slider_heading' . $i, array(
			'settings' => 'maxbusiness_slider_heading' . $i,
			'section'  => 'maxbusiness_slider_section',
			'label'    => __('Slide ', 'maxbusiness') . $i,
		)));

		$wp_customize->add_setting('maxbusiness_slider_page' . $i, array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'absint',

		));

		$wp_customize->add_control('maxbusiness_slider_page' . $i, array(
				'label'   => __('Select a Page', 'maxbusiness'),
				'section' => 'maxbusiness_slider_section',
				'type'	  => 'dropdown-pages',
		));
	}

	$wp_customize->add_setting('maxbusiness_slider_buttons_heading', array(
			'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control(new MaxBusiness_Customize_Heading($wp_customize, 'maxbusiness_slider_buttons_heading', array(
		'settings' => 'maxbusiness_slider_buttons_heading',
		'section'  => 'maxbusiness_slider_section',
		'label'    => __('Buttons', 'maxbusiness'),
	)));

	$wp_customize->add_setting('maxbusiness_slide_button1_label', array(
		'default'           => __('Read More', 'maxbusiness'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('maxbusiness_slide_button1_label', array(
		'type'    => 'text',
		'section' => 'maxbusiness_slider_section',
		'label'   => __('Button 1 Label ', 'maxbusiness'),
	));

	$wp_customize->add_setting('maxbusiness_slide_button1_link', array(
		'default'           => '#',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'maxbusiness_sanitize_url',
	));

	$wp_customize->add_control('maxbusiness_slide_button1_link', array(
		'type'    => 'text',
		'section' => 'maxbusiness_slider_section',
		'label'   => __('Button 1 Link ', 'maxbusiness'),
	));



	$wp_customize->add_setting('maxbusiness_slide_button2_label', array(
		'default'           => __('Buy Now', 'maxbusiness'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('maxbusiness_slide_button2_label', array(
		'type'    => 'text',
		'section' => 'maxbusiness_slider_section',
		'label'   => __('Button 2 Label ', 'maxbusiness'),
	));

	$wp_customize->add_setting('maxbusiness_slide_button2_link', array(
		'default'           => '#',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'maxbusiness_sanitize_url',
	));

	$wp_customize->add_control('maxbusiness_slide_button2_link', array(
		'type'    => 'text',
		'section' => 'maxbusiness_slider_section',
		'label'   => __('Button 1 Link ', 'maxbusiness'),
	));

/*Slider Options */

/*Services Options */

	$wp_customize->add_section('maxbusiness_services_section', array(
		'title'      => __('Services Options', 'maxbusiness'),
		'capability' => 'edit_theme_options',
		'panel'      => 'maxbusiness_homepage_settings',
	));

	$wp_customize->add_setting('maxbusiness_services_heading',
		array(
			'default'           => __('Awesome Services', 'maxbusiness'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control('maxbusiness_services_heading', array(
		'type'    => 'text',
		'section' => 'maxbusiness_services_section',
		'label'   => __('Heading Text', 'maxbusiness'),
	));

	$wp_customize->add_setting('maxbusiness_services_sub_heading',
		array(
			'default'           => __('Services Description', 'maxbusiness'),
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_textarea_field',
		));

	$wp_customize->add_control('maxbusiness_services_sub_heading', array(
		'type'    => 'textarea',
		'section' => 'maxbusiness_services_section',
		'label'   => __('Description Text', 'maxbusiness'),
	));

	for ($i = 1; $i <= 3; $i++) {

		$wp_customize->add_setting('maxbusiness_services_heading_' . $i, array(
			'sanitize_callback' => 'sanitize_text_field',
		));

		$wp_customize->add_control(new MaxBusiness_Customize_Heading($wp_customize, 'maxbusiness_services_heading_' . $i, array(
			'settings' => 'maxbusiness_services_heading_' . $i,
			'section'  => 'maxbusiness_services_section',
			'label'    => __('Service ', 'maxbusiness') . $i,
		)));

		
		$wp_customize->add_setting('maxbusiness_service_icon'.$i, array(
				'default'           => 'fa-star',
				'transport'         => 'refresh',
				'sanitize_callback' => 'maxbusiness_sanitize_icon',
		));

		$wp_customize->add_control(new MaxBusiness_Fontawesome_Icon_Chooser($wp_customize, 'maxbusiness_service_icon' . $i, array(
			'section'  => 'maxbusiness_services_section',
			'settings' => 'maxbusiness_service_icon'.$i,
			'label'    => __('FontAwesome Icon', 'maxbusiness'),
		)));

		$wp_customize->add_setting('maxbusiness_service_page' . $i, array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'absint',
		));

		$wp_customize->add_control('maxbusiness_service_page' . $i, array(
				'label'   => __('Select a Page', 'maxbusiness'),
				'section' => 'maxbusiness_services_section',
				'type'	  => 'dropdown-pages',
		));

	}
/*Services Options */

/*Callout Options */

	$wp_customize->add_section('maxbusiness_callout_section', array(
		'title'      => __('Callout Options', 'maxbusiness'),
		'capability' => 'edit_theme_options',
		'panel'      => 'maxbusiness_homepage_settings',
	));

	
	$wp_customize->add_setting('maxbusiness_callout_page', array(
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'absint',
	));

	$wp_customize->add_control('maxbusiness_callout_page', array(
			'label'   => __('Select a Page', 'maxbusiness'),
			'section' => 'maxbusiness_callout_section',
			'type'	  => 'dropdown-pages',
	));

	$wp_customize->add_setting('maxbusiness_callout_bt1_text', array(
			'default'           => __('Purchase Theme', 'maxbusiness'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('maxbusiness_callout_bt1_text', array(
		'type'     => 'text',
		'priority' => 200,
		'section'  => 'maxbusiness_callout_section',
		'label'    => __('Button 1 Text', 'maxbusiness'),
	));

	$wp_customize->add_setting('maxbusiness_callout_bt1_link', array(
			'default'           => '#',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'maxbusiness_sanitize_url',
	));

	$wp_customize->add_control('maxbusiness_callout_bt1_link', array(
		'type'     => 'text',
		'priority' => 200,
		'section'  => 'maxbusiness_callout_section',
		'label'    => __('Button 1 Link', 'maxbusiness'),
	));

	$wp_customize->add_setting('maxbusiness_callout_bt2_text', array(
			'default'           => __('See Details', 'maxbusiness'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('maxbusiness_callout_bt2_text', array(
		'type'     => 'text',
		'priority' => 200,
		'section'  => 'maxbusiness_callout_section',
		'label'    => __('Button 2 Text', 'maxbusiness'),
	));

	$wp_customize->add_setting('maxbusiness_callout_bt2_link', array(
			'default'           => '#',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'maxbusiness_sanitize_url',
	));

	$wp_customize->add_control('maxbusiness_callout_bt2_link', array(
		'type'     => 'text',
		'priority' => 200,
		'section'  => 'maxbusiness_callout_section',
		'label'    => __('Button 2 Link', 'maxbusiness'),
	));
/*Callout Options */


/*Blog Options */

	$wp_customize->add_section('maxbusiness_blog_section', array(
		'title'      => __('Blog Options', 'maxbusiness'),
		'capability' => 'edit_theme_options',
		'panel'      => 'maxbusiness_homepage_settings',
	));

	
	$wp_customize->add_setting('maxbusiness_blog_heading', array(
			'default'           => __('Blog Section Heading', 'maxbusiness'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('maxbusiness_blog_heading', array(
		'type'     => 'text',
		'priority' => 200,
		'section'  => 'maxbusiness_blog_section',
		'label'    => __('Blog Heading', 'maxbusiness'),
	));

	$wp_customize->add_setting('maxbusiness_blog_description', array(
			'default'           => __('Blog Section  Description', 'maxbusiness'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_textarea_field',
	));

	$wp_customize->add_control('maxbusiness_blog_description', array(
		'type'     => 'textarea',
		'priority' => 200,
		'section'  => 'maxbusiness_blog_section',
		'label'    => __('Blog Description', 'maxbusiness'),
	));
/*Blog Options */

/*Clients Options */

	$wp_customize->add_section('maxbusiness_clients_section', array(
		'title'      => __('Clients Logo Options', 'maxbusiness'),
		'capability' => 'edit_theme_options',
		'panel'      => 'maxbusiness_homepage_settings',
	));

	$wp_customize->add_setting('maxbusiness_clients_heading', array(
			'default'           => __('Clients Section Heading', 'maxbusiness'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('maxbusiness_clients_heading', array(
		'type'     => 'text',
		'priority' => 10,
		'section'  => 'maxbusiness_clients_section',
		'label'    => __('Clients Heading', 'maxbusiness'),
	));

	$wp_customize->add_setting('maxbusiness_clients_description', array(
			'default'           => __('Clients Section  Description', 'maxbusiness'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_textarea_field',
	));

	$wp_customize->add_control('maxbusiness_clients_description', array(
		'type'     => 'textarea',
		'priority' => 10,
		'section'  => 'maxbusiness_clients_section',
		'label'    => __('Clients Description', 'maxbusiness'),
	));

	for ($i=1; $i <= 5; $i++) { 

		$wp_customize->add_setting('maxbusiness_client_logo'.$i, array(
			'default'			=> esc_url(get_template_directory_uri().'/images/brands/brand'.$i.'.png'),
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'maxbusiness_sanitize_image',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'maxbusiness_client_logo'.$i, array(
	       'label'      => __( 'Client Logo ', 'maxbusiness' ).$i,
	       'section'    => 'maxbusiness_clients_section',
	       'settings'   => 'maxbusiness_client_logo'.$i,
	    )));
	}
/*Clients Options */

	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'maxbusiness_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function maxbusiness_customize_preview_js() {
	wp_enqueue_script( 'maxbusiness-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'maxbusiness_customize_preview_js' );

function maxbusiness_custmizer_style() {
	wp_enqueue_style('font-awesome',  get_template_directory_uri()."/css/font-awesome.min.css");
	wp_enqueue_style('maxbusiness-customizer-style', get_template_directory_uri() . '/css/customizer-style.css');
}
add_action('customize_controls_print_styles', 'maxbusiness_custmizer_style');

function maxbusiness_customize_controls_scripts(){
	wp_enqueue_script( 'maxbusiness-customizer-controls', get_template_directory_uri() . '/js/customizer-controls.js', array('jquery'), '20151215', true );
}
add_action( 'customize_controls_enqueue_scripts',   'maxbusiness_customize_controls_scripts' );

if (class_exists('WP_Customize_Control')){
	
	class MaxBusiness_Customize_Heading extends WP_Customize_Control {
		public $type = 'heading';

		public function render_content() {
			if (!empty($this->label)): ?>
		            <h3 class="maxbusiness-heading"><?php echo esc_html($this->label); ?></h3>
		        <?php endif;

		if ($this->description) {?>
				<span class="description customize-control-description">
				<?php echo wp_kses_post($this->description); ?>
				</span>
			<?php }
		}
	}

	class MaxBusiness_Info_Text extends WP_Customize_Control{
		public $type = 'maxbusiness-info';
	    public function render_content(){
	    ?>
		    <span class="customize-control-title">
				<?php echo esc_html( $this->label ); ?>
			</span>

			<?php if($this->description){ ?>
				<span class="description customize-control-description">
				<?php echo wp_kses_post($this->description); ?>
				</span>
			<?php }
	    }
	}

	class MaxBusiness_Fontawesome_Icon_Chooser extends WP_Customize_Control {
		public $type = 'maxbusiness-icon';

		public function render_content() {
			?>
	            <label>
	                <span class="customize-control-title">
	                <?php echo esc_html($this->label); ?>
	                </span>

	                <?php if ($this->description) {?>
		            <span class="description customize-control-description">
		            	<?php echo wp_kses_post($this->description); ?>
		            </span>
		            <?php }?>

	                <div class="maxbusiness-selected-icon">
	                	<i class="fa <?php echo esc_attr($this->value()); ?>"></i>
	                	<span><i class="fa fa-angle-down"></i></span>
	                </div>

	                <ul class="maxbusiness-icon-list clearfix">
	                	<?php
							$font_awesome_icon_array = maxbusiness_font_awesome_icon_array();
							foreach ($font_awesome_icon_array as $font_awesome_icon) {
								$icon_class = $this->value() == $font_awesome_icon ? 'icon-active' : '';
								echo '<li class=' . $icon_class . '><i class="' . $font_awesome_icon . '"></i></li>';
							}
						?>
	                </ul>
	                <input type="hidden" value="<?php $this->value();?>" <?php $this->link();?> />
	            </label>
			<?php
		}
	}
}