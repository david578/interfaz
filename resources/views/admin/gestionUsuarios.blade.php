@extends('layouts.headerFooterAdmin')

@section('content')
    <main>
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold text-center my-6">GESTIÓN DE USUARIOS</h1>
            <a href="{{ route('usuarios.nuevo') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Añadir Usuario</a>
        
            <table class="table-auto w-full mt-4 border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Nombre</th>
                        <th class="border border-gray-300 px-4 py-2">Correo</th>
                        <th class="border border-gray-300 px-4 py-2">Contraseña</th>
                        <th class="border border-gray-300 px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $usuario->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $usuario->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $usuario->email }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $usuario->password }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{ route('usuarios.editar', $usuario->id) }}" class="text-blue-500 hover:bg-red-200">Editar</a>
                            <form action="{{ route('usuarios.eliminar', $usuario->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:bg-blue-400" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
