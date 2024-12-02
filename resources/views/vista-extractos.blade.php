@extends('layouts.plantilla')

@section('contenido')
    <div class="div-extractos">
        <h2 style="text-align: center;" >Generar extractos</h2>
        <select class="form-select" aria-label="Default select example">
            <option selected>Selecciona el periodo</option>
            <option value="1">mensual</option>
            <option value="2">trimestral</option>
            <option value="3">semestral</option>
            <option value="3">anual</option>
        </select>

        <div class="div-productos">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    <h6>Cuenta de ahorros</h6>
                </label>
            </div>
            

            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    <h6>Cuenta corriente</h6>
                </label>
            </div>
           
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    <h6>Tarjeta de credito</h6>
                </label>
            </div>
        </div>
            
        <div class="div-botones">
            <a class="btn btn-primary" href="#">
                Ver en PDF
            </a>

            <a class="btn btn-primary" href="#">
                Ver en CSV
            </a>
        </div>

    </div>

@endsection