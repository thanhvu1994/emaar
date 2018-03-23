<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MaxBusiness
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 tft-post tft-post"); ?>>
	<div class="post-inner">
		<?php if(has_post_thumbnail()): ?>
		<div class="img-thumbnail">
			<?php the_post_thumbnail('maxbusiness-blog', array( 'class' => 'img-responsive' )); ?>
			<?php if(!is_single()): ?>
			<div class="overlay">
				<a class="tft-blog-more" href="<?php the_permalink(); ?>" title="<?php esc_attr_e('Read More', 'maxbusiness'); ?>"><i class="fa fa-angle-right"></i></a>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<?php if(is_single()): ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>	
		<div class="tft-post-content">
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php maxbusiness_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'maxbusiness' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'maxbusiness' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->	
		<footer class="entry-footer">
			<?php maxbusiness_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		<?php else: ?>
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			<div class="entry-summary"><?php the_excerpt(); ?></div>
			<div class="clearfix"></div>
		<?php endif; ?>
		</div>
	</div>
</div><!-- #post-## -->