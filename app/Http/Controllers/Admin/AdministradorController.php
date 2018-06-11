<?php

namespace aspelsoluciones\Http\Controllers\Admin;

use aspelsoluciones\Http\Controllers\Controller;

class AdministradorController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
}
