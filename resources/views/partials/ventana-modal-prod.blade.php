<style>
    .modal-header1, .close1 {
          background-color: #005dab;
          color:white !important;
          text-align: center;
          font-size: 20px;
          line-height: 1.2;
      }
      .modal-footer {
          background-color: #005dab;
      }
      .btn-success{
        background-color: #7ac043;
        border-color: #7ac043; 
      }
      .btn-success:hover{
        background-color: #4c8b2b; 
      }
      .modal-header1 p{
        font-size: 1em;
      }
      .modal-header1 h4{
        font-size: 2em;
        font-weight: 400;
      }
      .pull-left2 {
    float: right !important;
}
</style>
<div class="container">
    <div class="modal fade" data-keyboard="true" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header1" style="padding:35px 50px;">
                    <button class="close" data-dismiss="modal" type="submit">
                        ×
                    </button>
                    <h5>
                        Elije en que modalidad deseas el sistema
                    </h5>
                </div>
                <div class="modal-body text-center" style="padding:40px 50px;">
                    <a href="{{route('prod')}}">
                        <button class="btn btn-success">
                            PROBAR POR 30 DIAS
                        </button>
                    </a>
                    @if (Auth::guest())
                    <button class="btn btn-success" id="myBtn">
                        DESCARGA DIRECTA
                    </button>
                    @else
                    <a href="{{url('descarga-directa2-prod')}}">
                        <button class="btn btn-success">
                            DESCARGA DIRECTA
                        </button>
                    </a>
                    @endif
                </div>
                <div class="modal-footer text-right">
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
