<?php
/*
Template Name: Home
*/
get_header(); ?>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3 text-center">
		<h1>Ignition Law is a very different law firm</h1>
	</div>
</div>

<div class="custom-bx-wrapper">	
	<ul class="bxslider">
		<li>
			<!-- <p>Ignition Law is a very different law firm</p> -->
			<img src="<?=bloginfo('stylesheet_directory');?>/images/lightbulb.png" title="Humanity obsessed">
		</li>
		<li>
			<img src="<?=bloginfo('stylesheet_directory');?>/images/Twitter_logo_white.png">
			<p>Really loving it</p>
		</li>
		<li>
			<img src="http://localhost/wordpress/ignitionlaw2/wp-content/uploads/sites/4/2014/12/AlexMcPherson.jpg">
		</li>
	</ul>
</div>



<?php
	if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>
		
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 text-justify" id="home-content">
				<?php the_content(); ?>
			</div>
		</div>
		
		<?php endwhile; ?>
	<?php endif; ?>


<?php get_footer(); ?>