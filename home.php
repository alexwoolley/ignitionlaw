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
			<div class="col-sm-6 col-sm-offset-3 text-justify" id="home-content">
				<?php the_content(); ?>
			</div>
		</div>
		
		<?php endwhile; ?>
	<?php endif; ?>
			
<?php get_footer(); ?>