@extends('templates.main')

@section('title','Lo Nuevo SAE')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.sae.banner-sae')
<section class="secciones sae-pages nuevo-sae">
    <div class="container">
        <h3 class="title-h3">
            Lo nuevo
        </h3>
        <h4 class="title-h4">
            Aspel-SAE 7.0 te brinda una integración total para cumplir con los requerimientos de la Contabilidad Electrónica. Conoce sus nuevas funciones y toma el control de tu negocio.
        </h4>

        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Nueva experiencia de uso
                </h5>
              
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                       Diseño renovado con mejoras en cada menú, iconos y temas personalizables.
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
            <div class="col-md-6 imagencontainer">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
               
                <img alt="nueva experiencia de uso" 
                class="img-responsive" 
                 src="/img/productos/sae/lo-nuevo/nueva-experiencia.png">
                </img>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img alt="nuevo complemento INE" class="img-responsive zoom" src="/img/productos/sae/lo-nuevo/perfiles-de-usuario.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Perfiles de usuario
                </h5>
                <p class="p-css">
                    Administra e incluye la fotografía de las personas que tienen acceso a la información
                </p>
                
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    CFDI versión 3.3
                </h5>
                <p class="p-css">
                    Cumple con los requisitos fiscales al integrar los datos correspondientes a las nuevas reglas de validación del Anexo 20 de la RMF vigente. Se incorporan mejoras en la validación, incluyendo catálogos como:
                </p>
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
                        País
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Monedas
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Unidades de medidas
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Formas de pago, entre otros.
                    </li>
                </ul>
                
            </div>
            <div class="col-md-6">
                <img alt="CFDI Version 3.3" class="img-responsive" 
                src="/img/productos/sae/lo-nuevo/CFDI-version-33.png">
                </img>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img alt="poliza editar datos comprobante" class="img-responsive zoom2" 
                src="/img/productos/sae/lo-nuevo/complemento-para-contabilidad.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    El mejor complemento para la Contabilidad Electrónica
                </h5>
                <p class="p-css">
                    Controla y maneja tus CFDI configurando un depósito de documentos digitales por empresa, disponible al instalar únicamente el sistema Aspel-SAE para gozar de este beneficio.
                </p>
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
                <img alt="facilidad de control" class="img-responsive" 
                src="/img/productos/sae/lo-nuevo/facilidad-en-control.png">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h5 class="title-h5">
                    Más funcionalidades con la versión 7.0 de SAE:
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
@include('partials.botones-compra-sae')
@include('templates.sae.menu-sae')
@stop

@push('add-js')

@stack('files-menu')
@endpush
