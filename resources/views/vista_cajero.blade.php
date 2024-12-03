@extends('layouts.contenido')
@section('content')
        <!-- Sección de retiro -->
        <div class="main-content">
            <div class="welcome">
                <h1>BIENVENIDO</h1>
            </div>
            <div class="retiro-box">
                <h2>Retiros de Dinero</h2>
                <form>
                    <label for="cuenta">Número de Cuenta:</label>
                    <input type="number" id="cuenta" name="cuenta" required>

                    <label for="monto">Monto a Retirar:</label>
                    <input type="number" id="monto" name="monto" required>
                    

                    <div class="buttons">
                        <button type="submit" class="btn retirar-btn" >Retirar</button>
                        <button type="submit" class="btn simular-btn">Simular Retiro</button>
                    </div>
                    
                </form>
                <p class="advertencia">Advertencia: Montos superiores a 3.000.000 requieren autorización adicional.</p>
            </div>
        </div>
    </div>
    
 @endsection
