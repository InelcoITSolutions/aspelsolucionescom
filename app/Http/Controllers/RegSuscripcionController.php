<?php

namespace aspelsoluciones\Http\Controllers;

use aspelsoluciones\Cliente;
use Illuminate\Http\Request;
use Mail;

class RegSuscripcionController extends Controller
{
    //Guardamos los datos fiscales de los clientes para abrir el escritorio de servicos en la modalidad suscripcion
    public function regSuscripcion(Request $request)
    {

        $new_cliente = new Cliente;

        $v = \Validator::make($request->all(), [

            'nombre_apellidos' => 'required',
            'correo'           => 'required|email|unique:clientes',
            'razon_social'     => 'required|max:255',
            'rfc'              => 'required|unique:clientes',
            'nombre_comercial' => 'required|max:255',
            'pais'             => 'required',
            'estado'           => 'required',
            'telefono'         => 'required',

        ]);

        if ($v->fails()) {
            return redirect('aspel-sae')
                ->withErrors($v->errors());
        }

        $new_cliente->nombre_apellidos = $request->nombre_apellidos;
        $new_cliente->puesto           = $request->puesto;
        $new_cliente->correo           = $request->correo;
        $new_cliente->razon_social     = $request->razon_social;
        $new_cliente->rfc              = $request->rfc;
        $new_cliente->nombre_comercial = $request->nombre_comercial;
        $new_cliente->pais             = $request->pais;
        $new_cliente->estado           = $request->estado;
        $new_cliente->telefono         = $request->telefono;
        $new_cliente->interesado       = $request->interesado;

        $new_cliente->save();

        $new_cliente = $request->all();

        Mail::send(['pdf' => 'pedido.pdf'], $request->all(), function ($message) use ($request) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Detalle de su pedido');

            //receptor
            $message->to($request->correo, $request->nombre_apellidos);

        });

        return redirect('/')->with('mensaje', 'Hemos enviado a su correo electrónico las instrucciones para que realice su respectivo pago y empieze a utilizar el sistema');
    }
}
