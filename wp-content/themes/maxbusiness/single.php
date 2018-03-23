<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MaxBusiness
 */

get_header(); ?>
<div class="container-fluid cs-blogs cs-space">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					?>
					<div class="clearfix"></div>
					<div class="cs-pagination col-md-12">
						<?php the_post_navigation(); ?>
					</div>
					<?php

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
