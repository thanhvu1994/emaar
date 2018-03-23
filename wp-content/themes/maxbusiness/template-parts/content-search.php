<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MaxBusiness
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 tft-post tft-post tft-excerpt search-post"); ?>>
	<div class="post-inner">
		<?php if(has_post_thumbnail()): ?>
		<div class="img-thumbnail">
			<?php the_post_thumbnail('maxbusiness-blog', array( 'class' => 'img-responsive' )); ?>
			<div class="overlay">
				<a class="tft-blog-more" href="<?php the_permalink(); ?>" title="<?php esc_attr_e('Read More', 'maxbusiness'); ?>"><i class="fa fa-angle-right"></i></a>
			</div>
		</div>
		<?php endif; ?>
		<div class="tft-post-content">
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			<div class="entry-summary"><?php the_excerpt(); ?></div>
			<div class="clearfix"></div>
		</div>
	</div>
</div><!-- #post-## -->
