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
              <th scope ="col">Nombre</th>
              <th scope ="col">Movil</th>
              <th scope ="col">Email</th>
              <th scope ="col">Password</th>
              <th scope ="col">Rol</th>
              <th scope ="col">Estado</th>
              <th scope ="col">Ciudad ID</th>
            </tr>
        </thead>  
        <tbody>
          @foreach ($usuarios as $usuarios)
              <tr>
                <td>{{$usuarios ->nombre}}</td>
                <td>{{$usuarios->movil}}</td>
                <td>{{$usuarios->email}}</td>              
                <td>{{$usuarios->password}}</td>
                <td>{{$usuarios->rol}}</td>
                <td>{{$usuarios->estado}}</td>
                <td>{{$usuarios->ciudad_id}}</td>
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
                <h5 class="modal-title">Nuevo Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="usuario-form" action="{{ route('usuarios.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <!-- Campo Nombre -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required value="{{ old('nombre') }}">
                            @error('nombre')
                             <div class="error">{{ $message }}</div>
                            @enderror
                        </div>


                        <!-- Campo Móvil -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Móvil</label>
                            <input type="tel" class="form-control" name="movil" required value="{{ old('movil') }}">
                            @error('movil')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Campo Email -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required value="{{ old('email') }}">
                            @error('email')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Campo Password -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required value="{{ old('password') }}">
                            @error('password')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Campo Rol (CORREGIDO) -->
                        <div class="col-md-6 mb-3">
                            <select name="rol" required>
                                <option value="admin">Administrador</option>
                                <option value="vendedor">Vendedor</option>
                            </select>
                            @error('rol')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Campo Estado -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Estado</label>
                           <input type="estado" class="form-control" name="estado" required value="{{ old('estado') }}">
                           @error('estado')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Campo Ciudad ID -->
                        <div class = "col-md-6 mb-3">
                            <label class="form-label">Ciudad ID</label>
                            <select name = "ciudad_id" class = "form- control" required value="´{{ old('ciudad_id') }}">
                                <option value = "">Selecionar Ciudad:</option>
                                @foreach($ciudades as $ciudad)
                                <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
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
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Cancelar
                </a>
                <button type="submit" class="btn btn-primary ms-auto" form="usuario-form">
                    Guardar Usuario
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

