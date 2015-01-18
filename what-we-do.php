<?php

/*
Template Name: What We Do
*/

?>

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

	<?php endwhile; ?>
<?php endif; ?>

	</div><!--/content-->
</div><!--/container-->

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div id="how-we-work-illustration">					
				<img src="<?=bloginfo('stylesheet_directory');?>/images/what_we_do.jpg" alt="What We Do" width="100%" class="img-responsive">
			</div>
		</div>
	</div>
</div>

<!-- Container -->
<div class="container-fluid" id="main-container">
    <!-- Content -->
    <div id="content">
		<?php if (have_posts()): ?>
			<?php while (have_posts()): the_post(); ?>

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 text-justify gunnercooke-curves gunnercooke-heading">
					<?php the_content(); ?>
				</div>
			</div>

			<?php endwhile; ?>
		<?php endif; ?>

<?php get_footer(); ?>