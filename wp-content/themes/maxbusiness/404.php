<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MaxBusiness
 */

get_header(); ?>

	<div class="container-fluid cs-blogs cs-space">
		<div class="container">
			<section class="error-404 not-found">
				<div class="col-md-12 page-header error">
						<h1><?php esc_html_e('404', 'maxbusiness') ?></h1>
						<h2><span class="fa fa-exclamation-circle"></span><?php esc_html_e('ERROR','maxbusiness'); ?></h2>
						<h3><?php esc_html_e('Page cannot be found','maxbusiness'); ?></h3>
						<p><?php esc_html_e('The Page you requested is not be found. This could be spelling error in the url.','maxbusiness'); ?></p>
						<a href="<?php echo esc_url(home_url()); ?>" class="btn"><?php esc_html_e('Go back to homepage','maxbusiness'); ?></a>
				</div><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'maxbusiness' ); ?></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div>
	</div>

<?php
get_footer();
