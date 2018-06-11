<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <link href="/img/aspelsoluciones_logo.png" rel="icon" type="image/png"/>
        <title>
            Aspel Soluciones | @yield('title'){{--titulo q cambia en cada pagina--}}
        </title>
        <meta content="Aspel Soluciones es el área espeacializada de Inelco IT Solutions dedicada a ofrecer soluciones a las las micro, pequeñas y medianas empresas, favoreciendo la correcta toma de decisiones de manera sencilla, eficiente y productiva." name="description"/>
        <meta content="soluciones de tecnología, consultoría, asesoria, capacitación, sistemas aspel, cursos, servicios, soporte, tienda en linea, cotizacion" name="keywords"/>
        <meta content="Inelco IT Solutions S.A. de C.V." name="author"/>
        <meta content="Index, Follow" name="robots"/>
        
        {{--metas para facebook--}}
        <meta content="Aspel Soluciones | Soluciones para los Sistemas Administrativos" property="og:title"/>
        <meta content="website" property="og:type"/>
        <meta content="Aspel Soluciones es el área espeacializada de Inelco IT Solutions dedicada a ofrecer soluciones a las las micro, pequeñas y medianas empresas, favoreciendo la correcta toma de decisiones de manera sencilla, eficiente y productiva." property="og:description"/>
        <meta content="https://www.aspelsoluciones.com/img/fondo-face.png" property="og:image"/>
        <meta content="Aspel Soluciones | Soluciones para los Sitemas Administrativos" property="og:site_name"/>
        <meta content="https://www.aspelsoluciones.com" property="og:url"/>
        <link href="https://www.aspelsoluciones.com" hreflang="es" rel="alternate"/>
        
        {{--estilos del framewokr bootstrap--}}
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/css/bootstrap.css" rel="stylesheet"/>
        
        {{--estilos de la libreria de ihover--}}
        <link href="/src/ihover.min.css" rel="stylesheet" type="text/css"/>
        <link href="/src/ihover.css" rel="stylesheet"/>
        
        {{--estilos generales de todo el sitio--}}
        <link href="/css/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="/css/popup/styles-popup.css" rel="stylesheet" type="text/css"/>
        {{-- 
        <link href="/css/popup/styles-popup.css" rel="stylesheet" type="text/css"/>
        --}}   
        {{--estilos para el apartado de bolsa de trabajo--}}
        <link href="/css/bolsa.css" rel="stylesheet" type="text/css"/>
        
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
        
        {{--estilos para el menu de navegacion toda la pgina--}}
        <link href="/css/style-navegacion.css" rel="stylesheet"/>
        
        {{--estilos para el menu de navegacion de cada producto--}}
        <link href="/css/component.css" rel="stylesheet"/>
        
        {{--estilos para popup que se aplicara en el inicio
        <link href="/css/popupcoi.css" rel="stylesheet"/>
        --}}
        {{--estilos para tablas de listas de precios--}}
        <link href="/css/lista-precios.css" rel="stylesheet"/>


       
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
        @section('header')
            @include('partials.header')
        @show
        
        @section('navbar')
            @include('partials.navegacion')
        @show
        @yield('slider')
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
        {{-- Archivo js de bootstrap cargado de forma local--}}
        <script src="/js/bootstrap.min.js">
        </script>
        {{--script para que se esconda el header--}}
        <script src="/js/header.js">
        </script>
        {{--script para la pagina de hardware--}}
        <script src="/js/wrap-table.js">
        </script>
        <script src="/js/navegacion.js">
        </script>
        {{--scripts para pagina de preguntas frecuentes--}}
        <script src="/js/sppagebuilder.js">
        </script>
        <script src="/js/mootools-core.js">
        </script>
        {{--scripts para la pagina de productos sae--}}
        @stack('add-js')
        
        {{-- scripts del calendario --}}
        <link href="/calendar/clndr.css" rel="stylesheet" type="text/css"/>
        <script src="/calendar/underscore-min.js" type="text/javascript">
        </script>
        <script src="/calendar/moment-with-locales.js" type="text/javascript">
        </script>
        <script src="/calendar/clndr.js" type="text/javascript">
        </script>
        <script src="/calendar/site.js" type="text/javascript">
        </script>
        {{--plugin de jquery para hacer efectos en las paginas--}}
        {{--
        <script src="/js/jquery.easing.min.js" type="text/javascript">
        </script>
        --}}
        <script src="/js/jquery.scrollTo.js">
        </script>
        {{--scripts para los efectos de ir de una seccion a otra--}}
        <script src="/js/seccion2.js">
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
        {{--script para el popuu de descarga directa--}}
        <script>
            $(document).ready(function(){
    $("#myBtn").click(function(){
        $("#descDirecta").modal();
    });
});
        </script>
        {{--scripts que funciona con animate.CSS para los efectos de los elemntos cuando se desplaza por una página--}}
        <script src="/js/wow.min.js">
        </script>
        <script src="/js/custom.js">
        </script>
        {{--script del slider--}}
        <script src="/js/animate-slider.js">
        </script>
        <script src="/js/modernizr.js">
        </script>
        <script src="/js/actualizar-carrito.js">
        </script>
        <script>
            $(".anim-slider").animateSlider(
            {
                autoplay    :true,
                interval    :5500,
                animations  : 
                {
                    0:   //Slide No1
                    {
                        li  : 
                        {
                            show      : "fadeInLeft",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        },
                        "#t1"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                        
                        "#p1"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones1"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        }                       
                          
                    },
                     1:   //Slide No2
                    {
                        li  : 
                        {
                            show      : "fadeInLeft",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        },
                         "#t2"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                        
                        "#p2"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                       "#botones2"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        } 
                          
                    },
                     2:   //Slide No3
                    {
                        li  : 
                        {
                            show      : "fadeInLeft",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t3"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p3"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones3"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        } 
                          
                    },                     
                    3   :   //Slide No4
                    {
                        li  : 
                        {
                            show      : "fadeInLeft",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t4"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p4"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones4"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        }    
                       
                    },
                     /* 4   :   //Slide No5
                    {
                        li  : 
                        {
                            show      : "fadeIn",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t5"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p5"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones5"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1-5s"
                        }    
                       
                    },
                    5   :   //Slide No6
                    {
                        li  : 
                        {
                            show      : "fadeIn",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t6"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p6"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones6"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1-5s"
                        }    
                       
                    },
                    6   :   //Slide No7
                    {
                        li  : 
                        {
                            show      : "fadeIn",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t7"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p7"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones7"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1-5s"
                        }    
                       
                    },
                    7   :   //Slide No8
                    {
                        li  : 
                        {
                            show      : "fadeIn",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t8"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p8"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones8"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1-5s"
                        }    
                       
                    },
                    8   :   //Slide No9
                    {
                        li  : 
                        {
                            show      : "fadeIn",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t9"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p9"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones9"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1-5s"
                        }    
                       
                    },*/
                }
            });
        </script>

        {{-- script para desactivar el clik derecho--}}
        <script type="text/javascript">
                document.oncontextmenu = function(){return false;}
        </script>
        
        {{-- para que una ventana modal aparesca automaticamente de manera aleatoria  --}}
        
        <script type="text/javascript">
        /*
                function ver_modal()
                {
                        n=0;
                            
                            this[n++]="#sae-popup";
                            this[n++]="#coi-popup";
                            
                            this[n++]="#noi-popup";
                            this[n++]="#facture-popup";
                          
                            this[n++]="#banco-popup";
                            
                            this[n++]="#caja-popup";
                            this[n++]="#sae2-popup";
                         
                            this.N=n;
                }
                var modal=new ver_modal();
                src= modal[ Math.floor(Math.random() * modal.N) ];

                $(document).on('unload', function()
                {
                $(src).modal("show");
                });
*/
        </script>
       

        {{-- scrip para que apareza el chat    --}} 
      
        <script type="text/javascript">
            var $zoho=$zoho || {};
            $zoho.salesiq = $zoho.salesiq || 
            {widgetcode:"9f9e70d185f4d218e80feae15380fbd8b58e031ab6b34c3a879ef3dfeafec28b40a65cf3953078af9fd0897ab113022a", values:{},ready:function(){}};
                var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
        </script>
       
        
    </body>
</html>