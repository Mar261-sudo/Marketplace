<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Ciudad;
use App\Models\Usuario;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   

        $data = Producto::all();
        $categoria = Categoria::all();
        $ciudad = Ciudad::all();
        $usuario = usuario::all();
        return view('productos.index', compact('data','categoria','ciudad','usuario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = new Producto();
        
        $productos->nombre = $request->nombre;
        $productos->slug = $request->slug;
        $productos->descripcion = $request->descripcion;
        $productos->valor = $request->valor;
        $productos ->imagen = $request-> imagen;
        $productos->estado = $request->estado;
        $productos->estado_producto = $request->estado_producto;
        $productos->categoria_id = $request->categoria_id;
        $productos->usuario_id = $request->usuario_id;
        $productos->ciudad_id = $request->ciudad_id;
        $productos->save();

     return redirect('productos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
