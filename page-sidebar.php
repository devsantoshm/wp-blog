<?php  
/*
Template Name: Página con Sidebar
*/
get_header();
?>

<section class="container-fluid contenido">
	<div class="row">
		<?php while(have_posts()): the_post(); ?>
			<div class="col-sm-8 contenido-pagina">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-2">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
			<div class="col-sm-4">
				sidebar aqui
			</div>
	</div>
</section>


<?php get_footer(); ?>

