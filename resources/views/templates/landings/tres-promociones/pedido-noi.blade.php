@extends('templates.landings.principal')
@section('title','Registro de compra')
@push('css-promocion-nuevo-noi')
<link href="/css/landings/promocion-nuevo-noi.css" rel="stylesheet" type="text/css"/>
@endpush
@include('partials.header-landings')
@section('content')
<section class="detalle-pedido" id="sec1">
    <div class="container">
        @if(count($pedido))
        <div class="col-md-6">
            <div class="row">
                <h3 class="subtitulos">
                    Detalles de su pedido
                </h3>
                <table class="table table-hover" id="Cart_Totals_Container">
                    <thead>
                        <tr>
                            <th>
                                Producto
                            </th>
                            <th>
                                Descripción
                            </th>
                            <th>
                                Cantidad
                            </th>
                            <th>
                                Importe
                            </th>
                            <th>
                                Eliminar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pedido as $item)
                        <tr>
                            <td>
                                {{$item->tipo}}
                                <br>
                                    {{$item->nombre_producto}}
                                </br>
                            </td>
                            <td>
                                {{$item->incluye1}},
                                <br>
                                    {{$item->incluye2}}
                                </br>
                            </td>
                            <td>
                                {{$item->Cantidad}}
                            </td>
                            <td>
                                ${{number_format($item->precio,2)}}
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{route('eliminar-pedido',$item->tipo)}}">
                                    <i aria-hidden="true" class="fa fa-times">
                                    </i>
                                </a>
                            </td>
                        </tr>
                        @if($item->cantidad_users >= 1)
                        <tr>
                            <td>
                                {{$item->cantidad_users}} Usuarios Adicionales.
                            </td>
                            <td>
                                Usuarios adicionales para {{$item->tipo}}
                                <br>
                                    {{$item->nombre_producto}}
                                </br>
                            </td>
                            <td>
                                {{$item->cantidad_users}}
                            </td>
                            <td>
                                ${{number_format($item->precio_users,2)}}
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{route('eliminar-usuario',$item->tipo)}}">
                                    <i aria-hidden="true" class="fa fa-times">
                                    </i>
                                </a>
                            </td>
                        </tr>
                        @else
                        <tr>
                        </tr>
                        @endif
                        @if($item->precio_servicio >= 300)
                        <tr>
                            <td>
                                Servicio de instalacion.
                            </td>
                            <td>
                                Para  {{$item->cantidad_users}} Usuarios Adicionales
                                <br>
                                    y {{$item->Cantidad}} Licencia base de {{$item->tipo}}
                                    <br>
                                        {{$item->nombre}}
                                    </br>
                                </br>
                            </td>
                            <td>
                                {{$item->Cantidad + $item->cantidad_users}}
                            </td>
                            <td>
                                ${{number_format($item->precio_servicio,2)}}
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{(route('quitar-servicio',$item->tipo))}}">
                                    <i aria-hidden="true" class="fa fa-times">
                                    </i>
                                </a>
                            </td>
                        </tr>
                        @else
                        <tr>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <div class="row text-right" id="Cart_Totals_Container">
                    <p>
                        <b>
                            Subtotal:
                        </b>
                        ${{number_format($subtotal,2)}}
                    </p>
                    <p>
                        <b>
                            IVA:
                        </b>
                        ${{number_format($iva,2)}}
                    </p>
                    <p>
                        <b>
                            Total:
                        </b>
                        ${{number_format($total,2)}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-right" style="margin-top: 0%;">
            <div class="row">
                <h3 class="subtitulos">
                    ¿Deseas agregar usuarios adicionales?
                </h3>
                {{$pedido==$item}}
                <input id="producto_{{$item->id}}" max="5" maxlength="2" min="0" type="number" value="{{$item->cantidad_users}}">
                    <a class="btn btn-primary btn-update-item" data-href="{{(route('agregar-users',$item->tipo))}}" data-id="{{$item->id}}" href="#">
                        Agregar usuarios
                    </a>
                </input>
            </div>
            <div class="row">
                <h3 class="subtitulos">
                    Actualmente tu pedido no incluye el servicio de instalación, ¿Quieres agregarlo ahora?
                </h3>
                <p>
                    El costo del servicio para la licencia base es de $300.00.
                    <br>
                        Por cada usuario adicional son $300.00 más.
                    </br>
                </p>
                {{$pedido==$item}}
                <input id="producto_{{$item->id}}" max="5" maxlength="2" min="0" name="service" type="hidden" value="{{$item->cantidad_users}}">
                    <a class="btn btn-primary btn-update-item" data-href="{{(route('agregar-servicio',$item->tipo))}}" data-id="{{$item->id}}" href="#">
                        Agregar servicio
                    </a>
                </input>
                {{--
                <input id="producto_{{$item->id}}" max="20" maxlength="2" min="1" type="hidden" value="{{$item->cantidad_users}}">
                    <a class="btn btn-primary btn-update-item" data-href="{{(route('quitar-servicio',$item->tipo))}}" data-id="{{$item->id}}" href="#">
                        Quitar servicio
                    </a>
                </input>
                --}}
            </div>
            <div class="row genera-pedido">
                <button class="btn btn-primary io" data-toggle="form">
                    Generar pedido
                </button>
                <a class="btn btn-danger" href="{{route('cancelar-compra')}}">
                    Cancelar
                </a>
            </div>
        </div>
        @else
        <h3 class="text-center">
            No hay ningun producto seleccionado
        </h3>
        <p class="text-center">
            <a class="btn btn-primary" href="{{url('nuevo-noi#promociones-noi')}}">
                Agregar productos
            </a>
            <a class="btn btn-danger" href="{{route('cancelar-compra')}}">
                Cancelar
            </a>
        </p>
        @endif
    </div>
</section>
<section class="formulario" id="form" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="form-promocion">
                <h2 class="text-center subtitulos">
                    ¡Registra tus datos para continuar con la compra!
                </h2>
                @include('partials.errors')
                
                {!! Form::open(['route' => 'registro','class'=>'form-horizontal']) !!}
                <div class="col-md-6">
                    <h4 class="datos">
                        *Datos Físcales
                    </h4>
                    <div class="form-group">
                        {!! Form::label('razon_social', '*Razón Social', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::text('razon_social',Request::old('razon_social'), ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('rfc', '*RFC', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::text('rfc',null, ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('nombre_comercial', '*Nombre Comercial', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::text('nombre_comercial',null, ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('contribuyente', '*Tipo de contribuyente', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::select('contribuyente', ['Persona Moral' => 'Persona Moral', 'Persona Fisica' => 'Persona Fisica'], null, ['class'=>'form-control'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('calle', '*Calle', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::text('calle',null, ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('no_exterior', '*No. Exterior', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-4">
                            {!!Form::number('no_exterior',null, ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('no_interior', '*No. Interior', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-4">
                            {!!Form::number('no_interior',null, ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('colonia', '*Colonia', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::text('colonia',null, ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('ciudad', '*Ciudad', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::text('ciudad',null, ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('cp', '*Código Postal', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::number('cp',null, ['class'=>'form-control'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('pais', '*País', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::text('pais',null, ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('estado', '*Estado', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::text('estado',null, ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('telefono', '*Teléfono', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::tel('telefono',null, ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('correo_facturacion', '*Correo de Facturación', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::email('correo_facturacion',null, ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="datos">
                        *Datos de contacto
                    </h4>
                    <div class="form-group">
                        {!! Form::label('nombre_apellidos', '*Nombre y Apellidos', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::text('nombre_apellidos',null, ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('puesto', 'Puesto', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::text('puesto',null, ['class'=>'form-control'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('correo', '*Correo', ['class' => 'control-label col-sm-4'])!!}
                        <div class="col-sm-8">
                            {!!Form::text('correo',null, ['class'=>'form-control','required' => 'required'])!!}
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    {!! Form::submit('Confirmar pedido', ['class' => 'btn btn-success']) !!}
                    
                    {{--
                    <a class="btn btn-danger" href="{{route('cancelar-compra')}}">
                        Cancelar
                    </a>
                    --}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
    //var estado = false;
    $('.io').click(function() {
        id = $(this).attr('data-toggle');        
        $("#" + id).slideToggle(900);
    })
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
    history.pushState({ page: 1 }, "title 1", "#");
    window.onhashchange = function (event) {
        window.location.hash = "not-back";
        alert('cancela la compra para volver atras');
    }
    });
</script>
@stop
