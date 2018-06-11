<?php

namespace aspelsoluciones\Http\Controllers;

class PerfilUsuarioController extends Controller
{
    public function index()
    {

        return view('templates.usuarios.perfil-usuario');
    }
}
