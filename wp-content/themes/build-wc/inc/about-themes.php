<?php
/**
 *Buildup About Theme
 *
 * @package Buildup
 */

//about theme info
add_action( 'admin_menu', 'buildup_abouttheme' );
function buildup_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'buildup'), __('About Theme Info', 'buildup'), 'edit_theme_options', 'buildup_guide', 'buildup_mostrar_guide');   
} 

//guidline for about theme
function buildup_mostrar_guide() { 	
?>
<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <h3><?php _e('About Theme Info', 'buildup'); ?></h3>
		   </div>
          <p><?php _e('buildup is a Free Corporate WordPress theme. It is Perfect for all Corporate, Professional, personal, medical and any type of business. It is user friendly customizer options and Compatible in WordPress Latest Version. also Compatible with WooCommerce, Nextgen gallery ,Contact Form 7 and many WordPress popular plugins.','buildup'); ?></p>
<div class="heading-gt"> <?php _e('Theme Features', 'buildup'); ?></div>
 

<div class="col-2">
  <h4><?php _e('Theme Customizer', 'buildup'); ?></h4>
  <div class="description"><?php _e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'buildup'); ?></div>
</div>

<div class="col-2">
  <h4><?php _e('Responsive Ready', 'buildup'); ?></h4>
  <div class="description"><?php _e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'buildup'); ?></div>
</div>

<div class="col-2">
<h4><?php _e('Cross Browser Compatible', 'buildup'); ?></h4>
<div class="description"><?php _e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'buildup'); ?></div>
</div>

<div class="col-2">
<h4><?php _e('E-commerce', 'buildup'); ?></h4>
<div class="description"><?php _e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'buildup'); ?></div>
</div>
<hr />  
</div><!-- .gt-left -->
	
	<div class="gt-right">			
			<div>				
				<a href="<?php echo esc_url( BUILDUP_LIVE_DEMO ); ?>" target="_blank"><?php _e('Live Demo', 'buildup'); ?></a> | 
				<a href="<?php echo esc_url( BUILDUP_PROTHEME_URL ); ?>"><?php _e('Purchase Pro', 'buildup'); ?></a> | 
				<a href="<?php echo esc_url( BUILDUP_THEME_DOC ); ?>" target="_blank"><?php _e('Documentation', 'buildup'); ?></a>
              
				<hr />  
                <ul>
                 <li><?php _e('Theme Customizer', 'buildup'); ?></li>
                 <li><?php _e('Responsive Ready', 'buildup'); ?></li>
                 <li><?php _e('Cross Browser Compatible', 'buildup'); ?></li>
                 <li><?php _e('E-commerce', 'buildup'); ?></li>
                 <li><?php _e('Contact Form 7 Plugin Compatible', 'buildup'); ?></li>  
                 <li><?php _e('User Friendly', 'buildup'); ?></li> 
                 <li><?php _e('Translation Ready', 'buildup'); ?></li>
                 <li><?php _e('Many Other Plugins  Compatible', 'buildup'); ?></li>   
                </ul>              
               
			</div>		
	</div><!-- .gt-right-->
    <div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>