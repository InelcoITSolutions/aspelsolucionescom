<?php

namespace aspelsoluciones\Http\Controllers;

use aspelsoluciones\ProductosNuevo;

class ProductosNuevoCoiController extends Controller
{
    public function index()
    {
        $productos_nuevos  = ProductosNuevo::find([4]);
        $productos_nuevos1 = ProductosNuevo::find([5]);
        $productos_nuevos2 = ProductosNuevo::find([6]);
        return view('templates.landings-coi.tres-promociones.nuevo-coi', compact('productos_nuevos', 'productos_nuevos1', 'productos_nuevos2'));

    }
    public function show($tipo)
    {
        $productos_coi = ProductosNuevo::where('tipo', $tipo)->first();
        //dd($producto);

        //return view('templates.tienda.ver-mas', compact('producto'));

    }
}
