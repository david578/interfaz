@extends('layouts.plantilla')

@section('contenido')
  
    <div class="div-informacion-personal">
        <h2 style="text-align: center;" >Gestionar Cuenta</h2>
        <li>
            <h4>Actualizar cuenta</h4>
        </li>
        <li>
            <a href="{{route('ruta.editarinfo')}}">Mostrar mas</a>
        </li>
    </div>

    <div class="div-eliminar-cuenta">
        <li>
            <h4>Eliminar cuenta</h4>
        </li>
        <li>
            <a href="{{route('ruta.eliminar.cuenta')}}">Mostrar mas</a>
        </li>  
    </div>
    <!--<div class="boton-eliminar">
        <a class="btn btn-primary" href="">Eliminar</a>
    </div>-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection