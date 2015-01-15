<?php

/*
Template Name: About us
*/

?>

<?php get_header(); ?>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3 gunnercooke-curves">


		<?php if (have_posts()): ?>
			<?php while (have_posts()): the_post(); ?>

			<div class="row">
				<div class="col-xs-12">
					<div class="text-center masthead">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="text-justify">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

			<?php endwhile; ?>
		<?php endif; ?>

		<br>
			<div class="row">
				<?php getTeam (); ?>
			</div>

		<!-- Carousel modified from http://bootstrapbay.com/blog/bootstrap-3-carousel-tutorial/ -->
		<!-- For text only carousel,see https://www.technotarek.com/projects-and-tasks/text-bootstrap-carousel -->
		<div class="row">
			<div class="col-xs-12">	
				<div id="carousel-who-we-are" class="carousel slide" data-ride="carousel">
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    <div class="item active">
				      <div class="carousel-text">
				          <p>"Alex is one of the most commercial lawyers I know. Whatever the topic, Alex has been quick to understand the key dynamics of the situation, incentives of different parties, and help us identify what terms matter, where we can be flexible, and how to get deals done." – Jan Sramek, CEO of Better</p>
				      </div>
				    </div>
				    <div class="item">
				      <div class="carousel-text">
				          <p>"David is a truly first class Lawyer, an expert in the media world." – Chris Gorell Barnes, Founder & CEO, Adjust Your Set, New Media Entrepreneur and Investor</p>
				      </div>
				    </div>
				    <div class="item">
				      <div class="carousel-text">
				          <p>“Alex consistently provides outstanding pro bono legal support to. Alex is patient and always constructive, carefully calibrating his advice to reflect the context of the non profit world.” – Andrew Davenport, CEO at Prince’s Youth Business International</p>
				      </div>
				    </div>
				    <div class="item">
				      <div class="carousel-text">
				          <p>"David is a highly capable, experienced and profoundly knowledgeable professional who you can rely on to be 'on point', with a clear focus on 'getting the deal done.'" – Jana Hlistova, Founder at Lifeshifter</p>
				      </div>
				    </div>
				    <div class="item">
				      <div class="carousel-text">
				          <p>"I've worked with Alex on various legal issues including company set up, company structure and advice around investment documentation, particularly as it relates to start ups. Alex is professional and super-efficient at getting things done. I highly recommend Alex to organisations in the startup community for his straightforward talk and deep understanding of the problems.” – James Pattinson, CEO at Startup Direct</p>
				      </div>
				    </div>
				    <div class="item">
				      <div class="carousel-text">
				          <p>"David is committed to getting the best result for his clients. And he does." – Deborah Saw, Managing Partner, Newgate Communications LLP</p>
				      </div>
				    </div>
				  </div>
				</div> <!-- Carousel -->
			</div>
		</div>

		<!-- NB The following JS isn't responsive, but it is at least adaptive -->
		<script type="text/javascript">

		    function setCarouselHeight(id)
		    {
		        var slideHeight = [];
		        $(id+' .item').each(function()
		        {
		            // add all slide heights to an array
		            slideHeight.push($(this).height());
		        });

		        // find the tallest item
		        max = Math.max.apply(null, slideHeight);

		        // set the slide's height
		        $(id+' .carousel-text').each(function()
		        {
		            $(this).css('height',max+'px');
		        });
		    }

			setCarouselHeight('#carousel-who-we-are');

		</script>


		<div class="row">
			<div class="col-xs-12 text-center">
			    <a href="https://www.linkedin.com/pub/alex-mcpherson/7/982/965" target="_blank">
					<img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_160x33.png" width="160" height="33" border="0" alt="View Alex McPherson's profile on LinkedIn">   
			    </a>
			</div>
		</div>


		<br>


		<div class="row">
			<div class="col-xs-12 text-center">
			    <a href="https://www.linkedin.com/pub/david-farquharson/3/1a4/469" target="_blank">
					<img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_160x33.png" width="160" height="33" border="0" alt="View David Farquharson's profile on LinkedIn">   
			    </a>
			</div>
		</div>

	</div>
</div>
<?php get_footer(); ?>