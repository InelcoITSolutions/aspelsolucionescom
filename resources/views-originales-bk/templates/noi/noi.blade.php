@extends('templates.main')

@section('title','NOI')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
@include('templates.noi.banner-noi')
@include('partials.ventana-modal-noi')
@include('partials.popup-desc-direc-noi')
<section class="descripcion-prod desc-noi secciones" id="mas-informacion">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>
                    Expide y entrega los recibos de nómina digitales en menos de un segundo
                </h2>
                <p>
                    <b>
                        Aspel-NOI
                    </b>
                    Automatiza el control de los aspectos más importantes de la nómina, su fácil manejo y versatilidad ofrece un cálculo exacto de las percepciones y deducciones de los trabajadores atendiendo los requerimientos específicos de la empresa. Calcula la retención de ISR, cuotas obrero-patronales IMSS e INFONAVIT, subsidio para el empleo y previsión social, entre otros, de acuerdo con las disposiciones fiscales y laborales vigentes. Asimismo, se encuentra preparado para emitir Comprobantes Fiscales Digitales por Internet (CFDI) de los recibos de nómina, para dar cumplimiento a la Reforma Fiscal 2014.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="inelco-ciclo aspel sae" class="img-responsive" src="/img/aspel-NOI.png" width="200"/>
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
                                        <h1 class="text-info">Fácil asociación de los CFDI a las pólizas</h1>
                                        <p class="color-parrafos">
                                            Realiza en segundos el envío automático de los CFDI de tus recibos de nómina al depósito de documentos, para asociarlos a las pólizas desde la interfaz con
                                            </p>
                                        </div>

                                    </div>
                                    <div class="col-sm-6 sin-espacios">
                                        <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:Second slide" alt="Second slide" src="/img/productos/noi/interfaz-coi.png">

                                    </div>
                                </div>
                                <div class="item active">
                                    <div class="col-sm-6">
                                        <br>
                                        <div class="alert alert">
                                            <h1 class="text-info">Nuevas obligaciones de la Nómina Digital</h1>
                                            <p class="color-parrafos">
                                               A partir del 1° de enero de 2017, los Recibos de Nómina Electrónicos deben contener de manera obligatoria el complemento versión 1.2, que proporcionará información más detallada sobre el pago que los patrones realizan a los trabajadores.¡Hazlo con tiempo!

                                           </p>
                                       </div>
                                   </div>
                                   <div class="col-sm-6 sin-espacios">
                                    <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:Third slide" alt="Third slide" src="/img/productos/noi/aspel-noi-lo-nuevo-complemento-nomina.png">

                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control " href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
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
    <section class="word-frase sections " id="frase-noi">
        <div class="fondo-gray">
            <div class="container">
                <h2 class="title-h2">
                    Aspel NOI
                </h2>
                <h3>
                    <p>
                        El sistema más usado en la administración de la nómina
                        <br> y el capital humano en México.  
                    </p>
                </h3>
            </div>
        </div>
    </section>
    <section class="ac_content ">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2>
                        Observa las operaciones que puedes llevar a cabo
                    </h2>
                </div>
            </div>
            <div class="ac_home-tour" style="height: 550.984px;">
                @include('partials.slider-noi')
            </div>
        </div>
    </section>
    <hr id="lap-separator"/>
    <section class="caracteristicas-prod noi secciones">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="disposiciones fiscales" src="/img/productos/noi/aspel-productos-noi-cumplir-disposiciones-fiscales.png"/>
                    </center>
                    <h3>
                        Recibos de nómina CFDI
                    </h3>
                    <p style="margin-bottom: -1em;">
                        Genera Comprobantes Fiscales Digitales por Internet (CFDI) de los recibos de pago de nómina de los trabajadores.
                    </p>
                    <p style="margin-bottom: -1em;">
                        En un solo paso se timbran fiscalmente los recibos, asegurando así la deducción de la nómina.
                    </p>
                    <p style="margin-bottom: -1em;">
                        Modalidad de timbrado de comprobantes uno por uno y masivo.
                    </p>
                    <p style="margin-bottom: -1em;">
                        Envío de los Comprobantes Fiscales Digitales al correo electrónico de los trabajadores.
                    </p>
                    <p style="margin-bottom: -1em;">
                        Útil herramienta para la cancelación masiva de Recibos de Nómina CFDI.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="calculo de nomina" src="/img/productos/noi/aspel-productos-noi-menu-inteligente.png"/>
                    </center>
                    <h3>
                        Menú inteligente
                    </h3>
                    <p>
                        Utiliza el menú intuitivo que integra todas las funciones relacionadas con temas de tu interés en una sola sección.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="expediente del trabajador" src="/img/productos/noi/aspel-productos-noi-percepciones-deducciones.png"/>
                    </center>
                    <h3>
                        Percepciones y deducciones
                    </h3>
                    <p>
                        La consulta de percepciones y deducciones es más poderosa, incluye gráfica de acumulados y diferentes tipos de vistas.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="calculo de impuestos" src="/img/productos/noi/aspel-productos-noi-nomina-trabajador.png"/>
                    </center>
                    <h3>
                        Nómina del trabajador
                    </h3>
                    <p>
                        La administración de la nómina es más eficiente e integral con el potente panel Nómina del Trabajador.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="pago de los trabajadores" src="/img/productos/noi/inelco-aspel-noi-calculo-de-impuestos.png"/>
                    </center>
                    <h3>
                        Exacto cálculo de impuestos
                    </h3>
                    <p>
                        Realiza un fácil, correcto y automatizado cálculo de los impuestos y aportaciones de seguridad social, tanto de los trabajadores, como de la empresa.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="pago de los trabajadores" src="/img/productos/noi/inelco-aspel-noi-el-pago-de-los-trabajadores.png"/>
                    </center>
                    <h3>
                        Claridad en el pago por hora
                    </h3>
                    <p>
                        Administra el pago por hora a los trabajadores calculando debidamente faltas, vacaciones, horas extras y aportaciones de seguridad social.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="comunicacion directa con el imms" src="/img/productos/noi/inelco-aspel-noi-comunicacion-directa-con-el-imss.png"/>
                    </center>
                    <h3>
                        Movimientos afiliatorios al IMSS
                    </h3>
                    <p>
                        Establece comunicación directa con el IMSS para el envío de movimientos afiliatorios en línea.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="dispersion de la nomina" src="/img/productos/noi/aspel-productos-noi-barra-busqueda.png"/>
                    </center>
                    <h3>
                        Práctica barra de búsqueda
                    </h3>
                    <p>
                        Localiza más rápido la información y facilita tu trabajo con el nuevo buscador inteligente.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="relojes checadores" src="/img/productos/noi/aspel-productos-noi-envio-xml.png"/>
                    </center>
                    <h3>
                        Agilidad en tus procesos
                    </h3>
                    <p>
                        Realiza en segundos el envío automático del XML al depósito de documentos, para asociarlos a la contabilidad.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <center>
                        <img alt="integracion de procesos" src="/img/productos/noi/inelco-aspel-noi-integracion-procesos.png"/>
                    </center>
                    <h3>
                        Interfaz con los Sistemas Aspel
                    </h3>
                    <p>
                        Aspel-NOI tiene una interfaz con los Sistemas
                        <a href="{{url('aspel-coi')}}">
                            Aspel-COI
                        </a>
                        y
                        <a href="{{url('aspel-banco')}}">
                            Aspel-BANCO
                        </a>
                        para que los montos del pago de la nómina y registros financieros de la empresa se incorporen a la contabilidad.
                    </p>
                </div>
            </div>
        </div>
    </section>
    @include('partials.botones-compra-noi')


    @endsection

    @push('add-js')
    <script src="/js/jquery.slides.js">
    </script>
    <script src="/js/home.js">
    </script>
    <script src="/js/global.js">
    </script>
    <script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>
    @stack('files-menu')
    @endpush
