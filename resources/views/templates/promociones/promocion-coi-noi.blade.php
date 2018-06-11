@extends('templates.landings-promociones.principal')

@section('title','Promociones')

@push('css-promocion-nuevo-noi')
    <link href="/css/landings-promociones/promocion.css" rel="stylesheet" type="text/css"/>
    <!--<link href="/css/landings-SAE/form-promocion.css" rel="stylesheet"/>-->
    {{-- IMAGEN QUE SE muestra cuando se comparte en redes sociales --}}
    <link href="https://www.aspelsoluciones.com/img/share/nuevo-sae.png" rel="image_src"/> 
    {{-- <link rel="stylesheet" href="/css/inelco/mis-estilos.css"> --}}
    <link rel="stylesheet" href="/css/inelco/products-styles.css">
    <link rel="stylesheet" href="/css/promociones/promociones-coi-noi.css">
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

    <div id="promo-coi-noi">
        <section id="promos-banner-wallpaper">
            <div class="promos-banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="text-center">
                                <span>Genera y contabiliza<br>las pólizas</span> de los movimientos de la <br><span>nómina en línea</span>
                            </h2> {{-- <img src="/images-new/inelco/otros/inelco-promos-aspel-sae-banco-mayo.png" alt="" class="img-responsive precio-banner"> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/images-new/inelco/promocion/coi-noi/logos/inelco-promocion-coi-noi-logo.png" alt="" class="center-block">
                        </div>
                        <div class="col-md-6 col-md-offset-2">
                            <img src="/images-new/inelco/promocion/coi-noi/logos/inelco-promos-aspel-coi-noi-precio.png" alt="" class="img-responsive precio-banner">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="separador-primario">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">
                        Excelencia en el manejo de capital humano
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
                            <li><p><i class="fa fa-caret-right" aria-hidden="true"></i> Analiza tus Estados e información financiera con los nuevos reportes comparativos por año, periodo o presupuesto.</p></li>
                            <li><p><i class="fa fa-caret-right" aria-hidden="true"></i> Administra fácilmente los gastos corporativos y de caja chica con Ticket Empresarial ®.</li>
                            <li><p><i class="fa fa-caret-right" aria-hidden="true"></i> Calcula con precisión sueldos, salarios, percepciones, deducciones, impuestos y aportaciones de seguridad social.</li>
                            <li><p><i class="fa fa-caret-right" aria-hidden="true"></i> A través de su interfaz con Aspel BANCO envía los datos a los registros financieros de la empresa, y con Aspel COI integra el pago de la Nómina a la Contabilidad.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="video-colum">
                            <video width="560" height="315" controls>
                                <source src="video/inelco-promocion-coi.mp4" type="video/mp4"> Tu navegador no soporta el nuevo formato de video para HTML5.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="separador-secundario">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">
                        ¡Mejora la productividad de tu empresa!
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
                            <img src="/images-new/inelco/promocion/coi-noi/iconos/inelco-promocion-coi-noi-contabilidad.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Contabilidad al día</h3>
                        <p>
                            Aspel COI: procesa, integra y mantiene actualizada la información contable y fiscal de la empresa en todo momento.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/coi-noi/iconos/inelco-promocion-coi-noi-optimizacion.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Optimiza el tiempo de captura</h3>
                        <p>
                            Con ayuda de pólizas dinámicas, integra los datos de tus comprobantes en segundos.
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/coi-noi/iconos/inelco-promocion-coi-noi-sat.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Descargas SAT</h3>
                        <p>
                            Con esta poderosa herramienta obtén tus comprobantes fiscales desde el portal de la autoridad fiscal e intégralos fácilmente a tu Contabilidad.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/coi-noi/iconos/inelco-promocion-coi-noi-control-personal.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Control de personal</h3>
                        <p>
                            Administra todos los procesos de la Nómina y el capital humano. Calcula con exactitud sueldos, salarios, percepciones, deducciones, impuestos y aportaciones de seguridad social. </p>
                    </div>
                    <div class="col-md-4 text-center">  
                        <p align="center">
                            <img src="/images-new/inelco/promocion/coi-noi/iconos/inelco-promocion-coi-noi-nomina-digital.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Nómina Digital</h3>
                        <p>
                            Genera Comprobantes Fiscales Digitales por Internet (CFDI) versión 3.3 de los recibos de pago de Nómina y envíalos por correo.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/coi-noi/iconos/inelco-promocion-coi-noi-prima-vacacional.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Asegura el pago de la Prima Vacacional</h3>
                        <p>
                            Visualiza el desglose del pago de vacaciones en el recibo de los trabajadores.</p>
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
                            <p><span id="title-incluye-promo">El combo Aspel COI + Aspel NOI incluye:</span></p>
                        </div>
                        <div class="col-sm-12">
                            <p><span class="glyphicon glyphicon-ok"></span> Licencia de Aspel COI 8.0 (1 usuario/999 empresas)</p>
                        </div>
                        <div class="col-sm-12">
                            <p><span class="glyphicon glyphicon-ok"></span> Licencia de Aspel NOI 8.0 (1 usuario/99 empresas)</p>
                        </div>
                        <div class="col-sm-12">
                            <p><span class="glyphicon glyphicon-ok"></span> 20% de descuento en curso Aspel COI y Aspel NOI</p>
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
                            <img src="/images-new/inelco/promocion/coi-noi/logos/inelco-promos-aspel-coi-noi-precio.png" alt="" class="img-responsive">
                        </p>
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
                        *Terminos y condiciones: Precios en MXN + IVA. No incluye servicios. Precio de lista: $11,390 MXN + IVA. Promoción vigente hasta 30 de junio 2018.
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
