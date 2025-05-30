<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Ciudad;

class UsuariosController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $usuarios = Usuario::with('ciudad')->get ();
         $ciudades = Ciudad::all();
 
        return view('usuarios.index', compact('usuarios','ciudades'));

       
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
        $usuarios = new Usuario();
        
        $usuarios->nombre = $request->nombre;
        $usuarios->movil = $request->movil;
        $usuarios->email = $request->email;
        $usuarios->password = $request->password;
        $usuarios->rol = $request->rol;
        $usuarios->estado = $request->estado;
        $usuarios->ciudad_id = $request->ciudad_id;
        $usuarios->save();

     return redirect('usuarios');
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
