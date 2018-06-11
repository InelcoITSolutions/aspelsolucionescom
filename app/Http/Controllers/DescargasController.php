<?php

namespace aspelsoluciones\Http\Controllers;

use aspelsoluciones\DescargasSistema;
use Illuminate\Http\Request;
use Laracast\Flash\Flash;
use Mail;

class DescargasController extends Controller
{
    //metodo para descargar de forma rapida un archivo
    public function getDownload()
    {

        $file = "../storage/descargas/sae/sistemas/ASPEL-SAE60_R9.exe";
        return \Response::download($file);
        return redirect()->back();
    }
    //metodo para descargar de forma rapida un archivo
    public function verPdf()
    {

        $file = "/storage/descargas/Disposiciones-fiscales-para-la-nómina-digital-2017.pdf";
        return response()->file($file);

    }

// METODOS PARA DESCARGA DE SAE
    //metodo para enviar un correo con el link de descarga del archivo
    public function linkSae()
    {

        $data = ['link' => 'ftp://aspelprod.cloudapp.net/Download/SAE/reinstal/ASPEL-SAE60_R10.exe'];

        Mail::send('partials.correo-descarga-sae', $data, function ($message) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-SAE 6.0');

            //receptor
            $message->to(\Auth::user()->email, \Auth::user()->name);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect()->back();
    }

    //metodo para guardar el correo en la bd y despues enviar el link de descarga
    public function storeSae(Request $request)
    {

        $descarga = new DescargasSistema;

        $v = \Validator::make($request->all(), [

            'correo' => 'required|email',

        ]);

        if ($v->fails()) {
            return redirect('/')
                ->withErrors($v->errors());
        }

        $descarga->create([

            'correo' => $request['correo'],

        ]);

        Mail::send('partials.correo-descarga-sae', $request->all(), function ($message) use ($request) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-SAE 6.0');

            //receptor
            $message->to($request->correo);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect('productos/sae/presentacion');
    }
//TERMINA METODO PARA SAE

// METODOS PARA DESCARGA DE COI
    //metodo para enviar un correo con el link de descarga del archivo
    public function linkCoi()
    {

        $data = ['link' => 'ftp://aspelprod.cloudapp.net/Download/COI/reinstal/Aspel-COI70_R15.exe'];

        Mail::send('partials.correo-descarga-coi', $data, function ($message) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-COI 7.0');

            //receptor
            $message->to(\Auth::user()->email, \Auth::user()->name);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect()->back();
    }

    //metodo para guardar el correo en la bd y despues enviar el link de descarga
    public function storeCoi(Request $request)
    {

        $descarga = new DescargasSistema;

        $v = \Validator::make($request->all(), [

            'correo' => 'required|email',

        ]);

        if ($v->fails()) {
            return redirect('/')
                ->withErrors($v->errors());
        }

        $descarga->create([

            'correo' => $request['correo'],

        ]);

        Mail::send('partials.correo-descarga-coi', $request->all(), function ($message) use ($request) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-COI 7.0');

            //receptor
            $message->to($request->correo);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect('productos/coi/presentacion');
    }
//TERMINA METODO PARA COI

// METODOS PARA DESCARGA DE NOI
    //metodo para enviar un correo con el link de descarga del archivo
    public function linkNoi()
    {

        $data = ['link' => 'ftp://aspelprod.cloudapp.net/Download/Noi/reinstal/Aspel-NOI80_R2.exe'];

        Mail::send('partials.correo-descarga-sae', $data, function ($message) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-NOI 8.0');

            //receptor
            $message->to(\Auth::user()->email, \Auth::user()->name);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect()->back();
    }

    //metodo para guardar el correo en la bd y despues enviar el link de descarga
    public function storeNoi(Request $request)
    {

        $descarga = new DescargasSistema;

        $v = \Validator::make($request->all(), [

            'correo' => 'required|email',

        ]);

        if ($v->fails()) {
            return redirect('/')
                ->withErrors($v->errors());
        }

        $descarga->create([

            'correo' => $request['correo'],

        ]);

        Mail::send('partials.correo-descarga-noi', $request->all(), function ($message) use ($request) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-NOI 8.0');

            //receptor
            $message->to($request->correo);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect('productos/noi/presentacion');
    }
//TERMINA METODO PARA NOI

    // METODOS PARA DESCARGA DE CAJA
    //metodo para enviar un correo con el link de descarga del archivo
    public function linkCaja()
    {

        $data = ['link' => 'ftp://descargas.aspel.com.mx/download/caja/reinstal/ASPEL-CAJA35_R10.exe'];

        Mail::send('partials.correo-descarga-caja', $data, function ($message) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-CAJA 3.5');

            //receptor
            $message->to(\Auth::user()->email, \Auth::user()->name);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect()->back();
    }

    //metodo para guardar el correo en la bd y despues enviar el link de descarga
    public function storeCaja(Request $request)
    {

        $descarga = new DescargasSistema;

        $v = \Validator::make($request->all(), [

            'correo' => 'required|email',

        ]);

        if ($v->fails()) {
            return redirect('/')
                ->withErrors($v->errors());
        }

        $descarga->create([

            'correo' => $request['correo'],

        ]);

        Mail::send('partials.correo-descarga-caja', $request->all(), function ($message) use ($request) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-CAJA 3.5');

            //receptor
            $message->to($request->correo);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect('productos/caja/presentacion');
    }
//TERMINA METODO PARA CAJA

    // METODOS PARA DESCARGA DE BANCO
    //metodo para enviar un correo con el link de descarga del archivo
    public function linkBanco()
    {

        $data = ['link' => 'ftp://descargas.aspel.com.mx/download/banco/reinstal/ASPEL-BANCO40_R6.exe'];

        Mail::send('partials.correo-descarga-banco', $data, function ($message) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-BANCO 4.0');

            //receptor
            $message->to(\Auth::user()->email, \Auth::user()->name);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect()->back();
    }

    //metodo para guardar el correo en la bd y despues enviar el link de descarga
    public function storeBanco(Request $request)
    {

        $descarga = new DescargasSistema;

        $v = \Validator::make($request->all(), [

            'correo' => 'required|email',

        ]);

        if ($v->fails()) {
            return redirect('/')
                ->withErrors($v->errors());
        }

        $descarga->create([

            'correo' => $request['correo'],

        ]);

        Mail::send('partials.correo-descarga-banco', $request->all(), function ($message) use ($request) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-BANCO 4.0');

            //receptor
            $message->to($request->correo);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect('productos/banco/presentacion');
    }
//TERMINA METODO PARA BANCO

    // METODOS PARA DESCARGA DE PROD
    //metodo para enviar un correo con el link de descarga del archivo
    public function linkProd()
    {

        $data = ['link' => 'ftp://descargas.aspel.com.mx/download/prod/reinstal/ASPEL-PROD30_R1.exe'];

        Mail::send('partials.correo-descarga-prod', $data, function ($message) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-PROD 3.0');

            //receptor
            $message->to(\Auth::user()->email, \Auth::user()->name);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect()->back();
    }

    //metodo para guardar el correo en la bd y despues enviar el link de descarga
    public function storeProd(Request $request)
    {

        $descarga = new DescargasSistema;

        $v = \Validator::make($request->all(), [

            'correo' => 'required|email',

        ]);

        if ($v->fails()) {
            return redirect('/')
                ->withErrors($v->errors());
        }

        $descarga->create([

            'correo' => $request['correo'],

        ]);

        Mail::send('partials.correo-descarga-prod', $request->all(), function ($message) use ($request) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-PROD 3.0');

            //receptor
            $message->to($request->correo);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect('productos/prod/presentacion');
    }
//TERMINA METODO PARA PROD

// METODOS PARA DESCARGA DE FACTURE
    //metodo para enviar un correo con el link de descarga del archivo
    public function linkFacture()
    {

        $data = ['link' => 'ftp://aspelprod.cloudapp.net/Download/FACTURe/reinstal/ASPEL-FACTURe40_R1.exe'];

        Mail::send('partials.correo-descarga-facture', $data, function ($message) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-FACTURE 4.0');

            //receptor
            $message->to(\Auth::user()->email, \Auth::user()->name);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect()->back();
    }

    //metodo para guardar el correo en la bd y despues enviar el link de descarga
    public function storeFacture(Request $request)
    {

        $descarga = new DescargasSistema;

        $v = \Validator::make($request->all(), [

            'correo' => 'required|email',

        ]);

        if ($v->fails()) {
            return redirect('/')
                ->withErrors($v->errors());
        }

        $descarga->create([

            'correo' => $request['correo'],

        ]);

        Mail::send('partials.correo-descarga-facture', $request->all(), function ($message) use ($request) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Link de descarga para Aspel-FACTURE 4.0');

            //receptor
            $message->to($request->correo);

        });
        flash('Se ha enviado el link de descarga a su correo electrónico', 'success')->important();
        return redirect('productos/facture/presentacion');
    }
//TERMINA METODO PARA FACTURE

}
