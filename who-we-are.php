<?php

/*
Template Name: Who we are
*/

?>

<?php get_header(); ?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
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
	<div class="col-sm-3 col-sm-offset-3">
		<img src="<?=bloginfo('stylesheet_directory');?>/images/alex_mcpherson.png" class="img-responsive img-circle">
		<div class="text-center">
			<h4>Alex McPherson</h4>
		</div>
	</div>
	<div class="col-sm-3 col-sm-offset-0">
		<img src="<?=bloginfo('stylesheet_directory');?>/images/david_farquharson.png" class="img-responsive img-circle">
		<div class="text-center">
			<h4>David Farquharson</h4>
		</div>
	</div>
</div>

<br>

<!-- Carousel modified from http://bootstrapbay.com/blog/bootstrap-3-carousel-tutorial/ -->
<!-- For text only carousel,see https://www.technotarek.com/projects-and-tasks/text-bootstrap-carousel -->
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">	
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
	<div class="col-sm-6 col-sm-offset-3 text-center">
		<h3>Alex McPherson</h3>
	</div>
</div>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3 text-justify">
		<br>
		<p>With a broad legal background, Alex advises on corporate, commercial and employment law issues for a variety of clients with a particular focus on entrepreneurs, SMEs and start-ups in the technology, energy, property and media sectors.</p>
		<p>Alex is passionate about start-up businesses, having been heavily involved and run a number of them; giving him a true understanding of the legal nuances that fledgling businesses may encounter.</p>
		<p>He is equally passionate about pro bono and charity work. In recent years, Alex has accepted the CSR Programme of the Year Award at the Legal Business Awards and Best Contribution by an Individual at the LawWorks Awards, and is now a fellow of the RSA. Over the past few years he has run a seminar on the Masters of Corporate Law at Cambridge University.</p>
		<p>After graduating from Oxford University, Alex started his career at Freshfields Bruckhaus Deringer and has also spent a further 6 years at Hogan Lovells. During this time he completed corporate and commercial secondments to Goldman Sachs, Tesco and ExxonMobil.</p>
	</div>
</div>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3 text-center">
	    <a href="https://www.linkedin.com/pub/alex-mcpherson/7/982/965" target="_blank">
			<img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_160x33.png" width="160" height="33" border="0" alt="View Alex McPherson's profile on LinkedIn">   
	    </a>
	</div>
</div>


<br>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3 text-center">
		<h3>David Farquharson</h3>
	</div>
</div>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3 text-justify">
		<br>
		<p>David has focused his career on advising SMEs, start-ups and entrepreneurs in the media, technology, renewables and other industries. This has recently included a number of university spin-outs and intrapreneur groups rising out of some of the foremost digital and technology businesses in the world.</p>
		<p>A recognised expert in the field, David regularly speaks at seminars on a wide range of corporate and entrepreneurial matters, including to the MBA Class at the London Business School, UCL postgraduate groups, and other European universities.</p>
		<p>He undertakes a range of pro bono activities in the charitable and not for profit sectors and is the Chairman of Africat UK, a charity focusing on conservation, education and community enhancement in Southern Africa.</p>
		<p>David started his career at the major international law firm, HerbertSmith Freehills in London and, most recently has spent 7 years as the Head of the Corporate, Commercial and Employment Groups at boutique Covent Garden firm, Swan Turton.</p>
	</div>
</div>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3 text-center">
	    <a href="https://www.linkedin.com/pub/david-farquharson/3/1a4/469" target="_blank">
			<img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_160x33.png" width="160" height="33" border="0" alt="View David Farquharson's profile on LinkedIn">   
	    </a>
	</div>
</div>

<?php get_footer(); ?>