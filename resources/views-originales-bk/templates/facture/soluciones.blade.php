@extends('templates.main')

@section('title','Soluciones COI')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.facture.banner-facture')
<section class="secciones sae-pages soluciones-sae" id="factura-facil-y-rapido">
    <div class="container">
        <h2 class="title-h2">
            Conoce las soluciones de Aspel FACTURE
        </h2>
        <h3 class="title-h3">
            Factura fácil y rápido
        </h3>
        <h4 class="title-h4">
            Aspel-FACTURⓔ 4.0 resuelve las necesidades de facturación de las empresas mexicanas; basta con instalarlo para que en minutos se generen Comprobantes Fiscales con todos los requisitos.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Catálogo de clientes
                </h5>
                <p class="p-css">
                    Registra fácilmente a tus clientes y define la información comercial y fiscal de manera sencilla, además agilizas la captura de los Comprobantes y minimiza errores.
                </p>
            </div>
            <div class="col-md-6">
                <img alt="catalogo de clientes" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-multimoneda" src="/img/productos/facture/inelco-aspel-facture-soluciones-catalogo-de-clientes-2.png">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="soluciones cuentas bancarias" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-multimoneda" src="/img/productos/facture/inelco-aspel-facture-soluciones-catalogo-de-terceros-2.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Catálogo de terceros
                </h5>
                <p class="p-css">
                    Registra a los receptores de Comprobantes de retenciones e información de pagos y genera los nuevos Comprobantes Digitales que la autoridad establece para retenciones de impuestos por concepto de dividendos, remanentes distribuibles, entre otros.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Catálogo de productos
                </h5>
                <p class="p-css">
                    Registra  tus productos incluyendo detalles como: descripción, imagen, precio, unidad de medida, entre otros.
                </p>
                <p class="p-css">
                    También puedes definir impuestos por producto.
                </p>
            </div>
            <div class="col-md-6">
                <img alt="soluciones cuentas bancarias" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-multimoneda" src="/img/productos/facture/inelco-aspel-facture-soluciones-catalogo-de-productos-2.png">
                </img>
            </div>
        </div>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="complementos">
    <div class="container">
        <h3 class="title-h3">
            Complementos
        </h3>
        <h4 class="title-h4">
            Descubre los nuevos beneficios que Aspel-FACTURⓔ tiene para tu empresa.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Maneja múltiples complementos de retención:
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        01-Servicios profesionales.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        02-Regalías por derechos de autor.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        03-Autotransporte terrestre de carga.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        04-Servicios prestados por comisionistas.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        05-Arrendamiento.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        06-Enajenación de acciones.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        07-Enajenación de bienes objeto de la LIEPS, a través de mediadores, agentes, representantes, corredores, consignatarios, o distribuidores.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        08-Enajenación de bienes inmuebles consignada en escritura pública.
                    </li>
                    <li>
                        09-Enajenación de otros bienes, no consignada en escritura pública.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        10-Adquisición de desperdicios industriales.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        11-Adquisición de bienes consignados en escritura pública.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        12-Adquisición de otros bienes, no consignados en escritura pública.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        14.Dividendos o utilidades distribuidas. Este concepto de retención incluye complemento.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        18-Pagos realizados a favor de residentes en el extranjero.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        19-Enajenación de acciones u operaciones en bolsa de valores.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        25-Otro tipo de retenciones.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="retenciones" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-clientes-y-cuentas-por-cobrar-HD.png" src="/img/productos/facture/inelco-aspel-facture-soluciones-retenciones.png">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Emite comprobantes con complementos fiscales:
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Notarios.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Donatarias.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Pago en especie.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Compra-venta de divisa.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Leyendas fiscales.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Servicios parciales de construcción.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        INE.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="soluciones complementos" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-clientes-y-cuentas-por-cobrar-HD.png" src="/img/productos/facture/inelco-aspel-facture-soluciones-complementos.png">
                </img>
            </div>
        </div>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="mas-soluciones-facture">
    <div class="container">
        <h3 class="title-h3">
            Más soluciones FACTURE
        </h3>
        <h4 class="title-h4">
            Con Aspel-FACTURe emite Facturas Electrónicas para personas Físicas con actividad empresarial y personas Morales.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Envío de CFDI por e-mail
                </h5>
                <p class="p-css">
                    Con Aspel-FACTURⓔ puedes enviar por correo electrónico el comprobante fiscal en formato XML así como en PDF. Cuenta con un visor de comprobantes que facilita el manejo de tus CFDI.
                </p>
            </div>
            <div class="col-md-6">
                <img alt="visor cfdi" class="img-responsive" src="/img/productos/facture/inelco-aspel-facture-mas-soluciones-visor-cfdi.png">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="impuestos" class="img-responsive" src="/img/productos/facture/inelco-aspel-facture-mas-souciones-impuestos.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Maneja los siguientes impuestos:
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        IVA.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Retención de IVA.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Retención de ISR.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Un impuesto local configurable (trasladado o retenido), como el Impuesto Sobre Hospedaje.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <h5 class="title-h5">
                Descubre más beneficios de FACTURⓔ 4.0:
            </h5>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Emite comprobantes fiscales en pesos y dólares
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Importa fácilmente por medio de un sencillo asistente, la información de tus XML de facturas, clientes y productos.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Consulta útiles estadísticas de los movimientos generados por un periodo de tiempo determinado.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Genera reportes de facturas o comprobantes emitidos.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Permite personalizar la representación impresa de los comprobantes disponibles.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Cancela los CFDI de manera fácil y directa desde el Sistema, sin que sea necesario ir a la página de Internet del SAT para ejecutar esta operación.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Importa fácilmente información de archivos de hojas de cálculo, para generar las facturas electrónicas automáticamente, por eso es el “facturador por excelencia”.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Ahora puedes descargar de portal del SAT los CFDI generados por ti o tu negocio, e integrarlos al sistema por medio del importador de Aspel-FACTURe.
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive ">
                    <img alt="espacio aspel" class="img-responsive zoom2" data-zoom-image="/img/productos/inelco-consultas-estadisticas-reportes-HD.png" src="/img/productos/sae/inelco-espacio-aspel.png">
                    </img>
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    ⓔspacio Aspel
                </h5>
                <p class="p-css">
                    Es un servicio inteligente en la nube que te permite respaldar la base de datos de tu sistema Aspel-FACTURⓔ, así como tus CFDI. Siempre tendrás una copia confiable de tus comprobantes.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Características generales del producto
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Aplicación de escritorio.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Monousuario.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Maneja hasta 99 RFC´s cada uno con su propia configuración.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Ofrece comprobantes ya sea en pesos o dólares, a nivel estándar.*
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Para CFDI, maneja hasta 99 Certificados de Sello Digital.
                    </li>
                </ul>
                <p class="p-css">
                    Nota: Para el manejo de addendas, parcialidades, números de serie, lotes o pedimentos, descuentos y comisiones, se sugiere el uso del Sistema Aspel-SAE.
                </p>
            </div>
            <div class="col-md-6">
                <img alt="caracteristicas de aspel banco" class="img-responsive" src="/img/productos/facture/inelco-aspel-facture-soluciones-factura-facil-rapido-fajilla.png">
                </img>
            </div>
        </div>
    </div>
</section>
@include('partials.botones-compra-facture')
@include('templates.facture.menu-facture')

@endsection

@push('add-js')
    
    @stack('files-menu')
@endpush
