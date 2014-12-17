<?php
/*
Template Name: Home
*/
	get_header(); ?>
<?php
	if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>

		<div id="home">
			<?php the_content(); ?>
		</div>

		<?php endwhile; ?>
	<?php endif; ?>


<?php get_footer(); ?>