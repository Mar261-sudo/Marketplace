<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Ciudad;
use App\Models\Usuario;
use Validator;

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
        $validator = Validator::make($request->all(),[
            'nombre' => 'required|string|max:255|unique:productos',
            'slug' => 'required|string|max:255|unique:productos,slug',
            'descripcion' => 'nullable|string|max:255',
            'valor' => 'required|numeric|min:0|max:99999999.99',
            'imagen' => 'nullable|image',
            'estado' => 'required|boolean',
            'estado_producto' => 'required|in:nuevo,poco uso,usado',
            'categoria_id' => 'required|exists:categorias,id',
            'usuario_id' => 'required|exists:usuarios,id',
            'ciudad_id' => 'required|exists:ciudades,id',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
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





        
        if($request->hasFile('imagen')){
            $file = $request -> file('imagen');
            $filename = time() . '.'. $file ->getClientOriginalExtension();
            $file -> move(public_path('img/Productos/'), $filename);
            $productos ->imagen = $filename;
        }else{
            $productos-> imagen = null;

        }



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
