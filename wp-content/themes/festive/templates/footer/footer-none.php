<footer id="colophon" class="site-footer site-footer-none" role="contentinfo">
	
	<?php printf( __( '<div class="site-footer-bottom-bar"><div class="site-container"><div class="site-footer-bottom-bar-left">Theme: %1$s by %2$s</div><div class="site-footer-bottom-bar-right">', 'festive' ), 'Festive', '<a href="https://kairaweb.com/">Kaira</a>' ); ?>
                
			<?php wp_nav_menu( array( 'theme_location' => 'festive-footer-menu','container' => false, 'fallback_cb' => false, 'depth'  => 1 ) ); ?>
                
            <?php get_template_part( '/templates/social-links' ); ?>
                
	    </div></div><div class="clearboth"></div>
	</div>
	
</footer>