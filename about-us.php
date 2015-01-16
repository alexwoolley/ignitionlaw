<?php

/*
Template Name: About us
*/

?>

<?php get_header(); ?>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3 gunnercooke-curves">


		<?php if (have_posts()): ?>
			<?php while (have_posts()): the_post(); ?>

			<div class="row">
				<div class="col-xs-12">
					<div class="text-center masthead">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="text-justify">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

			<?php endwhile; ?>
		<?php endif; ?>

		<br>
			<div class="row">
				<?php getTeam (); ?>
			</div>

	</div>
</div>
<?php get_footer(); ?>