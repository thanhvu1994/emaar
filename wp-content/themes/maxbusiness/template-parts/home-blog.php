<!-- Blog Start -->
<div class="container-fluid cs-home-blog cs-space">
	<div class="row section-heading">
		<h2 class="section-title"><?php echo esc_html(get_theme_mod('maxbusiness_blog_heading')); ?></h2>
		<p class="section-description"><?php echo esc_html(get_theme_mod('maxbusiness_blog_description')); ?></p>
	</div>
	<div class="container">
		<div class="row cs-blog swiper-container swiper-blog">
			<div class="swiper-wrapper blog-gallery">
				<?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array( 'post_type' => 'post', 'paged'=>$paged, 'posts_per_page' => 9, 'ignore_sticky_posts' => 1, );
					$the_query = new WP_Query( $args );
					while($the_query->have_posts()){
						$the_query->the_post();
						get_template_part('template-parts/content','home'); 
					} 
					wp_reset_postdata();
				?>
			</div>
			<div class="swiper-button-prev blog-prev"><i class="fa fa-angle-left"></i></div>
			<div class="swiper-button-next blog-next"><i class="fa fa-angle-right"></i></div>
		</div>
	</div>
</div>
<!-- Blog End -->