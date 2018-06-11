@extends('templates.main')

@section('title','Lo Nuevo SAE')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.coi.banner-coi')
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
                   Útiles reportes comparativos
                </h5>
              
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                       Te ofrecemos más opciones para analizar los saldos de tu empresa, al mostrar los resultados de estados financieros de forma anual o por periodo y contra presupuestos.
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
                 src="/img/productos/coi/lo-nuevo/Utiles-reportes-comparativos.jpg">
                </img>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img alt="nuevo complemento INE" class="img-responsive zoom" src="/img/productos/coi/lo-nuevo/aspel-coi-8-mas-soluciones-ticket-empresarial.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Control de gastos corporativo
                </h5>
                <p class="p-css">
                    Utiliza la herramienta Ticket Empresarial® desde cualquier lugar, y ahorra tiempo en la comprobación de gastos. Además obtén el CFDI para contabilizarlo en línea.
                </p>
                
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Obtén información visual con gráficas
                </h5>
                <p class="p-css">
                    Genera y personaliza gráficas de movimientos generados por periodos e indicadores financieros directamente en hojas de cálculo de Microsoft Excel®.
                </p>
                
            </div>
            <div class="col-md-6">
                <img alt="CFDI Version 3.3" class="img-responsive" 
                src="/img/productos/coi/lo-nuevo/graficas.png">
                </img>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img alt="poliza editar datos comprobante" class="img-responsive zoom2" 
                src="/img/productos/coi/lo-nuevo/Modulo-de-Perfiles-renovado.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Módulo de Perfiles renovado
                </h5>
                <p class="p-css">
                    Permite que los usuarios accedan solo a la información autorizada e identifícalos por su fotografía.
                </p>
            </div>
        </div>
        
       
    </div>
</section>
@include('partials.botones-compra-coi')
@include('templates.coi.menu-coi')
@stop

@push('add-js')

@stack('files-menu')
@endpush
