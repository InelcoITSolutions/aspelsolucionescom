<?php

namespace aspelsoluciones\Http\Controllers;

use aspelsoluciones\Prospecto;
use Illuminate\Http\Request;
//USO DEL HTTP REQUEST PARA EL PRIMER METODO DE GUARDAR EN BD
use Illuminate\Support\Facades\Validator;
/*USO DEL FACADES REQUEST PARA EL SEGUNDO METODO DE GUARDAR EN LA BD*/
//use Illuminate\Support\Facades\Request;
use Mail;

class ProspectoController extends Controller
{
    public function index()
    {
        return view('templates.landings.presentaciones.nuevo-noi');

    }
    public function create()
    {
        return redirect('presentacion/nuevo-noi#registrarme');
    }
    //METODO UNO PARA GUARDAR EN LA BASE DE DATOS CON EL FORM REQUEST
    /*public function store(Request $request)
    {

    $this->validate($request, [
    'nombre'   => 'required|max:255',
    'correo'   => 'required|email|unique:prospectos',
    'telefono' => 'required|numeric',
    'empresa'  => 'required|max:255',
    'g-recaptcha-response' => 'required|recaptcha',

    ]);

    \aspelsoluciones\Prospecto::create([
    'nombre'   => $request['nombre'],
    'correo'   => $request['correo'],
    'telefono' => $request['telefono'],
    'empresa'  => $request['empresa'],
    ]);

    return redirect('presentacion/nuevo-noi')->with('mensaje', 'Su registro se ha realizado de manera exitosa');

    }*/

    //METODO DOS PARA GUARDAR EN LA BASE DE DATOS
    /*public function store()
    {

    $data = Request::all();

    $rules = array(
    'nombre'   => 'required|max:255',
    'correo'   => 'required|email|unique:prospectos',
    'telefono' => 'required|numeric',
    'empresa'  => 'required|max:255',
    //'g-recaptcha-response' => 'required|recaptcha',
    );

    $v = Validator::make($data, $rules);

    if ($v->fails()) {
    return redirect('presentacion/nuevo-noi#registrarme')
    ->withErrors($v->errors());
    }
    return redirect('presentacion/nuevo-noi')->with('mensaje', 'Su registro se ha realizado de manera exitosa');
    }*/

    //METODO TRES PARA GUARDAR EN LA BASE DE DATOS
    public function store(Request $request)
    {

        $prospecto = new Prospecto;

        $v = \Validator::make($request->all(), [
            'nombre'     => 'required|max:255',
            'correo'     => 'required|email|unique:prospectos',
            'telefono'   => 'required|numeric',
            'empresa'    => 'required|max:255',
            'interesado' => 'required',

            //'g-recaptcha-response' => 'required|recaptcha',
        ]);

        if ($v->fails()) {
            return redirect('presentacion/nuevo-noi#registrarme')
                ->withErrors($v->errors());
        }

        $prospecto->create([
            'nombre'     => $request['nombre'],
            'correo'     => $request['correo'],
            'telefono'   => $request['telefono'],
            'empresa'    => $request['empresa'],
            'interesado' => $request['interesado'],

        ]);

        Mail::send('templates.landings.correos.aviso-prospectos', $request->all(), function ($message) use ($request) {
            //remitente
            //$message->from($request->correo, $request->nombre);
            //asunto
            $message->subject('Presentacion Nuevo NOI');

            //receptor
            $message->to('contacto@aspelsoluciones.com')->cc('felixmtz@live.com.mx');

        });

        return redirect('presentacion/nuevo-noi')->with('mensaje', 'Su registro se ha realizado de manera exitosa');
    }
}
