<?php  

function blogviajes_styles(){
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'blogviajes_styles' );