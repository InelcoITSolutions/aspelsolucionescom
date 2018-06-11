<?php

namespace aspelsoluciones\Http\Controllers\landing-COI;

use Illuminate\Http\Request;

use aspelsoluciones\Http\Requests;
use aspelsoluciones\Http\Controllers\Controller;

class CoiController extends Controller
{
    //
    public function index() 
    {
    	return view('templates.landings-coi.actualizaciones.nuevo-coi');
    }
}
