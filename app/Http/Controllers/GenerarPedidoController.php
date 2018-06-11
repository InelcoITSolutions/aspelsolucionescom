<?php

namespace aspelsoluciones\Http\Controllers;

use aspelsoluciones\DatosFiscalesCliente;
use Illuminate\Http\Request;
use Mail;

class GenerarPedidoController extends Controller
{
    public function store(Request $request)
    {

        $new_cliente = new DatosFiscalesCliente;

        $v = \Validator::make($request->all(), [
            'razon_social'       => 'required|max:255',
            'rfc'                => 'required|unique:datos_fiscales_clientes',
            'nombre_comercial'   => 'required|max:255',
            'contribuyente'      => 'required',
            'calle'              => 'required',
            'no_exterior'        => 'required',
            'no_interior'        => 'required',
            'colonia'            => 'required',
            'ciudad'             => 'required',
            'cp'                 => 'required',
            'pais'               => 'required',
            'estado'             => 'required',
            'telefono'           => 'required',
            'correo_facturacion' => 'required',
            'nombre_apellidos'   => 'required',
            'correo'             => 'required|email',

        ]);

        if ($v->fails()) {
            return redirect('mostrar/pedido#formulario')
                ->withErrors($v->errors());
        }

        $new_cliente->create([
            'razon_social'       => $request['razon_social'],
            'rfc'                => $request['rfc'],
            'nombre_comercial'   => $request['nombre_comercial'],
            'contribuyente'      => $request['contribuyente'],
            'calle'              => $request['calle'],
            'no_exterior'        => $request['no_exterior'],
            'no_interior'        => $request['no_interior'],
            'colonia'            => $request['colonia'],
            'ciudad'             => $request['ciudad'],
            'cp'                 => $request['cp'],
            'pais'               => $request['pais'],
            'estado'             => $request['estado'],
            'telefono'           => $request['telefono'],
            'correo_facturacion' => $request['correo_facturacion'],
            'nombre_apellidos'   => $request['nombre_apellidos'],
            'correo'             => $request['correo'],

        ]);

        Mail::send('templates.landings.tres-promociones.pedido-pdf', $request->all(), function ($message) use ($request) {
            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Detalle de su pedido');

            //receptor
            $message->to($request->correo, $request->nombre_apellidos);

        });

        \Session::forget('carrito');
        return redirect('promociones-nuevo-noi')->with('mensaje', 'Hemos enviado a su correo electrónico los detalles de su pedido');
    }
}
