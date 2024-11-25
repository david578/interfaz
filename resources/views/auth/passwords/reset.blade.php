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
    <title>BancApp</title>
</head>
<body>
    <nav class="navbar">
        <div class="nav-title">
            <h2>BANCAPP</h2>
        </div>
    </nav>
     <!-- Formulario centrado -->
     <div class="flex justify-center items-center flex-grow">
        <div class="bg-white p-8 rounded-lg shadow-lg" style="width: 28rem; text-align: center;">
            <!-- Título -->
            <h2 class="text-2xl font-semibold text-blue-500 mb-4">Nueva contraseña</h2>
            <!-- Icono -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/check-icon.png') }}" alt="Icono de verificación" style="width: 50px; height: 50px;">
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
