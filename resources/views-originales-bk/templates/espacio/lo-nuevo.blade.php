@extends('templates.main')
@section('title','Lo Nuevo ESPACIO')
@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush
@section('content')
    @include('templates.espacio.banner-espacio')
<section class="secciones espacio-pages nuevo-sae">
    <div class="container">
        <h3 class="title-h3">
            Lo nuevo
        </h3>
        <h4 class="title-h4">
            Le damos mayor movilidad a tus operaciones con la descarga masiva y control de datos de acceso, para un intercambio de información eficiente.
        </h4>
        <div class="container">    
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Descarga masiva de documentos
                </h5>

                <p class="p-css">
                    hora es más rápido descargar los documentos que necesitas desde su consulta. Con solo seleccionarlos marcando la columna “Descargar”, <strong>ⓔspacio Aspel</strong> creará un archivo ZIP listo para que lo compartas fácilmente.
                </p>
                
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="col-md-6 imagencontainer">
                <img alt="catalogo de metodos de pago" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/espacio/inelco-aspel-lo-nuevo-descarga-masiva-documentos.png">
                </img>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img alt="nuevo complemento INE" class="img-responsive zoom" src="/img/productos/espacio/inelco-aspel-lo-nuevo-herramientas-administracion-archivos.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Mayor movilidad en tus operaciones
                </h5>
                <p class="p-css">
                    Utiliza la herramienta “Mover” para cambiar la ubicación de una operación con sus respectivos archivos dentro del Buzón Contable. ¡Para tener tu información más organizada!
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Más herramientas para la administración de archivos
                </h5>
                <p class="p-css">
                    Mejoramos tu trabajo con las opciones de “Copiar” y “Pegar” que incluimos en el menú principal. Úsalas para relacionar una o más operaciones, así como copiar archivos entre carpetas.
                </p>
               
                <a href="{{url('aspel-espacio/soluciones#buzon-contable')}}" title="SAE en mi propia nube">
                    Más información
                </a>
            </div> 
        </div>

    </div>
</section>
@include('partials.botones-compra-espacio')

@stop

@push('add-js')

@stack('files-menu')
@endpush
