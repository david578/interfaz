@extends('layouts.plantilla')

@section('contenido')
    <div class="contenido1">
        <h2 style="text-align: center;" >Transacciones</h2>
        <h6>Numero de cuenta:</h6><br>
        <h6>Saldo disponible:</h6><br>
        <h6>Saldo total:</h6>
    </div>

    <div class="contenido-botones">
        <li>
            <a class="btn btn-primary" href="{{route('pago.nomina')}}">Nomina</a>
        </li>
        <li>
            <a class="btn btn-primary" href="{{route('ruta.transfiere')}}" >Transferir</a>
        </li>
        <li>
            <a class="btn btn-primary" href="{{route('ruta.retiros')}}" >Retirar</a>
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

@endsection