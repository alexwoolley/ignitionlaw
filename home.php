<?php get_header(); ?>

<div id="blog-list">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 gunnercooke-curves">

			<div class="row">
				<div class="col-xs-12 text-center masthead">
					<h1>Igniting the Spark</h1>		
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="text-justify">
						<p>Welcome to Ignition Law’s new ‘Igniting the Spark’ series, where we spend 5 minutes with inspiring entrepreneurs, talking about the key moments that defined their career.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>

		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 gunnercooke-curves">
				
				<!-- The point of these nested rows is to be consistent with other pages, where they're more necessary. -->
				<div class="row">
					<div class="col-xs-12 text-center masthead">
						<a href="<?php echo the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-12">
						<div class="text-justify">
							<?php the_excerpt(); ?>
							<p><em><a href="<?php echo the_permalink(); ?>">Read more...</a></em></p>
						</div>
					</div>
				</div>

			</div>
		</div>

		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>