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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        
    </header>

    <div class="menu-lateral">
        <ul class="item1">
            <li id="item1">   
                <img src="house.svg">
            </li>
            <li id="item1">
                <h6>Inicio</h6>
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
                <a href="<?php echo e(Route('hacer.transaccion')); ?>">
                    <h6>Transacciones</h6>
                </a>
                
            </li>
        </ul>

            <ul class="item4">
                <li id="item4">
                    <img src="file-earmark.svg">
                </li>
                <li id="item4">
                    <h6>Consultar y descargar extractos</h6>
                </li>    
            </ul>
        </ul>
    </div>

    <div class="div-contenido">
       <?php echo $__env->yieldContent('contenido'); ?> <?php $__env->startSection('contenido'); ?><?php $__env->stopSection(); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\Bancapp\resources\views/layouts/plantilla.blade.php ENDPATH**/ ?>