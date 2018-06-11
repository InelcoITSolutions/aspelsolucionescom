@extends('templates.main')


@section('title','COI')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/modal-promociones.css">
@endpush

@section('content')
@include('templates.coi.banner-coi')
@include('partials.ventana-modal-coi')
@include('partials.popup-desc-direc-coi')

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

<section class="descripcion-prod desc-coi secciones" id="mas-informacion">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>
                    Mantiene siempre bajo control la información contable y fiscal de la empresa
                </h2>
                <p>
                    <b>
                        Aspel COI 8.0
                    </b>
                    cumple con los requerimientos de la Contabilidad Electrónica de manera fácil, eficiente y oportuna de acuerdo con las disposiciones fiscales vigentes.
                </p>
                <p>
                    Procesa, integra y mantiene actualizada la información contable y fiscal de la empresa en forma segura y confiable. Cumple con las diferentes especificaciones y funciones para el manejo de la Contabilidad Electrónica, de acuerdo con las disposiciones fiscales vigentes.
                </p>
                <p>
                    Además, proporciona diversos reportes, documentos y gráficas que permiten evaluar el estado financiero de la organización. Genera oportunamente las diferentes declaraciones fiscales como las correspondientes a IVA, ISR y DIOT. Mantiene interfaz con los Sistemas Aspel y hojas de cálculo.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="inelco-ciclo aspel sae" class="img-responsive" src="/img/aspel-COI.png" width="200"/>
                </center>
            </div>
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
                                    <h1 class="text-info"> Obtén información visual con gráficas</h1>
                                    <p class="text-justify">
                                        Genera y personaliza gráficas de movimientos generados por periodos e indicadores financieros directamente en hojas de cálculo de Microsoft Excel®.
                                    </p>    

                                </div>
                            </div>
                            <div class="col-sm-6 sin-espacios">
                                <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="/img/productos/coi/lo-nuevo/graficas.png">

                            </div>

                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <br>
                                <div class="alert alert">
                                    <h1 class="text-info">Control de gastos corporativo</h1>
                                    <p class="color-parrafos">
                                        Utiliza la herramienta Ticket Empresarial® desde cualquier lugar, y ahorra tiempo en la comprobación de gastos. Además obtén el CFDI para contabilizarlo en línea.

                                    </div>

                                </div>
                                <div class="col-sm-6 sin-espacios">
                                    <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:Second slide" alt="Second slide" src="/img/productos/coi/lo-nuevo/aspel-coi-8-mas-soluciones-ticket-empresarial.png">

                                </div>
                            </div>
                            <div class="item active">
                                <div class="col-sm-6">
                                    <br>
                                    <div class="alert alert">
                                        <h1 class="text-info">Útiles reportes comparativos</h1>
                                        <p class="color-parrafos">

                                            Te ofrecemos más opciones para analizar los saldos de tu empresa, al mostrar los resultados de estados financieros de forma anual o por periodo y contra presupuestos.

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 sin-espacios">
                                    <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:Third slide" alt="Third slide" src="/img/productos/coi/lo-nuevo/Utiles-reportes-comparativos.jpg">

                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>

                </div>
            </section>
            <section class="word-frase sections " id="frase-coi">
                <div class="fondo-gray">
                    <div class="container">
                        <h2>
                            Aspel COI
                        </h2>
                        <h3>
                            <p>
                                "El brazo derecho del Contador"
                            </p>
                        </h3>
                    </div>
                </div>
            </section>
            <section class="ac_content ">
                <div class="ac_content-wrapper notpadding ">
                    <div class="ac_cols-wrapper cf" id="tour">
                        <div class="ac_col twelve nopadding secciones">
                            <h3>
                                Observa las operaciones que puedes llevar a cabo
                                <h3>
                                </h3>
                            </h3>
                        </div>
                    </div>
                    <div class="ac_home-tour" style="height: 550.984px;">
                        @include('partials.slider-coi')
                    </div>
                </div>
            </section>
            <hr id="lap-separator"/>
            <section class="caracteristicas-prod coi secciones">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <center>
                                <img alt="inelco-aspel-coi-mantiene-la-contabilidad-al-dia" src="/img/productos/coi/inelco-aspel-coi-mantiene-la-contabilidad-al-dia.png"/>
                            </center>
                            <h3>
                                Contabilidad actualizada
                            </h3>
                            <p>
                                Mantiene la contabilidad al día mediante la automatización en el registro contable.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <center>
                                <img alt="contabilidad electrónica" src="/img/productos/coi/inelco-aspel-coi-conoce-la-situacion-financiera.png"/>
                            </center>
                            <h3>
                                Estatus financiero en tiempo real
                            </h3>
                            <p>
                                Conoce en cualquier momento la situación financiera de tu empresa por medio de las diferentes consultas y reportes que el Sistema ofrece automáticamente.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <center>
                                <img alt="inelco-aspel-coi-contabilidad-electronica" src="/img/productos/coi/inelco-aspel-coi-contabilidad-electronica.png"/>
                            </center>
                            <h3>
                                Contabilidad Electrónica
                            </h3>
                            <p>
                                Cumple con las nuevas disposiciones fiscales para el manejo de la Contabilidad Electrónica de la manera más simple.
                                <ul>
                                    <li style=" font-size: 1em; margin-top: -3em;">
                                        <i aria-hidden="true" class="fa fa-angle-right">
                                        </i>
                                        Relaciona automáticamente el folio fiscal de los Comprobantes Fiscales Digitales por Internet (CFDI) a los asientos contables. Además genera los archivos XML requeridos por la autoridad con un solo clic.
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <center>
                                <img alt="inelco-aspel-coi-gastos-impuestos-presupuestos" src="/img/productos/coi/inelco-aspel-coi-gastos-impuestos-presupuestos.png"/>
                            </center>
                            <h3>
                                Riguroso control de los recursos
                            </h3>
                            <p>
                                Controla los gastos, ingresos y presupuestos de cada entidad, en diferentes monedas, permitiendo también un riguroso y eficaz control de los recursos.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <center>
                                <img alt="inelco-aspel-coi-declaraciones-fiscales" src="/img/productos/coi/inelco-aspel-coi-declaraciones-fiscales.png"/>
                            </center>
                            <h3>
                                Declaraciones fiscales e informativas
                            </h3>
                            <p>
                                Crea las Declaraciones de tu empresa de manera más fácil y en cualquier momento:
                                <ul style=" font-size: 1em; margin-top: -3em;">
                                    <li>
                                        <i aria-hidden="true" class="fa fa-angle-right">
                                        </i>
                                        La Declaración Informativa de Operaciones con Terceros (DIOT) lista para la carga batch.
                                    </li>
                                    <li>
                                        <i aria-hidden="true" class="fa fa-angle-right">
                                        </i>
                                        La Declaración mensual de IVA e ISR, entre otras.
                                    </li>
                                    <li>
                                        <i aria-hidden="true" class="fa fa-angle-right">
                                        </i>
                                        La Declaración anual de personas Físicas y Morales.
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <center>
                                <img alt="inelco-aspel-coi-integracion" src="/img/productos/coi/inelco-aspel-coi-integracion.png"/>
                            </center>
                            <h3>
                                Integración de los procesos de la empresa
                            </h3>
                            <p>
                                Intercambia información con los Sistemas:
                                <a href="{{url('aspel-sae')}}">
                                    Aspel-SAE
                                </a>
                                ,
                                <a href="{{url('aspel-noi')}}">
                                    Aspel-NOI
                                </a>
                                ,
                                <a href="{{url('aspel-caja')}}">
                                    Aspel-CAJA
                                </a>
                                y
                                <a href="{{url('aspel-banco')}}">
                                    Aspel-BANCO
                                </a>
                                .
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            @include('partials.botones-compra-coi')


            @endsection

            @push('add-js')

<script>
    $("#myModalPromo").modal("show");
    window.setTimeout(function(){
     $('#myModalPromo').modal('hide');
  }, 10000); 


    $(document).ready(function() {
     if($(window).width() > 697) {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup.png");
     } else {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup-mobile.png");
     }
    }); 
</script>
            <script src="/js/jquery.slides.js">
            </script>
            <script src="/js/home.js">
            </script>
            <script src="/js/global.js">
            </script>
            <script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>

            @stack('files-menu')
            @endpush
