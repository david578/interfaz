@extends('layouts.headerfooterAdmin')

@section('content')
<div class="container py-4" style="background-color: #eaf6ff;">
    <h1 class="mb-4" style="font-weight: bold;">Dashboard Clientes</h1>

    <!-- Métricas -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-center p-3">
                <h5>Usuarios Totales</h5>
                <h2 style="color: #343a40;">15,432</h2>
                <p style="color: #28a745;">▲ 8.5% Up from yesterday</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-3">
                <h5>Total Productos Adquiridos</h5>
                <h2 style="color: #343a40;">10,293</h2>
                <p style="color: #17a2b8;">▲ 1.3% Up from past week</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-3">
                <h5>Total Ventas</h5>
                <h2 style="color: #343a40;">$89,000</h2>
                <p style="color: #dc3545;">▼ 4.3% Down from yesterday</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-3">
                <h5>En Mora</h5>
                <h2 style="color: #343a40;">2,040</h2>
                <p style="color: #ffc107;">▲ 1.8% Up from yesterday</p>
            </div>
        </div>
    </div>

    <!-- Gráfica -->
    <div class="card mb-4">
        <div class="card-body">
            <h5>Detalles Ventas</h5>
            <canvas id="salesChart" height="100"></canvas>
        </div>
    </div>

    <!-- Tabla -->
    <div class="card">
        <div class="card-body">
            <h5>Detalles Productos</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Cliente</th>
                        <th>Date - Time</th>
                        <th>Cantidad</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Centro de Ahorro</td>
                        <td>Juan Pérez</td>
                        <td>12.09.2019 - 12:53 PM</td>
                        <td>$34,295</td>
                        <td><span class="badge bg-success">Abierto</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                datasets: [{
                    label: 'Ventas en $',
                    data: [12000, 15000, 14000, 18000, 20000, 22000],
                    borderColor: '#007bff',
                    backgroundColor: 'rgba(0, 123, 255, 0.1)',
                    borderWidth: 2,
                    tension: 0.4,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endsection
