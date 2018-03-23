<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library Festive
 */

function customizer_library_festive_options() {

	$primary_color = '#ec6b5f';
	$secondary_color = '#bc2b2b';

	$body_font_color = '#3C3C3C';
	$heading_font_color = '#1d1d1d';

    $slider_bg_color = '#f6f6f6';

	// Stores all the controls that will be added
	$options = array();
    
	// Stores all the sections to be added
	$sections = array();

	// Stores all the panels to be added
	$panels = array();
    
	// Header Image
    $section = 'title_tagline';
    
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Site Identity', 'festive' ),
        'priority' => '10',
        'description' => 'Change/edit the <a href="#festive-panel-website-section-header" rel="tc-section">Header</a> & <a href="#festive-panel-website-section-footer" rel="tc-section">Footer</a> Layouts<br />Change/edit <a href="#festive-panel-layout-colors" rel="tc-panel">Theme Colors</a><br />Add a <a href="#festive-panel-website-section-slider" rel="tc-section">Home Page Slider</a><br />Change/edit the <a href="#festive-panel-website-section-blog-list" rel="tc-section">Blog Layout</a><br />Add/edit <a href="#festive-panel-website-section-single-page" rel="tc-section">Pages Featured Image</a><br />Add/edit <a href="#festive-panel-website-section-blog-single" rel="tc-section">Single Posts featured image</a><br />Add <a href="#festive-section-social" rel="tc-section">Social Links</a> to your site'
    );
    
    $options['festive-logo-max-width'] = array(
        'id' => 'festive-logo-max-width',
        'label'   => __( 'Set a max-width for the logo', 'festive' ),
        'section' => $section,
        'type'    => 'number',
        'description' => __( 'This only applies if a logo image is uploaded', 'festive' ),
    );
    
    $options['festive-set-logo-padding-top'] = array(
        'id' => 'festive-set-logo-padding-top',
        'label'   => __( 'Logo Padding Top', 'festive' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 20
    );
    $options['festive-set-logo-padding-bottom'] = array(
        'id' => 'festive-set-logo-padding-bottom',
        'label'   => __( 'Logo Padding Bottom', 'festive' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 30
    );

    $panel = 'festive-panel-website';

    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Festive Settings', 'festive' ),
        'priority' => '30'
    );

    $section = 'festive-panel-website-section-website'; // --------------------------------- Website Layout Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Layout Settings', 'festive' ),
        'priority' => '10',
        'description' => 'Change/edit the <a href="#festive-panel-website-section-header" rel="tc-section">Header</a> & <a href="#festive-panel-website-section-footer" rel="tc-section">Footer</a> Layouts<br />Change/edit <a href="#festive-panel-layout-colors" rel="tc-panel">Theme Colors</a><br />Add a <a href="#festive-panel-website-section-slider" rel="tc-section">Home Page Slider</a><br />Change/edit the <a href="#festive-panel-website-section-blog-list" rel="tc-section">Blog Layout</a><br />Add/edit <a href="#festive-panel-website-section-single-page" rel="tc-section">Pages Featured Image</a><br />Add/edit <a href="#festive-panel-website-section-blog-single" rel="tc-section">Single Posts featured image</a><br />Add <a href="#festive-section-social" rel="tc-section">Social Links</a> to your site',
        'panel' => $panel
    );
    
    $options['festive-turn-on-snow'] = array(
        'id' => 'festive-turn-on-snow',
        'label'   => __( 'Turn on Background Snow', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
        'description' => __( 'This animation might not work in the Customizer', 'festive' )
    );
    $options['festive-remove-round-corners'] = array(
        'id' => 'festive-remove-round-corners',
        'label'   => __( 'Remove Site Rounded Corners', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    
    $options['festive-set-content-padding-top'] = array(
        'id' => 'festive-set-content-padding-top',
        'label'   => __( 'Content Padding Top', 'festive' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 30
    );
    $options['festive-set-content-padding-bottom'] = array(
        'id' => 'festive-set-content-padding-bottom',
        'label'   => __( 'Content Padding Bottom', 'festive' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 30
    );
    $options['festive-upsell-layout'] = array(
        'id' => 'festive-upsell-layout',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Set custom website Conatiner width<br />- Set custom Sidebar width', 'festive' )
    );
    // ---------------------------------------------------------------------------- Website Layout Settings

    $section = 'festive-panel-website-section-header'; // ---------------------------------- Header Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Header', 'festive' ),
        'priority' => '20',
        'description' => 'Change/edit the <a href="#festive-panel-layout-colors-section-header" rel="tc-section">Header Colors</a><br />Add/Edit <a href="#festive-panel-text-section-header" rel="tc-section">header Text</a><br />',
        'panel' => $panel
    );
    
    $options['festive-set-header-remove-topbar'] = array(
        'id' => 'festive-set-header-remove-topbar',
        'label'   => __( 'Remove Top Bar', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $options['festive-set-topbar-switch'] = array(
        'id' => 'festive-set-topbar-switch',
        'label'   => __( 'Switch Top Bar', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $options['festive-set-header-align-right'] = array(
        'id' => 'festive-set-header-align-right',
        'label'   => __( 'Switch Header Main', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $choices = array(
        'festive-header-layout-default' => __( 'Default Header Layout', 'festive' ),
        'festive-header-layout-one' => __( 'Centered Layout', 'festive' ),
        'festive-header-layout-two' => __( 'Standard Layout', 'festive' ),
        'festive-header-layout-three' => __( 'Standard Info Layout', 'festive' ),
        'festive-header-layout-four' => __( 'Standard Big Layout', 'festive' ),
        'festive-header-layout-five' => __( 'Standard Social Layout', 'festive' ),
        'festive-header-layout-six' => __( 'Logo Under Layout', 'festive' )
    );
    $options['festive-set-header-layout'] = array(
        'id' => 'festive-set-header-layout',
        'label'   => __( 'Header Layout', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'festive-header-layout-default'
    );
    $options['festive-set-header-v-align'] = array(
        'id' => 'festive-set-header-v-align',
        'label'   => __( 'Vertically Align Navigation', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $options['festive-set-header-nav-center-align'] = array(
        'id' => 'festive-set-header-nav-center-align',
        'label'   => __( 'Center Align Navigation', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $options['festive-header-split-six'] = array(
        'id' => 'festive-header-split-six',
        'label'   => __( 'Split Navigation & Cart', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $choices = array(
        'festive-navigation-style-blocks' => __( 'Navigation Style Blocks', 'festive' ),
        'festive-navigation-style-underline' => __( 'Navigation Style Underline', 'festive' ),
        'festive-navigation-style-plain' => __( 'Navigation Style Plain', 'festive' )
    );
    $options['festive-set-navigation-style'] = array(
        'id' => 'festive-set-navigation-style',
        'label'   => __( 'Navigation Styling', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'festive-navigation-style-underline'
    );
    $options['festive-remove-nav-shadow'] = array(
        'id' => 'festive-remove-nav-shadow',
        'label'   => __( 'Remove Navigation Shadow', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );

    $options['festive-remove-search'] = array(
        'id' => 'festive-remove-search',
        'label'   => __( 'Remove Search', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $choices = array(
        'festive-search-icon-angle' => __( 'Angle Icon', 'festive' ),
        'festive-search-icon-magnify' => __( 'Magnify Icon', 'festive' ),
        'festive-search-icon-caret' => __( 'Caret Icon', 'festive' ),
        'festive-search-icon-arrow' => __( 'Arrow Icon', 'festive' )
    );
    $options['festive-set-search-icon'] = array(
        'id' => 'festive-set-search-icon',
        'label'   => __( 'Search Icon', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'festive-search-icon-angle'
    );
    $options['festive-upsell-header'] = array(
        'id' => 'festive-upsell-header',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Sticky Navigation<br />- Remove WooCommerce Cart', 'festive' )
    );
    // --------------------------------------------------------------------------------------- Header Settings

    $section = 'festive-panel-website-section-slider'; // ------------------------------------- Slider Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Home Page Slider', 'festive' ),
        'priority' => '30',
        'description' => 'Change/edit the <a href="#festive-panel-layout-colors-section-slider" rel="tc-section">Slider Colors</a>',
        'panel' => $panel
    );

    $choices = array(
        'festive-slider-default' => __( 'Default Slider', 'festive' ),
        'festive-shortcode-slider' => __( 'Slider Shortcode', 'festive' ),
        'festive-no-slider' => __( 'None', 'festive' )
    );
    $options['festive-slider-type'] = array(
        'id' => 'festive-slider-type',
        'label'   => __( 'Choose a Slider', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'festive-no-slider'
    );
    $options['festive-slider-cats'] = array(
        'id' => 'festive-slider-cats',
        'label'   => __( 'Slider Categories', 'festive' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the ID\'s of the post categories you want to display in the slider. Eg: "13,17,19" (no spaces and only comma\'s)<br /><br />Get the ID at <b>Posts -> Categories</b>.<br /><br />Or <a href="https://kairaweb.com/documentation/setting-up-the-default-slider/" target="_blank"><b>See more instructions here</b></a>', 'festive' )
    );
    $options['festive-slider-shortcode'] = array(
        'id' => 'festive-slider-shortcode',
        'label'   => __( 'Slider Shortcode', 'festive' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the slider shortcode', 'festive' )
    );
    $options['festive-slider-style'] = array(
        'id' => 'festive-slider-style',
        'label'   => __( 'Remove Slider Border', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['festive-slider-style-spacing'] = array(
        'id' => 'festive-slider-style-spacing',
        'label'   => __( 'Slider Spacing', 'festive' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 150,
            'step'  => 1,
        ),
        'default' => 25
    );
    $choices = array(
        'festive-slider-size-small' => __( 'Small Slider', 'festive' ),
        'festive-slider-size-medium' => __( 'Medium Slider', 'festive' ),
        'festive-slider-size-large' => __( 'Large Slider', 'festive' )
    );
    $options['festive-slider-size'] = array(
        'id' => 'festive-slider-size',
        'label'   => __( 'Slider Size', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'festive-slider-size-medium'
    );
    $choices = array(
        'crossfade' => __( 'Cross Fade', 'festive' ),
        'cover-fade' => __( 'Cover Fade', 'festive' ),
        'uncover-fade' => __( 'Uncover Fade', 'festive' ),
        'cover' => __( 'Cover', 'festive' ),
        'scroll' => __( 'Scroll', 'festive' )
    );
    $options['festive-slider-remove-title'] = array(
        'id' => 'festive-slider-remove-title',
        'label'   => __( 'Remove Slider Title', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['festive-slider-auto-scroll'] = array(
        'id' => 'festive-slider-auto-scroll',
        'label'   => __( 'Stop Auto Scroll', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['festive-upsell-slider'] = array(
        'id' => 'festive-upsell-slider',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Link Slider Posts to Post/Custom URL<br />- Change Slider scroll effect<br />- Change slider direction<br />- Change/Edit Slider timing/duration', 'festive' )
    );
    // --------------------------------------------------------------------------------------- Slider Settings


    $section = 'festive-panel-website-section-single-page'; // -------------------------- Single Pages Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Pages', 'festive' ),
        'priority' => '40',
        'description' => 'Change/edit the <a href="#festive-panel-layout-colors-section-pages" rel="tc-section">Title Bar & Widget Title Colors</a>',
        'panel' => $panel
    );

    $options['festive-page-remove-titlebar'] = array(
        'id' => 'festive-page-remove-titlebar',
        'label'   => __( 'Remove All Page Titles', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    
    $options['festive-blog-widget-title-size'] = array(
        'id' => 'festive-blog-widget-title-size',
        'label'   => __( 'Sidebar Title Size', 'festive' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 24,
    );
    $options['festive-blog-widget-title-centeralign'] = array(
        'id' => 'festive-blog-widget-title-centeralign',
        'label'   => __( 'Center Align Title', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'widget-title-style-plain' => __( 'Underlined Dots', 'festive' ),
        'widget-title-style-underline-dots' => __( 'Underlined Dashed', 'festive' ),
        'widget-title-style-underline-solid' => __( 'Underlined Solid', 'festive' ),
        'widget-title-style-underline-short' => __( 'Short Underline', 'festive' )
    );
    $options['festive-blog-widget-title-style'] = array(
        'id' => 'festive-blog-widget-title-style',
        'label'   => __( 'Widget Title Styling', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'widget-title-style-plain'
    );
    
    $choices = array(
        'festive-page-fimage-layout-none' => __( 'None', 'festive' ),
        'festive-page-fimage-layout-standard' => __( 'Standard', 'festive' ),
        'festive-page-fimage-layout-banner' => __( 'Page Banner', 'festive' )
    );
    $options['festive-page-fimage-layout'] = array(
        'id' => 'festive-page-fimage-layout',
        'label'   => __( 'Featured Image Layout', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'festive-page-fimage-layout-none'
    );
    $choices = array(
        'festive-page-fimage-size-extra-small' => __( 'Extra Small Banner', 'festive' ),
        'festive-page-fimage-size-small' => __( 'Small Banner', 'festive' ),
        'festive-page-fimage-size-medium' => __( 'Medium Banner', 'festive' ),
        'festive-page-fimage-size-large' => __( 'Large Banner', 'festive' ),
        'festive-page-fimage-size-actual' => __( 'Use Proper Image', 'festive' )
    );
    $options['festive-page-fimage-size'] = array(
        'id' => 'festive-page-fimage-size',
        'label'   => __( 'Page Banner Size', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'festive-page-fimage-size-medium'
    );
    // --------------------------------------------------------------------------------- Single Pages Settings

    $section = 'festive-panel-website-section-blog-list'; // ------------------------------- Blog List Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Blog List', 'festive' ),
        'priority' => '50',
        'panel' => $panel
    );

    $choices = array(
        'blog-left-layout' => __( 'Left Layout', 'festive' ),
        'blog-right-layout' => __( 'Right Layout', 'festive' ),
        'blog-alt-layout' => __( 'Alternate Layout', 'festive' ),
        'blog-top-layout' => __( 'Top Layout', 'festive' ),
        'blog-grid-layout' => __( 'Grid/Blocks Layout', 'festive' )
    );
    $options['festive-set-blog-layout'] = array(
        'id' => 'festive-set-blog-layout',
        'label'   => __( 'Blog Posts Layout', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'blog-left-layout'
    );
    $choices = array(
        'blog-style-plain' => __( 'Plain Styling', 'festive' ),
        'blog-style-block' => __( 'Block Styling', 'festive' )
    );
    $options['festive-set-blog-styling'] = array(
        'id' => 'festive-set-blog-styling',
        'label'   => __( 'Blog Styling', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'blog-style-plain'
    );
    $options['festive-blog-top-center'] = array(
        'id' => 'festive-blog-top-center',
        'label'   => __( 'Center Align Text', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['festive-blog-column-spacing'] = array(
        'id' => 'festive-blog-column-spacing',
        'label'   => __( 'Column Spacing', 'festive' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 40,
            'step'  => 1,
        ),
        'default' => 15
    );
    $options['festive-set-blog-cats'] = array(
        'id' => 'festive-set-blog-cats',
        'label'   => __( 'Exclude Blog Categories', 'festive' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the ID\'s of the post categories you\'d like to EXCLUDE from the Blog, enter only the ID\'s with a minus sign (-) before them, separated by a comma (,)<br />Eg: "-13, -17, -19"<br /><br />If you enter the ID\'s without the minus then it\'ll show ONLY posts in those categories.<br /><br />Get the ID at <b>Posts -> Categories</b>.', 'festive' )
    );
    $choices = array(
        'blog-display-full-text' => __( 'Full Text', 'festive' ),
        'blog-display-summary' => __( 'Summary', 'festive' )
    );
    $options['festive-article-content-display'] = array(
        'id' => 'festive-article-content-display',
        'label'   => __( 'For each article display:', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'blog-display-full-text'
    );
    $options['festive-article-content-word-count'] = array(
        'id' => 'festive-article-content-word-count',
        'label'   => __( 'Amount of words displayed', 'festive' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 40
    );
    $options['festive-article-content-readmore'] = array(
        'id' => 'festive-article-content-readmore',
        'label'   => __( 'Read More Text', 'festive' ),
        'section' => $section,
        'type'    => 'text',
        'default' => '...Read More'
    );
    $options['festive-blog-list-remove-meta'] = array(
        'id' => 'festive-blog-list-remove-meta',
        'label'   => __( 'Remove Meta Info', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    
    $options['festive-remove-cat-pre-title'] = array(
        'id' => 'festive-remove-cat-pre-title',
        'label'   => __( 'Remove text before Archive Title', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'This will not update in the Customizer. Exit the Customizer to view the change', 'festive' ),
        'default' => 0,
    );
    $options['festive-upsell-blog-list'] = array(
        'id' => 'festive-upsell-blog-list',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Change Blog Grid Layout Columns<br />- Set Blog, Archives & Post pages to Left Sidebar<br />- Set Blog, Archives & Post pages to Full Width', 'festive' )
    );
    // ----------------------------------------------------------------------------------- Blog List Settings

    $section = 'festive-panel-website-section-blog-single'; // -------------------------- Blog Single Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Blog Single Page', 'festive' ),
        'priority' => '60',
        'panel' => $panel
    );
    $options['festive-blog-single-remove-meta'] = array(
        'id' => 'festive-blog-single-remove-meta',
        'label'   => __( 'Remove Meta Info', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['festive-blog-single-remove-cats'] = array(
        'id' => 'festive-blog-single-remove-cats',
        'label'   => __( 'Remove Categories/Tags list', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['festive-single-author-block'] = array(
        'id' => 'festive-single-author-block',
        'label'   => __( 'Add Post Author Block', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'This will not update in the Customizer. Exit the Customizer to view the change on the blog post pages', 'festive' ),
        'default' => 0,
    );
    $choices = array(
        'festive-single-page-fimage-layout-none' => __( 'None', 'festive' ),
        'festive-single-page-fimage-layout-standard' => __( 'Standard', 'festive' ),
        'festive-single-page-fimage-layout-banner' => __( 'Page Banner', 'festive' )
    );
    $options['festive-single-page-fimage-layout'] = array(
        'id' => 'festive-single-page-fimage-layout',
        'label'   => __( 'Featured Image Layout', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'festive-single-page-fimage-layout-none'
    );
    $choices = array(
        'festive-single-page-fimage-size-extra-small' => __( 'Extra Small Banner', 'festive' ),
        'festive-single-page-fimage-size-small' => __( 'Small Banner', 'festive' ),
        'festive-single-page-fimage-size-medium' => __( 'Medium Banner', 'festive' ),
        'festive-single-page-fimage-size-large' => __( 'Large Banner', 'festive' ),
        'festive-single-page-fimage-size-actual' => __( 'Use Proper Image', 'festive' )
    );
    $options['festive-single-page-fimage-size'] = array(
        'id' => 'festive-single-page-fimage-size',
        'label'   => __( 'Page Banner Size', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'festive-single-page-fimage-size-medium'
    );
    // ---------------------------------------------------------------------------------- Blog Single Settings


    // WooCommerce style Layout
    if ( festive_is_woocommerce_activated() ) :

        $section = 'festive-panel-woocommerce-section-website'; // ---------------- WooCommerce Layout Settings

        $sections[] = array(
            'id' => $section,
            'title' => __( 'WooCommerce', 'festive' ),
            'priority' => '70',
            'panel' => $panel
        );
        
        $choices = array(
            'fa-shopping-cart' => __( 'Shopping Cart', 'festive' ),
            'fa-shopping-basket' => __( 'Shopping Basket', 'festive' ),
            'fa-shopping-bag' => __( 'Shopping Bag', 'festive' )
        );
        $options['festive-cart-icon'] = array(
            'id' => 'festive-cart-icon',
            'label'   => __( 'Cart Icon', 'festive' ),
            'section' => $section,
            'type'    => 'select',
            'description' => __( 'Due to the AJAX, This will only change when you open the site again in a new tab', 'festive' ),
            'choices' => $choices,
            'default' => 'fa-shopping-cart'
        );
        $options['festive-shop-remove-border'] = array(
            'id' => 'festive-shop-remove-border',
            'label'   => __( 'Remove Product list hover border', 'festive' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        
        $options['festive-upsell-woocommerce'] = array(
            'id' => 'festive-upsell-woocommerce',
            'section' => $section,
            'type'    => 'upsell',
            'description' => __( '<b>Premium Extra Features:</b><br />- Set WC Product Columns<br />- Set WC Products Per Page<br />- Set Shop, Archives & Product pages to Left Sidebar<br />- Set Shop, Archives & Product pages to Full Width', 'festive' )
        );

    endif;
    // -------------------------------------------------------------------------- WooCommerce Layout Settings

    $section = 'festive-panel-website-section-footer'; // ------------------------------------ Footer Settings

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Footer', 'festive' ),
        'priority' => '80',
        'description' => 'Change/edit the <a href="#festive-panel-layout-colors-section-footer" rel="tc-section">Footer Colors</a><br />Add/Edit <a href="#festive-panel-text-section-footer" rel="tc-section">Footer Text</a><br />',
        'panel' => $panel
    );
    
    $options['festive-footer-bottom-space'] = array(
        'id' => 'festive-footer-bottom-space',
        'label'   => __( 'Remove Footer Bottom Spacing', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'festive-footer-layout-standard' => __( 'Standard Layout', 'festive' ),
        'festive-footer-layout-social' => __( 'Social Layout', 'festive' ),
        'festive-footer-layout-none' => __( 'None', 'festive' )
    );
    $options['festive-footer-layout'] = array(
        'id' => 'festive-footer-layout',
        'label'   => __( 'Footer Layout', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'festive-footer-layout-social'
    );
    $options['festive-footer-standard-note'] = array(
        'id' => 'festive-footer-standard-note',
        'section' => $section,
        'type'    => 'note',
        'description' => __( 'The Standard Footer is divided into columns by the amount of widgets that are added under<br /><b><i>Dashboard -> Appearance -> Widgets</i></b>', 'festive' )
    );
    $options['festive-footer-social-note'] = array(
        'id' => 'festive-footer-social-note',
        'section' => $section,
        'type'    => 'note',
        'description' => __( 'Add your wanted <a href="#festive-section-social" rel="tc-section">Social Links</a>', 'festive' )
    );
    $options['festive-upsell-footer'] = array(
        'id' => 'festive-upsell-footer',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Advanced Custom Footer layout<br />- Remove/Edit Site Attribution text<br />- Remove the Footer Bottom Bar<br />- Remove Social Links', 'festive' )
    );
    // -------------------------------------------------------------------------------------- Footer Settings

    $panel = 'festive-panel-text';

    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Festive Text', 'festive' ),
        'priority' => '40'
    );

    $section = 'festive-panel-text-section-header'; // ------------------------------------------- Header Text

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Header', 'festive' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['festive-set-text-header-phone'] = array(
        'id' => 'festive-set-text-header-phone',
        'label'   => __( 'Phone Number', 'festive' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Call Us: +2782 444 YEAH', 'festive' )
    );
    $options['festive-set-text-header-add'] = array(
        'id' => 'festive-set-text-header-add',
        'label'   => __( 'Address', 'festive' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Cape Town, South Africa', 'festive' )
    );
    $options['festive-upsell-header-text'] = array(
        'id' => 'festive-upsell-header-text',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Add extra Custom Text and Icon', 'festive' )
    );
    // ----------------------------------------------------------------------------------------- Header Text

    $section = 'festive-panel-text-section-navigation'; // ---------------------------------- Navigation Text

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Navigation', 'festive' ),
        'priority' => '20',
        'panel' => $panel
    );

    // Navigation Text
    $options['festive-set-text-mobile-nav'] = array(
        'id' => 'festive-set-text-mobile-nav',
        'label'   => __( 'Mobile Navigation Button', 'festive' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'MENU', 'festive' )
    );
    // ------------------------------------------------------------------------------------ Navigation Text

    $section = 'festive-panel-text-section-error'; // ---------------------------------- Navigation Text

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Error 404/No Results', 'festive' ),
        'priority' => '30',
        'panel' => $panel
    );

    $options['festive-website-error-head'] = array(
        'id' => 'festive-website-error-head',
        'label'   => __( '404 Error Page Heading', 'festive' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Oops! <span>404</span>', 'festive'),
        'description' => __( 'Enter the heading for the 404 Error page', 'festive' )
    );
    $options['festive-website-error-msg'] = array(
        'id' => 'festive-website-error-msg',
        'label'   => __( 'Error 404 Message', 'festive' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'It looks like that page does not exist. <br />Return home or try a search', 'festive'),
        'description' => __( 'Enter the default text on the 404 error page (Page not found)', 'festive' )
    );

    $options['festive-website-nosearch-head'] = array(
        'id' => 'festive-website-nosearch-head',
        'label'   => __( 'No Search Results Heading', 'festive' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Nothing Found', 'festive'),
        'description' => __( 'Enter the heading for when no search results are found', 'festive' )
    );
    $options['festive-website-nosearch-msg'] = array(
        'id' => 'festive-website-nosearch-msg',
        'label'   => __( 'No Search Results Message', 'festive' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'festive'),
        'description' => __( 'Enter the default text for when no search results are found', 'festive' )
    );
    // ------------------------------------------------------------------------------------ Navigation Text

    $section = 'festive-panel-text-section-footer'; // ---------------------------------- Footer Text

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Footer', 'festive' ),
        'priority' => '40',
        'panel' => $panel
    );
    $options['festive-website-footer-add'] = array(
        'id' => 'festive-website-footer-add',
        'label'   => __( 'Address', 'festive' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Cape Town, South Africa', 'festive' )
    );
    $options['festive-website-footer-icon'] = array(
        'id' => 'festive-website-footer-icon',
        'label'   => __( 'Custom Icon', 'festive' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Uses <a href="http://fontawesome.io/cheatsheet/" target="_blank">Font Awesome</a> class<br />Eg: fa-map-marker', 'festive' ),
        'default' => __( 'fa-map-marker', 'festive' )
    );
    $options['festive-upsell-footer-text'] = array(
        'id' => 'festive-upsell-footer-text',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Remove/Edit Site Attribution text<br />- Add Custom Text & Icon to Bottom Bar Left<br />- Add Custom Text & Icon to Bottom Bar Right', 'festive' )
    );
    // ------------------------------------------------------------------------------------ Footer Text


    $panel = 'festive-panel-font-options';

    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Festive Fonts', 'festive' ),
        'priority' => '50'
    );

    $section = 'festive-panel-font-section-site'; // ----------------------------------------- Default Fonts
    $font_choices = customizer_library_get_font_choices();

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Default Fonts', 'festive' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['festive-body-font'] = array(
        'id' => 'festive-body-font',
        'label'   => __( 'Body Font', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_choices,
        'default' => 'Open Sans'
    );
    $options['festive-body-font-color'] = array(
        'id' => 'festive-body-font-color',
        'label'   => __( 'Body Font Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $body_font_color,
    );
    $options['festive-heading-font'] = array(
        'id' => 'festive-heading-font',
        'label'   => __( 'Heading Font', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_choices,
        'default' => 'Indie Flower'
    );
    $options['festive-heading-font-color'] = array(
        'id' => 'festive-heading-font-color',
        'label'   => __( 'Heading Font Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $heading_font_color,
    );
    // -------------------------------------------------------------------------------------- Default Fonts

    $section = 'festive-panel-font-section-titles'; // ----------------------------------------- Title Fonts
    $font_choices = customizer_library_get_font_choices();

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Site Title & Description', 'festive' ),
        'priority' => '20',
        'panel' => $panel
    );

    $options['festive-title-font'] = array(
        'id' => 'festive-title-font',
        'label'   => __( 'Site Title Font', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_choices,
        'default' => 'Indie Flower'
    );
    $options['festive-title-font-size'] = array(
        'id' => 'festive-title-font-size',
        'label'   => __( 'Site Title Size', 'festive' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 64,
    );
    $options['festive-tagline-font'] = array(
        'id' => 'festive-tagline-font',
        'label'   => __( 'Site Tagline Font', 'festive' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_choices,
        'default' => 'Roboto'
    );
    $options['festive-tagline-font-size'] = array(
        'id' => 'festive-tagline-font-size',
        'label'   => __( 'Site Tagline Size', 'festive' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 13,
    );
    $options['festive-title-bottom-margin'] = array(
        'id' => 'festive-title-bottom-margin',
        'label'   => __( 'Site Title Bottom Margin', 'festive' ),
        'section' => $section,
        'type'    => 'number',
        'description' => __( 'This will set the space between the site title and the site tagline', 'festive' ),
        'default' => 0,
    );
    // ---------------------------------------------------------------------------------------- Title Fonts


    $panel = 'festive-panel-layout-colors';

    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Festive Colors', 'festive' ),
        'priority' => '40'
    );
    
    // --------------------------------------------------------------- Colors
    $section = 'colors';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Default Colors', 'festive' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['festive-boxed-bg-color'] = array(
        'id' => 'festive-boxed-bg-color',
        'label'   => __( 'Site Boxed Background Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['festive-primary-color'] = array(
        'id' => 'festive-primary-color',
        'label'   => __( 'Primary Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['festive-secondary-color'] = array(
        'id' => 'festive-secondary-color',
        'label'   => __( 'Secondary Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $secondary_color,
    );
    // --------------------------------------------------------------- Colors

    $section = 'festive-panel-layout-colors-section-header'; // ------------------------------ Header Colors

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Header', 'festive' ),
        'priority' => '20',
        'panel' => $panel
    );

    $options['festive-header-bg-color'] = array(
        'id' => 'festive-header-bg-color',
        'label'   => __( 'Background Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['festive-header-font-color'] = array(
        'id' => 'festive-header-font-color',
        'label'   => __( 'Font Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#8a8a8a',
    );

    $options['festive-topbar-bg-color'] = array(
        'id' => 'festive-topbar-bg-color',
        'label'   => __( 'Top Bar Background Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#3C3C3C',
    );
    $options['festive-topbar-font-color'] = array(
        'id' => 'festive-topbar-font-color',
        'label'   => __( 'Top Bar Font Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#f2f2f2',
    );
    // -------------------------------------------------------------------------------------- Header Colors

    $section = 'festive-panel-layout-colors-section-nav'; // -------------------------- Navigation Colors

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Navigation', 'festive' ),
        'priority' => '30',
        'panel' => $panel
    );

    $options['festive-nav-bg-color'] = array(
        'id' => 'festive-nav-bg-color',
        'label'   => __( 'Background Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#157299',
    );
    $options['festive-nav-font-color'] = array(
        'id' => 'festive-nav-font-color',
        'label'   => __( 'Font Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['festive-nav-drop-bg-color'] = array(
        'id' => 'festive-nav-drop-bg-color',
        'label'   => __( 'Drop Down Background Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['festive-nav-drop-font-color'] = array(
        'id' => 'festive-nav-drop-font-color',
        'label'   => __( 'Drop Down Font Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#1d1d1d',
    );
    $options['festive-nav-font-hover-color'] = array(
        'id' => 'festive-nav-font-hover-color',
        'label'   => __( 'Hover/Selected Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['festive-nav-font-hover-selected-color'] = array(
        'id' => 'festive-nav-font-hover-selected-color',
        'label'   => __( 'Hover/Selected Font Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    // ---------------------------------------------------------------------------------- Navigation Colors

    $section = 'festive-panel-layout-colors-section-slider'; // ------------------------------ Slider Colors

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Home Page Slider', 'festive' ),
        'priority' => '40',
        'panel' => $panel
    );

    $options['festive-slider-bg-color'] = array(
        'id' => 'festive-slider-bg-color',
        'label'   => __( 'Background Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#f6f6f6',
    );

    $options['festive-slider-block-bg-color'] = array(
        'id' => 'festive-slider-block-bg-color',
        'label'   => __( 'Block Background Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['festive-slider-block-font-color'] = array(
        'id' => 'festive-slider-block-font-color',
        'label'   => __( 'Block Font Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#333333',
    );
    $options['festive-slider-block-opacity'] = array(
        'id' => 'festive-slider-block-opacity',
        'label'   => __( 'Block Opacity', 'festive' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 99,
            'step'  => 1,
        ),
        'default' => 50
    );
    // -------------------------------------------------------------------------------------- Slider Colors

    $section = 'festive-panel-layout-colors-section-pages'; // ------------------------------ Titlebar Colors

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Pages', 'festive' ),
        'priority' => '50',
        'panel' => $panel
    );

    $options['festive-page-titlebar-bgcolor'] = array(
        'id' => 'festive-page-titlebar-bgcolor',
        'label'   => __( 'Title Bar Background Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#f6f6f6',
    );
    $options['festive-page-titlebar-fontcolor'] = array(
        'id' => 'festive-page-titlebar-fontcolor',
        'label'   => __( 'Title Bar Font Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#1d1d1d',
    );
    $options['festive-page-widgets-title-color'] = array(
        'id' => 'festive-page-widgets-title-color',
        'label'   => __( 'Sidebar Headings Font Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#1d1d1d',
    );
    // ------------------------------------------------------------------------------------- Titlebar Colors

    $section = 'festive-panel-layout-colors-section-footer'; // ------------------------------- Footer Colors

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Footer', 'festive' ),
        'priority' => '60',
        'panel' => $panel
    );

    $options['festive-footer-bg-color'] = array(
        'id' => 'festive-footer-bg-color',
        'label'   => __( 'Background Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['festive-footer-heading-font-color'] = array(
        'id' => 'festive-footer-heading-font-color',
        'label'   => __( 'Heading Font Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#000000',
    );
    $options['festive-footer-font-color'] = array(
        'id' => 'festive-footer-font-color',
        'label'   => __( 'Font Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#1d1d1d',
    );

    $options['festive-bottombar-bg-color'] = array(
        'id' => 'festive-bottombar-bg-color',
        'label'   => __( 'Bottom Bar Background Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#3C3C3C',
    );
    $options['festive-bottombar-font-color'] = array(
        'id' => 'festive-bottombar-font-color',
        'label'   => __( 'Bottom Bar Font Color', 'festive' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#f2f2f2',
    );
    // -------------------------------------------------------------------------------------- Footer Colors


    // ------------------------------------------------------- Social Options
    $section = 'festive-section-social';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Festive Social Links', 'festive' ),
        'priority' => '60'
    );

    $options['festive-social-email'] = array(
        'id' => 'festive-social-email',
        'label'   => __( 'Email Address', 'festive' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['festive-social-skype'] = array(
        'id' => 'festive-social-skype',
        'label'   => __( 'Skype Name', 'festive' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['festive-social-facebook'] = array(
        'id' => 'festive-social-facebook',
        'label'   => __( 'Facebook', 'festive' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['festive-social-twitter'] = array(
        'id' => 'festive-social-twitter',
        'label'   => __( 'Twitter', 'festive' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['festive-social-pinterest'] = array(
        'id' => 'festive-social-pinterest',
        'label'   => __( 'Pinterest', 'festive' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['festive-social-etsy'] = array(
        'id' => 'festive-social-etsy',
        'label'   => __( 'Etsy', 'festive' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['festive-social-medium'] = array(
        'id' => 'festive-social-medium',
        'label'   => __( 'Medium', 'festive' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['festive-social-behance'] = array(
        'id' => 'festive-social-behance',
        'label'   => __( 'Behance', 'festive' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['festive-social-tumblr'] = array(
        'id' => 'festive-social-tumblr',
        'label'   => __( 'Tumblr', 'festive' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['festive-social-flickr'] = array(
        'id' => 'festive-social-flickr',
        'label'   => __( 'Flickr', 'festive' ),
        'section' => $section,
        'type'    => 'text',
    );
    
    $options['festive-upsell-social'] = array(
        'id' => 'festive-upsell-social',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Add over 20 different Social Links<br />- Add your own custom social icon & url', 'festive' )
    );
    // ------------------------------------------------------- Social Options
    
    $section = 'background_image';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Background Image', 'festive' )
    );

    $options['festive-remove-body-bg-image'] = array(
        'id' => 'festive-remove-body-bg-image',
        'label'   => __( 'Remove Background Image', 'festive' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_festive_options' );
