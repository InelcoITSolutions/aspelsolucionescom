@extends('templates.main')

@section('title','Lo Nuevo SAE')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.adm.banner-adm')
<section class="secciones sae-pages nuevo-sae">
    <div class="container">
        <h3 class="title-h3">
            Lo Nuevo
        </h3>
        <h4 class="title-h4">
            Con la versión Premium de ADM obtienes todas las funciones de la versión básica, y también útiles estadísticas de ventas que te ayudan a tomar las mejores decisiones.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <img alt="lo nuevo adm version basica" class="img-responsive" src="/img/productos/adm/nomina_ine_01_zoom.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Cumple con las obligaciones fiscales
                </h5>
                <p class="p-css">
                    Te facilitamos la emisión de tus CFDI con el manejo de:
                </p>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        <b>
                            Complemento de Nómina versión 1.2:
                        </b>
                        Para todos los contribuyentes, personas físicas o morales que emitan CFDI de Nómina por concepto de salarios, asimilados a salarios y en general por la prestación de un servicio personal subordinado.*
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        <b>
                            Complemento INE:
                        </b>
                        Si brindas servicios o vendes productos para aspirantes y partidos políticos.
                    </li>
                </ul>
                <p class="p-css">
                    *Funcionalidad disponible en versión Premium
                </p>
            </div>
        </div>
        <div class="row">
            <div class="news-text">
                <div class="col-md-6 ventajas">
                    <h5 class="title-h5">
                        Catálogo de métodos de pago con ADM
                    </h5>
                    <p class="p-css">
                        Todos los contribuyentes que emitan comprobantes digitales deberán incorporar al CFDI la clave correspondiente al método de pago, de acuerdo al catálogo de opciones publicado por el SAT.
                    </p>
                    <p class="p-css">
                        ADM cumple con esta obligación de forma práctica y sencilla.
                    </p>
                </div>
                <div class="col-md-6">
                    <img alt="metodo de pago adm" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/adm/inelco-metodo-pago-facture-movil.png">
                    </img>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="lo nuevo adm version basica" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/adm/inelco-aspel-adm-lo-nuevo-version-basica.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    <b>
                        Versión BÁSICA
                    </b>
                </h5>
                <h5 class="title-h5">
                    Genera Cotizaciones
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Integramos el módulo de cotizaciones para generar el alta, cancelación y modificación del documento.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Obtén el resumen de todas tus cotizaciones.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Exporta las consultas que realices en formato PFD y Excel y envíalos por correo electrónico.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="news-text">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Fácil captura de documentos
                    </h5>
                    <p class="p-css">
                        Agiliza la captura de documentos al asociar una cotización a una factura, recibo de honorarios o recibo de arrendamiento y también vincula estos documentos hacia una nota de crédito.
                    </p>
                </div>
                <div class="col-md-6">
                    <img alt="facil captura de documentos" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/adm/inelco-aspel-adm-lo-nuevo-captura-de-documentos.png">
                    </img>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="captura de observaciones en documentos" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/adm/inelco-aspel-adm-lo-nuevo-captura-observaciones-documentos.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Captura de observaciones en documentos
                </h5>
                <p class="p-css">
                    Durante la captura de cualquier tipo de documento es posible agregar información adicional. Estará visible al emitir y consultar los documentos.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="news-text">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        <b>
                            Versión PREMIUM
                        </b>
                    </h5>
                    <h5 class="title-h5">
                        Ventas y cuentas por cobrar
                    </h5>
                    <ul>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Define por cliente el límite de crédito y días de crédito.
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Consulta en todo momento el estado de cuenta de tus clientes.
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Al generar los comprobantes puedes realizar la recepción de pagos para facilitar el seguimiento de cargos y abonos de tus clientes.
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Obtén estadísticas de ventas: mejor periodo de venta, productos más vendidos y clientes que más compraron.
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Y ten un mejor control financiero con las estadísticas de cotizaciones, compras y utilidad bruta.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="version premium adm" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/adm/inelco-aspel-adm-lo-nuevo-version-premium.png">
                    </img>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="seguimiento de ventas y gastos" class="img-responsive" src="/img/productos/adm/inelco-aspel-adm-lo-nuevo-administra-ventas-y-gastos.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Seguimiento de ventas y gastos
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Realiza el alta de los documentos de gastos y/o adquisición de productos con sólo seleccionar el CFDI que el tercero te proporcione. Con ello, Aspel ADM asociará la información correspondiente a los datos del proveedor o tercero y partidas.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Genera el resumen de compras y gastos, la exportación de la consulta en formato PDF y Excel, así como el envío por correo de los documentos registrados.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Administra el inventario de tu negocio con los reportes de existencias y costos y listas de precios, también utiliza la consulta del kárdex por producto.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="news-text">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Usuarios más seguros
                    </h5>
                    <p class="p-css">
                        Para mayor seguridad de tu información podrás crear para cada persona que tenga acceso al sistema, usuarios con sus respectivas contraseñas y perfiles.
                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="usuarios mas seguros" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/adm/inelco-aspel-adm-lo-nuevo-usuarios-seguros.png">
                    </img>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.botones-compra-adm')
@include('templates.adm.menu-adm')
@stop

@push('add-js')

@stack('files-menu')
@endpush
