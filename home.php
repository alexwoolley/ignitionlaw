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

<?php get_footer(); ?>