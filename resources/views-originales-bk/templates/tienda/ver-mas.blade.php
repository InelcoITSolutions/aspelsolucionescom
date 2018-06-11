@extends('templates.tienda.plantilla')
@section('title','Detalle de producto')
@include('partials.registro-suscripcion')
@section('content')
<section class="secciones-tienda" id="detalle">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="imagen-producto">
                    <center>
                        <img alt="Sistemas Aspel" class="img-responsive" src="{{$producto->imagen}}" width="200">
                        </img>
                    </center>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-8 col-lg-8">
                <div class="producto-detalle">
                    <h1 class="h1-responsive text-left nombre-producto">
                        {{$producto->nombre}}
                    </h1>
                    <h3 class="h3-responsive siglas">
                        {{$producto->descripcion_corta}}
                    </h3>
                    <p class="text-fluid">
                        {{$producto->descripcion_larga}}
                    </p>
                    <p class="text-fluid">
                        Licencia Base:
                        <b>
                            $ {{number_format($producto->precio,2)}} +IVA
                        </b>
                        <br>
                            <em>
                                Incluye: {{$producto->incluye1}}
                            </em>
                        </br>
                    </p>
                    <a class="a-class" href="{{route('añadir-carrito',$producto->etiqueta)}}">
                        <button class="btn btn-primary" type="button">
                            Añadir al carrito
                        </button>
                    </a>
                    <a class="button-gratis-adm" data-target="#suscripcion" data-toggle="modal">
                        <button class="btn btn-primary" type="button">
                            Suscribirse ahora
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
