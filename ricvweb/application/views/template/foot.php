
<div id="fh5co-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; 2017 <a href="<?php echo base_url(); ?>">RICV</a>. All Rights Reserved. 
                    <!--<br>
                    Designed by <a href="<?php echo base_url(); ?>" target="_blank">
                    <?php echo base_url(); ?></a> Demo Images: <a href="http://unsplash.com" target="_blank">Unsplash</a>--></p>
            </div>
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
</div>

</div>

<!-- Particles JS-->
<script src="<?php echo base_url(); ?>asset/particles.js-master/particles.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>asset/particles.js-master/demo/js/app.js" type="text/javascript"></script>
</body>
<div id="flotante" style="">
    <button class="btn btn-danger  hidden-xs hidden-sm" data-toggle="collapse" data-target="#demo">
        <i class="fa fa fa-mobile fa-3x pull-left"></i>&iquest;Necesitas que<br> te llamemos?
    </button>
    <button class="btn btn-danger btn-circle btn-xl hidden-md hidden-lg" data-toggle="collapse" data-target="#demo" title="Necesitas que te llamemos">
        <i class="fa fa-mobile fa-lg"></i>
    </button>

    <div id="demo" class="collapse">
        <div class="modal-content ">                
            <div class="modal-body modal-sm" >
                <form method="post" id="formllamar" action="<?php echo base_url() ?>sendmail/llamar" autocomplete="off">
                    <strong>
                        Envienos su Teléfono nosotros le Llamamos
                    </strong>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese Nombre">
                        <div class="text-danger text-right name"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control " id="telefono" name="telefono" placeholder="Ingrese Teléfono">
                        <div class="text-danger text-right telefono"></div>
                    </div>
                    <button type="submit" class="btn btn-success " id='btn-llamame'><i class="icofont icofont-ui-touch-phone fa-lg"></i> Llamame</button>
                    <div id="respuesta" class="alert hidden">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('form#formllamar').submit(function (event) {
            $('#btn-llamame').html("Enviando....<i class='fa fa-spinner fa-pulse fa-fw'></i><span class='sr-only'>Loading...</span>")
            $('#btn-llamame').attr("disabled", true);
            event.preventDefault();
            $.ajax({
                cache: false,
                url: $('form#formllamar').attr("action"),
                type: $('form#formllamar').attr("method"),
                data: $('#formllamar').serialize(),
                success: function (response) {
                    console.log(response)
                    $("#respuesta").fadeIn(1500);
                    if (response === 'exito') {
                        $("form#formllamar #respuesta").removeClass();
                        $("form#formllamar #respuesta").addClass("alert alert-success");
                        $("form#formllamar #respuesta").html("Gracias sus datos fueron Enviados le llamaremos en unos minutos");
                        $(".text-danger").html("");
                        $('form#formllamar')[0].reset();

                    } else if (response === 'error') {
                        alert('bien');
                    } else {
                        $("form#formllamar #respuesta").addClass("alert alert-danger");
                        $("form#formllamar #respuesta").removeClass("hidden");
                        $("form#formllamar #respuesta").html("Parece que alguno de los datos no coinciden con los requeridos para comunicarnos con Usted");

                        var d = JSON.parse(response);
                        $("form#formllamar .name").html(d.name);
                        $("form#formllamar .telefono").html(d.telefono);
                    }
                    $('#btn-llamame').html("Llamame")
                    $('#btn-llamame').removeAttr("disabled");
                    setTimeout(function () {
                        $("#respuesta").fadeOut(1500);
                    }, 8000);
                    /*$('#respuesta').html(response);
                     $("#formllamar")[0].reset();
                     $('#btn-llamame').removeAttr("disabled")
                     $('#btn-llamame').html('Enviar Mensaje')*/
                }
            });
        });

        // Inicializa scroll
        $(function ()
        {
            // Conteo aburrido
            tira = '';
            for (var i = 1; i <= 50; i++)
                tira += (i + '<br />');
            //$('#fh5co-resume').html(tira);
            // Inicializando flotante rojo
            var $flotante = $('#flotante');
            $flotante.hide();
            var altura = $('#fh5co-header').offset().top;
            // Scroll
            $(window).scroll(function ()
            {
                if ($(window).scrollTop() > altura)
                {
                    $flotante.show();
                    //console.log('Ahora me ves');
                } else
                {
                    $flotante.hide();
                    //console.log('Ahora no me ves');
                }
            });
        });
    </script>
</html>
