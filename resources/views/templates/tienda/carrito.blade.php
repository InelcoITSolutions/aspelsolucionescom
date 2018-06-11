@extends('templates.tienda.plantilla')
@section('title','Carrito de compras')


@section('content')
<section class="secciones-tienda" id="detalle">
    <div class="container">
        <div class="row">
            <h1 class="text-center h1-responsive">
                Carrito de compras
            </h1>
        </div>
        @if(count($carrito))
        <table class="table table-hover" id="Cart_Totals_Container">
            <thead>
                <tr>
                    <th>
                        Producto
                    </th>
                    <th>
                        Precio
                    </th>
                    <th>
                        Cantidad
                    </th>
                    <th>
                        Subtotal
                    </th>
                    <th>
                        IVA
                    </th>
                    <th>
                        Total Producto
                    </th>
                    <th>
                        Eliminar
                    </th>
                </tr>
            </thead>
            <tbody>
                @php $i=0; @endphp
                @foreach($carrito as $item)
                @php $i++; @endphp
                <tr id="fila{{ $i }}">
                    <td>
                        <img alt="Logos productos aspel" class="img-responsive" src="{{$item->imagen}}" width="50">
                        </img>
                        {{$item->nombre}}
                        <br>
                            {{$item->incluye1}}
                        </br>
                    </td>
                    <td>
                        <p>
                            $ {{number_format($item->precio,2)}}
                        </p>
                    </td>
                    <td>
                        @if($item->Cantidad <=0 OR $item->Cantidad >20)
                        <input class="pcant" id="producto_{{$item->id}}" max="20" maxlength="2" min="1" style="width: 30%;" type="number" value="{{$item->Cantidad = 1}}">
                            <a class="btn btn-primary btn-update-item" data-href="{{(route('actualizar-carrito',$item->etiqueta))}}" data-id="{{$item->id}}" href="#">
                                <i aria-hidden="true" class="fa fa-refresh">
                                </i>
                            </a>
                        </input>
                        @else
                        <input class="pcant" id="producto_{{$item->id}}" max="20" maxlength="2" min="1" style="width: 30%;" type="number" value="{{$item->Cantidad}}">
                            <a class="btn btn-primary btn-update-item" data-href="{{(route('actualizar-carrito',$item->etiqueta))}}" data-id="{{$item->id}}" href="#">
                                <i aria-hidden="true" class="fa fa-refresh">
                                </i>
                            </a>
                        </input>
                        @endif
                    </td>
                    <span style="visibility: hidden;">
                        {{$subtotal=$item->precio * $item->Cantidad}}
                    </span>
                    <td>
                        $ {{number_format($subtotal,2)}}
                    </td>
                    <span style="visibility: hidden;">
                        {{$iva=.16}}
                    </span>
                    <td>
                        $ {{number_format($iva*$subtotal,2)}}
                    </td>
                    <span style="visibility: hidden;">
                        {{$new_iva=$iva*$subtotal}}
                        {{number_format($total_prod=$subtotal+$new_iva)}}
                    </span>
                    <td>
                        $ {{number_format($total_prod,2)}}
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{route('carrito-eliminar',$item->etiqueta)}}">
                            <i aria-hidden="true" class="fa fa-times">
                            </i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12" id="Cart_Totals_Container">
            <div class="col-xs-4 col-sm-8 col-md-8">
            </div>
            <div class="col-xs-8 col-sm-4 col-md-4">
                <p class="text-left">
                    <b>
                        IMPORTE TOTAL: $ {{number_format($total,2)}} MX IVA INCLUD.
                    </b>
                </p>
            </div>
        </div>
        <hr>
            <p>
                <a class="btn btn-primary" href="{{url('/tienda')}}">
                    Agregar más productos
                </a>
                <a class="btn btn-info" href="{{route('detalle-pedido')}}">
                    Continuar
                </a>
                <a class="btn btn-danger" href="{{route('vaciar-carrito')}}">
                    Vaciar Carrito
                </a>
            </p>
        </hr>
        @else
        <h3 class="text-center">
            No hay productos en el carrito
        </h3>
        <p>
            <a class="btn btn-primary" href="{{url('/tienda')}}">
                Agregar productos
            </a>
        </p>
        @endif
    </div>
</section>
@stop
