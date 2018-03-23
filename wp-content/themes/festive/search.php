<?php
/**
 * The template for displaying search results pages.
 *
 * @package Festive
 */

get_header(); ?>
	
	<section id="primary" class="content-area <?php echo ( get_theme_mod( 'festive-blog-search-full-width' ) ) ? sanitize_html_class( 'content-area-full' ) : ''; ?>">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			
			<?php
			// IF blog is grid layout
			echo ( get_theme_mod( 'festive-set-blog-layout' ) == 'blog-grid-layout' ) ? '<div class="blog-grid-layout-wrap blog-grid-layout-wrap-remove"><div class="blog-grid-layout-wrap-inner">' : ''; ?>
			
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'templates/contents/content', 'search' );
					?>

				<?php endwhile; ?>
				
			<?php
			// IF blog is grid layout
			echo ( get_theme_mod( 'festive-set-blog-layout' ) == 'blog-grid-layout' ) ? '<div class="clearboth"></div></div></div>' : ''; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'templates/contents/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php if ( get_theme_mod( 'festive-blog-search-full-width' ) ) : ?>
        <!-- No Sidebar -->
    <?php else : ?>
        <?php get_sidebar(); ?>
    <?php endif; ?>
	
<?php get_footer(); ?>
