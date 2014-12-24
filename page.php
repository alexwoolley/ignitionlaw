<?php

get_header(); ?>

<?php
	if (have_posts()): ?>
	<!-- Start the Loop. -->
		<?php while ( have_posts() ) : the_post(); ?>		
			<?php the_title(); ?>
			<?php the_content(); ?>
		<?php endwhile;
	endif; ?>

<?php
get_footer(); ?>