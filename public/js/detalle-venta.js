$(document).ready(function() {
    $('.btn-detalle-venta').on('click', function(e) {
        e.preventDefault();
        var id_venta = $(this).data('id');
        var path = $(this).data('path');
        var token = $(this).data('token');
        var modal_title = $('.modal-title');
        var modal_body = $('.modal-body');
        var loading = '<p><i class="fa fa-circle-o-notch fa-spin"></i> Cargando datos</p>';
        var table = $('#table-detalle-pedido tbody');
        var data = {
            '_token': token,
            'venta_id': id_venta
        };
        modal_title.html('Detalle de la venta:' + id_venta);
        table.html(loading);
        $.post(path, data, function(data) {
            //console.log(response);
            table.html("");
            for (var i = 0; i < data.length; i++) {
                var fila = "<tr>";
                fila += "<td><img src='" + data[i].producto.imagen + "' with='30'></td>";
                fila += "<td>" + data[i].producto.nombre + "</td>";
                fila += "<td>$ " + parseFloat(data[i].Precio).toFixed(2) + "</td>";
                fila += "<td>$ " + parseInt(data[i].Cantidad) + "</td>";
                fila += "<td>$ " + parseFloat(data[i].Cantidad) * parseFloat(data[i].Precio).toFixed(2) + "</td>";
                fila += "</tr>";
                table.append(fila);
            }
        }, 'json');
    });
});