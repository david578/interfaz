@extends('layouts.plantilla')

@section('contenido')
    <div class="div-informacion-personal">
        <h2 style="text-align: center;" >Eliminar Cuenta</h2>
        <div class="form-check">
            <label class="form-check-label" for="flexRadioDefault1">
                Desactivacion de cuenta
            </label>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        </div>
            
    </div>

    <div class="div-eliminar-cuenta">
        <div class="form-check">
            <label class="form-check-label" for="flexRadioDefault1">
                Eliminacion de cuenta
            </label>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        </div>
        <a class="btn btn-primary" id="abrirModal" >Siguiente</a>      
    </div>
    
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
                  <label for="labelCedula">Contraseña</label>
                  <input type="text" class="form-control" id="labelNombre" >
                </div>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection