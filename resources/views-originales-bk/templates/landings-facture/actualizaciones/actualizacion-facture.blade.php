@extends('templates.landings-facture.principal')
@section('title','Actualización Aspel FACTURE 4.0')
@push('css-promocion-nuevo-noi')

<link href="/css/landings-FACTURE/promocion-FACTURE.css" rel="stylesheet" type="text/css"/>
<link href="/css/landings-FACTURE/form-promocion.css" rel="stylesheet"/>
<!--IMAGEN QUE SE muestra cuando se comparte en redes sociales -->
<link href="https://www.aspelsoluciones.com/img/share/actu-facture.png" rel="image_src"/>


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
                <img alt="COI 8.0" class="img-responsive" src="/img/img-landings-facture/aspelsoluciones-facture-letras-blancas.png" width="400">
                </img>
            </div>
        </div>
        
        <div class="row">
            <h3 class="slogan wow fadeInDown" data-wow-delay="0.5s">
                SEGURIDAD en mi facturación 
                <br>
            Genera facilmente tus comprobantes fiscales digitales
                </br>
            </h3>
        </div>

        <div class="row wow fadeInDown" data-wow-delay="0.5s">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 izquierda">
                <img alt="Actualizacion COI" class="img-responsive" src="/img/precios-julio/aspelsoluciones-fac-act.png" width="400">
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
            Aspel FACTURE, El software ideal para emprendedores y profesionistas 

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
                            Facturación Electrónica  
                        </h3>
                        <p>
                        Genera CFDI y envía el comprobante a tus clientes vía correo electrónico en PDF y XML.
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
                            Nueva interfaz
                        </h3>
                         <p>
                         Se rediseño el sistema e integramos más herramientas de personalización de acuerdo a tus necesidades. 
                        </p>
                        
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
                            Útil catálogo de clientes y productos 

                        </h3>
                        <p>
                        Es más sencillo definir la información comercial y fiscal de tus comprobantes, porque agiliza la captura y minimiza errores.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div align="center" class="imagen">
                        <img alt="logo COI" class="img-responsive" height="250" src="/img/aspel-FACTURE.png" width="250">
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
                            Fácil identificación de productos
                        </h3>
                        <p>
                            Incluye un completo catálogo de productos con fotografía para facilitar su identificación.
                        </p>
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
                            Gráficas y estadísticas oportunas
                        </h3>
                        <p>
                           Incluimos gráficas y estadísticas personalizables y de fácil configuración para una mejor toma de decisiones 
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
                            Complementos del Anexo 20.
                        </h3>
                        <p>
                           Emite comprobantes con complementos fiscales como: notarios, donatarias, pago en especie, compra-venta de divisa y leyendas fiscales.
                        </p>
                           
                        
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
                Cualquiera que sea tu profesión, giro comercial, si eres persona Física o Moral y requieres facturar
                <b>
                    Aspel FACTURe 4.0
                </b>
                es tu mejor
                <b>
                   solución.
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
                    Aspel FACTURⓔ
                </h2>
                <p>
                     Es el Sistema ideal para personas Físicas, emprendedores y profesionistas que requieren generar Comprobantes Fiscales Digitales por Internet (CFDI) de forma segura y en segundos de acuerdo con las disposiciones fiscales vigentes.
                </p>
            </div>
            <center>
                <div class="col-md-4 img-izquierda wow fadeInRight" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive" src="/img/img-landings-facture/aspelsoluciones-collage_facture.png" width="350">
                    </img>
                </div>
            </center>
        </div>

        <div class="row">
            <center>
                <div class="col-md-4 img-derecha wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive img-center" src="/img/aspel-FACTURE.png" width="250">
                    </img>
                </div>
            </center>
            <div class="col-md-8 text-right wow fadeInRight" data-wow-delay="0.5s">
                <h2>
                    Nuevo y poderoso FACTURⓔ 4.0
                </h2>
                <p class="text-justify">
                    Captura fácilmente facturas, notas de crédito, recibos de honorarios, de arrendamiento y otros comprobantes de ingreso y egreso, así como manejo de complementos. Cumple con las nuevas dispociciones fiscales correspondientes a alas reglas de validación del Anexo 20.
                </p>
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-8 text-left texto-abajo wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    ¿Que cambios trae la facturación electronica 3.3?
                </h2>
                <ul>
                                <li> 
                                Timbrado de pagos parciales
                                </li>

                                <li> 
                                17 Nuevos catálogos
                                </li>
                                <li> 
                                Nuevas reglas en la cancelación de facturas
                                </li>
                                <li>
                                Timbrado al aplicar la cobranza    
                                </li>
                                <li>
                                 Modificación de la estructura   
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
                
                <div class="col-md-4 img-izquierda wow fadeInRight" data-wow-delay="0.5s">
                    <br>
                    </br>
                    <br>
                    </br>
                    <br>
                    </br>
                    <img alt="caracteristicas coi" class="img-responsive" src="/img/img-landings-sae/inelco-logo-SAT.png" width="150">
                    </img>
                </div>
            </center>
        </div>
        <div class="row">
            <div align="right" class="boton wow fadeInDown dis-fis" data-wow-delay="0.5s">
                <br>
                <a href="/descargas/aspelsoluciones-guia-anexo20.pdf" target="_blank">
                    Conoce la guía para el anexo "20" 2017
                </a><i aria-hidden="true" class="fa fa-file-text fa-2x"></i>
            </div>
        </div>

    </div>
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
                        <img alt="aspelsoluciones-ticket-empresarial" class="img-responsive zoomIzquierda" src="/img/img-landings-facture/presentacion/aspel-facture-soluciones-catalogo-de-clientes-2.png" width="200" />
                </div>
            </div>

            <div class="col-md-3">    
                <div class="text">
                    <h3>
                     Catálogo de clientes 
                    </h3>
                    <p>
                       Registra fácilmente a tus clientes y define la información comercial y fiscal de manera sencilla, además agilizas la captura de los Comprobantes y minimiza errores.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="img-responsive center">
                        <img alt=" " class="img-responsive zoomDerecha" src="/img/img-landings-facture/facture/inelco-aspel-facture-mas-soluciones-visor-cfdi.png"/>
                </div>
            </div>
            <div class="col-md-3">    
                <div class="text">
                    <h3>
                        Envío de CFDI por e-mail
                    </h3>
                    <p>
                       Con Aspel-FACTURⓔ puedes enviar por correo electrónico el comprobante fiscal en formato XML así como en PDF. Cuenta con un visor de comprobantes que facilita el manejo de tus CFDI. 
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
                        <img alt="nuevas funciones coi" class="img-responsive zoomIzquierda" src="/img/img-landings-facture/facture/inelco-aspel-facture-soluciones-factura-facil-rapido-fajilla.png"/>
                </div>
            </div>
            <div class="col-md-3">    
                <div class="text">
                    <h3>
                      Características
                    </h3>
                    <ul>
                        <li>Aplicación de escritorio</li>
                        <li>Monousuario</li>
                        <li>Maneja hasta 99 RFC's (c/u propia configuración)</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="img-responsive center">
                        <img alt="aspelsoluciones-perfiles" class="img-responsive zoomDerecha" src="/img/img-landings-facture/facture/inelco-aspel-facture-soluciones-catalogo-de-productos-2.png"/>
                </div>
            </div>
            <div class="col-md-3">    
                <div class="text">
                    <h3>
                         Catálogo de productos 
                    </h3>
                    <p>
                         Registra tus productos incluyendo detalles como: descripción, imagen, precio, unidad de medida, entre otros. También puedes definir impuestos por producto.  
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
                ¿Tienes alguna versión anterior de Aspel FACTURⓔ 4.0?
            </h2>
            <h1 class="text-center">
                ¡Actualízate ahora! <!--<span id="timbres-gratis"> Y obtén 200 timbres gratis</span>-->
            </h1>
        </div>
        <div class="row">
            <div class="col-md-6 form-promocion form-abajo">
                <h4 class="la-promo">
                    ¡Aprovecha la promoción hoy mismo!
                    ¡Contáctanos!
                </h4>
 
    @include('partials.formularios-landing-facture.form-actualizacion')

            
            </div>
            <div class="col-md-6 img-arriba ocultar wow bounceIn" data-wow-delay="0.5s">
                <img alt="Actualizacion FACTURE" class="img-responsive" src="/img/precios-julio/aspelsoluciones-fac-act.png" width="500">
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
                    - Licencia Aspel FACTURE 4 1 usuario / 99 empresas
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
                        </br>
                    </br>
                </br>
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
