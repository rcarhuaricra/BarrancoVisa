<footer id="fh5co-footer">
	<div >
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<?php
					if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Pie-de-pagina')):endif;
					?>
                    <!--<br>
                    Designed by <a href="http://localhost/ricvweb/" target="_blank">
                    http://localhost/ricvweb/</a> Demo Images: <a href="http://unsplash.com" target="_blank">Unsplash</a>--></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
</div>

<script src="<?php bloginfo('template_url'); ?>/particles.js-master/particles.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/particles.js-master/demo/js/app.js" type="text/javascript"></script>

<?php wp_footer();?>

<script>
        // Inicializa scroll
        $(function ()
        {
            // Conteo aburrido
            tira = '';
            for (var i = 1; i <= 50; i++)
                tira += (i + '<br />');
            //$('#fh5co-resume').html(tira);
            // Inicializando flotante rojo
            var $flotante = $('#float');
            $flotante.hide();

            var altura = $('#fh5co-header').height();
            
            $(window).scroll(function ()

            {
            	console.log($(window).scrollTop());
            	console.log(altura);
                if ($(window).scrollTop() > altura)
                {
                 $('#float').attr("style","position: fixed; width: 100%; z-index: 1100; background: white; top: 0;display:block");
                 $('nav').addClass('navbar-inverse');
                   //$flotante.show();
                   //console.log('Ahora me ves');
               } else
               {
                $flotante.removeAttr("style");
                    //$flotante.hide();
                    $('#float').css('position: fixed; width: 100%; z-index: 1100; background: white; top: 0;display:block;');
                    //console.log('Ahora no me ves');
                    $('nav').removeClass('navbar-inverse');
                }
            });
        });

    </script>
</body>
</html>
