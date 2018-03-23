<?php
/**
 * Template Name: Left Sidebar
 */

get_header(); ?>

	<div class="container-fluid cs-blogs cs-space">
		<div class="container">
			<div class="row">
				<div class="col-md-9 pull-right">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php
get_footer();
