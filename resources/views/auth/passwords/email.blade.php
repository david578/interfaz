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
    <div class="sm:mx-auto sm:w-full sm:max-w-lg pt-0 pb-20 mt-3 mb-10 rounded bg-gradient-to-b from-blue-500">
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #E9F5FF;">
            <div class="card p-4" style="width: 30rem; border-radius: 15px; background-color: #ffffff; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                <h3 class="text-center mb-3" style="color: #007BFF;">Recuperar contraseña</h3>
                <div class="text-center mb-4">
                    <img src="{{ asset('images/lock.png') }}" alt="Lock Icon" style="width: 50px; height: 50px;">
                </div>
                <p class="text-center mb-4" style="color: #666666;">
                    Para recuperar tu contraseña, ingresa tu correo electrónico para enviarte un código de verificación.
                </p>
                <form method="POST" action="{{ route('password.email.code') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" style="background-color: #007BFF; border-color: #007BFF;">
                            Recuperar
                        </button>
                    </div>
                </form>
                @if(session('status'))
                    <div class="alert alert-success mt-3" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
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


