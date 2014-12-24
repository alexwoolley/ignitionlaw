<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div class="row">
	<div class="col-md-4 col-md-offset-2">

		<h1>Contact us</h1>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac magna non augue porttitor scelerisque ac id diam. Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

		<div class="row" id="contact-social">
			<div class="col-md-3">
				<img src="http://localhost/wordpress/ignitionlaw2/wp-content/uploads/sites/4/2014/12/AlexMcPherson.jpg">
			</div>
			<div class="col-md-3">
				<img src="http://localhost/wordpress/ignitionlaw2/wp-content/uploads/sites/4/2014/12/AlexMcPherson.jpg">
			</div>
			<div class="col-md-3">
				<img src="http://localhost/wordpress/ignitionlaw2/wp-content/uploads/sites/4/2014/12/AlexMcPherson.jpg">
			</div>
			<div class="col-md-3">
				<img src="http://localhost/wordpress/ignitionlaw2/wp-content/uploads/sites/4/2014/12/AlexMcPherson.jpg">
			</div>
		</div>

	</div>
<?php
	if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>

			<div class="col-md-4 col-md-offset-0">
				<?php the_content(); ?>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>

</div> <!--/.row-->

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
			<div class="col-md-4">
				<h3>City</h3>
				<pre>1 Cornhill
London
EC3V 3ND
				</pre>
			</div>
			<div class="col-md-4">
				<h3>Shoreditch</h3>
				<pre>Floors 1-3
16-24 Underwood Street
London
N1 7JQ
				</pre>
			</div>
			<div class="col-md-4">
				<h3>Covent Garden</h3>
				<pre>The Hospital Club
24 Endell Street
London
WC2H 9HQ
				</pre>
			</div>
		</div>
	</div>
	<div class="col-md-2">
	</div>
</div>

<?php get_footer(); ?>