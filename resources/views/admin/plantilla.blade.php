<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <link href="/img/favicon.png" rel="icon" type="image/png"/>
        <title>
            Panel de Administración | @yield('title'){{--titulo q cambia en cada pagina--}}
        </title>
        <meta content="Aspel Soluciones es el área espeacializada de Inelco IT Solutions dedicada a ofrecer soluciones a las las micro, pequeñas y medianas empresas, favoreciendo la correcta toma de decisiones de manera sencilla, eficiente y productiva." name="description"/>
        <meta content="soluciones de tecnología, consultoría, asesoria, capacitación, sistemas aspel, cursos, servicios, soporte, tienda en linea, cotizacion" name="keywords"/>
        <meta content="Inelco IT Solutions S.A. de C.V." name="author"/>
        <meta content="Index, Follow" name="robots"/>
        {{--metas para facebook--}}
        <meta content="Aspel Soluciones | Soluciones para los Sitemas Administrativos" property="og:title"/>
        <meta content="website" property="og:type"/>
        <meta content="Aspel Soluciones es el área espeacializada de Inelco IT Solutions dedicada a ofrecer soluciones a las las micro, pequeñas y medianas empresas, favoreciendo la correcta toma de decisiones de manera sencilla, eficiente y productiva." property="og:description"/>
        <meta content="http://www.aspelsoluciones.com/img/fondo-face.png" property="og:image"/>
        <meta content="Aspel Soluciones | Soluciones para los Sitemas Administrativos" property="og:site_name"/>
        <meta content="http://www.aspelsoluciones.com" property="og:url"/>
        <link href="http://www.aspelsoluciones.com" hreflang="es" rel="alternate"/>
        {{--estilos del framewokr bootstrap--}}
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Material Design Bootstrap -->
        <link href="/css/mdb.min.css" rel="stylesheet"/>
        {{--estilos del slider--}}
        <link href="/css/animate-slider.css" rel="stylesheet"/>
        <link href="/css/banner-styles.css" rel="stylesheet"/>
        {{--estilos de los iconos--}}
        <link href="/icomoon/style.css" rel="stylesheet"/>
        <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        {{--estilos para el tipo de fuente de la pagina--}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700" rel="stylesheet"/>
        {{--estilos para las animaciones--}}
        <link href="/css/animate.css" rel="stylesheet"/>
        {{--estilos para el menu de navegacion de cada producto--}}
        <link href="/css/component.css" rel="stylesheet"/>
        {{--estilos para la tienda--}}
        <link href="/css/tienda.css" rel="stylesheet"/>
        {{--estilos para el panel de administracion--}}
        <link href="/css/panel-administracion.css" rel="stylesheet"/>
        {{--añadimos los estilos para los productos--}}
        @stack('add-css')
         {{--Google analytics--}}
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-86900730-1', 'auto');
             ga('send', 'pageview');
        </script>
        {{--SDK para java script para el plugin de Facebook--}}
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
    </head>
    <body data-offset="50" data-spy="scroll" data-target=".navbar" id="page-top">
        @section('navbar')
            @include('partials.navbar-tienda')
        @show

        @include('flash::message')
        @if(Session::has('mensaje'))
        <div class="alert alert-success">
            <div class="container-fluid">
                <div class="alert-icon">
                    <i class="icon-check ico-notif">
                    </i>
                    <b>
                        {{ Session::get('mensaje') }}
                    </b>
                </div>
                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                    <span aria-hidden="true">
                        <i class="icon-cross2">
                        </i>
                    </span>
                </button>
            </div>
        </div>
        @endif
        @yield('content')

        @section('footer')
            @include('partials.footer')
        @show
        {{--boton de ir arriba--}}
        <i aria-hidden="true" class="scrollup fa fa-angle-up fa-5x">
        </i>
        {{--framework jquery cargado desde el cdn y por si falla lo cargamos de forma local--}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
            if (typeof jQuery == 'undefined') 
            {
                document.write(unescape("%3Cscript src='/js/jquery-3.1.1.min.js' type='text/javascript'%3E%3C/script%3E"));
            }
        </script>
        <!-- Bootstrap core JavaScript -->
        <script src="/js/bootstrap.min.js">
        </script>
        <!-- Bootstrap tooltips -->
        <script src="/js/tether.min.js" type="text/javascript">
        </script>
        <!-- MDB core JavaScript -->
        <script src="/js/mdb.min.js" type="text/javascript">
        </script>
        <!-- Include typeahead.js file -->
        <script src="/js/jquery.typeahead.min.js" type="text/javascript">
        </script>
        {{--scripts para la pagina --}}
        @stack('add-js')
        <script>
            $('#flash-overlay-modal').modal();
        </script>
        {{--scripts para los efectos de ir de una seccion a otra--}}
        <script src="/js/jquery.easing.js" type="text/javascript">
        </script>
        <script src="/js/jquery.scrollTo.js">
        </script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){     
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
                        });
                    });
        </script>
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
        {{--script para poner el menu en modo fixed--}}
        <script>
            $(document).ready(function(){
                $('#nav-bar-id').affix({
                    offset:  1
                }); 
            });
        </script>
        <script src="/js/wow.min.js">
        </script>
        <script src="/js/custom.js">
        </script>
        <script src="/js/seccion2.js">
        </script>
        <script src="/js/detalle-venta.js">
        </script>
        @include('partials.mensajes-flash')
    </body>
</html>