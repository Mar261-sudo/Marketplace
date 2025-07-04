<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Comentario;
use App\Models\Producto;
use App\Models\Usuario;
use Validator;
class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = Comentario::all();
         $producto = Producto ::all();
         $usuario = Usuario :: all();
        return view('comentarios.index', compact('data','producto','usuario'));

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
        $validator = Validator::make($request->all(),[

            'descripcion' => 'required|max : 255',
            'valoracion' => 'required|max:11',
            'estado' => 'required|boolean',
            'usuario_id' => 'required|exists:usuarios,id',
            'producto_id' => 'required|exists:productos,id',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
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
        $comentario = Comentario::findOrFail($id);
        $producto = Producto::all();
        $usuario = Usuario::all();
     
        return view('comentarios.edit', compact('comentario', 'producto', 'usuario' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'descripcion' => 'required|max:255',
            'valoracion' => 'required|max:11',
            'estado' => 'required|boolean',
            'usuario_id' => 'required|exists:usuarios,id',
            'producto_id' => 'required|exists:productos,id',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $comentario = Comentario::findOrFail($id);
        $comentario->descripcion = $request->descripcion;
        $comentario->valoracion = $request->valoracion;
        $comentario->estado = $request->estado;
        $comentario->usuario_id = $request->usuario_id;
        $comentario->producto_id = $request->producto_id;
        $comentario->save();

        return redirect('comentarios')
            ->with('message', 'Comentario actualizado correctamente.')
            ->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    $comentario = Comentario::findOrFail($id);

    if ($comentario->producto) {
        return redirect()->route('comentarios.index')
            ->with('message', 'No se puede eliminar el comentario porque está asociado a un producto.')
            ->with('type', 'danger');
    }

    $comentario->delete();

    return redirect()->route('comentarios.index')
        ->with('message', 'Comentario eliminado correctamente.')
        ->with('type', 'success');
}

    }
    

