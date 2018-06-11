@extends('admin.plantilla')
@section('title','Usuario')


@section('content')
<section class="categoria" id="categoria">
    <div class="container">
        <div class="row">
            <h1 class="text-center h1-responsive">
                Agregar Usuario
            </h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                @if(count($errors)>0)
                @include('partials.errors')
                @endif
                {!! Form::open(['action' => 'Admin\UsuarioController@store','class'=>'form-horizontal']) !!}
                <div class="md-form">
                    {!!Form::text('name',Request::old('name'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('name', 'Nombre')!!}
                </div>
                <div class="md-form">
                    {!!Form::email('email',Request::old('email'), ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('email', 'Correo')!!}
                </div>
                <div class="md-form">
                    {!!Form::password('password',null, ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('password', 'Contraseña')!!}
                </div>
                <div class="md-form">
                    {!!Form::password('password_confirmation',null, ['class'=>'form-control','required' => 'required'])                       
                        !!}                        
                        {!! Form::label('password_confirmation', 'Confirmar contraseña')!!}
                </div>
                <div class="text-right">
                    {!! Form::submit('Agregar', ['class' => 'btn btn-success']) !!}
                    <a class="btn btn-danger" href="{{route('usuarios.index')}}">
                        Cancelar
                    </a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@stop
