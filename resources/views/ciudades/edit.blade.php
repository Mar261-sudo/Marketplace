@extends('layout')

@section('styles')
    <style>
      .error{
        color : red;
        font-size: 0.875em;
        margin-top: 10px;
      }
    </style>
@stop

@section('header')
   <div class="col">
                <h2 class="page-title">
               Ciudad
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
                  <a href="{{ url('ciudades') }}" class="btn btn-primary d-none d-sm-inline-block"data-bs-target="#modal-report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    Volver
                  </a>
                </div>
              </div>
@stop

@section('content')

    <form id = "ciudades-form" action= "{{ route('ciudades.update',['ciudade'=> $ciudad->id]) }}" method ="POST" enctype ="multipart/form-data">
     @csrf
    @method('PUT')  


            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ej: Palmira" required autofocus value ="{{ old('nombre' , $ciudad->nombre)}}" >
              @error('nombre')
                    <div class="error">{{ $message }}</div>
                  @enderror
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <div>
                  <label class ="form-label">Estado</label>
                 <select name="estado" class="form-control">
                    <option value="">Selecciona Estado</option>
                    <option value="1" {{ old('estado', $ciudad->estado) == "1" ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ old('estado', $ciudad->estado) == "0" ? 'selected' : '' }}>Inactiva</option>
                  </select>

                  
                @error('estado')
                    <div class="error">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
          </form>
            
          </div>
          <div class="modal-footer">
            <a href="{{ url('ciudades') }}" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancelar
            </a>
            <button type ="submit" class= "btn btn-primary ms-auto" id= "btn-modal" form="ciudades-form"> 
              Enviar
            </button>
          </div>
@stop
