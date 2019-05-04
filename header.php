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
					<div class="col-md-4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="img-responsive">
					</div>
					<div class="col-md-8">
						<?php  
						wp_nav_menu( array( 
							'theme_location' => 'menu_principal' 
						) );
						?>
					</div>
				</div>
				
			</div>
		</nav>
	</header>
