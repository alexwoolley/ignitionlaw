<?php

/*
Template Name: How we work
*/

?>

<?php get_header(); ?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="text-center">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="text-justify">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	<?php endwhile; ?>
<?php endif; ?>

<div class="row">
	<div class="col-md-2 col-md-offset-3 col-sm-6 col-sm-offset-3">
		<h3>On brief</h3>
		<p>We provide on point legal advice, so your focus remains on your business.</p>
	</div>
	<div class="col-md-2 col-md-offset-0 col-sm-6 col-sm-offset-3">
		<h3>On budget</h3>
		<p>Certainty of costs, totally transparent fee structures, no nasty surprises.</p>
	</div>
	<div class="col-md-2 col-md-offset-0 col-sm-6 col-sm-offset-3">
		<h3>On time</h3>
		<p>Building great businesses requires quick decisions and fast pace. We’ll work to your schedule, providing the advice you want, when you want it.</p>
	</div>	
</div>

<?php get_footer(); ?>