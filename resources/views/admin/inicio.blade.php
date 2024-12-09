@extends('layouts.headerFooterAdmin')

@section('content')
  <!-- Main Content -->
    <main>
        <h2>BIENVENIDO ADMIN</h2>
        <p>Con qué quieres comenzar hoy</p>
        <div class="options">
            <div class="option" onclick="window.location.href='{{ route('usuarios.listado') }}'">
                <img src="{{ asset('https://img.freepik.com/vector-gratis/concepto-gestion-empresarial-remota-empresario-sosteniendo-tableta-que-muestra-analisis-graficos-conectados_1284-44658.jpg?semt=ais_hybrid') }}" alt="Gestión de Usuarios">
                <h3>GESTIÓN DE USUARIOS</h3>
            </div>
            <div class="option" onclick="window.location.href='{{ route('dashboard') }}'">
                <img src="{{ asset('https://img.freepik.com/vector-gratis/ilustracion-concepto-estadisticas-sitio_114360-1434.jpg?semt=ais_hybrid') }}" alt="Dashboard Cliente">
                <h3>DASHBOARD CLIENTE</h3>
            </div>
            <div class="option" onclick="window.location.href='{{ route('productos.index') }}'">
                <img src="{{ asset('https://img.freepik.com/vector-gratis/concepto-ahorro-dinero_1284-15399.jpg?semt=ais_hybrid') }}" alt="Productos Bancarios">
                <h3>PRODUCTOS BANCARIOS</h3>
            </div>
        </div>        
    </main>
@endsection
