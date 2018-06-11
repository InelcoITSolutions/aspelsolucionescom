@extends('templates.landings-sae.principal')
@section('title','Actualización Aspel SAE 7.0')
@push('css-promocion-nuevo-noi')

<link href="/css/landings-SAE/promocion-sae.css" rel="stylesheet" type="text/css"/>
<link href="/css/landings-SAE/form-promocion.css" rel="stylesheet"/>
<!--IMAGEN QUE SE muestra cuando se comparte en redes sociales -->
<link href="https://www.aspelsoluciones.com/img/share/actu-sae.png" rel="image_src"/>
        


@endpush
@section('content')

@if(Session::has('mensaje'))
<div class="alert alert-success">
    <div class="container-fluid">
        <div class="alert-icon">
            <i class="icon-check ico-notif">
            </i>
            <b>
                {{ Session::get('mensaje') }}
            </b>
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">
                    <i class="icon-cross2">
                    </i>
                </span>
            </button>
        </div>
    </div>
</div>
@endif

@include('partials.header-landings')

<section class="secciones-noi" id="inicio-aspel-noi">
    <div class="container">
        <div align="right" class="logo">
            <a href="{{url('coi-nuevo')}}">
                <img alt="Logo Aspel Soluciones" class="img-responsive" src="/img/logo-aspelsoluciones-blanco.png" width="220"/>
            </a>
        </div>

        <div class="row frase-de-impacto wow fadeInDown" data-wow-delay="0.5s">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h1 class="frase">
                    <i>
                        Descubre el
                        <span>
                            nuevo
                        </span>
                        <br>
                            y
                            <span class="poderoso">
                                funcional
                            </span>
                        </br>
                    </i>
                </h1>
            </div>
            {{--la siguiente imagen va a un lado de las palabras anteriores--}}
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img-left">
                <img alt="COI 8.0" class="img-responsive" src="/img/img-landings-sae/aspelsoluciones-sae70.png" width="400">
                </img>
            </div>
        </div>
        
        <div class="row">
            <h3 class="slogan wow fadeInDown" data-wow-delay="0.5s">
                El Sistema Administrativo Empresarial más utilizado en  
                <br>
                México y el único que pone en control total a tu negocio.
                </br>
            </h3>
        </div>

        <div class="row wow fadeInDown" data-wow-delay="0.5s">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 izquierda">
                <img alt="Actualizacion sae" class="img-responsive" src="/img/precios-julio/aspelsoluciones-sae-act.png" width="400">
                </img>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 boton-espacio">
                <div align="right" class="boton wow fadeInDown" data-wow-delay="0.5s">
                    <a class="button-adquierelo large radius goContrata ancla2" href="#adquirir">
                        ¡Actualizate ahora!
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="secciones-noi par-nuevo" id="lo-nuevo">
    <div class="container">
        <h3 class="text-center titulo-uno wow bounceInLeft" data-wow-delay="0.5s">
            Aspel SAE, el Sistema Administrativo Empresarial más vendido en México
        </h3>
        <h1 class="titulo-dos texto-degradado wow bounceInRight" data-wow-delay="0.5s">
            ¡EVOLUCIONA!
        </h1>

        <div class="logo-producto">
            <center>
                <img alt="logo COI" class="img-responsive wow fadeInDown" data-wow-delay="0.5s" src="/img/img-landings-sae/aspel-home-sae-blanco.png">
                </img>
            </center>
        </div>

        <div class="fondo">

            <div class="row fila1">
                <div class="col-md-4 text-right wow bounceInLeft" data-wow-delay="0.5s">
                    <div class="icon-container default-bg circle">
                        <i class="fa fa-check">
                        </i>
                    </div>
                    <div class="body">
                        <h3>
                            Facturación CFDI
                        </h3>
                        <p>
                         Cumple al 100% con los cambios del Anexo 20 V.3.3.
                         <br>
                         Genera el nuevo componente INE que se adiciona en el CFDI y más funciones.

                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div align="center" class="imagen-uno">
                        <i aria-hidden="true" class="fa fa-cog fa-spin fa-3x fa-fw">
                        </i>
                        <span class="sr-only">
                            Saving. Hang tight!
                        </span>
                    </div>
                </div>

                <div class="col-md-4 text-left wow bounceInRight" data-wow-delay="0.5s">
                    <div class="icon-container default-bg circle">
                        <i class="fa fa-check">
                        </i>
                    </div>
                    <div class="body-dos">
                        <h3>
                            Facturación en línea
                        </h3>
                            <ul>
                                <li>Accesible facturación desde un sitio web a partir de los tickets de venta.   
                                </li>

                                <li>Facturación masiva a tus clientes con un solo clic.
                                
                                </li>
                                                     
                            </ul>
                    </div>
                </div>

            </div>

            <div class="row fila2">
                <div class="col-md-4 text-right wow bounceInLeft" data-wow-delay="0.5s">
                    <div class="icon-container default-bg circle">
                        <i class="fa fa-check">
                        </i>
                    </div>
                    <div class="body">
                        <h3>
                            Control de los perfiles
                        </h3>
                        <p>
                         Configura los usuarios en tiempo real
                        <br>
                        mejorada interfaz grafica
                        <br>
                        con vistas (modo lista y modo tarjeta)
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div align="center" class="imagen">
                        <img alt="logo COI" class="img-responsive" height="250" src="/img/aspel-SAE.png" width="250">
                        </img>
                    </div>
                    <div align="center" class="imagen-dos">
                        <i aria-hidden="true" class="fa fa-cog fa-spin fa-3x fa-fw">
                        </i>
                        <span class="sr-only">
                            Saving. Hang tight!
                        </span>
                    </div>
                </div>
                <div class="col-md-4 text-left wow bounceInRight" data-wow-delay="0.5s">
                    <div class="icon-container default-bg circle">
                        <i class="fa fa-check">
                        </i>
                    </div>
                    <div class="body-dos">
                        <h3>
                            SAE NUBE
                        </h3>
                        <ul>
                            <li>Conecta tus sucursales con SAE Nube</li>
                            <li>Accede a tu información desde cualquier lugar</li>
                            <li>Administra tu negocio con movilidad total</li>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row fila3">
                <div class="col-md-4 text-right wow bounceInLeft" data-wow-delay="0.5s">
                    <div class="icon-container default-bg circle">
                        <i class="fa fa-check">
                        </i>
                    </div>
                    <div class="body">
                        <h3>
                            Interfaces Aspel
                        </h3>
                        <p>
                        Práctica interfaz con otros sistemas de la línea Aspel.
                        <br>
                        Con Aspel COI relaciona los folios fiscales de los CFDI a las pólizas.

                        </p>
                    </div>
                </div>

                <div align="center" class="imagen-tres">
                    <i aria-hidden="true" class="fa fa-cog fa-spin fa-3x fa-fw">
                    </i>
                    <span class="sr-only">
                        Saving. Hang tight!
                    </span>
                </div>
                <div class="col-md-4">
                    <div align="center" class="imagen-cuatro">
                        <i aria-hidden="true" class="fa fa-cog fa-spin fa-3x fa-fw">
                        </i>
                        <span class="sr-only">
                            Saving. Hang tight!
                        </span>
                    </div>
                </div>
                <div class="col-md-4 text-left wow bounceInRight" data-wow-delay="0.5s">
                    <div class="icon-container default-bg circle">
                        <i class="fa fa-check">
                        </i>
                    </div>
                    <div class="body-dos">
                        <h3>
                            Nueva Tecnologia
                        </h3>
                            <ul>
                                <li> Obtén la ubicación correcta de tus clientes y proveedores con Google Maps.
                                </li>
                                <li>
                                    Práctica Búsqueda inteligente
                                </li>
                                <li>
                                    Intuitiva interfaz grafica y más
                                </li>              
                            </ul>
                        
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

