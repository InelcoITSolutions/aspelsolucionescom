<?php

namespace aspelsoluciones\Http\Controllers;

use aspelsoluciones\AspelProspecto;
use Illuminate\Http\Request;
use Mail;

class AspelProspectoController extends Controller
{
    public function index()
    {
        return view('index');

    }
    public function create()
    {
        return redirect('/');
    }
    public function store(Request $request)
    {

        $prospecto = new AspelProspecto;

        $v = \Validator::make($request->all(), [

            'correo' => 'required|email|unique:aspel_prospectos',

        ]);

        if ($v->fails()) {
            return redirect('/')
                ->withErrors($v->errors());
        }

        $prospecto->create([

            'correo' => $request['correo'],

        ]);

        Mail::send('templates.landings.correos.aviso-prospecto-aspel', $request->all(), function ($message) use ($request) {
            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('www.aspelsoluciones.com agradece tu interés');

            //receptor
            $message->to($request->correo)->cc('contacto@aspelsoluciones.com');

        });

        return redirect('/')->with('mensaje', 'Gracias por su registro, pronto le estaremos notificando de lo mas nuevo de Aspel Soluciones');
    }
}
