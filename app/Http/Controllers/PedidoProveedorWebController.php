<?php

namespace App\Http\Controllers;

use App\Models\PedidoProveedor;

class PedidoProveedorWebController extends Controller
{
    public function index()
    {
        $pedidos = PedidoProveedor::all();

        return view('pedidos.index', compact('pedidos'));
    }
}