<section class="secciones-noi" id="barra-solida">
    <div class="fondo-gray">
        <div class="container">
            <h2 class="text-center wow fadeInDown" data-wow-delay="0.5s">
                Ahora
                <b>
                    SAE 7.0
                </b>
                te ofrece una novedosa plataforma tecnológica que
                <b>
                    mejora tu experiencia de uso
                </b>
            </h2>
        </div>
    </div>
</section>

<section class="secciones-noi" id="caracteristicas">
    <div class="container">

        <div class="row">
            <div class="col-md-8 text-left texto-abajo wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    Aspel SAE
                </h2>
                <p>
                     Te permite controlar inventarios, clientes, facturación, cuentas por cobrar, vendedores, compras, proveedores y cuentas por pagar, automatizando eficientemente los procesos administrativos 
                </p>
            </div>
            <center>
                <div class="col-md-4 img-izquierda wow fadeInRight" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive" src="/img/img-landings-sae/iis-collage_sae.png" width="350">
                    </img>
                </div>
            </center>
        </div>

        <div class="row">
            <center>
                <div class="col-md-4 img-derecha wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive img-center" src="/img/aspel-SAE.png" width="250">
                    </img>
                </div>
            </center>
            <div class="col-md-8 text-right wow fadeInRight" data-wow-delay="0.5s">
                <br>
                </br>
                 <br>
                </br>
                <br>
                </br>
                <h2>
                    Nuevo y poderoso SAE 7.0
                </h2>
                <p>
                    Cumple con las nuevas dispociciones fiscales correspondientes a las reglas de validación del Anexo 20 version 3.3
                </p>
            

            </div>
            <div class="clearfix">
            </div>

            
        </div>

        <div class="row sat-fondo">
            <div class="col-md-8 text-left texto-abajo wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    ¿Que cambios trae la facturación electronica 3.3?
                </h2>
                <ul>
                                <li> 
                                Timbrado de pagos parciales
                                </li>

                                <li> 
                                17 nuevos catálogos
                                </li>
                                <li> 
                                Nuevas reglas en la cancelación de facturas
                                </li>
                                <li>
                                Timbrado al aplicar la cobranza    
                                </li>
                                <li>
                                 Modificación de la estructura para el XML  
                                </li>
                                <li>
                                 Formato de datos   
                                </li>
                                <li>
                                 Reglas de cálculos entre otras   
                                </li>                      
                </ul>
            </div>

            <center>
            <br>
            </br>
            <br>
            </br>
            <br>
            </br>
                <div class="col-md-4 img-izquierda wow fadeInRight" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive" src="/img/img-landings-sae/inelco-logo-SAT.png" width="150">
                    </img>
                    <br>
                <br>
                    <a href="/descargas/aspelsoluciones-guia-anexo20.pdf" target="_blank">
                    Guía de llenado del CFDI
                </a>
                <span id="icono-guia"><i aria-hidden="true" class="fa fa-file-text fa"></i></span> 
                </div>
            </center>

            
        </div>

    </div>
