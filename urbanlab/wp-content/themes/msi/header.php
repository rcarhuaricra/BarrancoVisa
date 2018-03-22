<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Municipalidad de San Isidro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css"/>

    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css"/>

    
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.9.1.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jssor.slider.min.js" type="text/javascript"></script>
    
    <script>
        $(document).ready(function () {
            $("#btn").click(function () {
                    // alert('dsf');
                    //$('#navbar').css('background', 'white');

                });
        });

    </script>
    <?php wp_head(); ?>
</head>
<body class="body_home container">
    <header class="col-md-12">
        <div class="portales">
            <a href="http://datosabiertos.msi.gob.pe/home/" target="_blank"><img  src="http://msi.gob.pe/portal/wp-content/uploads/2015/10/bt-datosabiertos.png"></a><a href="http://www.msi.gob.pe/portal/web/transparencia/" target="_blank"><img src="http://msi.gob.pe/portal/wp-content/uploads/2015/10/bt-transparencia.png"></a>
        </div>
        <div class="logo">
            <a href="#" class="" > 
            <?php
            ?><img class="img-responsive" src="http://msi.gob.pe/portal/wp-content/uploads/2015/11/logo-msi.png" width="340" title="Sede Electrónica San Isidro">
            </a>
        </div>
        <div class=" col-lg-12 row " style="top:80px; z-index: 1000">
            <nav class="navbar row">
                <div class="navbar-header">
                    <button id="btn" type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        Menú
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar" >

                 <?php

                 wp_nav_menu(
                 array( 'menu' => '', 'container' => 'ul', 'container_class' => '', 'container_id' => '', 'menu_class' => 'nav navbar-nav navbar-right', 'menu_id' => '',
                 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'item_spacing' => 'preserve', 'level'=>0, 'child_of' => 'hol',
                 'depth' => 12, 'walker' => '', 'theme_location' => '' ));
                 ?>

             </div>
         </nav>
     </div>
 </header>