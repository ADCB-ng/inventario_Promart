<?php

namespace App\Http\Controllers;

use App\Models\Empleado;

class EmpleadoWebController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();

        return view('empleados.index', compact('empleados'));
    }
}