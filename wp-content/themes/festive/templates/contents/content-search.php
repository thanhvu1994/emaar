<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Festive
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink() ?>" class="post-loop-thumbnail" <?php echo ( get_theme_mod( 'festive-set-blog-styling' ) == 'blog-style-block' ) ? 'style="background-image: url(' . esc_url( get_the_post_thumbnail_url() ) . ');"' : ''; ?>>
			
			<?php the_post_thumbnail( 'large' ); ?>
			
		</a>
	<?php endif; ?>
	
	<div class="post-loop-content <?php echo ( has_post_thumbnail() ) ? 'has-post-thumbnail' : ''; ?>">
		
		<header class="entry-header">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php festive_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<footer class="entry-footer">
			<?php festive_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	
	</div>
	<div class="clearboth"></div>
	
</article><!-- #post-## -->
