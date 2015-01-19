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
		<!-- For responsive images using cookies. For details see http://keithclark.co.uk/articles/responsive-images-using-cookies/ -->
		<script type="text/javascript">
			document.cookie = "device_dimensions=" + screen.width + "x" + screen.height;
		</script>
		<?php if (!is_page("Privacy policy")): ?> <!--So that people don't have to read the cookies warning again after clicking on the privacy policy link -->
			<script type="text/javascript">
			    $(document).ready(function() {
			        $.cookiesDirective({ //Get cookies warning
			            privacyPolicyUri: "<?=bloginfo('url');?>/privacy-policy",
			            message: "This website uses 'cookies' to enhance your experience and for basic functionality. Using this website means you're happy with this. ",
			            fontFamily: 'Open Sans',
			            linkColor: '#0099CC',
			        });
			        $('.carousel').carousel({ //Call carousel on home page at custom speed. NB 1000 = 1 second
						interval: 10000
 					});
			    });
			</script>
		<?php endif; ?>
		<?php wp_head(); ?>
	</head>
	<body>
		<!-- Following based on example in http://getbootstrap.com/components/#navbar -->
		<nav id="custom-bootstrap-menu" class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header navbar-right">
			      	<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
			      	</button>
			      	<a class="navbar-brand pull-right" href="<?=bloginfo('url');?>">
			      		<img src="<?=bloginfo('stylesheet_directory');?>/images/logo.jpeg" id="navbar-logo">
			      	</a>
			    </div>
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse navbar-left" data-toggle="collapse" data-target=".nav-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav" id="main-menu">
			      	<?php listMainMenu (); ?>
			      </ul>
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container-fluid -->
		</nav>
		<?php if(!is_front_page()): //So carousel doesn't have irritating padding ?>
		<!-- Container -->
		<div class="container-fluid" id="main-container">
			<!-- Content -->
				<div id="content">
		<?php endif; ?>