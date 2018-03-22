<?php get_header();?>

 <?php include (TEMPLATEPATH. '/slideshow.php'); ?>
 <?php include (TEMPLATEPATH. '/menu.php'); ?>
 

<div id="fh5co-blog">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Articulos que Pueden Interesarte</h2>
                <p> </p>
            </div>
        </div>
        <div class="row">

            <?php query_posts("paged=$paged"); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if ( in_category( 'Tutoriales Codeigniter' ) ) : ?>
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
                            <span class="posted_on"><?php the_author_posts_link(); ?> - +<?php echo get_the_date(); ?> </span>
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
            <?php else : ?>
             
            <?php endif; ?>


            <!-- Stop The Loop (but note the "else:" - see next line). -->

        <?php endwhile; else : ?>

        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

    <?php endif; ?>
    <div id="paginacion">
        <p><?php next_posts_link('Siguiente');?><?php previous_posts_link('Anteriores');?></p>
    </div>
</div>
</div>
</div>



<!--
<div id="fh5co-about" class="animate-box">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Sobre mi</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-md-offset-3">
                <ul class="info">
                    <li><span class="first-block">Apellidos:</span><span class="second-block">Carhuaricra Vivas</span></li>
                    <li><span class="first-block">Nombres:</span><span class="second-block">Ronald Ivan</span></li>
                    <li><span class="first-block">Celular:</span><span class="second-block">+ (511) 964727438</span></li>
                    <li><span class="first-block">Email:</span><span class="second-block">ronald.carhuaricra@ricv.pe</span></li>
                    <li><span class="first-block">Website:</span><span class="second-block">www.ricv.pe/</span></li>
                   <li><span class="first-block">Address:</span><span class="second-block">198 West 21th Street, Suite 721 New York NY 10016</span></li>
                </ul>
            </div>
            
        </div>
    </div>
