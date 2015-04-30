<?php get_header(); ?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 gunnercooke-curves">
			
			<!-- The point of these nested rows is to be consistent with other pages, where they're more necessary. -->
			<div class="row">
				<div class="col-xs-12 text-center masthead">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12">
					<div class="text-justify">
						<?php
							//Get breadcrumb
							$post_parent_id = $post->post_parent;
							getBreadcrumb( $post_parent_id );
							//Get link for editing
							edit_post_link('Edit this entry', '<p>', '</p>');
							//Get content of page
							the_content(); 
						?>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>