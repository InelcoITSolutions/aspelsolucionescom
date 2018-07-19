@extends('templates.landings-promociones.principal-sae-banco')

@section('title','Promociones')

@push('css-promocion-nuevo-noi')
    {{-- CSS --}}
    <link href="/css/landings-promociones/promocion.css" rel="stylesheet" type="text/css"/>
    <!--<link href="/css/landings-SAE/form-promocion.css" rel="stylesheet"/>-->
    {{-- <link rel="stylesheet" href="/css/inelco/mis-estilos.css"> --}}
    <link rel="stylesheet" href="/css/inelco/products-styles.css">
        <link rel="stylesheet" href="/css/promociones/promociones-sae-banco.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet"> 
    {{--estilos para landing de la presentacion del nuevo noi--}}
    @stack('css-presentacion-nuevo-noi')
    {{--estilos para landing de la promocion del nuevo noi--}}
    @stack('css-promocion-nuevo-noi')
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

    <div id="promo-sae-banco">
        <section class="promos-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="text-center">
                        El máximo control de tus <span>movimientos bancarios</span> y <span>procesos administrativos</span>
                    </h2> {{-- <img src="/images-new/inelco/otros/inelco-promos-aspel-sae-banco-mayo.png" alt="" class="img-responsive precio-banner"> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="/images-new/inelco/promocion/sae-banco/logos/inelco-promocion-aspel-sae-banco-logo.png" alt="" class="center-block">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <img src="/images-new/inelco/promocion/sae-banco/logos/inelco-promocion-aspel-sae-banco-precio.png" alt="" class="img-responsive precio-banner">
                    </div>
                </div>
            </div>
        </section>
        <section class="separador-verde">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">
                        Consolida los procesos de tu empresa
                    </h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="video-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 beneficios-ul">
                        <h2>{{-- <i class="fa fa-download" aria-hidden="true"></i>  --}}Cónoce los beneficios:</h2>
                        <ul>
                            <li><p><i class="fa fa-caret-right" aria-hidden="true"></i> Genera automáticamente los cargos o los cheques programados para el pago a proveedores.</p></li>
                            <li><p><i class="fa fa-caret-right" aria-hidden="true"></i> Actualiza en línea los saldos de todas las operaciones de cuentas por cobrar y por pagar.</li>
                            <li><p><i class="fa fa-caret-right" aria-hidden="true"></i> Registra en un solo paso anticipos de clientes o proveedores mediante la captura masiva.</li>
                            <li><p><i class="fa fa-caret-right" aria-hidden="true"></i> Lleva el control de los tipos de cambio al elegir la moneda a utilizar por cuenta bancaria y movimiento.</li>
                            <li><p><i class="fa fa-caret-right" aria-hidden="true"></i> Asocia y consulta cualquier archivo por cada operación incluyendo comprobantes fiscales digitales CFDI 3.3.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="video-colum">
                            <video width="560" height="315" controls>
                                <source src="video/inelco-promocion-sae-banco.mp4" type="video/mp4"> Tu navegador no soporta el nuevo formato de video para HTML5.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="separador-rojo">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">
                        ¡Haz que tu empresa sea más productiva!
                    </h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="ventajas-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/sae-banco/iconos/inelco-promocion-sae-banco-control-total.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Control total de tu Negocio</h3>
                        <p>
                            Aspel SAE te ayuda a controlar todo el ciclo de compra-venta de la empresa como: inventarios, clientes, facturación, vendedores, compras, proveedores, etc.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/sae-banco/iconos/inelco-promocion-sae-banco-inventario.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Conoce tu inventario como la palma de tu mano</h3>
                        <p>
                            Visualiza en todo momento qué productos son los más rentables para tu empresa.
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/sae-banco/iconos/inelco-promocion-sae-banco-tiempo.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Ahorro de tiempo administrativo</h3>
                        <p>
                            Registra en un solo paso los anticipos generados mediante la captura masiva de movimientos.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/sae-banco/iconos/inelco-promocion-sae-banco-cuentas.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Cuentas claras</h3>
                        <p>
                            Lleva un oportuno seguimiento de las cuentas por cobrar y por pagar de tu empresa.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/sae-banco/iconos/inelco-promocion-sae-banco-control-dinero.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Control de tu dinero</h3>
                        <p>
                            Administra eficientemente los ingresos, egresos y movimientos de cualquier cuenta bancaria, en moneda nacional y extranjera.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/sae-banco/iconos/inelco-promocion-sae-banco-conciliacion.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Conciliación bancaria al instante</h3>
                        <p>
                            Ten una visión más clara del flujo de efectivo y movimientos que se realizan en tu empresa.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="promo-contacto">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Déjanos tus datos y te contactaremos</h3>
                    </div>
                </div>
                <div class="row">
                    {{--
                    <div class="col-md-6">
                        <form class="form-horizontal">
                            <fieldset>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Nombre: </label>
                                    <div class="col-md-6">
                                        <input id="textinput" name="textinput" placeholder="Ingresa tu nombre completo" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Correo electrónico: </label>
                                    <div class="col-md-6">
                                        <input id="textinput" name="textinput" placeholder="Ingresa tu correo electrónico" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Teléfono: </label>
                                    <div class="col-md-6">
                                        <input id="textinput" name="textinput" placeholder="Ingresa tu teléfono a 10 dígitos" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <!-- Multiple Radios -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="radios">Promoción: </label>
                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label for="radios-0">
                                                <input name="radios" id="radios-0" value="1" checked="checked" type="radio"> Combo SAE+BANCO
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="radios-1">
                                                <input name="radios" id="radios-1" value="2" type="radio"> Sólo BANCO
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textarea">Mensaje: </label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" id="textarea" name="textarea"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div> --}}
                    <div class="col-md-6 incluye-promo">
                        <div class="col-sm-12 ">
                            <p><span id="title-incluye-promo">El combo Aspel SAE+ Aspel BANCO incluye:</span></p>
                        </div>
                        <div class="col-sm-12">
                            <p><span class="glyphicon glyphicon-ok"></span> Licencia de Aspel SAE 7.0 (1 usuario/99 empresas)</p>
                        </div>
                        <div class="col-sm-12">
                            <p><span class="glyphicon glyphicon-ok"></span> Licencia de Aspel BANCO 4.0 (1 usuario/99 empresas)</p>
                        </div>
                        <div class="col-sm-12">
                            <p><span class="glyphicon glyphicon-ok"></span> 20% de descuento en curso Aspel SAE y Aspel BANCO</p>
                        </div>
                        <div class="col-sm-12">
                            <p><span class="glyphicon glyphicon-ok"></span> 20% de descuento en póliza de asesoria y soporte</p>
                        </div>
                        <div class="col-sm-12" style="margin-top: 28px">
                            <a href='https://survey.zohopublic.com/zs/3fCunm' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;' class="text-center center-block p-contacto-title" style="text-decoration: none" >
                                <button class="btn btn-promo btn-lg">
                                    ¡Solicitar ahora!
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/sae-banco/logos/inelco-promocion-aspel-sae-banco-precio.png" alt="" class="img-responsive">
                        </p>
                    </div>
                </div>
                <div class="promo-25">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="text-center">¿Ya tienes Aspel SAE?<br>¡Entonces aprovecha Aspel BANCO con 25% de descuento!</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
{{--                             <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/lIB5ob" target="_blank" class="text-center center-block p-contacto-title">
                                <button class="btn btn-inelco btn-lg">
                                    Contratar ahora
                                </button>
                            </a> --}}
                            <a href='https://survey.zohopublic.com/zs/3fCunm' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;' class="text-center center-block p-contacto-title" style="text-decoration: none" >
                                <button class="btn btn-promo btn-lg">
                                    ¡Solicitar ahora!
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                {{--
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa icon-download4"></i> Descargar
                            </button>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-md-5">
                    <p id="terminos">
                        *Terminos y condiciones: Precios en MXN + IVA. No incluye servicios. Precio de lista: $15,075 MXN + IVA. Promoción vigente hasta el 31 de julio 2018.
                    </p>
                </div>
            </div>
        </section>
    </div>

         <script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>
<script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"9f9e70d185f4d218e80feae15380fbd8b58e031ab6b34c3a879ef3dfeafec28b40a65cf3953078af9fd0897ab113022a", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
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
