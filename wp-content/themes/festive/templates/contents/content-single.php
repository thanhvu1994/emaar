<?php
/**
 * @package Festive
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if ( get_theme_mod( 'festive-single-page-fimage-layout' ) == 'festive-single-page-fimage-layout-standard' ) : ?>
	
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-content-img">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
		<?php endif; ?>
		
	<?php endif; ?>
	
	<?php if ( ! get_theme_mod( 'festive-blog-single-remove-meta' ) ) : ?>
		<header class="entry-header">
			<div class="entry-meta">
				<?php festive_posted_on(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'festive' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<?php if ( ! get_theme_mod( 'festive-blog-single-remove-cats' ) ) : ?>
		<footer class="entry-footer">
			<?php festive_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
	
</article><!-- #post-## -->
