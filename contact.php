<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div class="row">
	<div class="col-sm-4 col-sm-offset-2">

		<h1>Contact Us</h1>

		<br>
		<div class="text-justify">
			<p>If you’d like more information about any of the services provided by Ignition Law, we’d love to hear from you! Please send us your query, using the form on this page, and someone will be in touch as soon as possible.</p>
			<p>We are also actively recruiting for lawyers at all levels. If you think this could be you, we’d love to speak to you. Please get in touch, using the form on this page.</p>
			
		</div>
		<!-- <br> -->
		
		<div id="contact-page-skype">
			<p>
			<a href="skype:IgnitionLaw?call"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/skype_logo.png"></a>
			<a href="skype:IgnitionLaw?call">You can also call us on Skype.</a>
			</p>
		</div>

		<p><em>Or catch us on social media:</em></p>

		<div class="row">
			<div class="col-md-3 col-xs-6 social-icon">
				<a href="https://twitter.com/ignitionlaw" target="_blank">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_icons/twitter.png" class="img-responsive">
				</a>
			</div>
			<div class="col-md-3 col-xs-6 social-icon">
				<a href="https://www.linkedin.com/company/9222237" target="_blank">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_icons/linkedin.png" class="img-responsive">
				</a>
			</div>
			<div class="col-md-3 col-xs-6 social-icon">
				<a href="https://www.facebook.com/ignitionlaw" target="_blank">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_icons/facebook.png" class="img-responsive">
				</a>
			</div>
			<div class="col-md-3 col-xs-6 social-icon">
				<a href="https://plus.google.com/communities/113707983229855618630" target="_blank">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_icons/googleplus.png" class="img-responsive">
				</a>
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