</div>
--><div id="fh5co-resume" class="fh5co-bg-color">
    <div class="container">
        <!--<div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Sobre mi</h2>
            </div>
        </div>-->
        <div class="row  animate-box">
            <div class="col-md-12 col-md-offset-0">
                <ul class="timeline">
                    <li class="timeline-heading text-center animate-box">
                        <div><h3>Experiencia Laboral</h3></div>
                    </li>
                    <li class="animate-box timeline-unverted">
                        <div class="timeline-badge"><i class="fa fa-suitcase"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Web - Master</h3>
                                <span class="company">Municipalidad Distrital de San Isidro - 2016 - Actualidad</span>
                            </div>
                            <div class="timeline-body">
                                <p>Desarrollo de nuevos Aplicativos Web para el portal institucional</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted animate-box">
                        <div class="timeline-badge"><i class="fa fa-suitcase"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Web Master</h3>
                                <span class="company">Municipalidad Distrital de Barranco - 2015 - 2016</span>
                            </div>
                            <div class="timeline-body">
                                <p>Actualizar y administrar el portal institucional.</p>
                            </div>
                        </div>
                    </li>
                    <li class="animate-box timeline-unverted">
                        <div class="timeline-badge"><i class="fa fa-suitcase"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Diseñador Web</h3>
                                <span class="company">NOVRIA SYSTEMS - Noviembre 2014 – Febrero 2015</span>
                            </div>
                            <div class="timeline-body">
                                <p>Diseñador y Gestor de Contenido Freelance usando Joomla.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted animate-box">
                        <div class="timeline-badge"><i class="fa fa-suitcase"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Diseñador Grafico</h3>
                                <span class="company">Freelance - 2012 - 2015</span>
                            </div>
                            <div class="timeline-body">
                                <p></p>
                            </div>
                        </div>
                    </li>


                    <br>
                    <li class="timeline-heading text-center animate-box">
                        <div><h3>Educación</h3></div>
                    </li>
                    <li class="timeline-inverted animate-box">
                        <div class="timeline-badge"><i class="fa fa-graduation-cap"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">PHP SOLUCIÓN WEB TOTAL</h3>
                                <span class="company">Sistemas UNI - 2016</span>
                            </div>
                            <div class="timeline-body">
                                <p>Programación Web </p>
                                <p>DAO - POO</p>
                                <p>Framework Codeigniter.</p>
                            </div>
                        </div>
                    </li>
                    <li class="animate-box timeline-unverted">
                        <div class="timeline-badge"><i class="fa fa-graduation-cap"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Curso de reparación y ensamblaje de computadoras</h3>
                                <span class="company">BIT INFORMATIC GROUP E.I.R.L. - (Noviembre 2014 – Diciembre 2014)</span>
                            </div>
                            <div class="timeline-body">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted animate-box">
                        <div class="timeline-badge"><i class="fa fa-graduation-cap"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Curso de Sistema de Gestión de Contenidos Joomla</h3>
                                <span class="company">BIT INFORMATIC GROUP E.I.R.L. - (Mayo 2014 – Junio 2014)</span>
                            </div>
                            <div class="timeline-body">
                                <p></p>
                            </div>
                        </div>
                    </li>
                    <li class="animate-box timeline-unverted">
                        <div class="timeline-badge"><i class="fa fa-graduation-cap"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Computación e Informática</h3>
                                <span class="company">ISTP "Argentina" - 2010 - 2012</span>
                            </div>
                            <div class="timeline-body">
                                <p></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div id="fh5co-features" class="animate-box">
    <div class="container">
        <div class="services-padding" id="particles-js">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Mis Servicios</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 text-center col-md-offset-2">
                    <div class="feature-left">
                        <span class="icon">
                            <i class="icofont icofont-responsive"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Desarrollador Web</h3>
                            <p>Desarrollador front-end y back-end, PHP, Framework CSS y PHP, CSS, HTML5.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center ">
                    <div class="feature-left">
                        <span class="icon">
                            <i class="icofont icofont-instrument"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Diseñador Web</h3>
                            <p>Usted obtendra un sitio web navegable y bajo los estándares que exige la W3C.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center col-md-offset-2">
                    <div class="feature-left">
                        <span class="icon">
                            <i class="icon-briefcase"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Branding</h3>
                            <p>Desarrollo de identidad Corporativa, desde tu Logo hasta campañas completas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center ">
                    <div class="feature-left">
                        <span class="icon">
                            <i class="icofont icofont-vector-path"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Diseño Gráfico</h3>
                            <p>Diseño de logos, Tarjetas Personales, Hojas Membretadas, Brochure, Diagramación de piezas gráficas corporativas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-skills" class="animate-box">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Habilidades</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="chart" data-percent="89"><span><strong><i class="icon-php-alt" style="font-size: 3em;"></i></strong>PHP 89%</span><canvas height="160" width="160"></canvas></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="chart" data-percent="95"><span><strong><i class="fa fa-html5" style="font-size: 3em;"></i></strong>HTML 95%</span><canvas height="160" width="160"></canvas></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="chart" data-percent="80"><span><strong><i class="fa fa-css3" style="font-size: 3em;"></i></strong>CSS3 80%</span><canvas height="160" width="160"></canvas></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="chart" data-percent="85"><span><strong><i class="icon-mysql-alt" style="font-size: 3em;"></i></strong>MySQL 85%</span><canvas height="160" width="160"></canvas></div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="progress-wrap">
                    <h3><span class="name-left"><i class="icon-bootstrap"></i> Bootstrap</span><span class="value-right">95%</span></h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                        </div>
                    </div>
                </div>
                <div class="progress-wrap">
                    <h3><span class="name-left"><i class="icon-jquery"></i> jQuery</span><span class="value-right">60%</span></h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                        </div>
                    </div>
                </div>
                <div class="progress-wrap">
                    <h3><span class="name-left"><i class="icon-codeigniter"></i> Codeigniter</span><span class="value-right">80%</span></h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        </div>
                    </div>
                </div>
                <div class="progress-wrap">
                    <h3><span class="name-left"><i class="icon-javascript"></i> Java Script</span><span class="value-right">60%</span></h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="progress-wrap">
                    <h3><span class="name-left">Corel Draw</span><span class="value-right">95%</span></h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar" aria-valuenow="95" aria-valuemin="10" aria-valuemax="100" style="width:95%">
                        </div>
                    </div>
                </div>
                <div class="progress-wrap">
                    <h3><span class="name-left">Photoshop</span><span class="value-right">70%</span></h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        </div>
                    </div>
                </div>
                <div class="progress-wrap">
                    <h3><span class="name-left">Indesing</span><span class="value-right">65%</span></h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%">
                        </div>
                    </div>
                </div>
                <div class="progress-wrap">
                    <h3><span class="name-left">Illustrator</span><span class="value-right">60%</span></h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-work" class="fh5co-bg-dark">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Alguno de los Trabajos Realizados</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center col-padding animate-box">
                <div class="work" style="background-image: url(<?php bloginfo('template_url'); ?>/images/portafolio/gas.jpg);">
                    <div class="desc">
                        <h3>GN &amp; GLP Instalaciones</h3>
                        <span>Brading</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center col-padding animate-box">
                <div class="work" style="background-image: url(<?php bloginfo('template_url'); ?>/images/portafolio/killari.jpg);">
                    <div class="desc">
                        <h3>Killari</h3>
                        <span>Brading</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center col-padding animate-box">
                <div class="work" style="background-image: url(<?php bloginfo('template_url'); ?>/images/portafolio/visual_grafica.jpg);">
                    <div class="desc">
                        <h3>Visual Grafica</h3>
                        <span>Brading</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center col-padding animate-box">
                <div class="work" style="background-image: url(<?php bloginfo('template_url'); ?>/images/portafolio/playMedia.jpg);">
                    <div class="desc">
                        <h3>PlayMedia</h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center col-padding animate-box">
                <div class="work" style="background-image: url(<?php bloginfo('template_url'); ?>/images/portafolio/yavengraf.jpg);">
                    <div class="desc">
                        <h3>Yavengraf</h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center col-padding animate-box">
                <div class="work" style="background-image: url(<?php bloginfo('template_url'); ?>/images/portafolio/yavengraf.jpg);">
                    <div class="desc">
                        <h3>Proximo...</h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--<div id="fh5co-blog">
    
    <div class="container">
        <div class="row animate-box">
            <div class="text-center fh5co-heading">
                <h2>Comuniquese con Nosotros</h2>
            </div>
        </div>
    </div>
</div>-->



<!-- mapa#######################################################-->

<!-- mapa#######################################################-->

<?php get_footer();?>