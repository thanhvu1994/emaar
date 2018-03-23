<?php
/**
 * @package Festive
 */
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-grid-layout-inner">
		
		<div class="blog-grid-layout-block">
			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink() ?>" class="post-loop-thumbnail" <?php echo ( get_theme_mod( 'festive-set-blog-styling' ) == 'blog-style-block' ) ? 'style="background-image: url(' . esc_url( get_the_post_thumbnail_url() ) . ');"' : ''; ?>>
					
					<?php the_post_thumbnail( 'large' ); ?>
					
				</a>
			<?php endif; ?>
			
			<div class="post-loop-content <?php echo ( has_post_thumbnail() ) ? 'has-post-thumbnail' : 'no-thumbnail'; ?>">
				
				<header class="entry-header">
					<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
					
					<div class="entry-meta-date">
						<?php festive_posted_on(); ?>
					</div>
					
					<?php if ( ! get_theme_mod( 'festive-blog-list-remove-meta' ) ) : ?>
						<?php if ( 'post' == get_post_type() ) : ?>
						<div class="entry-meta">
							<?php festive_entry_footer(); ?>
						</div><!-- .entry-meta -->
						<?php endif; ?>
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					
					<?php if ( get_theme_mod( 'festive-article-content-display' ) == 'blog-display-summary' ) : ?>
							
							<?php
							$article_content = get_the_content();
							$word_count = 40;
							if ( get_theme_mod( 'festive-article-content-word-count' ) ) {
								$word_count = get_theme_mod( 'festive-article-content-word-count' );
							}
							$read_more_txt = '...Read More';
							if ( get_theme_mod( 'festive-article-content-readmore' ) ) {
								$read_more_txt = get_theme_mod( 'festive-article-content-readmore' );
							}
							
							$trimmed_content = wp_trim_words( $article_content, $word_count, '<a href="'.get_the_permalink().'" class="readmore">'.$read_more_txt.'</a>' );
							echo $trimmed_content; ?>
							
						<?php else : ?>
						
							<?php
							if ( has_excerpt() ) :
								the_excerpt();
							else :
								/* translators: %s: Name of current post */
								the_content( sprintf(
									wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'festive' ), array( 'span' => array( 'class' => array() ) ) ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								) );
							endif; ?>
							
						<?php endif; ?>

						<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'festive' ),
							'after'  => '</div>',
						) ); ?>
				</div><!-- .entry-content -->
				
			</div>
			<div class="clearboth"></div>
		</div>
		
	</div>
</article><!-- #post-## -->