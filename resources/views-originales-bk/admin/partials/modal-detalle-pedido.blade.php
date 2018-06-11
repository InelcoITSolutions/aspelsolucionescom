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
                        Detalle de la venta
                    </h5>
                </div>
                <div class="modal-body text-center" style="padding:40px 50px;">
                    <div class="table-responsive">
                        <table class="table table-hover" id="table-detalle-pedido">
                            <thead>
                                <tr>
                                    <th>
                                        Imagen
                                    </th>
                                    <th>
                                        Producto
                                    </th>
                                    <th>
                                        Precio
                                    </th>
                                    <th>
                                        Cantidad
                                    </th>
                                    <th>
                                        Subtotal
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
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
