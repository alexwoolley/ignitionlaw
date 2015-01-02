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
	<div class="col-sm-6 col-sm-offset-3 text-justify">
		<h3>Mums</h3>
		<p>Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing. Suspendisse in urna ligula, a volutpat mauris. Sed enim mi, bibendum eu pulvinar vel, sodales vitae dui. Pellentesque sed sapien lorem, at lacinia urna. In hac habitasse platea dictumst. Vivamus vel justo in leo laoreet ullamcorper non vitae lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ullamcorper rutrum.</p>
	</div>
</div>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3 text-justify">
		<h3>Juniors</h3>
		<p>Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing. Suspendisse in urna ligula, a volutpat mauris. Sed enim mi, bibendum eu pulvinar vel, sodales vitae dui. Pellentesque sed sapien lorem, at lacinia urna. In hac habitasse platea dictumst. Vivamus vel justo in leo laoreet ullamcorper non vitae lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ullamcorper rutrum.</p>
	</div>
</div>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3 text-justify">
		<h3>Pro bono</h3>
		<p>Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing. Suspendisse in urna ligula, a volutpat mauris. Sed enim mi, bibendum eu pulvinar vel, sodales vitae dui. Pellentesque sed sapien lorem, at lacinia urna. In hac habitasse platea dictumst. Vivamus vel justo in leo laoreet ullamcorper non vitae lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ullamcorper rutrum.</p>
	</div>	
</div>

<?php get_footer(); ?>