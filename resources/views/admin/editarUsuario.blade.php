@extends('layouts.headerFooterAdmin')

@section('content')
    <main>
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold text-center my-6">Editar Usuario</h1>

            @if (session('success'))
                <div class="bg-green-100 text-green-800 border border-green-200 p-4 mb-4 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 text-red-800 border border-red-200 p-4 mb-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('usuarios.actualizar', $usuario->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- ID (Solo Lectura) -->
                <div class="mb-4">
                    <label for="id" class="block font-semibold mb-1">ID</label>
                    <input type="text" id="id" name="id" value="{{ $usuario->id }}" class="w-full border-gray-300 rounded p-2" readonly>
                </div>

                <!-- Nombre -->
                <div class="mb-4">
                    <label for="name" class="block font-semibold mb-1">Nombre</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $usuario->name) }}" 
                           class="w-full border-gray-300 rounded p-2 @error('name') border-red-500 @enderror" required>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Correo -->
                <div class="mb-4">
                    <label for="email" class="block font-semibold mb-1">Correo</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $usuario->email) }}" 
                           class="w-full border-gray-300 rounded p-2 @error('email') border-red-500 @enderror" required>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Contraseña -->
                <div class="mb-4">
                    <label for="password" class="block font-semibold mb-1">Contraseña (Dejar en blanco para no cambiar)</label>
                    <input type="password" id="password" name="password" 
                           class="w-full border-gray-300 rounded p-2 @error('password') border-red-500 @enderror">
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Foto -->
                <div class="mb-4">
                    <label for="photo" class="block font-semibold mb-1">Foto de Usuario</label>
                    <input type="file" id="photo" name="photo" 
                           class="w-full border-gray-300 rounded p-2 @error('photo') border-red-500 @enderror">
                    @if ($usuario->photo)
                        <img src="{{ asset('storage/' . $usuario->photo) }}" alt="Foto de usuario" class="mt-2 rounded w-32 h-32">
                    @endif
                    @error('photo')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Botones -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mr-2">Guardar Cambios</button>
                    <a href="{{ route('usuarios.listado') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
@endsection
