<?php

/*
Template Name: Gunnercooke
*/

?>
<!-- This should probably be the default page template, though there would need to be some extra PHP to accomodate for pages without illustrations -->

<?php get_header(); ?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 gunnercooke-curves">
			<div class="row">
				<div class="col-xs-12 text-center masthead">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<div class="big-illustration-wrapper">					
				<?php the_post_thumbnail ("full", array('class' => "img-responsive")); ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 text-justify gunnercooke-curves gunnercooke-heading">
			<?php the_content(); ?>
		</div>
	</div>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>