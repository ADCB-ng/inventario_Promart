<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Proveedor::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ruc' => 'required|string|size:11',
            'fecha_alianza' => 'required|date',
        ]);
               
        $proveedor = Proveedor::create($request->all());
        return response()->json($proveedor, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return Proveedor::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $proveedor = Proveedor::findOrFail($id);

    $request->validate([
        
        'nombre' => 'required|string|max:255',
        'ruc' => 'required|string|size:11',
        'fecha_alianza' => 'required|date',
    ]);
    

    $proveedor->update($request->all());

    return response()->json($proveedor, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return response()->json([
            'mensaje' => 'Registro eliminado correctamente.'
        ], 200);
    }
}
