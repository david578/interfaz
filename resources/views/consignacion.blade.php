@extends('layouts.contenido')
@section('titulo','Consignación')
@section('content')
        <!-- Sección de retiro -->
        <div class="main-content">
            <!-- <div class="welcome">
                <h1>BIENVENIDO JUAN</h1>
            </div> -->
            <div class="retiro-box">
                <h2>Consignaciones</h2>
                <form>

                <div class="text-dark">
                    <div class="d-flex align-items-baseline">
                        <label class="mr-2 mb-0">Número de Cuenta:</label>
                        <input type="number" class="mb-0"required>
                    </div>
                     <div class="d-flex align-items-baseline mt-2">
                        <label class="mr-2 mb-0">Monto a consignar:</label>
                        <input type="number" class="mb-0" required>
                     </div>
                 </div>
             <div class="buttons">
                        <button type="submit" class="btn retirar-btn">consignar</button>
                    </div>
                </form>
                <p class="advertencia">Advertencia: Montos superiores a 3.000.000 requieren autorización adicional.</p>
            </div>
        </div>
    </div>
 @endsection
