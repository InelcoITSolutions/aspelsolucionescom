@extends('templates.main')

@section('title','FACTURE')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
@include('templates.facture.banner-facture')
@include('partials.ventana-modal-facture')
@include('partials.popup-desc-direc-facture')
<section class="descripcion-prod desc-facture secciones" id="mas-informacion">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>
                    Es ideal para emprendedores y profesionistas que facturan servicios
                </h2>
                <p>
                    <b>
                        Aspel-FACTURⓔ
                    </b>
                    es el Sistema ideal para personas Físicas, emprendedores y profesionistas que requieren generar Comprobantes Fiscales Digitales por Internet (CFDI) de forma segura y en segundos de acuerdo con las disposiciones fiscales vigentes. Captura fácilmente facturas, notas de crédito, recibos de honorarios, de arrendamiento y otros comprobantes de ingreso y egreso, así como manejo de complementos. Además, emite el Comprobante Digital que ampara retenciones e información de pagos.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="Inelco Aspel facture" class="img-responsive" src="/img/aspel-FACTURE.png" width="200"/>
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
                                    <h1 class="text-info">Emite CFDI de retenciones</h1>
                                    <p class="text-justify">
                                        Genera los comprobantes digitales para registrar retenciones de impuestos y emite comprobantes de retenciones de dividendos o remanentes distribuibles, de acuerdo con la regla I.2.7.5.4 de la Segunda Resolución de Modificaciones a la Resolución Miscelánea Fiscal para 2014, publicada el 4 de julio de 2014.
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6 sin-espacios">
                                <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="/img/productos/facture/inelco-aspel-facture-lo-nuevo-cfdi-retenciones.png">

                            </div>

                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <br>
                                <div class="alert alert">
                                    <h1 class="text-info"> Útil y práctica importación de CFDI</h1>
                                    <p class="color-parrafos">
                                        Por medio de un sencillo asistente puedes agregar información a partir de un CFDI de facturas, recibos de honorarios y de arrendamiento, así como de clientes y productos.

                                    </div>

                                </div>
                                <div class="col-sm-6 sin-espacios">
                                    <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:Second slide" alt="Second slide" src="/img/productos/facture/inelco-aspel-facture-lo-nuevo-importacion.png">

                                </div>
                            </div>
                            <div class="item active">
                                <div class="col-sm-6">
                                    <br>
                                    <div class="alert alert">
                                        <h1 class="text-info">Catálogo de métodos de pago con FACTURe</h1>
                                        <p class="color-parrafos">
                                            Todos los contribuyentes que emitan comprobantes digitales deberán incorporar al CFDI la clave correspondiente al método de pago, de acuerdo al catálogo de opciones publicado por el SAT.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 sin-espacios">
                                    <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:Third slide" alt="Third slide" src="/img/productos/facture/inelco-aspel-productos-facture-lo-nuevo-metodo-de-pago.png">

                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="word-frase sections " id="frase-facture">
        <div class="fondo-gray">
            <div class="container">
                <h2 class="title-h2">
                    Te presentamos Aspel FACTURE
                </h2>
                <h3>
                    <i>
                        "Resuelve todas tus necesidades de facturación"
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
                @include('partials.slider-facture')
            </div>
        </div>
    </section>
    <hr id="lap-separator"/>
    <section class="caracteristicas-prod facture secciones">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="cfdi" src="/img/productos/facture/inelco-aspel-productos-facture-comprobantes-fiscales-digitales-por-internet.png"/>
                    </center>
                    <h3>
                        Facturación Electrónica
                    </h3>
                    <p>
                        Genera CFDI y envía el comprobante a tus clientes vía correo electrónico en PDF y XML.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="comprobantes genéricos" src="/img/productos/facture/aspel-productos-facture-interfaz.png"/>
                    </center>
                    <h3>
                        Nueva interfaz
                    </h3>
                    <p>
                        Rediseñamos el sistema e integramos más herramientas de personalización de acuerdo a tus necesidades.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="facture complementos" src="/img/productos/facture/aspel-productos-facture-terceros.png"/>
                    </center>
                    <h3>
                        Útil catálogo de clientes y productos
                    </h3>
                    <p>
                        Es más sencillo definir la información comercial y fiscal de tus comprobantes, porque agiliza la captura y minimiza errores.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="cfdi" src="/img/productos/facture/aspel-productos-facture-catalogo-productos.png"/>
                    </center>
                    <h3>
                        Fácil identificación de productos
                    </h3>
                    <p>
                        Incluye un completo catálogo de productos con fotografía para facilitar su identificación.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="comprobantes genéricos" src="/img/productos/facture/aspel-productos-facture-estadisticas-graficas.png"/>
                    </center>
                    <h3>
                        Gráficas y estadísticas oportunas
                    </h3>
                    <p>
                        Incluimos gráficas y estadísticas personalizables y de fácil configuración para una mejor toma de decisiones.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="facture complementos" src="/img/productos/facture/aspel-productos-facture-dividendos-y-remanentes.png"/>
                    </center>
                    <h3>
                        Emite complementos de retenciones
                    </h3>
                    <p>
                        Expide comprobantes digitales que amparan complementos de retención e información de pagos como: dividendos, remanentes distribuibles, pago a extranjeros, enajenación de acciones, entre otros.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="dividendos y remanentes" src="/img/productos/facture/aspel-productos-facture-complementos.png"/>
                    </center>
                    <h3>
                        Genera comprobantes fiscales
                    </h3>
                    <p>
                        Emite comprobantes con complementos fiscales como: notarios, donatarias, pago en especie, compra-venta de divisa y leyendas fiscales.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="comprobantes en dolares" src="/img/productos/facture/aspel-productos-facture-complemento-ine.png"/>
                    </center>
                    <h3>
                        Complemento INE
                    </h3>
                    <p>
                        Si tu negocio brinda servicios o vende productos para aspirantes políticos y partidos, expide este complemento.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="diversos documentos" src="/img/productos/facture/aspel-productos-facture-ieps-iva-isr.png"/>
                    </center>
                    <h3>
                        Administra diferentes impuestos
                    </h3>
                    <p>
                        Impuesto Especial Sobre Productos y Servicios (IEPS), Impuesto al Valor Agregado (IVA), retenciones del IVA y del Impuesto Sobre la Renta (ISR), impuestos locales configurables (trasladados o retenidos), como el Impuesto Sobre Hospedaje.
                    </p>
                </div>
            </div>
        </div>
    </section>
    @include('partials.botones-compra-facture')
    

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
