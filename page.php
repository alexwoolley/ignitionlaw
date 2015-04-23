<?php get_header(); ?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 gunnercooke-curves">
			
			<!-- The point of these nested rows is to be consistent with other pages, where they're more necessary. -->
			<div class="row">
				<div class="col-xs-12 text-center masthead">
					<h1><?php the_title(); ?></h1>
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