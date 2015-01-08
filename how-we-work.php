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
<!-- Example image -->
	<div id="how-we-work-illustration">					
		<img src="<?=bloginfo('stylesheet_directory');?>/images/how_we_work.jpg" alt="How we work" width="100%" class="img-responsive">
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
		<div class="row"><!--Nested row allows division by three-->
			<div class="col-md-4 text-justify">
				<h3>On brief</h3>
				<p>We advise passionate people on creating business growth. We work with entrepreneurs, we understand objectives, and we deliver solutions to meet them.  Our clients put their trust in us to provide legal advice that is not only technically spot on, but that also helps them commercially – so that their focus remains on growing their business.</p>
			</div>
			<div class="col-md-4 text-justify">
				<h3>On budget</h3>
				<p>Spiralling costs are the enemy of the entrepreneur. Getting the right legal advice is fundamental to success, but for some businesses, the cost of getting the right advice can be prohibitive. We offer all clients a transparent, fee structure with no nasty surprises (and wherever possible, a fixed fee arrangement) – giving complete budget certainty over the cost of any solution.</p>
			</div>
			<div class="col-md-4 text-justify">
				<h3>On time</h3>
				<p>Building great businesses requires quick decisions and fast pace. Unfortunately in some cases, advisors can slow the momentum down! At Ignition Law, we’ll work to your schedule – providing the advice you want, when you want it.</p>
			</div>
		</div>
		<div class="col-md-2 col-sm-3">
		</div>
	</div>	
</div>

<?php get_footer(); ?>