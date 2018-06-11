@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <p>
        Por favor corrige los errores
    </p>
    <ul>
        @foreach($errors -> all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif
<div class="formulario-center" id="registro">
    <center>
        <form action="{{url('actualizacion-noi')}}" class="form-horizontal" id="form1" method="POST" role="form">
            {{csrf_field()}}
            <div class="col-sm-12">
                <input class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="nombre" name="nombre" placeholder="Nombre" required="" title="Agregue su nombre" type="text" value="{{old('nombre')}}"/>
            </div>
            <div class="col-sm-12">
                <input class="validate[required,custom[email]] feedback-input" id="correo" name="correo" placeholder="Email" required="" type="email" value="{{old('correo')}}"/>
            </div>
            <div class="col-sm-12">
                <input class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="telefono" name="telefono" placeholder="Telefono" required="" title="Agregue su número telefonico" type="tel" value="{{old('telefono')}}"/>
            </div>
            <div class="col-sm-12">
                <input class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="empresa" name="empresa" placeholder="Empresa" required="" title="Agregue el nombre de su empresa" type="text" value="{{old('empresa')}}"/>
            </div>
            <div class="col-sm-12">
                <input class="feedback-input" id="comentario" name="comentario" placeholder="Comentarios"/>
            </div>
            <div class="col-sm-12">
                <input id="interesado" name="interesado" style="display: none; visibility: hidden;" type="text" value="Actualización Nuevo NOI"/>
            </div>
            <div align="left" class="col-sm-12">
                {!! Recaptcha::render() !!}
            </div>
            <div align="left" class="col-sm-12">
                <center>
                    <button class="btn btn-default btn-lg registrar" id="button-send" name="enviar" type="submit">
                        Solicitar cotización de NOI 8.0 ahora
                    </button>
                </center>
            </div>
        </form>
    </center>
</div>
