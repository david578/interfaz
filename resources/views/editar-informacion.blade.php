@extends('layouts.plantilla')

@section('contenido')
<div class="div-edit">
    
    <form class="formulario" action="" method="post">
        <div class="div-flex2">
            <li>
                <a class="" href="">
                    <img src="flecha.png" style="width: 25px;">
                </a>
            </li>
            <li>
                <h2 style="text-align:center;" >Informacion-Cuenta</h2>
            </li>
        </div>

        <label>Nombre de cuenta</label>
        <input class="form-control" type="text" value="">

        <label>Descripcion</label>
        <input class="form-control" type="text" value="">

        <label>Telefono</label>
        <input class="form-control" type="text" value="">

        <label>Direccion</label>
        <input class="form-control" type="text" value="">
        <div class="div-botones">
            
            <a type="submit" class="btn bg-primary" >Guardar cambios</a>
        </div>
        
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection