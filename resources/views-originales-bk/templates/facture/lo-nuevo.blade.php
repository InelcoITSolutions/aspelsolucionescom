@extends('templates.main')

@section('title','Lo Nuevo SAE')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.facture.banner-facture')
<section class="secciones sae-pages nuevo-sae">
    <div class="container">
        <h3 class="title-h3">
            Lo Nuevo
        </h3>
        <h4 class="title-h4">
            Descubre los nuevos beneficios que Aspel-FACTURⓔ 4.0 tiene para tu empresa.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Catálogo de métodos de pago con FACTURe
                </h5>
                <p class="p-css">
                    Todos los contribuyentes que emitan comprobantes digitales deberán incorporar al CFDI la clave correspondiente al método de pago, de acuerdo al catálogo de opciones publicado por el SAT.
                </p>
                <p class="p-css">
                    Aspel-FACTURe 4.0 cumple con esta obligación de forma práctica y sencilla.
                </p>
            </div>
            <div class="col-md-6">
                <img alt="facture metodo de pago" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/facture/inelco-aspel-productos-facture-lo-nuevo-metodo-de-pago.png">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="facture lo nuevo importación" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/facture/inelco-aspel-facture-lo-nuevo-importacion.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Útil y práctica importación de CFDI.
                </h5>
                <p class="p-css">
                    Por medio de un sencillo asistente puedes agregar información a partir de un CFDI de facturas, recibos de honorarios y de arrendamiento, así como de clientes y productos.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Emite CFDI de retenciones
                </h5>
                <p class="p-css">
                    Genera los comprobantes digitales para registrar retenciones de impuestos y emite comprobantes de retenciones de dividendos o remanentes distribuibles, de acuerdo con la regla I.2.7.5.4 de la Segunda Resolución de Modificaciones a la Resolución Miscelánea Fiscal para 2014, publicada el 4 de julio de 2014.
                </p>
            </div>
            <div class="col-md-6">
                <img alt="cfdi retenciones" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/facture/inelco-aspel-facture-lo-nuevo-cfdi-retenciones.png">
                </img>
            </div>
            <p class="p-css">
                <a href="{{url('aspel-facture/soluciones#complementos')}}">
                    Consulta más complementos aquí
                </a>
            </p>
        </div>
    </div>
</section>
@include('partials.botones-compra-facture')
@include('templates.facture.menu-facture')
@stop

@push('add-js')

@stack('files-menu')
@endpush
