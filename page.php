<?php

get_header(); ?>

<?php
	if (have_posts()): ?>
	<!-- Start the Loop. -->
		<?php while ( have_posts() ) : the_post(); ?>
			<?php $postid = get_the_ID(); ?>
			<div id="post_<?=$postid?>">		
				<div class="page-title">
					<?php the_title(); ?>
				</div>
				<?php the_content(); ?>
			</div>
		<?php endwhile;
	endif; ?>

<?php
get_footer(); ?>