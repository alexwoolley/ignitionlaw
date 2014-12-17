<?php

get_header(); ?>

<?php
	if (have_posts()): ?>
	<!-- Start the Loop. -->
		<?php while ( have_posts() ) : the_post(); ?>
		
			<div class="page-title">
				<?php the_title(); ?>
			</div>
			<?php the_content(); ?>

		<?php endwhile;
	endif; ?>

<?php
get_footer(); ?>