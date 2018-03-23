	<div class="clearboth"></div>
</div><!-- #content -->

<?php if ( get_theme_mod( 'festive-footer-layout' ) == 'festive-footer-layout-custom' ) : ?>
	
	<?php get_template_part( '/templates/footer/footer-custom' ); ?>
    
<?php elseif ( get_theme_mod( 'festive-footer-layout' ) == 'festive-footer-layout-standard' ) : ?>

    <?php get_template_part( '/templates/footer/footer-standard' ); ?>
    
<?php elseif ( get_theme_mod( 'festive-footer-layout' ) == 'festive-footer-layout-none' ) : ?>

    <?php get_template_part( '/templates/footer/footer-none' ); ?>
    
<?php else : ?>
	
	<?php get_template_part( '/templates/footer/footer-social' ); ?>
    
<?php endif; ?>

</div>
	<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div> <!-- Scroll To Top Button -->
</div> <!-- #page -->
<?php wp_footer(); ?>
</body>
</html>