<footer id="colophon" class="site-footer site-footer-standard" role="contentinfo">
	
	<div class="site-footer-widgets">
        <div class="site-container">
            <?php if ( is_active_sidebar( 'festive-site-footer-standard' ) ) : ?>
	            <ul>
	                <?php dynamic_sidebar( 'festive-site-footer-standard' ); ?>
	            </ul>
	        <?php else : ?>
	        	<div class="site-footer-no-widgets">
	        		<?php _e( 'Add your own widgets here', 'festive' ); ?>
	        	</div>
	    	<?php endif; ?>
            <div class="clearboth"></div>
        </div>
    </div>
    
	<?php printf( __( '<div class="site-footer-bottom-bar"><div class="site-container"><div class="site-footer-bottom-bar-left">Theme: %1$s by %2$s</div>', 'festive' ), 'Festive', '<a href="https://kairaweb.com/">Kaira</a>' ); ?>
            
	        <div class="site-footer-bottom-bar-right">
	            <?php wp_nav_menu( array( 'theme_location' => 'festive-footer-menu','container' => false, 'fallback_cb' => false, 'depth'  => 1 ) ); ?>
	            
	            <?php get_template_part( '/templates/social-links' ); ?>
	        </div>
	        
	    </div>
		
        <div class="clearboth"></div>
	</div>
	
</footer>