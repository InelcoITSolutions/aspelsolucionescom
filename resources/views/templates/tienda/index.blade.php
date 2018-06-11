@extends('templates.tienda.plantilla')
@section('title','Sistemas Aspel')


@section('content')

<section class="secciones-tienda" id="td1">
    <div class="container text-center">
        <h1 class="h1-responsive titulo">
            Productos Destacados
        </h1>
        <!--Card-->
        <div class="row fila1">
            @foreach($productos as $producto)
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="borde">
                    <!--Card image-->
                    <div class="view hm-zoom imagen">
                        <center>
                            <a class="a-class" href="{{route('detalle-producto',$producto->etiqueta)}}">
                                <img alt="productos-aspel" class="img-fluid img-responsive" src="{{$producto->imagen}}" width="200">
                                    <div class="mask">
                                    </div>
                                </img>
                            </a>
                        </center>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-block text-xs-center">
                        <!--Category & Title-->
                        <h5>
                        </h5>
                        <h4 class="card-title">
                            <strong>
                                <a class="a-class" href="{{route('detalle-producto',$producto->etiqueta)}}">
                                    {{$producto ->nombre}}
                                </a>
                            </strong>
                        </h4>
                        <!--Description-->
                        <p class="card-text">
                            {{$producto->descripcion}}
                        </p>
                        <!--Card footer-->
                        <div class="card-footer">
                            <span class="left">
                                <b>
                                    $ {{number_format($producto->precio,2)}} + IVA
                                </b>
                                <br>
                                    <em>
                                        Incluye: {{$producto->incluye1}}
                                    </em>
                                </br>
                            </span>
                        </div>
                    </div>
                    <!--/.Card content-->
                    <center>
                        <a class="a-class" href="{{route('añadir-carrito',$producto->etiqueta)}}">
                            <button class="btn btn-primary" type="button">
                                Añadir al carrito
                            </button>
                        </a>
                    </center>
                </div>
            </div>
            @endforeach
        </div>
        <!--/.Card-->
    </div>
</section>
<section class="parallax" id="td2">
    <div class="carousel-caption hidden-xs" id="brand-caption">
        <div class="animated fadeInDown">
            <h3>
                <strong>
                    <span class="color">
                        Conoce nuestros demás productos y servicios
                    </span>
                </strong>
            </h3>
            <h6 id="random_brands">
                <a href="https://www.aspelsoluciones.com/hardware" target="_blank">
                    Hardware
                </a>
            </h6>
            <h6 id="random_brands">
                <a href="https://www.aspelsoluciones.com/servicios#asesoria" target="_blank">
                    Asesoría
                </a>
            </h6>
            <h6 id="random_brands">
                <a href="https://www.aspelsoluciones.com/servicios#capacitacion" target="_blank">
                    Capacitación
                </a>
            </h6>
            <h6 id="random_brands">
                <a href="https://www.aspelsoluciones.com/servicios#consultoria" target="_blank">
                    Consultoría
                </a>
            </h6>
            <h6 id="random_brands">
                <a href="https://www.aspelsoluciones.com/servicios#implementacion" target="_blank">
                    Implementación
                </a>
            </h6>
            <h6 id="random_brands">
                <a href="https://www.aspelsoluciones.com/servicios#soporte" target="_blank">
                    Soporte
                </a>
            </h6>

        </div>
    </div>
</section>
<section class="news-products" id="td3">
    <div class="container text-center">
        <h1 class="h1-responsive titulo">
            Productos Nuevos
        </h1>
        <div class="row fila2">
            @foreach($productos2 as $producto)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="borde">
                    <!--Card image-->
                    <div class="view hm-zoom imagen">
                        <center>
                            <a class="a-class" href="{{route('detalle-producto',$producto->etiqueta)}}">
                                <img alt="" class="img-fluid img-responsive" src="{{$producto->imagen}}" width="200">
                                    <div class="mask">
                                    </div>
                                </img>
                            </a>
                        </center>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-block text-xs-center">
                        <!--Category & Title-->
                        <h5>
                        </h5>
                        <h4 class="card-title">
                            <strong>
                                <a class="a-class" href="{{route('detalle-producto',$producto->etiqueta)}}">
                                    {{$producto ->nombre}}
                                </a>
                            </strong>
                        </h4>
                        <!--Description-->
                        <p class="card-text">
                            {{$producto->descripcion}}
                        </p>
                        <!--Card footer-->
                        <div class="card-footer">
                            <span class="left">
                                <b>
                                    $ {{number_format($producto->precio,2)}}
                                </b>
                                <br>
                                    <em>
                                        Incluye: {{$producto->incluye1}}
                                    </em>
                                </br>
                            </span>
                        </div>
                    </div>
                    <!--/.Card content-->
                    <center>
                        <a class="a-class" href="{{route('añadir-carrito',$producto->etiqueta)}}">
                            <button class="btn btn-primary" type="button">
                                Añadir al carrito
                            </button>
                        </a>
                    </center>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row fila2">
            @foreach($productos3 as $producto)
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="borde">
                    <!--Card image-->
                    <div class="view hm-zoom imagen">
                        <center>
                            <a class="a-class" href="{{route('detalle-producto',$producto->etiqueta)}}">
                                <img alt="" class="img-fluid img-responsive" src="{{$producto->imagen}}" width="200">
                                    <div class="mask">
                                    </div>
                                </img>
                            </a>
                        </center>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-block text-xs-center">
                        <!--Category & Title-->
                        <h5>
                        </h5>
                        <h4 class="card-title">
                            <strong>
                                <a class="a-class" href="{{route('detalle-producto',$producto->etiqueta)}}">
                                    {{$producto ->nombre}}
                                </a>
                            </strong>
                        </h4>
                        <!--Description-->
                        <p class="card-text">
                            {{$producto->descripcion}}
                        </p>
                        <!--Card footer-->
                        <div class="card-footer">
                            <span class="left">
                                <b>
                                    $ {{number_format($producto->precio,2)}}
                                </b>
                                <br>
                                    <em>
                                        Incluye: {{$producto->incluye1}}
                                    </em>
                                </br>
                            </span>
                        </div>
                    </div>
                    <!--/.Card content-->
                    <center>
                        <a class="a-class" href="{{route('añadir-carrito',$producto->etiqueta)}}">
                            <button class="btn btn-primary" type="button">
                                Añadir al carrito
                            </button>
                        </a>
                    </center>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@stop
