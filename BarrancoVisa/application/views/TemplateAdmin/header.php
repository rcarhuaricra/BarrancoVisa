<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
        <title><?php echo ENTIDAD; ?></title>
        <link rel="shortcut icon" href="<?php echo ICONO; ?>"/>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>recursos/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link href="<?php echo base_url(); ?>recursos/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>recursos/fonts/ionicons-2.0.1/css/ionicons.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>recursos/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>recursos/dist/css/skins/_all-skins.min.css">
        <!--select2-->
        <link href="<?php echo base_url(); ?>recursos/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>recursos/plugins/datepicker/datepicker3.css">
        <link href="<?php echo base_url(); ?>recursos/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>





        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url(); ?>recursos/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url(); ?>recursos/bootstrap/js/bootstrap.min.js"></script>



        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>recursos/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>recursos/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url(); ?>recursos/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>recursos/plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>recursos/plugins/daterangepicker/daterangepicker.js"></script>

        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url(); ?>recursos/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

        <!-- Slimscroll -->
        <script src="<?php echo base_url(); ?>recursos/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>recursos/plugins/fastclick/fastclick.js"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>recursos/dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) 
        <script src="<?php echo base_url(); ?>recursos/dist/js/pages/dashboard.js"></script>-->
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>recursos/dist/js/demo.js"></script>
        




        <?php
        if (isset($dataTable)) {
            echo $dataTable;
        }
        ?>

        <?php
        if (isset($dataTable)) {
            echo $dataTable;
        }
        ?>



    </head>

