<?php
/*
Template Name: Home
*/
	get_header(); ?>
<?php
	if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>
		<script type="text/javascript">
			// Collapse menu on mobile view when user clicks on a link
			$('.nav a').on('click', function(){
			    if ($(document).width() <= 767){ 
			 	$(".navbar-toggle").click();
			    }
			});
		</script>
		<?php the_content(); ?>

		<?php endwhile; ?>
	<?php endif; ?>
	<script type="text/javascript">

	if (jQuery('#alex-bio').css('display') == 'none') {
		jQuery('#alex-photo').click(function(){
			jQuery('#david-bio').hide("slow")
			jQuery('#alex-bio').show("slow")
			jQuery('html, body').stop().animate({
				scrollTop: jQuery('#alex-bio').offset().top -80
   				}, 2000);
		});
	}
	//Obviously the problem is that the CSS is always set to hidden you idiot. 
	else //if (jQuery('#alex-bio').css('display') == 'block')
	{
		jQuery('#alex-photo').click(function(){
			jQuery('#alex-bio').hide("slow")
			jQuery('html, body').stop().animate({
				scrollTop: jQuery('#alex-photo').offset().top -80
					}, 2000);
		})
	}

		jQuery('#david-photo').click(function(){
			jQuery('#alex-bio').hide("slow")
			jQuery('#david-bio').toggle("slow")
			jQuery('html, body').stop().animate({
				scrollTop: jQuery('#david-bio').offset().top -80
   				}, 2000);
		});

	// 	jQuery('#david-photo').bind('click', function(event) {
	// 	var target = jQuery(this).attr('data-href');
	// 	if (jQuery(this).is('a')) {
	// 		target = jQuery(this).attr('href');
	// 	}

	// 	jQuery('html, body').stop().animate({
	// 		scrollTop: jQuery(target).offset().top - 90
	// 	}, 500);
	// 	event.preventDefault();
	// });
	</script>


	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 text-center">
			<div id="home-email">
				<button type="button">
					Prefer email?
				</button>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		jQuery('#home-email').click(function(){
			jQuery('.wpcf7-form').toggle("slow")
		});
	</script>

<?php get_footer(); ?>