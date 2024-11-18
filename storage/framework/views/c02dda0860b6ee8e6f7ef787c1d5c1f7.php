<?php $__env->startSection('contenido'); ?>
    <div class="contenido1">
        <h6>Numero de cuenta:</h6><br>
        <h6>Saldo disponible:</h6><br>
        <h6>Saldo total:</h6>
    </div>

    <div class="contenido-botones">
        <ul>
            <a class="btn btn-secondary" href="<?php echo e(route('pago.nomina')); ?>">Nomina</a>
        </ul>
        <ul>
            <a class="btn btn-secondary">Transferir</a>
        </ul>
        <ul>
            <a class="btn btn-secondary">Retirar</a>
        </ul>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bancapp\resources\views/vista-transacciones.blade.php ENDPATH**/ ?>