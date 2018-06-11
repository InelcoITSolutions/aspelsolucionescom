<style>
    .modal-header, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  
  .dos{
    background-color:  #5cb85c;
  }
  .pull-left2 {
    float: right !important;
}
</style>
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="descDirecta" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                    <h5>
                        Danos tu correo para enviarte el link de descarga
                    </h5>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form action="{{url('descarga-directa1-banco')}}" method="POST" role="form">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input class="form-control validate[required,custom[email]] feedback-input" id="correo" name="correo" placeholder="Escribe tu correo" required="" type="email">
                            </input>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Enviar
                        </button>
                    </form>
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
