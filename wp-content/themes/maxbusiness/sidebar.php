<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MaxBusiness
 */
?>
<div id="secondary" class="col-md-3 cs-sidebar" role="complementary">
	<div class="sidebar-inner">
	<?php
	if (is_active_sidebar( 'sidebar-area' ) ) {
		 dynamic_sidebar( 'sidebar-area' ); 
	}else{

		$args = array(
			'name'          => esc_html__( 'Sidebar', 'maxbusiness' ),
			'id'            => 'sidebar-area',
			'description'   => esc_html__('Sidebar Widget Area', 'maxbusiness' ),
			'before_widget' => '<div id="%1$s" class="col-md-12 widget sidebar-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-heading"><h2>',
			'after_title'   => '</h2></div>',
		);
		the_widget('WP_Widget_Calendar', 'title='.esc_html__('Calendar', 'maxbusiness'), $args);
		the_widget('WP_Widget_Search', 'title='.esc_html__('Search', 'maxbusiness'), $args);
		the_widget('WP_Widget_Tag_Cloud', null, $args);
		the_widget('WP_Widget_Recent_Posts', null, $args);
		the_widget('WP_Widget_Recent_Comments', null, $args);
		the_widget('WP_Widget_Archives', null, $args);
		the_widget('WP_Widget_Categories', null, $args);

	}
	?>
	</div>
</div><!-- #secondary -->
