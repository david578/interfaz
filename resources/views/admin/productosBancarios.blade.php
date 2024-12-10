<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Bancarios</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('/css/homestyles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/adminstyles.css') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://github.com/tailwindlabs/tailwindcss-typography.git">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Dm Sans';
            margin: 0;
            padding: 0;
            background-color: #f1f9ff;
            overflow-x: hidden;
        }

        header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
            border-bottom: 1px solid #ddd;
            position: relative;
        }

        header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
        }

        header h1 {
            font-size: 24px;
            margin-left: 10px;
            font-weight: bold;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100%;
            background-color: #ffffff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            padding: 20px;
            transition: left 0.3s ease;
            z-index: 1000;
        }

        .sidebar.active {
            left: 0;

        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 20px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            font-size: 18px;
            color: #000;
            font-weight: bold;
        }

        main {
            text-align: center;
            padding: 20px;
        }

        main h2 {
            font-size: 28px;
            color: #000;
            margin-bottom: 10px;
        }

        main p {
            font-size: 18px;
            margin-bottom: 30px;
            font-weight: bold
        }

        .options {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .option {
            width: 300px;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            text-align: center;
        }

        .option:hover {
            transform: translateY(-10px);
            cursor: pointer;
            border-block-color: blue;
        }

        .option img {
            width: max-content;
            margin-bottom: 15px;
        }

        .option h3 {
            font-size: 20px;
            color: #000;
            margin-bottom: 10px;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            border-radius: 8px;
        }
        .card img {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
    </style>
</head>
<body>

    <header>
        <img src="{{ asset('/img/3d_avatar_1.png') }}" alt="Admin Avatar" id="profile-pic">
        <h1>ADMIN</h1>
    </header>
    <!-- Header -->
    <div class="sidebar" id="sidebar">
        <ul>
            <li><a href="{{ route('admin.inicio') }}">Inicio</a></li>
            <li><a href="{{ route('usuarios.listado') }}">Gestion Usuarios</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('productos.index') }}">Productos Bancarios</a></li>
            <li>
                @auth
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 hover:underline">Cerrar Sesión</button>
                </form>
                @endauth
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <main class="container my-1">
        <h1 class="text-center pb-3 text-3xl bold">Productos Bancarios</h1>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://img.freepik.com/foto-gratis/no-puedo-creer-que-nos-vayamos-vacaciones-pareja-joven-emocionada-celebrando-gritando-felicidad-despues-recibir-sus-pasaportes-boletos-avion-agencia-viajes_662251-2258.jpg?t=st=1733779791~exp=1733783391~hmac=68c4718d781862dc98c2f69de08994ea2f7eeb2b21aa23087fadf3794d3c7caf&w=740" class="card-img-top" alt="Préstamos Comerciales">
                    <div class="card-body">
                        <p class="card-text">Préstamos Comerciales</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://img.freepik.com/foto-gratis/retrato-hombre-leer-cartas_23-2148935065.jpg?t=st=1733779939~exp=1733783539~hmac=eb7bc88d184775996c1b0d77c65f6e7ff7d1972ef5c822acaea5349aef4cbba9&w=150" class="card-img-top" alt="Cuenta Corriente">
                    <div class="card-body">
                        <p class="card-text">Cuenta Corriente</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://img.freepik.com/foto-gratis/hombre-calculando-ahorros-mensuales_23-2148294829.jpg?semt=ais_hybrid" class="card-img-top" alt="Cuenta de Ahorros">
                    <div class="card-body">
                        <p class="card-text">Cuenta de Ahorros</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://img.freepik.com/foto-gratis/pago-tarjeta-credito-compra-venta-productos-servicios_1150-16379.jpg?semt=ais_hybrid" class="card-img-top" alt="Tarjetas débito y crédito">
                    <div class="card-body">
                        <p class="card-text">Tarjetas débito y crédito</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 text-center my-6 gap-x-4 content-center">
            <button class="btn btn-primary text-sm py-1" data-bs-toggle="modal" data-bs-target="#modalAgregar">Añadir Nuevo Producto</button>
            <button class="btn btn-danger text-sm py-1" data-bs-toggle="modal" data-bs-target="#modalEliminar">Eliminar Producto</button>
        </div>
    </main>
    <!-- Modal Añadir -->
    <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAgregarLabel">¡Producto añadido exitosamente!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Si no logras visualizar el nuevo producto, presiona F5 para recargar la página.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success">Confirmar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Eliminar -->
    <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEliminarLabel">¿Seguro que quieres eliminar este producto?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Ten en cuenta que esta acción no se podrá deshacer.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const profilePic = document.getElementById('profile-pic');
        const sidebar = document.getElementById('sidebar');

        // Mostrar/Ocultar Sidebar
        profilePic.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });

        // Ocultar Sidebar al hacer clic fuera de ella
        document.addEventListener('click', (event) => {
            if (!sidebar.contains(event.target) && !profilePic.contains(event.target)) {
                sidebar.classList.remove('active');
            }
        });
    </script>
</body>
</html>
