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
                    <a class="btn btn-warning" href="{{route('payments')}}">
                        Pagar con PayPal
                    </a>
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