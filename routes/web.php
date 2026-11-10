<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\ProductoController;

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/prueba', [ProductoController::class, 'storePrueba']);

Route::get('/productos/vista', function () {
    $productos = \App\Models\Producto::all();
    return view('productos.index', compact('productos'));
});
