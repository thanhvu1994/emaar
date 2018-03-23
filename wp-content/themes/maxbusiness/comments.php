<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MaxBusiness
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) : ?>
	<p><?php esc_html_e( 'This post is password protected. Enter the password to view any comments.', 'maxbusiness' ); ?></p>
<?php return;
endif; ?>
<?php if ( have_comments() ) : ?>
<div id="comments" class="cs-comment col-md-12">	
	<h2 class="comments-title">
		<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'maxbusiness' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'maxbusiness'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
		?>
	</h2>
	<?php wp_list_comments( array( 'callback' => 'maxbusiness_comment' ) ); ?>		
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="row pagination cs-pagination">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'maxbusiness' ); ?></h2>
		<ul class="pager">
			<li class="nav-previous previous"><?php previous_comments_link( __( 'Previous Comments', 'maxbusiness' ) ); ?>
			</li>
			<li class="nav-next next"><?php next_comments_link( __( 'Next Comments', 'maxbusiness' ) ); ?>
			</li>
		</ul>
	</nav>
<?php endif;  ?>
</div>		
<?php endif; ?>
<?php if ( comments_open() ) : ?>
	<div class="cs-comment-form col-md-12">
		<?php comment_form(); ?>		
	</div>
<?php endif; // If registration required and not logged in ?>
