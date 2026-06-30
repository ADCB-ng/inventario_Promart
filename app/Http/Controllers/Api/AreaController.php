<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Area::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'nombre' => 'required|string|max:255',
        ]);
          $area = Area::create($request->all());
          return response()->json($area, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         return Area::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $area = Area::findOrFail($id);

    $request->validate([
            'nombre' => 'required|string|max:255',
    ]);

    $area->update($request->all());

    return response()->json($area, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $area = Area::findOrFail($id);

    $area->delete();

    return response()->json([
        'mensaje' => 'Registro eliminado correctamente.'
    ], 200);
    }
}
