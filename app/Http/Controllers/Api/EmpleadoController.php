<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        return Empleado::all();
    }

    public function store(Request $request)
    {
       $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'fecha_ingreso' => 'required|date',
            'dni' => 'required|string|size:8',
            'cargo' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
        ]);

        $empleado = Empleado::create($request->all());

        return response()->json($empleado, 201);
    }

    public function show(string $id)
    {
        return Empleado::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $empleado = Empleado::findOrFail($id);

    $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'fecha_ingreso' => 'required|date',
            'dni' => 'required|string|size:8',
            'cargo' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
    ]);

    $empleado->update($request->all());

    return response()->json($empleado, 200);
    }

    public function destroy(string $id)
    {
          $empleado = Empleado::findOrFail($id);

    $empleado->delete();

    return response()->json([
        'mensaje' => 'Registro eliminado correctamente.'
        ], 200);
    }
}