@extends('templates.landings-promociones.principal')

@section('title','Promociones')

@push('css-promocion-nuevo-noi')
    <link href="/css/landings-promociones/promocion.css" rel="stylesheet" type="text/css"/>
    <!--<link href="/css/landings-SAE/form-promocion.css" rel="stylesheet"/>-->
    {{-- IMAGEN QUE SE muestra cuando se comparte en redes sociales --}}
    <link href="https://www.aspelsoluciones.com/img/share/nuevo-sae.png" rel="image_src"/> 
    {{-- <link rel="stylesheet" href="/css/inelco/mis-estilos.css"> --}}
    <link rel="stylesheet" href="/css/inelco/products-styles.css">
    <link rel="stylesheet" href="/css/promociones/promociones-sae-coi-noi-banco.css">
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

    <div id="promo-sae-coi-noi-banco">
        <section id="promos-banner-wallpaper">
            <div class="promos-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="/images-new/inelco/promocion/sae-coi-noi-banco/logos/inelco-promocion-sae-coi-noi-banco-logo.png" alt="" class="center-block" id="scnb">
                        </div>
                        {{-- <div class="col-md-4">
                            <img src="/images-new/inelco/promocion/sae-coi-noi-banco/logos/inelco-promos-aspel-sae-coi-noi-banco-precio.png" alt="" class="img-responsive precio-banner">
                        </div>
                    </div>
                    <div class="row"> --}}
                        <div class="col-md-8">
                            <h2 class="text-center vertical-center">
                               ¡Obtén la máxima productividad de tu empresa!
                            </h2> {{-- <img src="/images-new/inelco/otros/inelco-promos-aspel-sae-banco-mayo.png" alt="" class="img-responsive precio-banner"> --}}
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
                        El control total para tu empresa
                    </h2>
                    </div>
                </div>
            </div>
        </section>
{{--         <section class="video-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 beneficios-ul">
                        <h2>{{-- <i class="fa fa-download" aria-hidden="true"></i>  -}}Cónoce los beneficios:</h2>
                        <ul>
                            <li><p><i class="fa fa-caret-right" aria-hidden="true"></i> Analiza tus Estados e información financiera con los nuevos reportes comparativos por año, periodo o presupuesto.</p></li>
                            <li><p><i class="fa fa-caret-right" aria-hidden="true"></i> Administra fácilmente los gastos corporativos y de caja chica con Ticket Empresarial ®.</li>
                            <li><p><i class="fa fa-caret-right" aria-hidden="true"></i> Controla eficientemente los ingresos, egresos y movimientos de cualquier cuenta bancaria, en moneda nacional y extranjera.</li>
                            <li><p><i class="fa fa-caret-right" aria-hidden="true"></i> A través de su interfaz con Aspel BANCO genera las pólizas correspondientes a los cargos y abonos de las cuentas bancarias. Al seleccionar un comprobante se incluye la información de los CFDI y formas de pago en automático..</li>
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
                        ¡Obtén el mayor rendimiento!
                    </h2>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="ventajas-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">
                            Interfaces Aspel
                        </h2>
                        <div class="row logos-interfaces">
                            <div class="col-md-12">
                                <p align="center">
                                    <img src="/images-new/inelco/promocion/sae-coi-noi-banco/logos/inelco-promocion-sae-coi-noi-banco-logo-sae.png" alt="" class="img-responsive">
                                    <img src="/images-new/inelco/promocion/sae-coi-noi-banco/logos/inelco-promocion-sae-coi-noi-banco-logo-coi.png" alt="" class="img-responsive">
                                    <img src="/images-new/inelco/promocion/sae-coi-noi-banco/logos/inelco-promocion-sae-coi-noi-banco-logo-noi.png" alt="" class="img-responsive">
                                    <img src="/images-new/inelco/promocion/sae-coi-noi-banco/logos/inelco-promocion-sae-coi-noi-banco-logo-banco.png" alt="" class="img-responsive">
                                </p>
                            </div>
                        </div>
                        <p align="center">
                            Obtén el mayor rendimiento de tus Sistemas Aspel al utilizar sus diferentes interfaces. Cada interfaz de nuestros Sistemas cuentan con la funcionalidad de conectarse entre sí, compartir información y actualizar las bases de datos; también para eliminar los posibles errores, evitar la duplicidad de actividades y reducir tus procesos administrativos.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/sae-coi-noi-banco/iconos/inelco-promocion-sae-coi-noi-banco-control-total.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Control total de tu Negocio</h3>
                        <p>
                            Aspel SAE te ayuda a controlar todo el ciclo de compra-venta de la empresa como: inventarios, clientes, facturación, vendedores, compras, proveedores, etc.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/sae-coi-noi-banco/iconos/inelco-promocion-sae-coi-noi-banco-contabilidad.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Contabilidad al día</h3>
                        <p>
                             Aspel COI procesa, integra y mantiene actualizada la información contable y fiscal de la empresa en todo momento.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/sae-coi-noi-banco/iconos/inelco-promocion-sae-coi-noi-banco-control-personal.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Control de personal</h3>
                        <p>
                            Administra todos los procesos de la Nómina y el capital humano. Calcula con exactitud sueldos, salarios, percepciones, deducciones, impuestos y aportaciones de seguridad social.</p>
                    </div>
                    <div class="col-md-6 text-center">  
                        <p align="center">
                            <img src="/images-new/inelco/promocion/sae-coi-noi-banco/iconos/inelco-promocion-sae-coi-noi-banco-dinero.png" alt="" class="img-responsive icon">
                        </p>
                        <h3>Control de tu dinero</h3>
                        <p>
                            Administra eficientemente los ingresos, egresos y movimientos de cualquier cuenta bancaria, en moneda nacional y extranjera.</p>
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
                            <p class="text-center"><span id="title-incluye-promo">Adquiere el kit empresarial a sólo<br><span style="font-size: 2.5em;text-align: center;">$21,615*</span></span></p>
                        </div>
                        <div class="col-sm-12 ">
                            <p><span id="title-incluye-promo">Incluye:</span></p>
                        </div>
                        <div class="col-sm-12">
                            <p><span class="glyphicon glyphicon-ok"></span> 20% descuento en cursos Aspel</p>
                        </div>
                        <div class="col-sm-12">
                            <p><span class="glyphicon glyphicon-ok"></span> 20% de descuento en póliza de asesoria y soporte</p>
                        </div>
                        <div class="col-sm-12">
                            <p><span class="glyphicon glyphicon-ok"></span> Licencia de Aspel SAE 7.0 (1 usuario/99 empresas)</p>
                        </div>
                       <div class="col-sm-12">
                            <p><span class="glyphicon glyphicon-ok"></span> Licencia de Aspel COI 8.0 (1 usuario/999 empresas)</p>
                        </div>
                       <div class="col-sm-12">
                            <p><span class="glyphicon glyphicon-ok"></span> Licencia de Aspel NOI 8.0 (1 usuario/99 empresas)</p>
                        </div>
                        <br>
                        <div class="col-sm-12 col-sm-offset-3">
                            <p><span id="title-incluye-promo">Llevate <span class="special-text">Gratis</span> :</span></p>
                        </div>
                        <div class="col-sm-12">
                            <p><span class="glyphicon glyphicon-ok"></span> Licencia de Aspel BANCO 4.0 (1 usuario/99 empresas)</p>
                        </div>                        
                        <div class="col-sm-12" style="margin-top: 28px">
                            <a href='https://survey.zohopublic.com/zs/3fCunm' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;' class="text-center center-block p-contacto-title" style="text-decoration: none" >
                                <button class="btn btn-promo btn-lg">
                                    ¡Solicitar ahora!
                                </button>
                            </a>
                        </div>
                    </div>
{{--                     <div class="col-md-6">
                        <p align="center">
                            <img src="/images-new/inelco/promocion/sae-coi-noi-banco/logos/inelco-promos-aspel-sae-coi-noi-banco-precio.png" alt="" class="img-responsive">
                        </p>
                    </div> --}}
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
                        *Terminos y condiciones: Precios en MXN + IVA. No incluye servicios. Precio de lista: Aspel SAE $10,225 MXN + IVA,  Aspel COI $5,507 MXN + IVA,  Aspel NOI $5,883 MXN + IVA,  Aspel BANCO $4,850 MXN + IVA. Promoción vigente hasta 30 de junio 2018.
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
