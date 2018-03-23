<?php
if ( get_theme_mod( 'festive-slider-type' ) == 'festive-slider-default' ) : ?>
    
    <?php
    $slider_cats = '';
    if ( get_theme_mod( 'festive-slider-cats' ) ) {
        $slider_cats = get_theme_mod( 'festive-slider-cats' );
    } ?>
    
    <?php if( $slider_cats ) : ?>
        
        <?php $slider_query = new WP_Query( 'cat=' . esc_html( $slider_cats ) . '&posts_per_page=-1&orderby=date&order=DESC' ); ?>
        
        <?php if ( $slider_query->have_posts() ) : ?>

            <div class="home-slider-wrap <?php echo ( get_theme_mod( 'festive-slider-size' ) ) ? sanitize_html_class( get_theme_mod( 'festive-slider-size' ) ) : sanitize_html_class( 'festive-slider-size-medium' ); ?> <?php echo ( get_theme_mod( 'festive-slider-style' ) ) ? sanitize_html_class( 'slider-full-width' ) : ''; ?> home-slider-remove">
                <div class="home-slider-prev"><i class="fa fa-angle-left"></i></div>
                <div class="home-slider-next"><i class="fa fa-angle-right"></i></div>
                
                <?php echo ( get_theme_mod( 'festive-slider-style' ) == 0 ) ? '<div class="site-container">' : ''; ?>
                    
                    <div class="home-slider">
                        
                        <?php while ( $slider_query->have_posts() ) : $slider_query->the_post();
                            $slider_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                            $slide_custom_link = get_post_meta( $post->ID, 'festive-meta-box-slider-link', true ); ?>
                            
                            <div class="home-slider-block"<?php echo ( has_post_thumbnail() ) ? ' style="background-image: url(' . esc_url( $slider_thumbnail['0'] ) . ');"' : ''; ?>>
                            
                                <?php if ( get_theme_mod( 'festive-slider-size' ) == 'festive-slider-size-small' ) : ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/images/slider_blank_img_small<?php echo ( get_theme_mod( 'festive-slider-style' ) ) ? '_full' : ''; ?>.gif" />
                                <?php elseif ( get_theme_mod( 'festive-slider-size' ) == 'festive-slider-size-large' ) : ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/images/slider_blank_img_large<?php echo ( get_theme_mod( 'festive-slider-style' ) ) ? '_full' : ''; ?>.gif" />
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/images/slider_blank_img_medium<?php echo ( get_theme_mod( 'festive-slider-style' ) ) ? '_full' : ''; ?>.gif" />
                                <?php endif; ?>
                                
                                <?php if ( !get_theme_mod( 'festive-slider-remove-title' ) ) : ?>
                                
                                    <div class="home-slider-block-inner">
                                        <div class="home-slider-block-bg">
                                            <h3 class="home-slider-block-title">
                                                <?php the_title(); ?>
                                            </h3>
                                            <?php if ( has_excerpt() ) : ?>
                                                <p><?php the_excerpt(); ?></p>
                                            <?php else : ?>
                                                <p><?php the_content(); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                <?php endif; ?>
                            
                            </div>
                        
                        <?php endwhile; ?>
                        
                    </div>
                
                <?php echo ( get_theme_mod( 'festive-slider-style' ) == 0 ) ? '</div>' : ''; ?>
                <div class="home-slider-pager"></div>
                
                <?php do_action ( 'festive_after_default_slider' ); ?>
                
            </div>
            
        <?php endif; wp_reset_query(); ?>
        
    <?php else : ?>
        
        <div class="home-slider-wrap <?php echo ( get_theme_mod( 'festive-slider-size' ) ) ? sanitize_html_class( get_theme_mod( 'festive-slider-size' ) ) : sanitize_html_class( 'festive-slider-size-medium' ); ?> <?php echo ( get_theme_mod( 'festive-slider-style' ) ) ? sanitize_html_class( 'slider-full-width' ) : ''; ?> home-slider-remove">
            <div class="home-slider-prev"><i class="fa fa-angle-left"></i></div>
            <div class="home-slider-next"><i class="fa fa-angle-right"></i></div>
            
            <?php echo ( get_theme_mod( 'festive-slider-style' ) == 0 ) ? '<div class="site-container">' : ''; ?>
                
                <div class="home-slider">
                    
                    <div class="home-slider-block" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/demo/slide_demo_01.jpg);">
                        
                        <?php if ( get_theme_mod( 'festive-slider-size' ) == 'festive-slider-size-small' ) : ?>
                            <img src="<?php echo get_template_directory_uri() ?>/images/slider_blank_img_small<?php echo ( get_theme_mod( 'festive-slider-style' ) ) ? '_full' : ''; ?>.gif" />
                        <?php elseif ( get_theme_mod( 'festive-slider-size' ) == 'festive-slider-size-large' ) : ?>
                            <img src="<?php echo get_template_directory_uri() ?>/images/slider_blank_img_large<?php echo ( get_theme_mod( 'festive-slider-style' ) ) ? '_full' : ''; ?>.gif" />
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri() ?>/images/slider_blank_img_medium<?php echo ( get_theme_mod( 'festive-slider-style' ) ) ? '_full' : ''; ?>.gif" />
                        <?php endif; ?>
                        
                        <?php if ( !get_theme_mod( 'festive-slider-remove-title' ) ) : ?>
                            
                            <div class="home-slider-block-inner">
                                <div class="home-slider-block-bg">
                                    <h3 class="home-slider-block-title">
                                        <?php _e( 'Bring out the Festive Spirit', 'festive' ); ?>
                                    </h3>
                                    <p><?php _e( 'Create beautiful websites all from within the WordPress Customizer', 'festive' ); ?></p>
                                </div>
                            </div>
                            
                        <?php endif; ?>
                        
                    </div>
                    
                </div>
            
            <?php echo ( get_theme_mod( 'festive-slider-style' ) == 0 ) ? '</div>' : ''; ?>
            <div class="home-slider-pager"></div>
            
        </div>

    <?php endif; ?>
    
<?php
elseif ( get_theme_mod( 'festive-slider-type' ) == 'festive-shortcode-slider' ) : ?>
    
    <?php
    $slider_code = '';
    if ( get_theme_mod( 'festive-slider-shortcode' ) ) {
        $slider_code = get_theme_mod( 'festive-slider-shortcode' );
    } ?>
    
    <?php echo ( $slider_code ) ? do_shortcode( esc_html( $slider_code ) ) : ''; ?>
    
<?php else : ?>
    
    <!-- No Slider -->
    
<?php endif; ?>