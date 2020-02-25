<h4>Comments:</h4>
<br>
<div class="comments-wrap">
	<?php foreach( $comments as $comment ): ?>
		<h4><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a> - <small><?php comment_date(); ?></small></h4>
		<div class="comment-body">
			<p><?php comment_text(); ?></p>
		</div>
	<?php endforeach; ?>
</div>


<?php if ( comments_open() ): ?>
<br>
<h4>Leave a comment:</h4>
<br>
<form action="<?php echo site_url( 'wp-comments-post.php' ); ?>" method="post" id="commentform">
	<input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" id="comment_post_id">
	<div class="form-group">
		<label>Name / Alias (required)</label>
		<input type="text" name="author" class="form-control">
	</div>
	<div class="form-group">
		<label>Email address (required)</label>
		<input type="email" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Website (optional)</label>
		<input type="text" name="url" class="form-control">
	</div>
	<div class="form-group">
		<label>Comment</label>
		<textarea class="form-control" rows="7" cols="60" name="comment"></textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Add comment</button>
	</div>
</form>

<?php else: ?>

	<?php _e( 'Comments are closed', 'artisan' ); ?>

<?php endif; ?>