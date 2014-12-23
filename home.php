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
		jQuery('.wpcf7-form').hide();
			jQuery('#home-email').click(function(){
				jQuery('.wpcf7-form').toggle("slow")
			});
	</script>

<?php get_footer(); ?>