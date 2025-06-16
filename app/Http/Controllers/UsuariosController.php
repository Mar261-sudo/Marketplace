<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Ciudad;
use Validator;

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
        $validator = Validator::make($request->all(),[

            'nombre' => 'required|string|max:255|unique:usuarios',
            'movil' => 'required|string|max:255|unique:usuarios',
            'email' => 'required|string|max:255|unique:usuarios',
            'password' => 'required|min:6',
            'rol' => 'required|in :admin, vendedor',
            'estado' => 'required|boolean',
            'ciudad_id' => 'required|exists:ciudades,id',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
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
        $usuario = Usuario::findOrFail($id);
        $ciudades = Ciudad::all();

        return view('usuarios.edit', compact('usuario', 'ciudades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'nombre' => 'required|string|max:255|unique:usuarios,nombre,'.$id,
            'movil' => 'required|string|max:255|unique:usuarios,movil,'.$id,
            'email' => 'required|string|max:255|unique:usuarios,email,'.$id,
            'password' => 'nullable|min:6',
            'rol' => 'required|in:admin,vendedor',
            'estado' => 'required|boolean',
            'ciudad_id' => 'required|exists:ciudades,id',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $usuario = Usuario::findOrFail($id);
        
        $usuario->nombre = $request->nombre;
        $usuario->movil = $request->movil;
        $usuario->email = $request->email;
        if ($request->filled('password')) {
            $usuario->password = bcrypt($request->password);
        }
        $usuario->rol = $request->rol;
        $usuario->estado = $request->estado;
        $usuario->ciudad_id = $request->ciudad_id;
        $usuario->save();

        return redirect('usuarios')
            ->with('message', 'Usuario actualizado correctamente.')
            ->with('type', 'success');
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $usuario = Usuario::findOrFail($id);

    // Verificar si el usuario tiene productos asociados
    if ($usuario->productos()->count() > 0) {
        return redirect('usuarios')
            ->with('message', 'No se puede eliminar el usuario porque tiene productos asignados.')
            ->with('type', 'danger');
    }

    // Si no tiene productos, se elimina
    $usuario->delete();

    return redirect('usuarios')
        ->with('message', 'Usuario eliminado correctamente.')
        ->with('type', 'success');
}
}
