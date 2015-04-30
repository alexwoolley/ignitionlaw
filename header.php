<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if (is_front_page()): ?>
			<meta name="description" content="We are entrepreneurs who enjoy being lawyers. With decades of commercial experience at the highest level, we provide top legal advice without the fat fees.">
		<?php endif; ?>
		<title><?php wp_title( '|', true, 'right' ); ?>Ignition Law</title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!-- jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!-- Own JavaScript and jQuery functions -->
		<script type="text/javascript" src="<?=bloginfo('stylesheet_directory');?>/js/functions.js"></script>
		<!-- BOOTSTRAP -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<!-- END BOOTSTRAP -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css">
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
			        //Call home page and biography carousels at custom speeds
			        $('#carousel-home-page').carousel({
						// interval: 3500
						pause: true,
    					interval: false
 					});
 					$('#carousel-biography').carousel({
						interval: 5000
 					});
			    });
			</script>
		<?php endif; ?>
		<?php wp_head(); ?>
	</head>
	<body>

	<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            	<li id="sidebar-button"><a href="#" style="font-style: italic; font-size: 10px;">Close Menu</a></li>

            	<!-- <button type="button" id="sidebar-button">Close Menu</button> -->
                <?php createSidebarMenu(); ?>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        	<div class="container-fluid" id="nav-content-wrapper">
                <div class="row" id="nav-row">
                    <div class="col-lg-12" id="nav-cols">
						<!-- Following loosely based on example in http://getbootstrap.com/components/#navbar -->
						<nav id="custom-bootstrap-menu" class="navbar navbar-default" role="navigation">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header navbar-right" id="custom-navbar-right">
								<button type="button" class="navbar-toggle collapsed pull-left" id="menu-toggle" data-target="#menu-toggle">
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
						      	<?php createMainMenu (); ?>
						      </ul>
						    </div><!-- /.navbar-collapse -->
						</nav>
					</div>
                </div>
            </div>
            <?php if (is_front_page()): ?>
            	<div class="container-fluid" id="front-page-main-container">
            <?php else: ?>
            	<div class="container-fluid" id="main-container">
        	<?php endif; ?>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $("#sidebar-button").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>