</section>

<section class="secciones-noi" id="news-carateristicas">

    <div class="container">
        <h1 class="funciones-nuevas wow fadeInDown" data-wow-delay="0.5s">
             SAE NUBE
        </h1>
        
        <div class="news-grid">
                <div class="col-md-6 news-text two wow fadeInLeft" data-wow-delay="0.5s">
                    <h3>
                       ¡Administra y controla tu empresa desde cualquier lugar!
                    </h3>
                    <p>
                    Su poderosa funcionalidad con todos los beneficios de la Nube, lo que representa la máxima movilidad. Comparte tu información entre tus oficinas y sucursales en tiempo real, para la correcta toma de decisiones.
                    </p>
                </div>
                <div class="col-md-6 news-img two wow fadeInRight" data-wow-delay="0.5s">
                    
                    <img alt="aspelsoluciones-sae-nube" width="428" height="356"  src="/img/img-landings-sae/aspelsoluciones-sae-nube.png"/>
                </div>
               
            </div>
    </div> <!-- termina container de sae nube en linea  -->

</section>


<section class="secciones-noi" id="news-carateristicas">
<div class="container">
<!-- primera parte-->
<h1 class="funciones-nuevas wow fadeInLeft"" data-wow-delay="0.8s">
            Novedades
            <br>
            </br>
        </h1>    
<div class="ben-1">
<div class="container wow fadeInRight" data-wow-delay="0.8s">


            <div class="col-md-3">
                <div class="img-responsive center">
                        <img alt="aspelsoluciones-ticket-empresarial" class="img-responsive zoomIzquierda" src="/img/img-landings-sae/new-function/inelco-barra-de-busqueda.png"/>
                </div>
            </div>

            <div class="col-md-3">    
                <div class="text">
                    <h3>
                     Barra de búsqueda
                    </h3>
                    <p>
                       Utiliza esta práctica herramienta para localizar información de tu interés y visualizarla inmediatamente sin perder tiempo.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="img-responsive center">
                        <img alt=" " class="img-responsive zoomDerecha" src="/img/img-landings-sae/new-function/inelco-menu-del-sistema.png"/>
                </div>
            </div>
            <div class="col-md-3">    
                <div class="text">
                    <h3>
                        Menú del sistema
                    </h3>
                    <p>
                        Ahora te presentamos un diseño renovado con mejoras en cada menú, iconos y temas personalizables que incrementan tu productividad.
                    </p>
                </div>
            </div>
            
