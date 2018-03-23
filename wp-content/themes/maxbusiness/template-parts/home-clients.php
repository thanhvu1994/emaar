<!-- Client Start -->
<div class="container-fluid cs-client cs-space">
	<div class="row section-heading">
		<span class="section-title"><?php echo esc_html(get_theme_mod('maxbusiness_clients_heading')); ?></span>
		<p class="section-description"><?php echo esc_html(get_theme_mod('maxbusiness_clients_description')); ?></p>
	</div>
	<div class="container">
		<div class="row clients">
			<div class="swiper-container swiper-client">
				<div class="swiper-wrapper">
					<?php 
						$client_setup = false;
						for ($i=1; $i <= 5; $i++): 
							$logo = '';
							$logo = get_theme_mod('maxbusiness_client_logo'.$i);
							if(!empty($logo)):
								$client_setup = true;
							?>
							<div class="col-md-3 swiper-slide">
								<img src="<?php echo esc_url($logo); ?>" class="img-responsive"/>
							</div>
							<?php endif; 
						endfor; 
					?>
				</div>
				<!-- <div class="swiper-pagination client-page"></div> -->
				<div class="swiper-button-prev client-prev"><i class="fa fa-angle-left"></i></div>
				<div class="swiper-button-next client-next"><i class="fa fa-angle-right"></i></div>
			</div>
			<?php if (!$client_setup && current_user_can('edit_theme_options')): ?>
			<div class="alert alert-info">
				<?php _e('<strong>One More step!</strong> To show client logos here change and save client logos in customzer.', 'maxbusiness'); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- Client End -->