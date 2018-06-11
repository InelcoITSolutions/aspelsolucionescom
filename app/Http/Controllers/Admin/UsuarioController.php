<?php

namespace aspelsoluciones\Http\Controllers\Admin;

use aspelsoluciones\Http\Controllers\Controller;
use aspelsoluciones\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::orderBy('name')->paginate(5);
        //dd($categorias);

        return view('admin.usuarios.usuarios', compact('usuarios'));
    }

    public function create()
    {
        return view('admin.usuarios.create');

    }
    public function store(Request $request)
    {
        $new_user = new User;

        $v = \Validator::make($request->all(), [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',

        ]);

        if ($v->fails()) {
            return redirect('admin/usuarios/create')
                ->withErrors($v->errors());
        }

        $new_user->name     = $request->name;
        $new_user->email    = $request->email;
        $new_user->password = bcrypt($request->password);

        $new_user->save();
        return redirect('admin/usuarios')->with('mensaje', 'Usuario agregado de manera exitosa');

    }
    public function show(User $usuario)
    {
        return $usuario;

    }
    public function edit(User $usuario)
    {
        return view('admin.usuarios.edit', compact('usuario'));

    }

    public function update(Request $request, User $usuario)
    {
        $this->validate($request, [
            'name'     => 'required|max:255',
            'email'    => 'required|email',
            'password' => ($request->get('password') != "") ? 'required|min:6|confirmed' : "",

        ]);

        $usuario->name  = $request->get('name');
        $usuario->email = $request->get('email');
        if ($request->get('password') != "") {
            $usuario->password = bcrypt($request->get('password'));
        }

        $updated = $usuario->save();
        $message = $updated ? 'Usuario actualizado correctamente' : 'El usuario NO pudo actualizarse';
        return redirect('admin/usuarios')->with('mensaje', $message);
    }
    public function destroy(User $usuario)
    {
        $deleted = $usuario->delete();
        $message = $deleted ? 'Usuario eliminado correctamente' : 'El usuario NO pudo eliminarse';
        return redirect('admin/usuarios')->with('mensaje', $message);

    }
}
