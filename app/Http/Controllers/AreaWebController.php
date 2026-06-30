<?php

namespace App\Http\Controllers;

use App\Models\Area;

class AreaWebController extends Controller
{
    public function index()
    {
        $areas = Area::all();

        return view('areas.index', compact('areas'));
    }
}