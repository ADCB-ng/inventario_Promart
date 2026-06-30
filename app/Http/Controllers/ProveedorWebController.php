<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;

class ProveedorWebController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();

        return view('proveedores.index', compact('proveedores'));
    }
}