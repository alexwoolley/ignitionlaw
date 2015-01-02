<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div class="row">
	<div class="col-sm-4 col-sm-offset-2">

		<h1>Contact us</h1>

		<br>
		<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac magna non augue porttitor scelerisque ac id diam. Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		<br>

		<div class="row" id="contact-social">
			<div class="col-xs-3">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/Twitter_logo_white.png">
			</div>
			<div class="col-xs-3">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/Twitter_logo_white.png">
			</div>
			<div class="col-xs-3">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/Twitter_logo_white.png">
			</div>
			<div class="col-xs-3">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/Twitter_logo_white.png">
			</div>
		</div>

	</div>
<?php
	if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>

			<div class="col-sm-4 col-sm-offset-0 text-center">
				<?php the_content(); ?>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>

</div> <!--/.row-->

<div class="row">
	<div class="col-sm-8 col-sm-offset-2 text-justify">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac magna non augue porttitor scelerisque ac id diam. Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		
	</div>
	
</div>

<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<div class="row"><!--Nested row allows division by three-->
			<div class="col-sm-4 text-center">
				<h3>City</h3>
				<p>
					1 Cornhill<br>
					London<br>
					EC3V 3ND
				</p>
				<p>
					<br>
					<a href="https://www.google.co.uk/maps/place/1+Cornhill,+London+EC3V+3ND/@51.5133541,-0.088167,17z/data=!3m1!4b1!4m2!3m1!1s0x487603549e79fab5:0x1686fccaf9d21404" target="_blank">View on map</a>
				</p>
			</div>
			<div class="col-sm-4 text-center">
				<h3>Shoreditch</h3>
				<p>
					Floors 1-3<br>
					16-24 Underwood Street<br>
					London<br>
					N1 7JQ
				</p>
				<p>
					<a href="https://www.google.co.uk/maps/place/16-24+Underwood+St,+London+N1+7JQ/@51.5300171,-0.091154,17z/data=!3m1!4b1!4m2!3m1!1s0x48761ca727f2e6ef:0x5224dcf1f12d4fdc" target="_blank">View on map</a>
				</p>
			</div>
			<div class="col-sm-4 text-center">
				<h3>Covent Garden</h3>
				<p>
					The Hospital Club<br>
					24 Endell Street<br>
					London<br>
					WC2H 9HQ
				</p>
				<p>
					<a href="https://www.google.co.uk/maps/place/The+Hospital+Club/@51.51478,-0.124808,17z/data=!3m1!4b1!4m2!3m1!1s0x487604ccca846a8d:0xc4d6fbf9f31186a9" target="_blank">View on map</a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-sm-2">
	</div>
</div>

<?php get_footer(); ?>