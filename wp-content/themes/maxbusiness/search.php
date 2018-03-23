<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package MaxBusiness
 */

get_header(); ?>
<div class="container-fluid cs-blogs cs-space">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<?php
					if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'maxbusiness' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->

						<?php
						
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;
						?>
						<div class="clearfix"></div>
						<div class="cs-pagination col-md-12">
							<?php the_posts_pagination(); ?>
						</div>
						<?php
					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
get_footer();
