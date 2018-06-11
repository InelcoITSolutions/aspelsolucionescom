@extends('templates.main')

@section('title','Pasos para la deduccion de la Nómina')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.noi.banner-noi')
<section class="secciones sae-pages nuevo-sae">
    <div class="container">
        <h3 class="title-h3">
            Pasos para la deducción de la Nómina
        </h3>
        <div class="row">
            <h5 class="title-h5">
                1. Registra los datos del emisor
            </h5>
            <p class="p-css">
                <b>
                    Menú Configuración/Parámetros del sistema/Datos de la empresa
                </b>
            </p>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Es obligación del patrón validar que la información proporcionada de: razón social, RFC, regimén y domicilio fiscal sean correctos.
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <img alt="contabilidad-electronica-total" class="img-responsive" src="/img/productos/noi/aspel-noi-lo-nuevo-regimen-fiscal.png">
                            </img>
                        </div>
                    </div>
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    En caso de ser persona física debes capturar la CURP.
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <img alt="contabilidad-electronica-total" class="img-responsive" src="/img/productos/noi/aspel-noi-lo-nuevo-curp.png">
                            </img>
                        </div>
                    </div>
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Ingresa el código postal correspondiente en caso de tener uno o múltiples registros patronales.
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <img alt="contabilidad-electronica-total" class="img-responsive" src="/img/productos/noi/aspel-noi-lo-nuevo-registros-patronales.png">
                            </img>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="row">
            <h5 class="title-h5">
                2. Configura la Nómina
            </h5>
            <p class="p-css">
                <b>
                    Menú Herramientas/Parámetros de la nómina
                </b>
            </p>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Elije la clave que corresponda a la periodicidad de la Nómina.
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <img alt="contabilidad-electronica-total" class="img-responsive" src="/img/productos/noi/aspel-noi-lo-nuevo-configura-nomina.png">
                            </img>
                        </div>
                    </div>
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Revisa que las claves del SAT de las percepciones y deducciones sean las que corresponden.
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <img alt="contabilidad-electronica-total" class="img-responsive" src="/img/productos/noi/aspel-noi-lo-nuevo-clave-sat.png">
                            </img>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="row">
            <h5 class="title-h5">
                3. Agrega los datos del trabajador
            </h5>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Selecciona desde el catálogo de trabajadores los datos obligatorios: régimen de contratación para recibos electrónicos, entidad federativa, tipo de contrato y tipo de jornada.
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <img alt="contabilidad-electronica-total" class="img-responsive" src="/img/productos/noi/aspel-noi-lo-nuevo-datos-trabajador.png">
                            </img>
                        </div>
                    </div>
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Verifica el riesgo de puesto asignado a cada trabajador en caso de manejar registros patronales.
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <img alt="contabilidad-electronica-total" class="img-responsive" src="/img/productos/noi/aspel-noi-lo-nuevo-cambio-puesto.png">
                            </img>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="row ">
            <h3 class="text-center">
                ¡Listo, ya estás cumpliendo con las nuevas disposiciones del complemento de Nómina!
            </h3>
        </div>
    </div>
</section>
@include('partials.botones-compra-noi')
@include('templates.noi.menu-noi')
@stop
@push('add-js')

@stack('files-menu')
@endpush
