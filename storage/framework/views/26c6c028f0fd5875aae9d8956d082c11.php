<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestionar_cuentas</title>
    <link rel="stylesheet" href="<?php echo e(asset('post-inicio.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('estilos-nomina.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('estilos-transaccion.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('estilos-cuentas.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('estilos-editinformacion.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('estilos-extractos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('estilos-transferencia.css')); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <h2>BancApp</h2>
        <nav class="nav-iconos">
            <h6>Cuenta</h6>
            <img src="usuario.png" style="width: 30px">
            <img src="notificacion1.png" style="width:30px">
        </nav>
    </header>
    <div class="div-fondo">
        <div class="menu-lateral">
            <ul class="item1">
                <li id="item1">   
                    <img src="house.svg">
                </li>
                <li id="item1">
                    <a href="<?php echo e(route('hacer.transaccion')); ?>">
                        <h6>Inicio</h6>
                    </a>    
                </li>
            </ul>

            <ul class="item2">
                <li id="item2">
                    <img src="people-fill.svg">
                </li>
                <li id="item2">
                    <a href="<?php echo e(route('gestionar.cuentas')); ?>">
                        <h6>Gestion de cuentas</h6>
                    </a>
                    
                </li>
            </ul>
                
            <ul class="item3">
                <li id="item3">
                    <img src="cash-stack.svg">
                </li>
                <li id="item3">
                    <a>
                        <h6>Movimientos</h6>
                    </a>
                    
                </li>
            </ul>

                <ul class="item4">
                    <li id="item4">
                        <img src="file-earmark.svg">
                    </li>
                    <li id="item4">
                        <a href="<?php echo e(route('ruta.extractos')); ?>">
                            <h6>Consultar y descargar extractos</h6>
                        </a>
                    </li>    
                </ul>
            </ul>
        </div>

        <div class="div-contenido">
        <?php echo $__env->yieldContent('contenido'); ?> <?php $__env->startSection('contenido'); ?><?php $__env->stopSection(); ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
    </div>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\Bancapp\resources\views/layouts/plantilla.blade.php ENDPATH**/ ?>