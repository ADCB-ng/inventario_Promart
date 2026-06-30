<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class ProductoWebController extends Controller
{
    public function index()
    {
        $productos = Producto::all();

        return view('productos.index', compact('productos'));
    }
}