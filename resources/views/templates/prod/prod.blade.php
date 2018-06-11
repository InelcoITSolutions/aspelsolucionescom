@extends('templates.main')

@section('title','PROD')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
@include('templates.prod.banner-prod')
@include('partials.ventana-modal-prod')
@include('partials.popup-desc-direc-prod')
<section class="descripcion-prod desc-prod secciones" id="mas-informacion">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>
                    Controla eficientemente los procesos de manufactura de la empresa
                </h2>
                <p>
                    <b>
                        Aspel-PROD 3.0
                    </b>
                    permite la planeación y control de los procesos de fabricación de la empresa, asegurando una óptima administración de inventarios y costos. Proporciona, además, un eficiente seguimiento a las órdenes de producción mejorando los tiempos de entrega. Interactúa con
                    <a href="{{url('aspel-sae')}}">
                        Aspel-SAE 6.0
                    </a>
                    y 5.0 de los que obtiene información de materia prima y sub-ensambles, para realizar los procesos de producción y posteriormente actualizar el inventario con los productos terminados.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="inelco-ciclo aspel sae" class="img-responsive" src="/img/aspel-PROD.png" width="200"/>
                </center>
            </div>
        </div>
    </div>
</section>
<section class="word-frase sections " id="frase-prod">
    <div class="fondo-gray">
        <div class="container">
            <h2 class="title-h2">
                Aspel PROD
            </h2>
            <h3>
                <i>
                    "Controla tus procesos de producción"
                </i>
            </h3>
        </div>
    </div>
</section>
<section class="ac_content ">
    <div class="ac_content-wrapper notpadding ">
        <div class="ac_cols-wrapper cf" id="tour">
            <div class="ac_col twelve nopadding secciones">
                <h3 class="title-h3">
                    Observa las operaciones que puedes llevar a cabo
                </h3>
            </div>
        </div>
        <div class="ac_home-tour" style="height: 550.984px;">
            @include('partials.slider-prod')
        </div>
    </div>
</section>
<hr id="lap-separator"/>
<section class="caracteristicas-prod prod secciones">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <center>
                    <img alt="control de procesos de fabricacion" src="/img/productos/prod/inelco-aspel-productos-prod-planeacion-control-de-procesos-de-fabricacion.png"/>
                </center>
                <h3>
                    Control de productos terminados
                </h3>
                <p>
                    Planea y controla los procesos de fabricación de tus productos terminados.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="calculo eficiente de productos terminados" src="/img/productos/prod/inelco-aspel-productos-prod-calculo-eficiente-real-optimo-de-productos-terminados.png"/>
                </center>
                <h3>
                    Fácil manejo de costos
                </h3>
                <p>
                    Calcula de manera eficiente, real y óptima el costo de los productos terminados y sub-ensambles.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="ordenes de producción" src="/img/productos/prod/inelco-aspel-productos-prod-organiza-y-conoce-el-estado-de-ordenes-de-produccion.png"/>
                </center>
                <h3>
                    Órdenes de producción
                </h3>
                <p>
                    Organiza y conoce en todo momento el estado de las órdenes de producción, con ello podrás optimizar los tiempos de entrega, así como obtener la información necesaria para una correcta negociación comercial.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <center>
                    <img alt="fabricacion de productos" src="/img/productos/prod/inelco-aspel-productos-prod-fabricacion-de-productos.png"/>
                </center>
                <h3>
                    Fabricación de productos eficiente
                </h3>
                <p>
                    Conoce los componentes que requieres para fabricar uno o más productos de tu elección, así como los productos que es posible fabricar a partir de los disponibles en ese momento: materia prima, insumos, sub-ensambles.
                </p>
            </div>
            <div class="col-md-6">
                <center>
                    <img alt="interfaz prod-sae" src="/img/productos/prod/inelco-aspel-productos-prod-interfaz-prod-sae.png"/>
                </center>
                <h3>
                    Interfaz con Aspel-SAE
                </h3>
                <p>
                    Con
                    <a href="{{url('aspel-sae')}}">
                        SAE 6.0
                    </a>
                    obtiene la materia prima y sub-ensambles para realizar los procesos de fabricación una vez que se tiene el producto terminado, el sistema registra su entrada en el inventario. En todo momento la información de movimientos al inventario está actualizada.
                </p>
            </div>
        </div>
    </div>
</section>
@include('partials.botones-compra-prod')

@endsection

@push('add-js')
<script src="/js/jquery.slides.js">
</script>
<script src="/js/home.js">
</script>
<script src="/js/global.js">
</script>
@stack('files-menu')
@endpush
