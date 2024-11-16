@extends('layouts.plantilla')

@section('contenido')
    <div class="contenido1">
        <h6>Numero de cuenta:</h6><br>
        <h6>Saldo disponible:</h6><br>
        <h6>Saldo total:</h6>
    </div>

    <div class="contenido-botones">
        <ul>
            <a class="btn btn-secondary" href="{{route('pago.nomina')}}">Nomina</a>
        </ul>
        <ul>
            <a class="btn btn-secondary">Transferir</a>
        </ul>
        <ul>
            <a class="btn btn-secondary">Retirar</a>
        </ul>
    </div>

@endsection