 @extends('layouts.contenido')
@section('titulo','Estado Cuenta')

 @section('content')
 <!-- Sección de retiro -->
  <div class="main-content">
            <div class="welcome">
                <!-- <h1>ESTADO DE CUENTA</h1> -->
            </div>
            <div class="retiro-box">
                <h2>Estado de cuenta</h2>
                <form>
                    <div class="d-flex align-items-baseline">
                        <label for="cuenta" class="mr-2 mb-0">Número de Cuenta:</label>
                        <input  class="mb-0" type="number"  required>
                    </div>

                    <div class="d-flex justify-content-center align-items-center" style="height: 8vh;">
                        <button type="submit" class="btn btn-primary">Consultar</button>
                    </div>
                    <div class="bg-white text-dark">
                    <div class="d-flex align-items-baseline">
                                <label class="mr-2 mb-0">Saldo Disponible:</label>
                                <p class="mb-0">$0</p>
                            </div>
                            <div class="d-flex align-items-baseline mt-2">
                                <label class="mr-2 mb-0">Créditos Disponibles:</label>
                                <p class="mb-0">$0</p>
                            </div>
                    </div>
                    <label for="monto">Trassaciones recientes:</label>
                    <table class="table">
                    <caption>List of users</caption>
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
                    

                  

                    <div class="buttons">
                    <button type="submit" class="btn retirar-btn mr-4">Descargar PDF</button>
                    <button type="submit" class="btn simular-btn ml-4">Descargar CSV</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection