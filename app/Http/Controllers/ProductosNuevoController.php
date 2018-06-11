<?php

namespace aspelsoluciones\Http\Controllers;

use aspelsoluciones\ProductosNuevo;

class ProductosNuevoController extends Controller
{
    public function index()
    {
        $productos_nuevos  = ProductosNuevo::find([1]);
        $productos_nuevos1 = ProductosNuevo::find([2]);
        $productos_nuevos2 = ProductosNuevo::find([3]);
        return view('templates.landings.tres-promociones.nuevo-noi', compact('productos_nuevos', 'productos_nuevos1', 'productos_nuevos2'));

    }
    public function show($tipo)
    {
        $productos_noi = ProductosNuevo::where('tipo', $tipo)->first();
        //dd($producto);

        //return view('templates.tienda.ver-mas', compact('producto'));

    }
}
