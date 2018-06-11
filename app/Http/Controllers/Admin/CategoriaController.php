<?php

namespace aspelsoluciones\Http\Controllers\Admin;

use aspelsoluciones\Categoria;
use aspelsoluciones\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        //dd($categorias);

        return view('admin.categorias.categoria', compact('categorias'));
    }

    public function create()
    {
        return view('admin.categorias.create');

    }
    public function store(Request $request)
    {
        $new_categoria = new Categoria;

        $v = \Validator::make($request->all(), [
            'nombre'      => 'required|max:255',
            'etiqueta'    => 'required',
            'descripcion' => 'required|max:255',

        ]);

        if ($v->fails()) {
            return redirect('admin/categorias/create')
                ->withErrors($v->errors());
        }

        $new_categoria->nombre      = $request->nombre;
        $new_categoria->etiqueta    = $request->etiqueta;
        $new_categoria->descripcion = $request->descripcion;

        $new_categoria->save();
        return redirect('admin/categorias')->with('mensaje', 'Categoria agregada de manera exitosa');

    }
    public function show(Categoria $categoria)
    {
        return $categoria;

    }
    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit', compact('categoria'));

    }
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->fill($request->all());
        $updated = $categoria->save();
        $message = $updated ? 'Categoria actualizada correctamente' : 'La categoria NO pudo actualizarse';
        return redirect('admin/categorias')->with('mensaje', $message);

    }
    public function destroy(Categoria $categoria)
    {
        $deleted = $categoria->delete();
        $message = $deleted ? 'Categoria eliminada correctamente' : 'La categoria NO pudo eliminarse';
        return redirect('admin/categorias')->with('mensaje', $message);

    }
}
