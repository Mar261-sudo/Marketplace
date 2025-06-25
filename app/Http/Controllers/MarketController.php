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

    /**
     * Show the form for creating a new resource.
     */
   
}
