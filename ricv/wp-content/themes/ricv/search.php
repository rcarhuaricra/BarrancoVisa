<?php get_header(); ?>
<br>
 <?php include (TEMPLATEPATH. '/menu.php'); ?>
<br><hr>
<div class="container">
	<br>	
	<?php
	$s=get_search_query();
	$args = array(
		's' =>$s
	);
    // The Query


	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) {_e("<h2 style='font-weight:bold;color:#000'>Resultados de Busqueda Para: ".get_query_var('s')."</h2>");
		while ( $the_query->have_posts() ) {$the_query->the_post();		?>

		<div class="col-md-4 col-sm-6">
			<div class="fh5co-blog animate-box">                            
				<a href="<?php the_permalink(); ?>" class="blog-bg" style="background-image: url(<?php 
					if(has_post_thumbnail()):
						{
							the_post_thumbnail_url();

						}else: 
						echo "hola";
					endif;
					?>);">
				</a>
				<div class="blog-text">
					<span class="posted_on"><?php the_author_posts_link(); ?> - <?php echo get_the_date(); ?> </span>
					<h3><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<p class="postmetadata"><?php _e( 'Publicado en' ); ?> <?php the_category( ', ' ); ?></p>

					<p><?php the_excerpt(); ?></p>
					<ul class="stuff">
						<li><i class="icon-heart2"></i>249</li>
						<li><i class="icon-eye2"></i>308</li>
						<li><a href="<?php the_permalink(); ?>"> Leer Mas...<i class="icon-arrow-right22"></i></a></li>
					</ul>
				</div> 
			</div>
		</div>
		<?php
	}
}else{
	?>
	<h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
	<div class="alert alert-warning">
		<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
	</div>

	<?php } ?>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>