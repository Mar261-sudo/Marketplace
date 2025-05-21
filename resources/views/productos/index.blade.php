@extends('layout')



@section('header')
   <div class="col">
                <h2 class="page-title">
               Producto
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
              <th scope ="col">Slug</th>
              <th scope ="col">Descripcion</th>
              <th scope ="col">Valor</th>
              <th scope ="col">Imagen</th>
              <th scope ="col">Estado Producto</th>
              <th scope ="col">Categoria ID</th>
              <th scope ="col">Usuario ID</th>
              <th scope ="col">Ciudad ID</th>
            </tr>
        </thead>  
        <tbody>
          @foreach ($data as $productos)
              <tr>
                <td>{{$productos ->nombre}}</td>
                <td>{{$productos->slug}}</td>
                <td>{{$productos->descripcion}}</td>              
                <td>{{$productos->valor}}</td>
                <td>{{$productos->imagen}}</td>
                <td>{{$productos->estado_producto}}</td>
                <td>{{$productos->categoria_id}}</td>
                <td>{{$productos->usuario_id}}</td>
                <td>{{$productos->ciudad_id}}</td>
              </tr>
          @endforeach
        </tbody></table>
      
    </body></html>
@stop
