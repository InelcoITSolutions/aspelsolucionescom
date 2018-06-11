<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
        <style>
            .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
        </style>
    </head>
</html>
<body>
    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="padding:35px 50px;">
                        <button class="close" data-dismiss="modal" type="button">
                            ×
                        </button>
                        <h4>
                            <span class="glyphicon glyphicon-lock">
                            </span>
                            Registra tus datos por favor
                        </h4>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <form action="{{url('nuevo-noi')}}" class="form-horizontal" id="form1" method="POST" role="form">
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
                            {{--
                            <div class="col-sm-12">
                                <textarea class="feedback-input" placeholder="Comentarios">
                                </textarea>
                            </div>
                            --}}
                            <div class="col-sm-12">
                                <input id="interesado" name="interesado" style="display: none; visibility: hidden;" type="text" value="Promocion Nuevo NOI"/>
                            </div>
                            <div class="col-sm-12">
                                {!! Recaptcha::render() !!}
                            </div>
                            <div class="col-sm-12">
                                <center>
                                    <button class="btn btn-default btn-lg registrar" id="button-send" name="enviar" type="submit">
                                        Obtener NOI 8.0 ahora
                                    </button>
                                </center>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger btn-default pull-left" data-dismiss="modal" type="submit">
                            <span class="glyphicon glyphicon-remove">
                            </span>
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
    </script>
</body>
