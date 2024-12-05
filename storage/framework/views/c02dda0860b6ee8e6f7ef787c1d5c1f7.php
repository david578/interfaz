<?php $__env->startSection('contenido'); ?>
    <div class="contenido1">
        <h2 style="text-align: center;" >Transacciones</h2>
        <h6>Numero de cuenta:</h6><br>
        <h6>Saldo disponible:</h6><br>
        <h6>Saldo total:</h6>
    </div>

    <div class="contenido-botones">
        <li>
            <a class="btn btn-primary" href="<?php echo e(route('pago.nomina')); ?>">Nomina</a>
        </li>
        <li>
            <a class="btn btn-primary" href="<?php echo e(route('ruta.transfiere')); ?>" >Transferir</a>
        </li>
        <li>
            <a class="btn btn-primary" href="<?php echo e(route('ruta.retiros')); ?>" >Retirar</a>
        </li>
    </div>
    <div class="titulo-movimientos">
        <h3>Movimientos</h3>
    </div>

    <div class="contenido-movimientos">
        <h4>Noviembre</h4>
        <nav>
            <img src="usuario.png" style="width: 30px;" >
            <h5>cuenta</h5> 
        </nav>
        <nav>
            <h6>08/11/2024</h6>
        </nav>
        <a href="">Ver mas</a>
        <nav class="nav-dinero" >
            <h6>-$ 1.300.000</h6>
        </nav>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bancapp\resources\views/vista-transacciones.blade.php ENDPATH**/ ?>