<?php  

function blogviajes_styles(){
	wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script('jquery'); //cargamos jquery de wordpress
	wp_enqueue_script('bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), '3.3.7', true); //true para que cargue en el footer
}

add_action( 'wp_enqueue_scripts', 'blogviajes_styles' );

//Navegación
register_nav_menus( array( 
	'menu_principal' => __( 'Menu Principal', 'blogViajes' )
 ) );