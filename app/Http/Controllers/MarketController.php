<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Producto;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {      

        $categorias = Categoria :: where('estado', 1)
            ->has('productos')
            ->orderBy('nombre', 'asc')
            ->get();
        // dd($categorias->toArray());

        return view('market.index', compact('categorias'));
    }


    public function detalle($id)
    {

        $productos = Producto::where('id', $id)
            ->where('estado', 1)
            ->with(['categoria', 'usuario'])
            ->firstOrFail();
        
        return view('market.detalle', compact('productos'));

     }
}
