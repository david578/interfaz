<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Inicio</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('/css/homestyles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/adminstyles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://github.com/tailwindlabs/tailwindcss-typography.git">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title', 'BancApp')</title>
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
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <!-- Header -->
    <header>
        <img src="{{ asset('/img/3d_avatar_1.png') }}" alt="Admin Avatar" id="profile-pic">
        <h1>{{ Auth::user()->name }} - Admin</h1>
    </header>

    <!-- Sidebar -->
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

    @yield('content')

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
        <!-- Scripts -->
        <script>
            // AJAX para agregar un nuevo producto
            $('#agregarProductoForm').submit(function(e) {
                e.preventDefault();
                let nombre = $('#nombre').val();
                $.ajax({
                    url: "{{ route('productos.agregar') }}",
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        nombre: nombre
                    },
                    success: function(response) {
                        if (response.success) {
                            let nuevoProducto = `
                                <div class="col-md-3 mb-3" id="producto-${response.producto.id}">
                                    <div class="card">
                                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="${response.producto.nombre}">
                                        <div class="card-body">
                                            <p class="card-text">${response.producto.nombre}</p>
                                        </div>
                                    </div>
                                </div>
                            `;
                            $('#productos-list').append(nuevoProducto);
                            $('#modalAgregar').modal('hide');
                        }
                    },
                    error: function() {
                        alert("Hubo un error al agregar el producto.");
                    }
                });
            });
    
            // AJAX para eliminar un producto
            $('#eliminarProductoBtn').click(function() {
                let productoId = $('#productoEliminar').val();
                $.ajax({
                    url: `{{ url('productos') }}/${productoId}`,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        if (response.success) {
                            $(`#producto-${productoId}`).remove();
                            $('#modalEliminar').modal('hide');
                        }
                    },
                    error: function() {
                        alert("Hubo un error al eliminar el producto.");
                    }
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
