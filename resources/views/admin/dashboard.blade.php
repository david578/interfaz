@extends('layouts.header_footer')

@section('content')
<div class="container">
    <!-- Título -->
    <h1 class="text-center mb-4">Dashboard Clientes</h1>

    <!-- Tarjetas -->
    <div class="row">
        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Usuarios Totales</h5>
                    <p class="card-text display-4">15,432</p>
                    <small class="text-success">⬆️ 8.9% Up from yesterday</small>
                </div>
            </div>
        </div>
        <!-- Repite la estructura para otras tarjetas -->
    </div>

    <!-- Gráfica -->
    <div class="my-4">
        <canvas id="ventasChart"></canvas>
    </div>

    <!-- Tabla -->
    <div class="card">
        <div class="card-header">
            Detalles Productos
        </div>
        <div class="card-body">
            <table class="table">
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
                        <td>Cuenta de Ahorros</td>
                        <td>Juan Pérez</td>
                        <td>12.09.2019 - 12:53 PM</td>
                        <td>$34,295</td>
                        <td><span class="badge bg-success">Abierta</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('ventasChart').getContext('2d');
    const ventasChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['10k', '20k', '30k', '40k', '50k', '60k'],
            datasets: [{
                label: 'Ventas',
                data: [10, 20, 15, 30, 25, 40],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                fill: false
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Ventas ($)'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Porcentaje (%)'
                    }
                }
            }
        }
    });
</script>
@endsection
