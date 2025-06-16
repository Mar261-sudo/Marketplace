@extends('layout')

@section('styles')
  <style>
    .error{
      color: red;
      font-size: 0.875em;
      margin-top: 10px;
    }
  </style>
@stop

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
                  <a href="{{url('comentarios')}}" class="btn btn-primary d-none d-sm-inline-block"  data-bs-target="#modal-report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    Volver
                  </a>
                </div>
              </div>
@stop

@section('content')
  
          <form id="comentario-form" action="{{ route('comentarios.update', ['comentario' => $comentario->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="row">
              <div class="col-lg-12 mb-3">
                <div>
                  <label class="form-label">Descripción</label>
                  <textarea class="form-control" rows="3" name="descripcion" required>{{ old('descripcion', $comentario->descripcion) }}</textarea>
                   @error('descripcion')
                    <div class="error">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <div>
                  <label class="form-label">Valoración</label>
                  <input type="number" class="form-control" name="valoracion" min="1" max="5" required value="{{ old('valoracion',$comentario->valoracion) }}">
                   @error('valoracion')
                    <div class="error">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <div>
                  <label class="form-label">Estado</label>
                  <select class="form-select" name="estado" required value="{{ old('estado') }}">
                    <option value="1" {{ old('estado', $comentario->estado) == "1" ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ old('estado', $comentario->estado) == "0" ? 'selected' : '' }}>Inactiva</option>
                </select>
                 @error('estado')
                    <div class="error">{{ $message }}</div>
                  @enderror

                </div>
              </div>
              <select name="usuario_id" class="form-control">
                   @foreach($usuario as $usuario)
                   <option value="{{$usuario->id}}"
                   {{ old('usuario_id', $comentario->usuario_id) == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->nombre }}
                        </option>
                    @endforeach
              </select>

            <select name="producto_id" class="form-control">
                @foreach($producto as $producto)
                <option value="{{ $producto->id }}"
                {{ old('producto_id', $comentario->producto_id) == $producto->id ? 'selected' : '' }}>
                    {{ $producto->nombre }}
                </option>
                @endforeach
            </select>

          </form>
            
          </div>
          <div class="modal-footer">
            <a href="{{ url('comentarios') }}" class="btn btn-link link-secondary">
              Cancelar
            </a>
            <button type="submit" class="btn btn-primary ms-auto" id="btn-modal" form="comentario-form"> 
              Enviar
            </button>
          </div>
@stop

