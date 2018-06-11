<?php

namespace aspelsoluciones\Http\Controllers\Admin;

use aspelsoluciones\Articulo_Vendido;
use aspelsoluciones\Http\Controllers\Controller;
use aspelsoluciones\Http\Request;
use aspelsoluciones\Venta;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::orderBy('id', 'desc')->paginate(5);
        //dd($categorias);

        return view('admin.ventas.ventas', compact('ventas'));
    }

    public function getArticulos(Request $request)
    {
        $articulos = Articulo_Vendido::with('producto')->where('venta_id', $request->get('venta_id'))->get();
        return json_encode($articulos);

    }
    public function destroy($id)
    {
        $venta   = Venta::findOrFail($id);
        $deleted = $venta->delete();
        $message = $deleted ? 'Venta eliminada correctamente' : 'La venta NO pudo eliminarse';
        return redirect('admin/ventas')->with('mensaje', $message);

    }

}
