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
               Bienvenid@  {{ Auth::user()->nombre }} a tu panel de control
                </h2>
                 <small class = "text-muted"> Rol [{{Auth::user()->rol}}]</small>
               </h2>
          
@stop

@section('content')
    Aqui van graficas..
@stop

