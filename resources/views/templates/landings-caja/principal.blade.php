             <!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        {{-- FAVICON o icono de la pestaña icono de sae:contadores --}}
        <link href="/img/aspel-CAJA.png" rel="icon" type="image/png"/>
        
        <title>
            Aspel Soluciones | @yield('title')
        </title>

        <meta content="El Sisema Administrativo Empresarial más utilizado en 
México y el único que pone en control total a tu negocio. " name="description"/>

        <meta content="soluciones de tecnolog, consultoría, asesoria, capacitación, sistemas, aspel, cursos" name="keywords"/>

        <meta content="Inelco IT Solutions S.A de C.V" name="author"/>

        <meta content="Index, Follow" name="robots"/>
        {{--estilos--}}
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Material Design Bootstrap -->
        <!--<link href="/css/mdb.min.css" rel="stylesheet"/>-->
        <link href="/icomoon/style.css" rel="stylesheet"/>
        <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"/>

        <!-- estilos para el pie de pagina, en el para el footer solo se cambiaran los colores de los estilos se usara el mismo para las landings-->
        <link href="/css/landings-CAJA/footer-CAJA.css" rel="stylesheet"/>
        
        <link href="/css/animate.css" rel="stylesheet"/>
        
        <!--
        imagenes que se muestran para los fondos 
        cuando se comparte en facebok-->
        <link href="https://www.aspelsoluciones.com/img/share/nuevo-sae.png" rel="image_src"/> 
        <link href="https://www.aspelsoluciones.com/img/share/actu-sae.png" rel="image_src"/>
        
        
        
        {{--estilos para landing del curso de sae basico--}}
        @stack('css-curso-sae')

        {{--estilos para landing de la presentacion del nuevo noi--}}
        @stack('css-presentacion-nuevo-noi')

        {{--estilos para landing de la promocion del nuevo noi--}}
        @stack('css-promocion-nuevo-noi')

        {{--framework jquery cargado desde el cdn y por si falla lo cargamos de forma local--}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
            if (typeof jQuery == 'undefined') 
            {
                document.write(unescape("%3Cscript src='/js/jquery-3.1.1.min.js' type='text/javascript'%3E%3C/script%3E"));
            }
        </script>
        {{-- Archivo js de bootstrap cargado de forma local--}}
        <script src="/js/bootstrap.min.js">
        </script>
         <script src="/js/val-caracteres.js">
        </script>
        <!-- aqui va el codigo de google analytics-->
                <script>
                        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
                                    ga('create', 'UA-97845785-1', 'auto');
                                    ga('send', 'pageview');
                </script>
        <!-- aqui va el codigo de google analytics-->

        <!-- Google Code for Conv_AspelSoluciones_NOI8 Conversion Page -->
        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 869525397;
            var google_conversion_language = "en";
            var google_conversion_format = "3";
            var google_conversion_color = "ffffff";
            var google_conversion_label = "xg7yCNGb6GwQlc_PngM"; var google_remarketing_only = false;
            /* ]]> */
        </script>
        <script src="//www.googleadservices.com/pagead/conversion.js" type="text/javascript">
        </script>
        <noscript>
            <div style="display:inline;">
                <img alt="" height="1" src="//www.googleadservices.com/pagead/conversion/869525397/?label=xg7yCNGb6GwQlc_PngM&guid=ON&script=0" style="border-style:none;" width="1"/>
            </div>
        </noscript>
    </head>
    <body>
        @yield('content')
        <div id="fb-root">
        </div>
        <script>
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
             fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        @section('footer')
            @include('partials.footer-landings-SAE')           
        @show
        {{--boton de ir arriba--}}
        <i aria-hidden="true" class="scrollup fa fa-angle-up fa-5x">
        </i>
        @stack('js-tiempo')
        @stack('js-desplazamiento-animado')
        @stack('js-google-maps')
       
        {{--script para el boton de ir arriba--}}
        <script type="text/javascript">
            $(document).ready(function(){
  
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
  
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
  
    });
        </script>
        {{--scripts que funciona con animate.CSS para los efectos de los elemntos cuando se desplaza por una página--}}
        <script src="/js/wow.min.js">
        </script>
        <script src="/js/custom.js">
        </script>
        <script src="/js/actualizar_usuarios_noi.js">
        </script>
        <script src="/js/actualizar-carrito.js">
        </script>
        {{-- script para desactivar el clik derecho--}}
        <script type="text/javascript">
                document.oncontextmenu = function(){return false;}
        </script>
    </body>
</html>