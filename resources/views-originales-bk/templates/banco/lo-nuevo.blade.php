@extends('templates.main')

@section('title','Lo Nuevo SAE')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.banco.banner-banco')
<section class="secciones sae-pages nuevo-sae">
    <div class="container">
        <h3 class="title-h3">
            Lo Nuevo
        </h3>
        <h4 class="title-h4">
            Con su versión 4.0 Aspel-BANCO controla tus cuentas bancarias al más alto nivel y cumple con los lineamientos de la Contabilidad Electrónica de la Reforma Fiscal 2014.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    La mejor solución de Contabilidad Electrónica
                </h5>
                <p class="p-css">
                    Contabiliza en línea tus operaciones bancarias atendiendo los requisitos de la Contabilidad Electrónica; información de la forma de pago y asociación automática de folios fiscales en el caso de movimientos con interfaz SAE.
                </p>
            </div>
            <div class="col-md-6 imagencontainer">
                <img alt="contabilidad-electronica-total" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/banco/inelco-aspel-banco-lo-nuevo-contabilidad-electronica-rot-03.jpg">
                </img>
            </div>
        </div>
        <div class="row">
            <h5 class="title-h5">
                Y también obtienes consultas más eficientes:
            </h5>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Consultas totalmente personalizables que te permitirán agregar, quitar, reordenar y restaurar el orden de las columnas con la información mostrada.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Agrega y maneja filtros inteligentes y permanentes en las consultas que realices.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Exporta la información en formatos TXT, XLS, HTML o XML.
                </li>
            </ul>
        </div>
        <div class="row">
            <h5 class="title-h5">
                Respaldos automáticos
            </h5>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Ahora podrás programar la generación del respaldo de tu Base de Datos o archivos de configuración.
                </li>
            </ul>
        </div>
        <div class="row">
            <h5 class="title-h5">
                Bitácora de usuarios
            </h5>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Bitácora para consultar los movimientos realizados en el Sistema por cada usuario.
                </li>
            </ul>
        </div>
        <div class="row">
            <h5 class="title-h5">
                Catálogo de beneficiarios
            </h5>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Para una mayor agilidad en la captura y mejor seguimiento en los movimientos bancarios.
                </li>
            </ul>
        </div>
        <div class="row">
            <h5 class="title-h5">
                Catálogo de Formas de Pago
            </h5>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Te permite llevar un control del tipo de operaciones de tu empresa al ser registradas en las cuentas (efectivo, cheque o transferencia).
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Mediante la consulta de movimientos, podrás identificar rápidamente aquellos movimientos que pertenecen a las formas de pago mencionadas.
                </li>
            </ul>
        </div>
    </div>
</section>
@include('partials.botones-compra-banco')
@include('templates.banco.menu-banco')
@stop

@push('add-js')

@stack('files-menu')
@endpush
