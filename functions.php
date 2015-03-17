<?php

require_once "custom-functions.php"; //this is where my own functions go

//Put WordPress functions here:

add_theme_support( 'post-thumbnails' ); 


function new_excerpt_more( $more ) {
	return ' ';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>