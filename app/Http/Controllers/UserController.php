<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{


/*    public function __construct(){
        $this->middleware('can:admin.gestionUsuarios')->only('index');
        $this->middleware('can:admin.editarUsuario')->only('edit', 'update');
    }*/
    // Mostrar todos los usuarios
    public function index()
    {
        $usuarios = User::all(); // Obtiene todos los usuarios
        return view('admin.gestionUsuarios', compact('usuarios'));
    }

    // Mostrar formulario para crear un usuario
    public function create()
    {
        return view('auth.register');
    }

    // Guardar un nuevo usuario
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado con éxito.');
    }

    // Mostrar formulario para editar un usuario
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.editarUsuario', compact('usuario'));
    }

    // Actualizar un usuario existente
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $usuario->id,
        ]);

        $usuario->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado con éxito.');
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado con éxito.');
    }
}
