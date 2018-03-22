<?php get_header();?>

<section id="main" class="col-md-12">

    <div class="principal">
     <div class="col-md-9 form-group">
        SINGLE
        <div id="1" class="tab-pane fade in active">    
            <!-- Start the Loop. -->
            <div class="post-cat-three">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="post">
                        <!-- Display the Title as a link to the Post's permalink. -->
                        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                        <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
                        <!-- Display the Post's content in a div box. -->
                        <div class="entry">
                            <?php the_content(); ?>
                        </div>
                        <!-- Display a comma separated list of the Post's Categories. -->
                        <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
                    </div> <!-- closes the first div box -->
                    <!-- Stop The Loop (but note the "else:" - see next line). -->
                <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

            <?php endif; ?>      
            <?php if(function_exists('the_ratings')) { the_ratings(); } ?>   
            <div id="comentarios">
                <h3>Comentarios</h3>
                <div id="comentarios">
                    <?php comments_template();?>
                </div>
            </div>


        </div>
    </div>
    <?php get_sidebar();?>	
</div>	

</section>
<?php get_footer();?>