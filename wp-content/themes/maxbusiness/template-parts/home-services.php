<!-- Services start  -->
<div class="container-fluid cs-home-service cs-space">
	<div class="row section-heading">
		<h2 class="section-title"><?php echo esc_html(get_theme_mod('maxbusiness_services_heading')); ?></h2>
		<p class="section-description"><?php echo esc_html(get_theme_mod('maxbusiness_services_sub_heading')); ?></p>
	</div>
	<div class="container">
		<div class="row cs-services">
			<?php for ($i=1; $i <= 3 ; $i++) : 
				$page_id = absint(get_theme_mod( 'maxbusiness_service_page'.$i ));
                if($page_id):
                $post = get_post($page_id);
			?>
			<div class="col-md-4 col-sm-6 col-xs-12 cs-serv">
				<div class="cs-serv-inner serv-<?php echo $i; ?>">
					<div class="col-md-12 col-sm-12 service-icon">
						<i class="fa <?php echo esc_attr(get_theme_mod('maxbusiness_service_icon'.$i, 'fa-star')); ?>"></i>
					</div>
					<div class="col-md-12 col-sm-12 service-text">
						<h3><a href="<?php echo esc_url(get_permalink($page_id)); ?>"><?php echo wp_kses_post($post->post_title); ?></a></h3>
						<p><?php echo wp_kses_post($post->post_content); ?></p>
					</div>
				</div>
			</div>
			<?php endif; endfor; ?>
		</div>
	</div>
</div>
<!-- Services End -->