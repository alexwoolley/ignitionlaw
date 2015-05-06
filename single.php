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
						<p class="breadcrumb">
							You are here: <a href="<?php echo get_permalink( get_option('page_for_posts' ) ); ?>">Igniting the Spark</a> » <a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a>
						</p>
						<?php edit_post_link('Edit this entry', '<p>', '</p>'); ?>
						<?php the_content(); ?>
						<h3>Read More</h3>
						<?php
							$args = array( 
								//Get the three most recent posts, excluding the current one
								'exclude' => $post->ID, 
								'numberposts' => '3' 
							);
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ): ?>
								<p>
									<a href="<?= get_permalink($recent["ID"]); ?>">
										<?= $recent["post_title"] ?>
									</a>
								</p>
							<?php endforeach;
						?>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php endwhile; ?>
<?php endif; ?>

<?php comments_template(); // Get wp-comments.php template ?>

<?php get_footer(); ?>