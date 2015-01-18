<?php
/*
Template Name: Advisory Board
*/

//This redirects the Advisory Board page to the About Us page.

$about_us_id = url_to_postid( get_site_url() . "/about-us");

wp_redirect(get_permalink($about_us_id), 301);

exit; 

?>