@extends('layout')
@section('styles')

  <link rel="stylesheet" href="{{ url('css/lightbox.min') }}">

  <style>
    


    .error{
      color: red;
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
                <td> 
                @if ($productos->imagen)
                  <a href="{{ url('img/Productos/' . $productos->imagen) }}" data-lightbox="{{ $productos->nombre }}" data-title="{{ $productos->nombre }}">
                    <img src="{{ url('img/Productos/' . $productos->imagen) }}" class="img-category">
                  </a>
                @else
                  <img src="{{ url('img/Productos/defecto.png') }}" class="img-category">
                @endif

                </td>
                <td>{{$productos->estado_producto}}</td>
                <td>{{$productos->categoria_id}}</td>
                <td>{{$productos->usuario_id}}</td>
                <td>{{$productos->ciudad_id}}</td>
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
            <h5 class="modal-title">Nuevo Producto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <form id = "producto-form" action= "{{ url('productos') }}" method ="POST" enctype ="multipart/form-data">

            @csrf

            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ej: Top" required autofocus value="{{ old ('nombre') }}">
               @error('nombre')
                    <div class="error">{{ $message }}</div>
               @enderror
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <div>
                  <label class ="form-label">Slug</label>
                  <input type="text"class = "form-control" name ="slug" id="slug" required values="{{ old('slug') }}">
                  @error('slug')
                    <div class="error">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div>
                  <label class ="form-label">Valor</label>
                  <input type="text"class = "form-control" name ="valor" id="valor"required value="{{ old('valor')}}">
                  @error('valor')
                    <div class="error">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div>
                  <label class ="form-label">Imagen</label>
                  <input type="file"class ="form-control" name ="imagen" accept="image/*">
                 @error('imagen')
                    <div class="error">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <div>
                  <label class ="form-label">Estado Producto</label>
                  <select name = "estado_producto" class = "form-control">
                    <option value= "nuevo"> Nuevo</option>
                    <option value= "poco uso"> Poco uso</option>
                    <option value= "usado"> Usado</option>
                  </select>
                   @error('estado_producto')
                    <div class="error">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div>
                  <label class ="form-label">Estado</label>
                  <select name = "estado" class = "form-control">
                    <option value= "1"> Activo</option>
                    <option value= "0"> Inactivo</option>
                  </select>
                   @error('estado')
                    <div class="error">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              
              <div class = "col-md-6 mb-3">
               <label class="form-label">Categorias</label>
               <select name="categoria_id" class="form-control">
                  <option value="">Seleccionar Categoría</option>
                  @foreach($categoria as $categoria)
                      <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                  @endforeach
              </select>      
               @error('categoria_id')
                    <div class="error">{{ $message }}</div>
                  @enderror           
              </div>
              <div class = "col-md-6 mb-3">
               <label class="form-label">Usuario</label>
               <select name="usuario_id" class="form-control">
                  <option value="">Seleccionar Usuario</option>
                    @foreach($usuario as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                    @endforeach
              </select>
               @error('usuario_id')
                    <div class="error">{{ $message }}</div>
                  @enderror
              </div>
              <div class = "col-md-6 mb-3">
               <label class="form-label">Ciudad</label>
               <select name="ciudad_id" class="form-control">
                  <option value="">Seleccionar Ciudad</option>
                  @foreach($ciudad as $ciudad)
                      <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
                  @endforeach
                </select>
                 @error('ciudad_id')
                    <div class="error">{{ $message }}</div>
                  @enderror

              </div>


              <div class="col-lg-12">
                <div>
                  <label class="form-label">Descripción</label>
                  <textarea class="form-control" rows="3" name = "descripcion">{{ old('descripcion') }}</textarea>
                 @error('descripcion')
                    <div class="error">{{ $message }}</div>
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
            <button type ="submit" class= "btn btn-primary ms-auto" id= "btn-modal" form="producto-form"> 
              Enviar
            </button>
          </div>
        </div>
      </div>
    </div>
@stop

@section('scripts')

    <script src="{{ url('js/lightbox.min') }}"></script>
    
  <script>
  document.getElementById('nombre').addEventListener('input', function(e) {
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