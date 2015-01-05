<?php
/*
Template Name: Home
*/
get_header(); ?>

<div class="row">
	<div class="col-sm-8 col-sm-offset-2 text-center">
		<div class="masthead">
			<h1>Ignition Law is a very different law firm</h1>
		</div>
	</div>
</div>

<!-- Carousel modified from http://bootstrapbay.com/blog/bootstrap-3-carousel-tutorial/ -->
<div id="carousel-home-page" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-home-page" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-home-page" data-slide-to="1"></li>
    <li data-target="#carousel-home-page" data-slide-to="2"></li>
    <li data-target="#carousel-home-page" data-slide-to="3"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?=bloginfo('stylesheet_directory');?>/images/lightbulb.png" alt=".Entrepreneurially led" width="100%">
      <div class="carousel-caption">
          <h4>Entrepreneurially led</h4>
      </div>
    </div>
    <div class="item">
      <img src="<?=bloginfo('stylesheet_directory');?>/images/law_books.png" alt="Legally driven" width="100%">
      <div class="carousel-caption">
          <h4>Legally driven</h4>
      </div>
    </div>
    <div class="item">
      <img src="<?=bloginfo('stylesheet_directory');?>/images/lightbulb.png" alt="Digitally native" width="100%">
      <div class="carousel-caption">
          <h4>Digitally native</h4>
      </div>
    </div>
    <div class="item">
      <img src="<?=bloginfo('stylesheet_directory');?>/images/lightbulb.png" alt="Humanity obsessed" width="100%">
      <div class="carousel-caption">
          <h4>Humanity obsessed</h4>
      </div>
    </div>
  </div>
</div> <!-- Carousel -->


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