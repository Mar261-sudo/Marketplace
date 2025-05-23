<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Comentario;
class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
             $data = Comentario::all();
        return view('comentarios.index', compact('data'));

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
        $comentarios = new Comentario();
        
        $comentarios->descripcion = $request->descripcion;
        $comentarios->valoracion = $request->valoracion;
        $comentarios->estado = $request->estado;
        $comentarios->usuario_id = $request->usuario_id;
        $comentarios->producto_id = $request->producto_id;
        $comentarios->save();

     return redirect('comentarios');
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
