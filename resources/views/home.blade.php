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
                 Hola me alegra que estes aqui, este es tu espacio de control {{ Auth::user()->nombre }} 
                </h2>
                 <small class = "text-muted"> Tu rol es de  [{{Auth::user()->rol}}]</small>
               </h2>
            </div>
@stop

@section('content')
    <div class="card shadow-sm">
        <div class="card-body text-center">
            <!-- Ícono SVG decorativo -->
            <div class="mb-3">
               <div class="mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#dc3545" class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                    <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
                </svg>
            </div>

            </div>

            <!-- Título y número -->
            <h4 class="mb-0">Total de productos publicados</h4>
            <p class="display-5 text-primary">
                {{ \App\Models\Producto::where('usuario_id', auth()->id())->count() }}
            </p>

            <!-- Subtexto -->
            <p class="text-muted">¡Sigue publicando para llegar a más compradores!</p>
        </div>
        

    </div>
@stop




