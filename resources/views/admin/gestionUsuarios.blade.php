<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/homestyles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/adminstyles.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styles */
        header {
            background-color: #1e3a8a; /* Tailwind blue-900 */
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            z-index: 1000;
            top: 0;
            left: 0;
        }

        header .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        header .actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        header .actions button {
            background: none;
            border: none;
            cursor: pointer;
            color: white;
            font-size: 1.2rem;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: white;
            min-width: 150px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Main Content */
        main {
            padding: 20px;
            margin-top: 70px; /* To compensate for the fixed header */
        }

        .table-container {
            background: #f9fafb; /* Tailwind's gray-100 */
            border: 1px solid #e5e7eb; /* Tailwind's gray-200 */
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .table-header h1 {
            font-size: 24px;
            font-weight: bold;
        }

        .table-header button {
            background-color: #3b82f6; /* Tailwind blue-500 */
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table thead {
            background: #f3f4f6; /* Tailwind gray-200 */
        }

        table th,
        table td {
            text-align: left;
            padding: 12px 15px;
            border-bottom: 1px solid #e5e7eb; /* Tailwind gray-200 */
        }

        table th {
            font-weight: bold;
        }

        table tbody tr:hover {
            background: #e5e7eb; /* Tailwind gray-200 */
        }

        /* Footer */
        footer {
            margin-top: auto;
            background-color: #1e3a8a; /* Tailwind blue-900 */
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>

    <header>
        <img src="{{ asset('/img/3d_avatar_1.png') }}" alt="Admin Avatar" id="profile-pic">
        <h1>ADMIN</h1>

        <div class="actions">
            <!-- Botón de notificaciones -->
            <button title="Notificaciones">
                <img src="https://img.icons8.com/ios-glyphs/30/ffffff/bell--v1.png" alt="Notificaciones">
            </button>

            <!-- Menú desplegable -->
            <div class="dropdown">
                <button title="Configuración">
                    <img src="https://img.icons8.com/ios-glyphs/30/ffffff/settings.png" alt="Configuración">
                </button>
                <div class="dropdown-content">
                    <a href="#">Cerrar Sesión</a>
                </div>
            </div>
    </header>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Configuración</a></li>
            <li><a href="#">Cerrar Sesión</a></li>
        </ul>
    </div>
    <!-- Main Content -->
    <main>
        <div class="table-container">
            <div class="table-header">
                <h1>GESTIÓN DE USUARIOS</h1>
                <a href="{{ route('usuarios.create') }}" class="btn btn-blue">+ Añadir Usuario</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CORREO</th>
                        <th>PRODUCTO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->producto }}</td>
                        <td>
                            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-edit">Editar</a>
                            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer -->
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
</body>
</html>
