@extends('templates.main')
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>

@section('title','SAE')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/modal-promociones.css">
@endpush

@section('content')
@include('flash::message')
@include('templates.sae.banner-sae')
@include('partials.ventana-modal-sae')
@include('partials.popup-desc-direc-sae')

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

<section class="descripcion-prod desc-sae secciones" id="mas-informacion">
    <div class="container">
        <div class="col-md-8">
            <br>
            <br>
            <h2>
                Novedades de Aspel-SAE 7.0
            </h2>
            <p class="text-justify+">
                Aspel-SAE 7.0 te brinda una integración total para cumplir con los requerimientos de la Contabilidad Electrónica. Conoce sus nuevas funciones y toma el control de tu negocio.
            </p>
        </div>
        <div class="col-md-4">
            <center>
                <img alt="inelco-ciclo aspel sae" class="img-responsive" src="/img/aspel-SAE.png" width="200"/>
            </center>
        </div>

        <div class="row">
            <div class="col-md-12">
                    <br>
                <div id="carousel-id" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner color-carrusel">
                        <div class="item">
                            <div class="col-sm-6">
                                <br>
                                <div class="alert alert">
                                    <h1 class="text-info">CFDI versión 3.3</h1>
                                    <p class="text-justify">
                                        Cumple con los requisitos fiscales al integrar los datos correspondientes a las nuevas reglas de validación del Anexo 20 de la RMF vigente. Se incorporan mejoras en la validación, incluyendo catálogos como:
                                        <ul>
                                            <li>
                                                <i aria-hidden="true" class="fa fa-angle-right">
                                                </i>
                                                Régimen fiscal
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fa fa-angle-right">
                                                </i>
                                                Uso de CFDI
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fa fa-angle-right">
                                                </i>
                                                Productos y/o servicios
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fa fa-angle-right">
                                                </i>
                                                País, Monedas, Unidades de medidas
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fa fa-angle-right">
                                                </i>
                                                Formas de pago, entre otros.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 sin-espacios">
                                    <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="/img/productos/sae/lo-nuevo/CFDI-version-33.png">

                                </div>

                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <br>
                                    <div class="alert alert">
                                        <h1 class="text-info">Perfiles de usuario</h1>
                                        <p class="color-parrafos">
                                            Administra e incluye la fotografía de las personas que tienen acceso a la información

                                        </div>

                                    </div>
                                    <div class="col-sm-6 sin-espacios">
                                        <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:Second slide" alt="Second slide" src="/img/productos/sae/lo-nuevo/perfiles-de-usuario.png">

                                    </div>
                                </div>
                                <div class="item active">
                                    <div class="col-sm-6">
                                        <br>
                                        <div class="alert alert">
                                            <h1 class="text-info">Nueva experiencia de uso</h1>
                                            <p class="color-parrafos">
                                                <ul>
                                                    <li>
                                                        <i aria-hidden="true" class="fa fa-angle-right">
                                                        </i>
                                                        Diseño renovado con mejoras en cada menú, iconos y temas personalizables.
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fa fa-angle-right">
                                                        </i>
                                                        Práctica barra de búsqueda, que localiza más rápido la información y facilita tu trabajo.
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fa fa-angle-right">
                                                        </i>
                                                        Menú intuitivo que integra todas las funciones relacionadas con temas de tu interés en una sola sección.
                                                    </li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 sin-espacios">
                                        <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:Third slide" alt="Third slide" src="/img/productos/sae/lo-nuevo/nueva-experiencia.png">

                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <h2>
                            Controla las operaciones compra-venta de tu empresa
                        </h2>
                        <p class="text-justify">
                            <b>
                                Aspel SAE 7.0
                            </b>
                            te permite controlar inventarios, clientes, facturación, cuentas por cobrar, vendedores, compras, proveedores y cuentas por pagar, automatizando eficientemente los procesos administrativos
                        </p>
                        <p class="text-justify">
                            El sistema te ofrece movilidad conectando las sucursales remotamente y por medio de dispositivos móviles. Permite el acceso a la información comercial y administrativa, brindando una integración total a tu empresa.
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <section class="word-frase sections " id="frase-sae">
            <div class="fondo-gray">
                <div class="container">
                    <h2 class="title-h2">
                        Te presentamos Aspel SAE
                    </h2>
                    <h3>
                        <p>
                            "El éxito necesita administrarse"
                        </p>
                    </h3>
                </div>
            </div>
        </section>
        <section class="ac_content">
            <div class="ac_content-wrapper notpadding ">
                <div class="ac_home-tour" style="height: 550.984px;">
                    @include('partials.slider-sae')
                </div>
            </div>
        </section>
        <hr id="lap-separator"/>
        <section class="caracteristicas-prod sae secciones">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <center>
                            <img alt="control de tu empresa" src="/img/productos/sae/inelco-aspel-sae-control-de-tu-empresa.png"/>
                        </center>
                        <h3>
                            Control total de tu empresa
                        </h3>
                        <p  class="text-justify">
                            El ciclo de compra-venta está cubierto totalmente, desde el registro del producto hasta la Factura Electrónica, lista para ser entregada al cliente.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <img alt="contabilidad electrónica" src="/img/productos/sae/inelco-aspel-coi-cont-electronica.png"/>
                        </center>
                        <h3>
                            Contabilidad electrónica más fácil
                        </h3>
                        <p class="text-justify">
                            Cumple fácilmente los requisitos de la Contabilidad Electrónica, al realizar la interfaz con Aspel-COI, en las pólizas de ventas y compras, automáticamente se relacionan los folios fiscales de los CFDI. ¡Trabaja menos con las interfaces Aspel!
                        </p>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <img alt="conoce cliente" src="/img/productos/sae/inelco-aspel-sae-conoce-cliente.png"/>
                        </center>
                        <h3>
                            Conoce mejor a tu cliente
                        </h3>
                        <p class="text-justify">
                            En una sola sección tendrás los saldos, pedidos pendientes, productos apartados, estados de cuenta, antigüedad de saldos, productos más vendidos, ventas mensuales y citas programadas, para un seguimiento sencillo.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <center>
                            <img alt="administracion del punto de venta" src="/img/productos/sae/inelco-aspel-sae-administracion-del-punto-de-venta.png"/>
                        </center>
                        <h3>
                            Administración como punto de venta
                        </h3>
                        <p class="text-justify">
                            Controla eficientemente un punto de venta, te proporciona el corte de caja y una novedosa opción para facturar las notas de venta desde un sitio web.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <img alt="app sae-movil" src="/img/productos/sae/inelco-aspel-sae-app-sae-movil.png"/>
                        </center>
                        <h3>
                            Aplicación SAE Móvil
                        </h3>
                        <p class="text-justify">
                            Levanta pedidos, da de alta clientes, consulta los inventarios y sus existencias, en el momento y en el lugar en el que te encuentres, a través de un cliente web y/o dispositivos móviles. ¡Y actualiza automáticamente Aspel-SAE 7.0 en línea!
                            <br>
                            <a href="{{url('aspel-sae/sae-movil')}}">
                                Más información
                            </a>
                        </br>
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="sae interfaces" src="/img/productos/sae/inelco-aspel-productos-sae-interfaces.png"/>
                    </center>
                    <h3>
                        Interfaces Sistemas Aspel
                    </h3>
                    <p class="text-justify">
                        Aspel-SAE 7.0 tiene interfaz con los Sistemas:
                        <a href="{{url('aspel-coi')}}">
                            Aspel-COI
                        </a>
                        ,
                        <a href="{{url('aspel-banco')}}">
                            Aspel-BANCO
                        </a>
                        ,
                        <a href="{{url('aspel-prod')}}">
                            Aspel-PROD
                        </a>
                        y
                        <a href="{{url('aspel-caja')}}">
                            Aspel-CAJA
                        </a>
                        . Aprovecha todas las interfaces y haz mejores negocios.
                    </p>
                </div>
            </div>
        </div>
    </section>
    @include('partials.botones-compra-sae')


    @endsection

    @push('add-js')
<script>
    $("#ID_PROMO_POPUP").modal("show");
    window.setTimeout(function(){
     $('#ID_PROMO_POPUP').modal('hide');
  }, 10000); 


    $(document).ready(function() {
     if($(window).width() > 697) {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup.png");
     } else {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup-mobile.png");
     }
    }); 
</script>
    @stack('files-menu')
    @endpush



    <script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>

    <script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>
