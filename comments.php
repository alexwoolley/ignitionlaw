<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">Comments</h3>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 56,
				) );
			?>
		</ul><!-- .comment-list -->


	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.' ); ?></p>
	<?php endif; ?>

	<?php 
		$args = array(
			'title_reply' => __( 'Leave a Comment' ),
			'class_submit'      => 'btn btn-primary',
			// TODO: sort out styling to make it consistent with Contact Us page button
			'comment_field' =>  '<div class="form-group"><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></div>',
			'comment_notes_after' => '',
		);

		comment_form( $args ); 
	?>

</div><!-- .comments-area -->
