@extends('layouts.plantilla')

@section('contenido')
<div class="div-contenido-tranferir">
    <h3 style="text-align: center;">Transferencias</h3>
    <select class="form-select">
        <option selected>Selecciona el tipo de cuenta</option>
        <option value="1">Cuenta empresarial</option>
        <option value="2">Cuenta natural</option>  
    </select><br>

    <div class="div-input">
        <input type="text" class="form-control" id="labelNombre" placeholder="Digite el numero de cuenta" >
    </div>

    <div class="div-input">
        <input type="text" class="form-control" placeholder="digite el monto a transferir"> 
    </div>

    <div class="div-botone">
        <a href="" class="btn btn-primary">transferir</a>
    </div>
</div>

@endsection