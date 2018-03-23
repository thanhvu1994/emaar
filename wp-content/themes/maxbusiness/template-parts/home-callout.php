<!-- Call out Start -->
<?php $page_id = absint(get_theme_mod( 'maxbusiness_callout_page')); ?>
<div class="callout-con">
	<?php 
		$callout_image = '';
		if($page_id && has_post_thumbnail($page_id)){
			$slide_img = wp_get_attachment_image_src(get_post_thumbnail_id($page_id), 'full');
			$callout_image = 'style="background-image:url('.esc_url($slide_img[0]).')"';
		}
	?>
	<div class="call-back" <?php echo $callout_image; ?>></div>
	<div class="container-fluid cs-callout cs-space">
		<div class="container">
			<div class="row call-section">
                <?php if($page_id): $post = get_post($page_id); ?>
				<h2 class="section-title"><?php echo wp_kses_post($post->post_title); ?></h2>
				<p class="section-description"><?php echo wp_kses_post($post->post_content); ?></p>
				<?php endif; ?>
				<div class="calllout-links">
					<a class="button button-main button-success" href="<?php echo esc_url(get_theme_mod('maxbusiness_callout_bt1_link')); ?>"><?php echo esc_html(get_theme_mod('maxbusiness_callout_bt1_text')); ?></a>
					<a class="button button-main button-warning" href="<?php echo esc_url(get_theme_mod('maxbusiness_callout_bt2_link')); ?>"><?php echo esc_html(get_theme_mod('maxbusiness_callout_bt2_text')); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Call out End -->