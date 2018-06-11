@extends('templates.main')

@section('title','Lo Nuevo ESPACIO')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.espacio.banner-espacio')
<section class="secciones espacio-pages nuevo-espacio">
    <div class="container">
        <h3 class="title-h3">
            Lo nuevo
        </h3>
        <h4 class="title-h4">
            Aspel SAE Nube está dirigido a pequeñas y medianas empresas, ya sea fabricantes, comercializadoras y negocios de servicios.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Catálogo de métodos de pago con SAE
                </h5>
                <p class="p-css">
                    Todos los contribuyentes que emitan comprobantes digitales deberán incorporar al CFDI la clave correspondiente al método de pago, de acuerdo al catálogo de opciones publicado por el SAT.
                </p>
                <p class="p-css">
                    Aspel-SAE 6.0 cumple con esta obligación de forma práctica y sencilla.
                </p>
            </div>
            <div class="col-md-6 imagencontainer">
                <img alt="catalogo de metodos de pago" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/sae/inelco-catalogo_de_metodos_de_pago_con_SAE.png">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="nuevo complemento INE" class="img-responsive zoom" src="/img/productos/sae/inelco-sae-nuevo-complemento-ine.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Nuevo Complemento INE
                </h5>
                <p class="p-css">
                    Ahora al emitir el CFDI de aspirantes políticos, partidos, precandidatos, candidatos y coaliciones, entre otros, puedes generar el complemento INE que se adiciona a la factura electrónica para cumplir con esta nueva obligación fiscal.
                </p>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Conecta tus sucursales con SAE en mi propia Nube
                </h5>
                <p class="p-css">
                    Configura el servicio de Internet Information Services (IIS) en tu Servidor e interactúa con tu equipo de trabajo por medio de una Red Privada Virtual (VPN).
                </p>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        No requieres de una dirección IP pública fija o dominio.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Accede desde cualquier computadora con acceso a Internet.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Crea accesos personalizados para mayor seguridad.
                    </li>
                </ul>
                <a href="{{url('aspel-sae/soluciones#sae-en-la-nube')}}" title="SAE en mi propia nube">
                    Más información
                </a>
            </div>
            <div class="col-md-6">
                <img alt="conecta tus sucursales" class="img-responsive" src="/img/productos/sae/inelco-sae-nuevo-conecta-tus-sucursales.png">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="poliza editar datos comprobante" class="img-responsive zoom2" data-zoom-image="/img/productos/inelco-sae-poliza_editar_datos_comprobante-HD.png" src="/img/productos/sae/inelco-sae-poliza_editar_datos_comprobante.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    El mejor complemento para la Contabilidad Electrónica
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        En pólizas de ventas y devoluciones, al contabilizar los movimientos automáticamente se relacionan los folios fiscales de los CFDI, que incluye RFC emisor, RFC receptor, fecha, monto y UUID.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        También al asociar los CFDI a las pólizas de compras y devoluciones por medio del déposito de documentos, al contabilizarlos, automáticamente se enviarán los folios fiscales de los CFDI respectivos.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Facilidad en el control de los CFDI del Depósito de documentos
                </h5>
                <p class="p-css">
                    Controla y maneja tus CFDI configurando un depósito de documentos digitales por empresa, disponible al instalar únicamente el sistema Aspel-SAE para gozar de este beneficio.
                </p>
            </div>
            <div class="col-md-6">
                <img alt="facilidad de control" class="img-responsive" src="/img/productos/sae/inelco-aspel-sae-facilidad-en-el-control.png">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h5 class="title-h5">
                    Más funcionalidades con la versión 6.0 de SAE:
                </h5>
                <p class="p-css">
                    <b>
                        Punto de venta:
                    </b>
                </p>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Maneja Aspel-SAE en un punto de venta. En la recepción de pagos se clasifica el ingreso, además calcula y registra el cambio, proporcionando el reporte de corte de caja.
                    </li>
                </ul>
                <p class="p-css">
                    <b>
                        Facilidades para el timbrado y cancelación de CFDI:
                    </b>
                </p>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Timbra varias facturas simultáneamente y solicita la cancelación para un grupo de documentos.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Reporte de cancelación para un mejor control de tus documentos cancelados.
                    </li>
                </ul>
                <p class="p-css">
                    <b>
                        Generación automática y masiva de facturas:
                    </b>
                </p>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Aspel-SAE es ideal para generar automáticamente documentos parecidos, tú le indicas el modelo y el grupo de clientes y el Sistema genera automáticamente las facturas, atendiendo las características del cliente.
                    </li>
                </ul>
                <p class="p-css">
                    <b>
                        Importación de campos libres:
                    </b>
                </p>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Importa los principales catálogos y los campos libres para facilitar la puesta en marcha del Sistema.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="SAE Movil" class="img-responsive" src="/img/productos/sae/inelco-sae-movil-grafica-utilidad-de-venta.jpg">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Con SAE Móvil puedes:
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        consultar en todo momento la situación crediticia de tus clientes.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Localizar la dirección de tus clientes y ubicarlos geográficamente mediante el link a Google Maps®.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Revisar los pedidos remisionados y facturados.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Examinar los precios de los productos y sus existencias.
                    </li>
                </ul>
                <a href="{{url('aspel-sae/sae-movil')}}" title="Ir a móvil">
                    Leer más
                </a>
            </div>
        </div>
    </div>
</section>
@include('partials.botones-compra-espacio')
@include('templates.espacio.menu-espacio')
@stop

@push('add-js')

@stack('files-menu')
@endpush
