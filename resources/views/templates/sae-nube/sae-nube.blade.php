@extends('templates.main')


@section('title','SAE-NUBE')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
@include('flash::message')
@include('templates.sae-nube.banner-sae-nube')
@include('partials.ventana-modal-sae')
@include('partials.popup-desc-direc-sae')
<section class="descripcion-prod desc-sae secciones" id="mas-informacion">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>
                    Administro y controlo mi empresa desde cualquier lugar
                </h2>
                <p>
                    <b>
                        Aspel SAE NUBE
                    </b>
                    comparte tu información entre oficinas y sucursales en tiempo real, para la correcta toma de decisiones. 
                </p>
                <p>
                    Administra todas las operaciones del ciclo de compra-venta de la empresa desde Centros de Datos Internacionalmente reconocidos como Amazon Web Services, vía servidores virtuales conectados a Internet.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="inelco-ciclo aspel sae" class="img-responsive" 
                    src="/img/aspel-SAE_Nube.png" width="200"/>
                </center>
            </div>
        </div>
    </div>
</section>
<section class="word-frase sections " id="frase-sae">
    <div class="fondo-gray">
        <div class="container">
            <h2 class="title-h2">
                Te presentamos Aspel SAE NUBE
            </h2>
            <h3>
                <i>
                    "La herramienta que representa máxima movilidad"
                </i>
            </h3>
        </div>
    </div>
</section>
{{-- 
<section class="ac_content ">
    <div class="ac_content-wrapper notpadding ">
        <div class="ac_home-tour" style="height: 550.984px;">
            @include('partials.slider-sae-nube')
        </div>
    </div>
</section>
--}}
<hr id="lap-separator"/>
<section class="caracteristicas-prod sae secciones">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <center>
                    <img alt="control de tu empresa" src="/img/productos/sae-nube/inelco-productos-sae-nube-movilidad.png"/>
                </center>
                <h3>
                    Movilidad
                </h3>
                <p>
                    Consulta tu información de clientes, vendedores, facturación, cuentas por cobrar y pagar desde cualquier lugar y computadora con acceso a internet.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="contabilidad electrónica" src="/img/productos/sae-nube/inelco-productos-sae-nube-alcance.png"/>
                </center>
                <h3>
                    Alcance
                </h3>
                <p>
                    Actualiza y comparte tus datos entre sucursales y oficinas. Administra inventarios y sincroniza existencias en automático.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="conoce cliente" src="/img/productos/sae-nube/inelco-productos-sae-nube-tranquilidad.png"/>
                </center>
                <h3>
                    Tranquilidad
                </h3>
                <p>
                    Siempre cuentas con el respaldo de tu información.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <center>
                    <img alt="administracion del punto de venta" src="/img/productos/sae-nube/inelco-productos-sae-nube-seguridad.png"/>
                </center>
                <h3>
                    Seguridad
                </h3>
                <p>
                    La información está disponible únicamente para las personas que definas, lo que garantiza la privacidad.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="app sae-movil" src="/img/productos/sae-nube/inelco-productos-sae-nube-disponibilidad.png"/>
                </center>
                <h3>
                    Disponibilidad
                </h3>
                <p>
                    La información de tu empresa siempre está disponible las 24 horas del día los 365 días del año.
                    
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="sae interfaces" src="/img/productos/sae-nube/inelco-productos-sae-nube-administracion.png"/>
                </center>
                <h3>
                    Administración
                </h3> 
                <p>
                  Gestiona todas tus máquinas contratadas desde tu escritorio de servicios.  
                </p>
            </div>
        </div>
    </div>
</section>
@include('partials.botones-compra-sae-nube')


@endsection

@push('add-js')

@stack('files-menu')


@endpush
