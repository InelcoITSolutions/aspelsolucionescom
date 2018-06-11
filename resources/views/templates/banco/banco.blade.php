@extends('templates.main')

@section('title','BANCO')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/modal-promociones.css">
@endpush

@section('content')
@include('templates.banco.banner-banco')
@include('partials.ventana-modal-banco')
@include('partials.popup-desc-direc-banco')

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

<section class="descripcion-prod desc-banco secciones" id="mas-informacion">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>
                    Tienes el control de tus cuentas y flujo de efectivo en cualquier momento
                </h2>
                <p>
                    <b>
                        Aspel-BANCO 4.0
                    </b>
                    Controla eficientemente los ingresos, egresos y movimientos de cualquier cuenta bancaria, en moneda nacional y extranjera. Ofrece información financiera en todo momento como estados de cuenta, diarios de bancos y flujo de efectivo. Todos los movimientos bancarios se contabilizan automáticamente en su interfaz con Aspel-COI, atendiendo los requisitos de la Contabilidad Electrónica. Además, permite la programación de movimientos periódicos, así como una eficiente conciliación de las operaciones bancarias.
                </p>
                <p>
                    Para una mayor eficiencia administrativa e integridad de la información con Aspel-SAE ofrece la afectación simultánea de las cuentas por cobrar y/o por pagar al registrar los movimientos bancarios y con Aspel-NOI posibilita la generación automática de los cheques para el pago de nómina.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="inelco-ciclo aspel sae" class="img-responsive" src="/img/aspel-BANCO.png" width="250"/>
                </center>
            </div>
        </div>
    </div>
</section>
<section class="word-frase sections " id="frase-banco">
    <div class="fondo-gray">
        <div class="container">
            <h2 class="title-h2">
                Te presentamos Aspel BANCO
            </h2>
            <h3>
                <i>
                    "Tu dinero bajo control"
                </i>
            </h3>
        </div>
    </div>
</section>
<section class="ac_content ">
    <div class="ac_content-wrapper notpadding ">
        <div class="ac_cols-wrapper cf" id="tour">
            <div class="ac_col twelve nopadding secciones">
                <h3 class="title-h3">
                    Observa las operaciones que puedes llevar a cabo
                </h3>
            </div>
        </div>
        <div class="ac_home-tour" style="height: 550.984px;">
            @include('partials.slider-banco')
        </div>
    </div>
</section>
<hr id="lap-separator"/>
<section class="caracteristicas-prod banco secciones">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <center>
                    <img alt="moneda nacional y extranjera" src="/img/productos/banco/inelco-aspel-productos-banco-maneja-cuentas-en-moneda-nacional-y-extranjera.png"/>
                </center>
                <h3>
                    Multimoneda
                </h3>
                <p>
                    Manejo de cuentas y saldos en moneda nacional y extranjera.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="movimientos periódicos" src="/img/productos/banco/inelco-aspel-productos-banco-programa-movimientos-periodicos.png"/>
                </center>
                <h3>
                    Gestiona movimientos más fácil
                </h3>
                <p>
                    Programa movimientos periódicos como el pago de renta y servicios.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="conciliación bancaria" src="/img/productos/banco/inelco-aspel-productos-banco-conciliacion-bancaria.png"/>
                </center>
                <h3>
                    Conciliación bancaria
                </h3>
                <p>
                    Genera conciliaciones bancarias automáticas con las principales instituciones financieras.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <center>
                    <img alt="contabilizacion en linea" src="/img/productos/banco/inelco-aspel-productos-banco-contabilizacion-en-linea.png"/>
                </center>
                <h3>
                    Contabilidad Electrónica
                </h3>
                <p>
                    Contabiliza en línea operaciones bancarias atendiendo los requisitos de la Contabilidad Electrónica. Administra la información de la forma de pago y asociación automática de folios fiscales, en el caso de movimientos con interfaz SAE.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="operaciones financieras" src="/img/productos/banco/inelco-aspel-productos-banco-consulta-en-cualquier-momento-tus-operaciones-financieras.png"/>
                </center>
                <h3>
                    Control de las cuentas y flujo de efectivo
                </h3>
                <p>
                    Ofrece información financiera precisa del estado de cuenta y diario de bancos en cualquier momento.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="integracion de procesos" src="/img/productos/banco/inelco-aspel-productos-banco-integracion-procesos-empresa.png"/>
                </center>
                <h3>
                    Tu dinero bajo control
                </h3>
                <p>
                    Integra todos los procesos administrativos de tu empresa. ¡Al hacer un cheque, saldas la cuentas por pagar y se genera la póliza de egresos automáticamente!
                </p>
            </div>
        </div>
    </div>
</section>
@include('partials.botones-compra-banco')
@include('templates.banco.menu-banco')

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
