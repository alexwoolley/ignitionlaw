<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css">
		<!-- jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!-- Bootstrap stuff -->
		<script type="text/javascript" src="wp-content/themes/ignitionlaw/bootstrap/dist/js/bootstrap.js"></script>
		<link rel="stylesheet" href="wp-content/themes/ignitionlaw/bootstrap/dist/css/bootstrap.css">
		<!-- Custom CSS for Bootstrap -->
		<link rel="stylesheet" href="wp-content/themes/ignitionlaw/bootstrap/dist/css/custom.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
		<?php wp_head(); ?>
	</head>
	<body>

		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
		<!-- Container -->
		<div class="container-fluid">
			<!-- Content -->
			<div id="content">
