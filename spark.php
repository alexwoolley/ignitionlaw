<?php
/*
Template Name: Igniting the Spark
*/

get_header(); ?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 gunnercooke-curves">
			
			<!-- The point of these nested rows is to be consistent with other pages, where they're more necessary. -->
			<div class="row">
				<div class="col-xs-12 text-center masthead">
					<h1><?php the_title(); ?></h1>
					<h3>With Sara Guiducci</h3>
				</div>
			</div>

<!-- 			<div class="row">
				<div class="col-xs-12">				
						<?php the_post_thumbnail ("full", array('class' => "img-responsive")); ?>
				</div>
			</div> -->

			<!-- <div class="row">
				<div class="col-xs-12">
					<img src="<?=bloginfo('stylesheet_directory');?>/images/what_we_do.jpg" alt="What We Do" width="100%" class="img-responsive" style="margin-bottom: 20px;">
				</div>
			</div> -->

			<div class="row">
				<div class="col-xs-12">
					<div class="text-justify">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>