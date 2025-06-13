<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Producto;

use Validator;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Categoria::all();
        return view('categorias.index',compact('data'));
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
        $validator = Validator::make($request-> all(),[

            'nombre' => 'required| max: 255|unique:categorias',
            'slug' => 'required|unique:categorias',
            'descripcion' => 'nullable| max: 255',
            'imagen' => 'nullable|image',
        ]); 
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->slug = $request->slug;
        $categoria ->imagen = $request-> imagen;
        $categoria->descripcion = $request->descripcion;


        if($request->hasFile('imagen')){
            $file = $request -> file('imagen');
            $filename = time() . '.'. $file ->getClientOriginalExtension();
            $file -> move(public_path('img/Categorias'), $filename);
            $categoria ->imagen = $filename;
        }else{
            $categoria-> imagen = null;
        }


        $categoria->save();
        return redirect('categorias')
                   ->with('message','se creo exitosamente')
                   -> with('type','succes');                                
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
        $categoria = Categoria:: findOrFail($id);
        // dd($categoria ->toArray());
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validator = Validator::make($request-> all(),[

            'nombre' => 'required| max: 255|unique:categorias,nombre,'. $id,
            'slug' => 'required|unique:categorias,slug,'. $id,
            'descripcion' => 'nullable| max: 255',
            'imagen' => 'nullable|image',
        ]); 
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $categoria = Categoria::findOrFail($id);
        $categoria->nombre = $request->nombre;
        $categoria->slug = $request->slug;
        $categoria ->imagen = $request-> imagen;

        $categoria->descripcion = $request->descripcion;
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img/Categorias'), $filename);
            
            $categoria->imagen = $filename;
        }else {
             $categoria-> imagen = null;

        }
         $categoria->save();
        return redirect('categorias')
                   ->with('message','categoria editada exitosamente')
                   -> with('type','succes');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
    
      $categoria = Categoria::findOrFail($id);

      if($categoria->productos()->count()> 0){
        return redirect('categorias')
                ->with('message','No se puede eliminar porque tiene productos')
                ->with('type','danger');
      }
     $categoria->delete();
     return redirect('categorias')
          ->with('message','Se elimino exitosamente')
          ->with('type','danger');


    }
}
