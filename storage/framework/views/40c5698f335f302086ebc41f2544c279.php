<?php $__env->startSection('contenido'); ?>
<a class="" href="">
        <img src="flecha.png" style="width: 25px;">
    </a>
<div class="div-buscar">
    <input class="form-control mt-2 mb-2  search_tables" style="width: 300px;" data-table="table-users"  type="text" placeholder="Search">
    <a class="btn btn-primary" href=""><h6>Buscar empleados</h6></a>
</div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Numero de cuenta</th>
            <th scope="col">Cargo</th>
            <th scope="col">Sueldo</th>
        </tr>
    </thead>

    <tbody id="table-users">
        
        <tr class="">
            <td scope="row"></td>
            <td scope="row"></td>
            <td scope="row"></td>
            <td scope="row"></td>
            <td scope="row"></td>
            <td scope="row"></td>
        </tr>

    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bancapp\resources\views/vista-nomina.blade.php ENDPATH**/ ?>