<?php get_header(); ?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 gunnercooke-curves">
			
			<!-- The point of these nested rows is to be consistent with other pages, where they're more necessary. -->
			<div class="row">
				<div class="col-xs-12 text-center masthead">
					<a href="<?php echo get_site_url() . "/igniting-the-spark"; ?>"><h1>Igniting the Spark</h1></a>
					<h3>
						<?php 
							$short_title = the_title('','',false); 
							$trimmed_title = ltrim($short_title, "Igniting the Spark");
							$upper_cased_title = ucfirst($trimmed_title);
							echo $upper_cased_title; 
						?>
					</h3>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12">
					<div class="text-justify">
						<?php getIgnitionMeta(); ?>
						<!-- <div class="ignition-meta">
							<p class="breadcrumb">
								You are here: <a href="<?php echo get_permalink( get_option('page_for_posts' ) ); ?>">Igniting the Spark</a> » <?php echo the_title(); ?>
							</p>
							<p>
								Posted on
								<?php 
									echo get_the_time('jS F Y');
									if (get_comments_number() > 0):
										echo ' &bull; ';
										comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post');
									endif;
									edit_post_link('Edit this entry', ' &bull; '); 
								?>
							</p>
						</div> -->
						<?php the_content(); ?>
						<div class="read-more-invite">
							<h3>Read More</h3>
							<?php
								$prev_post = get_adjacent_post(false, '', true);
								$next_post = get_adjacent_post(false, '', false);
								if ($next_post): 
									$next_post_url = get_permalink($next_post->ID); 
									$next_post_title = $next_post->post_title; 
								?>
									<p>Next Post: 
										<a href="<?php echo $next_post_url; ?>"><?php echo $next_post_title; ?></a>
									</p>
								<?php endif;
								if ($prev_post): 
									$prev_post_url = get_permalink($prev_post->ID); 
									$prev_post_title = $prev_post->post_title; ?>
									<p>Previous Post: 
										<a href="<?php echo $prev_post_url; ?>"><?php echo $prev_post_title; ?></a>
									</p>
								<?php endif; ?>
						</div>
						<?php comments_template(); ?>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>