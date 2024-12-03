@extends('layouts.header_footer')

@section('title', 'Recuperar Contraseña')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-blue-100">
    <div class="bg-gradient-to-b from-blue-300 shadow-lg rounded-lg p-6 mb-28 w-full max-w-md">
        <h3 class="text-center text-2xl mb-3 text-black font-semibold">Verificar Código</h3>
        <div class="text-center mb-4">
            <img src="{{ asset('https://img.icons8.com/material-rounded/24/sms-token.png') }}" alt="Verification Icon" class="w-12 h-12 mx-auto">
        </div>
        <p class="text-center mb-4 text-gray-600">
            Ingresa el código de verificación enviado a tu correo. Si no lo has recibido, puedes solicitar uno nuevo.
        </p>

        <!-- Formulario para ingresar el código -->
        <form method="POST" action="{{ route('password.verify.code') }}">
            @csrf
            <div class="mb-4">
                <input type="text" name="code" class="form-control block w-full border-gray-300 rounded-lg shadow-sm @error('code') is-invalid @enderror" placeholder="Código de verificación" required>
                @error('code')
                    <span class="text-red-500 text-sm mt-1"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                    Verificar Código
                </button>
            </div>
        </form>

        <!-- Botón para reenviar el código -->
        <form method="POST" action="{{ route('password.resend.code') }}" class="mt-4">
            @csrf
            <div class="flex justify-center">
                <button type="submit" class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600">
                    Reenviar Código
                </button>
            </div>
        </form>

        @if(session('status'))
            <div class="alert alert-success mt-3 text-green-600" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger mt-3 text-red-600" role="alert">
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>
@endsection