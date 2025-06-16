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
               Usuario
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
                  <a href="{{ url('usuarios') }}" class="btn btn-primary d-none d-sm-inline-block"  data-bs-target="#modal-report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    Volver
                  </a>
                </div>
    </div>
@stop


@section('content')

<form id="usuario-form" action="{{ route('usuarios.update', ['usuario' => $usuario->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <!-- Campo Nombre -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" required value="{{ old('nombre', $usuario->nombre) }}">
            @error('nombre')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Móvil -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Móvil</label>
            <input type="tel" class="form-control" name="movil" required value="{{ old('movil', $usuario->movil) }}">
            @error('movil')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Email -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required value="{{ old('email', $usuario->email) }}">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Password -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required value="{{ old('password', $usuario->password) }}">
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Rol -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Rol</label>
            <select name="rol" class="form-control" required>
                <option value="admin" {{ old('rol', $usuario->rol) == 'admin' ? 'selected' : '' }}>Administrador</option>
                <option value="vendedor" {{ old('rol', $usuario->rol) == 'vendedor' ? 'selected' : '' }}>Vendedor</option>
            </select>
            @error('rol')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Estado -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" required value="{{ old('estado', $usuario->estado) }}">
            @error('estado')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Ciudad ID -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Ciudad ID</label>
            <select name="ciudad_id" class="form-control" required>
                <option value="">Seleccionar Ciudad:</option>
                @foreach($ciudades as $ciudad)
                    <option value="{{ $ciudad->id }}" {{ old('ciudad_id', $usuario->ciudad_id) == $ciudad->id ? 'selected' : '' }}>
                        {{ $ciudad->nombre }}
                    </option>
                @endforeach
            </select>
            @error('ciudad_id')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
    </div>
</form>

</div>
<div class="modal-footer">
    <a href="{{ url('usuarios') }}" class="btn btn-link link-secondary">
        Cancelar
    </a>
    <button type="submit" class="btn btn-primary ms-auto" form="usuario-form">
        Guardar Usuario
    </button>
</div>

</body>
</html>
@stop



