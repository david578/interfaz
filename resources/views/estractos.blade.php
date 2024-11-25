@extends('layouts.contenido')
@section('titulo','Estractos')

@section('content')
        <!-- Sección de retiro -->
        <div class="main-content">
            
            <div class="retiro-box">
                <h2>Estractos bancarios</h2>
                <!-- <form>
                    <label for="cuenta">Número de Cuenta:</label>
                    <input type="text" id="cuenta" name="cuenta" required>

                    <label for="monto">Monto a Retirar:</label>
                    <input type="number" id="monto" name="monto" required>

                    <div class="buttons">
                        <button type="submit" class="btn retirar-btn">Retirar</button>
                        <button type="button" class="btn simular-btn">Simular Retiro</button>
                    </div>
                </form> -->
                <table class="table">
                    <caption>Lista</caption>
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">fecha</th>
                        <th scope="col">descripcion</th>
                        <th scope="col">monto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>$0</td>
                        <td>$0</td>
                        <td>$0</td>
                        </tr>
                    
                    
                    </tbody>
                    </table>
                <p class="advertencia">Advertencia: Montos superiores a 3.000.000 requieren autorización adicional.</p>
            </div>
        </div>
    </div>
 @endsection
