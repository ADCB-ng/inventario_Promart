<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\EmpleadoController;

Route::get('/empleados', [empleadoController::class,'index']); 
route::post('/empleados',[empleadoController::class,'store']);

route::get('/productos',[productoController::class,'index']);
route::post('/productos',[productoController::class,'store']);
