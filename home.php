<?php
/*
Template Name: Home
*/
get_header(); ?>
<!-- 	<div class="row">
		<div class="col-sm-12 col-sm-offset-0"> -->
			<div id="home-carousel">	
				<ul>
					<li>
						<img src="http://localhost/wordpress/ignitionlaw2/wp-content/uploads/sites/4/2014/12/AlexMcPherson.jpg">
					</li>
					<li>
						<img src="http://localhost/wordpress/ignitionlaw2/wp-content/uploads/sites/4/2014/12/AlexMcPherson.jpg">
					</li>
					<li>
						<img src="http://localhost/wordpress/ignitionlaw2/wp-content/uploads/sites/4/2014/12/AlexMcPherson.jpg">
					</li>
				</ul>
			</div>

			<script type="text/javascript">
			// Function from http://www.my-html-codes.com/easy-jquery-carousel
				$(document).ready(function(){
					// Set the interval to be 5 seconds
					var t = setInterval(function(){
					$("#home-carousel ul").animate({marginLeft:-480},1000,function(){
					$(this).find("li:last").after($(this).find("li:first"));
					$(this).css({marginLeft:0});
						})
					},5000);
				});
			</script>
			
<!-- 		</div>
		
	</div> -->
<?php
	if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>
		
		<div class="row">
			<div class="col-md-6 col-md-offset-2 col-sm-8 col-sm-offset-2 text-justify" id="home-content">
				<?php the_content(); ?>
			</div>
		
		<?php endwhile; ?>
	<?php endif; ?>
			<div class="col-md-2 col-md-offset-0 col-sm-8 col-sm-offset-2 text-justify" id="home-sidebar">
				<h3>How we work</h3>
				<h4>On brief</h4>
				<p>On point legal advice, so your focus remains on your business.</p>
				<h4>On budget</h4>
				<p>Certainty of costs, totally transparent fee structures, no nasty surprises.</p>
				<h4>On time</h4>
				<p>Building great businesses requires quick decisions and fast pace. We’ll work to your schedule, providing the advice you want, when you want it.</p>
			</div>
		</div>
<?php get_footer(); ?>