<?php
/*
Template Name: Home
*/
get_header(); ?>

				<ul class="bxslider">
					<li>
						<img src="<?=bloginfo('stylesheet_directory');?>/images/Twitter_logo_white.png">
						<p>Loving it</p>
					</li>
					<li>
						<img src="<?=bloginfo('stylesheet_directory');?>/images/law_books.jpg">
						<p>Really loving it</p>
					</li>
					<li>
						<img src="http://localhost/wordpress/ignitionlaw2/wp-content/uploads/sites/4/2014/12/AlexMcPherson.jpg">
					</li>
				</ul>




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