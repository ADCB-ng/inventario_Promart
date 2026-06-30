<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return Producto::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'lote' => 'required|string|max:255',
            'fecha_ingreso' => 'required|date',
            'proveedor_id' => 'required|exists:proveedores,id',
        ]);
        $producto = Producto::create($request->all());

        return response()->json($producto, 201);
    }

    public function show(string $id)
    {
        return Producto::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
         $producto = Producto::findOrFail($id);

    $request->validate([
        'nombre' => 'required|string|max:255',
        'lote' => 'required|string|max:255',
        'fecha_ingreso' => 'required|date',
        'proveedor_id' => 'required|exists:proveedores,id',
    ]);

    $producto->update($request->all());

    return response()->json($producto, 200);
    }

    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return response()->json([
            'mensaje' => 'Registro eliminado correctamente.'
        ], 200);
    }
}