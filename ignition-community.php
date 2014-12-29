<?php

/*
Template Name: Ignition community
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
		<h3>Mums</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac magna non augue porttitor scelerisque ac id diam. Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>
	<div class="col-md-2 col-md-offset-0 col-sm-6 col-sm-offset-3">
		<h3>Juniors</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac magna non augue porttitor scelerisque ac id diam. Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>
	<div class="col-md-2 col-md-offset-0 col-sm-6 col-sm-offset-3">
		<h3>Pro bono</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac magna non augue porttitor scelerisque ac id diam. Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>	
</div>

		<div class="col-sm-2">
			<h3>I think this page needs a sidebar</h3>
		</div>

<?php get_footer(); ?>