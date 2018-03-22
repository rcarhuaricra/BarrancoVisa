  
<?php
/*
Template Name: page-UrbanLab
*/

get_header();
?>
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
<?php get_footer();?>