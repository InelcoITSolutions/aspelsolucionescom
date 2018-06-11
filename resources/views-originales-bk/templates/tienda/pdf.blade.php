<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <title>
            Orden de compra
        </title>
        {!! Html::style('css/pedido-pdf-tienda.css') !!}
    </head>
    <body>
        <header class="clearfix">
            <div class="clearfix" id="company">
                <img alt="Logo Inelco" src="http://aspelsoluciones.com/img/logo.jpg" width="200">
                </img>
                <div>
                    INELCO IT SOLUTIONS SA DE CV
                </div>
                <div>
                    AV. Fundidora N°501 int. 148 PB, Col. Obrera
                    <br/>
                    64010 Monterrey, Nuevo León, México
                </div>
                <div>
                    IIS 080812 HK7
                </div>
            </div>
            <div id="project">
                <div>
                    <span>
                        Documento:
                    </span>
                    Pedido
                </div>
                <div>
                    <span>
                        Pedido:
                    </span>
                    {{date("y") . date("m") . date("d"). date("H") . date("i")}}
                </div>
                <div>
                    <span>
                        Fecha:
                    </span>
                    {{date("d") . "/ ". date("m") . "/ ". date("Y")}}
                </div>
                <div>
                    <span>
                        Referencia:
                    </span>
                    {{date("y") . date("m") . date("d") . date("H") . date("i")}}
                </div>
                <div>
                    <span>
                        Forma de pago:
                    </span>
                    Pago en una sola exbicion
                </div>
                <div>
                    <span>
                        Orden de compra:
                    </span>
                    online
                </div>
                <div>
                    <span>
                        Comprador:
                    </span>
                    {{ Auth::user()->name }}
                </div>
                <div>
                    <span>
                        Telefono:
                    </span>
                    {{ Auth::user()->telefono}}
                </div>
                <div>
                    <span>
                        Cliente:
                    </span>
                    No. cliente
                </div>
            </div>
        </header>
        <p class="razon-social">
            <b>
                {{ Auth::user()->razon_social}}
            </b>
        </p>
        <div class="row texto">
            <p>
                Hemos recibido su Orden de Compra y/o Servicio vía telefonica, a nombre de: {{ Auth::user()->razon_social}}, por los productos y servicios incluidos en este documento: Pedido N° PE {{date("y") . date("m") . date("d"). date("H"). date("i")}}, sujeto a las condiciones comerciales señaladas, cuyos productos y/o servicios serán programados, surtidos y facturados una vez que sea validado su pago. Para su validación le agradeceremos incluir en su pago el Número de Referencia {{date("y") . date("m") . date("d"). date("H"). date("i")}} de éste pedido vía depósito bancario o transferencia electrónica y enviar su comprobante de pago a: ventas@inelco.com.mx Le será enviada a su correo electrónico los archivos PDF y XML de la factura electrónica con los siguientes datos.
            </p>
        </div>
        <p class="empresa">
            <b>
                {{ Auth::user()->rfc}} | {{ Auth::user()->razon_social}}
                <br>
                    {{ Auth::user()->calle}} {{ Auth::user()->no_exterior}} {{ Auth::user()->no_interior}}, {{ Auth::user()->colonia}}
                    <br>
                        {{ Auth::user()->cp}} ,  {{ Auth::user()->ciudad}}, {{ Auth::user()->estado}}
                    </br>
                </br>
            </b>
        </p>
        <table class="table pedido">
            <thead>
                <tr>
                    <th>
                        Producto
                    </th>
                    <th>
                        Incluye
                    </th>
                    <th>
                        Precio
                    </th>
                    <th>
                        Cantidad
                    </th>
                    <th>
                        Importe
                    </th>
                </tr>
            </thead>
            <tbody>
                @php $i=0; @endphp
                @foreach($carrito as $item)
                @php $i++; @endphp
                <tr id="fila{{ $i }}">
                    <td>
                        {{$item->nombre}}
                    </td>
                    <td>
                        {{$item->incluye1}}
                    </td>
                    <td>
                        $ {{number_format($item->precio,2)}}
                    </td>
                    <td>
                        {{$item->Cantidad}}
                    </td>
                    <span style="visibility: hidden;">
                        {{$subtotal=$item->precio * $item->Cantidad}}
                    </span>
                    <td>
                        $ {{number_format($subtotal,2)}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
            <div class="clearfix" id="company-nota">
                <p>
                    Favor de realizar su pago antes de {{date("d")+1 . "/ ". date("m") . "/ ". date("Y")}} por la cantidad de:$ {{number_format($total,2)}} MXP, con el Número de Referencia: {{date("y") . date("m") . date("d"). date("H"). date("i")}}. Para cualquier aclaración o mayor información favor de dirigirse con su ejecutivo a los teléfonos (81) 1352 2222 | 01 800 813 5200, o al correo:
                ventas@inelco.com.mx
                </p>
            </div>
            <div id="project-dos">
                <div>
                    <span>
                        Subtotal
                    </span>
                    $ {{number_format($sub)}}
                </div>
                <div>
                    <span>
                        Descuento
                    </span>
                    .00
                </div>
                <div>
                    <span>
                        Desc. Fin.
                    </span>
                    .00
                </div>
                <div>
                    <span>
                        I.V.A 16%
                    </span>
                    $ {{number_format($sub * .16)}}
                </div>
                <div>
                    <span>
                        TOTAL
                    </span>
                    $ {{number_format($total,2)}}
                </div>
            </div>
        </hr>
        <p class="nota datos-bancarios">
            Datos bancarios para pagos con depósito referenciado o
            transferencia electrónica:
        </p>
        <div id="project-uno">
            <div>
                <span>
                    Titular:
                </span>
                INELCO IT SOLUTIONS SA DE CV
            </div>
            <div>
                <span>
                    Banco:
                </span>
                Santander Serfin
            </div>
            <div>
                <span>
                    Sucursal:
                </span>
                0251 / Linda Vista
            </div>
            <div>
                <span>
                    Plaza:
                </span>
                Guadalupe, NL
            </div>
            <div>
                <span>
                    Cuenta:
                </span>
                92 00115848 0
            </div>
            <div>
                <span>
                    CLABE:
                </span>
                014580920011584800
            </div>
            <div>
                <span>
                    Moneda:
                </span>
                MXN Pesos Mexicanos
            </div>
        </div>
        <img align="right" alt="Logo Banco" class="img-responsive logo-banco" src="http://aspelsoluciones.com/img/logo-banco.jpg" width="150">
        </img>
        <div id="project-tres">
            <div>
                <span>
                    Titular:
                </span>
                INELCO IT SOLUTIONS SA DE CV
            </div>
            <div>
                <span>
                    Cuenta:
                </span>
                92 00115848 0
            </div>
            <div>
                <span>
                    CLABE:
                </span>
                014580920011584800
            </div>
            <div>
                <span>
                    Importe:
                </span>
                $ {{number_format($total,2)}}
            </div>
            <div>
                <span>
                    Referencia:
                </span>
                {{date("y") . date("m") . date("d"). date("H"). date("i")}}
            </div>
        </div>
    </body>
</html>