<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpleadoWebController;
use App\Http\Controllers\ProductoWebController;
use App\Http\Controllers\ProveedorWebController;
use App\Http\Controllers\AreaWebController;
use App\Http\Controllers\EstadoWebController;
use App\Http\Controllers\PedidoProveedorWebController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/empleados', [EmpleadoWebController::class, 'index']);
Route::get('/productos', [ProductoWebController::class, 'index']);
Route::get('/proveedores', [ProveedorWebController::class, 'index']);
Route::get('/areas', [AreaWebController::class, 'index']);
Route::get('/estados', [EstadoWebController::class, 'index']);
Route::get('/pedido-proveedores', [PedidoProveedorWebController::class, 'index']);