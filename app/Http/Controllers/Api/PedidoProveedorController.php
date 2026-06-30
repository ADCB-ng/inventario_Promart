<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PedidoProveedor;

class PedidoProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PedidoProveedor::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_pedido' => 'required|date',
            'fecha_entrega' => 'required|date',
            'cantidad' => 'required|integer|min:1',
            'estado_id' => 'required|exists:estados,id',
            'proveedor_id' => 'required|exists:proveedores,id',
            'producto_id' => 'required|exists:productos,id',
            'empleado_id' => 'required|exists:empleados,id',
        ]);
        $pedidoProveedor = PedidoProveedor::create($request->all());
        return response()->json($pedidoProveedor, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return PedidoProveedor::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pedidoProveedor = PedidoProveedor::findOrFail($id);

        $request->validate([
         'fecha_pedido' => 'required|date',
         'fecha_entrega' => 'required|date',
         'cantidad' => 'required|integer|min:1',
         'estado_id' => 'required|exists:estados,id',
         'proveedor_id' => 'required|exists:proveedores,id',
         'producto_id' => 'required|exists:productos,id',
         'empleado_id' => 'required|exists:empleados,id',
        ]);

        $pedidoProveedor->update($request->all());

        return response()->json($pedidoProveedor, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $pedidoProveedor = PedidoProveedor::findOrFail($id);

    $pedidoProveedor->delete();

    return response()->json([
        'mensaje' => 'Registro eliminado correctamente.'
    ], 200);
    }
}
