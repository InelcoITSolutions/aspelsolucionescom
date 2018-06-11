<style>
    .modal-header, .close {
      background-color: #005dab;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  
  .dos{
    background-color:  #005dab;
  }
  .pull-left2 {
    float: right !important;

}
.modal-dialog {
    width: 1200px;
    margin: 30px auto;
}
</style>
@include('partials.errors')
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="suscripcion" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:15px 50px;">
                    <button class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                    <h3>
                        ¡Necesitamos algunos datos para poder registrarte!
                    </h3>
                </div>
                <div class="modal-body" style="padding:0px 50px 30px;">
                    {!! Form::open(['route' => 'suscripcion','class'=>'form-horizontal']) !!}
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
                    <div class="col-md-6">
                        <h4 class="datos">
                            *Datos de la empresa
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
                            @php
                            $host= $_SERVER["HTTP_HOST"];
                            $url= $_SERVER["REQUEST_URI"];
                            $direc= "https://" . $host . $url;   
                            $direc2= "http://" . $host . $url;          
                            @endphp
                            @if($direc == 'https://www.aspelsoluciones.com/aspel-sae' OR $direc == 'https://www.aspelsoluciones.com/tienda/producto/aspel-sae-6.0')
                            <input id="interesado" name="interesado" style="display: none; visibility: hidden;" type="text" value="Aspel SAE 6.0"/>
                            @elseif($direc == 'https://www.aspelsoluciones.com/aspel-coi' OR $direc == 'https://www.aspelsoluciones.com/tienda/producto/aspel-coi-7.0')
                            <input id="interesado" name="interesado" style="display: none; visibility: hidden;" type="text" value="Aspel COI 7.0"/>
                            @elseif($direc == 'https://www.aspelsoluciones.com/aspel-banco' OR $direc == 'https://www.aspelsoluciones.com/tienda/producto/aspel-banco-4.0')
                            <input id="interesado" name="interesado" style="display: none; visibility: hidden;" type="text" value="Aspel BANCO 4.0"/>
                            @elseif($direc == 'https://www.aspelsoluciones.com/aspel-noi' OR $direc == 'https://www.aspelsoluciones.com/tienda/producto/aspel-noi-8.0')
                            <input id="interesado" name="interesado" style="display: none; visibility: hidden;" type="text" value="Aspel NOI 8.0"/>
                            @elseif($direc == 'https://www.aspelsoluciones.com/aspel-prod' OR $direc == 'https://www.aspelsoluciones.com/tienda/producto/aspel-prod-3.0')
                            <input id="interesado" name="interesado" style="display: none; visibility: hidden;" type="text" value="Aspel PROD 3.0"/>
                            @elseif($direc == 'https://www.aspelsoluciones.com/aspel-caja' OR $direc == 'https://www.aspelsoluciones.com/tienda/producto/aspel-caja-4.0')
                            <input id="interesado" name="interesado" style="display: none; visibility: hidden;" type="text" value="Aspel CAJA 4.0"/>
                            @elseif($direc == 'https://www.aspelsoluciones.com/aspel-facture' OR $direc == 'https://www.aspelsoluciones.com/tienda/producto/aspel-facture-4.0')
                            <input id="interesado" name="interesado" style="display: none; visibility: hidden;" type="text" value="Aspel FACTURE 4.0"/>
                            @elseif($direc == 'https://www.aspelsoluciones.com/aspel-adm' OR $direc == 'https://www.aspelsoluciones.com/tienda/producto/aspel-adm')
                            <input id="interesado" name="interesado" style="display: none; visibility: hidden;" type="text" value="Aspel ADM"/>
                            @elseif($direc2 == 'http://aspel.dev:8080/aspel-sae' OR $direc2 == 'http://aspel.dev:8080/tienda/producto/aspel-sae-6.0')
                            <input id="interesado" name="interesado" style="display: none; visibility: hidden;" type="text" value="pruebas"/>
                            @endif
                        </div>
                    </div>
                    <div class="text-right">
                        {!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer dos">
                    <button class="btn btn-danger btn-default pull-left2" data-dismiss="modal" type="submit">
                        <i aria-hidden="true" class="fa fa-times">
                        </i>
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
