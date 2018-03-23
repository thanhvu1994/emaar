
<?php if ( get_theme_mod( 'festive-set-header-layout' ) == 'festive-header-layout-six' ) : ?>
    
    <?php get_template_part( '/templates/header/header-six' ); ?>
    
<?php elseif ( get_theme_mod( 'festive-set-header-layout' ) == 'festive-header-layout-five' ) : ?>
    
    <?php get_template_part( '/templates/header/header-five' ); ?>
    
<?php elseif ( get_theme_mod( 'festive-set-header-layout' ) == 'festive-header-layout-three' ) : ?>
    
    <?php get_template_part( '/templates/header/header-three' ); ?>
    
<?php elseif ( get_theme_mod( 'festive-set-header-layout' ) == 'festive-header-layout-four' ) : ?>
    
    <?php get_template_part( '/templates/header/header-four' ); ?>
    
<?php elseif ( get_theme_mod( 'festive-set-header-layout' ) == 'festive-header-layout-two' ) : ?>
    
    <?php get_template_part( '/templates/header/header-two' ); ?>
    
<?php elseif ( get_theme_mod( 'festive-set-header-layout' ) == 'festive-header-layout-one' ) : ?>
    
    <?php get_template_part( '/templates/header/header-one' ); ?>
    
<?php else : ?>
    
    <?php get_template_part( '/templates/header/header-default' ); ?>
    
<?php endif; ?>
