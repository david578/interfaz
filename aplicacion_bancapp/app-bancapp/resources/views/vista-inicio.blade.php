<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('inicio.css') }}">
</head>
<body>
    <header>
        <h2>BancApp-Empresa</h2>
    </header>

    <div class="home">
        <h2>Bienvenido</h2>
        <h3>¿Que quieres hacer?</h3>
    
        <ul class="icono">
            <li><a href="gestion-cuentas">
                    <img src="people-fill.svg">
                    
                </a>
                <br><h4>Gestionar mis cuentas</h4>
            </li>
            <li><a href="#">
                    <img src="cash-stack.svg">
                    
                </a>
                <br><h4>Realizar transacciones</h4>
            </li>
            <li><a href="#">
                    <img src="file-earmark.svg">
                    
                </a>
                <br><h4>Consultar y descargar extractos</h4>
            </li>
            <!--<li><a href="#">
                    <img src="box-arrow-left.svg">
                    
                </a>
                <br><h4>Salir</h4>
            </li>-->
         </ul>
         <ul class="icono-salir">
            <li><a href="#">
                    <img src="box-arrow-left.svg">
                </a>
                <br><h4>Salir</h4>
            </li>
         </ul>   
    </div>
    
</body>
</html>