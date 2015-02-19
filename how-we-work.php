<?php

/*
Template Name: How we work
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
			<div class="big-illustration-wrapper">					
				<img src="<?=bloginfo('stylesheet_directory');?>/images/how_we_work.jpg" alt="How We Work" width="100%" class="img-responsive">
			</div>
		</div>
	</div>
</div>

<!-- Container -->
<div class="container-fluid" id="main-container">
    <!-- Content -->
    <div id="content">

		<br>

		<div class="row">
			<div class="col-md-4 col-md-offset-2 col-sm-6 col-sm-offset-3 text-justify gunnercooke-curves">
				<img src="<?=bloginfo('stylesheet_directory');?>/images/brief.png" class="img-center gunnercooke-heading">
				<h3 class="text-center">On Brief</h3>
				<p>We advise passionate people on creating business growth. We work with entrepreneurs, we understand objectives, and we deliver solutions to meet them.</p>
				<p>Our clients put their trust in us to provide legal advice that is not only technically spot on, but that also helps them commercially – so that their focus remains on growing their business.</p>
			</div>
			<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 text-justify gunnercooke-curves">
				<img src="<?=bloginfo('stylesheet_directory');?>/images/calculater.png" class="img-center gunnercooke-heading">
				<h3 class="text-center">On Budget</h3>
				<p>Spiralling costs are the enemy of the entrepreneur. Getting the right legal advice is fundamental to success, but for some businesses, the cost of getting the right advice can be prohibitive.</p> 
				<p>We offer all clients a transparent, fee structure with no nasty surprises (and wherever possible, a fixed fee arrangement) – giving complete budget certainty over the cost of any solution.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2 col-sm-6 col-sm-offset-3 text-justify gunnercooke-curves">
				<img src="<?=bloginfo('stylesheet_directory');?>/images/clock.png" class="img-center gunnercooke-heading" style="padding-top: 20px; padding-bottom: 0px;">
				<h3 class="text-center">On Time</h3>
				<p>Building great businesses requires quick decisions and fast pace. Unfortunately in some cases, advisors can slow the momentum down!</p>
				<p>The Ignition team work to your schedule – providing the advice you want, when you want it.</p>
			</div>
			<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 text-justify gunnercooke-curves">
				<img src="<?=bloginfo('stylesheet_directory');?>/images/tower_block.png" class="img-center gunnercooke-heading">
				<h3 class="text-center">In a Network</h3>
				<p>We pride ourselves on our collaborative approach, not only with clients, but also with our extensive network of national and international legal and professional contacts.</p> 
				<p>Our primary goal is delivering the best support for our clients; the traditional “one-stop-shop” doesn’t always achieve this. So, for very specific expertise, we have developed a network of advisors with whom we regularly work, share the same core values and who will seamlessly become part of the team.</p>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>