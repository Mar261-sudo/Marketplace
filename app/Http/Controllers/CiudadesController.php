<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Ciudad;
use Validator;
class CiudadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Ciudad::all();
        return view('ciudades.index', compact ('data'));
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

                'nombre' => 'required| max: 255|unique :ciudades',
                'estado'  =>'required',
            ]);

            if($validator -> fails()){

             return back()->withErrors($validator)->withInput();

            }


        $ciudades = new Ciudad();
        $ciudades->nombre = $request->nombre;
        $ciudades->estado = $request->estado;
        
        $ciudades->save();

     return redirect('ciudades');
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
