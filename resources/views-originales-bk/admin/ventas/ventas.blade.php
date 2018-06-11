@extends('admin.plantilla')
@section('title','Ventas')


@section('content')
<section class="categoria" id="categoria">
    <div class="container">
        <div class="row">
            <h1 class="text-center h1-responsive">
                Ventas
            </h1>
            <p>
            </p>
        </div>
        <table class="table table-hover" id="Cart_Totals_Container">
            <thead>
                <tr>
                    <th>
                        Ver detalles
                    </th>
                    <th>
                        Elimiar
                    </th>
                    <th>
                        Fecha
                    </th>
                    <th>
                        Usuario
                    </th>
                    <th>
                        Subtotal
                    </th>
                    <th>
                        Iva
                    </th>
                    <th>
                        Total
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($ventas as $venta)
                <tr>
                    <td>
                        <a class="btn btn-primary btn-detalle-venta" data-id="{{$venta->id}}" data-path="{{route('admin.ventas.get-articulos')}}" data-target="#myModal" data-toggle="modal" data-token="{{csrf_token()}}" href="#">
                            <i aria-hidden="true" class="fa fa-pencil-square-o">
                            </i>
                        </a>
                    </td>
                    <td>
                        {!!Form::open(['route' => ['admin.ventas.destroy', $venta->id]])!!}
                        <button class="btn btn-danger" onclick="return confirm('Elimiar registro')">
                            <i aria-hidden="true" class="fa fa-times">
                            </i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {{$venta->created_at}}
                    </td>
                    <td>
                        {{$venta->user->name}}
                    </td>
                    <td>
                        {{$venta->subtotal}}
                    </td>
                    <td>
                        {{$venta->iva}}
                    </td>
                    <td>
                        {{$venta->total}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <?php echo $ventas->
        render();?>
    </div>
    @include('admin.partials.modal-detalle-pedido')
</section>
@stop
