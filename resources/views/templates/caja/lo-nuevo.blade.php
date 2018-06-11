@extends('templates.main')

@section('title','Lo Nuevo SAE')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.caja.banner-caja')
<section class="secciones sae-pages nuevo-sae">
    <div class="container">
        <h3 class="title-h3">
            Lo Nuevo
        </h3>
        <h4 class="title-h4">
            Con su versión 3.5 Aspel-CAJA convierte tu equipo de cómputo en un punto de venta más organizado, productivo y relevante. ¡Cómpralo ya!
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Tecnología táctil en ventas
                </h5>
                <p class="p-css">
                    Ahora el sistema admite el manejo de pantallas táctiles para una captura más fácil de las ventas, y te permite visualizar tus productos por categorías. Utilízalo y agiliza tus ventas.
                </p>
            </div>
            <div class="col-md-6 imagencontainer">
                <img alt="contabilidad-electronica-total" class="img-responsive" src="/img/productos/caja/Tecnologia-Tactil_zoom.png">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 imagencontainer">
                <img alt="contabilidad-electronica-total" class="img-responsive" src="/img/productos/caja/Nueva-Interfaz_zoom.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Nueva Interfaz
                </h5>
                <p class="p-css">
                    Hemos rediseñado el sistema punto de venta para ofrecerte una experiencia más amigable, con una interfaz gráfica que facilita las operaciones y prepara tu negocio para el éxito.
                </p>
            </div>
        </div>
    </div>
</section>
@include('partials.botones-compra-caja')

@stop

@push('add-js')

@stack('files-menu')
@endpush
