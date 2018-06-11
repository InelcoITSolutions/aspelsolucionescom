<?php

namespace aspelsoluciones\Http\Controllers;

use aspelsoluciones\ProductosNuevo;
use aspelsoluciones\Prospecto;
use Illuminate\Http\Request;
use Mail;

class ActualizacionNoiController extends Controller
{
    public function index()
    {

        $productos_nuevos1 = ProductosNuevo::find([2]);

        return view('templates.landings.actualizaciones.nuevo-noi', compact('productos_nuevos1'));

    }
    public function show($tipo)
    {
        $productos_noi = ProductosNuevo::where('tipo', $tipo)->first();
        //dd($producto);

        //return view('templates.tienda.ver-mas', compact('producto'));

    }
    public function create()
    {
        return redirect('actualizacion-noi#adquirir');
    }
    //METODO TRES PARA GUARDAR EN LA BASE DE DATOS
    public function store(Request $request)
    {

        $prospecto = new Prospecto;

        $v = \Validator::make($request->all(), [
            'nombre'     => 'required|max:255',
            'correo'     => 'required|email|unique:prospectos',
            'telefono'   => 'required',
            'empresa'    => 'required|max:255',
            'interesado' => 'required',
            //'g-recaptcha-response' => 'required|recaptcha',
        ]);

        if ($v->fails()) {
            return redirect('actualizacion-noi#adquirir')
                ->withErrors($v->errors());
        }
        $prospecto->create([
            'Nombre'      => $request['nombre'],
            'Correo'      => $request['correo'],
            'Telefono'    => $request['telefono'],
            'Empresa'     => $request['empresa'],
            'Comentarios' => $request['comentario'],
            'Interesado'  => $request['interesado'],

        ]);

        Mail::send('templates.landings.correos.aviso-prospectos', $request->all(), function ($message) use ($request) {
            //remitente
            $message->from($request->correo, $request->nombre);
            //asunto
            $message->subject('Actualización Nuevo NOI');

            //receptor
            $message->to('contacto@aspelsoluciones.com')->cc('felixmtz@live.com.mx');

        });

        return redirect('actualizacion-noi')->with('mensaje', 'Su registro se ha realizado de manera exitosa');
    }
}
