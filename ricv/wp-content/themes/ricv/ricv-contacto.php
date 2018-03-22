  
<?php
/*
Template Name: ricv-contacto
*/

get_header();

?><br>
<?php include (TEMPLATEPATH. '/cabecera.php'); ?>
<?php include (TEMPLATEPATH. '/menu.php'); ?>
<section id="main" class="col-md-12">
	
	PAGE                  
	<!-- Start the Loop. -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Test if the current post is in category 3. -->
		<!-- If it is, the div box is given the CSS class "post-cat-three". -->
		<!-- Otherwise, the div box is given the CSS class "post". -->
		<?php if ( in_category( '3' ) ) : ?>
		<?php else : ?>
			<div class="row">
			<?php endif; ?>				
			
			<?php the_content(); ?>
			
			<!-- Display a comma separated list of the Post's Categories. -->
			<!--<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>-->
			<!-- Stop The Loop (but note the "else:" - see next line). -->
		<?php endwhile; else : ?>
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<!-- REALLY stop The Loop. -->
	<?php endif; ?>         
</div>
<?php //get_sidebar();?>	

</section>
<div id="fh5co-consult">
	<div class="video fh5co-video">
		<video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="50">
			<source src="http://ricv.pe/asset/images/contact.mp4" type="video/mp4">
			</video>
		</div>
		<div class="choose ">
			<div class="text-center fh5co-heading">
				<h2>Comuníquese con Nosotros</h2>
			</div>

			<div id="respuesta" class="alert hidden">
			</div>

			<form method="post" id="frmmail" action="http://ricv.pe/sendmail">

				<div class="row">
					<div class="col-md-6 form-group">
						<input type="text" name="name" id="name" class="form-control" placeholder="Ingrese Nombre">
						<div class="text-danger text-right name"></div>
					</div>
					<div class="col-md-6 form-group">
						<input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingrese Teléfono">
						<div class="text-danger text-right telefono"></div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" name="email" id="email" class="form-control" placeholder="Ingrese E-mail">
						<div class="text-danger text-right email"></div>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" name="asunto" id="asunto" class="form-control" placeholder="Ingrese Asunto">
						<div class="text-danger text-right asunto"></div>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Ingrese Mensaje"></textarea>
						<div class="text-danger text-right message"></div>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" id="btn-mensaje" class="btn btn-success">Enviar Mensaje </button>
				</div>
			</form>	
		</div>
	</div>
	<?php get_footer();?>