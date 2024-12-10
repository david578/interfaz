<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Muestra la lista de productos (opcional).
     */
    public function productosBancarios()
    {
        $productos = Producto::all();
        return view('admin.productosBancarios', compact('productos'));
    }

    /**
     * Agrega un nuevo producto a la base de datos.
     */
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'precio' => 'required|numeric|min:0',
        ]);

        // Manejo de la imagen
        $imagenPath = null;
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('productos', 'public');
        }

        // Crear el producto
        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $imagenPath,
            'precio' => $request->precio,
        ]);

        return response()->json([
            'message' => 'Producto añadido exitosamente.',
        ], 201);
    }

    /**
     * Elimina un producto de la base de datos.
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);

        // Eliminar la imagen asociada si existe
        if ($producto->imagen) {
            Storage::disk('public')->delete($producto->imagen);
        }

        // Eliminar el producto
        $producto->delete();

        return response()->json([
            'message' => 'Producto eliminado exitosamente.',
        ], 200);
    }
}
