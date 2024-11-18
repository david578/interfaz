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
    <div class="sm:mx-auto sm:w-full sm:max-w-lg pt-0 pb-20 mt-3 mb-11 rounded bg-gradient-to-b bg-white">
        <div class="sm:mx-auto sm:w-full sm:max-w-lg text-center bg-blue-600">
            <div class="sm:mx-auto sm:w-full mt-4 py-4 sm:max-w-60 rounded bg-white">
                <p>Bienvenido a Bancapp</p>
            </div>
            <div>
                <p>Estamos aquí para ayudarte a organizar tus finanzas de manera rápida y sencilla</p>
            </div>
        </div>
        
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900"></label>
                    <div class="mt-2 justify-end">
                        <input id="email" name="email" type="email" autocomplete="email" placeholder="Email" required
                               class="block w-full text-center rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                               value="{{ old('email') }}">
                        @error('email')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900"></label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                               placeholder="Contraseña"
                               class="block w-full text-center rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        @error('password')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid grid-cols-2 mt-2">
                        <div class="text-sm">
                            <input type="checkbox" id="remember" name="remember" class="font-semibold text-indigo-600 hover:text-indigo-500">
                            <label for="remember">Recuérdame</label>
                        </div>
                        <div class="text-sm justify-self-end">
                            <a href="{{ route('password.request') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>
                </div>
            
                <div>
                    <button type="submit"
                            class="flex w-full justify-center rounded-md bg-blue-400 px-0 py-1.5 text-sm/6 font-semibold text-black shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Iniciar sesión
                    </button>
                </div>
            </form>
            <p class="mt-10 text-center text-sm/6 text-gray-500">
                ¿No tienes cuenta?
                <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Regístrate</a>
            </p>
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