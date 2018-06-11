@extends('templates.tienda.plantilla')
@section('title','Detalle del pedido')


@section('content')
<section class="secciones-tienda" id="detalle-pedido">
    <div class="container">
        <h1 class="h1-responsive">
            Detalle del pedido
        </h1>
        <div class="table-responsive">
            <h3 class="h3-responsive subtitulos">
                1. Datos de facturación
            </h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            Usuario
                        </th>
                        <td>
                            {{ Auth::user()->name }}
                        </td>
                        <td>
                            {{ Auth::user()->email }}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Razón social
                        </th>
                        <td>
                            {{ Auth::user()->razon_social}}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            RFC
                        </th>
                        <td>
                            {{ Auth::user()->rfc}}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Nombre comercial
                        </th>
                        <td>
                            {{ Auth::user()->nombre_comercial}}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Contribuyente
                        </th>
                        <td>
                            {{ Auth::user()->contribuyente}}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Dirección
                        </th>
                        <td>
                            Calle: {{ Auth::user()->calle}}
                        </td>
                        <td>
                            No. exterior: {{ Auth::user()->no_exterior}}
                        </td>
                        <td>
                            No. interior: {{ Auth::user()->no_interior}}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Colonia
                        </th>
                        <td>
                            {{ Auth::user()->colonia}}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Ciudad
                        </th>
                        <td>
                            {{ Auth::user()->ciudad}}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Código postal
                        </th>
                        <td>
                            {{ Auth::user()->cp}}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            País
                        </th>
                        <td>
                            {{ Auth::user()->pais}}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Estado
                        </th>
                        <td>
                            {{ Auth::user()->estado}}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Teléfono
                        </th>
                        <td>
                            {{ Auth::user()->telefono}}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Correo de facturación
                        </th>
                        <td>
                            {{ Auth::user()->correo_facturacion}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <h3 class="h3-responsive subtitulos">
                2. Datos de los productos
            </h3>
            <table class="table">
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
                            Total producto
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=0; @endphp
                    @foreach($carrito as $item)
                    @php $i++; @endphp
                    <tr id="fila{{ $i }}">
                        <td>
                            {{$item->nombre}}
                        </td>
                        <td>
                            <p>
                                $ {{number_format($item->precio,2)}}
                            </p>
                        </td>
                        <td>
                            {{$item->Cantidad}}
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-4 col-sm-8 col-md-9">
                </div>
                <div class="col-xs-8 col-sm-4 col-md-3 text-left">
                    <p>
                        <b>
                            TOTAL: $ {{number_format($total,2)}}
                        </b>
                    </p>
                </div>
            </div>
            <h3 class="h3-responsive subtitulos">
                3. Realizar pago
            </h3>
            <a class="btn btn-info" href="{{route('transferencia-electronica')}}">
                <i aria-hidden="true" class="fa fa-check">
                </i>
                Transferencia electrónica
            </a>
            <a class="btn btn-info" href="{{route('payment')}}">
                <i aria-hidden="true" class="fa fa-cc-paypal">
                </i>
                PayPal
            </a>
            <p class="regresar">
                <a class="btn btn-primary" href="{{route('mostrar-carrito')}}">
                    Regresar
                </a>
            </p>
        </div>
    </div>
</section>
@stop
