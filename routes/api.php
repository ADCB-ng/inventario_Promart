<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\EmpleadoController;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\AreaController;
use App\Http\Controllers\Api\ProveedorController;
use App\Http\Controllers\Api\EstadoController;
use App\Http\Controllers\Api\PedidoProveedorController;

Route::apiResource('empleados', EmpleadoController::class);
Route::apiResource('productos', ProductoController::class);
Route::apiResource('areas', AreaController::class);
Route::apiResource('proveedores', ProveedorController::class);
Route::apiResource('estados', EstadoController::class);
Route::apiResource('pedido-proveedores', PedidoProveedorController::class);