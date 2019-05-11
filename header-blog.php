<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); //permite dar diferentes clases segun la pagina en la que este ?>>

	<?php 
		$pagina_blog = get_option( 'page_for_posts' ); //trae el id de la pagina llamada blog
		$id_imagen = get_post_thumbnail_id($pagina_blog); //nos regresa la id de la imagen 
		$destacada = wp_get_attachment_image_src( $id_imagen, 'full' ); 
	 	$destacada = $destacada[0]; 
	?>
	<header class="site-header" style="background-image: url(<?php echo $destacada; ?>);">
		<nav class="navegacion">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="<?php echo esc_url(home_url('/'))?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="logo img-responsive">
						</a>
					</div>
					<div class="navbar-right">
						<?php  
						wp_nav_menu( array( 
							'theme_location' => 'menu_principal',
							'container_id' => 'navbar',
							'container_class' => 'collapse navbar-collapse',
							'menu_class' => 'nav navbar-nav navbar-right' 
						) );
						?>
					</div>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="titulo">
						<?php  
						$pagina_blog = get_option( 'page_for_posts' );
						$titulo = get_the_title( $pagina_blog );
						?>
						<h1 class="site-title"><span><?php echo $titulo ?></span></h1>
					
						
					</div>
				</div>
			</div>
		</div>
	</header>
