<!--<div id="fh5co-blog">
    
    <div class="container">
        <div class="row animate-box">
            <div class="text-center fh5co-heading">
                <h2>Comuniquese con Nosotros</h2>
            </div>
        </div>
    </div>
</div>-->

<div id="fh5co-consult">
    <div class="video fh5co-video" >
        <video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="50"/>
        <source src="<?php echo base_url(); ?>asset/images/contact.mp4" type="video/mp4" />
        </video/>
    </div>
    <div class="choose ">
        <div class="text-center fh5co-heading">
            <h2>Comun&iacute;quese con Nosotros</h2>
        </div>

        <div id="respuesta" class="alert hidden">
        </div>

        <form method="post" id="frmmail" action="<?php echo base_url() ?>sendmail">

            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese Nombre" >
                    <div class="text-danger text-right name"></div>
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingrese Teléfono" >
                    <div class="text-danger text-right telefono"></div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese E-mail" >
                    <div class="text-danger text-right email"></div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" name="asunto" id="asunto" class="form-control" placeholder="Ingrese Asunto" >
                    <div class="text-danger text-right asunto"></div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Ingrese Mensaje" ></textarea>
                    <div class="text-danger text-right message"></div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" id='btn-mensaje' class="btn btn-success">Enviar Mensaje </button>
            </div>


        </form>	


    </div>
</div>
<!-- mapa#######################################################-->

<!-- mapa#######################################################-->
<script>
    $('form#frmmail').submit(function (event) {
        $('#btn-mensaje').html("Enviando....<i class='fa fa-spinner fa-pulse fa-fw'></i><span class='sr-only'>Loading...</span>")
        $('#btn-mensaje').attr("disabled", true);
        event.preventDefault();
        $.ajax({
            cache: false,
            url: $('form#frmmail').attr("action"),
            type: $('form#frmmail').attr("method"),
            data: $('#frmmail').serialize(),
            success: function (response) {
                console.log(response)
                $("#respuesta").fadeIn(1500);
                if (response === 'exito') {
                    $("#respuesta").removeClass();
                    $("#respuesta").addClass("alert alert-success");
                    $("#respuesta").html("Gracias su Mensaje fue Enviado nos Pondremos en Contacto Pronto");
                    $(".text-danger").html("");
                    $('form#frmmail')[0].reset();
                    
                } else if (response === 'error') {
                    alert('bien');
                } else {
                    $("#respuesta").addClass("alert alert-danger");
                    $("#respuesta").removeClass("hidden");
                    $("#respuesta").html("Parece que alguno de los datos no coinciden con los requeridos para comunicarnos con Usted");

                    var d = JSON.parse(response);
                    $("#frmmail .name").html(d.name);
                    $("#frmmail .telefono").html(d.telefono);
                    $("#frmmail .email").html(d.email);
                    $("#frmmail .asunto").html(d.asunto);
                    $("#frmmail .message").html(d.message);
                }
                $('#btn-mensaje').html("Enviar Mensaje")
                    $('#btn-mensaje').removeAttr("disabled");
                setTimeout(function () {
                    $("#respuesta").fadeOut(1500);
                }, 8000);
                /*$('#respuesta').html(response);
                 $("#frmmail")[0].reset();
                 $('#btn-mensaje').removeAttr("disabled")
                 $('#btn-mensaje').html('Enviar Mensaje')*/
            }
        });
    });
</script>