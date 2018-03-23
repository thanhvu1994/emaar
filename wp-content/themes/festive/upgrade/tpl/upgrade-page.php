<div class="wrap upgrade-page-wrap">
    
    <h2 class="upgrade-page-title">
        <?php esc_html_e( 'About Festive', 'festive' ); ?>
    </h2>
    
    <div class="upgrade-page-inner-wrap">
        
        <div class="upgrade-page-top">
            
            <div class="upgrade-order-number-info-btns-link">
                <a href="https://kairaweb.com/theme/festive/#purchase-premium" class="upgrade-page-link" id="upgrade-purchase-link" target="_blank">
                    <?php
                    wp_kses( printf( __( '<span>Festive Premium </span><em>$29</em>', 'festive' ) ), array(
                        'span', 'em'
                    ) ); ?>
                </a>
            </div>
            
            <p class="festive-upgrade-p">
                <?php
                wp_kses( printf( __( '<strong>All settings for Festive</strong> are neatly built into the <a href="%s">WordPress Customizer</a> so you can change and edit settings to view what happens before saving and making any of the changes live', 'festive' ), admin_url( 'customize.php' ) ), array(
                    'a' => array( 'href' => array() ),
                    'strong'
                ) ); ?>
            </p>
            <p class="festive-upgrade-p">
                <?php
                wp_kses( printf( __( 'Help on how to <strong><a href="%s" target="_blank">install the premium theme</a></strong>', 'festive' ) , 'https://kairaweb.com/support/install-the-premium-theme/' ), array(
                    'a' => array( 'href', 'target' ),
                    'strong'
                ) ); ?>
            </p>
            
        </div>
        <div class="clearboth"></div>
        
        <div class="upgrade-page-left">
            
            <div class="festive-upgrade-page-inner-wrap">
                
                <h3><?php esc_html_e( 'Festive Premium is a once off payment of $29', 'festive' ); ?></h3>
                
                <div class="festive-upgrade-block">
                    <div class="festive-upgrade-block-left">
                        <?php esc_html_e( 'View the Festive Premium Demo, and try out all the settings neatly built into the Customizer', 'festive' ); ?>
                    </div>
                    <div class="festive-upgrade-block-right">
                        <a href="<?php echo esc_url( 'https://demo.kairaweb.com/#festive' ) ?>" target="_blank" class="festive-upgrade-result-button">
                            <?php esc_html_e( 'Festive Premium Demo', 'festive' ); ?>
                        </a>
                    </div>
                </div>
                
                <div class="festive-upgrade-block festive-upgrade-block-alt">
                    <div class="festive-upgrade-block-left">
                        <?php esc_html_e( 'Download a working Child Theme for Festive', 'festive' ); ?><br />
                        <?php
                        wp_kses( printf( __( 'Or learn more on creating/editing a <a href="%s" target="_blank">Child Theme</a>', 'festive' ) , 'https://codex.wordpress.org/Child_Themes' ), array(
                            'a' => array( 'href', 'target' )
                        ) ); ?>
                    </div>
                    <div class="festive-upgrade-block-right">
                        <a href="<?php echo esc_url( 'https://kairaweb.com/documentation/festive-child-theme/' ) ?>" target="_blank" class="festive-upgrade-result-button">
                            <?php esc_html_e( 'Festive Child Theme', 'festive' ); ?>
                        </a>
                    </div>
                </div>
                
                <div class="festive-upgrade-block">
                    <div class="festive-upgrade-block-left">
                        <?php esc_html_e( 'We have on-growing documentation on setting up your website with the Festive theme', 'festive' ); ?>
                    </div>
                    <div class="festive-upgrade-block-right">
                        <a href="<?php echo esc_url( 'https://kairaweb.com/documentation/' ) ?>" target="_blank" class="festive-upgrade-result-button">
                            <?php esc_html_e( 'Documentation', 'festive' ); ?>
                        </a>
                    </div>
                </div>
                
                <div class="festive-upgrade-block festive-upgrade-block-alt">
                    <div class="festive-upgrade-block-left">
                        <?php esc_html_e( 'Have you enjoyed using Festive?', 'festive' ); ?><br />
                        <?php esc_html_e( 'Please help by giving us a 5 star rating on WordPress.org :)', 'festive' ); ?>
                    </div>
                    <div class="festive-upgrade-block-right">
                        <a href="<?php echo esc_url( 'https://wordpress.org/support/theme/festive/reviews/?rate=5#new-post' ) ?>" target="_blank" class="festive-upgrade-result-button">
                            <?php esc_html_e( 'Rate Festive 5 stars', 'festive' ); ?>
                        </a>
                    </div>
                </div>
                
                <div class="festive-upgrade-footer">
                    <?php wp_kses( printf( __( 'Theme: Festive, built by <a href="%s" target="_blank">Kaira</a>', 'festive' ) , 'https://kairaweb.com/' ), array( 'a' => array( 'href', 'target' ) ) ); ?>
                </div>
            </div>
            
        </div>
        
        <div class="upgrade-page-right">
            
            <div class="upgrade-page-right-box">
                
                <p><?php esc_html_e( 'We aim to keep our prices cheaper than other theme shops, while still offering you the best WordPress themes.', 'festive' ); ?></p>
                
                <p><?php esc_html_e( 'Upgrading will support us and enable us to keep building WordPress themes.', 'festive' ); ?></p>
                
                <p><?php wp_kses( printf( __( 'If you like our themes and/or found our support helpful, please let us know by <a href="%s" target="_blank">giving us a review</a>.', 'festive' ) , 'https://wordpress.org/support/view/theme-reviews/festive#postform' ), array( 'a' => array( 'href', 'target' ) ) ); ?></p>
                
            </div>
            
            <h3 class="upgrade-page-sub-title"><?php esc_html_e( 'Theme Ratings', 'festive' ); ?></h3>
            
            <div class="upgrade-page-right-box">
                
                <div class="upgrade-rating-slider-wrap upgrade-rating-slider-wrap-remove">
                    <div class="upgrade-rating-slider-prev"></div>
                    <div class="upgrade-rating-slider-next"></div>
                    
                    <div class="upgrade-rating-slider">
                        
                        <div class="upgrade-rating-slider-block">
                            <div class="upgrade-rating-slider-block-title">
                                <?php esc_html_e( 'Madzzoni', 'festive' ); ?>
                            </div>
                            <div class="upgrade-rating-slider-block-rating">
                                <?php wp_kses( printf( __( 'One of the most honest WordPress Themes!<br /><br />In the "Jungle" of "all the promising" modern and free WordPress Themes out there, is the Festive theme from Kaira, one of the very best at the moment, Period!', 'festive' ) ), array( 'br', ) ); ?>
                            </div>
                        </div>
                        
                        <div class="upgrade-rating-slider-block">
                            <div class="upgrade-rating-slider-block-title">
                                <?php esc_html_e( 'Fitoni', 'festive' ); ?>
                            </div>
                            <div class="upgrade-rating-slider-block-rating">
                                <?php wp_kses( printf( __( 'What a great theme!! been using it for a long time, very clean code, easy to use, easy to customize, really cant say any wrong about it!!!<br /><br />Give it a try and you will not be dissapointed! this theme is THE BEST!!', 'festive' ) ), array( 'br', ) ); ?>
                            </div>
                        </div>
                        
                        <div class="upgrade-rating-slider-block">
                            <div class="upgrade-rating-slider-block-title">
                                <?php esc_html_e( 'NayWordPress', 'festive' ); ?>
                            </div>
                            <div class="upgrade-rating-slider-block-rating">
                                <?php wp_kses( printf( __( 'I\'ve purchased the Premium Theme for my Online Store. Very awesome! Support assistance 100&#37; available, easy to customize. I recommend it to everyone who want to build a Store Online. Really practicable for E-commerce.', 'festive' ) ), array( 'br', ) ); ?>
                            </div>
                        </div>
                        
                    </div>
                    <div class="clearboth"></div>
                </div>
                
            </div>
            
        </div>
        
        <div class="clearboth"></div>
    </div>
    
</div>