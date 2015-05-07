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

		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );

		$fields =  array(

		  'author' =>
		    '<div class="form-group"><p class="comment-form-author"><label for="author">' . __( 'Your Name', 'domainreference' ) . '</label> ' .
		    ( $req ? '<span class="required">*</span>' : '' ) .
		    '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		    '"' . $aria_req . ' /></p></div>',

		  'email' =>
		    '<div class="form-group"><p class="comment-form-email"><label for="email">' . __( 'Your Email', 'domainreference' ) . '</label> ' .
		    ( $req ? '<span class="required">*</span>' : '' ) .
		    '<input id="email" class="form-control" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		    '" size="30"' . $aria_req . ' /></p></div>',

		  'url' =>
		    '<div class="form-group"><p class="comment-form-url"><label for="url">' . __( 'Your Website', 'domainreference' ) . '</label>' .
		    '<input id="url" class="form-control" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		    '" size="30" /></p></div>',
		);
		$args = array(
			'title_reply' => __( 'Leave a Comment' ),
			'class_submit'      => 'btn btn-primary',
			'comment_field' =>  '<div class="form-group"><p><label for="comment">' . _x( 'Your Comment', 'noun' ) .
    '</label><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p></div>',
			'comment_notes_after' => '',
			'fields' => apply_filters( 'comment_form_default_fields', $fields ),
		);


		comment_form( $args ); 
	?>

</div><!-- .comments-area -->
