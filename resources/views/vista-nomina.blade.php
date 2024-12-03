@extends('layouts.plantilla')

@section('contenido')
<div class="div-fondo-tabla">
    <div class="div-flex">
    <li>
        <a class="" href="{{route('hacer.transaccion')}}">
            <img src="flecha.png" style="width: 25px;">
        </a>
    </li>
    <li>
        <h3>Nomina</h3>
    </li>
    </div>
    <div class="div-buscar">
        <input class="form-control mt-2 mb-2  search_tables" style="width: 500px;" data-table="table-users"  type="text" placeholder="Search">
        <a class="btn btn-primary" href=""><h6>Buscar</h6></a>
    </div>


    <table class="table">
        <h3>Resultados de busqueda</h3>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Numero de cuenta</th>
                <th scope="col">Cargo</th>
                <th scope="col">Sueldo</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>

        <tbody id="table-users">
            
            <tr class="fila">
                <td scope="row">1</td>
                <td scope="row">Juliana Gomez</td>
                <td scope="row">juliana@gmail.com</td>
                <td scope="row">7388229983277238</td>
                <td scope="row">Asesora comercial</td>
                <td scope="row">1.5000.000</td>
                <td scope="row"><a id="abrirModal" class="btn btn-primary">pagar</a></td>

            </tr>

        </tbody>
    </table>

    <div class="modal" id="miModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Diligencia-Form</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Formulario del modal -->
              <form action="" method="post">
                @csrf

                <div class="">
                  <label for="labelCedula">Nombre</label>
                  <input type="text" class="form-control" id="labelNombre" value="nombre">
                </div>

                <div class="">
                  <label for="labelCorreo">Correo</label>
                  <input type="text" class="form-control" id="labelCorreo" aria-describedby="" value="correo" name="cedula"> 
                </div>
                <div class="">
                  <label for="labelNumeroCuenta">Numero de cuenta</label>
                  <input type="text" class="form-control" id="labelNumeroCuenta" aria-describedby="" value="numero de cuenta" name="monto" > 
                </div>
                <div>
                  <label for="labelCargo">Cargo</label>
                  <input type="text" class="form-control" id="labeCargo" aria-describedby="" value="cargo" name="plazo" >
                </div>
                <!--<div>
                  <label for="labelCedula">Ingese su identificacion</label>
                  <input type="text" class="form-control" id="labelCedula" aria-describedby="" placeholder="C.c" name="cedula" >
                </div>-->
                <!--<div>
                  <label for="labelDate">Fecha de nacimiento</label>
                  <input type="date" class="form-control" id="labelDate" aria-describedby="" placeholder="Fech.Nacimiento" name="fechnacimiento" >
                </div>-->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Siguiente</button>
                </div>
              </form>
              <!-- Fin del formulario modal -->
                  
            </div>
            
            </div>
          </div>
        </div>
      </div>
      <!-- Fin del codigo modal -->


      <!-- Script para activar el modal -->
      <script>
         document.addEventListener('DOMContentLoaded', function() {
        // Seleccionamos el enlace y el modal
          const abrirModal = document.getElementById('abrirModal');
          const miModal = new bootstrap.Modal(document.getElementById('miModal'));

        // Escuchar el evento de clic en el enlace
          abrirModal.addEventListener('click', function(event) {
            event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
            miModal.show(); // Mostrar el modal
          });
        });
      </script>
      <!-- Fin del script para activar el modal -->
</div>

@endsection