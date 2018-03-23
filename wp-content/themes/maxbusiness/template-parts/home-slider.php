<div class="row cs-slider">
    <div class="swiper-container home-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php for ($i=1; $i < 4; $i++) : 
                $slide_page_id = absint(get_theme_mod( 'maxbusiness_slider_page'.$i ));
                if($slide_page_id):
                $post = get_post($slide_page_id);
                $slide_img = wp_get_attachment_image_src(get_post_thumbnail_id($slide_page_id), 'full');
            ?>
            <div class="swiper-slide slides">
                <img src="<?php echo esc_url($slide_img[0]); ?>" class="img-responsive" alt="Slide <?php echo absint($i); ?>"/>
                <div class="carousel-caption">
                    <h2 class="animation animated-item-1"><?php echo wp_kses_post($post->post_title); ?></h2>
                    <p class="animation animated-item-2"><?php echo wp_kses_post($post->post_content); ?> </p>
                    <?php $bt_link1 = get_theme_mod('maxbusiness_slide_button1_link'); if(!empty($bt_link1)): ?>
                    <a class="button button-main button-success animation animated-item-3" href="<?php echo esc_url($bt_link1); ?>"><?php echo esc_html(get_theme_mod('maxbusiness_slide_button1_label')) ?></a>
                    <?php endif; ?>
                    <?php $bt_link2 = get_theme_mod('maxbusiness_slide_button2_link'); if(!empty($bt_link2)): ?>
                    <a class="button button-main button-warning animation animated-item-4" href="<?php echo esc_url($bt_link2); ?>"><?php echo esc_html(get_theme_mod('maxbusiness_slide_button2_label')) ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; endfor; ?>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination slider-page"></div>
        
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev slider-prev"><i class="fa fa-angle-left"></i></div>
        <div class="swiper-button-next slider-next"><i class="fa fa-angle-right"></i></div>
    </div>
</div>