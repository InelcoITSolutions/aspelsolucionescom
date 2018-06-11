<?php

namespace aspelsoluciones\Http\Controllers\Admin;

use aspelsoluciones\Categoria;
use aspelsoluciones\Http\Controllers\Controller;
use aspelsoluciones\Http\Requests\SaveProductRequest;
use aspelsoluciones\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate(4);
        //dd($categorias);

        return view('admin.productos.productos', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::orderBy('id', 'desc')->pluck('Nombre', 'id');
        return view('admin.productos.create', compact('categorias'));

    }
    public function store(SaveProductRequest $request)
    {
        $data = [
            'nombre'            => $request->get('nombre'),
            'clave'             => $request->get('clave'),
            'etiqueta'          => $request->get('etiqueta'),
            'descripcion_corta' => $request->get('descrip_corta'),
            'descripcion'       => $request->get('descrip'),
            'descripcion_larga' => $request->get('descrip_larga'),
            'incluye1'          => $request->get('incluye1'),
            'incluye2'          => $request->get('incluye2'),
            'precio'            => $request->get('precio'),
            'imagen'            => $request->get('imagen'),
            'visible'           => $request->has('visible') ? 1 : 0,
            'categoria_id'      => $request->get('categoria_id'),

        ];

        $producto = Producto::create($data);

        // $message  = $producto ? 'Producto agregado correctamente' : 'El producto no pudo agregarse';
        return redirect('admin/productos')->with('mensaje', 'Producto agregado correctamente');

    }
    public function show(Producto $producto)
    {
        return $producto;
    }

    public function edit(Producto $producto)
    {
        $categorias = Categoria::orderBy('id', 'desc')->pluck('Nombre', 'id');
        return view('admin.productos.edit', compact('categorias', 'producto'));
    }

    public function update(SaveProductRequest $request, Producto $producto)
    {
        $producto->fill($request->all());
        $producto->visible = $request->has('visible') ? 1 : 0;

        $updated = $producto->save();
        $message = $updated ? 'Producto actualizado correctamente' : 'El producto NO pudo actualizarse';
        return redirect('admin/productos')->with('mensaje', $message);
    }

    public function destroy(Producto $producto)
    {
        $deleted = $producto->delete();

        $message = $deleted ? 'Producto eliminado correctamente' : 'El producto NO pudo eliminarse';
        return redirect('admin/productos')->with('mensaje', $message);

    }
}
