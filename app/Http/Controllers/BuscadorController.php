<?php

namespace aspelsoluciones\Http\Controllers;

use aspelsoluciones\Producto;
use Illuminate\Support\Facades\Input;
use Laracast\Flash\Flash;

class BuscadorController extends Controller
{
    public function buscar()
    {

        // Gets the query string from our form submission
        $query = Input::get('search');

        // Returns an array of products that have the query string located somewhere within
        // our products product name. Paginate them so we can break up lots of search results.
        $search = Producto::where('nombre', 'LIKE', '%' . $query . '%')->paginate(200);

        // If no results come up, flash info message with no results found message.
        if ($search->isEmpty()) {
            flash('No se encontraron resultados de ese producto. Por favor intente otra vez', 'info')->important();
            return redirect('/tienda');
        }

        // Return a view and pass the view the list of products and the original query.
        return view('templates.tienda.show-buscador', compact('search', 'query'));
    }
}
