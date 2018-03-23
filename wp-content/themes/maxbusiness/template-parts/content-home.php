<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MaxBusiness
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 home-blog swiper-slide'); ?>>
		<div class="home-blog-inner">
			<?php if(has_post_thumbnail()): ?>
			<div class="img-thumbnail">
				<?php the_post_thumbnail('maxbusiness-thumb', array('class'=> 'img-responsive', 'alt' => the_title_attribute('echo=0'))); ?>
				<div class="overlay">
					<a class="tft-blog-img" href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>"><i class="fa fa-search"></i></a>
					<a class="tft-blog-more" href="<?php the_permalink(); ?>" title="<?php esc_attr_e('Read More', 'maxbusiness'); ?>"><i class="fa fa-link"></i></a>
				</div>
			</div>
			<?php endif; ?>
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php maxbusiness_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="btn blog-link"><?php _e('Read More','maxbusiness'); ?></a>
		</div>
</div><!-- #post-## -->
