<?php
/*
Template Name: Home
*/
get_header(); ?>

<!-- Carousel modified from http://bootstrapbay.com/blog/bootstrap-3-carousel-tutorial/ -->
<!-- See also http://parkhurstdesign.com/improved-carousels-twitter-bootstrap/ and http://jockstothecore.com/proper-implementation-of-background-images-with-text-inside-responsive-carousels/-->
<div id="carousel-home-page" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-home-page" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-home-page" data-slide-to="1"></li>
        <li data-target="#carousel-home-page" data-slide-to="2"></li>
        <li data-target="#carousel-home-page" data-slide-to="3"></li>
        <li data-target="#carousel-home-page" data-slide-to="4"></li>
    </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div style="background:url(<?=bloginfo('stylesheet_directory');?>/images/home_background.jpg) center center; background-size:cover;" class="slider-size">
                <!-- <div class="container">
                    <div class="carousel-caption">
                        <h2 style="font-size: 80px; font-family: 'Open Sans', sans-serif;">a very<br><span style="color: #C5C5C5;">different</span><br>law firm</h2>
                    </div>
                </div> -->
            </div> 
        </div>
        <div class="item">
            <div style="background:url(<?=bloginfo('stylesheet_directory');?>/images/entrepreneurially_led.jpg) center center; background-size:cover;" class="slider-size">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Entrepreneurially led</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div style="background:url(<?=bloginfo('stylesheet_directory');?>/images/legally_driven.jpg) center center; background-size:cover;" class="slider-size">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Legally driven</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div style="background:url(<?=bloginfo('stylesheet_directory');?>/images/digitally_native.jpg) center center; background-size:cover;" class="slider-size">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Digitally native</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div style="background:url(<?=bloginfo('stylesheet_directory');?>/images/humanity_obsessed.jpg) center center; background-size:cover;" class="slider-size">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Humanity obsessed</h2>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div> <!-- Carousel -->

<!-- Container -->
        <div class="container-fluid" id="main-container">
            <!-- Content -->
                <div id="content">

<?php
	if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>
		
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 text-justify gunnercooke-curves" id="home-content">
				<?php the_content(); ?>
			</div>
		</div>
		
		<?php endwhile; ?>
	<?php endif; ?>


<?php get_footer(); ?>