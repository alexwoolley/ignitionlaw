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
<!-- See also http://parkhurstdesign.com/improved-carousels-twitter-bootstrap/ and http://jockstothecore.com/proper-implementation-of-background-images-with-text-inside-responsive-carousels/-->
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
            <div style="background:url(<?=bloginfo('stylesheet_directory');?>/images/entrepreneurially_led.jpg) center center; background-size:cover;" class="slider-size">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Entrepreneurially led</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div style="background:url(<?=bloginfo('stylesheet_directory');?>/images/legally_driven.jpg) center center; background-size:cover;" class="slider-size">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Legally driven</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div style="background:url(<?=bloginfo('stylesheet_directory');?>/images/digitally_native.jpg) center center; background-size:cover;" class="slider-size">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Digitally native</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div style="background:url(<?=bloginfo('stylesheet_directory');?>/images/humanity_obsessed.jpg) center center; background-size:cover;" class="slider-size">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Humanity obsessed</h3>
                    </div>
                </div>
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