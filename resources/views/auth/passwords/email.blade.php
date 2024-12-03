@extends('layouts.header_footer')

@section('title', 'Recuperar Contraseña')

@section('content')
<div class="main-content">
    <div class="flex items-center justify-center min-h-screen bg-blue-100">
        <div class="bg-white shadow-lg rounded-lg p-6 mb-28 w-full max-w-md">
            <h3 class="text-center text-2xl font-semibold text-blue-600 mb-4">Recuperar Contraseña</h3>
            <div class="text-center mb-6">
                <img src="{{ asset('https://img.icons8.com/color/48/lock--v1.png') }}" alt="Lock Icon" class="w-12 h-12 mx-auto">
            </div>
            <p class="text-center text-gray-600 mb-6">
                Para recuperar tu contraseña, ingresa tu correo electrónico para enviarte un código de verificación.
            </p>
            <form method="POST" action="{{ route('password.email.code') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" name="email" id="email" 
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror" 
                        placeholder="tucorreo@ejemplo.com" required>
                    @error('email')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit" 
                            class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Recuperar
                    </button>
                </div>
            </form>
            @if(session('status'))
                <div class="mt-4 text-green-600 text-sm">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
