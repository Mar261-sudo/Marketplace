<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;


Route::get('/', function () {
    return view('layout');
});

// Route::get('/categorias', [CategoriaController::class,'index']);
Route:: resource('categorias', CategoriaController::class);
// Route :: get('/categoria/{id}/edit',[CategoriaController::class, 'edit'])-> name('categoria.edit');
Route:: resource('ciudades', CiudadesController::class);
Route:: resource('comentarios', ComentariosController::class);
Route:: resource('productos', ProductosController::class);
Route:: resource('usuarios', UsuariosController::class);


