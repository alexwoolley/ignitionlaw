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
						<?php edit_post_link('Edit this entry', '<p>', '</p>'); ?>
						<?php the_content(); ?>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>