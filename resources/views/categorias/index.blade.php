@extends('layout')


@section('styles')
  <style>
    .error{
      color : red;
      font-size: 0.875em;
      margin-top: 10px;
    }

    .img-category{
      width: 32px;
      height: 32px;
      object-fit: cover;
      border-radius: 50px;
      border: 1px solid #ddd;
      box-shadow: 5px 5px 5px;
    }
  </style>
@stop



@section('header')
   <div class="col">
                <h2 class="page-title">
               Categorias
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
              <th scope ="col">Imagen</th>
              <th scope ="col">Nombre</th>
              <th scope = "col">Url</th>
              <th scope ="col">Estado</th>
              <th scope ="col">Acciones</th>
            </tr>
        </thead>  
        <tbody>
          @foreach ($data as $categoria)
              <tr>
                <td> 
                  @if ($categoria ->imagen)
                   <img src="{{url( 'img/Categorias/' . $categoria->imagen) }}"class = "img-category">
                 @else
                  <img src="{{ url('img/Categorias/predeterminada.png') }}" class="img-category">
                  @endif
                </td>
                <td>{{$categoria ->nombre}}</td>
                <td>{{$categoria ->slug}}</td>
                <td>{{$categoria ->estado}}</td>
                <td>{{$categoria ->acciones}}</td>
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
            <h5 class="modal-title">Nueva Categoria</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <form id = "categoria-form" action= "{{ url('categorias') }}" method ="POST" enctype ="multipart/form-data">

            @csrf

            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ej: Top" required autofocus value ="{{ old('nombre') }}">
              @error('nombre')
                <div class = "error" >{{ $message }}</div>
              @enderror
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <div>
                  <label class ="form-label">Slug</label>
                  <input type="text"class = "form-control" name ="slug" id="slug" required value ="{{ old('slug')}}">
                   @error('slug')
                    <div class="error">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="col-md-6">
                <div>
                  <label class ="form-label">Imagen</label>
                  <input type="file"class ="form-control" name ="imagen" accept="image/*">
                   @error('imagen')
                    <div class = "error">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="col-lg-12">
                <div>
                  <label class="form-label">Descripción</label>
                  <textarea class="form-control" rows="3" name = "descripcion">{{ old('descripcion')}}</textarea>
                   @error('descripcion')
                    <div class = "error">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
          </form>
            
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancelar
            </a>
            <button type ="submit" class= "btn btn-primary ms-auto" id= "btn-modal" form="categoria-form"> 
              Enviar
            </button>
          </div>
        </div>
      </div>
    </div>
@stop

@section('scripts')
<script>
  document.getElementById('nombre').addEventListener('input', function() {
    const nombre = this.value;
    const slug = generarSlug(nombre);
    document.getElementById('slug').value = slug;
  });

  function generarSlug(text) {
    return text
      .toString() // Convertir a string
      .toLowerCase() // Convertir a minúsculas
      .trim() // Eliminar espacios al inicio y final
      .replace(/\s+/g, '-') // Reemplazar espacios con guiones
      .replace(/[^\w\-]+/g, '') // Eliminar caracteres no alfanuméricos
      .replace(/\-\-+/g, '-'); // Reemplazar múltiples guiones con uno solo
  }
</script>
@stop
