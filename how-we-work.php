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
	<div class="col-sm-6 col-sm-offset-3 text-justify">
		<h3>On brief</h3>
		<p><!-- start slipsum code -->

		Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing. Suspendisse in urna ligula, a volutpat mauris. Sed enim mi, bibendum eu pulvinar vel, sodales vitae dui. Pellentesque sed sapien lorem, at lacinia urna. In hac habitasse platea dictumst. Vivamus vel justo in leo laoreet ullamcorper non vitae lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ullamcorper rutrum. 

		<!-- please do not remove this line -->

		<div style="display:none;">
		<a href="http://slipsum.com">lorem ipsum</a></div>

		<!-- end slipsum code -->
		</p>
	</div>
</div>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3 text-justify">
		<h3>On budget</h3>
		<p><!-- start slipsum code -->

		Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing. Suspendisse in urna ligula, a volutpat mauris. Sed enim mi, bibendum eu pulvinar vel, sodales vitae dui. Pellentesque sed sapien lorem, at lacinia urna. In hac habitasse platea dictumst. Vivamus vel justo in leo laoreet ullamcorper non vitae lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ullamcorper rutrum. 

		<!-- please do not remove this line -->

		<div style="display:none;">
		<a href="http://slipsum.com">lorem ipsum</a></div>

		<!-- end slipsum code -->
		</p>
	</div>
</div>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3 text-justify">
		<h3>On time</h3>
		<p><!-- start slipsum code -->

		Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing. Suspendisse in urna ligula, a volutpat mauris. Sed enim mi, bibendum eu pulvinar vel, sodales vitae dui. Pellentesque sed sapien lorem, at lacinia urna. In hac habitasse platea dictumst. Vivamus vel justo in leo laoreet ullamcorper non vitae lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ullamcorper rutrum. 

		<!-- please do not remove this line -->

		<div style="display:none;">
		<a href="http://slipsum.com">lorem ipsum</a></div>

		<!-- end slipsum code -->
		</p>
	</div>	
</div>

<?php get_footer(); ?>