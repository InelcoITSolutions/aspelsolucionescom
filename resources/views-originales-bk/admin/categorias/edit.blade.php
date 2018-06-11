@extends('admin.plantilla')
@section('title','Categorias')


@section('content')
<section class="categoria" id="categoria">
    <div class="container">
        <div class="row">
            <h1 class="text-center h1-responsive">
                Editar Categoria
            </h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                @if(count($errors)>0)
                @include('partials.errors')
                @endif

                {!!Form::model($categoria, ['route' => ['categorias.update', $categoria]])!!}
                <input name="_method" type="hidden" value="PUT">
                </input>
                <div class="md-form">
                    {!!Form::text('Nombre',Request::old('Nombre'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('Nombre', 'Nombre')!!}
                </div>
                <div class="md-form">
                    {!!Form::text('Etiqueta',Request::old('Etiqueta'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('Etiqueta', 'Etiqueta')!!}
                </div>
                <div class="md-form">
                    {!!Form::text('Descripcion',Request::old('Descripcion'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('Descripcion', 'Descripcion')!!}
                </div>
                <div class="text-right">
                    {!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}
                    <a class="btn btn-danger" href="{{route('categorias.index')}}">
                        Cancelar
                    </a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@stop
