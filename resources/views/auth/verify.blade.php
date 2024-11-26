<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('/css/homestyles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://github.com/tailwindlabs/tailwindcss-typography.git">
    <title>BancApp - Verificar Código</title>
    <style>
        .card {
            border-radius: 15px;
            background-color: #ffffff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin: auto
            
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-title">
            <h2>BANCAPP</h2>
        </div>
    </nav>
    <div class="card p-6 w-96">
        <h3 class="text-center mb-3 text-blue-500 font-semibold">Verificar Código</h3>
        <div class="text-center mb-4">
            <img src="{{ asset('images/verification.png') }}" alt="Verification Icon" class="w-12 h-12 mx-auto">
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
    <footer class="footer bg-blue-400 text-black p-4">
        <div class="grid grid-cols-2 items-center">
            <!-- Texto alineado a la izquierda -->
            <div class="justify-self-start">
                <p class="foot-text">&copy; 2024 Bancapp. Todos los derechos reservados.</p>
            </div>
            <!-- Iconos alineados a la derecha -->
            <div class="icons flex justify-end space-x-4">
                <img width="30" height="30" src="https://img.icons8.com/ios/50/instagram-new--v1.png" alt="icono-ig">
                <img width="30" height="30" src="https://img.icons8.com/ios/50/youtube-play--v1.png" alt="icono-youtube">
                <img width="30" height="30" src="https://img.icons8.com/ios/50/facebook-new.png" alt="icono-facebook">
                <img width="30" height="30" src="https://img.icons8.com/ios/50/twitterx--v2.png" alt="icono-x">
            </div>
        </div>
    </footer>
</body>
</html>
