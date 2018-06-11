@extends('templates.main')

@section('title','Lo Nuevo SAE')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.noi.banner-noi')
<section class="secciones sae-pages nuevo-sae">
    <div class="container">
        <h3 class="title-h3">
            Lo Nuevo
        </h3>
        <h4 class="title-h4">
            Genera y entrega a tus trabajadores los Comprobantes Fiscales Digitales por Internet (CFDI) de los recibos de nómina y cumple en segundos con la Reforma Fiscal 2014.
        </h4>
        <div class="row">
            <div class="col-md-6 imagencontainer">
                <img alt="contabilidad-electronica-total" class="img-responsive zoom1" src="/img/productos/noi/aspel-noi-lo-nuevo-complemento-nomina.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Nuevas obligaciones de la Nómina Digital
                </h5>
                <p class="p-css">
                    A partir del 1° de enero de 2017, los Recibos de Nómina Electrónicos deben contener de manera obligatoria el complemento versión 1.2, que proporcionará información más detallada sobre el pago que los patrones realizan a los trabajadores.¡Hazlo con tiempo!
                </p>
                <p class="p-css">
                    Asegura la deducción de la Nómina en 3 pasos:
                    <ul>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            <a href="{{url('aspel-noi/pasos-deduccion-de-la-nomina')}}">
                                Registra los datos del emisor
                            </a>
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            <a href="{{url('aspel-noi/pasos-deduccion-de-la-nomina')}}">
                                Configura la Nómina
                            </a>
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            <a href="{{url('aspel-noi/pasos-deduccion-de-la-nomina')}}">
                                Agrega los datos del trabajador
                            </a>
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Fácil asociación de los CFDI a las pólizas
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Realiza en segundos el envío automático de los CFDI de tus recibos de nómina al depósito de documentos, para asociarlos a las pólizas desde la interfaz con
                        <a href="{{url('aspel-coi')}}">
                            Aspel-COI.
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 imagencontainer">
                <img alt="contabilidad-electronica-total" class="img-responsive zoom1" src="/img/productos/noi/interfaz-coi.png">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 imagencontainer">
                <img alt="contabilidad-electronica-total" class="img-responsive zoom1" src="/img/productos/noi/presentacion-noi.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Plataforma tecnológica que mejora la experiencia de uso
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Nuevo diseño con mejoras en cada menú, iconos y temas personalizados.
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
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Catálogo de métodos de pago
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Todos los contribuyentes que emitan recibos de nómina electrónicos deberán incorporar al CFDI la clave correspondiente al método de pago, de acuerdo al catálogo de opciones publicado por el SAT.
                    </li>
                </ul>
                <p class="p-css">
                    Aspel-NOI 8.0 cumple con esta obligación de forma práctica y sencilla.
                </p>
            </div>
            <div class="col-md-6 imagencontainer">
                <img alt="contabilidad-electronica-total" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/noi/metodo-pago.png">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 imagencontainer">
                <img alt="contabilidad-electronica-total" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/noi/aspel-noi-lo-nuevo-ventana-sar-infonavit.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Proyección SAR e INFONAVIT
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Ahora obtén el reporte de la proyección SAR e INFONAVIT que incluye los cambios en el cálculo de amortización del crédito.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Incluye el cálculo para determinar la amortización para "Veces de salario" y "Cuota fija".
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Y se agregó el campo “Seguro de daños de vivienda”.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Fácil identificación de CFDI
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        En las pólizas de pago de nóminas detalladas por percepciones y deducciones que se generan en Aspel-NOI, ahora puedes distinguir fácilmente los CFDI correspondientes a los recibos de los trabajadores.
                    </li>
                </ul>
            </div>
            <div class="col-md-6 imagencontainer">
                <img alt="contabilidad-electronica-total" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/noi/Envio_de_CFDI_al_deposito_con_Interfaz_con_COI_7_zoom.png">
                </img>
            </div>
        </div>
        <div class="row">
            <h5 class="title-h5">
                Conoce más funcionalidades al manejar tu nómina con NOI
            </h5>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Define en parámetros de la nómina, el concepto que aparecerá en el CFDI.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    En el CFDI de pago se visualiza la clave del banco del trabajador de acuerdo con el catálogo del SAT.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Hemos agregado una nueva plantilla para generar recibos de nómina de los trabajadores con el régimen de asimilables a salarios.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Cambia fácilmente la información de una empresa a otra (antes de realizarlo haz un respaldo de los datos).
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Migración de reportes a QR2.
                </li>
            </ul>
        </div>
    </div>
</section>
@include('partials.botones-compra-noi')
@include('templates.noi.menu-noi')
@stop

@push('add-js')

@stack('files-menu')
@endpush
