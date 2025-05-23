@extends('layout')



@section('header')
   <div class="col">
                <h2 class="page-title">
               Comentario
               </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                  <!-- <span class="d-none d-sm-inline">
                    <a href="#" class="btn">
                      Productos
                    </a>
                  </span> -->
                  <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    Nuevo
                  </a>
                </div>
              </div>
@stop

@section('content')
    <table class ="ui celled table">
          <thead>
            <tr>
              <th scope ="col">Descripcion</th>
              <th scope ="col">Valoracion</th>
              <th scope ="col">Estado</th>
              <th scope ="col">Usuario ID</th>
              <th scope ="col">Producto ID</th>
            </tr>
        </thead>  
        <tbody>
          @foreach ($data as $comentarios)
              <tr>
                <td>{{$comentarios ->descripcion}}</td>
                <td>{{$comentarios->valoracion}}</td>
                <td>{{$comentarios->estado}}</td>              
                <td>{{$comentarios->usuario_id}}</td>
                <td>{{$comentarios->producto_id}}</td>
              </tr>
          @endforeach
        </tbody></table>
      
    </body></html>
@stop

@section('modals')
  <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nuevo Comentario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <form id="categoria-form" action="{{ url('comentarios') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
              <div class="col-lg-12 mb-3">
                <div>
                  <label class="form-label">Descripción</label>
                  <textarea class="form-control" rows="3" name="descripcion" required></textarea>
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <div>
                  <label class="form-label">Valoración</label>
                  <input type="number" class="form-control" name="valoracion" min="1" max="5" required>
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <div>
                  <label class="form-label">Estado</label>
                  <select class="form-select" name="estado" required>
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <div>
                  <label class="form-label">Usuario ID</label>
                  <input type="number" class="form-control" name="usuario_id" required>
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <div>
                  <label class="form-label">Producto ID</label>
                  <input type="number" class="form-control" name="producto_id" required>
                </div>
              </div>
            </div>
          </form>
            
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancelar
            </a>
            <button type="submit" class="btn btn-primary ms-auto" id="btn-modal" form="categoria-form"> 
              Enviar
            </button>
          </div>
        </div>
      </div>
    </div>
@stop
