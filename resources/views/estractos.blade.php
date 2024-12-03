@extends('layouts.contenido')
@section('titulo','Estractos')

@section('content')
        <!-- Sección de retiro -->
        <div class="main-content">
            
            <div class="retiro-box">
                <h2>Estractos bancarios</h2>
                
                <table class="table">
                    <caption>Lista</caption>
                    <thead>
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
                    <div class="buttons">
                        <button type="submit" class="btn retirar-btn">Descargar</button>
                    </div>
                
            </div>
        </div>
    </div>
 @endsection