</div>
</div>
<!-- segunda parte-->
<div class="ben-2">
<div class="container wow fadeInLeft" data-wow-delay="0.8s">
           
            <div class="col-md-3">
                <div class="img-responsive center">
                        <img alt="nuevas funciones coi" class="img-responsive zoomIzquierda" src="/img/img-landings-sae/new-function/inelco-temas-skin.png"/>
                </div>
            </div>
            <div class="col-md-3">    
                <div class="text">
                    <h3>
                      Temas/ Skin 
                    </h3>
                    <p>
                       Selecciona el tema de tu sistema para una mejor visualización. 

                    </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="img-responsive center">
                        <img alt="aspelsoluciones-perfiles" class="img-responsive zoomDerecha" src="/img/img-landings-sae/new-function/inelco-perfiles-usuario.png"/>
                </div>
            </div>
            <div class="col-md-3">    
                <div class="text">
                    <h3>
                         Módulo de perfiles
                    </h3>
                    <p>
                        Administra los accesos al sistema e incluye la fotografía de los usuarios. ¡Protege tu información!  
                    </p>
                </div>
            </div>   
</div>

</div>

<div class="clearfix">
            </div>
</div>
</section>

<section class="secciones-noi" id="adquirir">
    {{--
    <div class="barra-color1">
    </div>
    --}}
    <div class="container">
        <div class="row titulo wow bounceIn" data-wow-delay="0.5s">
            <h2 class="text-center">
                ¿Tienes alguna versión anterior de Aspel SAE?
            </h2>
            <h1 class="text-center">
                ¡Actualízate ahora! <!--<span id="timbres-gratis"> Y obtén 1000 timbres gratis</span>-->
            </h1>
        </div>
        <div class="row">
            <div class="col-md-6 form-promocion form-abajo">
                <h4 class="la-promo">
                    ¡Aprovecha la promoción hoy mismo!
                    ¡Contáctanos!
                </h4>
 
    @include('partials.formularios-landing-sae.form-actualizacion')

            
            </div>
            <div class="col-md-6 img-arriba ocultar wow bounceIn" data-wow-delay="0.5s">
                <img alt="Actualizacion NOI" class="img-responsive" src="/img/precios-julio/aspelsoluciones-sae-act.png" width="500">
                </img>
            </div>
        </div>

    <div class="row">
        {{--
        
        <div class="col-md-5">
        @foreach($productos_nuevos1 as $productos_coi)
            <div align="center" class="boton wow bounceIn" data-wow-delay="0.5s">
                <a class="button large radius goContrata" href="{{route('añadir-pedido',$productos_coi->tipo)}}">
                    COMPRAR AHORA
                </a>
            </div>
            @endforeach
        </div>

        --}}

        <div class="col-md-7 ocultar nota wow fadeInDown" data-wow-delay="0.5s">
            <p>
                Promoción incluye:
                <br>
                    - Licencia Aspel SAE 7 1 usuario / 99 empresas
                    <br>
                        - Licencia de actualización
                        <br>
                        {{--
                            - 1,000 timbres CFDI
                       
                        <br>
                        - 1 curso en línea
                        <br>
                        - 20% de descuento en Póliza de Asesoría y Soporte
                         </br>
                        <br>
                        --}}
                        * Precio en Moneda Nacional + IVA ** Válido hasta el 31 de julio 2017 *** No incluye servicios de instalación
            </p>
        </div>
    </div>

       

    </div>   
</section>

@push('js-desplazamiento-animado')
{{--scripts para los efectos de ir de una seccion a otra--}}
<script type="text/javascript">
    $(document).ready(function(){
  // Add smooth scrolling to all links
  $(".ancla2").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 1800, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
});
</script>
{{-- efecto para realizar el zoom--}}
<script src="/js/jquery.elevatezoom.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".zoomDerecha").elevateZoom({
                zoomWindowPosition: 10,
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,
                easing : true,
                scrollZoom : true
            }); 
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".zoomIzquierda").elevateZoom({
                zoomWindowPosition:2,
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,
                easing : true,
                scrollZoom : true
            }); 
        });
    </script>


@endpush
@stop
