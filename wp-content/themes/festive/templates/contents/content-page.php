<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Festive
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if ( get_theme_mod( 'festive-page-fimage-layout' ) == 'festive-page-fimage-layout-standard' ) : ?>
		
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-content-img">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
		<?php endif; ?>
		
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
	
</article><!-- #post-## -->
