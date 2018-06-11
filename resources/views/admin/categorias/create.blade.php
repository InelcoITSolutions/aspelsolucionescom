@extends('admin.plantilla')
@section('title','Categorias')


@section('content')
<section class="categoria" id="categoria">
    <div class="container">
        <div class="row">
            <h1 class="text-center h1-responsive">
                Agregar Categoria
            </h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                @if(count($errors)>0)
                @include('partials.errors')
                @endif
                {!! Form::open(['action' => 'Admin\CategoriaController@store','class'=>'form-horizontal']) !!}
                <div class="md-form">
                    {!!Form::text('nombre',Request::old('nombre'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('nombre', 'Nombre')!!}
                </div>
                <div class="md-form">
                    {!!Form::text('etiqueta',Request::old('etiqueta'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('etiqueta', 'Etiqueta')!!}
                </div>
                <div class="md-form">
                    {!!Form::text('descripcion',Request::old('descripcion'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('descripcion', 'Descripcion')!!}
                </div>
                <div class="text-right">
                    {!! Form::submit('Agregar', ['class' => 'btn btn-success']) !!}
                    
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
@stop
