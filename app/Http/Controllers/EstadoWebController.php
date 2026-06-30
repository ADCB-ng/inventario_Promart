<?php

namespace App\Http\Controllers;

use App\Models\Estado;

class EstadoWebController extends Controller
{
    public function index()
    {
        $estados = Estado::all();

        return view('estados.index', compact('estados'));
    }
}