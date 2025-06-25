<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MarketController;


Route::get('/', function () {
    if (Auth::check()) 
        return redirect('/home');
    
    return view('login');
})->name('login');

Route::get('/login ', function () {
    if (Auth::check()) 
        return redirect('/home');
    
    return view('/login');
});


Route::get('/register', function () {
    return view('register');
})->name('register');


Route::get('/terminos', function () {
    return view('terminos');
})->name('terminos');



Route::post('/register', [LoginController::class,'register']);
Route::post('/check', [LoginController::class,'check']);

Route::middleware(['auth'])->group(function(){

Route::get('/home', function () {
    return view('home');
});

Route::get('/logout', [LoginController::class,'logout']);

// Route::get('/categorias', [CategoriaController::class,'index']);
Route:: resource('categorias', CategoriaController::class);
// Route :: get('/categoria/{id}/edit',[CategoriaController::class, 'edit'])-> name('categoria.edit');
Route:: resource('ciudades', CiudadesController::class);
Route:: resource('comentarios', ComentariosController::class);
Route:: resource('productos', ProductosController::class);
Route:: resource('usuarios', UsuariosController::class);

});

// rutas vistas

Route::get('/market', function () {
    return view('market.index');
});

Route::get('/market', [MarketController::class, 'index'])->name('market.index');

