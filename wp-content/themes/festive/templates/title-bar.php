<?php if ( !is_front_page() ) : ?>
    <?php if ( !get_theme_mod( 'festive-page-remove-titlebar' ) ) : ?>
    
        <div class="title-bar page-header">
            <div class="site-container">
                <h2>
                    <?php if ( is_home() ) :
                        $blog_page_id = get_option( 'page_for_posts' );  ?>
                
                        <?php echo esc_html( get_page( $blog_page_id )->post_title ); ?>
                    
                    <?php elseif ( is_archive() ) : ?>
                        
                        <?php the_archive_title(); ?>
                    
                    <?php elseif ( is_search() ) : ?>
                        
                        <?php printf( esc_html__( 'Search Results for: %s', 'festive' ), '<span>' . get_search_query() . '</span>' ); ?>
                    
                    <?php elseif ( is_singular() ) : ?>
                        
                        <?php echo get_the_title( get_the_ID() ); ?>
                        
                    <?php elseif ( festive_is_woocommerce_activated() ) : ?>
                        
                        <?php if ( is_shop() ) :
                            $shop_id = get_option( 'woocommerce_shop_page_id' ); ?>
                            
                            <?php echo esc_html( get_page( $shop_id )->post_title ); ?>
                        <?php endif; ?>
                    
                    <?php else : ?>
                        
                        <?php the_title(); ?>
                        
                    <?php endif; ?>
                </h2>
                <div class="festive-breadcrumbs">
                    <?php if ( function_exists( 'bcn_display' ) ) : ?>
                        <?php bcn_display(); ?>
                    <?php else: ?>
                        
                    <?php endif; ?>
                </div>
                <div class="clearboth"></div>
            </div>
        </div>
        <div class="clearboth"></div>
        
    <?php endif; ?>
<?php endif; ?>