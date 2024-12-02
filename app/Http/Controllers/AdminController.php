<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de importar el modelo User


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.inicio');
    }

    // Mostrar la lista de usuarios
    public function index1()
    {
        $usuarios = User::all(); // Obtener todos los usuarios
        return view('admin.gestionUsuarios', compact('usuarios'));
    }

    // Mostrar formulario para crear un usuario
    public function create()
    {
        return view('usuarios.create');
    }

    // Guardar un nuevo usuario en la base de datos
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:users,email',
            'contraseña' => 'required|string|min:6',
            'producto' => 'required|string|max:255',
        ]);

        User::create([
            'name' => $validated['nombre'],
            'email' => $validated['correo'],
            'password' => bcrypt($validated['contraseña']),
            'producto' => $validated['producto'],
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente.');
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
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:users,email,' . $id,
            'producto' => 'required|string|max:255',
        ]);

        $usuario = User::findOrFail($id);
        $usuario->update([
            'name' => $validated['nombre'],
            'email' => $validated['correo'],
            'producto' => $validated['producto'],
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    }
}
