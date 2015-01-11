<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?>Ignition Law</title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css">
		<!-- jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!-- Bootstrap stuff -->
		<script type="text/javascript" src="<?=bloginfo('stylesheet_directory');?>/bootstrap/dist/js/bootstrap.js"></script>
		<link rel="stylesheet" href="<?=bloginfo('stylesheet_directory');?>/bootstrap/dist/css/bootstrap.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<!-- Custom Bootstrap styling -->
		<link rel="stylesheet" href="<?=bloginfo('stylesheet_directory');?>/bootstrap/dist/css/bootstrap.css">
		<!-- Google fonts -->
		<!-- Montserrat-->
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<!-- Open Sans-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<!-- Cookies. See http://cookiesdirective.com/ -->
		<script type="text/javascript" src="<?=bloginfo('stylesheet_directory');?>/js/cookiesdirective/jquery.cookiesdirective.js"></script>
		<?php if (!is_page("Privacy policy")): ?> <!--So that people don't have to read the cookies warning again after clicking on the privacy policy link -->
		<script type="text/javascript">
		    $(document).ready(function() {
		        $.cookiesDirective({
		            privacyPolicyUri: "<?=bloginfo('url');?>/privacy-policy",
		            message: "This website uses 'cookies' to enhance your experience and for basic functionality. Using this website means you're happy with this. ",
		            fontFamily: 'Open Sans',
		            linkColor: '#0099CC',
		        });
		    });
		</script>
		 <?php endif; ?>
		<?php wp_head(); ?>
	</head>
	<body>
		<!-- Following based on example in http://getbootstrap.com/components/#navbar -->
		<nav id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header navbar-right">
		      <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand pull-right" href="<?=bloginfo('url');?>">Space for logo</a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse navbar-left" data-toggle="collapse" data-target=".nav-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav" id="main-menu">
		      	<!-- Conditionals allow interchange of colours and correct screen-reader stuff -->
		      	<?php if (is_page("Home page")): ?>
			        <li class="active">
			        	<a href="<?=bloginfo('url');?>">Home<span class="sr-only">(current)</span></a>
			        </li>
			    <?php else: ?>
			    	<li>
			        	<a href="<?=bloginfo('url');?>">Home</a>
			        </li>
			    <?php endif; ?>
		      	<?php if (is_page("How we work")): ?>
			        <li class="active">
			        	<a href="<?=bloginfo('url');?>/how-we-work">How we work<span class="sr-only">(current)</span></a>
			        </li>
			    <?php else: ?>
			    	<li>
			        	<a href="<?=bloginfo('url');?>/how-we-work">How we work</a>
			        </li>
			    <?php endif; ?>
			    <?php if (is_page("Who we are")): ?>
		        	<li class="active">
		        		<a href="<?=bloginfo('url');?>/who-we-are">Who we are<span class="sr-only">(current)</span></a>
		        	</li>
		        <?php else: ?>
		        	<li>
		        		<a href="<?=bloginfo('url');?>/who-we-are">Who we are</a>
		        	</li>
		        <?php endif; ?>
		        <?php if (is_page("Contact us")): ?>
		        	<li class="active">
		        		<a href="<?=bloginfo('url');?>/contact">Contact<span class="sr-only">(current)</span></a>
		        	</li>
		        <?php else: ?>
		        	<li>
		        		<a href="<?=bloginfo('url');?>/contact">Contact</a>
		        	</li>
		        <?php endif; ?>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<!-- Container -->
		<div class="container-fluid" id="main-container">
			<!-- Content -->
				<div id="content">
