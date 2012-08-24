<?php
/**
 * Comments Template
 *
 * Lists comments and calls the comment form.  Individual comments have their own templates.  The 
 * hierarchy for these templates is $comment_type.php, comment.php.
 *
 * @package Retro-fitted
 * @subpackage Template
 */

/* Kill the page if trying to access this template directly. */
if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) )
	die( __( 'Please do not load this page directly. Thanks!', 'retro-fitted' ) );

/* If a post password is required or no comments are given and comments/pings are closed, return. */
if ( post_password_required() || ( !have_comments() && !comments_open() && !pings_open() ) )
	return;
?>

<div id="comments-template">

	<div class="comments-wrap">

		<div id="comments">

			<?php if ( have_comments() ) : ?>

				<h3 id="comments-number" class="comments-header"><?php comments_number( __( 'No Responses', 'retro-fitted' ), __( 'One Response', 'retro-fitted' ), __( '% Responses', 'retro-fitted' ) ); ?></h3>

				<?php do_atomic( 'before_comment_list' );// retro-fitted_before_comment_list ?>

				<?php if ( get_option( 'page_comments' ) ) : ?>
					<div class="comments-nav">
						<span class="page-numbers"><?php printf( __( 'Page %1$s of %2$s', 'retro-fitted' ), ( get_query_var( 'cpage' ) ? absint( get_query_var( 'cpage' ) ) : 1 ), get_comment_pages_count() ); ?></span>
						<?php previous_comments_link(); ?>
						<?php next_comments_link(); ?>
					</div><!-- .comments-nav -->
				<?php endif; ?>

				<ol class="comment-list">
					<?php wp_list_comments( hybrid_list_comments_args() ); ?>
				</ol><!-- .comment-list -->

				<?php do_atomic( 'after_comment_list' ); // retro-fitted_after_comment_list ?>

			<?php endif; ?>

			<?php if ( pings_open() && !comments_open() ) : ?>

				<p class="comments-closed pings-open">
					<?php printf( __( 'Comments are closed, but <a href="%1$s" title="Trackback URL for this post">trackbacks</a> and pingbacks are open.', 'retro-fitted' ), get_trackback_url() ); ?>
				</p><!-- .comments-closed .pings-open -->

			<?php elseif ( !comments_open() ) : ?>

				<p class="comments-closed">
					<?php _e( 'Comments are closed.', 'retro-fitted' ); ?>
				</p><!-- .comments-closed -->

			<?php endif; ?>

		</div><!-- #comments -->

		<?php comment_form(); // Loads the comment form. ?>

	</div><!-- .comments-wrap -->

</div><!-- #comments-template -->