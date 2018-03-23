<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MaxBusiness
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 tft-post tft-post tft-page"); ?>>
	<div class="post-inner">
		<?php if(has_post_thumbnail()): ?>
		<div class="img-thumbnail">
			<?php the_post_thumbnail('maxbusiness-blog', array( 'class' => 'img-responsive' )); ?>
		</div>
		<?php endif; ?>
		<div class="tft-post-content">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="entry-content">
			<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'maxbusiness' ),
						'after'  => '</div>',
					) );
				?>
				<div class="clearfix"></div>
			</div><!-- .entry-content -->
		</div>
	</div>
</div><!-- #post-## -->
