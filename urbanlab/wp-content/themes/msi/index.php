<?php get_header();?>

<section id="main" class="col-md-12">
    <div class="row">
        <?php include (TEMPLATEPATH. '/slideshow.php'); ?>
    </div>


    <div class="principal">
        <div id="menu1" class="tab-pane fade in active">
            <div class="menu form-group">        
                <div class="tab-content col-md-9 form-group">
                    <?php query_posts("paged=$paged"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <?php if ( in_category( '' ) ) : ?>
                            <div class="post-cat-three">
                            <?php else : ?>
                                <div class="post">
                                <?php endif; ?>

                                <!-- Display the Title as a link to the Post's permalink. -->
                                <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                                <small><?php the_date(); ?> <?php //the_author_posts_link(); ?></small>
                                <!-- Display the Post's content in a div box. -->

                                <div class="entry">
                                    <?php the_content(); ?>
                                </div>


                                <!-- Display a comma separated list of the Post's Categories. -->

                                <p class="postmetadata"><?php _e( 'Publicado en' ); ?> <?php the_category( ', ' ); ?></p>
                            </div> <!-- closes the first div box -->


                            <!-- Stop The Loop (but note the "else:" - see next line). -->

                        <?php endwhile; else : ?>


                        <!-- The very first "if" tested to see if there were any Posts to -->
                        <!-- display.  This "else" part tells what do if there weren't any. -->
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


                        <!-- REALLY stop The Loop. -->
                    <?php endif; ?>
                    <div id="paginacion">
                        <p><?php next_posts_link('Siguiente');?><?php previous_posts_link('Anteriores');?></p>
                        
                    </div>
                </div>
            </div>
            <?php get_sidebar();?>
        </div>		
    </div>	

</section>
<?php get_footer();?>