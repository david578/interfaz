@extends('layouts.header_footer')

@section('title', 'Recuperar Contraseña')

@section('content')
<!-- Formulario centrado -->
     <div class="flex justify-center items-center flex-grow min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg mb-28" style="width: 28rem; text-align: center;">
            <!-- Título -->
            <h2 class="text-2xl font-semibold text-blue-500 mb-4">Nueva contraseña</h2>
            <!-- Icono -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('https://img.icons8.com/ios-filled/50/password-check.png') }}" alt="Icono de verificación" style="width: 50px; height: 50px;">
            </div>
            <!-- Mensaje -->
            <p class="text-gray-600 mb-6">Por favor ingresa tu nueva contraseña</p>
            <!-- Formulario -->
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <!-- Nueva contraseña -->
                <div class="mb-4">
                    <input 
                        type="password" 
                        name="password" 
                        class="border border-gray-300 p-2 rounded w-full" 
                        placeholder="Nueva contraseña" 
                        required>
                </div>
                <!-- Confirmar contraseña -->
                <div class="mb-4">
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        class="border border-gray-300 p-2 rounded w-full" 
                        placeholder="Confirmar contraseña" 
                        required>
                </div>
                <!-- Botón -->
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white px-4 py-2 rounded w-full hover:bg-blue-600">
                    Establecer nueva contraseña
                </button>
            </form>
            <!-- Mensaje de éxito -->
            @if(session('status'))
                <div class="bg-green-100 text-green-600 p-2 rounded mt-4">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
@endsection
