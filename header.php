<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
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
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="img-responsive">
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
	</header>
