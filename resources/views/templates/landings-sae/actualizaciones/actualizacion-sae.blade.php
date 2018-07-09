@extends('templates.landings-sae.principal')
@section('title','Actualización Aspel SAE 7.0')
@push('css-promocion-nuevo-noi')

<link href="/css/landings-SAE/promocion-sae.css" rel="stylesheet" type="text/css"/>
<link href="/css/landings-SAE/form-promocion.css" rel="stylesheet"/>
<link rel="stylesheet" href="/css/inelco/products-styles.css">
<!--IMAGEN QUE SE muestra cuando se comparte en redes sociales -->
<link href="https://www.aspelsoluciones.com/img/share/actu-sae.png" rel="image_src"/>
<link rel="stylesheet" href="/css/modal-promociones.css">


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

        <div id="myModalPromo" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="font-size:1.7em;color:red;opacity: 1;"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
                        {{--
                        <h4 class="modal-title">¡Descarga exitosa!</h4> --}}
                    </div>
                    <div class="modal-body">
                        <a href="{{ url('/promociones') }}" target="_blank">
                                        <img src="/images-new/inelco/promocion/banner/promocion-popup.png" class="img-responsive img-promocion" alt="prom">
                                    </a>
                    </div>
{{--                    <div class="modal-footer">
                        <div class="col-md-2 col-md-offset-5 col-xs-2 col-xs-offset-3">
                            <a class="btn btn-inelco" href="https://inelco.mx/promociones" target="_blank">Ver promoción</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

<section class="secciones-noi" id="inicio-aspel-noi">
    <div class="container">
        <div align="right" class="logo">
            <img alt="Logo Aspel Soluciones" class="img-responsive" src="/img/logo-aspelsoluciones-blanco.png" width="220" />
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
                El Sistema Administrativo Empresarial más utilizado 
                <br>
                en México y el único que pone en control total a tu negocio.
                </br>
            </h3>
        </div>

        <div class="row wow fadeInDown" data-wow-delay="0.5s">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 izquierda">
                <img alt="Actualizacion COI" class="img-responsive" src="/img/precios-julio/aspelsoluciones-sae-sus.png" width="400">
                </img>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 boton-espacio">
                <div align="right" class="boton wow fadeInDown" data-wow-delay="0.5s">
                    <a class="button-adquierelo large radius goContrata ancla2" href="#contratar-sae" style="text-decoration: none">
                        ¡Adquirir ahora!
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="secciones-noi par-nuevo" id="lo-nuevo">
    <div class="container">
        <h3 class="text-center titulo-uno wow bounceInLeft" data-wow-delay="0.5s">
            Aspel SAE. El éxito necesita administrarse.
        </h3>
        <h1 class="titulo-dos texto-degradado wow bounceInRight" data-wow-delay="0.5s">
            ¡EVOLUCIONA!
        </h1>

        <div class="logo-producto">
            <img alt="Logo Aspel SAE" class="center-block fadeInDown" data-wow-delay="0.5s" src="/images-new/marcas/aspel/productos/sae/logos/inelco-aspel-sae-logo.png"  style="width: 200px;height: 200px;">
                </img>
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
                            Control total de tu empresa
                        </h3>
                        <p>
                        El ciclo de compra-venta está cubierto,
                        <br>
                        desde el registro del producto
                        <br>
                        hasta la <span style="font-weight: 600">Facturación Electrónica v3.3</span>,
                        <br>
                        lista para ser entregada al cliente.
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
                            SAE Móvil
                        </h3>
                         <p>
                         Levanta pedidos, da de alta clientes, consulta los inventarios y sus existencias, en el momento y en el lugar en el que te encuentres.
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
                            Conoce mejor a tu cliente
                        </h3>
                        <p>
                        Controla saldos, pedidos pendientes,
                        <br>
                        productos apartados, estados de cuenta,
                        <br>
                        antigüedad de saldos, sus productos,
                        <br>
                        ventas mensuales y citas programadas.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div align="center" class="imagen">
                        <img alt="Logo Aspel-SAE" class="img-responsive" style="width: 250px;height: 250px;" src="/images-new/marcas/aspel/productos/sae/logos/inelco-aspel-sae-logo.png">
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
                            Contabilidad Electrónica
                        </h3>
                        <p>
                            Cumple fácilmente los requisitos de la <span style="font-weight: 600">Contabilidad Electrónica v1.3</span>, al realizar la interfaz con Aspel COI.
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
                            Administración como<br>
                            punto de Venta
                        </h3>
                        <p>
                            Controla eficientemente un punto de venta, te proporciona el corte de caja y una novedosa opción para facturar las notas de venta desde un sitio web.
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
                            Interfaces Sistemas Aspel
                        </h3>
                        <p>
                        Aprovecha todas las interfaces y haz mejores negocios.
                        <br/>
                        Aspel SAE tiene interfaz con los Sistemas: 
                        <span id="int-coi">Aspel COI</span>,
                        <span id="int-banco">Aspel BANCO</span>,
                        <span id="int-prod">Aspel PROD</span> y 
                        <span id="int-caja">Aspel CAJA</span>. 
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
                El
                <b>
                    Nuevo Aspel SAE 7.0
                </b>
                mejora tu experiencia de uso
            </h2>
        </div>
    </div>
</section>


<section class="secciones-noi" id="caracteristicas">
    <div class="container">
        <div class="row espacios">
            <div class="col-md-4 wow fadeInRight" data-wow-delay="0.5s">
                <img alt="ciclo total de aspel sae" class="center-block img-responsive" src="/img/img-landings-sae/iis-collage_sae.png">
                </img>
            </div>
            <div class="col-md-8 text-left wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    Aspel SAE
                </h2>
                <p>
                    Mantén el control de todo el ciclo de las operaciones de compra-venta de la empresa, como inventarios, clientes, facturación, cuentas por cobrar, vendedores, compras, proveedores y cuentas por pagar, automatizando eficientemente los procesos administrativos.
                </p>
            </div>
        </div>
        <div class="row sat-fondo espacios">
            <div class="col-md-8 text-left wow fadeInRight" data-wow-delay="0.5s">
                <h2>
                    Emite tus CFDI con la versión 3.3
                </h2>
                <p>Cumple con los requisitos fiscales al integrar los datos correspondientes a las nuevas reglas de validación del <a href="/descargas/aspelsoluciones-guia-anexo20.pdf" target="_blank">Anexo 20</a> de la RMF vigente. Se incorpora:</p>
                {{-- <div dir="rtl"> --}}
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
                            Reglas de cálculos 
                        </li>
                        <li>
                            Entre otros 
                        </li>
                    </ul>
                {{-- </div> --}}
            </div>
            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.5s">
                <img alt="Inventario y servicios en aspel sae" class="center-block img-responsive" src="/img/img-landings-sae/inelco-logo-SAT.png" style="width: 60%;margin-top: 17%;margin-bottom: 24px">
                </img>
            </div>
        </div>
        <div class="row espacios">
            <div class="col-md-4 wow fadeInRight" data-wow-delay="0.5s">
                <img alt="cientes y cuentas por cobrar en aspel sae" class="img-responsive center-block" src="/images-new/marcas/aspel/productos/sae/otros/inelco-sae-comprobante-pago.png">
                </img>
            </div>
            <div class="col-md-8 text-left wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    Comprobante de Recepción de Pagos
                </h2>
                <p>
                    Utiliza la nueva herramienta Comprobantes de Pago ubicada en los módulos de Clientes y Ventas, para facilitar la emisión de tus CFDI
                </p>
            </div>
        </div>
        <div class="row sat-fondo espacios">
            <div class="col-md-8 text-right wow fadeInRight" data-wow-delay="0.5s">
                <h2>
                    El mejor complemento para la Contabilidad Electrónica v1.3
                </h2>
                <p>
                    En pólizas de ventas y devoluciones, al contabilizar los movimientos automáticamente se relacionan los folios fiscales de los CFDI 3.3, que incluye RFC emisor, RFC receptora, fecha, monto y UUID.
                </p>
            </div>
            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.5s">
                <img alt="Facturas en aspel sae" class="img-responsive center-block" src="/images-new/marcas/aspel/productos/sae/otros/inelco-sae-contabilidad-electronica.png">
                </img>
            </div>
        </div>
        <div class="row espacios">
            <div class="col-md-4 wow fadeInRight" data-wow-delay="0.5s">
                <img alt="ciclo total de aspel sae" class="img-responsive center-block" src="/images-new/marcas/aspel/productos/sae/otros/inelco-sae-nube.png">
                </img>
            </div>
            <div class="col-md-8 text-left wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    Administra y controla tu empresa desde cualquier lugar
                </h2>
                <p>
                    La poderosa funcionalidad y beneficios del sistema <span style="font-weight: 600;">SAE Nube</span> representa la máxima movilidad. Comparte tu información entre tus oficinas y sucursales en tiempo real, para la correcta toma de decisiones.
                </p>
            </div>
        </div>
        <div class="row sat-fondo espacios">
            <div class="col-md-8 text-right wow fadeInRight " data-wow-delay="0.5s">
                <h2>
                    SAE Móvil
                </h2>
                <p>
                    Consultar en todo momento la situación crediticia de tus clientes.  Revisar los pedidos remisionados y facturados. Examinar los precios de los productos y sus existencias..
                </p>
            </div>
            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.5s">
                <img alt="Inventario y servicios en aspel sae" class="img-responsive center-block" src="/images-new/marcas/aspel/productos/sae/otros/inelco-sae-movil.png" style="margin-top:10%">
                </img>
            </div>
        </div>
    </div>
</section>

<section class="secciones-noi" id="news-carateristicas" style="margin-top: 72px;">
    <div class="container">
        <!-- primera parte-->
        <h2 class="funciones-nuevas wow fadeInLeft" data-wow-delay="0.5s">
            Novedades
        </h2>
        <div class="ben-1">
            <div class="container wow fadeInRight espacios-min" data-wow-delay="0.5s">
                <div class="col-md-3 ">
                    <div class="img-responsive center-block">
                        <img alt="aspelsoluciones-ticket-empresarial " class="img-responsive" src="/images-new/marcas/aspel/productos/sae/otros/inelco-sae-graficas.png" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text nuevos-beneficios">
                        <h3>Consultas, estadísticas y reportes</h3>
                        <p>
                            Estadísticas de ventas, compras, productos más vendidos, clientes más importantes y periodos de mejor venta.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-responsive center-block">
                        <img alt=" " class="img-responsive" src="/images-new/marcas/aspel/productos/sae/otros/inelco-sae-nueva-experiencia.png" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text nuevos-beneficios">
                        <h3>Nueva experiencia de uso</h3>
                        <p>
                            Diseño renovado con mejoras en cada menú, iconos y temas personalizables. Menú intuitivo que integra todas las funciones relacionadas con temas de tu interés en una sola sección.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- segunda parte-->
        <span style="display: block;height: 52px"></span>
        <div class="ben-2">
            <div class="container wow fadeInLeft espacios-min" data-wow-delay="0.5s">
                <div class="col-md-3">
                    <div class="img-responsive center-block">
                        <img alt="nuevas funciones coi " class="img-responsive" src="/img/img-landings-sae/new-function/inelco-perfiles-usuario.png" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text nuevos-beneficios">
                        <h3>Módulo de perfiles</h3>
                        <p>
                            Administra los accesos al sistema e incluye la fotografía de los usuarios. ¡Protege tu información!</p>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="img-responsive center-block">
                        <img alt="aspelsoluciones-perfiles" class="img-responsive" src="/img/img-landings-sae/new-function/inelco-barra-de-busqueda.png"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text nuevos-beneficios">
                        <h3>Barra de búsqueda</h3>
                        <p>
                            Utiliza esta práctica herramienta para localizar información de tu interés y visualizarla inmediatamente sin perder tiempo</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>

<span style="display:block;margin-bottom: 128px;"></span>
<div id="contratar-sae"></div>

<section class="secciones-noi" id="adquirir">
    <div class="container">
        <div class="row titulo wow bounceIn" data-wow-delay="0.5s">
            <h2 class="text-center">
                ¿Tienes alguna versión anterior de Aspel SAE?
            </h2>
            <h2 class="text-center" style="font-weight: 600">
                ¡Actualízate ahora!
            </h2>
            <h4 class="text-center" style="font-size: 30px;color:white;margin-top: 24px">
                    ¡Aprovecha la promoción hoy mismo!
                    <br/>
                    ¡Contáctanos!
            </h4>
        </div>

        <div class="row">
            <div class="col-md-6 wow bounceIn info-actualizacion" data-wow-delay="0.5s">
                <div class="col-sm-12 ">
                    <p>La actualización incluye:</p>
                </div>
                <div class="col-sm-12">
                    <p> - Licencia de actualización Aspel SAE 7.0</p>
                </div>
                <div class="col-sm-12">
                    <p> - 1 usuario y 99 empresas</p>
                </div>
                <div class="col-sm-12">
                    <p> - Cupón de 20% en curso</p>
                </div>
                <div class="col-sm-12">
                    <p> - Cupón de 20% en póliza</p>
                </div>
                <div class="col-sm-12" style="margin-top: 28px">
                    <a class="button-actualizacion" href="https://survey.zohopublic.com/zs/nvCuRB" target="_blank">
                        ¡Solicitar cotización!
                    </a>
                </div>
            </div>
            <div class="col-md-6 ocultar wow bounceIn" data-wow-delay="0.5s">
                <img alt="Actualizacion NOI" class="img-responsive" src="/img/precios-julio/aspelsoluciones-sae-act.png" width="500" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 ocultar nota wow fadeInDown" data-wow-delay="0.5s">
                <p>
                    Terminos y condiciones: Precios en MXN + IVA. No incluye servicio de implementación. Precio por sólo un usuario. El costo por usuario adicional varia. Promoción válida sólo en julio 2018.
                </p>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"9f9e70d185f4d218e80feae15380fbd8b58e031ab6b34c3a879ef3dfeafec28b40a65cf3953078af9fd0897ab113022a", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>
<script>
    $("#myModalPromo-QUITAR").modal("show");
    window.setTimeout(function(){
     $('#myModalPromo-QUITAR').modal('hide');
  }, 10000); 


    $(document).ready(function() {
     if($(window).width() > 697) {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup.png");
     } else {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup-mobile.png");
     }
    }); 
</script>
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


@endpush
@stop
