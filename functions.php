<?php

// add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
// function enqueue_parent_theme_style() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
// }

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header menu' ));
}
add_action( 'init', 'register_my_menu' );