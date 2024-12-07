<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Mostrar todos los usuarios
    public function index1()
    {
        $usuarios = User::all(); // Obtiene todos los usuarios
        return view('usuarios.index', compact('usuarios'));
    }

    // Mostrar formulario para crear un usuario
    public function create()
    {
        return view('usuarios.create');
    }

    // Guardar un nuevo usuario
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'producto' => 'required|string',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'producto' => $request->producto,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado con éxito.');
    }

    // Mostrar formulario para editar un usuario
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    // Actualizar un usuario existente
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $usuario->id,
            'producto' => 'required|string',
        ]);

        $usuario->update([
            'name' => $request->name,
            'email' => $request->email,
            'producto' => $request->producto,
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
