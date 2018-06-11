@extends('templates.tienda.plantilla')
@section('title','Detalle de producto')

@section('content')
<section class="mostrar-productos" id="mp">
    <div class="container">
        <h4 class="h4-responsive text-left">
            Resultados para:
            <i>
                {{ $query }}
            </i>
        </h4>
        <br>
            @if (count($search) === 0)
                No products found
            @elseif (count($search) >= 1)
                @foreach($search as $producto)
            <div class="col-md-12 wow slideInLeft" id="product-sub-container">
                <div class="col-md-4 text-center hoverable">
                    <a href="{{ route('detalle-producto', $producto->etiqueta) }}">
                        <img alt="Logo producto" src="{{$producto->imagen}}">
                        </img>
                    </a>
                </div>
                <div class="col-md-5">
                    <a href="{{ route('detalle-producto', $producto->etiqueta) }}">
                        <h5 class="center-on-small-only">
                            {{ $producto->nombre }}
                        </h5>
                        <h6 class="center-on-small-only">
                            {{ $producto->descripcion_corta }}
                        </h6>
                        <p style="font-size: .9em;">
                            {{$producto->descripcion_larga}}
                        </p>
                    </a>
                </div>
                <div class="col-md-3 text-center">
                    <div class="text-danger list-price">
                        Precio: $ {{number_format($producto->precio,2)}}
                    </div>
                    <br>
                        <br>
                            <br>
                                <a class="a-class" href="{{route('añadir-carrito',$producto->etiqueta)}}">
                                    <button class="btn btn-primary" type="button">
                                        Añadir al carrito
                                    </button>
                                </a>
                            </br>
                        </br>
                    </br>
                </div>
            </div>
            @endforeach
     @endif
        </br>
    </div>
    <!-- Close container-fluid -->
</section>
@stop
