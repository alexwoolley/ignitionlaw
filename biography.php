<?php

/*
Template Name: Biography
*/

?>

<?php get_header(); ?>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3 gunnercooke-curves">

		<!-- This loop gets the title, i.e. the person's name  -->
		<?php if (have_posts()): ?> 
			<?php while (have_posts()): the_post(); ?>

			<div class="row">
				<div class="col-xs-12 text-center masthead">
					<h1><?php the_title(); ?></h1>

			<?php endwhile; ?>
		<?php endif; ?>
					<h4>
						<?php $title = get_post_meta (get_queried_object_id(), "Title", true);
							if ($title) {
								echo $title;
							} 
							else {
								echo "Advisory Board";
							}
						?>
					</h4>
				</div><!-- /col -->
			</div><!-- /row -->

		<?php if (have_posts()): ?> 
			<?php while (have_posts()): the_post(); ?>

			<div class="row">
				<div class="col-sm-4">
					<?= the_post_thumbnail("full", array('class' => 'img-responsive gunnercooke-curves-images')); ?>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>

				<div class="col-sm-8">
					<div class="bio-contact"><!--Nested div necessary for reasons of padding and margins -->
						<?php 
							$email_address = get_post_meta( get_queried_object_id(), "Email", true );
							if ($email_address):
						?>
						<p><strong>Email: </strong>
							<?php $email_bits = explode("@", $email_address); ?>
							<SCRIPT type='text/javascript'>
								a='<?= $email_bits[0]; ?>'; 
								b='<?= $email_bits[1]; ?>'
								document.write('<A hre'+'f="mai'+'lto:'+a+'@'+b+'">');
								document.write(a+'@'+b+'</a>');
							</SCRIPT>
						</p>
						<?php endif; ?>
						<?php 
							$mobile = get_post_meta( get_queried_object_id(), "Mobile", true );
							if ($mobile):
						?>
							<p><strong>Mobile: </strong><?= $mobile; ?></p>
						<?php endif; ?>
						<?php 
							$linkedin = get_post_meta( get_queried_object_id(), 'LinkedIn', true );
							if ($linkedin): 
						?>
							<a href="<?= $linkedin; ?>" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_icons/linkedin.png" class="img-responsive desaturate bio-social-icon">
							</a>
						<?php endif; ?>
						<?php 
							$quote = get_post_meta( get_queried_object_id(), "Quote", true );
							if ($quote):
						?>
							<h5><?= $quote; ?></h5>
						<?php endif; ?>
					</div>
				</div>


			</div><!--/row -->

		<br>
		
		<!-- This loop gets the content, i.e. the person's biography -->
		<?php if (have_posts()): ?>
			<?php while (have_posts()): the_post(); ?>

			<div class="row">
				<div class="col-xs-12 text-justify">
					<?php the_content(); ?>
				</div>
			</div>

			<?php endwhile; ?>
		<?php endif; ?>

	</div>
</div>
<?php get_footer(); ?>