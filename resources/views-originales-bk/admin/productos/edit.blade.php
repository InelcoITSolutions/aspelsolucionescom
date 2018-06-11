@extends('admin.plantilla')
@section('title','Productos')


@section('content')
<section class="categoria" id="categoria">
    <div class="container">
        <div class="row">
            <h1 class="text-center h1-responsive">
                Editar Producto
            </h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                @if(count($errors)>0)
                @include('partials.errors')
                @endif

                {!!Form::model($producto, ['route' => ['productos.update', $producto->etiqueta]])!!}
                <input name="_method" type="hidden" value="PUT">
                </input>
                <div class="col-md-6">
                    <div class="mdb-select">
                        {!! Form::label('categoria_id', 'Categoria')!!}
                        {!!Form::select('categoria_id',$categorias,null, ['class'=>'form-control','required' => 'required','autofocus' => 'autofocus'])!!}
                    </div>
                    <div class="md-form">
                        {!!Form::text('nombre',Request::old('nombre'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('nombre', 'Nombre')!!}
                    </div>
                    <div class="md-form">
                        {!!Form::text('clave',Request::old('clave'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('clave', 'Clave')!!}
                    </div>
                    <div class="md-form">
                        {!!Form::text('etiqueta',Request::old('etiqueta'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('etiqueta', 'Etiqueta')!!}
                    </div>
                    <div class="md-form">
                        {!!Form::text('descrip_corta',Request::old('descrip_corta'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('descrip_corta', 'Descripcion corta')!!}
                    </div>
                    <div class="md-form">
                        {!!Form::textarea('descrip',Request::old('descrip'), ['class'=>'md-textarea','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('descrip', 'Descripcion')!!}
                    </div>
                    <div class="md-form">
                        {!!Form::textarea('descrip_larga',Request::old('descrip_larga'), ['class'=>'md-textarea','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('descrip_larga', 'Descripcion larga')!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        {!!Form::text('incluye1',Request::old('incluye1'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('incluye1', 'Incluye 1')!!}
                    </div>
                    <div class="md-form">
                        {!!Form::text('incluye2',Request::old('incluye2'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('incluye2', 'Incluye 2')!!}
                    </div>
                    <div class="md-form">
                        {!!Form::text('precio',Request::old('precio'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('precio', 'Precio')!!}
                    </div>
                    <div class="md-form">
                        {!!Form::text('imagen',Request::old('imagen'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('imagen', 'Imagen')!!}
                    </div>
                    <fieldset class="form-group">
                        {!!Form::checkbox('visible',$producto->visible == 1 ? "checked= 'checked'" :'',['required' => 'required'])              
                        !!}
                    {!! Form::label('visible', 'Visible')!!}
                    </fieldset>
                </div>
                <div class="text-right">
                    {!! Form::submit('Agregar', ['class' => 'btn btn-success']) !!}
                    <a class="btn btn-danger" href="{{url('admin/productos')}}">
                        Cancelar
                    </a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@stop
