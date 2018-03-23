<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Buildup
 */
?>

<div class="footer-copyright">
        	<div class="container">
            	<div class="copyright-txt">
					<?php bloginfo('name'); ?>. <?php _e('All Rights Reserved', 'buildup');?>           
                </div>
                <div class="design-by">
				  <a href="<?php echo esc_url( __( 'https://gracethemes.com/themes/free-construction-renovation-wordpress-theme/', 'buildup' ) ); ?>"><?php printf( __( 'Theme by %s', 'buildup' ), 'Grace Themes' ); ?></a>
                </div>
                 <div class="clear"></div>
            </div>           
        </div>        
</div><!--#end sitewrapper-->

<?php wp_footer(); ?>
</body>
</html>